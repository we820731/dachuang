<html>
    <head>
        <title>大創娃娃屋 |  @yield('title')</title>
        <link rel="shortcut icon" href="images/sm-icon.png" />
    </head>
    <body>
    	@include('website.partials.navigation')
		@include('website.partials.header')
        @include('website.partials.menu')
        
        @section('banner')
		  @include('website.partials.banner')
        @show

        <div class="container">
            @yield('content')
        </div>

        @include('website.partials.footer')
        
    </body>
</html>

