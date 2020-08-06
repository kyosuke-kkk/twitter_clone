@extends('layouts.app')

@section('content')
<div class="container">
<h1>{{ $user->name }}</h1>
{!! Form::open(['action' => 'TweetController@store']) !!}
        <div class="form-group">
            {!! Form::label('Tweet', 'Tweet') !!}
            {!! Form::text('tweet', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('ツイートする', ['class' => 'btn btn-primary form-control']) !!}
        </div>
{!! Form::close() !!}

@foreach($tweets as $tweet)
<center>
    <tr>
        <pre><td>{{ $tweet->user->name }}</td>     <td>{{ $tweet->created_at }}</td></pre>
        <td>{{ $tweet->tweet }}</td><br><br>
    </tr>
</center>
@endforeach
</div>
@endsection