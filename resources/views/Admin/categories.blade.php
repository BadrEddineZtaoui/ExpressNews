@extends('mainAdmin')

@section('title', 'Categories')

@section('stylesheet')
	<link rel="stylesheet" href={{ asset("css/layout2.css") }} />
	{!! Html::style('css/parsley.css') !!}
@stop

@section('menu')
	@include('Admin._menu')
@stop

@section('content')

	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<h2>Categories</h2>
			<hr>
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
					</tr>
				</thead>

				<tbody>
					@foreach ($categories as $category)
					<tr>
						<th>{{ $category->id }}</th>
						<td>{{ $category->name }}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>

@stop

@section('aside')
	@include('Admin._aside')
@stop

@section('scripts')
	{!! Html::script('js/parsley.js') !!}
@stop