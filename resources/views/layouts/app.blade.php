<!DOCTYPE html>
<html>
<head>
    <title>Khoa Công Nghệ Thông Tin - Trường Đại Học Giao Thông Vận Tải - @yield('title')</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ mix('/css/app.css') }}"/>
    <script type="text/javascript" src="{{ mix('/js/app.js') }}"></script>
</head>
<body>
<!-- BEGIN wrapper -->
<div id="wrapper">
    <!-- BEGIN header -->
    <div id="header">
        <form action="#">
            <input type="text" name="s" id="s" value=""/>
            <button type="submit">Search</button>
        </form>
        <div class="break"></div>
        <!-- begin logo -->
        <div class="logo">
            <h1><a href="https://www.utc.edu.vn/">Trường Đại Học Giao Thông Vận Tải</a></h1>
            <p><a href="{{ URL::to('/home') }}">Khoa Công Nghệ Thông Tin</a></p>
        </div>
        <!-- end logo -->
        <!-- begin categories -->
        <ul class="categories">
            @foreach($categories as $category)
                <li><a href="#">{{$category->name}}</a></li>
            @endforeach
        </ul>
        <!-- end categories -->
    </div>
    <!-- END header -->
    <!-- BEGIN content -->
    <div id="content">
        <!-- begin featured -->
        @yield('content')
        <!-- end featured -->
    </div>
    <!-- END content -->
    <!-- BEGIN sidebar -->
    <div id="sidebar">
        <!-- begin popular posts -->
        <div class="box">
            <h2>Bài Viết Mới Nhất</h2>
            <ul class="popular">
                <li><a href="#">Tiêu Đề</a>
                    <p>Tóm Tắt</p>
                </li>
            </ul>
        </div>
        <!-- end popular posts -->
        <!-- BEGIN left -->
        <div class="l">
            <!-- begin categories -->
            <div class="box">
                <h2>Tag</h2>
                <ul>
                    {{--                    @foreach()--}}
                    <li><a href="#">Tag</a></li>
                    <li><a href="#">Tag</a></li>
                    <li><a href="#">Tag</a></li>
                    <li><a href="#">Tag</a></li>
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
    <p style="text-align:center"><a href="{{ URL::to('/home') }}">Khoa Công Nghệ Thông Tin</a> &middot;<a
            href="https://www.utc.edu.vn/">Trường Đại Học Giao Thông Vận Tải</a> &middot; Số 3, Cầu Giấy, Đống Đa, Hà
        Nội </p>
</div>
<!-- END footer -->
</body>
</html>
