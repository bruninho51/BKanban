<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>{{ $title }}</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        @if(isset($stylesheets))
            @foreach($stylesheets as $css)
                <link rel="stylesheet" href="/Services/Application/View/Resources/CSS/{{ $css }}.css">
            @endforeach
        @endif
    </head>
    <body>
        @yield('navbar')
        
        <div class="container">
            @yield('content')
        </div>

        <script
            src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"
            integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E="
            crossorigin="anonymous">
        </script>
        @if(isset($scripts))
            @foreach($scripts as $js)
                <script type="text/javascript" src="/Services/Application/View/Resources/JavaScript/{{ $js }}.js"></script>
            @endforeach
        @endif
    </body>
</html>