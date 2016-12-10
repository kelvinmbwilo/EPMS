<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'employee';
    protected $guarded = 'id';

    public function institution()
    {
        return $this->belongsTo('App\Institutions', 'institution_id', 'id');
    }

    public function pension()
    {
        return $this->belongsTo('App\PensionFund', 'pension_fund_id', 'id');
    }

    public function payments()
    {
        return $this->hasMany('App\Payments', 'employee_id', 'id');
    }

    public function history()
    {
        return $this->hasMany('App\EmployeeHistory', 'employee_id', 'id');
    }


}
