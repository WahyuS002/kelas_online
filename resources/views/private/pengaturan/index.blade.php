@extends('layouts.backend')

@section('custom_style')
<link href="{{ asset('cursus/css/style.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="_216b01">
    <div class="container-fluid">
        <div class="row justify-content-md-center">
            <div class="col-md-10">
                <div class="section3125 rpt145">
                    <div class="row">
                        <div class="col-lg-7">
                            <a href="#" class="_216b22">
                                <span><i class="uil uil-cog"></i></span>Pengaturan
                            </a>
                            <div class="dp_dt150">
                                <div class="img148">
                                    <img src="{{ asset( ($user->foto) ? $user->foto : 'cursus/images/user.png' ) }}" alt="">
                                </div>
                                <div class="prfledt1">
                                    <h2>{{ $user->name }}</h2>
                                    <span>UI / UX Designer and Web Developer</span>
                                </div>
                            </div>
                            <ul class="_ttl120">
                                <li>
                                    <div class="_ttl121">
                                        <div class="_ttl122">Enroll Students</div>
                                        <div class="_ttl123">612K</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="_ttl121">
                                        <div class="_ttl122">Courses</div>
                                        <div class="_ttl123">8</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="_ttl121">
                                        <div class="_ttl122">Reviews</div>
                                        <div class="_ttl123">11K</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="_ttl121">
                                        <div class="_ttl122">Subscriptions</div>
                                        <div class="_ttl123">452K</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-5">
                            <a href="setting.html" class="_216b12">
                                <span><i class="uil uil-cog"></i></span>Pengaturan
                            </a>
                            <div class="rgt-145">
                                <ul class="tutor_social_links">
                                    <li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" class="ln"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#" class="yu"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                            <ul class="_bty149">
                                <li><button class="studio-link-btn btn500" onclick="window.location.href = '{{ route('dashboard') }}';">Dasbor</button></li>
                                <li><button class="msg125 btn500" onclick="window.location.href = '{{ route('user.pengaturan.profile') }}';">Edit</button></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="_215b17">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="course_tab_content">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-about" role="tabpanel">
                            <div class="_htg451">
                                <div class="_htg452">
                                    <h3>About Me</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum scelerisque nibh sed ligula blandit, quis faucibus lorem pellentesque. Suspendisse pulvinar dictum pellentesque. Vestibulum at sagittis lectus, sit amet aliquam turpis. In quis elit tempus, semper justo vitae, lacinia massa. Etiam sagittis quam quis fermentum lacinia. Curabitur blandit sapien et risus congue viverra. Mauris auctor risus sit amet cursus sollicitudin. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla feugiat sodales massa, in viverra dolor condimentum ut. In imperdiet, justo nec volutpat blandit, tellus justo tempor quam, sed pretium nibh nunc nec mauris. Mauris vel malesuada magna. Quisque iaculis molestie purus, non luctus mauris porta id. Maecenas imperdiet tincidunt mauris vestibulum vulputate. Aenean sollicitudin pretium nibh, et sagittis risus tincidunt ac. Phasellus scelerisque rhoncus massa, ac euismod massa pharetra non. Phasellus dignissim, urna in iaculis varius, turpis libero mollis velit, sit amet euismod arcu mi ac nibh. Praesent tincidunt eros at ligula pellentesque elementum. Fusce condimentum enim a tellus egestas, sit amet rutrum elit gravida. Pellentesque in porta sapien. Fusce tristique maximus ipsum et mollis. Sed at massa ac est dapibus vulputate at eu nibh.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection