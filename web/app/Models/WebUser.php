<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class WebUser extends Model
{
    protected $primaryKey = 'user_id';

    protected $guarded = ['user_id'];

    protected $table = 'webusers';

}
