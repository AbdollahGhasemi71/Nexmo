@extends('Admin::admin.layout.master')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12  mt-5  ml-0 mr-0">
            <table class="table table-dark table-hover table-responsive-lg">
                @include('Message::message.message')
                <tr>
                    <th>fullname</th>
                    <th>email</th>
                    <th>subject</th>
                    <th>message</th>
                    <th>delete</th>
                </tr>

                @forelse($contact as $item)
                    <tr>
                        <td>{{$item->fullname}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->subject}}</td>
                        <td>{{$item->message}}</td>
                        <td>
                            {!! Form::open(['route'=>['contact.destroy',$item->id],'method'=>'delete']) !!}
                            {!! Form::submit('delete',['class'=>'btn btn-warning']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @empty
                    <tr >
                        <td colspan="6">
                        <h4  class="bg-info">no data</h4>
                        </td>
                    </tr>
                @endforelse


            </table>
            {{$contact->links()}}
        </div>
    </div>
@endsection


@section('css')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection
