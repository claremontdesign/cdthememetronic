@extends(cd_thememetronic_view_name('login'))
@section('body_class', '')
@section('meta_title', 'Login')
@section('meta_keywords', '')
@section('meta_description', '')
@section('body_bottom')
@append
@section('content')
<!-- BEGIN LOGIN FORM -->
{!! cd_display_alerts() !!}
{!! view(cd_thememetronic_view_name('auth.form.login')) !!}
<!-- END LOGIN FORM -->
@stop