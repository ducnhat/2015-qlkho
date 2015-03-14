@extends('app')

@section('content')

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>
                    Tên hàng nhập
                </th>

                <th>
                    Tên hàng
                </th>

                <th>
                    Giá
                </th>

                <th>
                    Thương hiệu
                </th>

                <th>
                    Hũ
                </th>

                <th class="tool-group">
                    Công cụ
                </th>
            </tr>
        </thead>

        <tbody>
            @foreach($data as $row)
            <tr>
                <td>
                    {{ $row->product_name }}
                </td>

                <td>
                    {{ $row->name }}
                </td>

                <td>
                    {{ $row->price }}
                </td>

                <td>
                    {{ $row->brand }}
                </td>

                <td>
                    {{ $row->type }}
                </td>

                <td>
                    {!! link_to_route('product.edit', 'Sửa', $row->id, array('class' => 'btn btn-primary')) !!}
                    {!! Form::open(['method' => 'delete', 'action' => ['ProductController@destroy', $row->id], 'class' => 'btn-delete', 'onsubmit' => 'return confirm_delete()']) !!}
                        {!! Form::submit('Xóa', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@stop

<style>
th{
    text-align: center !important;
}

.tool-group{
    width: 15%;
}
</style>

<script>
function confirm_delete(){
    var ok = confirm('Bạn muốn xóa sản phẩm này?');

    return ok;
}
</script>