@extends('layouts.master')
@section('title','Tin tức bất động sản - Mua bán nhà đất số 1 Việt Nam')

@section('styles')
<link rel="stylesheet" href="https://staticfile.batdongsan.com.vn/css/filestatic.ver202011110519.msvbds.FrontEnd.min.css" />
<link rel="stylesheet" type="text/css" href="https://staticfile.batdongsan.com.vn/css/Broker/broker.min.css" media="all">
<link href="https://file4.batdongsan.com.vn/images/icon-bds.ico" rel="shortcut icon" type="image/x-icon" />

@endsection

@section('content')
<body class="bg-site">
    

    <div class="form-content">
        <div class="adPosition" positionCode="BANNER_POSITION_BACKGROUND" style=""></div>
<script type='text/javascript'> var bannerContext={"CateId":88,"PageId":null,"CityCode":null,"DistrictId":null,"CurrentPage":97};</script>

        <div id="staticDomain" statsDomain="https://statistic.batdongsan.com.vn" data-fileimg="https://file4.batdongsan.com.vn" data-web="https://batdongsan.com.vn" data-msvrouter="/microservice-architecture-router" data-msvrouter-personal="/microservice-architecture-router-personal" data-cssServer="https://staticfile.batdongsan.com.vn" data-oldsystem="https://batdongsan.com.vn" data-content="https://batdongsan.com.vn" data-domainorigin="batdongsan.com.vn" data-sug-sell="https://suggestion1.batdongsan.com.vn/" data-sug-rent="https://suggestion2.batdongsan.com.vn/" class="hide"></div>
        <div id="addonImage" addon-image="https://staticfile.batdongsan.com.vn/images/no-image.png"></div>
        <div id="SiteLeft" class="banner-left">
            <div class="container-default">
                <div>
                    <div id="ban_wide_left" class="ban_wide_scroll">
                        <div class="adPosition" positionCode="BANNER_POSITION_WIDE_LEFT" style="margin-bottom: 0px"></div>
<script type='text/javascript'> var bannerContext={"CateId":88,"PageId":null,"CityCode":null,"DistrictId":null,"CurrentPage":97};</script>
                    </div>

                    <div id="ban_left" class="ban_scroll" style="display: block; top: 0px; position: fixed; left: 321.5px;">
                        <div class="adPosition" positionCode="BANNER_POSITION_LEFT" style="margin-bottom: 0px"></div>
<script type='text/javascript'> var bannerContext={"CateId":88,"PageId":null,"CityCode":null,"DistrictId":null,"CurrentPage":97};</script>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="popupMarking  save" style="display: none">
            <img src="https://staticfile.batdongsan.com.vn/images/mobile/icons/24x24/filled/ic_unsave.svg">
            <span> L&#x1B0;u tin th&#xE0;nh c&#xF4;ng</span>
        </div>
        <div class="popupMarking  unsave" style="display: none">
            <img src="https://staticfile.batdongsan.com.vn/images/mobile/icons/24x24/outlined/ic_save.svg">
            <span> &#x110;&#xE3; b&#x1ECF; l&#x1B0;u tin</span>
        </div>
            <div class="site-center">
                


<div id="MiddleSubMenu">
    <div class="home-top-search" style="padding-bottom: 10px !important;">
    <div class="home-top-search-keyword">
    <form role="search" method="get" id="searchform" action="{{route('searchTinTuc')}}">
            <input type="text" value="" name="timtintuc" id="searchnews" placeholder="Nhap Tu Khoa..."/>
            <button type="submit" id="searchsubmit">Tim Kiem<button>
        </form> 
    </div>
    <div class="advance-select-box" id="home-top-search">
        <input type="hidden" id="cboTypeSearch" value="4">
    </div>
    <div id="home-top-search-otions" class="advance-select-options advance-options" hddvalue="cboTypeSearch" ddlid="home-top-search" style="">
    </div>
</div>
<div id="gglbody"></div>
<div class="clear"></div>
</div>
<div id="MainContent"></div>
<div class="clear"></div>
<div class="body-left">
    <div id="Breadcrumb"></div>
    <div id="TopContent"></div>
    <div>
        <div id="TopContentLeft" class="SubTopContent"></div>
        <div id="TopContentRight" class="SubTopContent"></div>
    </div>
    <div style="clear: both;"></div>
    <div id="LeftMainContent">
        <div class="container-default">
            <div id="ctl23_BodyContainer">
                <div class="body-left">
                    <div id="ctl23_ctl00_panelCate" class="detailsView-title-style">
                        <div class="font-title-list-news"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                    
            
            
            <div class="clear line"></div>


            @foreach ($articles as $articles)
            
            <div class="tintuc-row1 tintuc-list tc-tit">
                <div class="tc-img list-news-image-title">
                    <a href="{!! Route('tintuc_single_post', $articles->id) !!}" title="{!! $articles->title !!}">
                        <img class="bor_img" style="width: 132px; height: 100px;" alt="{!! $articles->title !!}" src="{!! $articles->image_link !!}">
                    </a>&nbsp;&nbsp;
                </div>
                <h3>
                    <a class="link_blue" href="{!! Route('tintuc_single_post', $articles->id) !!}" title="{!! $articles->title !!}">
                        {!! $articles->title !!}
                    </a>
                </h3>
                <div class="datetime">
                    {!! $articles->updated_at !!}
                </div>
                <p style="text-rendering:geometricPrecision;">
                    {!! $articles->title !!}
                </p>
            </div>
            
            @endforeach

            
    <div class="clear">
    </div>
    <div class="margit5">
        <div class="tc-tit-bottom">
                <div class="ks-pagination-links" align="center" stype="float: right">
<a pId="1" href="/tin-tuc"><div class="style-pager-row-selected">1</div></a>
<a pId="2" href="/tin-tuc/p2"><div class="">2</div></a>
<a pId="3" href="/tin-tuc/p3"><div class="">3</div></a>
<a pId="4" href="/tin-tuc/p4"><div class="">4</div></a>
<a pId="5" href="/tin-tuc/p5"><div class="">5</div></a>
</div>

        </div>
    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<div id="RightMainContent" class="body-right">
    <div>
            <div class="container-common">
        <div>
            <div>
                <div class="newsletter-form-small">
                    <div class="mb5">
                        <div class="fl">
                            <img src="https://file4.batdongsan.com.vn/images/icon-newsletter-small.jpg">
                        </div>
                        <div class="fl news-text">Nhận bản tin từ Batdongsan.com.vn</div>
                        <div class="clear"></div>
                    </div>
                    <div class="newsletter-content">
                        <div class="newsletter-bound">
                            <div class="fl input">
                                <input type="text" id="email" placeholder="Nhập email của bạn">
                            </div>
                            <div class="fl a"><a href="#" class="newsletter-register" id="newsletterRegister">Đăng ký</a></div>
                            <div class="clear">&nbsp;</div>
                            <div id="emailValid"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    <div style="clear:both;"></div>
    <div class="adPosition" positionCode="BANNER_POSITION_RIGHT_MAIN_CONTENT" style=""></div>
<script type='text/javascript'> var bannerContext={"CateId":88,"PageId":null,"CityCode":null,"DistrictId":null,"CurrentPage":97};</script>
    <div style="clear:both;"></div>
    

    <div class="container-common">
        <div class="box-header">
            <div class="name_tit" align="center">
                <h2 style="color: White;">
                    Tin nhiều người đọc
                </h2>
            </div>
        </div>

        <div class="bor_box">

                <div style="padding: 5px; width: 60px; height: 60px; float: left;">
                    <div class="many-readers-title-icon">
                        <a title="&#xCA; ch&#x1EC1; v&#x1EDB;i &#x111;&#x1EA7;u t&#x1B0; c&#x103;n h&#x1ED9; cho thu&#xEA;"  href="/tin-thi-truong/e-che-voi-dau-tu-can-ho-cho-thue-ar105243">
                            <img style="width: 60px; height: 60px;" src="https://file4.batdongsan.com.vn/crop/60x60/2020/10/08/FTnaKngu/20201008174552-f554.jpg">
                        </a>
                    </div>
                </div>
                <div class="data-default-CSSClass">
                    <p style="padding: 0px; margin: 5px 5px 0 5px;">
                        <a class="controls-view-date-contents-link"  href="/tin-thi-truong/e-che-voi-dau-tu-can-ho-cho-thue-ar105243" title="&#xCA; ch&#x1EC1; v&#x1EDB;i &#x111;&#x1EA7;u t&#x1B0; c&#x103;n h&#x1ED9; cho thu&#xEA;">
                            &#xCA; ch&#x1EC1; v&#x1EDB;i &#x111;&#x1EA7;u t&#x1B0; c&#x103;n h&#x1ED9; cho thu&#xEA;
                                                    </a>
                    </p>
                </div>
                <div style="clear: both;"></div>
                <div style="padding: 5px; width: 60px; height: 60px; float: left;">
                    <div class="many-readers-title-icon">
                        <a title="Gi&#xE1; B&#x110;S kh&#xF4;ng gi&#x1EA3;m m&#x1EA1;nh, chuy&#xEA;n gia kh&#x1EB3;ng &#x111;&#x1ECB;nh &#x201C;l&#xE0;m g&#xEC; c&#xF3; &#x111;&#xE1;y m&#xE0; d&#xF2;&#x201D;"  href="/tin-thi-truong/gia-bds-khong-giam-manh-chuyen-gia-khang-dinh-lam-gi-co-day-ma-do-ar105240">
                            <img style="width: 60px; height: 60px;" src="https://file4.batdongsan.com.vn/crop/60x60/2020/10/08/zk7ggeWN/20201008154357-9653.jpg">
                        </a>
                    </div>
                </div>
                <div class="data-default-CSSClass">
                    <p style="padding: 0px; margin: 5px 5px 0 5px;">
                        <a class="controls-view-date-contents-link"  href="/tin-thi-truong/gia-bds-khong-giam-manh-chuyen-gia-khang-dinh-lam-gi-co-day-ma-do-ar105240" title="Gi&#xE1; B&#x110;S kh&#xF4;ng gi&#x1EA3;m m&#x1EA1;nh, chuy&#xEA;n gia kh&#x1EB3;ng &#x111;&#x1ECB;nh &#x201C;l&#xE0;m g&#xEC; c&#xF3; &#x111;&#xE1;y m&#xE0; d&#xF2;&#x201D;">
                            Gi&#xE1; B&#x110;S kh&#xF4;ng gi&#x1EA3;m m&#x1EA1;nh, chuy&#xEA;n gia kh&#x1EB3;ng &#x111;&#x1ECB;nh &#x201C;l&#xE0;m g&#xEC; c&#xF3; &#x111;&#xE1;y m&#xE0; d&#xF2;&#x201D;
                                                    </a>
                    </p>
                </div>
                <div style="clear: both;"></div>
                <div style="padding: 5px; width: 60px; height: 60px; float: left;">
                    <div class="many-readers-title-icon">
                        <a title="Hai &#x111;&#x1EE3;t s&#x1ED1;t &#x111;&#x1EA5;t m&#x1EDB;i c&#xF3; th&#x1EC3; s&#x1EBD; xu&#x1EA5;t hi&#x1EC7;n trong qu&#xFD; 4/2020?"  href="/tin-thi-truong/sot-dat-o-dau-ar105210">
                            <img style="width: 60px; height: 60px;" src="https://file4.batdongsan.com.vn/crop/60x60/2020/10/06/zk7ggeWN/20201006161417-ec87.jpg">
                        </a>
                    </div>
                </div>
                <div class="data-default-CSSClass">
                    <p style="padding: 0px; margin: 5px 5px 0 5px;">
                        <a class="controls-view-date-contents-link"  href="/tin-thi-truong/sot-dat-o-dau-ar105210" title="Hai &#x111;&#x1EE3;t s&#x1ED1;t &#x111;&#x1EA5;t m&#x1EDB;i c&#xF3; th&#x1EC3; s&#x1EBD; xu&#x1EA5;t hi&#x1EC7;n trong qu&#xFD; 4/2020?">
                            Hai &#x111;&#x1EE3;t s&#x1ED1;t &#x111;&#x1EA5;t m&#x1EDB;i c&#xF3; th&#x1EC3; s&#x1EBD; xu&#x1EA5;t hi&#x1EC7;n trong qu&#xFD; 4/2020?
                                                    </a>
                    </p>
                </div>
                <div style="clear: both;"></div>
                <div style="padding: 5px; width: 60px; height: 60px; float: left;">
                    <div class="many-readers-title-icon">
                        <a title="Ng&#x1B0;&#x1EDD;i d&#xE2;n &#x111;&#xE3; h&#x1EBF;t c&#x1A1; h&#x1ED9;i mua c&#x103;n h&#x1ED9; gi&#xE1; b&#xEC;nh d&#xE2;n?"  href="/tin-thi-truong/nguoi-dan-het-co-hoi-mua-can-ho-binh-dan-ar105357">
                            <img style="width: 60px; height: 60px;" src="https://file4.batdongsan.com.vn/crop/60x60/2020/10/26/FTnaKngu/20201026094325-c5ee.jpg">
                        </a>
                    </div>
                </div>
                <div class="data-default-CSSClass">
                    <p style="padding: 0px; margin: 5px 5px 0 5px;">
                        <a class="controls-view-date-contents-link"  href="/tin-thi-truong/nguoi-dan-het-co-hoi-mua-can-ho-binh-dan-ar105357" title="Ng&#x1B0;&#x1EDD;i d&#xE2;n &#x111;&#xE3; h&#x1EBF;t c&#x1A1; h&#x1ED9;i mua c&#x103;n h&#x1ED9; gi&#xE1; b&#xEC;nh d&#xE2;n?">
                            Ng&#x1B0;&#x1EDD;i d&#xE2;n &#x111;&#xE3; h&#x1EBF;t c&#x1A1; h&#x1ED9;i mua c&#x103;n h&#x1ED9; gi&#xE1; b&#xEC;nh d&#xE2;n?
                                                    </a>
                    </p>
                </div>
                <div style="clear: both;"></div>
                <div style="padding: 5px; width: 60px; height: 60px; float: left;">
                    <div class="many-readers-title-icon">
                        <a title="Gi&#xE1; nh&#xE0; S&#xE0;i G&#xF2;n &#x111;ang cao h&#x1A1;n bao nhi&#xEA;u so v&#x1EDB;i H&#xE0; N&#x1ED9;i?"  href="/tin-thi-truong/so-sanh-gia-nha-sai-gon-va-ha-noi-ar105410">
                            <img style="width: 60px; height: 60px;" src="https://file4.batdongsan.com.vn/crop/60x60/2020/11/03/FTnaKngu/20201103092712-fabb.jpg">
                        </a>
                    </div>
                </div>
                <div class="data-default-CSSClass">
                    <p style="padding: 0px; margin: 5px 5px 0 5px;">
                        <a class="controls-view-date-contents-link"  href="/tin-thi-truong/so-sanh-gia-nha-sai-gon-va-ha-noi-ar105410" title="Gi&#xE1; nh&#xE0; S&#xE0;i G&#xF2;n &#x111;ang cao h&#x1A1;n bao nhi&#xEA;u so v&#x1EDB;i H&#xE0; N&#x1ED9;i?">
                            Gi&#xE1; nh&#xE0; S&#xE0;i G&#xF2;n &#x111;ang cao h&#x1A1;n bao nhi&#xEA;u so v&#x1EDB;i H&#xE0; N&#x1ED9;i?
                                                    </a>
                    </p>
                </div>
                <div style="clear: both;"></div>
                <div style="padding: 5px; width: 60px; height: 60px; float: left;">
                    <div class="many-readers-title-icon">
                        <a title="&quot;Tuy&#x1EC7;t ch&#x1EE7;ng&quot; nh&#xE0; gi&#xE1; r&#x1EBB;, ng&#x1B0;&#x1EDD;i mua s&#x103;n nh&#xE0; th&#x1EE9; c&#x1EA5;p"  href="/tin-thi-truong/tuyet-chung-nha-gia-re-nguoi-mua-san-nha-thu-cap-ar105486">
                            <img style="width: 60px; height: 60px;" src="https://file4.batdongsan.com.vn/crop/60x60/2020/11/11/YSUn3oGJ/20201111090801-0feb.jpg">
                        </a>
                    </div>
                </div>
                <div class="data-default-CSSClass">
                    <p style="padding: 0px; margin: 5px 5px 0 5px;">
                        <a class="controls-view-date-contents-link"  href="/tin-thi-truong/tuyet-chung-nha-gia-re-nguoi-mua-san-nha-thu-cap-ar105486" title="&quot;Tuy&#x1EC7;t ch&#x1EE7;ng&quot; nh&#xE0; gi&#xE1; r&#x1EBB;, ng&#x1B0;&#x1EDD;i mua s&#x103;n nh&#xE0; th&#x1EE9; c&#x1EA5;p">
                            &quot;Tuy&#x1EC7;t ch&#x1EE7;ng&quot; nh&#xE0; gi&#xE1; r&#x1EBB;, ng&#x1B0;&#x1EDD;i mua s&#x103;n nh&#xE0; th&#x1EE9; c&#x1EA5;p
                                                    </a>
                    </p>
                </div>
                <div style="clear: both;"></div>
        </div>
    </div>


    <div style="clear: both; margin-bottom: 10px;"></div>
    
<div class="container-common">
    <div class="box-header">
        <h2 class="name_tit" align="center">Ch&#x1EE7; &#x111;&#x1EC1; &#x111;&#x1B0;&#x1EE3;c quan t&#xE2;m</h2>
    </div>
    <div class="bor_box">
        <div class="list">
            <ul>
                        <li>
                            <a href="/Covid-19" title="B&#x110;S &amp; Covid-19">
                                <span class="faq-name">
                                    B&#x110;S &amp; Covid-19
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="/kinh-nghiem-mua-ban-nha" title="Kinh nghi&#x1EC7;m mua b&#xE1;n nh&#xE0;">
                                <span class="faq-name">
                                    Kinh nghi&#x1EC7;m mua b&#xE1;n nh&#xE0;
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="/bao-cao-thi-truong-batdongsancomvn" title="B&#xE1;o c&#xE1;o th&#x1ECB; tr&#x1B0;&#x1EDD;ng Batdongsan.com.vn">
                                <span class="faq-name">
                                    B&#xE1;o c&#xE1;o th&#x1ECB; tr&#x1B0;&#x1EDD;ng Batdongsan.com.vn
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="/co-hen-voi-chuyen-gia-bat-dong-san" title="C&#xF3; h&#x1EB9;n v&#x1EDB;i chuy&#xEA;n gia b&#x1EA5;t &#x111;&#x1ED9;ng s&#x1EA3;n">
                                <span class="faq-name">
                                    C&#xF3; h&#x1EB9;n v&#x1EDB;i chuy&#xEA;n gia b&#x1EA5;t &#x111;&#x1ED9;ng s&#x1EA3;n
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="/dien-bien-thi-truong-bds-nam-2020" title="Di&#x1EC5;n bi&#x1EBF;n th&#x1ECB; tr&#x1B0;&#x1EDD;ng B&#x110;S n&#x103;m 2020">
                                <span class="faq-name">
                                    Di&#x1EC5;n bi&#x1EBF;n th&#x1ECB; tr&#x1B0;&#x1EDD;ng B&#x110;S n&#x103;m 2020
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="/bao-ve-nguoi-mua-nha-dat" title="B&#x1EA3;o v&#x1EC7; ng&#x1B0;&#x1EDD;i mua nh&#xE0;, &#x111;&#x1EA5;t">
                                <span class="faq-name">
                                    B&#x1EA3;o v&#x1EC7; ng&#x1B0;&#x1EDD;i mua nh&#xE0;, &#x111;&#x1EA5;t
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="/bai-infographic" title="Infographic">
                                <span class="faq-name">
                                    Infographic
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="/bat-dong-san-tai-cac-dac-khu-kinh-te" title="B&#x1EA5;t &#x111;&#x1ED9;ng s&#x1EA3;n t&#x1EA1;i c&#xE1;c &quot;&#x111;&#x1EB7;c khu&quot; kinh t&#x1EBF;">
                                <span class="faq-name">
                                    B&#x1EA5;t &#x111;&#x1ED9;ng s&#x1EA3;n t&#x1EA1;i c&#xE1;c &quot;&#x111;&#x1EB7;c khu&quot; kinh t&#x1EBF;
                                </span>
                            </a>
                        </li>
            </ul>
        </div>
            <div style="padding-left: 20px; padding-top: 5px; border-top: 1px solid #ccc; margin-top: 10px;">
                <a href="/chu-de-trong-chu-de-ve-thong-tin-thi-truong" class="linktoall">Xem tất cả</a>
            </div>
    </div>
</div>
    <div style="clear: both; margin-bottom: 10px;"></div>
    <div class="box-tien-ich">
        <div class="box-tien-ich">
    <div class="box-header aligncenter">
        <h2 class="name_tit">Hỗ trợ tiện ích</h2>
    </div>
    <div class="bor_box">
        <ul>
            <li>
                <a href="/ho-tro-tien-ich/ht-xem-huong-nha">
                    <img alt="Tư vấn phong thủy" src="https://file4.batdongsan.com.vn/images/icon-phongthuy.png">Tư vấn phong thủy
                </a>
            </li>
            <li>
                <a href="/ho-tro-tien-ich/ht-du-toan-chi-tiet">
                    <img alt="Tính lãi suất" src="https://file4.batdongsan.com.vn/images/icon-chiphi.png">Dự tính chi phí làm nhà
                </a>
            </li>
            <li>
                <a href="/ho-tro-tien-ich/ht-tinh-lai-suat">
                    <img alt="Tính lãi suất" src="https://file4.batdongsan.com.vn/images/icon-laisuat.png">Tính lãi suất
                </a>
            </li>
        </ul>
    </div>
</div>
    </div>
    <div class="clear10"></div>
    <div style="clear:both;"></div>
    <div>
        
        <div class="clear10"></div>
    </div>
    <div style="clear:both;"></div>
    <div class="fb-fanpage">
    <div id="fb-root"></div>    
    <script>
(function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9&appId=302507473246792";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

    <div class="fb-page" data-href="https://www.facebook.com/Batdongsandv/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
        <blockquote cite="https://www.facebook.com/Batdongsandv/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Batdongsandv/">Batdongsan.com.vn</a></blockquote>
    </div>
</div>

    <div style="clear:both;"></div>
</div>
<div class="banner-bottom">
    <div id="SubBottomLeftMainContent" style="float: left; width: 560px"></div>
    <div id="SubBottomRightMainContent" style="float: left; width: 430px; margin-left: 5px"></div>
</div>
                <div class="banner-bottom">
                    <div style="float: left; width: 560px">
                    </div>
                    <div style="float: left; width: 430px; margin-left: 5px">
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="boxLinkFooter">
                        <div id="boxLink" class="footer-link-new">
        <ul>
<li>
<h4>Tìm kiếm nhiều</h4>
<ul>
<li><a href=""></a></li>
<li><a href="/ban-can-ho-chung-cu-vinhomes-grand-park-quan-9">Vinhomes Grand Park quận 9</a></li>
<li><a href="/ban-dat-nen-du-an-phuc-an-garden">Phúc An Garden</a></li>
<li><a href="/ban-nha-biet-thu-lien-ke-sun-plaza-grand-world">Sun Plaza Grand World</a></li>
<li><a href="/ban-can-ho-chung-cu-vinhomes-central-park">Vinhomes Central Park</a></li>
<li><a href="/ban-can-ho-chung-cu-apec-mandala-wyndham-binh-thuan">Apec Mandala Wyndham</a></li>
<li><a href="/ban-nha-biet-thu-lien-ke-novaworld-phan-thiet">Biệt thự NovaWorld Phan Thiết</a></li>
<li><a href="/ban-nha-biet-thu-lien-ke-novaworld-ho-tram">Biệt thự NovaWorld Hồ Tràm</a></li>
<li><a href="/ban-nha-biet-thu-lien-ke-thanh-long-bay">Biệt thự Thanh Long Bay</a></li>
</ul>
</li>
<li>
<h4>Hà Nội</h4>
<ul>
<li><a href="/ban-can-ho-chung-cu-vinhomes-metropolis-lieu-giai">Vinhomes Metropolis</a></li>
<li><a href="/ban-can-ho-chung-cu-sunshine-city">Sunshine City</a></li>
<li><a href="/ban-can-ho-chung-cu-tsg-lotus-sai-dong">TSG Lotus Sài Đồng</a></li>
<li><a href="/ban-can-ho-chung-cu-imperia-sky-garden">Imperia Sky Garden</a></li>
<li><a href="/ban-can-ho-chung-cu-vinhomes-gardenia">Vinhomes Gardenia</a></li>
<li><a href="/ban-can-ho-chung-cu-vinhomes-ocean-park-gia-lam">Vinhomes Ocean Park Gia Lâm</a></li>
<li><a href="/tags/ban/ban-chung-cu-mini-ha-noi">Chung cư mini</a></li>
<li><a href="/ban-can-ho-chung-cu-ha-noi">Chung cư giá rẻ Hà Nội</a></li>
</ul>
</li>
<li>
<h4>Hồ Chí Minh</h4>
<ul>
<li><a href="/ban-nha-rieng-quan-7">Bán nhà Quân 7</a></li>
<li><a href="/nha-dat-ban-binh-thanh">Bán nhà Bình Thạnh</a></li>
<li><a href="/nha-dat-ban-tan-binh">Bán nhà Tân Bình</a></li>
<li><a href="/ban-nha-rieng-tan-phu">Bán nhà Tân Phú</a></li>
<li><a href="/ban-nha-rieng-quan-1">Bán nhà Quận 1</a></li>
<li><a href="/nha-dat-ban-quan-12">Bán nhà Quận 12</a></li>
<li><a href="/tags/ban/ban-can-ho-mini-tp-hcm">Căn hộ mini</a></li>
<li><a href="/ban-can-ho-chung-cu-tp-hcm">Căn hộ giá rẻ TPHCM</a></li>
</ul>
</li>
<li>
<h4>Nhà đất bán</h4>
<ul>
<li><a href="/ban-dat-binh-phuoc">Bán đất Bình Phước</a></li>
<li><a href="/ban-nha-biet-thu-lien-ke-da-lat-ldd">Bán biệt thự Đà Lạt</a></li>
<li><a href="/ban-nha-mat-pho-lavilla-green-city">Lavilla Green City</a></li>
<li><a href="/nha-dat-ban-cau-giay">Nhà đất Cầu Giấy</a></li>
<li><a href="/nha-dat-ban-quy-nhon-bdd">Nhà đất Quy Nhơn</a></li>
<li><a href="/ban-can-ho-chung-cu-vung-tau-pearl">Vũng Tàu Pearl</a></li>
</ul>
</li>
</ul>

    </div>



                </div>
            </div>

        <div id="SiteRight" class="banner-right clearfix">
            <div class="container-default">
                <div>
                    <div id="ban_wide_right" class="ban_wide_scroll">
                        <div class="adPosition" positionCode="BANNER_POSITION_WIDE_RIGHT" style="margin-bottom: 0px"></div>
<script type='text/javascript'> var bannerContext={"CateId":88,"PageId":null,"CityCode":null,"DistrictId":null,"CurrentPage":97};</script>
                    </div>

                    <div id="ban_right" class="ban_scroll">
                        <div class="adPosition" positionCode="BANNER_POSITION_RIGHT" style="margin-bottom: 0px"></div>
<script type='text/javascript'> var bannerContext={"CateId":88,"PageId":null,"CityCode":null,"DistrictId":null,"CurrentPage":97};</script>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="dialogPopup" role="dialog">
            <div class="nomodal"></div>
            <div class="modal-dialog">
                <div class="modal-content ">
                </div>
            </div>
        </div>

        <div class="adPosition" positionCode="BANNER_POSITION_FLOADING_BOTTOM" style=""></div>
<script type='text/javascript'> var bannerContext={"CateId":88,"PageId":null,"CityCode":null,"DistrictId":null,"CurrentPage":97};</script>

        <div class="hide" id="domainUserInfo" data-value="https://batdongsan.com.vn"></div>
        <div class="hide" id="domainWeb" data-value="https://batdongsan.com.vn"></div>
        <div class="hide" id="getBannerUrl" data-value="/microservice-architecture-router/Systems/Banner/GetBanners"></div>
        <div class="hide" id="domainStatistic" data-value="https://statistic.batdongsan.com.vn"></div>
        <div class="popup-content ">
        </div>
        <div class="lg-backdrop in" id="dialog-backdrop" style="transition-duration: 150ms;display: none;" onclick="account.CloseAccountPopup()"></div>
        <div id="gototop" title="Go to top"></div>
    </div>
    <div style="display: none"
         class="searching-histories-configs"
         max-searching-histories-length="20"
         sync-time-searching-histories="5"
         sync-searching-histories-url="/Product/ProductSearch/SyncSearchingHistories"
         remove-searching-histories-url="/Product/ProductSearch/RemoveSearchingHistory">
    </div>
    
    
            <script src="https://staticfile.batdongsan.com.vn/js/Common/filestatic.ver202011131001.msvbds.FrontEnd.Common.min.js"></script>
    
    <!--start BannerContext-->
    <script type='text/javascript'> var __bannerContext={"PageId":97,"CateId":88,"CityCode":null,"DistrictId":null,"CurrentPage":1};</script>
    <!--end BannerContext-->
    <!--Start of Zendesk Chat Script-->
    <script type="text/javascript">
        window.$zopim || (function (d, s) {
            var z = $zopim = function (c) { z._.push(c) }, $ = z.s =
                d.createElement(s), e = d.getElementsByTagName(s)[0]; z.set = function (o) {
                    z.set.
                        _.push(o)
                }; z._ = []; z.set._ = []; $.async = !0; $.setAttribute("charset", "utf-8");
            $.src = "https://v2.zopim.com/?6fJlcOXWwJofJZOzmeDIifb7bHGvvSte"; z.t = +new Date; $.
                type = "text/javascript"; e.parentNode.insertBefore($, e)
        })(document, "script");
    </script>
    <!--End of Zendesk Chat Script-->
    <script type="text/javascript">
            var newsLetterRegister = new newsLetterRegister.NewsLetterRegister();
            newsLetterRegister.InitializeLoad();

            var commentUser = new commentUser.CommentUser();
            commentUser.InitializeLoad();

            var paramAccount = {
                urlListLogin: '/Systems/Account/Login',
                urlListRegister: '/Systems/Account/Register',
                urlListForgetPass: '/Systems/Account/ForgetPassword',
                urlListCity: '/Contacts/CommonData/GetCityList',
                urlListDistrict: '/Contacts/CommonData/GetListDistrictByCity',
                urlListWard: '/Contacts/CommonData/GetWardList',
            };

            var account = new account.Content();
            account.Initialize(paramAccount);

            var footer = new footer.Footer();
            footer.Initialize();

            var menu = new menu.Menu();
            menu.Initialize();
    </script>

    <div sync-marked-products-url="/Product/MarkedProducts/SyncMarkedProducts"
         unmarked-product-url="/Product/MarkedProducts/UnmarkProduct"
         marked-product-ids-sync-time="0.5"></div>
    
    <script type="text/javascript">
        try {
            var script_imported = document.createElement('script');
            script_imported.src = 'https://log.batdongsan.com.vn/js/bds/bds-msv-log.min.js?hv=2&dv=' + (new Date().toJSON().slice(0, 10));
            if (document.body != null && document.body != undefined) {
                document.body.appendChild(script_imported);
            } else {
                document.head.appendChild(script_imported);
            }
        } catch (e) { }
    </script>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {
            var lazyImages = [].slice.call(document.querySelectorAll('[src-lazy]'));
            window.countOfLazyImages = lazyImages.length;
            if ('IntersectionObserver' in window) {
                let lazyImageObserver = new IntersectionObserver(function (entries, observer) {
                    entries.forEach(function (entry) {
                        if (entry.isIntersecting) {
                            let lazyImage = entry.target;
                            if (lazyImage.attributes['src-lazy']) {
                                lazyImage.src = lazyImage.attributes['src-lazy'].value;
                                lazyImage.removeAttribute('src-lazy');
                                lazyImageObserver.unobserve(lazyImage);
                            }
                        };
                    });
                });
                lazyImages.forEach(function (lazyImage, i) {
                    lazyImage.setAttribute('lazy-id', i);
                    lazyImageObserver.observe(lazyImage);
                });
                (function checkDuplicate() {
                    var countOfLazyElements = [].slice.call(document.querySelectorAll('[lazy-id]'));
                    if (countOfLazyElements.length > window.countOfLazyImages) {
                        var elements = [].slice.call(document.querySelectorAll('[src-lazy]'));
                        elements.forEach(element => {
                            var lazyId = element.attributes['lazy-id'].value;
                            var lazyElements = [].slice.call(document.querySelectorAll(`[lazy-id="${lazyId}"]`));
                            if (lazyElements.length > 1) {
                                for (var i = 1; i < lazyElements.length; i++) {
                                    var lazyElement = lazyElements[i];
                                    lazyImageObserver.observe(lazyElement);
                                    lazyElement.setAttribute('lazy-id', window.countOfLazyImages);
                                    window.countOfLazyImages++;
                                }
                            }
                        });
                    }
                    setTimeout(checkDuplicate, 1000)
                })();
            } else {
                $('[src-lazy]').each(function () {
                    this.src = this.attributes['src-lazy'].value;
                    this.removeAttribute('src-lazy');
                });
            }
        });
    </script>
    
</body>

@endsection


