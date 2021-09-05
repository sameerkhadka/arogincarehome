<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class HomepageFaq extends Model
{
    protected $fillable = ['question', 'answer', 'order'];
}
