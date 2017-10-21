<!DOCTYPE html>
<html>
	<head>
		@include('partials._head')
	</head>

	<body>
		@include('partials._header')
		@include('partials._breaking')


		<!-- content-section-starts-here -->
		<div class="main-body">
			<div class="wrap">

				<!--content-->
				<div class="col-md-8 content-left">
					@yield('content')
				</div>
				<!--end content-->

				<!--sidebar-->
				<div class="col-md-4 side-bar">

					<!--sidebar-->
					@include('partials._sidebar')

				</div>
				<!--end sidebar-->
				<div class="clearfix"></div>
			</div>
		</div>
		<!-- content-section-ends-here -->


		<!-- footer-section-starts-here -->
		<div class="footer">

			<!--footer-->
			@include('partials._footer')

		</div>
		<!-- footer-section-ends-here -->


		<script type="text/javascript">
			$(document).ready(function() {
					/*
					var defaults = {
					wrapID: 'toTop', // fading element id
					wrapHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
					};
					*/
			$().UItoTop({ easingType: 'easeOutQuart' });
			});
		</script>
		<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</body>
</html>