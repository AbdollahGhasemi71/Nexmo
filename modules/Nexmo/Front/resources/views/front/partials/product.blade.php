<div id="product" class="blog-area">
    <div class="blog-inner area-padding">
        <div class="blog-overly"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h2>Product Company</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Start product Blog -->
                @foreach($product as $item)
                    <div class="col-md-4 col-sm-4 col-xs-12 " style="margin-bottom: 10px !important;">
                        <div class="single-blog">
                            <div class="single-blog-img">
                                <a href="blog.html">
                                    <img src="{{asset('images/product/'.$item->image)}}" alt="{{$item->alt}}">
                                </a>
                            </div>
                            <div class="blog-meta">
              <span class="date-type">
                  <i class="fa fa-calendar"></i>{{$item->created_at}}
                </span>
                            </div>
                            <div class="blog-text">
                                <h4>
                                    {{$item->title}}
                                </h4>
                                <p>
                                    {{\Illuminate\Support\Str::limit($item->body,150)}}
                                </p>
                            </div>
                            <span>
                <a href="{{route('home.product',$item->id)}}" class="btn btn-info  btn-block" style="height:50px;line-height: 40px;">Read more</a>
              </span>
                        </div>

                    </div>
            @endforeach
            <!-- end product Blg-->
            </div>
        </div>
    </div>
    <div class="row m-0">
        <div class="col-8 offset-2" style="text-align: center">
            {{$product->links()}}
        </div>
    </div>
</div>
