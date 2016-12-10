<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRoles extends Model
{
    protected $table = 'user_roles';
    protected $guarded = 'id';//

    public function users()
    {
        return $this->HasMany('App\User', 'user_role_id', 'id');

    }
}
