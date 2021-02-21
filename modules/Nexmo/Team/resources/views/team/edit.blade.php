@extends('Admin::admin.layout.master')

@section('content')
    <div class="row  m-0">
        <div class="col-8 offset-2 mt-3">
            <div class="card bg-light">
                <div class="card-header bg-dark text-light">
                    create team
                </div>
                <div class="card-body bg-light">
                    @include('Message::message.message')
                    {!! Form::model($team,['route' => ['team.update',$team->id],'method'=>'put','files' => true]) !!}
                    <div class="form-group">
                        {!! Form::label('alt','name-image',['style'=>'font-weight:bold']) !!}
                        {!! Form::text('alt',old('alt'),['class'=>'form-control','placeholder'=>'
 pelase your enter alt']) !!}
                        @error('alt')
                        <span class="text-danger text-left font-weight-bold mt-2">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('fullname','fullname',['style'=>'font-weight:bold']) !!}
                        {!! Form::text('fullname',old('fullname'),['class'=>'form-control','placeholder'=>'
 pelase your enter fullname',]) !!}
                        @error('fullname')
                        <span class="text-danger text-left font-weight-bold mt-2">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('job','job',['style'=>'font-weight:bold']) !!}
                        {!! Form::text('job',old('job'),['class'=>'form-control','placeholder'=>'
 pelase your enter job',]) !!}
                        @error('job')
                        <span class="text-danger text-left font-weight-bold mt-2">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('image','image',['style'=>'font-weight:bold']) !!}
                        {!! Form::file('image',['class'=>'form-control','placeholder'=>'
 pelase your enter author']) !!}
                        <p class="text-left mt-3"><img src="{{asset('images/team/'.$team->image)}}" width="50"height="50"></p>
                        @error('image')
                        <span class="text-danger text-left font-weight-bold mt-2">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('linkdin','linkdin',['style'=>'font-weight:bold']) !!}
                        {!! Form::text('linkdin',old('linkdin'),['class'=>'form-control','placeholder'=>'
 pelase your enter address linkdin',]) !!}
                        @error('linkdin')
                        <span class="text-danger text-left font-weight-bold mt-2">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('instagram','instagram',['style'=>'font-weight:bold']) !!}
                        {!! Form::text('instagram',old('instagram'),['class'=>'form-control','placeholder'=>'
 pelase your enter address instagram',]) !!}
                        @error('instagram')
                        <span class="text-danger text-left font-weight-bold mt-2">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('telegram','telegram',['style'=>'font-weight:bold']) !!}
                        {!! Form::text('telegram',old('telegram'),['class'=>'form-control','placeholder'=>'
 pelase your enter address telegram',]) !!}
                        @error('telegram')
                        <span class="text-danger text-left font-weight-bold mt-2">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::submit('update',['class'=>'btn btn-success btn-block']) !!}
                    </div>
                    {!! Form::close() !!}

                    <a href="{{route('team.index')}}" class="btn btn-info">go to panel index</a>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('css')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection
