@extends('layouts.main')

@section('container')
  <h1>{{ $post->title }}</h1>

  <p>By. <a href="#">{{$post->user->name}}</a> in <a href="/categories/{{ $post->category->name }}">
    {{ $post->category->name }}</a></p>  

  {!! $post->body !!}
    <br>
    <a href="/blog">Kembali</a>

@endsection



