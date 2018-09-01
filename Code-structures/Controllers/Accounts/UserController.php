<?php
namespace App\Http\Controllers\Accounts;

use App\Http\Controllers\Controller;
use \App\Models\Accounts\User;
use Dingo\Api\Http\Request;

class UserController extends Controller
{

	/**
	 * #ISSUE_NO Insert a new user.
	 * 
	 * POST /users
	 * {"email": "test@test.local"}
	 * 
	 * @param \App\Http\Controllers\Request $request
	 * @return {"error": "user.invalid_invalid"}
	 * @return {"success": {
	  "email": "test@test.local",
	  "updated_at": "2018-09-01 11:07:29",
	  "created_at": "2018-09-01 11:07:29",
	  "id": 543890
	  }}
	 */
	public function store(Request $request)
	{
		$status = User::insertIfNotExist($request->only('email')['email']);
		if (empty($status->email)) {
			return response()->json(['error' => $status], 400);
		}
		return response()->json(['success' => $status], 200);
	}
}
