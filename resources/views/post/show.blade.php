@extends('layouts.app')

@section('title', $post->meta_title ?? $post->title)
@section('description', $post->meta_description)
@section('keywords', $post->meta_title)


@section('content')
    <h1>{{ $post->title }}</h1>
    <div>{!! $post->content !!}</div>
    @foreach($post->categories as $category)
        <span class="badge badge-primary text-danger">{{ $category->name }}</span>
    @endforeach

    @foreach($post->tags as $tag)
        <span class="badge badge-secondary text-danger">{{ $tag->name }}</span>
    @endforeach
@endsection