@extends('layouts.app')
@section('title', 'Trang Chủ')
@section('article')
    <section>
        <header class="major">
            <h2>Tin Mới Nhất</h2>
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

@section('mainArticle')
    <!-- Banner -->
    <section id="banner">
        <div class="content">
            <header>
                <h1>{{$mainArticle->title}}</h1>
            </header>
            <p> {!! html_entity_decode($article->summary) !!}</p>
            <ul class="actions">
                <li><a href="{{ URL::to('/articles') }}/{{$mainArticle->id}}" class="button big">Tìm hiểu thêm</a></li>
            </ul>
        </div>
        <span class="image object">
            <img src="{{ URL::to('/uploads') }}/{{$mainArticle->image}}" alt=""/>
        </span>
    </section>
@endsection
