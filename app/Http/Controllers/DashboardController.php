<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Week;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {

        $user = Auth::user();

        $weeks = Week::orderBy('created_at', 'DESC')->get();


        return inertia('dashboard', [
            'user' => $user,
            'weeks' => $weeks
        ]);
    }
}
