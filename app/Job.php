<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $guarded=['created_at','updated_at'];

    public function items()
    {
      return $this->belongsToMany('App\Item', 'job_details')->as('job_details')->withPivot('coefisien', 'price', 'subtotal');
    }

    public function projects()
    {
      return $this->belongsToMany('App\Project', 'project_details')->as('project_details')->withPivot('volume', 'subtotal_job', 'subtotal');
    }

    public function project_detail()
    {
      return $this->hasMany('App\ProjectDetail');
    }
}
