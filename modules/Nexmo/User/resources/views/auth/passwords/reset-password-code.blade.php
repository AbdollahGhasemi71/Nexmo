@extends('User::layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card bg-light" >
                    <div class="card-header bg-dark text-light">{{ __('Verify Your code Email Address') }}</div>

                    <form action="{{route('password.checkVerifyCodeMail')}}" method="post">
                        @csrf
                        <input type="hidden" name="email" value="{{request()->email}}">
                        <div class="card-body" style=" background-color: #b5a1a1;background-color: rgba(0, 0, 0, 0.15)" ;>
                            <div class="form-group">
                                <label>Code verify</label>
                                <input type="text" class="form-control" name="verify_code"
                                       placeholder="enter your code">
                            </div>
                            @error('verify_code')
                            <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                        @enderror
                          <div class="form-group">
                              <button type="submit" class="btn btn-success btn-block rounded-pill">send Verify Code</button>
                          </div>
                    </form>

                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit"
                                class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
