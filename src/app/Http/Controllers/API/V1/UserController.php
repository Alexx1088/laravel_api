<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Resources\V1\UserResource;

use App\Http\Requests\V1\UserIndexRequest;
use App\Http\Requests\V1\UserStoreRequest;
use App\Http\Requests\V1\UserUpdateRequest;

use App\Models\User;

use DB;

class UserController extends Controller
{
	public function index(UserIndexRequest $request)
	{
		$users = User::query();

		$users = $users->paginate();

		return UserResource::collection($users);
	}

	public function show(User $user)
	{
		return new UserResource($user);
	}

	public function store(UserStoreRequest $request, User $user)
	{
		$user = User::create($request->validated());

		return response()->json(UserResource($user), 201);
	}

	public function update(UserUpdateRequest $request, User $user)
	{
		$user->update($request->validated());

		return new UserResource($user);
	}

	public function destroy(Request $request, User $user)
	{
		$user->delete();

		return response()->json(null, 204);
	}
}
