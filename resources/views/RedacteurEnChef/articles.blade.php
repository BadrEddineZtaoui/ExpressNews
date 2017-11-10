@extends('mainAdmin')

@section('title', 'Articles')

@section('menu')
	@include('RedacteurEnChef._menu')
@stop

@section('content')
	<h1>Articles</h1>
	<div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Titre de l'article</th>
                                            <th>Rédacteur</th>
											<th>Date de publication</th>
											<th>Supprimer</th>
											<th>
											
											</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Attentat a Marrakech</td>
                                            <td>Otto</td>
                                            <td>10/11/2017</td>
											<td>
												
												<a href="#" class="btn btn-danger">Supprimer</a>
											</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>10/11/2017</td>
											<td>
											
											<a href="#" class="btn btn-danger">Supprimer</a>
										</td>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
@stop