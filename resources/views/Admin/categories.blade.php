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
	<h1>Categories</h1>
	<hr>
	<div class="panel-body">
        <div class="table-responsive">
            <table class="table table-hover">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
						<th>Action</th>
					</tr>
				</thead>

				<tbody>
					@foreach ($categories as $category)
					<tr>
						<th>{{ $category->id }}</th>
						<td>{{ $category->name }}</td>
						<td>
							<button class="btn btn-primary"><i class="icon-pencil icon-white"></i> Modifier</button>
							<button class="btn btn-danger"><i class="icon-remove icon-white"></i> Supprimer</button>
						</td>
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