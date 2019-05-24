<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $guarded=['created_at','updated_at'];

    public function jobs()
    {
      return $this->belongsToMany('App\Job', 'job_details')->as('job_details')->withPivot('coefisien', 'price', 'subtotal');
    }
}
