@extends(cd_backend_template())
@section('body_class', '')
@section('meta_title', 'Unauthorized')
@section('meta_keywords', '')
@section('meta_description', '')
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
				{{ $e->getMessage() }}<br/>
				<a href="/admin">
					Return home
				</a>
			</p>
		</div>
	</div>
</div>
@stop
