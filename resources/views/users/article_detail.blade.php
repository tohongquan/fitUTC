@extends('layouts.app')
@section('title', '{{$article->title}}')
@section('content')
    <div class="recent">
        <!-- begin post -->
        <div class="single">
            <h2>{{$article->title}}</h2>
            <p>{{$article->content}}</p>
        </div>
        <!-- end post -->
    </div>
@endsection
