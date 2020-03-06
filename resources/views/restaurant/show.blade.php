@extends('layouts.app')

@section('content')
  <h1>{{$restaurant->name}}</h1>
  <div>
    Owner: {{$restaurant->user->name}}<br>
    Contact: {{$restaurant->user->email}}<br>
    Location: {{$restaurant->city}}<br>
    Descriprion: {{$restaurant->description}}
  </div>

  <br>

  @auth
    <div>
      <h2>Leave a comment:</h2>
      <form action="{{action('RestaurantController@addComment', ['id' => $restaurant->id])}}" method="post">
        @csrf
        <textarea name="comment" id="" cols="30" rows="10"></textarea><br>
        <input type="submit" value="Submit">
      </form>
    </div>
  @endauth

  <div>
    <h2>Comments:</h2>
    <ul>
    @foreach ($restaurant->comments as $comment)
      <li>
        {{$comment->text}}<br>
        -- {{$comment->user->name}}
      </li>    
    @endforeach
    </ul>
  </div>



@endsection
