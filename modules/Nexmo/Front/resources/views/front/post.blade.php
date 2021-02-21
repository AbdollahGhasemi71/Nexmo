@extends('Front::front.layout.master')


@section('content')

    {{--    start header--}}
    @include('Front::front.partials.menu')
    {{--end header--}}


    <!-- start prolax-->
    @include('Front::front.partials.parallax')
    <!-- end prolax  -->

    <!-- start Product-->
    @include('Front::front.partials.showpost')
    <!-- end  Product-->



    <!-- Start Footer bottom Area -->
    <footer>
        <div class="footer-area" style="background-color: black;">
            <div class="container">
                <div class="row">
                @include('Front::front.partials.social')
                <!-- end single footer -->
                @include('Front::front.partials.info')
                <!-- end single footer -->
                    @include('Front::front.partials.links')
                </div>
            </div>
        </div>

        <div class="footer-area-bottom" style="background-color: black;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="credits">

                            Designed by <a href="http://www.elecodeiranzamin.com">TurajArminpour</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


@endsection

{{--@section('seo')--}}
{{--    @include('Front::front.seo.seo',['seo'=>$seo])--}}
{{--@endsection--}}
