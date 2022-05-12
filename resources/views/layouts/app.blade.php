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
        <!-- begin pages -->
        <ul class="pages">
            <li><a href="#">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="page.html">Demo Page</a></li>
            <li><a href="contact.html">Contact Page</a></li>
        </ul>
        <!-- end pages -->
        <form action="#">
            <input type="text" name="s" id="s" value="" />
            <button type="submit">Search</button>
        </form>
        <div class="break"></div>
        <!-- begin logo -->
        <div class="logo">
            <h1><a href="#">SimpleScheme Magazine</a></h1>
            <p>Free CSS Template</p>
        </div>
        <!-- end logo -->
        <!-- begin sponsor -->
        <div class="sponsor"> <a href="#"><img src="{{ URL::to('/') }}/images/ad468x60.gif" alt="" /></a> </div>
        <!-- end sponsor -->
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
        <!-- begin sponsors -->
        <div class="box">
            <p class="sponsors"> <a href="#"><img src="{{ URL::to('/') }}/images/ad125x125.jpg" alt="" /></a> <a href="#"><img src="{{ URL::to('/') }}/images/ad125x125.jpg" alt="" /></a> </p>
            <ul class="bookmarks">
                <li class="rss"><a href="#">Subscribe via RSS feed</a></li>
                <li class="twt"><a href="#">Follow me on Twitter</a></li>
                <li class="fcb"><a href="#">Connect with me on Facebook</a></li>
                <li class="ldi"><a href="#">Connect with me on LinkedIn</a></li>
            </ul>
        </div>
        <!-- end sponsors -->
        <!-- begin popular posts -->
        <div class="box">
            <h2>Popular Posts</h2>
            <ul class="popular">
                <li> <a href="#">Top 10 Ways to Make Money Online</a>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse interdum..</p>
                </li>
                <li> <a href="#">Top 10 Ways to Make Money Online</a>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse interdum..</p>
                </li>
                <li> <a href="#">Top 10 Ways to Make Money Online</a>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse interdum..</p>
                </li>
            </ul>
        </div>
        <!-- end popular posts -->
        <!-- begin flickr images -->
        <div class="box">
            <h2>Flickr Images</h2>
            <div class="flickr"> <a href="#"><img src="{{ URL::to('/') }}/images/_flickr.jpg" alt="" /></a> <a href="#"><img src="{{ URL::to('/') }}/images/_flickr.jpg" alt="" /></a> <a href="#"><img src="{{ URL::to('/') }}/images/_flickr.jpg" alt="" /></a> <a href="#"><img src="{{ URL::to('/') }}/images/_flickr.jpg" alt="" /></a> <a href="#"><img src="{{ URL::to('/') }}/images/_flickr.jpg" alt="" /></a> <a href="#"><img src="{{ URL::to('/') }}/images/_flickr.jpg" alt="" /></a> </div>
        </div>
        <!-- end flickr images -->
        <!-- begin featured video -->
        <div class="box">
            <h2>Featured Video</h2>
            <div class="video"> <img src="{{ URL::to('/') }}/images/_video.jpg" alt="" /> </div>
        </div>
        <!-- end featured video -->
        <!-- begin tag cloud -->
        <div class="box">
            <h2>Tag Cloud</h2>
            <div class="tags"> <a href="#">Link</a> </div>
        </div>
        <!-- end tag cloud -->
        <!-- BEGIN left -->
        <div class="l">
            <!-- begin categories -->
            <div class="box">
                <h2>Categories</h2>
                <ul>
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
    <p class="l">Copyright &copy; 2009 - <a href="#">Website Name</a> &middot; All Rights Reserved | Template by: <a href="http://www.wpthemedesigner.com/">WordPress Designer</a> | Get More <a href="#">Free CSS Templates</a> </p>
</div>
<!-- END footer -->
</body>
</html>
