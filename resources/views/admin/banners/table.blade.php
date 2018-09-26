<table class="table table-responsive" id="banners-table">
    <thead>
        <tr>
            <th>Criteria</th>
        <th>Image</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($banners as $banner)
        <tr>
            @if($banner->criteria == 0 )
            <td>Slider</td>
            @else
          <td>Banner</td>
            @endif
            <td> <img  style="    width: 100px;
    height: 100px;" src="{{ asset($banner->image) }}" /></td>
            <td>
                {!! Form::open(['route' => ['admin.banners.destroy', $banner->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.banners.show', [$banner->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.banners.edit', [$banner->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>