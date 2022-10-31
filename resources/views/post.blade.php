@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $post->title }}</h1>

                <p>By. <a href="/blog?author={{ $post->author->username }}">{{ $post->author->name }}</a> in <a
                        href="/blog?category={{ $post->category->name }}">
                        {{ $post->category->name }}</a></p>

                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}"
                    class="img-fluid">

                <article class="my-3 fs-4">
                    {!! $post->body !!}
                </article>
                <br>
                <a href="/blog">Kembali</a>
            </div>
        </div>
    </div>
@endsection
