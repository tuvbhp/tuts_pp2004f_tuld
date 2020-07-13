<?php

namespace App\Http\Controllers;

use App\Http\Requests\TicketFormRequest;
use Illuminate\Http\Request;

class MyController extends Controller
{
    public function getHome()
    {
        return view('project.home');
    }

    public function contact()
    {
        return view('project.create');
    }

}
