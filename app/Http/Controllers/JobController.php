<?php

namespace App\Http\Controllers;

use App\Job;
use App\Item;

use App\Http\Requests\JobRequest;
use Illuminate\Http\Request;

use DB;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Job $model)
    {
        return view('jobs.index', ['jobs' => $model->paginate(25)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = Item::orderBy('name', 'asc')->get();
        return view('jobs.create', compact('job', 'items'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JobRequest $request, Job $model)
    {
      DB::beginTransaction();

      // Create data ke table jobs terlebih dahulu
      $job = $model->create($request->only('name', 'type', 'category'));
      if (!$job) {
        DB::rollback();
      }

      // menyiapkan array untuk dipost ke table job details
      $data = [];
      $subtotal_job = 0;
      foreach ($request->item_id as $key => $value) {
        $tmp = [
          'job_id'    => $job->id,
          'item_id'   => $value,
          'coefisien' => $request->coefisien[$key],
          'price'     => $request->price[$key],
          'subtotal'  => $request->subtotal[$key]
        ];
        array_push($data, $tmp);
        $subtotal_job += $request->subtotal[$key];
      }

      // update subtotal_job
      $job->subtotal_job = $subtotal_job;
      $job->save();
      if (!$job) {
        DB::rollback();
      }

      // create data ke table jobs detail
      $job->items()->attach($data);
      if (!$job) {
        DB::rollback();
      }

      DB::commit();

      return redirect()->route('jobs.index')->withStatus(__('Job successfully created.'));
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
    public function edit(Job $job)
    {
        $items = Item::orderBy('name', 'asc')->get();
        return view('jobs.edit', compact('job', 'items'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(JobRequest $request, Job $job)
    {
      DB::beginTransaction();

      $job->update($request->only('name', 'type', 'category'));
      if (!$job) {
        DB::rollback();
      }

      $job->items()->detach();
      if (!$job) {
        DB::rollback();
      }

      $data = [];
      $subtotal_job = 0;
      foreach ($request->item_id as $key => $value) {
        $tmp = [
          'job_id'    => $job->id,
          'item_id'   => $value,
          'coefisien' => $request->coefisien[$key],
          'price'     => $request->price[$key],
          'subtotal'  => $request->subtotal[$key]
        ];
        array_push($data, $tmp);
        $subtotal_job += $request->subtotal[$key];
      }

      // update subtotal_job
      $job->subtotal_job = $subtotal_job;
      $job->save();
      if (!$job) {
        DB::rollback();
      }

      $job->items()->attach($data);
      if (!$job) {
        DB::rollback();
      }

      DB::commit();

      return redirect()->route('jobs.index')->withStatus(__('Job successfully updated.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
