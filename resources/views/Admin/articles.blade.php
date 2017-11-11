@extends('mainAdmin')

@section('title', 'Articles')

@section('menu')
	@include('Admin._menu')
@stop

@section('content')
	<h1>Articles</h1>
	<hr>

    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Titre</th>
                        <th>Contenu</th>
                        <th>Redacteur</th>
                        <th>Categories</th>
                        <th>Etat</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>
                        	<button class="btn"><i class="icon-eye-open"></i> View</button>
                        	<button class="btn btn-danger"><i class="icon-remove icon-white"></i> Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td>@fat</td>
                        <td>@fat</td>
                        <td>
                        	<button class="btn"><i class="icon-eye-open"></i> View</button>
                        	<button class="btn btn-danger"><i class="icon-remove icon-white"></i> Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        <td>@twitter</td>
                        <td>@twitter</td>
                        <td>
                        	<button class="btn"><i class="icon-eye-open"></i> View</button>
                        	<button class="btn btn-danger"><i class="icon-remove icon-white"></i> Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@stop