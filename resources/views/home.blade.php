@extends('layouts.app')

@section('content')
<div class="container">
<h1>Home</h1>
    
@foreach($tweets as $tweet)
    <tr>
        <td>{{ $tweet->user->name }}</td><br>
        <td>{{ $tweet->tweet }}</td><br>
        <td>{{ $tweet->created_at }}</td><br><br>
    </tr>
@endforeach
</div>
@endsection
