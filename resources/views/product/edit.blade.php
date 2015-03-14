@extends('app')

@section('content')

    @if(!empty($errors->all()))
        <p class="bg-danger">
            @foreach($errors->all() as $error)
                {{ $error }} <br/>
            @endforeach
        </p>
    @endif

    {!! Form::model($data, ['method' => 'PATCH', 'action' => ['ProductController@update', $data->id]]) !!}

    @include('product.form')

    {!! Form::close() !!}

@stop