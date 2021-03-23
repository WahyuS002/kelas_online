<!-- Header Start -->
<header class="header clearfix">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="ml_item" style="width: 0;">
                    <div class="main_logo main_logo15" id="logo">
                        <a href="{{ route('home') }}"><img src="{{ asset('cursus/images/logo_cursus.svg') }}" alt="" style="width: 125px;"></a>
                        <a href="{{ route('home') }}"><img class="logo-inverse" src="{{ asset('cursus/images/ct_logo.svg') }}" alt=""></a>
                    </div>
                </div>
                <div class="header_right pr-0">
                    <ul>
                        <li>
                            <a href="{{ route('kelas') }}">Kelas</a>
                        </li>
                        @auth
                        <li class="ui top right pointing dropdown">
                            <a href="#" class="opts_account">
                                <img src="{{ asset('cursus/images/hd_dp.jpg') }}" alt="">
                            </a>
                            <div class="menu dropdown_account">
                                <div class="channel_my">
                                    <div class="profile_link">
                                        <img src="images/hd_dp.jpg" alt="">
                                        <div class="pd_content">
                                            <div class="rhte85">
                                                <h6>Joginder Singh</h6>
                                                <div class="mef78" title="Verify">
                                                    <i class='uil uil-check-circle'></i>
                                                </div>
                                            </div>
                                            <span>gambol943@gmail.com</span>
                                        </div>
                                    </div>
                                    <a href="my_instructor_profile_view.html" class="dp_link_12">View Instructor Profile</a>
                                </div>
                                <a href="{{ route('dashboard') }}" class="item channel_item">Dashboard</a>

                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" href="#" class="item channel_item btn_sign_out">Sign Out</button>
                                </form>
                            </div>
                        </li>
                        @endauth
                        @guest
                            <a class="btn btn-success rounded-lg m-3 px-4" href="{{ route('login') }}">
                                Login
                            </a>
                        @endguest
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->