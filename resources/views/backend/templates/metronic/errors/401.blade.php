@extends(cd_backend_template())
@section('body_class', '')
@section('meta_title', 'Unathorized')
@section('meta_keywords', '')
@section('meta_description', '')
@section('page_title', 'No Permission to view content.')
@section('head')
<link href="{{ cd_thememetronic_asset() }}assets/css/pages/error.css" rel="stylesheet" type="text/css"/>
@append
@section('body_bottom')
@append
@section('content')

<div class="row">
	<div class="col-md-12 page-404">
		<div class="number">
			401
		</div>
		<div class="details">
			<h3>Oops! You don't have permission.</h3>
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
