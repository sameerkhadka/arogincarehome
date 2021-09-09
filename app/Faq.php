<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Faq extends Model
{
    protected $fillable = ['question', 'answer', 'order','type','type_id'];
}
