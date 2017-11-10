@extends('mainAdmin')

@section('title', 'Dashboard')

@section('menu')
	@include('RedacteurEnChef._menu')
@stop

@section('content')
	<h1>Dashboard</h1>
<!--	<div class="col-lg-6"> -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Titre de l'article</th>
                                            <th>Rédacteur</th>
											<th>Email</th>
											<th>
											
											</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Attentat a Marrakech</td>
                                            <td>Otto</td>
                                            <td>otto@mdo.com</td>
											<td>
												<td><a href="#" class="btn btn-warning">Verifier</a>
												<a href="#" class="btn btn-danger">Supprimer</a>
											</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
											<td>
											<td><a href="#" class="btn btn-warning">Verifier</a>
											<a href="#" class="btn btn-danger">Supprimer</a>
										</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
											<td>
											<td><a href="#" class="btn btn-warning">Verifier</a>
											<a href="#" class="btn btn-danger">Supprimer</a>
										</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
        <!--        </div> -->
@stop