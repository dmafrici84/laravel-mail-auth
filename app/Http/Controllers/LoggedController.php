<?php

namespace App\Http\Controllers;

use App\Television;
use App\Mail\UserAction;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class LoggedController extends Controller
{
  public function __construct()
  {
      $this -> middleware('auth');
  }

  public function create() {
    return view('television-create');
  }

  public function store(Request $request) {
    $data = $request -> all();
    Television::create($data);
    return redirect() -> route('televisions.index');
  }

  public function edit($id) {
    $television = Television::findOrFail($id);
    return view('television-edit', compact('television'));
  }

  public function update(Request $request, $id) {
    $data = $request -> all();
    $television = Television::findOrFail($id);
    $television -> update($data);
    return redirect() -> route('television.show', $television -> id);
  }

  public function destroy($id) {
    $television = Television::findOrFail($id);
    $television -> delete();

    $user = Auth::user();
    $action = 'DELETE';

    Mail::to('admin@boolean.it')
            ->send(new UserAction($user, $television, $action));
    return redirect() -> route('televisions.index');
  }
}
