<div class="col-md-8 col-md-offset-2">
    <div class="form-group">

        {!! Form::Label('product_name', 'Tên hàng nhập:') !!}
        {!! Form::Text('product_name', null, ['class' => 'form-control']) !!}

    </div>

    <div class="form-group">

        {!! Form::Label('name', 'Tên hàng:') !!}
        {!! Form::Text('name', null, ['class' => 'form-control']) !!}

    </div>

    <div class="form-group">

        {!! Form::Label('price', 'Giá:') !!}
        {!! Form::Text('price', null, ['class' => 'form-control']) !!}

    </div>

    <div class="form-group">

        {!! Form::Label('brand', 'Thương hiệu:') !!}
        {!! Form::Select('brand', $brands, null, ['class' => 'form-control']) !!}

    </div>

    <div class="form-group">

        {!! Form::Label('name', 'Hũ:') !!}
        {!! Form::Select('type', $types, null, array('class' => 'form-control')) !!}

    </div>

    <div class="form-group">

        {!! Form::Submit('Lưu lại', ['class' => 'btn btn-primary form-control']) !!}

    </div>

</div>