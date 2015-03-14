@extends('app')

@section('content')

    @if(!empty($errors->all()))
        <p class="bg-danger">
            @foreach($errors->all() as $error)
                {{ $error }} <br/>
            @endforeach
        </p>
    @endif

    {!! Form::open(['url' => 'type']) !!}

    @include('product_type.form')

    {!! Form::close() !!}

@stop