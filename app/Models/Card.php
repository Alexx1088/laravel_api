<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;
    protected $guarded = false;


    public function desk_list() {

        return $this->belongsTo(DeskList::class );
    }

    public function tasks() {

        return $this->hasMany(Task::class );
    }
}
