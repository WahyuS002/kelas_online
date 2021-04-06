@extends('layouts.backend')

@section('custom_style')
<link href="{{ asset('cursus/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('css/main.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="sa4d25">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="st_title"><i class='uil uil-cog'></i> Setting</h2>
                <div class="setting_tabs">
                    <ul class="nav nav-pills mb-4" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-account-tab" data-toggle="pill" href="#pills-account" role="tab" aria-selected="true">Account</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-notification-tab" data-toggle="pill" href="#pills-notification" role="tab" aria-selected="false">Notification</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-account" role="tabpanel" aria-labelledby="pills-account-tab">
                        <div class="account_setting">
                            <h4>Your Cursus Account</h4>
                            <p>This is your public presence on Cursus. You need a account to upload your paid courses, comment on courses, purchased by students, or earning.</p>
                            <div class="basic_profile">
                                <div class="basic_ptitle">
                                    <h4>Basic Profile</h4>
                                    <p>Add information about yourself</p>
                                </div>
                                <div class="basic_form">
                                    <div class="row">
                                        <div class="col-lg-10">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="ui search focus mt-30">
                                                        <p class="pl-2">Nama Lengkap <span class="text-red-600">*</span></p>
                                                        <div class="ui left icon input swdh11 swdh19">
                                                            <input class="prompt srch_explore" type="text" name="name" value="{{ $user->name }}" id="" required="" maxlength="64" placeholder="Nama Lengkap">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="ui search focus mt-30">
                                                        <p class="pl-2">Tanggal Lahir <span class="text-red-600">*</span></p>
                                                        <div class="ui left icon input swdh11 swdh19">
                                                            <input class="prompt srch_explore" type="date" name="tanggal_lahir" value="{{ $user->tanggal_lahir }}" id="id[tanggal_lahir]" required="" maxlength="64" placeholder="Last Name">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="ui search focus mt-30">
                                                        <p class="pl-2">Jenis Kelamin <span class="text-red-600">*</span></p>
                                                        <div class="ui left icon input swdh11 swdh19 d-flex flex-column">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="jk" id="jk_laki" value="L" {{ ($user->jk=="L") ? "checked" : "" }}>
                                                                <label class="form-check-label" for="jk_laki">
                                                                    Laki-laki
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="jk" id="jk_perempuan" value="P" {{ ($user->jk=="P") ? "checked" : "" }}>
                                                                <label class="form-check-label" for="jk_perempuan">
                                                                    Perempuan
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="ui search focus mt-30">
                                                        <p class="pl-2">Upload KTP / NPWP <span class="text-red-600">*</span></p>
                                                        <div class="ui left icon input swdh11 swdh19">
                                                            <input class="prompt srch_explore" type="file" name="tanggal_lahir" value="{{ $user->tanggal_lahir }}" id="id[tanggal_lahir]" required="" maxlength="64" placeholder="Last Name">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="ui search focus mt-30">
                                                        <p class="pl-2">NPWP</p>
                                                        <div class="ui left icon input swdh11 swdh19">
                                                            <input class="prompt srch_explore" type="text" name="tanggal_lahir" value="{{ $user->tanggal_lahir }}" id="id[tanggal_lahir]" required="" maxlength="64" placeholder="Last Name">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="ui search focus mt-30">
                                                        <p class="pl-2">NIK</p>
                                                        <div class="ui left icon input swdh11 swdh19">
                                                            <input class="prompt srch_explore" type="text" name="tanggal_lahir" value="{{ $user->tanggal_lahir }}" id="id[tanggal_lahir]" required="" maxlength="64" placeholder="Last Name">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="ui search focus mt-30">
                                                        <div class="ui left icon input swdh11 swdh19">
                                                            <input class="prompt srch_explore" type="text" name="headline" value="I  am a Web Designer" id="id_headline" required="" maxlength="60" placeholder="Headline">
                                                            <div class="form-control-counter" data-purpose="form-control-counter">36</div>
                                                        </div>
                                                        <div class="help-block">Add a professional headline like, "Engineer at Cursus" or "Architect."</div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="ui search focus mt-30">
                                                        <div class="ui form swdh30">
                                                            <div class="field">
                                                                <textarea rows="3" name="description" id="id_about" placeholder="Write a little description about you..."></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="help-block">Links and coupon codes are not permitted in this section.</div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="divider-1"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="basic_profile1">
                                <div class="basic_ptitle">
                                    <h4>Profile Links</h4>
                                </div>
                                <div class="basic_form">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="ui search focus mt-30">
                                                        <div class="ui left icon labeled input swdh11 swdh31">
                                                            <div class="ui label lb12">
                                                                https://
                                                            </div>
                                                            <input class="prompt srch_explore" type="text" name="site" value="gambolthemes.net" id="id_site" required="" maxlength="64"  placeholder="yoursite.com">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="ui search focus mt-30">
                                                        <div class="ui left icon labeled input swdh11 swdh31">
                                                            <div class="ui label lb12">
                                                                http://facebook.com/
                                                            </div>
                                                            <input class="prompt srch_explore" type="text" name="facebooklink" id="id_facebook" required="" maxlength="64"  placeholder="Facebook Profile">
                                                        </div>
                                                        <div class="help-block">Add your Facebook username (e.g. johndoe).</div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="ui search focus mt-30">
                                                        <div class="ui left icon labeled input swdh11 swdh31">
                                                            <div class="ui label lb12">
                                                                http://twitter.com/
                                                            </div>
                                                            <input class="prompt srch_explore" type="text" name="twitterlink" id="id_twitter" required="" maxlength="64"  placeholder="Twitter Profile">
                                                        </div>
                                                        <div class="help-block">Add your Twitter username (e.g. johndoe).</div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="ui search focus mt-30">
                                                        <div class="ui left icon labeled input swdh11 swdh31">
                                                            <div class="ui label lb12">
                                                                http://www.linkedin.com/
                                                            </div>
                                                            <input class="prompt srch_explore" type="text" name="linkedinlink" id="id_linkedin" required="" maxlength="64"  placeholder="Linkedin Profile">
                                                        </div>
                                                        <div class="help-block">Input your LinkedIn resource id (e.g. in/johndoe).</div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="ui search focus mt-30">
                                                        <div class="ui left icon labeled input swdh11 swdh31">
                                                            <div class="ui label lb12">
                                                                http://www.youtube.com/
                                                            </div>
                                                            <input class="prompt srch_explore" type="text" name="youtubelink" id="id_youtube" required="" maxlength="64"  placeholder="Youtube Profile">
                                                        </div>
                                                        <div class="help-block">Input your Youtube username (e.g. johndoe).</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="save_btn" type="submit">Save Changes</button>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-notification" role="tabpanel" aria-labelledby="pills-notification-tab">
                        <div class="account_setting">
                            <h4>Notifications - Choose when and how to be notified</h4>
                            <p>Select push and email notifications you'd like to receive</p>
                            <div class="basic_profile">
                                <div class="basic_form">
                                    <div class="nstting_content">
                                        <div class="basic_ptitle">
                                            <h4>Choose when and how to be notified</h4>
                                        </div>
                                        <div class="ui toggle checkbox _1457s2">
                                            <input type="checkbox" name="stream_ss1" checked>
                                            <label>Subscriptions</label>
                                            <p class="ml5">Notify me about activity from the profiles I'm subscribed to</p>
                                        </div>
                                        <div class="ui toggle checkbox _1457s2">
                                            <input type="checkbox" name="stream_ss2">
                                            <label>Recommended Courses</label>
                                            <p class="ml5">Notify me of courses I might like based on what I watch</p>
                                        </div>
                                        <div class="ui toggle checkbox _1457s2">
                                            <input type="checkbox" name="stream_ss3">
                                            <label>Activity on my comments</label>
                                            <p class="ml5">Notify me about activity on my comments on others’ courses</p>
                                        </div>
                                        <div class="ui toggle checkbox _1457s2">
                                            <input type="checkbox" name="stream_ss4" checked>
                                            <label>Replies to my comments</label>
                                            <p class="ml5">Notify me about replies to my comments</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="divider-1 mb-50"></div>
                            <div class="basic_profile">
                                <div class="basic_form">
                                    <div class="nstting_content">
                                        <div class="basic_ptitle">
                                            <h4>Email notifications</h4>
                                            <p>Your emails are sent to gambol943@gmail.com. To unsubscribe from an email, click the "Unsubscribe" link at the bottom of it. <a href="#">Learn more</a> about emails from Edututs+.</p>
                                        </div>
                                        <div class="ui toggle checkbox _1457s2">
                                            <input type="checkbox" name="stream_ss5" checked>
                                            <label>Send me emails about my Cursus activity and updates I requested</label>
                                            <p class="ml5">If this setting is turned off, Cursus may still send you messages regarding your account, required service announcements, legal notifications, and privacy matters</p>
                                        </div>
                                        <div class="ui toggle checkbox _1457s2">
                                            <input type="checkbox" name="stream_ss6">
                                            <label>Promotions, course recommendations, and helpful resources from Cursus.</label>
                                        </div>
                                        <div class="ui toggle checkbox _1457s2">
                                            <input type="checkbox" name="stream_ss7">
                                            <label>Announcements from instructors whose course(s) I’m enrolled in.</label>
                                            <p class="ml5">To adjust this preference by course, leave this box checked and go to the  course dashboard and click on "Options" to opt in or out of specific announcements.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="save_btn" type="submit">Save Changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection