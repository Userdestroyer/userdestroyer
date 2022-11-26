<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('title')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Yandex.Metrika counter -->
        <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();
            for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
            k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
            (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

                ym({{config('analytics.yandex_metrika')}}, "init", {
                        clickmap:true,
                        trackLinks:true,
                        accurateTrackBounce:true
                });
        </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/{{config('analytics.yandex_metrika')}}" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>

@include('layouts.header')

<div class="content-area">
    @yield('content')
</div>

@include('layouts.footer')
    
</body>
</html>