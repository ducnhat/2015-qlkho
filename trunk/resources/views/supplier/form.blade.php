<div class="col-md-8 col-md-offset-2">
    <div class="form-group">

        {!! Form::Label('name', 'Tên người bán:') !!}
        {!! Form::Text('name', null, ['class' => 'form-control']) !!}
        {!! Form::Hidden('type', 'supplier') !!}

    </div>

    <div class="form-group">

        {!! Form::Label('address', 'địa chỉ:') !!}
        {!! Form::Text('address', null, ['class' => 'form-control']) !!}

    </div>

    <div class="form-group">

        {!! Form::Label('phonenumber', 'điện thoại:') !!}
        {!! Form::Text('phonenumber', null, ['class' => 'form-control']) !!}

    </div>

    <div class="form-group">

        {!! Form::Label('email', 'Email:') !!}
        {!! Form::Text('email', null, ['class' => 'form-control']) !!}

    </div>

    <div class="form-group">

        {!! Form::Submit('Lưu lại', ['class' => 'btn btn-primary form-control']) !!}

    </div>

</div>