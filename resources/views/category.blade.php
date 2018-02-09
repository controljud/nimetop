@extends('layout')

@section('content')
    <div class="wrapper col3">
        <div class="container">
            <div id="latestnews">
                <h2>Categoria</h2>
                <ul>
                    @foreach($posts as $post)
                        <li>
                            <div class="imgholder"><img src="/images/demo/imgl.gif" alt="" /></div>
                            <div class="latestnews">
                                <h2>{{$post->title}}</h2>
                                <p>{{substr($post->text, 0, 255).' ...'}}</p>
                                <p class="readmore"><a href="/post/{{$post->id}}">Continue Reading &raquo;</a></p>
                            </div>
                            <br class="clear" />
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection