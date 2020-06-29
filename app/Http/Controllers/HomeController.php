<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tarefa;


class HomeController extends Controller
{
    public function __invoke()
    {

        return view('welcome');
    }
}
