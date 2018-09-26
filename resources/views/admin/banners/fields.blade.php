<!-- Criteria Field -->
<div class="form-group col-sm-12">
    {!! Form::label('criteria', 'Go To:') !!}
    <select id="criteria" name="criteria" class="form-control">
        <option value="0" >Category</option>
        <option value="1">Product</option>
    </select>

</div>
<br>

<!-- Location Field -->
<div class="form-group col-sm-12">
    {!! Form::label('location', 'View As') !!}
    <select name="location" class="form-control">
        <option value="0" >Slider</option>
        <option value="1">Banner</option>
    </select></div>

<!-- Route Field -->
<div class="form-group col-sm-12" id="products" >
    {!! Form::label('route', 'Select Product') !!}
    <select  name="route" class="form-control" id="products-select">
        @foreach($products as $product)
        <option value="{{$product->id}}" >{{$product->title}}</option>
        @endforeach
    </select>
</div>

<!-- Route Field -->
<div class="form-group col-sm-12" id="categories">
    {!! Form::label('route', 'Select Category') !!}
    <select id="categories-select" name="route" class="form-control">
        @foreach($categories as $category)
        <option value="{{$category->id}}" >{{$category->name}}</option>
        @endforeach
    </select>
</div>


<div class="id">
<div class="form-group col-sm-12">
    {!! Form::label('title[ar]', 'Arabic Title') !!}
    <input type="text" name="title[ar]"class="form-control" placeholder="Arabic Title" />
</div>

<div class="form-group col-sm-12">
    {!! Form::label('title[en]', 'English Title') !!}
    <input type="text" name="title[en]" class="form-control" placeholder="English Title" />
</div>
</div>


<!-- Image Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('image', 'Image:') !!}
    <input name="image" type="file">
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.banners.index') !!}" class="btn btn-default">Cancel</a>
</div>
