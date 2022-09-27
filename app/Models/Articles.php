<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    use HasFactory;

    public function user(){
        return $this->hasOne(User::class,'id');
    }

    public function avatar(){
        return $this->hasOne(Avatar::class,'id');
    }

}
