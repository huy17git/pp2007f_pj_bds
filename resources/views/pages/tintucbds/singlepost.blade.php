@foreach ($articles as $articles)
@extends('layouts.master')

@section('title')
{!! $articles->title !!}
@endsection

@section('styles')
<link rel="stylesheet" href="https://staticfile.batdongsan.com.vn/css/filestatic.ver202011110519.msvbds.FrontEnd.min.css" />
<link rel="stylesheet" type="text/css" href="https://staticfile.batdongsan.com.vn/css/Broker/broker.min.css" media="all">
<link href="https://file4.batdongsan.com.vn/images/icon-bds.ico" rel="shortcut icon" type="image/x-icon" />

@endsection

@section('content')
<body class="bg-site">

    <div class="form-content">
        <div class="adPosition" positionCode="BANNER_POSITION_BACKGROUND" style=""></div>
<script type='text/javascript'> var bannerContext={"CateId":88,"PageId":null,"CityCode":null,"DistrictId":0,"CurrentPage":259};</script>

        <div id="staticDomain" statsDomain="https://statistic.batdongsan.com.vn" data-fileimg="https://file4.batdongsan.com.vn" data-web="https://batdongsan.com.vn" data-msvrouter="/microservice-architecture-router" data-msvrouter-personal="/microservice-architecture-router-personal" data-cssServer="https://staticfile.batdongsan.com.vn" data-oldsystem="https://batdongsan.com.vn" data-content="https://batdongsan.com.vn" data-domainorigin="batdongsan.com.vn" data-sug-sell="https://suggestion1.batdongsan.com.vn/" data-sug-rent="https://suggestion2.batdongsan.com.vn/" class="hide"></div>
        <div id="addonImage" addon-image="https://staticfile.batdongsan.com.vn/images/no-image.png"></div>
        <div id="SiteLeft" class="banner-left">
            <div class="container-default">
                <div>
                    <div id="ban_wide_left" class="ban_wide_scroll">
                        <div class="adPosition" positionCode="BANNER_POSITION_WIDE_LEFT" style="margin-bottom: 0px"></div>
<script type='text/javascript'> var bannerContext={"CateId":88,"PageId":null,"CityCode":null,"DistrictId":0,"CurrentPage":259};</script>
                    </div>

                    <div id="ban_left" class="ban_scroll" style="display: block; top: 0px; position: fixed; left: 321.5px;">
                        <div class="adPosition" positionCode="BANNER_POSITION_LEFT" style="margin-bottom: 0px"></div>
<script type='text/javascript'> var bannerContext={"CateId":88,"PageId":null,"CityCode":null,"DistrictId":0,"CurrentPage":259};</script>
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
                

<input type="hidden" value="3" id="activeTxtSelect" />
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
<div class="clear">
</div>
<div class="body-left">
    <div id="Breadcrumb"></div>
    <div id="TopContent"></div>
    <div>
        <div id="TopContentLeft" class="SubTopContent"></div>
        <div id="TopContentRight" class="SubTopContent"></div>
    </div>
    <div style="clear: both;">
    </div>
    <div id="LeftMainContent">
        <div class="container-default">
            <div>
                

    <div class="contentDetail">
        <input data-val="true" data-val-required="The IsSlide field is required." id="hddIsSlide" name="ArticleDetailInfo.IsSlide" type="hidden" value="False" />
        <input data-val="true" data-val-required="The ArticleId field is required." id="hddArticleId" name="ArticleDetailInfo.ArticleId" type="hidden" value="105537" />

    <h1 class="detailsView-title-style">{!!$articles->title!!}</h1>
        <div class="date-first">
            {!!$articles->updated_at!!}
        </div>
        <div>
            <div>
                    <div class="inasub">
                        <strong>Cùng chủ đề chưa fillter: </strong>
                        <a href="/tin-tuc"> {!!$articles->title!!} </a>
                    </div>

                    <div class="subinart">
                            <div class="artlist">
                                    <a href="/tin-tuc" class="line">{!!$articles->title!!}</a>
                            </div>
                            <div class="artlist">
                                    <a href="/tin-tuc">{!!$articles->title!!} </a>
                            </div>
                    </div>
            </div>
        </div>

        <div class="detailsView-contents-style">
            <h2 class="summary">
                {!!$articles->title!!}
            </h2>
        </div>

        <div id="divContents" class="detailsView-contents-style detail-article-content">
            

<p>{!!$articles->content!!}</p>
<p style="text-align: center;"><img alt="{!!$articles->title!!}" src="{!!$articles->image_link!!}" style="width: 100%;" title="{!!$articles->title!!}"><br>
<em style="text-align: center;">{!!$articles->title!!}</em></p>


<p><span style="font-size:18px;"><strong>&gt;&gt;&nbsp;<a href="/tin-tuc" style="text-align: justify;" target="_blank">{!!$articles->title!!}</a><br>
&gt;&gt;&nbsp;<a href="/tin-tuc" target="_blank">{!!$articles->title!!}</a></strong></span></p>
        </div>
            <div class="article-dmca">
                <a href="//www.dmca.com/Protection/Status.aspx?ID=d420f34f-74fa-421f-9dfe-b8aaf8392825" target="_blank" title="DMCA.com Protection Status" class="dmca-badge">
                    <img src="https://images.dmca.com/Badges/dmca-badge-w150-5x1-02.png?ID=d420f34f-74fa-421f-9dfe-b8aaf8392825" alt="DMCA.com Protection Status" />
                </a>
                <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"></script>
            </div>
        <div class="detailsView-contents-style link-source-wrapper">
            <div class="soucenews">
                    <span><img src="https://file4.batdongsan.com.vn/images/ThanhnienViet1.png" /></span>
            </div>
        </div>
        <div style="clear: both; height: 20px;"></div>

        <div class="stat detail-tools" ct="1" ac="2" cid="105537">
            <div class="tool-left">
                <a href="javascript:;" id="likeButton" data-id="105537" data-classid="105537">
                    <span id="105537" class="normalblue">Thích</span>
                    <span style="color: #848484">&nbsp;|&nbsp;</span>
                    <img alt="icon" src="https://file4.batdongsan.com.vn/images/opt/hand.jpg" width="12px" height="12px">&nbsp;
                    <span class="105537" style="color: #727272;">0</span>
                </a>&nbsp;&nbsp;
                <a title="Facebook" onfocus="this.blur();" href="" target="_blank" id="facebook" rel="nofollow">
                    <img class="sociable-hovers" alt="Facebook" title="Facebook" src="https://file4.batdongsan.com.vn/Images/facebook.gif">
                </a>&nbsp;&nbsp;
                <a onfocus="this.blur();" title="Twitter" href="" target="_blank" id="twitter" rel="nofollow">
                    <img class="sociable-hovers" alt="Twitter" title="Twitter" src="https://file4.batdongsan.com.vn/Images/twitter.gif">
                </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
            <div class="tool-right">
                <div style="float: left; width: 81px;">
                    <div style="float: left;">
                        <img alt="Quay lại" src="https://file4.batdongsan.com.vn/Images/Back.png">
                    </div>
                    <div style="margin-top: 0px; float: right; padding-left: 5px; padding-right: 5px;">
                        <a style="cursor: pointer; text-decoration: none; white-space: nowrap;" onclick="window.history.back();" rel="nofollow">Quay lại </a>
                    </div>
                </div>
                <div style="float: left; width: 88px;">
                    <div style="float: left;">
                        <img alt="In bài này" src="https://file4.batdongsan.com.vn/Images/Print.png">
                    </div>
                    <div style="margin-top: 0px; float: right; padding-left: 5px; padding-right: 5px;">
                        <a style="cursor: pointer; text-decoration: none;" onclick="window.print();" rel="nofollow">In bài này </a>
                    </div>
                </div>
                <div style="float: left; width: 138px;">
                    <div style="float: left;">
                        <img alt="Gửi bài này cho bạn bè" src="https://file4.batdongsan.com.vn/Images/Email.png">
                    </div>
                    <div style="margin-top: 0px; float: right; padding-left: 5px; padding-right: 5px;">
                        <a id="lnkSendEmail" href="#">Gửi bài cho bạn bè</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <script type="application/ld+json">
            {"@context":"https://schema.org/","@type":"NewsArticle","mainEntityOfPage":{"@type":"WebPage","id":"https://batdongsan.com.vn/tin-thi-truong/thi-truong-nha-mat-pho-cho-thue-e-am-van-khong-giam-gia-ar105537"},"headline":"Thị trường nhà mặt phố cho thuê: ế ẩm vẫn không giảm giá","image":["https://file4.batdongsan.com.vn/2020/11/18/FTnaKngu/20201118135701-0137.jpg"],"datePublished":"2020-11-20T08:45:00","dateModified":"2020-11-20T09:01:53.46","author":{"@type":"Person","name":"Ban biên tập Batdongsan.com.vn"},"publisher":{"@type":"Organization","name":"Batdongsan.com.vn","logo":{"@type":"ImageObject","url":"https://staticfile.batdongsan.com.vn/images/Logo/ic_logo_2.svg"}},"description":"Trong khi nhiều phân khúc nhà đất đang có dấu hiệu “tươi xanh” trở lại trong quý 4/2020, loại hình nhà mặt phố cho thuê tại trung tâm TP.HCM vẫn ế ẩm kéo dài."}
        </script>


                <div class="clear" style="margin-bottom: 10px;">
                </div>
            </div>
        </div>

        

    <div class="othernews">
            <h2 class="normalblue" style="white-space: nowrap;">Tin nhiều người đọc chưa fillter</h2>
            <div class="otherline" style="width:80%;">
                &nbsp;
            </div>
                <h3 class="normal">
                    <a class="font-link-box-item iconlist" href="/tin-thi-truong/thi-truong-bat-dong-san-binh-duong-2020-cuoc-choi-cua-cac-ong-lon-ar105517" title="Th&#x1ECB; tr&#x1B0;&#x1EDD;ng b&#x1EA5;t &#x111;&#x1ED9;ng s&#x1EA3;n B&#xEC;nh D&#x1B0;&#x1A1;ng 2020: Cu&#x1ED9;c ch&#x1A1;i c&#x1EE7;a c&#xE1;c &#x201C;&#xF4;ng l&#x1EDB;n&#x201D;">
                        Thị trường bất động sản Bình Dương 2020: Cuộc chơi của các “ông lớn”
                        <i>(07:55 18/11/2020)</i>
                    </a>
                </h3>
                <h3 class="normal">
                    <a class="font-link-box-item iconlist" href="/tin-thi-truong/lo-dien-8-toa-thap-40-tang-cao-nhat-binh-duong-ar105520" title="L&#x1ED9; di&#x1EC7;n 8 t&#xF2;a th&#xE1;p 40 t&#x1EA7;ng cao nh&#x1EA5;t B&#xEC;nh D&#x1B0;&#x1A1;ng">
                        Lộ diện 8 tòa tháp 40 tầng cao nhất Bình Dương
                        <i>(08:00 17/11/2020)</i>
                    </a>
                </h3>
                <h3 class="normal">
                    <a class="font-link-box-item iconlist" href="/tin-thi-truong/ra-mat-d-aqua-bieu-tuong-song-phon-vinh-tren-ben-hoa-ar105515" title="Ra m&#x1EAF;t D-Aqua - Bi&#x1EC3;u t&#x1B0;&#x1EE3;ng s&#x1ED1;ng ph&#x1ED3;n vinh tr&#xEA;n B&#x1EBF;n Hoa">
                        Ra mắt D-Aqua - Biểu tượng sống phồn vinh trên Bến Hoa
                        <i>(08:00 17/11/2020)</i>
                    </a>
                </h3>
                <h3 class="normal">
                    <a class="font-link-box-item iconlist" href="/tin-thi-truong/nhung-diem-sang-bat-dong-san-giua-dai-dich-ar105535" title="&#x201C;Trong nguy c&#xF3; c&#x1A1;&#x201D;, nh&#x1EEF;ng &#x111;i&#x1EC3;m s&#xE1;ng c&#x1EE7;a th&#x1ECB; tr&#x1B0;&#x1EDD;ng B&#x110;S gi&#x1EEF;a &#x111;&#x1EA1;i d&#x1ECB;ch">
                        “Trong nguy có cơ”, những điểm sáng của thị trường BĐS giữa đại dịch
                        <i>(09:00 18/11/2020)</i>
                    </a>
                </h3>
                <h3 class="normal">
                    <a class="font-link-box-item iconlist" href="/chinh-sach-quan-ly/ra-soat-cac-doi-tuong-mua-nha-o-xa-hoi-tai-tp-hcm-ar105511" title="R&#xE0; so&#xE1;t c&#xE1;c &#x111;&#x1ED1;i t&#x1B0;&#x1EE3;ng mua nh&#xE0; &#x1EDF; x&#xE3; h&#x1ED9;i t&#x1EA1;i TP.HCM">
                        Rà soát các đối tượng mua nhà ở xã hội tại TP.HCM
                        <i>(09:00 16/11/2020)</i>
                    </a>
                </h3>
                <h3 class="normal">
                    <a class="font-link-box-item iconlist" href="/tin-thi-truong/ly-giai-suc-hut-khu-do-thi-tien-ich-moi-fenix-city-ar105543" title="L&#xFD; gi&#x1EA3;i s&#x1EE9;c h&#xFA;t Khu &#x111;&#xF4; th&#x1ECB; ti&#x1EC7;n &#xED;ch m&#x1EDB;i Fenix City">
                        Lý giải sức hút Khu đô thị tiện ích mới Fenix City
                        <i>(08:00 19/11/2020)</i>
                    </a>
                </h3>

            <div class="clear"></div>
            <h2 class="normalblue" style="white-space: nowrap;">Tin mới nhất đã fillter theo id</h2>
            <div class="otherline" style="width: calc(100% - 101px)">
                &nbsp;
            </div>
                @foreach ($newarticles as $newarticles)
                
                <h3 class="normal">
                    <a class="font-link-box-item iconlist" href="{!! Route('tintuc_single_post', $newarticles->id) !!}" title="T&#x1EAD;p &#x111;o&#xE0;n An Gia ra m&#x1EAF;t t&#xF2;a th&#xE1;p &#x111;&#x1EB9;p nh&#x1EA5;t d&#x1EF1; &#xE1;n Westgate">
                        {!!$newarticles->title!!}
                        <i>{!!$newarticles->updated_at!!}</i>
                    </a>
                </h3>

                @endforeach

    </div>
    <div class="othernews">
        <a id="lnkNewOther" href="/tin-thi-truong" style="cursor: pointer; text-decoration: underline; font-style: italic; color: #055699 !important;">Xem tiếp</a>
        <div class="otherline" style="width: calc(100% - 65px)">
            &nbsp;
        </div>
    </div>
    <div style="clear:both;"></div>

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
<script type='text/javascript'> var bannerContext={"CateId":88,"PageId":null,"CityCode":null,"DistrictId":0,"CurrentPage":259};</script>
    <div style="clear:both;"></div>
    
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
    <div style="clear: both; margin-bottom: 10px;">
    </div>
    <div class="box1">
    <h2 class="h1">
        Dành cho người xây nhà
    </h2>
    <ul>
        <li>
            <a href="/quy-trinh-xay-nha" title="Quy tr&#xEC;nh x&#xE2;y nh&#xE0;" rel="nofollow">Quy tr&#xEC;nh x&#xE2;y nh&#xE0;</a>
        </li>
        <li class="last">
            <a href="/ho-tro-tien-ich/ht-xem-tuoi-xay-nha" title="Xem tu&#x1ED5;i x&#xE2;y nh&#xE0;" rel="nofollow">Xem tu&#x1ED5;i x&#xE2;y nh&#xE0;</a>
        </li>
    </ul>
    <div class="clear">
    </div>
</div>

    <div style="clear:both;"></div>
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
        <ul><li><a href="/ban-can-ho-chung-cu-golden-land">Chung cư Golden Land</a></li><li><a href="/nha-dat-ban-gia-lai">Nhà đất Gia Lai</a></li><li><a href="/cho-thue-kho-nha-xuong-dat-quan-12">Nhà xưởng Quận 12 cho thuê</a></li><li><a href="/ban-dat-nen-du-an-phuoc-long-spring-town">Phuoc Long Spring Town</a></li><li><a href="/tags/ban/Ban-chung-cu-Royal-city-cat-lo">Bán chung cư Royal city cắt lỗ</a></li><li><a href="/cho-thue-nha-rieng-da-lat-ldd">Nhà cho thuê ở Đà Lạt</a></li><li><a href="/ban-nha-biet-thu-lien-ke-khu-do-thi-sai-dong">Bán biệt thự Sài Đồng</a></li><li><a href="/ban-nha-mat-pho-pho-thai-thinh-3">Bán nhà mặt phố Thái Thịnh</a></li><li><a href="/chung-cu-tincom-phap-van-pj885">Tincom Pháp Vân</a></li><li><a href="/ban-can-ho-chung-cu-chung-cu-yen-hoa-thang-long">Yên Hòa Thăng Long</a></li></ul><ul><li><a href="/cho-thue-nha-rieng-pho-le-thanh-nghi-4">Cho thuê nhà Lê Thanh Nghị</a></li><li><a href="/khu-do-thi-moi-thuan-an-bd/eco-xuan-lai-thieu-pj845">Eco Xuân Lái Thiêu</a></li><li><a href="/ban-dat-duong-lac-long-quan-6">Bán đất Lạc Long Quân</a></li><li><a href="/nha-dat-ban-thanh-khe-ddn">Nhà đất Thanh Khê</a></li><li><a href="/cho-thue-nha-rieng-duong-van-bao-2">Cho thuê nhà Vạn Bảo</a></li><li><a href="/ban-can-ho-chung-cu-riverside-tower">Chung cư Riverside Tower</a></li><li><a href="/khu-can-ho-hue-tth/nam-an-building-pj373">Nam An Building</a></li><li><a href="/ban-dat-phuong-phuoc-long-b">Bán đất Phước Long B</a></li><li><a href="/ban-can-ho-chung-cu-hung-ngan-garden">Chung cư Hưng Ngân Garden</a></li><li><a href="/ban-nha-rieng-duong-le-van-khuong-64">Bán nhà Lê Văn Khương Quận 12</a></li></ul><ul><li><a href="/ban-dat-xa-binh-my">Bán đất Xã Bình Mỹ</a></li><li><a href="/ban-nha-rieng-duong-tan-hoa-dong-65">Bán nhà Tân Hòa Đông Bình Tân</a></li><li><a href="/ban-dat-nen-du-an-khu-dan-cu-bac-vinh-hai">Bán đất nền Bắc Vĩnh Hải</a></li><li><a href="/ban-nha-rieng-duong-duong-van-duong-70">Bán nhà Dương Văn Dương</a></li><li><a href="/ban-can-ho-chung-cu-khu-do-thi-van-canh">Bán căn hộ Vân Canh</a></li><li><a href="/ban-nha-rieng-pho-lach-tray-35">Bán nhà Lạch Tray Lê Chân</a></li><li><a href="/ban-nha-rieng-phuong-long-binh-5">Bán nhà Phường Long Bình Biên Hòa</a></li><li><a href="/ban-dat-nen-du-an-kdt-nam-cau-nguyen-tri-phuong">KĐT Nam cầu Nguyễn Tri Phương</a></li><li><a href="/cho-thue-cua-hang-ki-ot-duong-dinh-cong-8">Cho thuê cửa hàng Định Công</a></li><li><a href="/cho-thue-nha-mat-pho-duong-hoang-van-thu-69">Cho thuê nhà mặt tiền Hoàng Văn Thụ Tân Bình</a></li></ul><ul><li><a href="/ban-nha-mat-pho-duong-nguyen-cuu-van-66">Bán nhà mặt tiền Nguyễn Cửu Vân</a></li><li><a href="/ban-nha-rieng-duong-tan-ap_1-2">Bán nhà Tân Ấp Ba Đình</a></li><li><a href="/ban-can-ho-chung-cu-cao-oc-can-ho-h2-hoang-dieu">Cao Ốc Căn Hộ H2 Hoàng Diệu</a></li><li><a href="/cho-thue-kho-nha-xuong-dat-nha-trang-kh">Cho thuê đất Nha Trang</a></li><li><a href="/ban-nha-rieng-duong-nguyen-van-linh-9">Bán nhà Nguyễn Văn Linh Long Biên</a></li><li><a href="/ban-nha-rieng-pho-8-3_1-4">Bán nhà Phố 8 3</a></li><li><a href="/ban-can-ho-chung-cu-star-tower-toa-thap-ngoi-sao">Chung cư Star Tower</a></li><li><a href="/ban-can-ho-chung-cu-ha-noi-aqua-central">Chung cư Hà Nội Aqua Central</a></li><li><a href="/ban-nha-mat-pho-duong-le-loi-1-67">Bán nhà mặt tiền Lê Lợi Gò Vấp</a></li><li><a href="/ban-nha-mat-pho-duong-dang-van-bi-71">Bán nhà mặt tiền Đặng Văn Bi</a></li></ul>
    </div>



                </div>
            </div>

        <div id="SiteRight" class="banner-right clearfix">
            <div class="container-default">
                <div>
                    <div id="ban_wide_right" class="ban_wide_scroll">
                        <div class="adPosition" positionCode="BANNER_POSITION_WIDE_RIGHT" style="margin-bottom: 0px"></div>
<script type='text/javascript'> var bannerContext={"CateId":88,"PageId":null,"CityCode":null,"DistrictId":0,"CurrentPage":259};</script>
                    </div>

                    <div id="ban_right" class="ban_scroll">
                        <div class="adPosition" positionCode="BANNER_POSITION_RIGHT" style="margin-bottom: 0px"></div>
<script type='text/javascript'> var bannerContext={"CateId":88,"PageId":null,"CityCode":null,"DistrictId":0,"CurrentPage":259};</script>
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
<script type='text/javascript'> var bannerContext={"CateId":88,"PageId":null,"CityCode":null,"DistrictId":0,"CurrentPage":259};</script>

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
    <script type='text/javascript'> var __bannerContext={"PageId":259,"CateId":null,"CityCode":null,"DistrictId":null,"CurrentPage":1};</script>
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
    
    
    
        <script src="https://staticfile.batdongsan.com.vn/js/FengShui/filestatic.ver202011131001.msvbds.FrontEnd.FengShui.Detail.min.js"></script>
    
    <script type="text/javascript">
        var paramsDetail = {
            sliderCompare: "div[data-type='slider-compare']",
            flipCompare: "div[data-type='flip-compare']"
        };
        var fengshuiDetail = new fengshuiDetail.Detail();
        fengshuiDetail.InitializeSlider(paramsDetail);

        var paramsSendMail = {
            lnkSendEmail: '#lnkSendEmail',
            btnSendMail: '#btnSendMail',
            formSubmitSendMail: '#formSubmitSendMail',
            detailUrl: 'https://batdongsan.com.vn/tin-thi-truong/thi-truong-nha-mat-pho-cho-thue-e-am-van-khong-giam-gia-ar105537',
            urlSendMail: '/FengShui/FengShuiSendMail/Send'
        };

        var fengShuiSendMail = new fengShuiSendMail.FengShuiSendMail();
        fengShuiSendMail.Initialize(paramsSendMail);
    </script>

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

@endforeach


