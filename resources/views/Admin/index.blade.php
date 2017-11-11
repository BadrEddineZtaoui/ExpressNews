@extends('mainAdmin')

@section('title', 'Dashboard')

@section('menu')
	@include('Admin._menu')
@stop

@section('content')
	<h1>Dashboard</h1>
	<hr>
	<!--BLOCK SECTION -->
	<div class="row">
	    <div class="col-lg-12">
	        <div style="text-align: center;">
	           
	            <a class="quick-btn" href="#">
	                <i class="icon-check icon-2x"></i>
	                <span> Products</span>
	                <span class="label label-danger">2</span>
	            </a>

	            <a class="quick-btn" href="#">
	                <i class="icon-envelope icon-2x"></i>
	                <span>Messages</span>
	                <span class="label label-success">456</span>
	            </a>
	            <a class="quick-btn" href="#">
	                <i class="icon-signal icon-2x"></i>
	                <span>Profit</span>
	                <span class="label label-warning">+25</span>
	            </a>
	            <a class="quick-btn" href="#">
	                <i class="icon-external-link icon-2x"></i>
	                <span>value</span>
	                <span class="label btn-metis-2">3.14159265</span>
	            </a>
	            <a class="quick-btn" href="#">
	                <i class="icon-lemon icon-2x"></i>
	                <span>tasks</span>
	                <span class="label btn-metis-4">107</span>
	            </a>
	            <a class="quick-btn" href="#">
	                <i class="icon-bolt icon-2x"></i>
	                <span>Tickets</span>
	                <span class="label label-default">20</span>
	            </a>
	        </div>
	    </div>
	</div>
	<!--END BLOCK SECTION -->


	<!--  STACKING CHART  SECTION   -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Sales   Stacking
                </div>

                <div class="panel-body">       
					<div class="demo-container">
					<div id="placeholderStack" class="demo-placeholder"></div>
					</div>
			        <p class="stackControls">
						<button class="btn btn-primary" >With stacking</button>
						<button class="btn btn-primary">Without stacking</button>
					</p>
					<p class="graphControls">
						<button class="btn btn-primary">Bars</button>
						<button class="btn btn-primary">Lines</button>
						<button class="btn btn-primary">Lines with steps</button>
					</p>
				</div>
            </div>
        </div>         
    </div>
    <!--END STACKING CHART SCETION  -->
@stop

@section('scripts')
	<script src={{ asset('js/jquery.flot.js') }}></script>
    <script src={{ asset('js/jquery.flot.resize.js') }}></script>
    <script src={{ asset('js/jquery.flot.time.js') }}></script>
    <script src={{ asset('js/jquery.flot.stack.js') }}></script>
    <script src={{ asset('js/for_index.js') }}></script>
@stop