@extends('Admin::admin.layout.master')

@section('content')
    <div class="row  m-0">
        <div class="col-8 offset-2 mt-3">
            <div class="card bg-light">
                <div class="card-header bg-dark text-light">
                    create info
                </div>
                <div class="card-body bg-light">
                    @include('Message::message.message')
                    {!! Form::open(['route' => 'info.store','method'=>'post','files' => true]) !!}
                    <div class="form-group">
                        {!! Form::label('phone','phone',['style'=>'font-weight:bold']) !!}
                        {!! Form::text('phone',old('phone'),['class'=>'form-control','placeholder'=>'
 pelase your enter phone']) !!}
                        @error('phone')
                        <span class="text-danger text-left font-weight-bold mt-2">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('email','email',['style'=>'font-weight:bold']) !!}
                        {!! Form::text('email',old('email'),['class'=>'form-control','placeholder'=>'
 pelase your enter email',]) !!}
                        @error('email')
                        <span class="text-danger text-left font-weight-bold mt-2">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('hours','hours-worker',['style'=>'font-weight:bold']) !!}
                        {!! Form::text('hours',old('hours'),['class'=>'form-control','placeholder'=>'
 pelase your enter hourse',]) !!}
                        @error('hourse')
                        <span class="text-danger text-left font-weight-bold mt-2">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::submit('create',['class'=>'btn btn-success btn-block']) !!}
                    </div>
                    {!! Form::close() !!}
                    <a href="{{route('info.index')}}" class="btn btn-info">go to panel index</a>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('css')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection
