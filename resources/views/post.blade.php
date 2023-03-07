@extends('layouts/app')
@section('container')
    <article>
        <h3>{{$post->title}}</h3>
        <h5>{{$post->author}}</h5>
        {!! $post->body !!}
    </article>
    <a href="/blog">Back to artikel</a>
@endsection
