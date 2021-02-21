@extends('Admin::admin.layout.master')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12  mt-5  ml-0 mr-0">
            <table class="table table-dark table-hover">
                @include('Message::message.message')
                <tr>
                    <th>phone</th>
                    <th>email</th>
                    <th>Hours-worker</th>
                    <th>update</th>
                    <th>delete</th>
                </tr>

                @foreach($info as $itme)
                    <tr>
                        <td>{{$itme->phone}}</td>
                        <td>{{$itme->email}}</td>
                        <td>{{$itme->hours}}</td>
                        <td>
                            <a href="{{route('info.edit',$itme->id)}}" class="btn btn-success">update</a>
                        </td>
                        <td>
                            {!! Form::open(['route'=>['info.destroy',$itme->id],'method'=>'delete']) !!}
                            {!! Form::submit('delete',['class'=>'btn btn-warning']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach


            </table>
            {{$info->links()}}
            <a href="{{route('info.create')}}" class="btn btn-primary btn-block">go to create info</a>

        </div>
    </div>
@endsection


@section('css')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection
