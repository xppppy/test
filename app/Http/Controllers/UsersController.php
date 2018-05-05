<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    public function create()
    {
        return 'create';
    }
    public function show(User $user){
        return $user.csrf_token();
    }
    public function index(){
        return view('users.index');
    }
    public function store(UserRequest $request){
//        $validator = Validator::make($request->all(), [
//            'name' => 'required|min:2|max:50',
//            'password' => 'required|min:2|max:50|confirmed',
//            'email' => 'required|email|unique:users|max:50',
//        ]);
//        if ($validator->fails()) {
//            $errors = $validator->errors();
//            return $errors;
//        }
    }
}
