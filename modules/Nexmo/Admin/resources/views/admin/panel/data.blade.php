@extends('Admin::admin.layout.master')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12  mt-5  ml-0 mr-0">
            <table class="table table-dark table-hover">
                @include('Message::message.message')
                <tr>
                    <th>title</th>
                    <th>keywords</th>
                    <th>description</th>
                    <th>author</th>
                    <th>update</th>
                    <th>delete</th>
                </tr>
                @foreach($seo as $item)
                    <tr>
                        <td>{{$item->title}}</td>
                        <td>{{\Illuminate\Support\Str::limit($item->keywords,20)}}</td>
                        <td>{{\Illuminate\Support\Str::limit($item->description,20)}}</td>
                        <td>{{$item->author}}</td>
                        <td>
                            <a href="{{route('panel.edit',$item->id)}}" class="btn btn-success">update</a>
                        </td>
                        <td>
                            {!! Form::open(['route'=>['panel.destroy',$item->id],'method'=>'delete']) !!}
                            {!! Form::submit('delete',['class'=>'btn btn-warning']) !!}
                            {!! Form::close() !!}
                        </td>

                    </tr>
                @endforeach
            </table>
            <a href="{{route('panel.create')}}" class="btn btn-primary btn-block">go to create seo</a>

        </div>
    </div>
@endsection


@section('css')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection
