<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;
use App\Comment;

class RestaurantController extends Controller
{
    public function index()
    {        
        $restaurants = Restaurant::all();

        return view('restaurant/index', compact('restaurants'));
    }

    public function show($id)
    {
        $restaurant = Restaurant::findOrFail($id);

        return view('restaurant/show', compact('restaurant'));
    }

    public function addComment(Request $request, $id)
    {       
        $this->validate($request, [
            'comment' => 'required',
        ]);

        $comment = Comment::create([
            'user_id' => $request->user()->id,
            'restaurant_id' => $id,
            'text' => $request->input('comment')
        ]);

        return redirect(action('RestaurantController@show', ['id' => $id]));
    }
}
