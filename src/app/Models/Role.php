<?php

namespace App\Models;

use Google\Service\Dfareporting\UserRole;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
	use HasFactory;

	public function permissions()
	{
		return $this->hasMany(UserRole::class, 'role_id', 'id');
	}
}
