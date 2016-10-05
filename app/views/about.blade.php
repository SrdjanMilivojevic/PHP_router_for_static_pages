@extends('layouts/app')

@section('content')
<div class="containder">
	<div class="jumbotron" style="background:lime;">
		<h1 class="text-center" style="color:white;"> {{$note or ''}}</h1>
	</div>

</div>
<h1>{{$page}}</h1>
@stop
