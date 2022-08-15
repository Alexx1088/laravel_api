<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desk extends Model
{
    use HasFactory;
    protected $guarded = false;
    protected $fillable = ['name'];

    public function lists() {

        return $this->hasMany(DeskList::class );
    }





 /*   public function desk_lists() {

        return $this->hasMany(DeskList::class );
    }*/
}
