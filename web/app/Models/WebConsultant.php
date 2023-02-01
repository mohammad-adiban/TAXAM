<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class WebConsultant extends Model
{
    protected $primaryKey = 'consultant_id';

    protected $guarded = ['consultant_id'];

    protected $table = 'webconsultants';

}
