@extends('app')

@section('content')

    @if(!empty($errors->all()))
        <p class="bg-danger">
            @foreach($errors->all() as $error)
                {{ $error }} <br/>
            @endforeach
        </p>
    @endif

    {!! Form::model($data, ['method' => 'PATCH', 'action' => ['ProductTypeController@update', $data->id]]) !!}

    @include('product_type.form')

    {!! Form::close() !!}

@stop