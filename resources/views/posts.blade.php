@extends('layout')
@section('main')
    <h1>My Posts</h1>
    @foreach ($posts as $post)
        <article>
            <h2>
                <a href="/posts/{{$post->slug}}">
                    <h2>{!! $post->title !!}</h2>
                </a>
            </h2>
            <div>
                {{ $post->excerpt }}
            </div>
        </article>
    @endforeach
@endsection
    
