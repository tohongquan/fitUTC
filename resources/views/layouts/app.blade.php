{{--<!DOCTYPE html>--}}
{{--<html>--}}
{{--<head>--}}
{{--    <title>Khoa Công Nghệ Thông Tin - Trường Đại Học Giao Thông Vận Tải - @yield('title')</title>--}}
{{--    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}
{{--    <link rel="stylesheet" type="text/css" href="{{ mix('/css/app.css') }}"/>--}}
{{--    <script type="text/javascript" src="{{ mix('/js/app.js') }}"></script>--}}
{{--</head>--}}
{{--<body>--}}
{{--<!-- BEGIN wrapper -->--}}
{{--<div id="wrapper">--}}
{{--    <!-- BEGIN header -->--}}
{{--    <div id="header">--}}
{{--        <form action="#">--}}
{{--            <input type="text" name="s" id="s" value=""/>--}}
{{--            <button type="submit">Search</button>--}}
{{--        </form>--}}
{{--        <div class="break"></div>--}}
{{--        <!-- begin logo -->--}}
{{--        <div class="logo">--}}
{{--            <h1><a href="https://www.utc.edu.vn/">Trường Đại Học Giao Thông Vận Tải</a></h1>--}}
{{--            <p><a href="{{ URL::to('/home') }}">Khoa Công Nghệ Thông Tin</a></p>--}}
{{--        </div>--}}
{{--        <!-- end logo -->--}}
{{--        <!-- begin categories -->--}}
{{--        <ul class="categories">--}}
{{--            @foreach($categories as $category)--}}
{{--                <li><a href="#">{{$category->name}}</a></li>--}}
{{--            @endforeach--}}
{{--        </ul>--}}
{{--        <!-- end categories -->--}}
{{--    </div>--}}
{{--    <!-- END header -->--}}
{{--    <!-- BEGIN content -->--}}
{{--    <div id="content">--}}
{{--        <!-- begin featured -->--}}
{{--        @yield('content')--}}
{{--        <!-- end featured -->--}}
{{--    </div>--}}
{{--    <!-- END content -->--}}
{{--    <!-- BEGIN sidebar -->--}}
{{--    <div id="sidebar">--}}
{{--        <!-- begin popular posts -->--}}
{{--        <div class="box">--}}
{{--            <h2>Bài Viết Mới Nhất</h2>--}}
{{--            <ul class="popular">--}}
{{--                <li><a href="#">Tiêu Đề</a>--}}
{{--                    <p>Tóm Tắt</p>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--        <!-- end popular posts -->--}}
{{--        <!-- BEGIN left -->--}}
{{--        <div class="l">--}}
{{--            <!-- begin categories -->--}}
{{--            <div class="box">--}}
{{--                <h2>Tag</h2>--}}
{{--                <ul>--}}
{{--                    --}}{{--                    @foreach()--}}
{{--                    <li><a href="#">Tag</a></li>--}}
{{--                    <li><a href="#">Tag</a></li>--}}
{{--                    <li><a href="#">Tag</a></li>--}}
{{--                    <li><a href="#">Tag</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--            <!-- end categories -->--}}
{{--            <!-- begin meta -->--}}
{{--            <div class="box">--}}
{{--                <h2>Meta</h2>--}}
{{--                <ul>--}}
{{--                    <li><a href="#">Log in</a></li>--}}
{{--                    <li><a href="#">Valid XHTML</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--            <!-- end meta -->--}}
{{--        </div>--}}
{{--        <!-- END left -->--}}
{{--        <!-- BEGIN right -->--}}
{{--        <div class="r">--}}
{{--            <!-- begin archives -->--}}
{{--            <div class="box">--}}
{{--                <h2>Archives</h2>--}}
{{--                <ul>--}}
{{--                    <li><a href="#">June 2009</a></li>--}}
{{--                    <li><a href="#">May 2009</a></li>--}}
{{--                    <li><a href="#">April 2009</a></li>--}}
{{--                    <li><a href="#">March 2009</a></li>--}}
{{--                    <li><a href="#">February 2009</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--            <!-- end archives -->--}}
{{--            <!-- begin blogroll -->--}}
{{--            <div class="box">--}}
{{--                <h2>Blogroll</h2>--}}
{{--                <ul>--}}
{{--                    <li><a href="#">Documentation</a></li>--}}
{{--                    <li><a href="#">Suggest Ideas</a></li>--}}
{{--                    <li><a href="#">Support Forum</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--            <!-- end archives -->--}}
{{--        </div>--}}
{{--        <!-- END right -->--}}
{{--    </div>--}}
{{--    <!-- END sidebar -->--}}
{{--</div>--}}
{{--<!-- END wrapper -->--}}
{{--<!-- BEGIN footer -->--}}
{{--<div id="footer">--}}
{{--    <p style="text-align:center"><a href="{{ URL::to('/home') }}">Khoa Công Nghệ Thông Tin</a> &middot;<a--}}
{{--            href="https://www.utc.edu.vn/">Trường Đại Học Giao Thông Vận Tải</a> &middot; Số 3, Cầu Giấy, Đống Đa, Hà--}}
{{--        Nội </p>--}}
{{--</div>--}}
{{--<!-- END footer -->--}}
{{--</body>--}}
{{--</html>--}}

    <!DOCTYPE HTML>
<html>
<head>
    <title>Khoa Công Nghệ Thông Tin - Trường Đại Học Giao Thông Vận Tải - @yield('title')</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <link rel="stylesheet" href="{{ mix('/css/main.css') }}"/>
    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>

</head>
<body class="is-preload">

<!-- Wrapper -->
<div id="wrapper">

    <!-- Main -->
    <div id="main">
        <div class="inner">

            <!-- Header -->
            <header id="header">
                <a href="{{ URL::to('/home') }}" class="logo"><h2><strong>Khoa Công Nghệ Thông Tin</strong></h2>
                    <h1>Trường Đại Học Giao Thông Vận Tải</h1></a>
            </header>

            @yield('mainArticle')

            @yield('articleDetail')

            @yield('article')

            @yield('lecturers')

        </div>
    </div>

    <!-- Sidebar -->
    <div id="sidebar">
        <div class="inner">

            <!-- Search -->
            <section id="search" class="alt">
                <form method="GET" action="{{ route('search') }}">
                    <input type="text" name="search" id="search" placeholder="Tìm kiếm"/>
                </form>
            </section>

            <!-- Menu -->
            <nav id="menu">
                <header class="major">
                    <h2>Danh mục</h2>
                </header>
                <ul>
                    <li><a href="{{ URL::to('/home') }}">Trang chủ</a></li>
                    {{--                    @foreach($categories as $category)--}}
                    {{--                        <li>--}}
                    {{--                            @if ($category->children)--}}
                    {{--                                <span class="opener">{{ $category->name }}</span>--}}
                    {{--                                <ul>--}}
                    {{--                                    @foreach ($category->children as $child)--}}
                    {{--                                    <li><a href="{{ URL::to('/categories') }}/{{ strval($child->id) }}/articles">{{ $child->name }}</a></li>--}}
                    {{--                                    @endforeach--}}
                    {{--                                </ul>--}}
                    {{--                            @else--}}
                    {{--                            <a href="{{ URL::to('/categories') }}/{{ $category->id }}/articles">{{ $category->name }}</a>--}}
                    {{--                            @endif--}}
                    {{--                        </li>--}}
                    {{--                    @endforeach--}}
                    @foreach($categories as $category)
                        <li>
                            <a href="{{ URL::to('/categories') }}/{{ $category->id }}/articles">{{ $category->name }}</a>
                        </li>
                    @endforeach
                    @foreach($multiCategories as $category)
                        <li>
                            <span class="opener">{{ $category->name }}</span>
                            <ul>
                                @foreach ($category->children as $child)
                                    <li>
                                        <a href="{{ URL::to('/categories') }}/{{ strval($child->id) }}/articles">{{ $child->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endforeach
                    <li><a href="{{ URL::to('/lecturers') }}">Đội ngũ giảng viên</a></li>
                </ul>
            </nav>

            <section>
                <header class="major">
                    <h2>Đối tác</h2>
                </header>
                <div class="mini-posts">
                    @foreach ($partnerCompanies as $ele)
                        <article>
                            <a href="#" class="image"><img
                                    src="{{ URL::to('/uploads') }}/{{$ele->thumbnail('small','avatar')}}" alt=""/></a>
                            <h2>{{$ele->name}}</h2>
                            <p>{{$ele->full_name}}</p>
                        </article>
                    @endforeach
                </div>
                <ul class="actions">
                    <li><a href="#" class="button">Danh sách các đối tác của khoa</a></li>
                </ul>
            </section>

            <section>
                <header class="major">
                    <h2>Khoa Công Nghệ Thông Tin</h2>
                </header>
                <ul class="contact">
                    <li class="icon solid fa-envelope"><a href="#">khoacntt@utc.edu.vn</a></li>
                    <li class="icon solid fa-phone">(024) 37664679</li>
                    <li class="icon solid fa-home">P.307-A9, Trường Đại học GTVT, Số 3 Cầu Giấy, P. Láng Thượng,
                        Q. Đống Đa, Hà Nội.
                    </li>
                </ul>
            </section>

            <!-- Footer -->
            {{--            <footer id="footer">--}}
            {{--                <p class="copyright"><a href="{{ URL::to('/home') }}">Khoa Công Nghệ Thông Tin</a> <br> <a--}}
            {{--                    href="https://www.utc.edu.vn/">Trường Đại Học Giao Thông Vận Tải</a></p>--}}
            {{--            </footer>--}}

        </div>
    </div>

</div>

<!-- Scripts -->
{{--<script src="assets/js/jquery.min.js"></script>--}}
{{--<script src="assets/js/browser.min.js"></script>--}}
{{--<script src="assets/js/breakpoints.min.js"></script>--}}
{{--<script src="assets/js/util.js"></script>--}}
<script src="{{ mix('/js/jquery.min.js') }}"></script>
<script src="{{ mix('/js/browser.min.js') }}"></script>
<script src="{{ mix('/js/breakpoints.min.js') }}"></script>
<script src="{{ mix('/js/util.js') }}"></script>
<script src="{{ mix('/js/main.js') }}"></script>

</body>
</html>
