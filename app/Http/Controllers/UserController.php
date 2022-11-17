<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Actions\Fortify\CreateNewUser;

class UserController extends Controller
{
    public function store(Request $request, CreateNewUser $creator) {

        $user = $creator->create($request->all());

        return inertia('home');

    }

    public function destroy(Request $request) {
        Auth::logout();

        return inertia('home');
    }
}
