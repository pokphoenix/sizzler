@if (session()->has('message'))
	<h3 class="alert alert-success text-center">{!!session()->get('message')!!}</h3>
@endif
@if (session()->has('error'))
	<h3 class="alert alert-danger text-center">{!!session()->get('error')!!}</h3>
@endif