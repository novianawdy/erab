<?php

namespace App\Http\Controllers;

use App\Project;
use App\Client;
use App\Job;

use App\Http\Requests\ProjectRequest;
use Illuminate\Http\Request;

use DB;
use PDF;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Project $model)
    {
        return view('projects.index', ['projects' => $model->paginate(15)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jobs = Job::whereNotNull('subtotal_job')->orderBy('name', 'asc')->get();
        $clients = Client::orderBy('name', 'asc')->get();
        return view('projects.create', compact('clients','jobs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectRequest $request, Project $model)
    {
      DB::beginTransaction();

      // Create data ke table jobs terlebih dahulu
      $project = $model->create($request->only('name', 'client_id'));
      if (!$project) {
        DB::rollback();
      }

      // menyiapkan array untuk dipost ke table job details
      $data = [];
      $subtotal_project = 0;
      foreach ($request->job_id as $key => $value) {
        $tmp = [
          'project_id'    => $project->id,
          'job_id'        => $value,
          'volume'        => $request->volume[$key],
          'subtotal_job'  => $request->subtotal_job[$key],
          'subtotal'      => $request->subtotal[$key],
        ];
        array_push($data, $tmp);
        $subtotal_project += $request->subtotal[$key];
      }

      $project->subtotal_project = $subtotal_project;
      $project->save();
      if (!$project) {
        DB::rollback();
      }

      $project->jobs()->attach($data);
      if (!$project) {
        DB::rollback();
      }

      DB::commit();

      return redirect()->route('projects.index')->withStatus(__('Project successfully created.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
      $jobs = Job::whereNotNull('subtotal_job')->orderBy('name', 'asc')->get();
      $clients = Client::orderBy('name', 'asc')->get();
      return view('projects.edit', compact('project', 'clients', 'jobs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectRequest $request, Project $project)
    {
      DB::beginTransaction();

      $project->update($request->only('name', 'client_id'));
      if (!$project) {
        DB::rollback();
      }

      $project->jobs()->detach();
      if (!$project) {
        DB::rollback();
      }

      $data = [];
      $subtotal_project = 0;
      foreach ($request->job_id as $key => $value) {
        $tmp = [
          'project_id'    => $project->id,
          'job_id'        => $value,
          'volume'        => $request->volume[$key],
          'subtotal_job'  => $request->subtotal_job[$key],
          'subtotal'      => $request->subtotal[$key],
        ];
        array_push($data, $tmp);
        $subtotal_project += $request->subtotal[$key];
      }

      $project->subtotal_project = $subtotal_project;
      $project->save();
      if (!$project) {
        DB::rollback();
      }

      $project->jobs()->attach($data);
      if (!$project) {
        DB::rollback();
      }

      DB::commit();

        return redirect()->route('projects.index')->withStatus(__('Job successfully updated.'));
    }

    /**
     * Remove the specified user from storage
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\RedirectResponse
     */

    public function destroy($id)
    {
      $project = Project::where('id', $id)->first();
      $project->delete();

      return redirect()->route('projects.index')->withStatus(__('Project successfully deleted.'));
    }

    public function print(Project $project)
    {
      // dd($project = $project->with(['jobs' => function($job){
      //   $job->orderBy('type', 'asc')->with('project_detail.project')->get();
      // }])->first());
      $project = $project->with(['jobs' => function($job){
        $job->orderBy('type', 'asc')->with('project_detail.project')->get();
      }])->first();

      $pdf = PDF::loadview('print.project', ['project' => $project]);
      return $pdf->stream();
    }
}
