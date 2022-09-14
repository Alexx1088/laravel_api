<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    use HasFactory;

    protected $fillable = [
    	'id',
		'slug',
		'name'
	];

	public function translations()
	{
		return $this->belongsToMany(Word::class, 'translations', 'word_id_a', 'word_id_z');
	}
}
