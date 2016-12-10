<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeHistory extends Model
{

    protected $guarded = 'id';
    protected $table = 'employee_history';


    public function employee()
    {
        return $this->belongsTo('App\Employee', 'employee_id', 'id');
    }
}

