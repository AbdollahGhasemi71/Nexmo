@extends('Admin::admin.layout.master')

@section('content')
    <div class="row  m-0">
        <div class="col-8 offset-2 mt-3">
            <div class="card bg-light">
                <div class="card-header bg-dark text-light">
                    create social
                </div>
                <div class="card-body bg-light">
                    @include('Message::message.message')
                    {!! Form::model($social,['route' => ['social.update',$social->id],'method'=>'put']) !!}
                    <div class="form-group">
                        {!! Form::label('telegram','telegram',['style'=>'font-weight:bold']) !!}
                        {!! Form::text('telegram',old('telegram'),['class'=>'form-control','placeholder'=>'
 pelase your enter url telegram']) !!}
                        @error('telegram')
                        <span class="text-danger text-left font-weight-bold mt-2">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('instagram','instagram',['style'=>'font-weight:bold']) !!}
                        {!! Form::text('instagram',old('instagram'),['class'=>'form-control','placeholder'=>'
 pelase your enter url instagram',]) !!}
                        @error('instagram')
                        <span class="text-danger text-left font-weight-bold mt-2">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('linkedin','linkedin',['style'=>'font-weight:bold']) !!}
                        {!! Form::text('linkedin',old('linkedin'),['class'=>'form-control','placeholder'=>'
 pelase your enter url linkedin',]) !!}
                        @error('linkdin')
                        <span class="text-danger text-left font-weight-bold mt-2">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('twitter','twitter',['style'=>'font-weight:bold']) !!}
                        {!! Form::text('twitter',old('twitter'),['class'=>'form-control','placeholder'=>'
 pelase your enter url twitter',]) !!}
                        @error('twitter')
                        <span class="text-danger text-left font-weight-bold mt-2">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::submit('update',['class'=>'btn btn-success btn-block']) !!}
                    </div>
                    {!! Form::close() !!}
                    <a href="{{route('social.index')}}" class="btn btn-info">go to panel index</a>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('css')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection
