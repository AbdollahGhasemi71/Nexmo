@extends('Admin::admin.layout.master')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12  mt-5  ml-0 mr-0">
            <table class="table table-dark table-hover">
                @include('Message::message.message')
                <tr>

                    <th>fullname</th>
                    <th>alt</th>
                    <th>job</th>
                   <th>image</th>
                    <th>linkdin</th>
                    <th>telegram</th>
                    <th>instagram</th>
                    <th>update</th>
                    <th>delete</th>
                </tr>
                @foreach($team as $item)
                    <tr>
                        <td>{{$item->fullname}}</td>
                        <td>{{$item->alt}}</td>
                        <td>{{$item->job}}</td>
                        <td><img src="{{asset('images/team/'. $item->image)}}" width="50" height="50"></td>
                        <td>{{$item->linkdin}}</td>
                        <td>{{$item->instagram}}</td>
                        <td>{{$item->telegram}}</td>
                        <td>
                            <a href="{{route('team.edit',$item->id)}}" class="btn btn-success">update</a>
                        </td>
                        <td>
                            {!! Form::open(['route'=>['team.destroy',$item->id],'method'=>'delete']) !!}
                            {!! Form::submit('delete',['class'=>'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach

            </table>

            <a href="{{route('team.create')}}" class="btn btn-primary btn-block">go to create team</a>

        </div>
    </div>
@endsection


@section('css')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection
