<?php

namespace App\Http\Controllers\LibraryPanel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input;
use Auth;

class HomeController extends Controller
{
	public function index()
	{
		return view('LibraryPanel.home.index');
	}

	public function add() 
	{
    }

    public function edit($id)
    {
    }

    public function delete($id)
    {
    }

    public function save(Request $request, Categories $categorie) 
    {
    }

}