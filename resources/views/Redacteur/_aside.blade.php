<div class="well well-small">
    {{ Form::label('url', 'Url:') }}
    {{ Form::text('url', null, array('class' => 'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '255') ) }}
</div>
<div class="well well-small">
    {{ Form::label('category_id', 'Category:') }}
    <select class="form-control" name="category_id">
        <option>op1</option>
        <option>op2</option>
        <option>op3</option>

    </select>
</div>
<div class="well well-small">
    {{ Form::label('tags', 'Tags:') }}
    <select class="form-control select2-multi" name="tags[]" multiple="multiple">
        <option>op1</option>
        <option>op2</option>
        <option>op3</option>
    </select>
</div>