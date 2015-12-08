<form class="login-form" action="{{ cd_route('postLogin') }}" method="post">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<h3 class="form-title"></h3>
	<div class="alert alert-danger display-hide">
		<button class="close" data-close="alert"></button>
		<span>
			Enter any username and password.
		</span>
	</div>
	<div class="form-group">
		<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
		<label class="control-label visible-ie8 visible-ie9">Username</label>
		<div class="input-icon">
			<i class="fa fa-user"></i>
			<input type="email" class="form-control" name="email">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label visible-ie8 visible-ie9">Password</label>
		<div class="input-icon">
			<i class="fa fa-lock"></i>
			<input type="password" class="form-control"  name="password">
		</div>
	</div>
	<div class="form-actions">
		<label class="checkbox">
			<input type="checkbox" name="remember" value="1"/> Remember me </label>
		<button type="submit" class="btn green pull-right">
			Login <i class="m-icon-swapright m-icon-white"></i>
		</button>
	</div>
</form>