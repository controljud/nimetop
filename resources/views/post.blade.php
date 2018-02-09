@extends('layout')

@section('content')
    <div class="wrapper col3">
        <div class="container">
            <div id="latestnews">
                <h2>{{$post->title}}</h2>
                <p>{{$post->text}}</p>
            </div>
        </div>
    </div>
@endsection