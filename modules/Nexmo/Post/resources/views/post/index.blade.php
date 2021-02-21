@extends('Admin::admin.layout.master')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12  mt-5  ml-0 mr-0">
            <table class="table table-dark table-hover">
                @include('Message::message.message')
                <tr>
                    <th>title</th>
                    <th>alt</th>
                    <th>image</th>
                    <th>body</th>
                    <th>subject</th>
                    <th>author</th>
                    <th>update</th>
                    <th>delete</th>
                </tr>

                @foreach($post as $itme)
                    <tr>
                        <td>{{$itme->title}}</td>
                        <td>{{$itme->alt}}</td>
                        <td>
                            <img src="{{asset('images/post/'.$itme->image)}}" width="60" height="60">
                        </td>
                        <td>{{\Illuminate\Support\Str::limit($itme->body,150)}}</td>
                        <td>{{$itme->subject}}</td>
                        <td>{{$itme->author}}</td>
                        <td>
                            <a href="{{route('post.edit',$itme->id)}}" class="btn btn-success">update</a>
                        </td>
                        <td>
                            {!! Form::open(['route'=>['post.destroy',$itme->id],'method'=>'delete']) !!}
                            {!! Form::submit('delete',['class'=>'btn btn-warning']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach


            </table>
            {{$post->links()}}
            <a href="{{route('post.create')}}" class="btn btn-primary btn-block">go to create post</a>

        </div>
    </div>
@endsection


@section('css')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection
