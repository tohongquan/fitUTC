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

            @yield('partnerCompany')

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
                    @foreach($categories as $category)
                        <li>
                            @if (count($category->children)>0)
                                <span class="opener">{{ $category->name }}</span>
                                <ul>
                                    @foreach ($category->children as $child)
                                        <li>
                                            <a href="{{ URL::to('/categories') }}/{{ strval($child->id) }}/articles">{{ $child->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            @else
                                <a href="{{ URL::to('/categories') }}/{{ $category->id }}/articles">{{ $category->name }}</a>
                            @endif
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
                                    src="{{ URL::to('/uploads') }}/{{$ele->avatar}}" alt=""/></a>
                            <h2>{{$ele->name}}</h2>
                            <p>{{$ele->full_name}}</p>
                        </article>
                    @endforeach
                </div>
                <ul class="actions">
                    <li><a href="{{ URL::to('/partner-companies') }}" class="button">Danh sách các đối tác của khoa</a></li>
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

        </div>
    </div>

</div>

<script src="{{ mix('/js/jquery.min.js') }}"></script>
<script src="{{ mix('/js/browser.min.js') }}"></script>
<script src="{{ mix('/js/breakpoints.min.js') }}"></script>
<script src="{{ mix('/js/util.js') }}"></script>
<script src="{{ mix('/js/main.js') }}"></script>

</body>
</html>
