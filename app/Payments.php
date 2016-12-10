<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    protected $table = 'payments';
    protected $guarded = 'id';


    public function employee()
    {
        return $this->belongsTo('App\Employee', 'employee_id', 'id');
    }


    public function pension()
    {
        return $this->belongsTo('App\PensionFund', 'pension_fund_id', 'id');
    }


}
