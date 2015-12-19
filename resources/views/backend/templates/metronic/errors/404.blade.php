@extends(cd_backend_template())
@section('body_class', '')
@section('meta_title', 'Page Not Found')
@section('meta_keywords', '')
@section('meta_description', '')
@section('page_title', 'Page Not Found.')
@section('head')
<link href="{{ cd_thememetronic_asset() }}assets/css/pages/error.css" rel="stylesheet" type="text/css"/>
@append
@section('body_bottom')
@append
@section('content')

<div class="row">
	<div class="col-md-12 page-404">
		<div class="number">
			404
		</div>
		<div class="details">
			<h3>Oops! You're lost.</h3>
			<p>
				<strong>{{ $e->getMessage() }}</strong><br/>
				We can not find the page you're looking for.<br/>
				<a href="/admin">
					Return home
				</a>
			</p>
		</div>
	</div>
</div>

@stop
