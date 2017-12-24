<body>
<div class="container">
    <div id="header">
        <h1 id="logo"><a href="#"><img src="{{asset('page_movie/images/logo.png')}}"></a></h1>
        <div class="search"> <!--cac button -->
            <input type="text" name="search" placeholder="Search..">
        </div>
        <div class="toolbar">
            <a href={{ url('register') }}><button class="button">Đăng Ký</button></a>
            <a href={{ url('login') }}><button class="button">Đăng nhập</button></a>
        </div>
        <div class="navigation">
            <ul class="navi">
                <li class="active"><a href="#" class="nav1">Trang chủ</a></li>
                <li class="dropdown">
                    <a href="#" class="dropbtn">Thể loại</a>
                    <div class="dropdown-content">
                        @foreach($categories as $category)
                            <a href={{ url('home/category/'.$category->id) }} class="nav1">{{ $category->category }}</a>
                        @endforeach
                    </div>
                </li>
                <li><a href="#" class="nav1">Phim mới</a></li>
                <li class="dropdown">
                    <a href="#" class="dropbtn">Phim lẻ</a>
                    <div class="dropdown-content">
                        <a href="#" class="nav1">2017</a>
                        <a href="#" class="nav1">2016</a>
                        <a href="#" class="nav1">2015</a>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropbtn">Phim bộ</a>
                    <div class="dropdown-content">
                        <a href="#" class="nav1">Phim bộ Hàn Quốc</a>
                        <a href="#" class="nav1">Phim bộ Trung Quốc</a>
                        <a href="#" class="nav1">Phim bộ Mỹ</a>

                        <a href="#" class="nav1">Phim bộ Việt Nam</a>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropbtn">Quốc gia</a>
                    <div class="dropdown-content">
                        @foreach($countries as $country)
                        <a href={{ url('home/country/'.$country->id) }} class="nav1">{{ $country->country }}</a>
                        @endforeach
                    </div>
                </li>
            </ul>
        </div> <!--end navigation-->
    </div> <!--end header-->
    <div class="slider">
        <div class="slider_container">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <a href="#" class="slie"><img src="{{asset('page_movie/images/slider3.jpg')}}" alt="" title=""/></a>
                    </li>
                    <li>
                        <a href="#" class="slie"><img src="{{asset('page_movie/images/slider2.jpg')}}" alt="" title=""/></a>
                    </li>
                    <li>
                        <a href="#" class="slie"><img src="{{asset('page_movie/images/slider4.jpg')}}" alt="" title=""/></a>
                    </li>
                    <li>
                        <a href="#" class="slie"><img src="{{asset('page_movie/images/slider5.jpg')}}" alt="" title=""/></a>
                    </li>
                    <li>
                        <a href="#" class="slie"><img src="{{asset('page_movie/images/slider6.jpg')}}" alt="" title=""/></a>
                    </li>
                </ul> <!--end ul-->
            </div> <!--end flexsilder-->
        </div>
    </div> <!--end slider-->