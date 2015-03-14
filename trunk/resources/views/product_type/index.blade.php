@extends('app')

@section('content')

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>
                    Loại hàng
                </th>

                <th>
                    Sắp xếp
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
                    {{ $row->name }}
                </td>

                <td>

                </td>

                <td>
                    {!! link_to_route('type.edit', 'Sửa', $row->id, array('class' => 'btn btn-primary')) !!}
                    {!! Form::open(['method' => 'delete', 'action' => ['ProductTypeController@destroy', $row->id], 'class' => 'btn-delete', 'onsubmit' => 'return confirm_delete()']) !!}
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
    var ok = confirm('Bạn muốn xóa loại hàng này?');

    return ok;
}
</script>