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

                <!-- <form method="post" action="delete/{$tweet->id"> -->
                <br>
                @if($tweet->user_id == Auth::id())
                <form method="post" action="{{ action('TweetController@destroy', $tweet->id) }}">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                    <input type="submit" value="削除" class="btn btn-danger btn-sm" onclick='return confirm("君は本当に削除するつもりかい？");'>
                </form>
                @endif
        </div>
        
@endforeach
</div>
@endsection
