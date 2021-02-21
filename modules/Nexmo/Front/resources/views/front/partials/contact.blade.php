@section('css')
    <link rel="stylesheet" href="{{asset('toast/dist/jquery.toast.min.js')}}">
@endsection

<div id="contact" class="contact-area">
    <div class="contact-inner area-padding">
        <div class="contact-overly"></div>
        <div class="container ">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h2>Contact us</h2>
                    </div>
                </div>
            </div>

            <div class="row">

                @include('sweet::alert'))
                <!-- Start  contact -->
                <div class="col-lg-10 col-lg-offset-1 ">
                    <div class="form contact-form">
                        <form action="{{route('contect.ajax')}}" method="post" role="form" class="contactForm"
                              id="form">
                            @csrf
                            <div class="form-group">
                                <input type="text" style="border: 2px inset lightgray;" name="fullname"
                                       class="form-control"
                                       id="name" placeholder="Your Name" data-rule="minlen:4"
                                       data-msg="Please enter at least 4 chars"/>

                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" style="border: 2px inset lightgray;"
                                       name="email" id="email" placeholder="Your Email" data-rule="email"
                                       data-msg="Please enter a valid email"/>

                            </div>
                            <div class="form-group">
                                <input type="text" style="border: 2px inset lightgray;" class="form-control"
                                       name="subject" id="subject" placeholder="Subject" data-rule="minlen:4"
                                       data-msg="Please enter at least 8 chars of subject"/>

                            </div>
                            <div class="form-group">
                                <textarea class="form-control" style="resize: none;border: 2px inset lightgray;"
                                          name="message" rows="5" data-rule="required"
                                          data-msg="Please write something for us" placeholder="Message"></textarea>
                            </div>
                            <div class="text-center">
                                <input type="submit" class="btn btn-success ">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End Left contact -->
            </div>
        </div>
    </div>
</div>

@section('js')
    <script src="{{asset('toast/dist/jquery.toast.min.js')}}"></script>
    <script>
        $('#form').submit(function (e) {
            e.preventDefault();
            let fullname = $('input[name=fullname]').val();
            let email = $('input[name=email]').val();
            let subject = $('input[name=subject]').val();
            let message = $('textarea[name=message]').val();
            let _token = $('input[name=_token]').val();
            let action = $('#form').attr('action');

            $.ajax({
                url: action,
                type: 'Post',
                data: {
                    fullname: fullname,
                    email: email,
                    subject: subject,
                    message: message,
                    _token: _token
                },
                success: function (data) {
                    if (data == 1) {
                        $.toast({
                            heading: 'Success',
                            text: 'thanks your data successfully',
                            showHideTransition: 'slide',
                            icon: 'success',

                        })
                    }

                }
            })

        });

    </script>
@endsection

