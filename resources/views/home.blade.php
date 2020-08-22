@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Home</h1>
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
        <div class="tweet-card">
                <div class="tweet-card-username">{{ $tweet->user->name }}</div>
                <div class="tweet-card-date">{{ $tweet->created_at }}</div>
                <div class="tweet-card-body">{{ $tweet->tweet }}</div>
        </div>
@endforeach
</div>
@endsection
