@extends('layouts.app')
@section('title', 'Trang Chủ')
@section('content')
    <!-- BEGIN content -->
    <div id="content">
        <!-- begin featured -->
        <div id="featured">
            @foreach($articles as $article)
            <div class="post">
                <h2><a href="#">{{$article->title}}</a></h2>
                <p class="details"> {{$article->created_at}} | <a href="#">Tác giả</a> | <a href="#">Thể loại</a></p>
                <div class="thumb"><a href="#"><img src="{{ URL::to('/') }}/images/news_image.jpg" alt="" /></a></div>
                <p>{{$article->summary}}</p>
                <p class="readmore">[ <a href="#">read more</a> ]</p>
{{--                <p class="tags">TAGS: <a href="#">money</a>, <a href="#">currency</a>, <a href="#">product</a></p>--}}
                <div class="break"></div>
            </div>
            @endforeach
        </div>
        <!-- end featured -->
        <!-- begin recent posts -->
{{--        <div class="recent">--}}
{{--            <!-- begin post -->--}}
{{--            <div class="o post"> <a href="#"><img src="{{ URL::to('/') }}/images/_thumb.jpg" alt="" /></a>--}}
{{--                <h2><a href="#">Special Twitter Icons for Sale</a></h2>--}}
{{--                <p>Ut vel orci quis sem dapibus iaculis. Aliquam ut nunc quis nisi tincidunt tincidunt. Pellentesque enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque enim. Misl blandit feugiat. Ut vel orci quis sem dapibus iaculis.</p>--}}
{{--                <p class="readmore">[ <a href="#">read more</a> ]</p>--}}
{{--                <div class="break"></div>--}}
{{--            </div>--}}
            <!-- end post -->
{{--        </div>--}}
        <!-- end recent posts -->
    </div>
    <!-- END content -->
@endsection
