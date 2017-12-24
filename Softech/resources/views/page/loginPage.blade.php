
@extends('block.index')
@section('title','Đăng Nhập')
@section('content')
    <!-- MAIN -->
    <div class="search_page register_page">
        <!-- CONTENT -->
        <div class="container">
            <div class="row">
                <!-- MAIN CONTENT -->
                <div class="col-sm-2"></div>
                <div class="col-sm-8 .content-Register">
                    <section id="register_form">
                        <article class="">
                            <form action="" method="post">
                                {{ csrf_field() }}
                                <h2>Đăng Nhập</h2>
                                <p class="text-center">Đăng nhập hoặc đăng ký thành viên nhanh bằng tài khoản</p>
                                <div class="social-click">
                                    <div class="entry-social button-social">
                                        <div class="fb">
                                            <a href="{{ URL::to('auth/facebook') }}" target="_blank">Đăng nhập Facebook</a>
                                        </div>
                                        <div class="gplus">
                                            <a href="{{ URL::to('auth/google') }}" target="_blank">Đăng nhập Google+</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-text-login">
                                    <p class="text-center">Đăng nhập bằng tài khoản movie</p>
                                    <div class="item-inline">
                                        <input type="text" class="form-control" name="username" id="last_name" placeholder="Nhập username">
                                        <input type="text" class="form-control" name="password" id="first_name" placeholder="Nhập password">
                                        <div class="button-inline">
                                            <button type="submit" class="btn btn-warning button-green">Đăng Nhập</button>
                                        </div>
                                    </div>
                                    <a class="text-green" href="#">Quên mật khẩu</a>
                                </div>
                                <div class="text-center-padding">
                                    <sapn>Bạn chưa có tài khoản, <a class="text-green" href="register.html">Đăng kí ngay</a></span>
                                </div>
                            </form>
                        </article>
                    </section>
                </div>
                <!-- END MAIN CONTENT -->
                <!-- RIGHT CONTENT -->
                <div class="col-sm-2">
                </div>
                <!-- END RIGHT CONTENT -->
                <!-- END CONTENT -->
            </div>
            <!-- END MAIN -->
        </div>
    </div>
@endsection
