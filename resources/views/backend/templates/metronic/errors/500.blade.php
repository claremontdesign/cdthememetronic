@extends(cd_backend_template())
@section('body_class', '')
@section('meta_title', 'Page Not Found')
@section('meta_keywords', '')
@section('meta_description', '')
@section('page_title', 'System Error.')
@section('head')
<link href="{{ cd_thememetronic_asset() }}assets/css/pages/error.css" rel="stylesheet" type="text/css"/>
@append
@section('body_bottom')
@append
@section('content')

<div class="row">
	<div class="col-md-12 page-404">
		<div class="number">
			500
		</div>
		<div class="details">
			<h3>Oops! Something went wrong.</h3>
			<p>
				We are fixing it!
				<br />
				Please come back in a while.
				<a href="/admin">
					Return home
				</a>
			</p>
		</div>
	</div>
</div>

@stop
