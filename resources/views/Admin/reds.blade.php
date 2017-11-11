@extends('mainAdmin')

@section('title', 'Redacteurs')

@section('menu')
	@include('Admin._menu')
@stop

@section('content')
	<h1>Redacteurs</h1>
	<hr>
	<div class="panel-body">
        <div class="table-responsive">
            <table class="table table-hover">
				<thead>
					<tr>
						<th>#</th>
						<th>Nom</th>
						<th>Categorie</th>
						<th>Action</th>
					</tr>
				</thead>

				<tbody>
					@foreach ($reds as $red)
					<tr>
						<th>{{ $red->id }}</th>
						<td>{{ $red->name }}</td>
						<td>{{ App\Category::find($red->category_id)->name }}</td>
						<td>
							<button class="btn"><i class="icon-eye-open"></i> View</button>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@stop