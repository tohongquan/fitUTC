@extends('layouts.app')
@section('title', '{{$article->title}}')
@section('articleDetail')
    <section>
        <header class="main">
            <h1>{{$article->title}}</h1>
        </header>

        <span class="image main"><img src="{{ URL::to('/uploads') }}/{{$article->image}}" alt="" /></span>

        {!! html_entity_decode($article->content) !!}
    </section>
@endsection
