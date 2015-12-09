<!-- BEGIN HEADER -->
<div class="header navbar navbar-fixed-top">
	<!-- BEGIN TOP NAVIGATION BAR -->
	<div class="header-inner">
		<!-- BEGIN LOGO -->
		<a class="navbar-brand" href="{{ url('/admin') }}">
			<img src="{{ cd_backend_logo() }}" alt="logo" class="img-responsive"/>
		</a>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<img src="{{ cd_thememetronic_asset() }}assets/img/menu-toggler.png" alt=""/>
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN TOP NAVIGATION MENU -->
		<ul class="nav navbar-nav pull-right">
			{!! view(cd_thememetronic_view_name('partial.notifications')) !!}
			{!! view(cd_thememetronic_view_name('partial.messages')) !!}
			{!! view(cd_thememetronic_view_name('partial.todo')) !!}
			<!-- BEGIN USER LOGIN DROPDOWN -->
			<li class="dropdown user">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<img alt="<?php echo app('auth')->user()->displayName() ?>" src="<?php echo app('auth')->user()->avatar() ?>"/>
					<span class="username">
						<?php echo app('auth')->user()->displayName() ?>
					</span>
					<i class="fa fa-angle-down"></i>
				</a>



				<ul class="dropdown-menu">
					{!! cd_backend_render_nav('topright') !!}
					 <li class="divider"></li>
					<li>
						<a href="javascript:;" id="trigger_fullscreen">
							<i class="fa fa-arrows"></i> Full Screen
						</a>
					</li>
					<li>
						<a href="/admin/logout">
							<i class="fa fa-key"></i> Log Out
						</a>
					</li>
				</ul>
			</li>
			<!-- END USER LOGIN DROPDOWN -->
		</ul>
		<!-- END TOP NAVIGATION MENU -->
	</div>
	<!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->