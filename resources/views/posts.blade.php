@extends('layouts/app')

@section('container')
    <h1 class="mb-3">Halaman Post</h1>
    @foreach ($posts as $post)
    <article class="mb-5">
        <h3>
            <a href="/posts/{{$post->slug}}">{{ $post->title }}</a>
        </h3>
        <h5>By : {{ $post->author }}</h5>
        <p>{{ $post->body }}</p>
    </article>
    @endforeach
@endsection
