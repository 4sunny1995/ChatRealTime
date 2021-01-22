<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class MessageGroup extends Model
{
    use Notifiable,SoftDeletes;

    protected $fillable = ['deleted_at', 'id','group_id'];
}