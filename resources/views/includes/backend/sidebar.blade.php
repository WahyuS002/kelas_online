	<!-- Left Sidebar Start -->
	<nav class="vertical_nav">
		<div class="left_section menu_left" id="js-menu" >
			<div class="left_section">
				<ul>
					<li class="menu--item">
						<a href="{{ route('dashboard') }}" class="menu--link {{ request()->is('dashboard') ? ' active' : ''}} " title="Dashboard">
							<i class="uil uil-apps menu--icon"></i>
							<span class="menu--label">Dasbor</span>
						</a>
					</li>
					<li class="menu--item">
						<a href="instructor_courses.html" class="menu--link" title="Courses">
							<i class='uil uil-book-alt menu--icon'></i>
							<span class="menu--label">Kursus</span>
						</a>
					</li>
					<li class="menu--item">
						<a href="create_new_course.html" class="menu--link" title="Create Course">
							<i class='uil uil-plus-circle menu--icon'></i>
							<span class="menu--label">Buat Kursus</span>
						</a>
					</li>
					<li class="menu--item">
						<a href="instructor_notifications.html" class="menu--link" title="Notifications">
						  <i class='uil uil-bell menu--icon'></i>
						  <span class="menu--label">Notifications</span>
						</a>
					</li>
					<li class="menu--item">
						<a href="instructor_my_certificates.html" class="menu--link" title="My Certificates">
						  <i class='uil uil-award menu--icon'></i>
						  <span class="menu--label">Sertifikat</span>
						</a>
					</li>
					<li class="menu--item">
						<a href="instructor_all_reviews.html" class="menu--link" title="Reviews">
						  <i class='uil uil-star menu--icon'></i>
						  <span class="menu--label">Reviews</span>
						</a>
					</li>
					<li class="menu--item">
						<a href="instructor_earning.html" class="menu--link" title="Earning">
						  <i class='uil uil-dollar-sign menu--icon'></i>
						  <span class="menu--label">Pendapatan</span>
						</a>
					</li>
					<li class="menu--item">
						<a href="instructor_payout.html" class="menu--link" title="Payout">
						  <i class='uil uil-wallet menu--icon'></i>
						  <span class="menu--label">Pembayaran</span>
						</a>
					</li>
					<li class="menu--item">
						<a href="instructor_verification.html" class="menu--link" title="Verification">
						  <i class='uil uil-check-circle menu--icon'></i>
						  <span class="menu--label">Verifikasi</span>
						</a>
					</li>
				</ul>
			</div>
			<div class="left_section pt-2">
				<ul>
					<li class="menu--item">
						<a href="{{ route('user.pengaturan') }}" class="menu--link {{ request()->is('user/pengaturan') || request()->is('user/pengaturan/*') ? ' active' : '' }}" title="Setting">
							<i class='uil uil-cog menu--icon'></i>
							<span class="menu--label">Pengaturan</span>
						</a>
					</li>
					<li class="menu--item">
						<a href="feedback.html" class="menu--link" title="Send Feedback">
							<i class='uil uil-comment-alt-exclamation menu--icon'></i>
							<span class="menu--label">Send Feedback</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- Left Sidebar End -->