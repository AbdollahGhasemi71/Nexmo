@if(!empty($seo))
    <title>{{$seo->title}}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="{{$seo->keywords}}" name="keywords">
    <meta content="{{$seo->description}}" name="description">
    <meta name="author" content="{{$seo->author}}">
    <meta name="rebots" content="index,follow">
    <meta property="og:site_name" content="{{$seo->title}}">
    <meta property="og:description" content="{{$seo->description}}">
    <meta property="og:keywords" content="{{$seo->keywords}}">
    <meta property="og:image" content="">

@endif

