<!doctype html>
<html lang="en">
<!-- [Head] start -->

<head>
	<title>Sample Page | Berry Dashboard Template</title>
	<!-- [Meta] -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description"
		content="Berry is trending dashboard template made using Bootstrap 5 design framework. Berry is available in Bootstrap, React, CodeIgniter, Angular,  and .net Technologies." />
	<meta name="keywords"
		content="Bootstrap admin template, Dashboard UI Kit, Dashboard Template, Backend Panel, react dashboard, angular dashboard" />
	<meta name="author" content="codedthemes" />

	<!-- [Favicon] icon -->
	<link rel="icon" href="<?= base_url('assets/berry/dist') ?>/assets/images/favicon.svg" type="image/x-icon" />
	<!-- [Google Font] Family -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap"
		id="main-font-link" />
	<!-- [phosphor Icons] https://phosphoricons.com/ -->
	<link rel="stylesheet" href="<?= base_url('assets/berry/dist') ?>/assets/fonts/phosphor/duotone/style.css" />
	<!-- [Tabler Icons] https://tablericons.com -->
	<link rel="stylesheet" href="<?= base_url('assets/berry/dist') ?>/assets/fonts/tabler-icons.min.css" />
	<!-- [Feather Icons] https://feathericons.com -->
	<link rel="stylesheet" href="<?= base_url('assets/berry/dist') ?>/assets/fonts/feather.css" />
	<!-- [Font Awesome Icons] https://fontawesome.com/icons -->
	<link rel="stylesheet" href="<?= base_url('assets/berry/dist') ?>/assets/fonts/fontawesome.css" />
	<!-- [Material Icons] https://fonts.google.com/icons -->
	<link rel="stylesheet" href="<?= base_url('assets/berry/dist') ?>/assets/fonts/material.css" />
	<!-- [Template CSS Files] -->
	<link rel="stylesheet" href="<?= base_url('assets/berry/dist') ?>/assets/css/style.css" id="main-style-link" />
	<link rel="stylesheet" href="<?= base_url('assets/berry/dist') ?>/assets/css/style-preset.css" />

</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body data-pc-preset="preset-1" data-pc-sidebar-theme="light" data-pc-sidebar-caption="true" data-pc-direction="ltr"
	data-pc-theme="light">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->
	<!-- [ Sidebar Menu ] start -->
	<nav class="pc-sidebar">
		<div class="navbar-wrapper">
			<div class="m-header">
				<a href="" class="b-brand text-primary d-flex">
					<!-- ========   Change your logo from here   ============ -->
					<img src="<?= base_url('assets/img/smk.png') ?>" alt="" class="img-fluid" style="width: 20%; height: 20%;"/>
                    <h4 class="fw-bold mt-1" style="padding-left: 10px;">Dashboard <br><small>SMK Negeri 2 Karanganyar</small></h4>
				</a>
			</div>
			<div class="navbar-content">
				<ul class="pc-navbar">
					<li class="pc-item pc-caption">
						<label>Dashboard</label>
						<i class="ti ti-dashboard"></i>
					</li>
					<li class="pc-item">
						<a href="../dashboard/index.html" class="pc-link">
                            <span class="pc-micon">
                                <i class="ti ti-dashboard"></i>
                            </span>
                            <span class="pc-mtext">Default</span>
                        </a>
					</li>

					<li class="pc-item pc-caption">
						<label>Elements</label>
						<i class="ti ti-apps"></i>
					</li>
					<li class="pc-item">
						<a href="../elements/bc_typography.html" class="pc-link">
							<span class="pc-micon"><i class="ti ti-typography"></i></span>
							<span class="pc-mtext">Typography</span>
						</a>
					</li>
					<li class="pc-item">
						<a href="../elements/bc_color.html" class="pc-link">
							<span class="pc-micon"><i class="ti ti-color-swatch"></i></span>
							<span class="pc-mtext">Color</span>
						</a>
					</li>
					<li class="pc-item">
						<a href="../elements/icon-tabler.html" class="pc-link">
							<span class="pc-micon"><i class="ti ti-plant-2"></i></span>
							<span class="pc-mtext">Icons</span>
						</a>
					</li>

					<li class="pc-item pc-caption">
						<label>Pages</label>
						<i class="ti ti-news"></i>
					</li>
					<li class="pc-item">
						<a class="pc-link" target="_blank" href="../pages/login-v3.html">
							<span class="pc-micon"><i class="ti ti-lock"></i></span>
							<span class="pc-mtext">Login</span>
						</a>
					</li>
					<li class="pc-item">
						<a href="../pages/register-v3.html" target="_blank" class="pc-link">
							<span class="pc-micon"><i class="ti ti-user-plus"></i></span>
							<span class="pc-mtext">Register</span>
						</a>
					</li>

					<li class="pc-item pc-caption">
						<label>Other</label>
						<i class="ti ti-brand-chrome"></i>
					</li>
					<li class="pc-item pc-hasmenu">
						<a href="#!" class="pc-link"><span class="pc-micon"><i class="ti ti-menu"></i></span><span
								class="pc-mtext">Menu levels</span><span class="pc-arrow"><i
									data-feather="chevron-right"></i></span></a>
						<ul class="pc-submenu">
							<li class="pc-item"><a class="pc-link" href="#!">Level 2.1</a></li>
							<li class="pc-item pc-hasmenu">
								<a href="#!" class="pc-link">Level 2.2<span class="pc-arrow"><i
											data-feather="chevron-right"></i></span></a>
								<ul class="pc-submenu">
									<li class="pc-item"><a class="pc-link" href="#!">Level 3.1</a></li>
									<li class="pc-item"><a class="pc-link" href="#!">Level 3.2</a></li>
									<li class="pc-item pc-hasmenu">
										<a href="#!" class="pc-link">Level 3.3<span class="pc-arrow"><i
													data-feather="chevron-right"></i></span></a>
										<ul class="pc-submenu">
											<li class="pc-item"><a class="pc-link" href="#!">Level 4.1</a></li>
											<li class="pc-item"><a class="pc-link" href="#!">Level 4.2</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li class="pc-item pc-hasmenu">
								<a href="#!" class="pc-link">Level 2.3<span class="pc-arrow"><i
											data-feather="chevron-right"></i></span></a>
								<ul class="pc-submenu">
									<li class="pc-item"><a class="pc-link" href="#!">Level 3.1</a></li>
									<li class="pc-item"><a class="pc-link" href="#!">Level 3.2</a></li>
									<li class="pc-item pc-hasmenu">
										<a href="#!" class="pc-link">Level 3.3<span class="pc-arrow"><i
													data-feather="chevron-right"></i></span></a>
										<ul class="pc-submenu">
											<li class="pc-item"><a class="pc-link" href="#!">Level 4.1</a></li>
											<li class="pc-item"><a class="pc-link" href="#!">Level 4.2</a></li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="pc-item">
						<a href="../other/sample-page.html" class="pc-link">
							<span class="pc-micon"><i class="ti ti-brand-chrome"></i></span>
							<span class="pc-mtext">Sample page</span>
						</a>
					</li>

				</ul>
				<div class="w-100 text-center">
					<div class="badge theme-version badge rounded-pill bg-light text-dark f-12"></div>
				</div>
			</div>
		</div>
	</nav>
	<!-- [ Sidebar Menu ] end -->
	<!-- [ Header Topbar ] start -->
	<header class="pc-header">
		<div class="header-wrapper">
			<!-- [Mobile Media Block] start -->
			<div class="me-auto pc-mob-drp">
				<ul class="list-unstyled">
					<li class="pc-h-item header-mobile-collapse">
						<a href="#" class="pc-head-link head-link-primary ms-0" id="sidebar-hide">
							<i class="ti ti-menu-2"></i>
						</a>
					</li>
					<li class="pc-h-item pc-sidebar-popup">
						<a href="#" class="pc-head-link head-link-primary ms-0" id="mobile-collapse">
							<i class="ti ti-menu-2"></i>
						</a>
					</li>
					<li class="dropdown pc-h-item d-inline-flex d-md-none">
						<a class="pc-head-link head-link-primary dropdown-toggle arrow-none m-0"
							data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
							aria-expanded="false">
							<i class="ti ti-search"></i>
						</a>
						<div class="dropdown-menu pc-h-dropdown drp-search">
							<form class="px-3">
								<div class="mb-0 d-flex align-items-center">
									<i data-feather="search"></i>
									<input type="search" class="form-control border-0 shadow-none"
										placeholder="Search here. . ." />
								</div>
							</form>
						</div>
					</li>
					<li class="pc-h-item d-none d-md-inline-flex">
						<form class="header-search">
							<i data-feather="search" class="icon-search"></i>
							<input type="search" class="form-control" placeholder="Search here. . ." />
							<button class="btn btn-light-primary btn-search"><i
									class="ti ti-adjustments-horizontal"></i></button>
						</form>
					</li>
				</ul>
			</div>
			<!-- [Mobile Media Block end] -->
			<div class="ms-auto">
				<ul class="list-unstyled">
					<li class="dropdown pc-h-item header-user-profile">
						<a class="pc-head-link head-link-primary dropdown-toggle arrow-none me-0"
							data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
							aria-expanded="false">
							<img src="<?= base_url('assets/berry/dist') ?>/assets/images/user/avatar-2.jpg" alt="user-image" class="user-avtar" />
							<span>
								<i class="ti ti-settings"></i>
							</span>
						</a>
						<div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
							<div class="dropdown-header">
								<h4>
									Good Morning,
									<span class="small text-muted">John Doe</span>
								</h4>
								<p class="text-muted">Project Admin</p>
								<hr />
								<div class="profile-notification-scroll position-relative"
									style="max-height: calc(100vh - 280px)">
									
									<hr />
									<a href="../application/account-profile-v1.html" class="dropdown-item">
										<i class="ti ti-settings"></i>
										<span>Account Settings</span>
									</a>
									<a href="../application/social-profile.html" class="dropdown-item">
										<i class="ti ti-user"></i>
										<span>Social Profile</span>
									</a>
									<a href="../pages/login-v1.html" class="dropdown-item">
										<i class="ti ti-logout"></i>
										<span>Logout</span>
									</a>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</header>
	<!-- [ Header ] end -->



	<!-- [ Main Content ] start -->
	<div class="pc-container">
		<div class="pc-content">
			<!-- [ breadcrumb ] start -->
			<div class="page-header">
				<div class="page-block">
					<div class="row align-items-center">
						<div class="col">
							<div class="page-header-title">
								<h5 class="m-b-10">Sample Page</h5>
							</div>
						</div>
						<div class="col-auto">
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="../dashboard/index.html">Home</a></li>
								<li class="breadcrumb-item"><a href="javascript: void(0)">Other</a></li>
								<li class="breadcrumb-item" aria-current="page">Sample Page</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- [ breadcrumb ] end -->


			<!-- [ Main Content ] start -->
			<div class="row">
				<!-- [ sample-page ] start -->
				<div class="col-sm-12">
					<div class="card">
						<div class="card-header">
							<h5>Hello card</h5>
						</div>
						<div class="card-body">
							Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore error beatae assumenda
							aliquid? Iusto sequi repellendus
							doloribus dicta, voluptate odit odio perferendis id ipsam similique quasi praesentium sint
							saepe? Obcaecati!
						</div>
					</div>
				</div>
				<!-- [ sample-page ] end -->
			</div>
			<!-- [ Main Content ] end -->
		</div>
	</div>
	<!-- [ Main Content ] end -->
	<footer class="pc-footer">
		<div class="footer-wrapper container-fluid">
			<div class="row">
				<div class="col-sm-6 my-1">
					<p class="m-0">
						Berry &#9829; crafted by Team
						<a href="https://themeforest.net/user/codedthemes" target="_blank">CodedThemes</a>
					</p>
				</div>
				<div class="col-sm-6 ms-auto my-1">
					<ul class="list-inline footer-link mb-0 justify-content-sm-end d-flex">
						<li class="list-inline-item"><a href="../index.html">Home</a></li>
						<li class="list-inline-item"><a href="https://codedthemes.gitbook.io/berry-bootstrap/"
								target="_blank">Documentation</a></li>
						<li class="list-inline-item"><a href="https://codedthemes.support-hub.io/"
								target="_blank">Support</a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- Required Js -->
	<script src="<?= base_url('assets/berry/dist') ?>/assets/js/plugins/popper.min.js"></script>
	<script src="<?= base_url('assets/berry/dist') ?>/assets/js/plugins/simplebar.min.js"></script>
	<script src="<?= base_url('assets/berry/dist') ?>/assets/js/plugins/bootstrap.min.js"></script>
	<script src="<?= base_url('assets/berry/dist') ?>/assets/js/icon/custom-font.js"></script>
	<script src="<?= base_url('assets/berry/dist') ?>/assets/js/script.js"></script>
	<script src="<?= base_url('assets/berry/dist') ?>/assets/js/theme.js"></script>
	<script src="<?= base_url('assets/berry/dist') ?>/assets/js/plugins/feather.min.js"></script>


	<script>
		layout_change('light');

	</script>

	<script>
		font_change('Roboto');

	</script>

	<script>
		change_box_container('false');

	</script>

	<script>
		layout_caption_change('true');

	</script>

	<script>
		layout_rtl_change('false');

	</script>

	<script>
		preset_change('preset-1');

	</script>


</body>
<!-- [Body] end -->

</html>
