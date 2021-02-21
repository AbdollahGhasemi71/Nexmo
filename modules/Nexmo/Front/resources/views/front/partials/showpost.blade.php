<div class="blog-page area-padding">
    <div class="container">
        <div class="row">
            <!-- start resent product -->
        @include('Front::front.partials.post.resentProduct')
        <!-- End resent product  -->

            <!-- Start single product -->
        @include('Front::front.partials.post.singleProduct')
        <!-- end single produt -->

        </div>
    </div>
</div>
<!-- End product  -->
@section('seo')
    @if(!empty($singleProduct))
        <title>{{$singleProduct->title}}</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="{{$singleProduct->keywords}}" name="keywords">
        <meta content="{{$singleProduct->description}}" name="description">
        <meta name="author" content="{{$singleProduct->author}}">
        <meta name="rebots" content="index,follow">
        <meta property="og:site_name" content="{{$singleProduct->title}}">
        <meta property="og:description" content="{{$singleProduct->description}}">
        <meta property="og:keywords" content="{{$singleProduct->keywords}}">
        <meta property="og:image" content="">

    @endif

@endsection
