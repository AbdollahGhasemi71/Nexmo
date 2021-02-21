@extends('Front::front.layout.master')


@section('content')

    {{--    start header--}}
    @include('Front::front.partials.menu')
    {{--end header--}}
    <!-- header end -->

    <!-- Start Slider Area -->
    @include('Front::front.partials.slider')
    <!-- End Slider Area -->

    <!-- Start About area -->
    @include('Front::front.partials.about')
    <!-- End About area -->

    <!-- Start product -->

    @include('Front::front.partials.product',['product'=>$product])
    <!-- End product -->

    <!-- Start team Area -->
    @include('Front::front.partials.team')
    <!-- End Team Area -->

    <!-- Start Blog Area -->
    @include('Front::front.partials.blog')
    <!-- End Blog -->

    <!-- Start contact Area -->
    @include('Front::front.partials.contact')
    <!-- End Contact Area -->

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

@section('seo')
    @include('Front::front.seo.seo',['seo'=>$seo])
@endsection
