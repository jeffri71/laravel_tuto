<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
    	return "Estoy en el metodo Index papu";
    }
    public function create()
    {
    	return "Estoy en el metodo crear papu";
    }
}
