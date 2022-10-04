@extends('layouts.app')

@section('content')
    <img src="{{ asset('/storage/' . $article->image) }}" alt="">
    {{ $article->id }}
    {{ $article->content }}
    {{ $article->category_id }}
@endsection
