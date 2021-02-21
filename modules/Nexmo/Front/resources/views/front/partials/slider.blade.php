<div id="home" class="slider-area">
    <div class="bend niceties preview-2">
        <div id="ensign-nivoslider" class="slides">
      @foreach($slider as $item)
                <img src="{{asset('images/slider/'.$item->image)}}" alt="{{$item->alt}}" title="#slider-direction-1"/>
            @endforeach

        </div>

        <!-- direction 1 -->
        @foreach($slider as $item)
            <div id="slider-direction-1" class="slider-direction slider-one">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="slider-content">
                                <!-- layer 1 -->
                                <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s"
                                     data-wow-delay=".2s">
                                    <h2 class="title1">{{$item->title}} </h2>
                                </div>
                                <!-- layer 2 -->
                                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                    <h1 class="title2">{{$item->caption}}</h1>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach


    </div>
</div>
