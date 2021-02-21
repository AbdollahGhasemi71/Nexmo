@extends('Admin::admin.layout.master')

@section('content')
    <div class="row  m-0">
        <div class="col-8 offset-2 mt-3">
            <div class="card bg-light">
                <div class="card-header bg-dark text-light">
                    create post
                </div>
                <div class="card-body bg-light">
                    @include('Message::message.message')
                    {!! Form::open(['route' => 'post.store','method'=>'post','files' => true]) !!}
                    <div class="form-group">
                        {!! Form::label('title','Title',['style'=>'font-weight:bold']) !!}
                        {!! Form::text('title',old('titel'),['class'=>'form-control','placeholder'=>'
 pelase your enter title']) !!}
                        @error('title')
                        <span class="text-danger text-left font-weight-bold mt-2">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('alt','alt',['style'=>'font-weight:bold']) !!}
                        {!! Form::text('alt',old('alt'),['class'=>'form-control','placeholder'=>'
 pelase your enter alt',]) !!}
                        @error('alt')
                        <span class="text-danger text-left font-weight-bold mt-2">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('subject','subject',['style'=>'font-weight:bold']) !!}
                        {!! Form::text('subject',old('subject'),['class'=>'form-control','placeholder'=>'
 pelase your enter subject',]) !!}
                        @error('subject')
                        <span class="text-danger text-left font-weight-bold mt-2">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('author','author',['style'=>'font-weight:bold']) !!}
                        {!! Form::text('author',old('author'),['class'=>'form-control','placeholder'=>'
 pelase your enter author',]) !!}
                        @error('author')
                        <span class="text-danger text-left font-weight-bold mt-2">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('body','body',['style'=>'font-weight:bold']) !!}
                        {!! Form::textarea('body',old('body'),['class'=>'form-control','placeholder'=>'
 pelase your enter body',]) !!}
                        @error('body')
                        <span class="text-danger text-left font-weight-bold mt-2">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('keywords','keywords',['style'=>'font-weight:bold']) !!}
                        {!! Form::textarea('keywords',old('keywords'),['class'=>'form-control','placeholder'=>'
 pelase your enter keywords',]) !!}
                        @error('keywords')
                        <span class="text-danger text-left font-weight-bold mt-2">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        {!! Form::label('image','image',['style'=>'font-weight:bold']) !!}
                        {!! Form::file('image',['class'=>'form-control','placeholder'=>'
 pelase your enter author']) !!}
                        @error('image')
                        <span class="text-danger text-left font-weight-bold mt-2">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('description','description',['style'=>'font-weight:bold']) !!}
                        {!! Form::textarea('description',old('description'),['class'=>'form-control','placeholder'=>'
 pelase your enter description',]) !!}
                        @error('description')
                        <span class="text-danger text-left font-weight-bold mt-2">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::submit('create',['class'=>'btn btn-success btn-block']) !!}
                    </div>
                    {!! Form::close() !!}
                    <a href="{{route('post.index')}}" class="btn btn-info">go to panel index</a>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('css')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection
