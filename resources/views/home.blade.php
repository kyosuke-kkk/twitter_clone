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
            <table>
                <tr class="tweet-card-header">
                        <td class="tweet-card-username">{{ $tweet->user->name }}</td>     <td class="tweet-card-date">{{ $tweet->created_at }}</td>
                </tr>
                
                <tr>
                    <td class="tweet-card-body">{{ $tweet->tweet }}</td><br><br>
                </tr>
            </table>
        </div>
@endforeach
</div>
@endsection
