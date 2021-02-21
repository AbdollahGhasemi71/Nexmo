@extends('Admin::admin.layout.master')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12  mt-5  ml-0 mr-0">
            <table class="table table-dark table-hover">
                @include('Message::message.message')
                <tr>
                    <th>Telegram</th>
                    <th>Instagram</th>
                    <th>Linkedin</th>
                    <th>Twitter</th>
                    <th>update</th>
                    <th>delete</th>
                </tr>

                @forelse($social as $item)
                    <tr>
                        <td>{{\Illuminate\Support\Str::limit($item->telegram,20)}}</td>
                        <td>{{\Illuminate\Support\Str::limit($item->instagram,20)}}</td>
                        <td>{{\Illuminate\Support\Str::limit($item->twitter,20)}}</td>
                        <td>{{\Illuminate\Support\Str::limit($item->linkedin,20)}}</td>

                        <td>
                            <a href="{{route('social.edit',$item->id)}}" class="btn btn-success">update</a>
                        </td>
                        <td>
                            {!! Form::open(['route'=>['social.destroy',$item->id],'method'=>'delete']) !!}
                            {!! Form::submit('delete',['class'=>'btn btn-warning']) !!}
                            {!! Form::close() !!}
                        </td>
                        <td>
                            @empty
                                <h4 class="text-center text-light bg-info">no Data</h4>
                        </td>
                    </tr>


                @endforelse


            </table>
            <span style="text-align: center"> {{$social->links()}}</span>
            <a href="{{route('social.create')}}" class="btn btn-primary btn-block">go to create info</a>

        </div>
    </div>
@endsection


@section('css')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection
