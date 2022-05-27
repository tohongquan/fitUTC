@extends('layouts.app')
@section('title', 'Trang Chủ')
@section('article')
    <header class="major">
        <h2>Ipsum sed dolor</h2>
    </header>
    <div class="posts">
        @foreach($articles as $article)
            <article>
                <a href="{{ URL::to('/articles') }}/{{$article->id}}" class="image"><img src="{{ URL::to('/articles') }}/{{$article->id}}" alt="" /></a>
                <h3>{{$article->title}}</h3>
                <p>{{$article->summary}}</p>
                <ul class="actions">
                    <li><a href="{{ URL::to('/articles') }}/{{$article->id}}" class="button">More</a></li>
                </ul>
            </article>
        @endforeach
    </div>
@endsection
