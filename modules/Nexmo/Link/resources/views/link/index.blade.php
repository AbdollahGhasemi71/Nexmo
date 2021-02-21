@extends('Admin::admin.layout.master')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12  mt-5  ml-0 mr-0">
            <table class="table table-dark table-hover">
                @include('Message::message.message')
                <tr>
                    <th>name</th>
                    <th>link</th>

                    <th>update</th>
                    <th>delete</th>
                </tr>

                @forelse($link as $item)

                    <tr>
                        <td>{{$item->name}}</td>
                        <td>{{$item->link}}</td>
                        <td>
                            <a href="{{route('link.edit',$item->id)}}" class="btn btn-success">update</a>
                        </td>
                        <td>
                            {!! Form::open(['route'=>['link.destroy',$item->id],'method'=>'delete']) !!}
                            {!! Form::submit('delete',['class'=>'btn btn-warning']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @empty
                    <tr >
                        <td colspan="6">
                            <h4>no Data..</h4>
                        </td>

                    </tr>
                @endforelse
            </table>
            {{$link->links()}}
            <a href="{{route('link.create')}}" class="btn btn-primary btn-block">go to create info</a>

        </div>
    </div>
@endsection


@section('css')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection
