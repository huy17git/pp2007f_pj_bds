<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://file4.batdongsan.com.vn/images/icon-bds.ico" rel="shortcut icon" type="image/x-icon" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="audience" content="general" />
    <meta name="resource-type" content="document" />
    <meta name="abstract" content="Thông tin nhà đất Việt Nam" />
    <meta name="classification" content="Bất động sản Việt Nam" />
    <meta name="area" content="Nhà đất và bất động sản" />
    <meta name="placename" content="Việt Nam" />
    <meta name="author" content="Batdongsan.com.vn" />
    <meta name="copyright" content="©2007 Batdongsan.com.vn" />
    <meta name="owner" content="Batdongsan.com.vn" />
    <meta name="generator" content="Công ty Cổ phần PropertyGuru Việt Nam" />
    <meta name="distribution" content="Global" />
    <meta name='revisit-after' content='1 days' />
    <meta property="og:url" content="https://batdongsan.com.vn/" />
    <meta property="og:title" content="Kênh thông tin số 1 về bất động sản - Cập nhật mới nhất tháng 11/2020" />
    <meta property="og:description"
        content="Kênh thông tin số 1 về bất động sản tại Việt Nam. Mang đến nguồn thông tin mua bán và cho thuê nhà đất, văn phòng, chung cư... Cập nhật tin tức bất động sản nhanh nhất và chính xác nhất." />
    <meta property="og:image" content="https://staticfile.batdongsan.com.vn/images/Logo/BDSLogo.jpg" />
    <meta name="robots" content="index,follow" />
    <meta name="custom-apple-itunes-app" content="app-id=866492094" />
    <meta name='keywords' content='' />
    <meta name='description'
        content='Kênh thông tin số 1 về bất động sản tại Việt Nam. Mang đến nguồn thông tin mua bán và cho thuê nhà đất, văn phòng, chung cư... Cập nhật tin tức bất động sản nhanh nhất và chính xác nhất.' />
    @yield('metas')
    {{--CSRF Token--}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    {{--Styles css common--}}
    <link rel="stylesheet" type="text/css" href="/assets/css/filestatic.msvbds.FrontEnd.min.css">

    @yield('style-libraries')
    {{--Styles custom--}}
    @yield('styles')
</head>
<body class="bg-site">
    @include('partial.header')
        @yield('content')

    @include('partial.footer')

    {{--Scripts js common--}}

    {{--Scripts link to file or js custom--}}

    @yield('scripts')
</body>
</html>
