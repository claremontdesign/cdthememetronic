<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
	<!--<![endif]-->
	<!-- BEGIN HEAD -->
	<head>
		<meta charset="utf-8"/>
		<title>Admin - @yield('meta_title')</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
		<meta content="" name="description"/>
		<meta content="Dennes B Abing" name="author"/>

		<!-- BEGIN GLOBAL MANDATORY STYLES -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
		<link href="{{ cd_thememetronic_asset() }}assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
		<link href="{{ cd_thememetronic_asset() }}assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
		<link href="{{ cd_thememetronic_asset() }}assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
		<!-- END GLOBAL MANDATORY STYLES -->
		<!-- BEGIN THEME STYLES -->
		<link href="{{ cd_thememetronic_asset() }}assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
		<link href="{{ cd_thememetronic_asset() }}assets/css/style.css" rel="stylesheet" type="text/css"/>
		<link href="{{ cd_thememetronic_asset() }}assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
		<link href="{{ cd_thememetronic_asset() }}assets/css/plugins.css" rel="stylesheet" type="text/css"/>
		<link href="{{ cd_thememetronic_asset() }}assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
		<link href="{{ cd_thememetronic_asset() }}assets/css/pages/login-soft.css" rel="stylesheet" type="text/css"/>
		<link href="{{ cd_thememetronic_asset() }}assets/css/custom.css" rel="stylesheet" type="text/css"/>
		<link href="{{ cd_backend_asset() }}css/cdbackend.css" rel="stylesheet" type="text/css"/>
		<!-- END THEME STYLES -->
		<script src="{{ cd_thememetronic_asset() }}assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
		<script src="{{ cd_thememetronic_asset() }}assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
		<script src="{{ cd_thememetronic_asset() }}assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
		@yield('head')

		@yield('head_bottom')
		<link rel="shortcut icon" href="{{ cd_thememetronic_asset() }}favicon.ico"/>
	</head>
	<!-- END HEAD -->
	<body class="backend page-header-fixed login @yield('body_class')">
		<div class="logo">
			<a href="/admin">
				<img src="{{ cd_backend_logo() }}" alt=""/>
			</a>
		</div>
		<div class="content">
			@yield('content')
		</div>
		<!--[if lt IE 9]>
		   <script src="{{ cd_thememetronic_asset() }}assets/plugins/respond.min.js"></script>
		   <script src="{{ cd_thememetronic_asset() }}assets/plugins/excanvas.min.js"></script>
		<![endif]-->
		<script src="{{ cd_thememetronic_asset() }}assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="{{ cd_thememetronic_asset() }}assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
		<script src="{{ cd_thememetronic_asset() }}assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
		<script src="{{ cd_thememetronic_asset() }}assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>
		<script src="{{ cd_thememetronic_asset() }}assets/plugins/jquery.cokie.min.js" type="text/javascript"></script>
		<script src="{{ cd_thememetronic_asset() }}assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
		<script src="{{ cd_thememetronic_asset() }}assets/plugins/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
		<script src="{{ cd_thememetronic_asset() }}assets/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
		<script src="{{ cd_thememetronic_asset() }}assets/scripts/core/cdbase.js"></script>

		<script src="{{ cd_thememetronic_asset() }}assets/scripts/custom/login-soft.js" type="text/javascript"></script>
		<script src="{{ cd_backend_asset() }}js/cdbackend.js"></script>
		<script type="text/javascript">
jQuery(document).ready(function() {
	App.init();
	Login.init();
});
		</script>
		<!-- END JAVASCRIPTS -->
		@yield('body_bottom')
	</body>
</html>
