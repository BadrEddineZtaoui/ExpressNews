@extends('mainAdmin')

@section('title', 'Redacteurs En Chef')

@section('menu')
	@include('Admin._menu')
@stop

@section('content')
	<h1 style="float: left;">Redacteurs En Chef</h1>
	<button class="btn btn-primary" style="float: right;font-size: 20px;margin-top: 20px;"> Ajouter un Redacteur En Chef</button>
	<hr style="clear: both;">
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
					@foreach ($refs as $ref)
					<tr>
						<th>{{ $ref->id }}</th>
						<td>{{ $ref->name }}</td>
						<td>{{ App\Category::find($ref->category_id)->name }}</td>
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