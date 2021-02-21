@extends('Admin::admin.layout.master')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12  mt-5  ml-0 mr-0">
            <table class="table table-dark table-hover">
                @include('Message::message.message')
                <tr>
                    <th>title</th>
                    <th>caption</th>
                    <th>image</th>
                    <th>alt</th>
                    <th>update</th>
                    <th>delete</th>
                </tr>
                @foreach ($slider as $item)
                    <tr>
                        <td>{{$item->title}}</td>
                        <td>{{$item->caption}}</td>
                        <td>{{$item->image}}</td>
                        <td><img src="{{asset('images/slider/'.$item->image)}}" width="50" height="50"></td>
                        <td>
                            <a href="{{route('slider.edit',$item->id)}}" class="btn btn-success">updat</a>
                        </td>
                        <td>
                            {!! Form::open(['route'=>['slider.destroy',$item->id],'method'=>'delete']) !!}
                            {!! Form::submit('delete',['class'=>'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach

            </table>
            {{$slider->links()}}
            <a href="{{route('slider.create')}}" class="btn btn-primary btn-block">go to create slider</a>

        </div>
    </div>
@endsection


@section('css')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection
