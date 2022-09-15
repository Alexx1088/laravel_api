<?php

namespace App\Models;

use Google\Service\Dfareporting\UserRole;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
	use HasFactory;

    protected $table = 'roles';

    protected $fillable = [
        'id',
        'slug',
        'name'        
    ];

	public function users()
	{
		return $this->belongsToMany(User::class, 'users_roles');
	}

	public function permissions()
	{
		return $this->belongsToMany(Permission::class, 'roles_permissions');
	}
}
