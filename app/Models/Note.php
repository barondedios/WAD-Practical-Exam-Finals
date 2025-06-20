<?php

namespace App\Models;
use app\Models\User;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{

    protected $fillable = ['title', 'body'];

    public function user()
{
    return $this->belongsTo(User::class);
}

}
