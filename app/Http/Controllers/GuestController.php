<?php

namespace App\Http\Controllers;

use App\Television;
use Illuminate\Http\Request;

class GuestController extends Controller
{
  public function index() {
    $televisions = Television::all();
    return view('home', compact('televisions'));
  }

  public function show($id) {
    $television = Television::findOrFail($id);
    return view('television', compact('television'));
  }
}
