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
                {{--                <ul class="icons">--}}
                {{--                    <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>--}}
                {{--                    <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>--}}
                {{--                    <li><a href="#" class="icon brands fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>--}}
                {{--                    <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>--}}
                {{--                    <li><a href="#" class="icon brands fa-medium-m"><span class="label">Medium</span></a></li>--}}
                {{--                </ul>--}}
            </header>

            <!-- Banner -->
            <section id="banner">
                <div class="content">
                    <header>
                        <h1>Hi, I’m Editorial<br/>
                            by HTML5 UP</h1>
                        <p>A free and fully responsive site template</p>
                    </header>
                    <p>Aenean ornare velit lacus, ac varius enim ullamcorper eu. Proin aliquam facilisis ante interdum
                        congue. Integer mollis, nisl amet convallis, porttitor magna ullamcorper, amet egestas mauris.
                        Ut magna finibus nisi nec lacinia. Nam maximus erat id euismod egestas. Pellentesque sapien ac
                        quam. Lorem ipsum dolor sit nullam.</p>
                    <ul class="actions">
                        <li><a href="#" class="button big">Learn More</a></li>
                    </ul>
                </div>
                <span class="image object">
										<img src="images/pic10.jpg" alt=""/>
									</span>
            </section>

            <!-- Section -->
{{--            <section>--}}
{{--                <header class="major">--}}
{{--                    <h2>Erat lacinia</h2>--}}
{{--                </header>--}}
{{--                <div class="features">--}}
{{--                    <article>--}}
{{--                        <span class="icon fa-gem"></span>--}}
{{--                        <div class="content">--}}
{{--                            <h3>Sinh Viên</h3>--}}
{{--                            <h4>800+</h4>--}}
{{--                        </div>--}}
{{--                    </article>--}}
{{--                    <article>--}}
{{--                        <span class="icon solid fa-paper-plane"></span>--}}
{{--                        <div class="content">--}}
{{--                            <h3>Chương Trình Đào Tạo</h3>--}}
{{--                            <h4>17+</h4>--}}
{{--                            <p>Thuộc các hệ đào tạo cử nhân, kỹ sư, thạc sỹ khoa học, tiến sỹ</p>--}}
{{--                        </div>--}}
{{--                    </article>--}}
{{--                    <article>--}}
{{--                        <span class="icon solid fa-rocket"></span>--}}
{{--                        <div class="content">--}}
{{--                            <h3>Quam lorem ipsum</h3>--}}
{{--                            <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam--}}
{{--                                facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>--}}
{{--                        </div>--}}
{{--                    </article>--}}
{{--                    <article>--}}
{{--                        <span class="icon solid fa-signal"></span>--}}
{{--                        <div class="content">--}}
{{--                            <h3>Sed magna finibus</h3>--}}
{{--                            <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam--}}
{{--                                facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>--}}
{{--                        </div>--}}
{{--                    </article>--}}
{{--                </div>--}}
{{--            </section>--}}

            <!-- Section -->
            <section>
                @yield('article')
            </section>

        </div>
    </div>

    <!-- Sidebar -->
    <div id="sidebar">
        <div class="inner">

            <!-- Search -->
            <section id="search" class="alt">
                <form method="post" action="#">
                    <input type="text" name="query" id="query" placeholder="Tìm kiếm"/>
                </form>
            </section>

            <!-- Menu -->
            <nav id="menu">
                <header class="major">
                    <h2>Menu</h2>
                </header>
                <ul>
                    <li><a href="{{ URL::to('/home') }}">Trang chủ</a></li>
                    <li><a href="generic.html">Giới thiệu</a></li>
                    <li><a href="elements.html">Tin Tức</a></li>
                    <li><a href="elements.html">Đào Tạo</a></li>
                    <li>
                        <span class="opener">Bộ Môn</span>
                        <ul>
                            <li><a href="#">Khoa Học Máy Tính</a></li>
                            <li><a href="#">Công Nghệ Phần Mềm</a></li>
                            <li><a href="#">Mạng Và Các HTTT</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Giảng Viên</a></li>
                    <li><a href="#">Nghiên Cứu Khoa Học</a></li>
                    <li><a href="#">Tuyển Dụng</a></li>
                </ul>
            </nav>

            <!-- Section -->
{{--            <section>--}}
{{--                <header class="major">--}}
{{--                    <h2>Ante interdum</h2>--}}
{{--                </header>--}}
{{--                <div class="mini-posts">--}}
{{--                    <article>--}}
{{--                        <a href="#" class="image"><img src="images/pic07.jpg" alt=""/></a>--}}
{{--                        <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>--}}
{{--                    </article>--}}
{{--                    <article>--}}
{{--                        <a href="#" class="image"><img src="images/pic08.jpg" alt=""/></a>--}}
{{--                        <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>--}}
{{--                    </article>--}}
{{--                    <article>--}}
{{--                        <a href="#" class="image"><img src="images/pic09.jpg" alt=""/></a>--}}
{{--                        <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>--}}
{{--                    </article>--}}
{{--                </div>--}}
{{--                <ul class="actions">--}}
{{--                    <li><a href="#" class="button">More</a></li>--}}
{{--                </ul>--}}
{{--            </section>--}}

            <!-- Section -->
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
