@extends('Admin::admin.layout.master')

@section('content')
    <div class="row  m-0">
        <section class="col-10 offset-1 mt-5 p-4" style="background-color: rgba(255,255,255,0.8)">
            <h1 class="text-success mb-5" style="font-weight: bold"> welcome to website</h1>
            <h5 class="mb-5"> welcome to website and take the data in the website, please click down button, thanks</h5>
            <a href="{{route('panel.create')}}" class="btn btn-info btn-block text-capitalize"> go to seo website</a>
        </section>
    </div>
@endsection
