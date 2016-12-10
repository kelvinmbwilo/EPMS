<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institutions extends Model
{
    protected $table = 'institutions';
    protected $guarded = 'id';


    public function employee()
    {
        return $this->belongsTo('App\Employee', 'employee_id', 'id');
    }


    public function children()
    {
        return $this->HasMany('App\Institutions', 'parent-id', 'id');
    }


    public function parent()
    {
        return $this->belongsTo('App\Institutions', 'parent-id', 'id');
    }

}
