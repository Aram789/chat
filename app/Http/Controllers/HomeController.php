<?php

namespace App\Http\Controllers;

use App\Events\ChatEvent;
use App\Http\Requests\MessageRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function Laravel\Prompts\error;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function store(MessageRequest $request)
    {
        broadcast(new ChatEvent($request['message']));

        return $request['message'];
    }
}
