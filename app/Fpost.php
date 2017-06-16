<?php

namespace MEATLAB;

use Illuminate\Database\Eloquent\Model;

class Fpost extends Model
{
    protected $fillable = [
		'thread_id', 'content'
    ];
}
