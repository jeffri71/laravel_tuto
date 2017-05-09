<?php namespace Cinema\Http\Controllers;
class PruebaController extends Controller
{
	public function index()
	{
		return "hola desde controlador";
	}
	public function nombre($nombre)
	{
		return "hola mi nombre es: ".$nombre;
	}
}