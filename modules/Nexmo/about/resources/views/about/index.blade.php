@extends('Admin::admin.layout.master')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12  mt-5  ml-0 mr-0">
            <table class="table table-dark table-hover">
                @include('Message::message.message')
                <tr>
                    <th>title</th>
                    <th>alt</th>
                    <th>description</th>
                    <th>image</th>
                    <th>update</th>
                    <th>delete</th>
                </tr>
                @foreach($about as $item)
                    <tr>
                        <td>{{$item->title}}</td>
                        <td>{{$item->alt}}</td>
                        <td>{{\Illuminate\Support\Str::limit($item->description,50)}}</td>
                        <td><img src="{{asset('images/about/'. $item->image)}}" width="50" height="50"></td>
                        <td>
                            <a href="{{route('about.edit',$item->id)}}" class="btn btn-success">update</a>
                        </td>
                        <td>
                            {!! Form::open(['route'=>['about.destroy',$item->id],'method'=>'delete']) !!}
                            {!! Form::submit('delete',['class'=>'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach

            </table>

            <a href="{{route('about.create')}}" class="btn btn-primary btn-block">go to create about</a>

        </div>
    </div>
@endsection


@section('css')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection
