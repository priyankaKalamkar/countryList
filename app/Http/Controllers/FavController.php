<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Favorite;

class FavController extends Controller
{
  //

  public function store(Request $request)
  {
    $id = auth()->user()->id;
    $fav= new Favorite();
    $fav->name= $request['favCountry'];
    $fav->user_id= $id;
    $fav->save();

    return redirect('home');
  }

  public function delete(Request $request, $id)
  {
    $fav = Favorite::FindOrFail($id)->delete();
    return redirect('home');
  }
}
