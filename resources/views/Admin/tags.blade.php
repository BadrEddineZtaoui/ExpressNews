@extends('mainAdmin')

@section('title', 'Tags')

@section('menu')
	@include('Admin._menu')
@stop

@section('content')
	<h1>Tags</h1>
	<hr>

	<div class="panel-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Tag</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Mark</td>
                        <td>
                        	<button class="btn btn-danger"><i class="icon-remove icon-white"></i> Suspendre</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jacob</td>
                        <td>
                        	<button class="btn btn-danger"><i class="icon-remove icon-white"></i> Suspendre</button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Larry</td>
                        <td>
                        	<button class="btn btn-danger"><i class="icon-remove icon-white"></i> Suspendre</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@stop