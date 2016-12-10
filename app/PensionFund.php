<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PensionFund extends Model
{

    protected $guarded = 'id';
    protected $table = 'pension_fund';

    public function employees()
    {
        return $this->HasMany('App\Employee', 'pension_fund_id', 'id');
    }


    public function payments()
    {
        return $this->HasMany('App\Payments', 'pension_fund_id', 'id');
    }



}

