<!DOCTYPE html>
<html>
<head>
    <title>Khoa Công Nghệ Thông Tin - Trường Đại Học Giao Thông Vận Tải - @yield('title')</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="{{ mix('/css/app.css') }}"/>
    <script type="text/javascript" src="{{ mix('/js/app.js') }}"></script>
</head>
<body>
<!-- BEGIN wrapper -->
<div id="wrapper">
    <!-- BEGIN header -->
    <div id="header">
        <form action="#">
            <input type="text" name="s" id="s" value="" />
            <button type="submit">Search</button>
        </form>
        <div class="break"></div>
        <!-- begin logo -->
        <div class="logo">
            <h1><a href="#">Trường Đại Học Giao Thông Vận Tải</a></h1>
            <p>Khoa Công Nghệ Thông Tin</p>
        </div>
        <!-- end logo -->
        <!-- begin categories -->
        <ul class="categories">
            @yield('category')
            <li><a href="#">Advertising</a></li>
            <li><a href="#">Entertainment</a></li>
            <li><a href="#">Fashion</a></li>
            <li><a href="#">Lifestyle</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Pictures</a></li>
            <li><a href="#">Resources</a></li>
            <li><a href="#">Videos</a></li>
        </ul>
        <!-- end categories -->
    </div>
    <!-- END header -->
    <!-- BEGIN content -->
    <div id="content">
        <!-- begin featured -->
        @yield('content')
        <!-- end recent posts -->
    </div>
    <!-- END content -->
    <!-- BEGIN sidebar -->
    <div id="sidebar">
        <!-- begin popular posts -->
        <div class="box">
            <h2>Bài Viết Mới Nhất</h2>
            <ul class="popular">
                <li> <a href="#">Tiêu Đề</a>
                    <p>Nội Dung</p>
                </li>
            </ul>
        </div>
        <!-- end popular posts -->
        <!-- BEGIN left -->
        <div class="l">
            <!-- begin categories -->
            <div class="box">
                <h2>Categories</h2>
                <ul>
                    @yield('category')
                    <li><a href="#">Advertising</a></li>
                    <li><a href="#">Fashion</a></li>
                    <li><a href="#">Gadgets</a></li>
                    <li><a href="#">Lifestyle</a></li>
                    <li><a href="#">Networking</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Sports</a></li>
                </ul>
            </div>
            <!-- end categories -->
            <!-- begin meta -->
            <div class="box">
                <h2>Meta</h2>
                <ul>
                    <li><a href="#">Log in</a></li>
                    <li><a href="#">Valid XHTML</a></li>
                </ul>
            </div>
            <!-- end meta -->
        </div>
        <!-- END left -->
        <!-- BEGIN right -->
        <div class="r">
            <!-- begin archives -->
            <div class="box">
                <h2>Archives</h2>
                <ul>
                    <li><a href="#">June 2009</a></li>
                    <li><a href="#">May 2009</a></li>
                    <li><a href="#">April 2009</a></li>
                    <li><a href="#">March 2009</a></li>
                    <li><a href="#">February 2009</a></li>
                </ul>
            </div>
            <!-- end archives -->
            <!-- begin blogroll -->
            <div class="box">
                <h2>Blogroll</h2>
                <ul>
                    <li><a href="#">Documentation</a></li>
                    <li><a href="#">Suggest Ideas</a></li>
                    <li><a href="#">Support Forum</a></li>
                </ul>
            </div>
            <!-- end archives -->
        </div>
        <!-- END right -->
    </div>
    <!-- END sidebar -->
</div>
<!-- END wrapper -->
<!-- BEGIN footer -->
<div id="footer">
    <p style="text-align:center" ><a href="{{ URL::to('/') }}/home">Khoa Công Nghệ Thông Tin</a> &middot;<a href="https://www.utc.edu.vn/">Trường Đại Học Giao Thông Vận Tải</a> &middot; Số 3, Cầu Giấy, Đống Đa, Hà Nội </p>
</div>
<!-- END footer -->
</body>
</html>
