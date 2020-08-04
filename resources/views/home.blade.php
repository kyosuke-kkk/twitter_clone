@extends('layouts.app')

@section('content')
<div class="container">
<h1>Home</h1>
{!! Form::open(['action' => 'TweetController@store']) !!}
        <div class="form-group">
            {!! Form::label('Tweet', 'Tweet:') !!}
            {!! Form::text('tweet', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('ツイートする', ['class' => 'btn btn-primary form-control']) !!}
        </div>
{!! Form::close() !!}

@foreach($tweets as $tweet)
    <tr>
        <td>{{ $tweet->user->name }} </td><br>
        <td>{{ $tweet->tweet }}</td><br>
        <td>{{ $tweet->created_at }}</td><br><br>
    </tr>
@endforeach
</div>
@endsection
