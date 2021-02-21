@extends('Admin::admin.layout.master')

@section('content')
    <div class="row  m-0">
        <div class="col-8 offset-2 mt-5">
            <div class="card bg-light">
                <div class="card-header bg-dark text-light">
                    create seo
                </div>
                <div class="card-body bg-light">
                    @include('Message::message.message')
                    {!! Form::open(['route' => 'panel.store','method'=>'post']) !!}
                    <div class="form-group">
                        {!! Form::label('title','Title',['style'=>'font-weight:bold']) !!}
                        {!! Form::text('title',null,['class'=>'form-control','placeholder'=>'
 pelase your enter title']) !!}
                        @error('title')
                        <p class="text-left text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('keywords','keywords',['style'=>'font-weight:bold']) !!}
                        {!! Form::textarea('keywords',null,['class'=>'form-control','placeholder'=>'
 pelase your enter keywords','style'=>'height:150px']) !!}
                        @error('keywords')
                        <p class="text-left text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('description','description',['style'=>'font-weight:bold']) !!}
                        {!! Form::textarea('description',null,['class'=>'form-control','placeholder'=>'
 pelase your enter description','style'=>'height:150px']) !!}
                        @error('description')
                        <p class="text-left text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('author','author',['style'=>'font-weight:bold']) !!}
                        {!! Form::text('author',null,['class'=>'form-control','placeholder'=>'
 pelase your enter author']) !!}
                        @error('author')
                        <p class="text-left text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::submit('create',['class'=>'btn btn-success btn-block']) !!}
                    </div>
                    {!! Form::close() !!}

                    <a href="{{route('panel.allData')}}"  class="btn btn-info">go to panel index</a>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('css')

@endsection
