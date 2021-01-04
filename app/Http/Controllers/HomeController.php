<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


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

    
    public function index()
    {
        return view('home');
    }

    public function StudentList()
    {
        $data=[];
        $data['users'] = User::select('id','name', 'email', 'student_id','department')->get();
        return view('studentlist', $data);
    }
}
