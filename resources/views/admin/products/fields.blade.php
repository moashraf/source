<!-- Category Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category_id', 'Category:') !!}
    <select name="category_id" class="form-control">
        @foreach($categories as $category)
        <option value="{{$category->category_id}}" >{{$category->name}}</option>
        @endforeach
    </select>
</div>

<!-- Image Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('image', 'Image:') !!}
    <input name="image" type="file">
</div>

<!-- Price Field -->
<div class="form-group col-sm-12">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::number('price', null, ['class' => 'form-control']) !!}
</div>


<!-- Price Field -->
<div class="form-group col-sm-12">
    {!! Form::label('code', 'Product Code:') !!}
    {!! Form::text('code', null, ['class' => 'form-control']) !!}
</div>



<!-- Price Field -->
<div class="form-group col-sm-12">
    {!! Form::label('title[ar]', 'Title[Arabic]:') !!}
    {!! Form::text('title[ar]', null, ['class' => 'form-control']) !!}
</div>



<div class="form-group col-sm-12">
    {!! Form::label('description[ar]', 'Description[Arabic]:') !!}
    {!! Form::textarea('description[ar]', null, ['class' => 'form-control']) !!}
</div>


<!-- Price Field -->

<!-- Price Field -->
<div class="form-group col-sm-12">
    {!! Form::label('title[en]', 'Title[English]:') !!}
    {!! Form::text('title[en]', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-12">
    {!! Form::label('description[en]', 'Description[English]:') !!}
    {!! Form::textarea('description[en]', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.products.index') !!}" class="btn btn-default">Cancel</a>
</div>
