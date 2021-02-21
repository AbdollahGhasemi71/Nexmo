<div id="blog" class="blog-area">
    <div class="blog-inner area-padding">
        <div class="blog-overly"></div>
        <div class="container ">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h2>Latest News</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Start post -->
                @foreach($post as $item)
                <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="single-blog">
                            <div class="single-blog-img">
                                <a href="blog.html">
                                    <img src="{{asset('images/post/'.$item->image)}}" alt="{{$item->alt}}">
                                </a>
                            </div>
                            <div class="blog-meta">
                <span class="date-type">
										<i class="fa fa-calendar"></i>{{$item->created_at}}
									</span>
                            </div>
                            <div class="blog-text">
                                <h4>
                                    <a href="blog.html">{{\Illuminate\Support\Str::limit($item->subject,25)}}</a>
                                </h4>
                                <p>
                                    {{\Illuminate\Support\Str::limit($item->body,150)}}
                                </p>
                            </div>
                            <span>
									<a href="{{route('home.post',$item->id)}}" class="btn btn-success btn-block">Read more</a>
								</span>
                        </div>
                        <!-- end post -->
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
