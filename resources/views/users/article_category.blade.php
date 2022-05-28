@extends('layouts.app')
@section('title', 'Trang Chủ')
@section('article')
    <section>
        <header class="major">
            <h2>{{$category->name}}</h2>
        </header>
        <div class="posts">
            @foreach($articles as $article)
                <article>
                    <a href="{{ URL::to('/articles') }}/{{$article->id}}" class="image"><img
                            src="{{ URL::to('/uploads') }}/{{$article->image}}" alt=""/></a>
                    <h3>{{$article->title}}</h3>
                    <p> {!! html_entity_decode($article->summary) !!}</p>
                    <ul class="actions">
                        <li><a href="{{ URL::to('/articles') }}/{{$article->id}}" class="button">Tìm hiểu thêm</a></li>
                    </ul>
                </article>
            @endforeach
        </div>
    </section>
@endsection
