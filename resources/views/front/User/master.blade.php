<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('front.User.layouts.head')
</head>
<body class="fixed-left">
@include('front.User.layouts.Loader')

<div id="wrapper">
    @include('front.User.layouts.Sidebar')
    <div class="content-page">
        <div class="content">
            @include('front.User.layouts.topbar')
            <div class="page-content-wrapper ">

                <div class="container-fluid">
                    @yield('content')


                </div>

            </div>
        </div>
  @include('front.User.layouts.footer')
    </div>
</div>
@include('front.User.layouts.footerjs')
</body>
</html>
