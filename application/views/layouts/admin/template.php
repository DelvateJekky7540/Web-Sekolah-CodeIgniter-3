<!doctype html>
<html lang="en">
<!-- [Head] start -->

<head>
	<?php $this->load->view('layouts/admin/_css')?>
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
	<?php $this->load->view('layouts/admin/_sidebar') ?>
	<!-- [ Sidebar Menu ] end -->


	<!-- [ Header Topbar ] start -->
	<?php $this->load->view('layouts/admin/_header') ?>
	<!-- [ Header ] end -->



	<!-- [ Main Content ] start -->
	<div class="pc-container">
		<div class="pc-content">
			<!-- [ Main Content ] start -->
			<?= $contents ?>
			<!-- [ Main Content ] end -->
		</div>
	</div>
	<!-- [ Main Content ] end -->
	
	
	<!-- [ Footer ] start -->
	<?php $this->load->view('layouts/admin/_footer') ?>
	<!-- [ Footer ] end -->


	<!-- Required Js -->
	<?php $this->load->view('layouts/admin/_js') ?>
	
</body>
<!-- [Body] end -->

</html>

