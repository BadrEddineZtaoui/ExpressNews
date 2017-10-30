@extends('mainAdmin')

@section('title','Index')


@section('stylesheet')
	<link rel="stylesheet" href={{ asset("css/layout2.css") }} />

	{!! Html::style('css/parsley.css') !!}
	{!! Html::style('css/select2.min.css') !!}
@stop

@section('menu')
	@include('Redacteur._menu')
@stop

@section('content')

	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<h2>Create New Post</h2>
			<hr>
			
			{!! Form::open(array('route' => 'articles.store', 'data-parsley-validate' => '', 'files' => true)) !!}
				{{ Form::label('title', 'Title:') }}
				{{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
				
				{{ Form::label('content', 'Article Content:', array('style' => 'margin-top:30px;')) }}
				{{ Form::textarea('content', null, array('class' => 'form-control')) }}

				{{ Form::submit('Create Article', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
		</div>
	</div>

@stop

@section('aside')
	@include('Redacteur._aside')
	{!! Form::close() !!}
@stop

@section('scripts')

	{!! Html::script('js/parsley.min.js') !!}
	{!! Html::script('js/select2.min.js') !!}

	<script type="text/javascript">
		$('.select2-multi').select2({
			tags:[""],
			tokenSeparators: [",", " "],
			maximumInputLength: 10
		});
	</script>


	<script type="text/javascript" src="{{ asset('tinymce/tinymce.min.js') }}"></script>

	<script>
	  var editor_config = {
	    path_absolute : "{{ URL::to('/') }}/",
	    selector: "textarea",
	    plugins: [
	      "adylist autolink lists link image charmap print preview hr anchor pagebreak",
	      "searchreplace wordcount visualblocks visualchars code fullscreen",
	      "insertdatetime media nonbreaking save table contextmenu directionality",
	      "emoticons template paste textcolor colorpicker textpattern"
	    ],
	    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
	    relative_urls: false,
	    file_browser_callback : function(field_name, url, type, win) {
	      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
	      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

	      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
	      if (type == 'image') {
	        cmsURL = cmsURL + "&type=Images";
	      } else {
	        cmsURL = cmsURL + "&type=Files";
	      }

	      tinyMCE.activeEditor.windowManager.open({
	        file : cmsURL,
	        title : 'Filemanager',
	        width : x * 0.8,
	        height : y * 0.8,
	        resizable : "yes",
	        close_previous : "no"
	      });
	    }
	  };

	  tinymce.init(editor_config);
	</script>

@stop