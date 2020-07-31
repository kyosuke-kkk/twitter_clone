
    <h1>Write a New Article</h1>

    <hr/>

    {!! Form::open() !!}
        <div class="form-group">
            {!! Form::label('Tweet', 'Tweet:') !!}
            {!! Form::text('tweet', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Add Article', ['class' => 'btn btn-primary form-control']) !!}
        </div>
        
    {!! Form::close() !!}