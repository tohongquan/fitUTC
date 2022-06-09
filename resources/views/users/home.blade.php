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
                            src="{{ URL::to('/uploads') }}/{{$article->thumbnail('small','image')}}" alt=""/></a>
                    <h3>{{$article->title}}</h3>
                    <p> {!! html_entity_decode($article->summary) !!}</p>
                    <ul class="actions">
                        <li><a href="{{ URL::to('/articles') }}/{{$article->id}}" class="button">Tìm hiểu thêm</a></li>
                    </ul>
                </article>
            @endforeach
        </div>
        <div style="text-align: center">
            @if ($articles->lastPage() > 1)
                <ul class="pagination">
                    <li><a href="{{ $articles->url(1) }}"
                           class="button {{ ($articles->currentPage() == 1) ? ' disabled' : '' }}">Trang trước</a></li>
                    @for ($i = 1; $i <= $articles->lastPage(); $i++)
                        <li><a href="{{ $articles->url($i) }}"
                               class="page {{ ($articles->currentPage() == $i) ? ' active' : '' }}">{{ $i }}</a></li>
                    @endfor
                    <li><a href="{{ $articles->url($articles->lastPage()) }}"
                           class="button {{ ($articles->currentPage() == $articles->lastPage()) ? ' disabled' : '' }}">Trang
                            sau</a></li>
                </ul>
            @endif
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
            <p> {!! html_entity_decode($mainArticle->summary) !!}</p>
            <ul class="actions">
                <li><a href="{{ URL::to('/articles') }}/{{$mainArticle->id}}" class="button big">Tìm hiểu thêm</a></li>
            </ul>
        </div>
        <span class="image object">
            <img src="{{ URL::to('/uploads') }}/{{$mainArticle->image}}" alt=""/>
        </span>
    </section>
@endsection
