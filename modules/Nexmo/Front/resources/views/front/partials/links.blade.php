<div class="col-md-4 col-sm-4 col-xs-12">
    <div class="footer-content">
        <div class="footer-head">
            <h4 style="color: whitesmoke;">relational links</h4>
            <div class="flicker-img">
                @foreach($link as $item)
                    <a href="{{$item->link}}" target="_blank">{{$item->name}}</a>
                @endforeach

            </div>
        </div>
    </div>
</div>
