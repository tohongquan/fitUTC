@extends('layouts.app')
@section('title', 'Trang Chủ')
@section('content')
        <!-- BEGIN featured -->
        <div id="featured">
            @foreach($articles as $article)
            <div class="post">
                <h2><a href="{{ URL::to('/articles') }}/{{$article->id}}">{{$article->title}}</a></h2>
                <p class="details"> {{$article->created_at}} | <a href="#">Tác giả</a> | <a href="#">Thể loại</a></p>
                <div class="thumb"><a href="{{ URL::to('/articles') }}/{{$article->id}}"><img src="{{ URL::to('/') }}/images/news_image.jpg" alt="" /></a></div>
                <p>{{$article->summary}}</p>
                <p class="readmore">[ <a href="{{ URL::to('/articles') }}/{{$article->id}}">read more</a> ]</p>
{{--                <p class="tags">TAGS: <a href="#">money</a>, <a href="#">currency</a>, <a href="#">product</a></p>--}}
                <div class="break"></div>
            </div>
            @endforeach
        </div>
    <!-- END featured -->
@endsection
