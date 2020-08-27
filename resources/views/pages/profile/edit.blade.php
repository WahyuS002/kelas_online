@extends('layouts.backend')

@push('style-after')
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('cork/plugins/dropify/dropify.min.css') }}">
    <link href="{{ asset('cork/assets/css/users/account-setting.css') }}" rel="stylesheet" type="text/css" />
    <!--  END CUSTOM STYLE FILE  -->
@endpush

@section('content')
    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="cs-overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">                
                    
                <form action="{{ route('profile.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="account-settings-container layout-top-spacing">

                    <div class="account-content">
                        <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <div id="general-info" class="section general-info">
                                        <div class="info">
                                            <h6 class="">General Information</h6>
                                            <div class="row">
                                                <div class="col-lg-11 mx-auto">
                                                    <div class="row">
                                                        <div class="col-xl-2 col-lg-12 col-md-4">
                                                            <div class="upload mt-4 pr-md-4">
                                                                <input type="file" id="input-file-max-fs" class="dropify" data-default-file="{{ asset('cork/assets/img/200x200.jpg') }}" data-max-file-size="2M" name="foto" />
                                                                <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i> Upload Picture</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                            <div class="form">
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label for="name">Full Name</label>
                                                                            <input type="text" class="form-control mb-4" id="name" placeholder="Full Name" value="{{ $user->name }}" name="name">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <label class="dob-input">Date of Birth</label>                                                                        
                                                                            <div class="form-group mr-1">
                                                                                <input type="date" class="form-control" name="tanggal_lahir">
                                                                            </div>                                                                                                                                                    
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="row">
                                                                        <div class="col-sm-4">
                                                                            <label for="nik">NIK</label>
                                                                            <input type="text" class="form-control mb-4" id="nik" placeholder="17710608237558906" value="{{ $user->nik }}" name="nik">
                                                                        </div>
                                                                        <div class="col-sm-4">
                                                                            <label for="npwp">NPWP</label>
                                                                            <input type="text" class="form-control mb-4" id="npwp" placeholder="12089238928212" value="{{ $user->npwp }}" name="npwp">
                                                                        </div>
                                                                        <div class="col-sm-4">
                                                                            <label for="jk">Jenis Kelamin</label>
                                                                            <br>
                                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                            <input type="radio" id="customRadioInline1" name="jk" class="custom-control-input" value="L">
                                                                            <label class="custom-control-label" for="customRadioInline1">Laki-laki</label>
                                                                            </div>
                                                                        <div class="custom-control custom-radio custom-control-inline">
                                                                            <input type="radio" id="customRadioInline2" name="jk" class="custom-control-input" value="P">
                                                                            <label class="custom-control-label" for="customRadioInline2">Perempuan</label>
                                                                        </div>
                                                                        
                                                                        </div>
                                                                    </div>                                                                                                                                                                                                       
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <div id="about" class="section about">
                                        <div class="info">
                                            <h5 class="">About</h5>
                                            <div class="row">
                                                <div class="col-md-11 mx-auto">
                                                    <div class="form-group">
                                                        <label for="bio">Bio</label>
                                                        <textarea class="form-control" id="bio" placeholder="Tell something interesting about yourself" rows="10" name="bio">I'm Creative Director and UI/UX Designer from Sydney, Australia, working in web development and print media. I enjoy turning complex problems into simple, beautiful and intuitive designs.

My job is to build your website so that it is functional and user-friendly but at the same time attractive. Moreover, I add personal touch to your product and make sure that is eye-catching and easy to use. My aim is to bring across your message and identity in the most creative way. I created web design for many famous brand companies.</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <div id="contact" class="section contact">
                                        <div class="info">
                                            <h5 class="">Contact</h5>
                                            <div class="row">
                                                <div class="col-md-11 mx-auto">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="country">Provinsi</label>
                                                                <select class="form-control" name="prov_id">
                                                                    <option>All Countries</option>
                                                                    <option value="1">United States</option>
                                                                    <option>India</option>
                                                                    <option>Japan</option>
                                                                    <option>China</option>
                                                                    <option>Brazil</option>
                                                                    <option>Norway</option>
                                                                    <option>Canada</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="country">Kabupaten/Kota</label>
                                                                <select class="form-control" name="kota_id">
                                                                    <option>All Countries</option>
                                                                    <option value="2">United States</option>
                                                                    <option>India</option>
                                                                    <option>Japan</option>
                                                                    <option>China</option>
                                                                    <option>Brazil</option>
                                                                    <option>Norway</option>
                                                                    <option>Canada</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="country">Kecamatan</label>
                                                                <select class="form-control" name="kec_id">
                                                                    <option>All Countries</option>
                                                                    <option value="3">United States</option>
                                                                    <option>India</option>
                                                                    <option>Japan</option>
                                                                    <option>China</option>
                                                                    <option>Brazil</option>
                                                                    <option>Norway</option>
                                                                    <option>Canada</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="country">Kelurahan</label>
                                                                <select class="form-control" name="kel_id">
                                                                    <option>All Countries</option>
                                                                    <option value="4">United States</option>
                                                                    <option>India</option>
                                                                    <option>Japan</option>
                                                                    <option>China</option>
                                                                    <option>Brazil</option>
                                                                    <option>Norway</option>
                                                                    <option>Canada</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="alamat">Alamat</label>
                                                                <input type="text" class="form-control mb-4" id="alamat" placeholder="Jl. Kampar 03" name="alamat">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="phone">No.HP</label>
                                                                <input type="number" class="form-control mb-4" id="phone" placeholder="Write your phone number here" name="no_hp">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="email">Email</label>
                                                                <input type="text" class="form-control mb-4" id="email" placeholder="Write your email here" value="{{ $user->email }}" name="email" disabled>
                                                            </div>
                                                        </div>                                    
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="country">Pendidikan Terakhir</label>
                                                                <select class="form-control" name="pendidikan_terakhir">
                                                                    <option>Pilih Pendidikan</option>
                                                                    <option value="SD">SD</option>
                                                                    <option value="SMP">SMP</option>
                                                                    <option value="SMA">SMA</option>
                                                                    <option value="Kuliah">Kuliah</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <div id="social" class="section social">
                                        <div class="info">
                                            <h5 class="">Social</h5>
                                            <div class="row">

                                                <div class="col-md-11 mx-auto">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="input-group social-fb mb-3">
                                                                <div class="input-group-prepend mr-3">
                                                                    <span class="input-group-text" id="fb"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></span>
                                                                </div>
                                                                <input type="text" class="form-control" placeholder="Facebook URL" aria-label="Username" aria-describedby="fb" value="{{ $user->fb }}" name="fb">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="input-group social-tweet mb-3">
                                                                <div class="input-group-prepend mr-3">
                                                                    <span class="input-group-text" id="tweet"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg></span>
                                                                </div>
                                                                <input type="text" class="form-control" placeholder="Twitter URL" aria-label="Username" aria-describedby="tweet" value="{{ $user->twitter }}" name="twitter">
                                                            </div>
                                                        </div>                                                        
                                                    </div>
                                                </div>

                                                <div class="col-md-11 mx-auto">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="input-group social-fb mb-3">
                                                                <div class="input-group-prepend mr-3">
                                                                    <span class="input-group-text" id="fb"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg></span>
                                                                </div>
                                                                <input type="text" class="form-control" placeholder="Instagram URL" aria-label="Username" aria-describedby="fb" value="{{ $user->ig }}" name="ig">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="input-group social-github mb-3">
                                                                <div class="input-group-prepend mr-3">
                                                                    <span class="input-group-text" id="github"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-youtube"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"></path><polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"></polygon></svg></span>
                                                                </div>
                                                                <input type="text" class="form-control" placeholder="YouTube URL" aria-label="Username" aria-describedby="github" value="{{ $user->yt }}" name="yt">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <button type="submit">Save</button>

                    {{-- <div class="account-settings-footer">
                        
                        <div class="as-footer-container">

                            <button id="multiple-reset" class="btn btn-warning">Reset All</button>
                            <div class="blockui-growl-message">
                                <i class="flaticon-double-check"></i>&nbsp; Settings Saved Successfully
                            </div>
                            <button type="submit" id="multiple-messages" class="btn btn-primary">Save Changes</button>

                        </div>

                    </div> --}}
                </form>
                </div>

                </div>
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->
@endsection

@push('script-after')
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->

    <script src="{{ asset('cork/plugins/dropify/dropify.min.js') }}"></script>
    <script src="{{ asset('cork/plugins/blockui/jquery.blockUI.min.js') }}"></script>
    <!-- <script src="plugins/tagInput/tags-input.js"></script> -->
    <script src="{{ asset('cork/assets/js/users/account-settings.js') }}"></script>
    <!--  END CUSTOM SCRIPTS FILE  -->
@endpush