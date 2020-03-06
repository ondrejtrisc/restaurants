@extends('layouts.app')

@section('content')
  <h1>Restaurants:</h1>
  <ul>
    @foreach ($restaurants as $restaurant)
        <li>
          {{$restaurant->name}}
          <a class="nav-link" href="{{action('RestaurantController@show', ['id' => $restaurant->id])}}">See More</a>
        </li>
    @endforeach
  </ul>
@endsection
