<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="page-head-blog">

        <div class="single-blog-page">
            <!-- recent start -->
            <div class="left-blog">
                <h4>recent product</h4>
                <div class="recent-post">
                    <!-- start single post -->
                    @foreach($resentProduct as $item)
                        <div class="recent-single-post">
                            <div class="post-img">
                                <a href="#">
                                    <img src="{{asset('images/product/'.$item->image)}}" alt="" style="height: 120px">
                                </a>
                            </div>
                            <div class="pst-content">
                                <p><a href="{{route('home.product',$item->id)}}"> {{\Illuminate\Support\Str::limit($item->body,100)}}</a></p>
                            </div>
                        </div>
                @endforeach
                <!-- End single post -->


                </div>
            </div>
            <!-- recent end -->
        </div>
    </div>
</div>
