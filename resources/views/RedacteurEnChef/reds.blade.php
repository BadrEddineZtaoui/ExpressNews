@extends('mainAdmin')

@section('title', 'Redacteurs')

@section('menu')
	@include('RedacteurEnChef._menu')
@stop

@section('content')
	<h1>Approuvation des articles</h1>
	<div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Demandeur</th>
                                            <th>Catégorie</th>
											<th>Experience</th>
											<th>Plus d'information<th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Badr</td>
                                            <td>Sport</td>
                                            <td>ldksfmldsfkdslfsd</td>
											<td><button class="btn"><i class="icon-eye-open"></i> + </button></td>
                                        </tr>
										<tr>
										<td>2</td>
										<td>Titif</td>
										<td>Eco</td>
										<td>ldksfmldsfkdslfsd</td>
										<td><button class="btn"><i class="icon-eye-open"></i> + </button></td>
									</tr>
									<tr>
                                            <td>3</td>
                                            <td>Malik</td>
                                            <td>Politique</td>
                                            <td>ldksfmldsfkdslfsd</td>
											<td><button class="btn"><i class="icon-eye-open"></i> + </button></td>
                                        </tr>
										<tr>
                                            <td>4</td>
                                            <td>Layla</td>
                                            <td>Feminin</td>
                                            <td>ldksfmldsfkdslfsd</td>
											<td><button class="btn"><i class="icon-eye-open"></i> + </button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
@stop