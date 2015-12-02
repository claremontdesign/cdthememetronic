<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
	<!--<![endif]-->
	<!-- BEGIN HEAD -->
	<head>
		<meta charset="utf-8"/>
		<title>@yield('meta_title')</title>
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
		<link href="{{ cd_thememetronic_asset() }}assets/css/custom.css" rel="stylesheet" type="text/css"/>
		<!-- END THEME STYLES -->
		<script src="{{ cd_thememetronic_asset() }}assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
		<script src="{{ cd_thememetronic_asset() }}assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
		<script src="{{ cd_thememetronic_asset() }}assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
		@yield('head')

		@yield('head_bottom')
		<link rel="shortcut icon" href="{{ cd_thememetronic_asset() }}favicon.ico"/>
	</head>
	<!-- END HEAD -->
	<body class="backend page-header-fixed @yield('body_class')">
		{!! view(cd_thememetronic_view_name('partial.header')) !!}
		<div class="clearfix"></div>
		<!-- CONTENT -->
		<!-- BEGIN CONTAINER -->
		<div class="page-container">
			{!! view(cd_thememetronic_view_name('partial.sidebar')) !!}
			<!-- BEGIN CONTENT -->
			<div class="page-content-wrapper">
				<div class="page-content">
					{!! view(cd_thememetronic_view_name('partial.stylecustomizer')) !!}
					<!-- BEGIN PAGE HEADER-->
					<div class="row">
						<div class="col-md-12">
							<h3 class="page-title">
								@yield('page_title') <small>@yield('page_subtitle')</small>
							</h3>
							{!! view(cd_thememetronic_view_name('partial.breadcrumbs')) !!}
						</div>
					</div>
					<!-- END PAGE HEADER-->
					<!-- BEGIN PAGE CONTENT-->
					<div class="row">
						<div class="col-md-12">
							<div class="portlet">
								<div class="portlet-title">
									<div class="caption">
										{{ cd_backend_render_entity_title() }}
									</div>
								</div>
								<div class="portlet-body">
									{!! cd_display_errors() !!}
									{!! cd_display_msgs() !!}
									@yield('content')
								</div>
							</div>
						</div>
					</div>
					<!-- END PAGE CONTENT-->
				</div>
			</div>
			<!-- END CONTENT -->
		</div>
		<!-- END CONTAINER -->

		<!-- CONTENT -->

		{!! view(cd_thememetronic_view_name('partial.footer')) !!}
		<!-- BEGIN CORE PLUGINS -->
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
		<!-- END CORE PLUGINS -->
		<script src="{{ cd_thememetronic_asset() }}assets/scripts/core/cdbase.js"></script>
		<script type="text/javascript">
jQuery(document).ready(function() {
	App.init();
});
		</script>
		<!-- END JAVASCRIPTS -->
		@yield('body_bottom')
	</body>
</html>