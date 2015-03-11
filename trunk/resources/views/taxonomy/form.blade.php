<div class="form-group">

    {!! Form::Label('name', 'Thương hiệu:') !!}
    {!! Form::Text('name', null, ['class' => 'form-control']) !!}
    {!! Form::Hidden('type', 'brand') !!}

</div>

<div class="form-group">

    {!! Form::Submit('Lưu lại', ['class' => 'btn btn-primary form-control']) !!}

</div>

{!! Form::close() !!}