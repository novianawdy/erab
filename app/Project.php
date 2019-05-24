<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded=['created_at','updated_at'];

    public function jobs()
    {
      return $this->belongsToMany('App\Job', 'project_details')->as('project_details')->withPivot('volume', 'subtotal_job', 'subtotal');
    }

    public function client()
    {
      return $this->belongsTo('App\Client');
    }
}
