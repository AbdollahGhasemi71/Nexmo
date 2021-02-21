<div class="col-md-8 col-sm-8 col-xs-12">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <!-- single-blog start -->
            <article class="blog-post-wrapper">
                <div class="post-thumbnail">
                    <img src="{{asset('images/post/'.$singleProduct->image)}}" alt="{{$singleProduct->alt}}">
                </div>
                <div class="post-information">
                    <h2>{{$singleProduct->title}}</h2>
                    <div class="entry-content">
                        <p class="text-justify" style="line-height: 30px">{{$singleProduct->body}}</p>
                    </div>
                </div>
            </article>
            <div class="clear"></div>
            <!-- single-blog end -->
        </div>
    </div>
</div>


