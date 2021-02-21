@extends('Admin::admin.layout.master')

@section('content')
    <div class="row  m-0">
        <div class="col-8 offset-2 mt-3">
            <div class="card bg-light">
                <div class="card-header bg-dark text-light">
                    create link
                </div>
                <div class="card-body bg-light">
                    @include('Message::message.message')
                    {!! Form::model($link,['route' => ['link.update',$link->id],'method'=>'put']) !!}
                    <div class="form-group">
                        {!! Form::label('name','name',['style'=>'font-weight:bold']) !!}
                        {!! Form::text('name',old('name'),['class'=>'form-control','placeholder'=>'
 pelase your enter name']) !!}
                        @error('name')
                        <span class="text-danger text-left font-weight-bold mt-2">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('link','link',['style'=>'font-weight:bold']) !!}
                        {!! Form::text('link',old('link'),['class'=>'form-control','placeholder'=>'
 pelase your enter url link',]) !!}
                        @error('link')
                        <span class="text-danger text-left font-weight-bold mt-2">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::submit('update',['class'=>'btn btn-success btn-block']) !!}
                    </div>
                    {!! Form::close() !!}
                    <a href="{{route('link.index')}}" class="btn btn-link">go to panel index</a>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('css')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection
