<!-- Icon Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('icon', 'Icon:') !!}
    <input type="file" name="icon"/>
</div>

<!-- Parent Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name[ar]', 'Name Arabic:') !!}
    {!! Form::text('name[ar]', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('name[en]', 'Name English:') !!}
    {!! Form::text('name[en]', null, ['class' => 'form-control']) !!}
</div>



<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.categories.index') !!}" class="btn btn-default">Cancel</a>
</div>
