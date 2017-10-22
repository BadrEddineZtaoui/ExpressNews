@extends('mainAdmin')

@section('title', 'Index')

@section('stylesheet')
	<link rel="stylesheet" href={{ asset("css/layout2.css") }} />
	<script type="text/javascript" src="{{ asset('js/tinymce.min.js') }}"></script>
	<script>
		tinymce.init({
			selector: 'textarea',
			plugins: 'link code',
			menubar: false
		});
	</script>
@endsection

@section('menu')
	@include('Redacteur._menu')
@endsection

@section('content')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Create New Post</h1>
			<hr>
			{!! Form::open(array('route' => 'posts.store', 'data-parsley-validate' => '', 'files' => true)) !!}
				{{ Form::label('title', 'Title:') }}
				{{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

				{{ Form::label('slug', 'Slug:') }}
				{{ Form::text('slug', null, array('class' => 'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '255') ) }}

				{{ Form::label('category_id', 'Category:') }}
				<!--<select class="form-control" name="category_id">
					@foreach($categories as $category)
						<option value='{{ $category->id }}'>{{ $category->name }}</option>
					@endforeach

				</select>-->


				{{ Form::label('tags', 'Tags:') }}
				<!--<select class="form-control select2-multi" name="tags[]" multiple="multiple">
					@foreach($tags as $tag)
						<option value='{{ $tag->id }}'>{{ $tag->name }}</option>
					@endforeach

				</select>-->
				<!--test for git push-->
				{{ Form::label('featured_img', 'Upload a Featured Image') }}
				{{ Form::file('featured_img') }}

				{{ Form::label('body', "Post Body:") }}
				{{ Form::textarea('body', null, array('class' => 'form-control')) }}

				{{ Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
			{!! Form::close() !!}
		</div>
	</div>

@endsection

@section('aside')
	@include('Redacteur._aside')
@endsection