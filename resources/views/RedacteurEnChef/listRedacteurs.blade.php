@extends('mainAdmin')

@section('title', 'Redacteurs')

@section('menu')
	@include('RedacteurEnChef._menu')
@stop

@section('content')
	<h1>Liste des Redacteurs</h1>
	<div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nom</th>
                                            <th>Prenom</th>
											<th>Email</th>
											<th>Categorie</th>
                                            <th>Nombre d'article</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Badr</td>
                                            <td>Zt</td>
                                            <td>ldksfml@dsfkdsl.fsd</td>
                                            <td>Sport</td>
                                            <td>120</td>
											
                                        </tr>
										<tr>
										<td>2</td>
										<td>Titif</td>
                                        <td>Zt</td>
                                        <td>ldksfml@dsfkdsl.fsd</td>
                                        <td>Sport</td>
                                        <td>120</td>
										
									</tr>
									<tr>
                                        <td>3</td>
                                        <td>Malik</td>
                                        <td>Zt</td>
                                        <td>ldksfml@dsfkdsl.fsd</td>
                                        <td>Sport</td>
                                        <td>120</td>
											
                                        </tr>
										<tr>
                                            <td>4</td>
                                            <td>Layla</td>
                                            <td>Zt</td>
                                            <td>ldksfml@dsfkdsl.fsd</td>
                                            <td>Sport</td>
                                            <td>120</td>
											
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
@stop