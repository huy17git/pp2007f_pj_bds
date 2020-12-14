@extends('layouts.master')


@section('title', 'Nội, Ngoại, thất, chuyên, trang, về, Nội, Ngoại, thất')

@section('styles')
<link rel="stylesheet" href="./public/assets/css/noi_ngoai_that2.css">
<link rel="stylesheet" href="https://staticfile.batdongsan.com.vn/css/filestatic.ver202011121106.msvbds.FrontEnd.min.css" />
@endsection

@section('content')

<body class="bg-site">

    
        
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
        <input type="text" placeholder="Nhập từ khóa để tìm theo cụm từ" id="txt1" class="txtKeyword">
    </div>
    <div class="advance-select-box" id="home-top-search">
        <span class="select-text hasvalue">
            <span class="select-text-content" style="width: 100px;">Hỏi đáp</span>
        </span>
        <input type="hidden" id="cboTypeSearch" value="4">
    </div>
    <div id="home-top-search-otions" class="advance-select-options advance-options" hddvalue="cboTypeSearch" ddlid="home-top-search" style="">
        <ul class="advance-options" style="min-width: 125px;">
            <li vl="1" class="advance-options" style="min-width: 93px;">Nhà đất bán</li>
            <li vl="2" class="advance-options" style="min-width: 93px;">Nhà đất cho thuê</li>
            <li vl="3" class="advance-options" style="min-width: 93px;">Tin tức</li>
            <li vl="5" class="advance-options" style="min-width: 93px;">Dự án</li>
            <li vl="6" class="advance-options" style="min-width: 93px;">Doanh nghiệp</li>
            <li vl="7" class="advance-options" style="min-width: 93px;">Môi giới</li>
        </ul>
    </div>
    <img src="https://file4.batdongsan.com.vn/images/header-bottom-button.jpg" onclick="SearchKeyword();" class="fg-button fg-button-bg-default fg-button-toggleable ui-corner-all" alt="Tìm kiếm" name="btnSearch" id="btnSearch">
</div>
<div id="gglbody"></div>
<div class="clear"></div>
</div>
<div id="MainContent"></div>
<div class="parent-main-left">
    <!-- begin breakcrum-->
    <!-- end breakcrum-->
    <div class="div_2col1">
        <div class="clear">
        </div>
        <div id="LeftMainContent" class="t_left1">
            <div>
                


    <div class="box-header">
        <div class="name_tit" align="left" style="padding-left:10px;">
            <h1 style="color: White; ">N&#x1ED9;i - Ngo&#x1EA1;i th&#x1EA5;t  - Tin n&#x1ED5;i b&#x1EAD;t</h1>
        </div>
    </div>
<div class="tc-tin-3cot-tit1"><div class="parent-cate-news">            <div class="tc-tin-3cot-tit1-left">

                <a title="N&#x1ED9;i th&#x1EA5;t ki&#x1EC3;u H&#xE0;n: C&#xE1;c &#x111;&#x1EB7;c tr&#x1B0;ng c&#x1A1; b&#x1EA3;n v&#xE0; c&#xE1;ch b&#xE0;i tr&#xED;" href="/tu-van-noi-ngoai-that/thiet-ke-noi-that-kieu-han-quoc-ar105439">
                    <img class="bor_img" src="https://file4.batdongsan.com.vn/crop/260x220/2020/11/04/JGcIp0rf/20201104144436-2c4b.jpg">
                </a>
                <h3>
                    <a class="font-link-box-item" href="/tu-van-noi-ngoai-that/thiet-ke-noi-that-kieu-han-quoc-ar105439" title="N&#x1ED9;i th&#x1EA5;t ki&#x1EC3;u H&#xE0;n: C&#xE1;c &#x111;&#x1EB7;c tr&#x1B0;ng c&#x1A1; b&#x1EA3;n v&#xE0; c&#xE1;ch b&#xE0;i tr&#xED;">Nội thất kiểu Hàn: Các đặc trưng cơ bản và cách bài trí</a>
                </h3>
                <p>Hi&#x1EC7;n nay, thi&#x1EBF;t k&#x1EBF; n&#x1ED9;i th&#x1EA5;t ki&#x1EC3;u H&#xE0;n &#x111;ang tr&#x1EDF; th&#xE0;nh xu h&#x1B0;&#x1EDB;ng v&#xE0; &#x111;&#x1B0;&#x1EE3;c nhi&#x1EC1;u gia &#x111;&#xEC;nh Vi&#x1EC7;t &#x1B0;a chu&#x1ED9;ng. Trong b&#xE0;i vi&#x1EBF;t d&#x1B0;&#x1EDB;i &#x111;&#xE2;y, Batdongsan.com.vn s&#x1EBD; ph&#xE2;n t&#xED;ch m&#x1ED9;t s&#x1ED1; &#x111;&#x1EB7;c tr&#x1B0;ng c&#x1A1; b&#x1EA3;n m&#xE0; thi&#x1EBF;t k&#x1EBF; n&#x1ED9;i th&#x1EA5;t phong c&#xE1;ch ki&#x1EC3;u H&#xE0;n Qu&#x1ED1;c h&#x1B0;&#x1EDB;ng &#x111;&#x1EBF;n c&#x169;ng nh&#x1B0; m&#x1ED9;t s&#x1ED1; g&#x1EE3;i &#xFD; b&#xE0;i tr&#xED; t&#x1ED1;i &#x1B0;u cho c&#xE1;c kh&#xF4;ng gian.</p>
            </div>
            <div class="tc-tin-3cot-tit1-right">
                <a href="/mach-ban/tham-khao-ngay-9-thiet-ke-noi-that-giup-tiet-kiem-thoi-gian-don-dep-ar105423" title="Tham kh&#x1EA3;o ngay 9 thi&#x1EBF;t k&#x1EBF; n&#x1ED9;i th&#x1EA5;t gi&#xFA;p ti&#x1EBF;t ki&#x1EC7;m th&#x1EDD;i gian d&#x1ECD;n d&#x1EB9;p">
                    <img class="bor_img" src="https://file4.batdongsan.com.vn/crop/70x53/2020/11/03/akCJKkFO/20201103092947-7412.jpg" alt="Tham kh&#x1EA3;o ngay 9 thi&#x1EBF;t k&#x1EBF; n&#x1ED9;i th&#x1EA5;t gi&#xFA;p ti&#x1EBF;t ki&#x1EC7;m th&#x1EDD;i gian d&#x1ECD;n d&#x1EB9;p">
                </a>
                <h3 class="normal">
                    <a class="tc-tin-3cot-tit1-right-link font-link-box-item" href="/mach-ban/tham-khao-ngay-9-thiet-ke-noi-that-giup-tiet-kiem-thoi-gian-don-dep-ar105423" title="Tham kh&#x1EA3;o ngay 9 thi&#x1EBF;t k&#x1EBF; n&#x1ED9;i th&#x1EA5;t gi&#xFA;p ti&#x1EBF;t ki&#x1EC7;m th&#x1EDD;i gian d&#x1ECD;n d&#x1EB9;p">Tham khảo ngay 9 thiết kế nội thất giúp tiết kiệm thời gian dọn dẹp</a>
                </h3>
                <div class="clear"></div>
            </div>
            <div class="tc-tin-3cot-tit1-right">
                <a href="/mach-ban/cai-tao-nha-cap-4-cu-ar105411" title="4 &#xFD; t&#x1B0;&#x1EDF;ng c&#x1EA3;i t&#x1EA1;o nh&#xE0; c&#x1EA5;p 4 ti&#x1EBF;t ki&#x1EC7;m v&#xE0; hi&#x1EC7;u qu&#x1EA3;">
                    <img class="bor_img" src="https://file4.batdongsan.com.vn/crop/70x53/2020/10/30/JGcIp0rf/20201030172047-0dd9.jpg" alt="4 &#xFD; t&#x1B0;&#x1EDF;ng c&#x1EA3;i t&#x1EA1;o nh&#xE0; c&#x1EA5;p 4 ti&#x1EBF;t ki&#x1EC7;m v&#xE0; hi&#x1EC7;u qu&#x1EA3;">
                </a>
                <h3 class="normal">
                    <a class="tc-tin-3cot-tit1-right-link font-link-box-item" href="/mach-ban/cai-tao-nha-cap-4-cu-ar105411" title="4 &#xFD; t&#x1B0;&#x1EDF;ng c&#x1EA3;i t&#x1EA1;o nh&#xE0; c&#x1EA5;p 4 ti&#x1EBF;t ki&#x1EC7;m v&#xE0; hi&#x1EC7;u qu&#x1EA3;">4 ý tưởng cải tạo nhà cấp 4 tiết kiệm và hiệu quả</a>
                </h3>
                <div class="clear"></div>
            </div>
            <div class="tc-tin-3cot-tit1-right">
                <a href="/mach-ban/cac-loai-hoa-de-trong-ar105398" title="Top c&#xE1;c lo&#x1EA1;i hoa d&#x1EC5; tr&#x1ED3;ng v&#xE0; c&#xE1;ch ch&#x103;m s&#xF3;c c&#x1A1; b&#x1EA3;n">
                    <img class="bor_img" src="https://file4.batdongsan.com.vn/crop/70x53/2020/10/29/JGcIp0rf/20201029211751-95fe.jpg" alt="Top c&#xE1;c lo&#x1EA1;i hoa d&#x1EC5; tr&#x1ED3;ng v&#xE0; c&#xE1;ch ch&#x103;m s&#xF3;c c&#x1A1; b&#x1EA3;n">
                </a>
                <h3 class="normal">
                    <a class="tc-tin-3cot-tit1-right-link font-link-box-item" href="/mach-ban/cac-loai-hoa-de-trong-ar105398" title="Top c&#xE1;c lo&#x1EA1;i hoa d&#x1EC5; tr&#x1ED3;ng v&#xE0; c&#xE1;ch ch&#x103;m s&#xF3;c c&#x1A1; b&#x1EA3;n">Top các loại hoa dễ trồng và cách chăm sóc cơ bản</a>
                </h3>
                <div class="clear"></div>
            </div>
<div class="tc-tin-3cot-tit1-right-link2">            <ul>
                <li>
                    <h3 class="normal">
                        <a href="/tu-van-noi-ngoai-that/gia-phap-khac-phuc-han-che-cua-phong-khong-co-cua-so-ar105369" title="Nh&#x1EEF;ng gi&#x1EA3;i ph&#xE1;p kh&#x1EAF;c ph&#x1EE5;c h&#x1EA1;n ch&#x1EBF; c&#x1EE7;a ph&#xF2;ng kh&#xF4;ng c&#xF3; c&#x1EED;a s&#x1ED5;">Những giải pháp khắc phục hạn chế của phòng không có cửa sổ</a>
                    </h3>
                </li>
            </ul>
            <ul>
                <li>
                    <h3 class="normal">
                        <a href="/mua-sam/nhieu-lua-chon-trang-tri-noel-doc-la-cho-nhung-ai-da-qua-chan-cay-thong-ar105358" title="Nhi&#x1EC1;u l&#x1EF1;a ch&#x1ECD;n trang tr&#xED; Noel &#x111;&#x1ED9;c, l&#x1EA1; cho nh&#x1EEF;ng ai &#x111;&#xE3; qu&#xE1; ch&#xE1;n c&#xE2;y th&#xF4;ng">Nhiều lựa chọn trang trí Noel độc, lạ cho những ai đã quá chán cây thông</a>
                    </h3>
                </li>
            </ul>
            <ul>
                <li>
                    <h3 class="normal">
                        <a href="/tu-van-noi-ngoai-that/cay-trong-gieng-troi-dep-ar105257" title="Tr&#x1ED3;ng c&#xE2;y g&#xEC; &#x1EDF; gi&#x1EBF;ng tr&#x1EDD;i &#x111;&#x1EC3; nh&#xE0; xanh m&#xE1;t, gi&#xE0;u sinh kh&#xED;?">Trồng cây gì ở giếng trời để nhà xanh mát, giàu sinh khí?</a>
                    </h3>
                </li>
            </ul>
            <ul>
                <li>
                    <h3 class="normal">
                        <a href="/mach-ban/cay-trong-ban-cong-dep-ar105227" title="C&#xE2;y tr&#x1ED3;ng ban c&#xF4;ng - N&#xEA;n ch&#x1ECD;n lo&#x1EA1;i c&#xE2;y n&#xE0;o v&#xE0; ch&#x103;m s&#xF3;c ra sao?">Cây trồng ban công - Nên chọn loại cây nào và chăm sóc ra sao?</a>
                    </h3>
                </li>
            </ul>
</div></div>    <div class="clear"></div>
    <div class="lblnewscateby"><strong>N&#x1ED9;i - Ngo&#x1EA1;i th&#x1EA5;t</strong>&nbsp;theo chuyên mục:</div>
</div>
            </div>
            <div style="clear:both;margin-bottom:5px;"></div>
            <div class="container-default">
                <div>
                    


            <div class="tc-duan-tin parent-cate-news">
            <h2 class="tit_l borderbold">
                <a class="news-category-root-box-title-link" href="/noi-that" title="N&#x1ED9;i th&#x1EA5;t">
                    <span style="white-space:nowrap;">
                        N&#x1ED9;i th&#x1EA5;t
                    </span>
                </a>
            </h2>

                    <div class="tintuc-row1 tc-tit">
                        <a class="avatar" title="Xu h&#x1B0;&#x1EDB;ng ch&#x1ECD;n g&#x1EA1;ch l&#xE1;t n&#x1EC1;n nh&#xE0; t&#x1EAF;m th&#x1ECB;nh h&#xE0;nh nh&#x1EA5;t hi&#x1EC7;n nay" href="/phong-tam/kinh-nghiem-chon-gach-lat-nen-nha-tam-ar105385">
                            <img src="https://file4.batdongsan.com.vn/crop/120x100/2020/10/29/JGcIp0rf/20201029090706-cc08.jpg" alt="Xu h&#x1B0;&#x1EDB;ng ch&#x1ECD;n g&#x1EA1;ch l&#xE1;t n&#x1EC1;n nh&#xE0; t&#x1EAF;m th&#x1ECB;nh h&#xE0;nh nh&#x1EA5;t hi&#x1EC7;n nay">
                        </a>
                        <h3>
                            <a class="font-link-news-parent" href="/phong-tam/kinh-nghiem-chon-gach-lat-nen-nha-tam-ar105385" title="Xu h&#x1B0;&#x1EDB;ng ch&#x1ECD;n g&#x1EA1;ch l&#xE1;t n&#x1EC1;n nh&#xE0; t&#x1EAF;m th&#x1ECB;nh h&#xE0;nh nh&#x1EA5;t hi&#x1EC7;n nay">
                                <span class="title">
                                    Xu hướng chọn gạch lát nền nhà tắm thịnh hành nhất hiện nay
                                </span>
                            </a>
                        </h3>
                        <br>
                        <p>Ngo&#xE0;i g&#x1EA1;ch &#x1ED1;p t&#x1B0;&#x1EDD;ng hay g&#x1EA1;ch l&#xE1;t s&#xE0;n nh&#xE0; th&#xEC; g&#x1EA1;ch l&#xE1;t n&#x1EC1;n nh&#xE0; t&#x1EAF;m c&#x169;ng l&#xE0; m&#x1ED9;t trong nh&#x1EEF;ng h&#x1EA1;ng m&#x1EE5;c &#x111;&#x1B0;&#x1EE3;c nhi&#x1EC1;u gia ch&#x1EE7; quan t&#xE2;m. B&#xE0;i vi&#x1EBF;t h&#xF4;m nay ch&#xFA;ng t&#xF4;i s&#x1EBD; gi&#x1EDB;i thi&#x1EC7;u nh&#x1EEF;ng xu h&#x1B0;&#x1EDB;ng ph&#x1ED1;i m&#xE0;u g&#x1EA1;ch l&#xE1;t n&#x1EC1;n nh&#xE0; t&#x1EAF;m r&#x1EBB; &#x111;&#x1EB9;p, an to&#xE0;n v&#xE0; th&#x1ECB;nh h&#xE0;nh nh&#x1EA5;t hi&#x1EC7;n nay.</p>
                    </div>
<div class="tc-duan-tin-thumnai">                        <div class="tc-duan-tin-thumnai-row1">
                            <a class="tc-duan-tin-thumnai-img" title="Ho&#xE0;n thi&#x1EC7;n c&#x103;n h&#x1ED9; 72m2 xinh x&#x1EAF;n v&#x1EDB;i chi ph&#xED; ti&#x1EBF;t ki&#x1EC7;m cho c&#xF4; n&#xE0;ng &#x111;&#x1ED9;c th&#xE2;n" href="/toan-canh-ngoi-nha/hoan-thien-can-ho-xinh-xan-voi-chi-phi-tiet-kiem-cho-co-nang-doc-than-ar105377">
                                <img alt="Ho&#xE0;n thi&#x1EC7;n c&#x103;n h&#x1ED9; 72m2 xinh x&#x1EAF;n v&#x1EDB;i chi ph&#xED; ti&#x1EBF;t ki&#x1EC7;m cho c&#xF4; n&#xE0;ng &#x111;&#x1ED9;c th&#xE2;n" src="https://file4.batdongsan.com.vn/crop/132x100/2020/10/28/akCJKkFO/20201028085058-e11a.jpg">
                            </a>
                            <h3>
                                <a class="tc-duan-tin-thumnai-link" href="/toan-canh-ngoi-nha/hoan-thien-can-ho-xinh-xan-voi-chi-phi-tiet-kiem-cho-co-nang-doc-than-ar105377" title="Ho&#xE0;n thi&#x1EC7;n c&#x103;n h&#x1ED9; 72m2 xinh x&#x1EAF;n v&#x1EDB;i chi ph&#xED; ti&#x1EBF;t ki&#x1EC7;m cho c&#xF4; n&#xE0;ng &#x111;&#x1ED9;c th&#xE2;n">
                                    Hoàn thiện căn hộ 72m2 xinh xắn với chi phí tiết kiệm cho cô nàng độc thân
                                </a>
                            </h3>
                        </div>
<div class="tc-tin-3cot-tit1-right-link2"><ul>                            <li>
                                <h3 class="normal">
                                    <a class="font-link-box-item" href="/phong-tam/nhung-mau-thiet-ke-phong-tam-dep-me-man-cho-ngoi-nha-hien-dai-ar105348" title="Nh&#x1EEF;ng m&#x1EAB;u thi&#x1EBF;t k&#x1EBF; ph&#xF2;ng t&#x1EAF;m &#x111;&#x1EB9;p m&#xEA; m&#x1EA9;n cho ng&#xF4;i nh&#xE0; hi&#x1EC7;n &#x111;&#x1EA1;i">
                                        Những mẫu thiết kế phòng tắm đẹp mê mẩn cho ngôi nhà hiện đại
                                    </a>
                                </h3>
                                <a class="font-link-box-item" href="/phong-tam/nhung-mau-thiet-ke-phong-tam-dep-me-man-cho-ngoi-nha-hien-dai-ar105348" title="Nh&#x1EEF;ng m&#x1EAB;u thi&#x1EBF;t k&#x1EBF; ph&#xF2;ng t&#x1EAF;m &#x111;&#x1EB9;p m&#xEA; m&#x1EA9;n cho ng&#xF4;i nh&#xE0; hi&#x1EC7;n &#x111;&#x1EA1;i"></a>
                            </li>
                            <li>
                                <h3 class="normal">
                                    <a class="font-link-box-item" href="/phong-khach/kinh-nghiem-chon-gach-op-tuong-phong-khach-ar105332" title="G&#x1EA1;ch &#x1ED1;p t&#x1B0;&#x1EDD;ng ph&#xF2;ng kh&#xE1;ch - Xu h&#x1B0;&#x1EDB;ng trang tr&#xED; n&#x1ED9;i th&#x1EA5;t c&#x169; nh&#x1B0;ng kh&#xF4;ng l&#x1ED7;i th&#x1EDD;i!">
                                        Gạch ốp tường phòng khách - Xu hướng trang trí nội thất cũ nhưng không lỗi thời!
                                    </a>
                                </h3>
                                <a class="font-link-box-item" href="/phong-khach/kinh-nghiem-chon-gach-op-tuong-phong-khach-ar105332" title="G&#x1EA1;ch &#x1ED1;p t&#x1B0;&#x1EDD;ng ph&#xF2;ng kh&#xE1;ch - Xu h&#x1B0;&#x1EDB;ng trang tr&#xED; n&#x1ED9;i th&#x1EA5;t c&#x169; nh&#x1B0;ng kh&#xF4;ng l&#x1ED7;i th&#x1EDD;i!"></a>
                            </li>
                            <li>
                                <h3 class="normal">
                                    <a class="font-link-box-item" href="/toan-canh-ngoi-nha/tu-a-den-z-cac-buoc-son-nha-co-ban-dung-ky-thuat-ar34295" title="H&#x1B0;&#x1EDB;ng d&#x1EAB;n chi ti&#x1EBF;t c&#xE1;c b&#x1B0;&#x1EDB;c s&#x1A1;n nh&#xE0; c&#x1A1; b&#x1EA3;n, &#x111;&#xFA;ng k&#x1EF9; thu&#x1EAD;t">
                                        Hướng dẫn chi tiết các bước sơn nhà cơ bản, đúng kỹ thuật
                                    </a>
                                </h3>
                                <a class="font-link-box-item" href="/toan-canh-ngoi-nha/tu-a-den-z-cac-buoc-son-nha-co-ban-dung-ky-thuat-ar34295" title="H&#x1B0;&#x1EDB;ng d&#x1EAB;n chi ti&#x1EBF;t c&#xE1;c b&#x1B0;&#x1EDB;c s&#x1A1;n nh&#xE0; c&#x1A1; b&#x1EA3;n, &#x111;&#xFA;ng k&#x1EF9; thu&#x1EAD;t"></a>
                            </li>
                            <li>
                                <h3 class="normal">
                                    <a class="font-link-box-item" href="/toan-canh-ngoi-nha/them-suc-song-cho-ngoi-nha-bang-nhung-chau-cay-mong-nuoc-cuc-xinh-yeu-ar105118" title="Th&#xEA;m s&#x1EE9;c s&#x1ED1;ng cho ng&#xF4;i nh&#xE0; b&#x1EB1;ng nh&#x1EEF;ng ch&#x1EAD;u c&#xE2;y m&#x1ECD;ng n&#x1B0;&#x1EDB;c c&#x1EF1;c xinh y&#xEA;u">
                                        Thêm sức sống cho ngôi nhà bằng những chậu cây mọng nước cực xinh yêu
                                    </a>
                                </h3>
                                <a class="font-link-box-item" href="/toan-canh-ngoi-nha/them-suc-song-cho-ngoi-nha-bang-nhung-chau-cay-mong-nuoc-cuc-xinh-yeu-ar105118" title="Th&#xEA;m s&#x1EE9;c s&#x1ED1;ng cho ng&#xF4;i nh&#xE0; b&#x1EB1;ng nh&#x1EEF;ng ch&#x1EAD;u c&#xE2;y m&#x1ECD;ng n&#x1B0;&#x1EDB;c c&#x1EF1;c xinh y&#xEA;u"></a>
                            </li>
</ul></div></div>            <div class="clear">
            </div>
        </div>
            <div class="tc-duan-tin parent-cate-news">
            <h2 class="tit_l borderbold">
                <a class="news-category-root-box-title-link" href="/tu-van-noi-ngoai-that" title="T&#x1B0; v&#x1EA5;n n&#x1ED9;i - ngo&#x1EA1;i th&#x1EA5;t">
                    <span style="white-space:nowrap;">
                        T&#x1B0; v&#x1EA5;n n&#x1ED9;i - ngo&#x1EA1;i th&#x1EA5;t
                    </span>
                </a>
            </h2>

                    <div class="tintuc-row1 tc-tit">
                        <a class="avatar" title="Nh&#x1EEF;ng c&#xE2;u h&#x1ECF;i c&#x1EA7;n l&#xE0;m r&#xF5; tr&#x1B0;&#x1EDB;c khi c&#x1EA3;i t&#x1EA1;o nh&#xE0;" href="/tu-van-noi-ngoai-that/nhung-cau-hoi-can-lam-ro-truoc-khi-cai-tao-nha-ar105218">
                            <img src="https://file4.batdongsan.com.vn/crop/120x100/2020/10/07/akCJKkFO/20201007091204-5096.jpg" alt="Nh&#x1EEF;ng c&#xE2;u h&#x1ECF;i c&#x1EA7;n l&#xE0;m r&#xF5; tr&#x1B0;&#x1EDB;c khi c&#x1EA3;i t&#x1EA1;o nh&#xE0;">
                        </a>
                        <h3>
                            <a class="font-link-news-parent" href="/tu-van-noi-ngoai-that/nhung-cau-hoi-can-lam-ro-truoc-khi-cai-tao-nha-ar105218" title="Nh&#x1EEF;ng c&#xE2;u h&#x1ECF;i c&#x1EA7;n l&#xE0;m r&#xF5; tr&#x1B0;&#x1EDB;c khi c&#x1EA3;i t&#x1EA1;o nh&#xE0;">
                                <span class="title">
                                    Những câu hỏi cần làm rõ trước khi cải tạo nhà
                                </span>
                            </a>
                        </h3>
                        <br>
                        <p>B&#x1EA1;n mu&#x1ED1;n c&#x1EA3;i t&#x1EA1;o nh&#xE0; cho ch&#xED;nh m&#xEC;nh v&#xE0; gia &#x111;&#xEC;nh &#x111;&#x1EC3; t&#x1EAD;n h&#x1B0;&#x1EDF;ng l&#x1EE3;i &#xED;ch, ti&#x1EC7;n nghi l&#xE2;u d&#xE0;i t&#x1EEB; ng&#xF4;i nh&#xE0; hay &#x111;ang c&#xF3; k&#x1EBF; ho&#x1EA1;ch b&#xE1;n nh&#xE0; trong t&#x1B0;&#x1A1;ng lai g&#x1EA7;n n&#xEA;n c&#x1EA3;i t&#x1EA1;o &#x111;&#x1EC3; b&#xE1;n nhanh, &#x111;&#x1B0;&#x1EE3;c gi&#xE1;? &#x110;&#xE2;y l&#xE0; m&#x1ED9;t trong nh&#x1EEF;ng c&#xE2;u h&#x1ECF;i c&#x1EA7;n &#x111;&#x1B0;&#x1EE3;c l&#xE0;m r&#xF5; tr&#x1B0;&#x1EDB;c khi quy&#x1EBF;t &#x111;&#x1ECB;nh s&#x1EED;a ch&#x1EEF;a, c&#x1EA3;i t&#x1EA1;o nh&#xE0; &#x111;&#x1EC3; c&#xF4;ng cu&#x1ED9;c c&#x1EA3;i t&#x1EA1;o &#x111;&#x1EA1;t hi&#x1EC7;u qu&#x1EA3; t&#x1ED1;i &#x1B0;u, kh&#xF4;ng l&#xE3;ng ph&#xED; ti&#x1EC1;n c&#x1EE7;a, c&#xF4;ng s&#x1EE9;c, th&#x1EDD;i gian.</p>
                    </div>
<div class="tc-duan-tin-thumnai">                        <div class="tc-duan-tin-thumnai-row1">
                            <a class="tc-duan-tin-thumnai-img" title="Chuy&#xEA;n gia thi&#x1EBF;t k&#x1EBF; ch&#x1EC9; ra 6 sai l&#x1EA7;m ph&#x1ED5; bi&#x1EBF;n trong b&#xE0;i tr&#xED; ph&#xF2;ng ng&#x1EE7;" href="/tu-van-noi-ngoai-that/chuyen-gia-thiet-ke-chi-ra-6-sai-lam-pho-bien-trong-bai-tri-phong-ngu-ar105112">
                                <img alt="Chuy&#xEA;n gia thi&#x1EBF;t k&#x1EBF; ch&#x1EC9; ra 6 sai l&#x1EA7;m ph&#x1ED5; bi&#x1EBF;n trong b&#xE0;i tr&#xED; ph&#xF2;ng ng&#x1EE7;" src="https://file4.batdongsan.com.vn/crop/132x100/2020/09/25/akCJKkFO/20200925163254-5c59.jpg">
                            </a>
                            <h3>
                                <a class="tc-duan-tin-thumnai-link" href="/tu-van-noi-ngoai-that/chuyen-gia-thiet-ke-chi-ra-6-sai-lam-pho-bien-trong-bai-tri-phong-ngu-ar105112" title="Chuy&#xEA;n gia thi&#x1EBF;t k&#x1EBF; ch&#x1EC9; ra 6 sai l&#x1EA7;m ph&#x1ED5; bi&#x1EBF;n trong b&#xE0;i tr&#xED; ph&#xF2;ng ng&#x1EE7;">
                                    Chuyên gia thiết kế chỉ ra 6 sai lầm phổ biến trong bài trí phòng ngủ
                                </a>
                            </h3>
                        </div>
<div class="tc-tin-3cot-tit1-right-link2"><ul>                            <li>
                                <h3 class="normal">
                                    <a class="font-link-box-item" href="/tu-van-noi-ngoai-that/5-xu-huong-thiet-ke-noi-that-da-loi-thoi-va-phuong-an-thay-the-cho-nam-2020-ar105032" title="5 xu h&#x1B0;&#x1EDB;ng thi&#x1EBF;t k&#x1EBF; n&#x1ED9;i th&#x1EA5;t &#x111;&#xE3; l&#x1ED7;i th&#x1EDD;i v&#xE0; ph&#x1B0;&#x1A1;ng &#xE1;n thay th&#x1EBF; cho n&#x103;m 2020">
                                        5 xu hướng thiết kế nội thất đã lỗi thời và phương án thay thế cho năm 2020
                                    </a>
                                </h3>
                                <a class="font-link-box-item" href="/tu-van-noi-ngoai-that/5-xu-huong-thiet-ke-noi-that-da-loi-thoi-va-phuong-an-thay-the-cho-nam-2020-ar105032" title="5 xu h&#x1B0;&#x1EDB;ng thi&#x1EBF;t k&#x1EBF; n&#x1ED9;i th&#x1EA5;t &#x111;&#xE3; l&#x1ED7;i th&#x1EDD;i v&#xE0; ph&#x1B0;&#x1A1;ng &#xE1;n thay th&#x1EBF; cho n&#x103;m 2020"></a>
                            </li>
                            <li>
                                <h3 class="normal">
                                    <a class="font-link-box-item" href="/tu-van-noi-ngoai-that/cach-mau-sac-thay-doi-cam-nhan-ve-khong-gian-noi-that-ar103475" title="H&#x1ECD;c c&#xE1;ch d&#xF9;ng m&#xE0;u s&#x1EAF;c &#x111;&#x1EC3; thay &#x111;&#x1ED5;i c&#x1EA3;m nh&#x1EAD;n v&#x1EC1; kh&#xF4;ng gian n&#x1ED9;i th&#x1EA5;t">
                                        Học cách dùng màu sắc để thay đổi cảm nhận về không gian nội thất
                                    </a>
                                </h3>
                                <a class="font-link-box-item" href="/tu-van-noi-ngoai-that/cach-mau-sac-thay-doi-cam-nhan-ve-khong-gian-noi-that-ar103475" title="H&#x1ECD;c c&#xE1;ch d&#xF9;ng m&#xE0;u s&#x1EAF;c &#x111;&#x1EC3; thay &#x111;&#x1ED5;i c&#x1EA3;m nh&#x1EAD;n v&#x1EC1; kh&#xF4;ng gian n&#x1ED9;i th&#x1EA5;t"></a>
                            </li>
                            <li>
                                <h3 class="normal">
                                    <a class="font-link-box-item" href="/tu-van-noi-ngoai-that/13-sai-lam-cai-tao-khien-gia-chu-vua-ton-tien-ma-nha-chang-dep-hon-ar105019" title="13 sai l&#x1EA7;m c&#x1EA3;i t&#x1EA1;o khi&#x1EBF;n gia ch&#x1EE7; v&#x1EEB;a t&#x1ED1;n ti&#x1EC1;n m&#xE0; nh&#xE0; ch&#x1EB3;ng &#x111;&#x1EB9;p h&#x1A1;n">
                                        13 sai lầm cải tạo khiến gia chủ vừa tốn tiền mà nhà chẳng đẹp hơn
                                    </a>
                                </h3>
                                <a class="font-link-box-item" href="/tu-van-noi-ngoai-that/13-sai-lam-cai-tao-khien-gia-chu-vua-ton-tien-ma-nha-chang-dep-hon-ar105019" title="13 sai l&#x1EA7;m c&#x1EA3;i t&#x1EA1;o khi&#x1EBF;n gia ch&#x1EE7; v&#x1EEB;a t&#x1ED1;n ti&#x1EC1;n m&#xE0; nh&#xE0; ch&#x1EB3;ng &#x111;&#x1EB9;p h&#x1A1;n"></a>
                            </li>
                            <li>
                                <h3 class="normal">
                                    <a class="font-link-box-item" href="/tu-van-noi-ngoai-that/diem-mat-7-van-de-thuong-gap-trong-bai-tri-can-ho-nho-va-cach-khac-phuc-ar104742" title="&#x110;i&#x1EC3;m m&#x1EB7;t 7 v&#x1EA5;n &#x111;&#x1EC1; th&#x1B0;&#x1EDD;ng g&#x1EB7;p trong b&#xE0;i tr&#xED; c&#x103;n h&#x1ED9; nh&#x1ECF; v&#xE0; c&#xE1;ch kh&#x1EAF;c ph&#x1EE5;c">
                                        Điểm mặt 7 vấn đề thường gặp trong bài trí căn hộ nhỏ và cách khắc phục
                                    </a>
                                </h3>
                                <a class="font-link-box-item" href="/tu-van-noi-ngoai-that/diem-mat-7-van-de-thuong-gap-trong-bai-tri-can-ho-nho-va-cach-khac-phuc-ar104742" title="&#x110;i&#x1EC3;m m&#x1EB7;t 7 v&#x1EA5;n &#x111;&#x1EC1; th&#x1B0;&#x1EDD;ng g&#x1EB7;p trong b&#xE0;i tr&#xED; c&#x103;n h&#x1ED9; nh&#x1ECF; v&#xE0; c&#xE1;ch kh&#x1EAF;c ph&#x1EE5;c"></a>
                            </li>
</ul></div></div>            <div class="clear">
            </div>
        </div>
            <div class="tc-duan-tin parent-cate-news">
            <h2 class="tit_l borderbold">
                <a class="news-category-root-box-title-link" href="/ngoai-that" title="Ngo&#x1EA1;i th&#x1EA5;t">
                    <span style="white-space:nowrap;">
                        Ngo&#x1EA1;i th&#x1EA5;t
                    </span>
                </a>
            </h2>

                    <div class="tintuc-row1 tc-tit">
                        <a class="avatar" title="T&#x1ED5;ng h&#x1EE3;p c&#xE1;c &#xFD; t&#x1B0;&#x1EDF;ng trang tr&#xED; c&#x1EED;a l&#x1EDB;p m&#x1EA7;m non s&#xE1;ng t&#x1EA1;o" href="/ngoai-that/trang-tri-cua-lop-mam-non-sang-tao-ar105051">
                            <img src="https://file4.batdongsan.com.vn/crop/120x100/2020/09/18/JGcIp0rf/20200918142308-f16b.jpg" alt="T&#x1ED5;ng h&#x1EE3;p c&#xE1;c &#xFD; t&#x1B0;&#x1EDF;ng trang tr&#xED; c&#x1EED;a l&#x1EDB;p m&#x1EA7;m non s&#xE1;ng t&#x1EA1;o">
                        </a>
                        <h3>
                            <a class="font-link-news-parent" href="/ngoai-that/trang-tri-cua-lop-mam-non-sang-tao-ar105051" title="T&#x1ED5;ng h&#x1EE3;p c&#xE1;c &#xFD; t&#x1B0;&#x1EDF;ng trang tr&#xED; c&#x1EED;a l&#x1EDB;p m&#x1EA7;m non s&#xE1;ng t&#x1EA1;o">
                                <span class="title">
                                    Tổng hợp các ý tưởng trang trí cửa lớp mầm non sáng tạo
                                </span>
                            </a>
                        </h3>
                        <br>
                        <p>L&#xE0;m th&#x1EBF; n&#xE0;o &#x111;&#x1EC3; m&#x1ED7;i ng&#xE0;y &#x111;&#x1EBF;n tr&#x1B0;&#x1EDD;ng l&#xE0; m&#x1ED9;t ng&#xE0;y vui v&#x1EDB;i c&#xE1;c thi&#xEA;n th&#x1EA7;n b&#xE9; nh&#x1ECF;? B&#xED; quy&#x1EBF;t l&#xE0; b&#x1EA1;n h&#xE3;y &#xE1;p d&#x1EE5;ng ngay c&#xE1;c m&#x1EAB;u trang tr&#xED; c&#x1EED;a l&#x1EDB;p m&#x1EA7;m non s&#xE1;ng t&#x1EA1;o sau &#x111;&#xE2;y. Th&#xFA; v&#x1ECB; h&#x1A1;n, nh&#x1EEF;ng c&#xE1;ch trang tr&#xED; c&#x1EED;a s&#x1ED5; l&#x1EDB;p m&#x1EA7;m non n&#xE0;y l&#x1EA1;i r&#x1EA5;t &#x111;&#x1A1;n gi&#x1EA3;n, c&#xE1;c c&#xF4; ho&#xE0;n to&#xE0;n c&#xF3; th&#x1EC3; h&#x1B0;&#x1EDB;ng d&#x1EAB;n b&#xE9; c&#xF9;ng th&#x1EF1;c hi&#x1EC7;n v&#x1EDB;i m&#xEC;nh &#x111;&#x1EC3; k&#xED;ch th&#xED;ch s&#x1EF1; s&#xE1;ng t&#x1EA1;o nh&#xE9;!</p>
                    </div>
<div class="tc-duan-tin-thumnai">                        <div class="tc-duan-tin-thumnai-row1">
                            <a class="tc-duan-tin-thumnai-img" title="L&#xE0;m v&#x1B0;&#x1EDD;n nh&#xE0;n h&#x1A1;n v&#x1EDB;i 5 m&#x1EB9;o hay t&#x1EEB; baking soda" href="/ngoai-that/lam-vuon-nhan-hon-voi-5-meo-hay-tu-baking-soda-ar104919">
                                <img alt="L&#xE0;m v&#x1B0;&#x1EDD;n nh&#xE0;n h&#x1A1;n v&#x1EDB;i 5 m&#x1EB9;o hay t&#x1EEB; baking soda" src="https://file4.batdongsan.com.vn/crop/132x100/2020/09/01/akCJKkFO/20200901140642-b56f.jpg">
                            </a>
                            <h3>
                                <a class="tc-duan-tin-thumnai-link" href="/ngoai-that/lam-vuon-nhan-hon-voi-5-meo-hay-tu-baking-soda-ar104919" title="L&#xE0;m v&#x1B0;&#x1EDD;n nh&#xE0;n h&#x1A1;n v&#x1EDB;i 5 m&#x1EB9;o hay t&#x1EEB; baking soda">
                                    Làm vườn nhàn hơn với 5 mẹo hay từ baking soda
                                </a>
                            </h3>
                        </div>
<div class="tc-tin-3cot-tit1-right-link2"><ul>                            <li>
                                <h3 class="normal">
                                    <a class="font-link-box-item" href="/ngoai-that/7-loai-cay-giup-xua-duoi-con-trung-co-hai-ra-khoi-vuon-nha-ban-ar104522" title="7 lo&#x1EA1;i c&#xE2;y gi&#xFA;p xua &#x111;u&#x1ED5;i c&#xF4;n tr&#xF9;ng c&#xF3; h&#x1EA1;i ra kh&#x1ECF;i v&#x1B0;&#x1EDD;n nh&#xE0; b&#x1EA1;n">
                                        7 loại cây giúp xua đuổi côn trùng có hại ra khỏi vườn nhà bạn
                                    </a>
                                </h3>
                                <a class="font-link-box-item" href="/ngoai-that/7-loai-cay-giup-xua-duoi-con-trung-co-hai-ra-khoi-vuon-nha-ban-ar104522" title="7 lo&#x1EA1;i c&#xE2;y gi&#xFA;p xua &#x111;u&#x1ED5;i c&#xF4;n tr&#xF9;ng c&#xF3; h&#x1EA1;i ra kh&#x1ECF;i v&#x1B0;&#x1EDD;n nh&#xE0; b&#x1EA1;n"></a>
                            </li>
                            <li>
                                <h3 class="normal">
                                    <a class="font-link-box-item" href="/ngoai-that/o-nha-tranh-dich-vo-chong-tre-tu-thiet-ke-goc-chill-cuc-yeu-tren-san-thuong-ar104305" title="&#x1EDE; nh&#xE0; tr&#xE1;nh d&#x1ECB;ch, v&#x1EE3; ch&#x1ED3;ng tr&#x1EBB; t&#x1EF1; thi&#x1EBF;t k&#x1EBF; &#x201C;g&#xF3;c chill&#x201D; c&#x1EF1;c y&#xEA;u tr&#xEA;n s&#xE2;n th&#x1B0;&#x1EE3;ng">
                                        Ở nhà tránh dịch, vợ chồng trẻ tự thiết kế “góc chill” cực yêu trên sân thượng
                                    </a>
                                </h3>
                                <a class="font-link-box-item" href="/ngoai-that/o-nha-tranh-dich-vo-chong-tre-tu-thiet-ke-goc-chill-cuc-yeu-tren-san-thuong-ar104305" title="&#x1EDE; nh&#xE0; tr&#xE1;nh d&#x1ECB;ch, v&#x1EE3; ch&#x1ED3;ng tr&#x1EBB; t&#x1EF1; thi&#x1EBF;t k&#x1EBF; &#x201C;g&#xF3;c chill&#x201D; c&#x1EF1;c y&#xEA;u tr&#xEA;n s&#xE2;n th&#x1B0;&#x1EE3;ng"></a>
                            </li>
                            <li>
                                <h3 class="normal">
                                    <a class="font-link-box-item" href="/ngoai-that/mai-me-ngam-khu-vuon-sen-da-dep-lung-linh-cua-me-8x-bo-pho-ve-que-ar104059" title="M&#x1EA3;i m&#xEA; ng&#x1EAF;m khu v&#x1B0;&#x1EDD;n sen &#x111;&#xE1; &#x111;&#x1EB9;p lung linh c&#x1EE7;a m&#x1EB9; 8X b&#x1ECF; ph&#x1ED1; v&#x1EC1; qu&#xEA;">
                                        Mải mê ngắm khu vườn sen đá đẹp lung linh của mẹ 8X bỏ phố về quê
                                    </a>
                                </h3>
                                <a class="font-link-box-item" href="/ngoai-that/mai-me-ngam-khu-vuon-sen-da-dep-lung-linh-cua-me-8x-bo-pho-ve-que-ar104059" title="M&#x1EA3;i m&#xEA; ng&#x1EAF;m khu v&#x1B0;&#x1EDD;n sen &#x111;&#xE1; &#x111;&#x1EB9;p lung linh c&#x1EE7;a m&#x1EB9; 8X b&#x1ECF; ph&#x1ED1; v&#x1EC1; qu&#xEA;"></a>
                            </li>
                            <li>
                                <h3 class="normal">
                                    <a class="font-link-box-item" href="/ngoai-that/tiet-kiem-chi-phi-bao-ve-moi-truong-nho-biet-tan-dung-do-bo-di-de-lam-vuon-ar103854" title="Ti&#x1EBF;t ki&#x1EC7;m chi ph&#xED;, b&#x1EA3;o v&#x1EC7; m&#xF4;i tr&#x1B0;&#x1EDD;ng nh&#x1EDD; bi&#x1EBF;t t&#x1EAD;n d&#x1EE5;ng &#x111;&#x1ED3; b&#x1ECF; &#x111;i &#x111;&#x1EC3; l&#xE0;m v&#x1B0;&#x1EDD;n">
                                        Tiết kiệm chi phí, bảo vệ môi trường nhờ biết tận dụng đồ bỏ đi để làm vườn
                                    </a>
                                </h3>
                                <a class="font-link-box-item" href="/ngoai-that/tiet-kiem-chi-phi-bao-ve-moi-truong-nho-biet-tan-dung-do-bo-di-de-lam-vuon-ar103854" title="Ti&#x1EBF;t ki&#x1EC7;m chi ph&#xED;, b&#x1EA3;o v&#x1EC7; m&#xF4;i tr&#x1B0;&#x1EDD;ng nh&#x1EDD; bi&#x1EBF;t t&#x1EAD;n d&#x1EE5;ng &#x111;&#x1ED3; b&#x1ECF; &#x111;i &#x111;&#x1EC3; l&#xE0;m v&#x1B0;&#x1EDD;n"></a>
                            </li>
</ul></div></div>            <div class="clear">
            </div>
        </div>
            <div class="tc-duan-tin parent-cate-news">
            <h2 class="tit_l borderbold">
                <a class="news-category-root-box-title-link" href="/mach-ban" title="M&#xE1;ch b&#x1EA1;n">
                    <span style="white-space:nowrap;">
                        M&#xE1;ch b&#x1EA1;n
                    </span>
                </a>
            </h2>

                    <div class="tintuc-row1 tc-tit">
                        <a class="avatar" title="10 th&#xF3;i quen nh&#xE0; b&#x1EBF;p v&#x1EEB;a g&#xE2;y h&#x1EA1;i cho &#x111;&#x1ED3; d&#xF9;ng, v&#x1EEB;a r&#x1B0;&#x1EDB;c b&#x1EC7;nh v&#xE0;o ng&#x1B0;&#x1EDD;i" href="/mach-ban/10-thoi-quen-nha-bep-vua-gay-hai-cho-do-dung-vua-ruoc-benh-vao-nguoi-ar105117">
                            <img src="https://file4.batdongsan.com.vn/crop/120x100/2020/09/28/akCJKkFO/20200928093022-6088.jpg" alt="10 th&#xF3;i quen nh&#xE0; b&#x1EBF;p v&#x1EEB;a g&#xE2;y h&#x1EA1;i cho &#x111;&#x1ED3; d&#xF9;ng, v&#x1EEB;a r&#x1B0;&#x1EDB;c b&#x1EC7;nh v&#xE0;o ng&#x1B0;&#x1EDD;i">
                        </a>
                        <h3>
                            <a class="font-link-news-parent" href="/mach-ban/10-thoi-quen-nha-bep-vua-gay-hai-cho-do-dung-vua-ruoc-benh-vao-nguoi-ar105117" title="10 th&#xF3;i quen nh&#xE0; b&#x1EBF;p v&#x1EEB;a g&#xE2;y h&#x1EA1;i cho &#x111;&#x1ED3; d&#xF9;ng, v&#x1EEB;a r&#x1B0;&#x1EDB;c b&#x1EC7;nh v&#xE0;o ng&#x1B0;&#x1EDD;i">
                                <span class="title">
                                    10 thói quen nhà bếp vừa gây hại cho đồ dùng, vừa rước bệnh vào người
                                </span>
                            </a>
                        </h3>
                        <br>
                        <p>Nh&#xE0; b&#x1EBF;p &#x111;&#x1B0;&#x1EE3;c coi l&#xE0; kh&#xF4;ng gian gi&#x1EEF; l&#x1EED;a y&#xEA;u th&#x1B0;&#x1A1;ng, &#x111;&#xF3;ng vai tr&#xF2; quan tr&#x1ECD;ng trong g&#x1EAF;n k&#x1EBF;t gia &#x111;&#xEC;nh. Tuy nhi&#xEA;n, c&#xF3; nh&#x1EEF;ng th&#xF3;i quen x&#x1EA5;u trong c&#xE1;ch s&#x1EED; d&#x1EE5;ng &#x111;&#x1ED3; d&#xF9;ng, s&#x1A1; ch&#x1EBF; v&#xE0; b&#x1EA3;o qu&#x1EA3;n th&#x1EF1;c ph&#x1EA9;m hay v&#x1EC7; sinh kh&#xF4;ng gian b&#x1EBF;p m&#xE0; nhi&#x1EC1;u ng&#x1B0;&#x1EDD;i m&#x1EAF;c ph&#x1EA3;i v&#x1EEB;a khi&#x1EBF;n &#x111;&#x1ED3; d&#xF9;ng nh&#xE0; b&#x1EBF;p nhanh h&#x1B0; h&#x1EA1;i, v&#x1EEB;a &#x1EA3;nh h&#x1B0;&#x1EDF;ng ti&#xEA;u c&#x1EF1;c &#x111;&#x1EBF;n s&#x1EE9;c kh&#x1ECF;e c&#x1EA3; nh&#xE0;.</p>
                    </div>
<div class="tc-duan-tin-thumnai">                        <div class="tc-duan-tin-thumnai-row1">
                            <a class="tc-duan-tin-thumnai-img" title="Nh&#xE0; ch&#x1B0;a th&#x1EC3; s&#x1EA1;ch n&#x1EBF;u b&#x1EA1;n b&#x1ECF; qua 14 chi ti&#x1EBF;t n&#xE0;y khi d&#x1ECD;n d&#x1EB9;p" href="/mach-ban/nha-chua-the-sach-neu-ban-bo-qua-14-chi-tiet-nay-khi-don-dep-ar104906">
                                <img alt="Nh&#xE0; ch&#x1B0;a th&#x1EC3; s&#x1EA1;ch n&#x1EBF;u b&#x1EA1;n b&#x1ECF; qua 14 chi ti&#x1EBF;t n&#xE0;y khi d&#x1ECD;n d&#x1EB9;p" src="https://file4.batdongsan.com.vn/crop/132x100/2020/08/31/akCJKkFO/20200831092523-e3b3.jpg">
                            </a>
                            <h3>
                                <a class="tc-duan-tin-thumnai-link" href="/mach-ban/nha-chua-the-sach-neu-ban-bo-qua-14-chi-tiet-nay-khi-don-dep-ar104906" title="Nh&#xE0; ch&#x1B0;a th&#x1EC3; s&#x1EA1;ch n&#x1EBF;u b&#x1EA1;n b&#x1ECF; qua 14 chi ti&#x1EBF;t n&#xE0;y khi d&#x1ECD;n d&#x1EB9;p">
                                    Nhà chưa thể sạch nếu bạn bỏ qua 14 chi tiết này khi dọn dẹp
                                </a>
                            </h3>
                        </div>
<div class="tc-tin-3cot-tit1-right-link2"><ul>                            <li>
                                <h3 class="normal">
                                    <a class="font-link-box-item" href="/mach-ban/hoc-cach-cam-hoa-don-gian-sang-tao-cho-nha-them-xinh-ar104884" title="H&#x1ECD;c c&#xE1;ch c&#x1EAF;m hoa &#x111;&#x1A1;n gi&#x1EA3;n, s&#xE1;ng t&#x1EA1;o cho nh&#xE0; th&#xEA;m xinh">
                                        Học cách cắm hoa đơn giản, sáng tạo cho nhà thêm xinh
                                    </a>
                                </h3>
                                <a class="font-link-box-item" href="/mach-ban/hoc-cach-cam-hoa-don-gian-sang-tao-cho-nha-them-xinh-ar104884" title="H&#x1ECD;c c&#xE1;ch c&#x1EAF;m hoa &#x111;&#x1A1;n gi&#x1EA3;n, s&#xE1;ng t&#x1EA1;o cho nh&#xE0; th&#xEA;m xinh"></a>
                            </li>
                            <li>
                                <h3 class="normal">
                                    <a class="font-link-box-item" href="/mach-ban/sua-ngay-8-thoi-quen-don-dep-nha-cua-ban-van-lam-moi-ngay-nhung-sai-toet-ar104781" title="S&#x1EED;a ngay 8 th&#xF3;i quen d&#x1ECD;n d&#x1EB9;p nh&#xE0; c&#x1EED;a b&#x1EA1;n v&#x1EAB;n l&#xE0;m m&#x1ED7;i ng&#xE0;y nh&#x1B0;ng &quot;sai to&#xE9;t&quot;">
                                        Sửa ngay 8 thói quen dọn dẹp nhà cửa bạn vẫn làm mỗi ngày nhưng "sai toét"
                                    </a>
                                </h3>
                                <a class="font-link-box-item" href="/mach-ban/sua-ngay-8-thoi-quen-don-dep-nha-cua-ban-van-lam-moi-ngay-nhung-sai-toet-ar104781" title="S&#x1EED;a ngay 8 th&#xF3;i quen d&#x1ECD;n d&#x1EB9;p nh&#xE0; c&#x1EED;a b&#x1EA1;n v&#x1EAB;n l&#xE0;m m&#x1ED7;i ng&#xE0;y nh&#x1B0;ng &quot;sai to&#xE9;t&quot;"></a>
                            </li>
                            <li>
                                <h3 class="normal">
                                    <a class="font-link-box-item" href="/mach-ban/trang-tri-cau-thang-dep-ar104751" title="Nh&#x1EEF;ng &#xFD; t&#x1B0;&#x1EDF;ng trang tr&#xED; c&#x1EA7;u thang &#x111;&#x1EB9;p, b&#x1EAF;t k&#x1ECB;p xu h&#x1B0;&#x1EDB;ng">
                                        Những ý tưởng trang trí cầu thang đẹp, bắt kịp xu hướng
                                    </a>
                                </h3>
                                <a class="font-link-box-item" href="/mach-ban/trang-tri-cau-thang-dep-ar104751" title="Nh&#x1EEF;ng &#xFD; t&#x1B0;&#x1EDF;ng trang tr&#xED; c&#x1EA7;u thang &#x111;&#x1EB9;p, b&#x1EAF;t k&#x1ECB;p xu h&#x1B0;&#x1EDB;ng"></a>
                            </li>
                            <li>
                                <h3 class="normal">
                                    <a class="font-link-box-item" href="/mach-ban/goi-y-nhung-cay-canh-ua-bong-vua-de-trong-vua-thanh-loc-khong-khi-trong-nha-ar104679" title="G&#x1EE3;i &#xFD; nh&#x1EEF;ng c&#xE2;y c&#x1EA3;nh &#x1B0;a b&#xF3;ng v&#x1EEB;a d&#x1EC5; tr&#x1ED3;ng, v&#x1EEB;a thanh l&#x1ECD;c kh&#xF4;ng kh&#xED; trong nh&#xE0;">
                                        Gợi ý những cây cảnh ưa bóng vừa dễ trồng, vừa thanh lọc không khí trong nhà
                                    </a>
                                </h3>
                                <a class="font-link-box-item" href="/mach-ban/goi-y-nhung-cay-canh-ua-bong-vua-de-trong-vua-thanh-loc-khong-khi-trong-nha-ar104679" title="G&#x1EE3;i &#xFD; nh&#x1EEF;ng c&#xE2;y c&#x1EA3;nh &#x1B0;a b&#xF3;ng v&#x1EEB;a d&#x1EC5; tr&#x1ED3;ng, v&#x1EEB;a thanh l&#x1ECD;c kh&#xF4;ng kh&#xED; trong nh&#xE0;"></a>
                            </li>
</ul></div></div>            <div class="clear">
            </div>
        </div>
            <div class="tc-duan-tin parent-cate-news">
            <h2 class="tit_l borderbold">
                <a class="news-category-root-box-title-link" href="/mua-sam" title="Mua s&#x1EAF;m">
                    <span style="white-space:nowrap;">
                        Mua s&#x1EAF;m
                    </span>
                </a>
            </h2>

                    <div class="tintuc-row1 tc-tit">
                        <a class="avatar" title="M&#x1EB9;o hay s&#x1A1;n t&#x1B0;&#x1EDD;ng tr&#xE1;nh hi&#x1EC7;n t&#x1B0;&#x1EE3;ng r&#xEA;u m&#x1ED1;c, bong tr&#xF3;c" href="/mua-sam/meo-hay-son-tuong-tranh-hien-tuong-reu-moc-bong-troc-ar105030">
                            <img src="https://file4.batdongsan.com.vn/crop/120x100/2020/09/16/YSUn3oGJ/20200916194916-e97a.jpg" alt="M&#x1EB9;o hay s&#x1A1;n t&#x1B0;&#x1EDD;ng tr&#xE1;nh hi&#x1EC7;n t&#x1B0;&#x1EE3;ng r&#xEA;u m&#x1ED1;c, bong tr&#xF3;c">
                        </a>
                        <h3>
                            <a class="font-link-news-parent" href="/mua-sam/meo-hay-son-tuong-tranh-hien-tuong-reu-moc-bong-troc-ar105030" title="M&#x1EB9;o hay s&#x1A1;n t&#x1B0;&#x1EDD;ng tr&#xE1;nh hi&#x1EC7;n t&#x1B0;&#x1EE3;ng r&#xEA;u m&#x1ED1;c, bong tr&#xF3;c">
                                <span class="title">
                                    Mẹo hay sơn tường tránh hiện tượng rêu mốc, bong tróc
                                </span>
                            </a>
                        </h3>
                        <br>
                        <p>Th&#x1EDD;i ti&#x1EBF;t n&#xF3;ng &#x1EA9;m, m&#x1B0;a nhi&#x1EC1;u l&#xE0; m&#x1ED9;t trong nh&#x1EEF;ng nguy&#xEA;n nh&#xE2;n g&#xE2;y h&#x1B0; h&#x1ECF;ng m&#xE0;ng s&#x1A1;n. T&#x1EA1;i b&#x1EA5;t k&#x1EF3; v&#x1ECB; tr&#xED; n&#xE0;o b&#x1ECB; th&#x1EA5;m &#x1EA9;m, n&#x1B0;&#x1EDB;c s&#x1EBD; d&#x1EAB;n ki&#x1EC1;m c&#xF3; trong v&#x1EEF;a tr&#xE1;t t&#x1B0;&#x1EDD;ng t&#x1EA5;n c&#xF4;ng m&#xE0;ng s&#x1A1;n.</p>
                    </div>
<div class="tc-duan-tin-thumnai">                        <div class="tc-duan-tin-thumnai-row1">
                            <a class="tc-duan-tin-thumnai-img" title="C&#x1ED5;ng t&#x1EF1; &#x111;&#x1ED9;ng, c&#x1EED;a t&#x1EF1; &#x111;&#x1ED9;ng RobotHome gi&#xFA;p n&#xE2;ng t&#x1EA7;m cu&#x1ED9;c s&#x1ED1;ng" href="/mua-sam/cong-tu-dong-cua-tu-dong-robothome-giup-nang-tam-cuoc-song-ar104663">
                                <img alt="C&#x1ED5;ng t&#x1EF1; &#x111;&#x1ED9;ng, c&#x1EED;a t&#x1EF1; &#x111;&#x1ED9;ng RobotHome gi&#xFA;p n&#xE2;ng t&#x1EA7;m cu&#x1ED9;c s&#x1ED1;ng" src="https://file4.batdongsan.com.vn/crop/132x100/2020/07/29/b9sp0zUm/20200729083003-24ba.jpg">
                            </a>
                            <h3>
                                <a class="tc-duan-tin-thumnai-link" href="/mua-sam/cong-tu-dong-cua-tu-dong-robothome-giup-nang-tam-cuoc-song-ar104663" title="C&#x1ED5;ng t&#x1EF1; &#x111;&#x1ED9;ng, c&#x1EED;a t&#x1EF1; &#x111;&#x1ED9;ng RobotHome gi&#xFA;p n&#xE2;ng t&#x1EA7;m cu&#x1ED9;c s&#x1ED1;ng">
                                    Cổng tự động, cửa tự động RobotHome giúp nâng tầm cuộc sống
                                </a>
                            </h3>
                        </div>
<div class="tc-tin-3cot-tit1-right-link2"><ul>                            <li>
                                <h3 class="normal">
                                    <a class="font-link-box-item" href="/mua-sam/nhung-luu-y-de-chon-kich-co-giuong-chuan-nhat-cho-phong-ngu-nho-ar104240" title="Nh&#x1EEF;ng l&#x1B0;u &#xFD; &#x111;&#x1EC3; ch&#x1ECD;n k&#xED;ch c&#x1EE1; gi&#x1B0;&#x1EDD;ng chu&#x1EA9;n nh&#x1EA5;t cho ph&#xF2;ng ng&#x1EE7; nh&#x1ECF;">
                                        Những lưu ý để chọn kích cỡ giường chuẩn nhất cho phòng ngủ nhỏ
                                    </a>
                                </h3>
                                <a class="font-link-box-item" href="/mua-sam/nhung-luu-y-de-chon-kich-co-giuong-chuan-nhat-cho-phong-ngu-nho-ar104240" title="Nh&#x1EEF;ng l&#x1B0;u &#xFD; &#x111;&#x1EC3; ch&#x1ECD;n k&#xED;ch c&#x1EE1; gi&#x1B0;&#x1EDD;ng chu&#x1EA9;n nh&#x1EA5;t cho ph&#xF2;ng ng&#x1EE7; nh&#x1ECF;"></a>
                            </li>
                            <li>
                                <h3 class="normal">
                                    <a class="font-link-box-item" href="/mua-sam/5-kinh-nghiem-vang-khi-chon-mua-sofa-moi-ar103614" title="5 kinh nghi&#x1EC7;m v&#xE0;ng khi ch&#x1ECD;n mua sofa m&#x1EDB;i">
                                        5 kinh nghiệm vàng khi chọn mua sofa mới
                                    </a>
                                </h3>
                                <a class="font-link-box-item" href="/mua-sam/5-kinh-nghiem-vang-khi-chon-mua-sofa-moi-ar103614" title="5 kinh nghi&#x1EC7;m v&#xE0;ng khi ch&#x1ECD;n mua sofa m&#x1EDB;i"></a>
                            </li>
                            <li>
                                <h3 class="normal">
                                    <a class="font-link-box-item" href="/mua-sam/20-vat-dung-thong-minh-ai-cung-muon-co-trong-nha-cua-minh-ar102935" title="20 v&#x1EAD;t d&#x1EE5;ng th&#xF4;ng minh ai c&#x169;ng mu&#x1ED1;n c&#xF3; trong nh&#xE0; c&#x1EE7;a m&#xEC;nh">
                                        20 vật dụng thông minh ai cũng muốn có trong nhà của mình
                                    </a>
                                </h3>
                                <a class="font-link-box-item" href="/mua-sam/20-vat-dung-thong-minh-ai-cung-muon-co-trong-nha-cua-minh-ar102935" title="20 v&#x1EAD;t d&#x1EE5;ng th&#xF4;ng minh ai c&#x169;ng mu&#x1ED1;n c&#xF3; trong nh&#xE0; c&#x1EE7;a m&#xEC;nh"></a>
                            </li>
                            <li>
                                <h3 class="normal">
                                    <a class="font-link-box-item" href="/mua-sam/tu-van-chon-tranh-trang-tri-cho-tung-phong-trong-nha-ar101870" title="T&#x1B0; v&#x1EA5;n ch&#x1ECD;n tranh trang tr&#xED; cho t&#x1EEB;ng ph&#xF2;ng trong nh&#xE0;">
                                        Tư vấn chọn tranh trang trí cho từng phòng trong nhà
                                    </a>
                                </h3>
                                <a class="font-link-box-item" href="/mua-sam/tu-van-chon-tranh-trang-tri-cho-tung-phong-trong-nha-ar101870" title="T&#x1B0; v&#x1EA5;n ch&#x1ECD;n tranh trang tr&#xED; cho t&#x1EEB;ng ph&#xF2;ng trong nh&#xE0;"></a>
                            </li>
</ul></div></div>            <div class="clear">
            </div>
        </div>

<div style="clear: both">
    &nbsp;
</div>
<div class="buttom-title-by-category">Trong chuyên mục <strong>N&#x1ED9;i - Ngo&#x1EA1;i th&#x1EA5;t</strong>, nếu quý vị chưa tìm thấy thông tin cần tìm hoặc muốn tham khảo thêm thông tin liên quan đến lĩnh vực <strong>N&#x1ED9;i - Ngo&#x1EA1;i th&#x1EA5;t</strong> thì hãy thử tìm thêm thông tin ở mục <strong>Hỏi đáp</strong> hoặc gửi email cho chúng tôi theo địa chỉ: <a href="mailto:hotro@batdongsan.com.vn">hotro@batdongsan.com.vn</a></div>

                </div>
            </div>
        </div>

        <div id="MiddleMainContent" class="t_right">
            <div class="container-common">
    <div class="box-header">
        <div class="name_tit" align="center">
            <h2 style="color: White;">
                Trang trí theo màu
            </h2>
        </div>
    </div>
    <div class="bor_box">
        <div class="box-color-topic">
            <ul>
                <li class="box-color-item">
                    <a href="/trang-tri-nha-mau-do" class="box-color red">
                        Đỏ
                    </a>
                </li>
                <li class="box-color-item">
                    <a href="/trang-tri-nha-mau-cam" class="box-color orange">
                        Cam
                    </a>
                </li>
                <li class="box-color-item">
                    <a href="/trang-tri-nha-mau-vang" class="box-color yellow">
                        Vàng
                    </a>
                </li>
                <li class="box-color-item">
                    <a href="/trang-tri-nha-mau-xanh" class="box-color blue">
                        Xanh
                    </a>
                </li>
                <li class="box-color-item">
                    <a href="/trang-tri-nha-mau-hong" class="box-color pink">
                        Hồng
                    </a>
                </li>
                <li class="box-color-item">
                    <a href="/trang-tri-nha-mau-tim" class="box-color violet">
                        Tím
                    </a>
                </li>
                <li class="box-color-item">
                    <a href="/trang-tri-nha-mau-trang" class="box-color white">
                        Trắng
                    </a>
                </li>
                <li class="box-color-item">
                    <a href="/trang-tri-nha-mau-den" class="box-color black">
                        Đen
                    </a>
                </li>
            </ul>
        </div>
        <div style="clear: both;">
        </div>
    </div>
    <div>
    </div>
</div>

            <div style="clear: both; margin-bottom: 10px;">
            </div>

            <div class="container-common">
    <div class="box-header">
        <div class="name_tit" align="center">
            <h2 style="color: White;">
                Trang trí theo phòng
            </h2>
        </div>
    </div>
    <div class="bor_box">
        <div class="box-color-topic">
            <ul>
                <li class="box-color-item">
                    <a href="/phong-khach-nha-dep">
                        <img src="https://file4.batdongsan.com.vn/images/phongkhach.png" alt="Phòng khách">
                        Phòng khách
                    </a>
                </li>
                <li class="box-color-item">
                    <a href="/phong-ngu-dep">
                        <img src="https://file4.batdongsan.com.vn/images/phongngu.png" alt="Phòng ngủ">
                        Phòng ngủ
                    </a>
                </li>
                <li class="box-color-item">
                    <a href="/nha-dep-cho-tre-em">
                        <img src="https://file4.batdongsan.com.vn/images/phongtreem.png" alt="Phòng trẻ em">
                        Phòng trẻ em
                    </a>
                </li>
                <li class="box-color-item">
                    <a href="/phong-bep-dep">
                        <img src="https://file4.batdongsan.com.vn/images/phongbep.png" alt="Phòng bếp">
                        Phòng bếp
                    </a>
                </li>
            </ul>
        </div>
        <div style="clear: both;">
        </div>
    </div>
    <div>
    </div>
</div>

            <div style="clear: both; margin-bottom: 10px;">
            </div>

            <div class="container-commom">
    <div id="ctl30_HeaderContainer" class="box-header">
        <div class="name_tit" align="center">
            <h2 style="color: White;">
                Trang trí theo mùa</h2>
        </div>
    </div>
    <div id="ctl30_BodyContainer" class="bor_box">
        <div class="box-color-topic">
            <ul>
                <li class="box-color-item">
                    <a href="/trang-tri-nha-mua-xuan">
                        <img src="https://file4.batdongsan.com.vn/images/topic-mua-xuan.png" alt=" Mùa xuân" />
                        Mùa xuân
                    </a>
                </li>
                <li class="box-color-item">
                    <a href="/trang-tri-nha-mua-he">
                        <img src="https://file4.batdongsan.com.vn/images/topic-mua-he.png" alt="Mùa hè" />
                        Mùa hạ
                    </a>
                </li>
                <li class="box-color-item">
                    <a href="/trang-tri-nha-mua-thu">
                        <img src="https://file4.batdongsan.com.vn/images/topic-mua-thu.png" alt="Mùa thu" />
                        Mùa thu
                    </a>
                </li>
                <li class="box-color-item">
                    <a href="/trang-tri-nha-mua-dong">
                        <img src="https://file4.batdongsan.com.vn/images/topic-mua-dong.png" alt="Mùa đông" />
                        Mùa đông
                    </a>
                </li>
            </ul>
        </div>
        <div style="clear: both;">
        </div>
    </div>
    <div id="ctl30_FooterContainer">
    </div>
</div>

            <div style="clear: both; margin-bottom: 10px;">
            </div>

            

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
                        <a title="10 th&#xF3;i quen nh&#xE0; b&#x1EBF;p v&#x1EEB;a g&#xE2;y h&#x1EA1;i cho &#x111;&#x1ED3; d&#xF9;ng, v&#x1EEB;a r&#x1B0;&#x1EDB;c b&#x1EC7;nh v&#xE0;o ng&#x1B0;&#x1EDD;i"  href="/mach-ban/10-thoi-quen-nha-bep-vua-gay-hai-cho-do-dung-vua-ruoc-benh-vao-nguoi-ar105117">
                            <img style="width: 60px; height: 60px;" src="https://file4.batdongsan.com.vn/crop/60x60/2020/09/28/akCJKkFO/20200928093022-6088.jpg">
                        </a>
                    </div>
                </div>
                <div class="data-default-CSSClass">
                    <p style="padding: 0px; margin: 5px 5px 0 70px;">
                        <a class="controls-view-date-contents-link"  href="/mach-ban/10-thoi-quen-nha-bep-vua-gay-hai-cho-do-dung-vua-ruoc-benh-vao-nguoi-ar105117" title="10 th&#xF3;i quen nh&#xE0; b&#x1EBF;p v&#x1EEB;a g&#xE2;y h&#x1EA1;i cho &#x111;&#x1ED3; d&#xF9;ng, v&#x1EEB;a r&#x1B0;&#x1EDB;c b&#x1EC7;nh v&#xE0;o ng&#x1B0;&#x1EDD;i">
                            10 th&#xF3;i quen nh&#xE0; b&#x1EBF;p v&#x1EEB;a g&#xE2;y h&#x1EA1;i cho &#x111;&#x1ED3; d&#xF9;ng, v&#x1EEB;a r&#x1B0;&#x1EDB;c b&#x1EC7;nh v&#xE0;o ng&#x1B0;&#x1EDD;i
                                                    </a>
                    </p>
                </div>
                <div style="clear: both;"></div>
                <div style="padding: 5px; width: 60px; height: 60px; float: left;">
                    <div class="many-readers-title-icon">
                        <a title="Nhi&#x1EC1;u l&#x1EF1;a ch&#x1ECD;n trang tr&#xED; Noel &#x111;&#x1ED9;c, l&#x1EA1; cho nh&#x1EEF;ng ai &#x111;&#xE3; qu&#xE1; ch&#xE1;n c&#xE2;y th&#xF4;ng"  href="/mua-sam/nhieu-lua-chon-trang-tri-noel-doc-la-cho-nhung-ai-da-qua-chan-cay-thong-ar105358">
                            <img style="width: 60px; height: 60px;" src="https://file4.batdongsan.com.vn/crop/60x60/2020/10/26/akCJKkFO/20201026102017-0add.jpg">
                        </a>
                    </div>
                </div>
                <div class="data-default-CSSClass">
                    <p style="padding: 0px; margin: 5px 5px 0 70px;">
                        <a class="controls-view-date-contents-link"  href="/mua-sam/nhieu-lua-chon-trang-tri-noel-doc-la-cho-nhung-ai-da-qua-chan-cay-thong-ar105358" title="Nhi&#x1EC1;u l&#x1EF1;a ch&#x1ECD;n trang tr&#xED; Noel &#x111;&#x1ED9;c, l&#x1EA1; cho nh&#x1EEF;ng ai &#x111;&#xE3; qu&#xE1; ch&#xE1;n c&#xE2;y th&#xF4;ng">
                            Nhi&#x1EC1;u l&#x1EF1;a ch&#x1ECD;n trang tr&#xED; Noel &#x111;&#x1ED9;c, l&#x1EA1; cho nh&#x1EEF;ng ai &#x111;&#xE3; qu&#xE1; ch&#xE1;n c&#xE2;y th&#xF4;ng
                                                    </a>
                    </p>
                </div>
                <div style="clear: both;"></div>
                <div style="padding: 5px; width: 60px; height: 60px; float: left;">
                    <div class="many-readers-title-icon">
                        <a title="Tr&#x1ED3;ng c&#xE2;y g&#xEC; &#x1EDF; gi&#x1EBF;ng tr&#x1EDD;i &#x111;&#x1EC3; nh&#xE0; xanh m&#xE1;t, gi&#xE0;u sinh kh&#xED;?"  href="/tu-van-noi-ngoai-that/cay-trong-gieng-troi-dep-ar105257">
                            <img style="width: 60px; height: 60px;" src="https://file4.batdongsan.com.vn/crop/60x60/2020/10/12/akCJKkFO/20201012180820-8111.jpg">
                        </a>
                    </div>
                </div>
                <div class="data-default-CSSClass">
                    <p style="padding: 0px; margin: 5px 5px 0 70px;">
                        <a class="controls-view-date-contents-link"  href="/tu-van-noi-ngoai-that/cay-trong-gieng-troi-dep-ar105257" title="Tr&#x1ED3;ng c&#xE2;y g&#xEC; &#x1EDF; gi&#x1EBF;ng tr&#x1EDD;i &#x111;&#x1EC3; nh&#xE0; xanh m&#xE1;t, gi&#xE0;u sinh kh&#xED;?">
                            Tr&#x1ED3;ng c&#xE2;y g&#xEC; &#x1EDF; gi&#x1EBF;ng tr&#x1EDD;i &#x111;&#x1EC3; nh&#xE0; xanh m&#xE1;t, gi&#xE0;u sinh kh&#xED;?
                                                    </a>
                    </p>
                </div>
                <div style="clear: both;"></div>
                <div style="padding: 5px; width: 60px; height: 60px; float: left;">
                    <div class="many-readers-title-icon">
                        <a title="5 xu h&#x1B0;&#x1EDB;ng thi&#x1EBF;t k&#x1EBF; n&#x1ED9;i th&#x1EA5;t &#x111;&#xE3; l&#x1ED7;i th&#x1EDD;i v&#xE0; ph&#x1B0;&#x1A1;ng &#xE1;n thay th&#x1EBF; cho n&#x103;m 2020"  href="/tu-van-noi-ngoai-that/5-xu-huong-thiet-ke-noi-that-da-loi-thoi-va-phuong-an-thay-the-cho-nam-2020-ar105032">
                            <img style="width: 60px; height: 60px;" src="https://file4.batdongsan.com.vn/crop/60x60/2020/09/16/akCJKkFO/20200916163058-eb83.jpg">
                        </a>
                    </div>
                </div>
                <div class="data-default-CSSClass">
                    <p style="padding: 0px; margin: 5px 5px 0 70px;">
                        <a class="controls-view-date-contents-link"  href="/tu-van-noi-ngoai-that/5-xu-huong-thiet-ke-noi-that-da-loi-thoi-va-phuong-an-thay-the-cho-nam-2020-ar105032" title="5 xu h&#x1B0;&#x1EDB;ng thi&#x1EBF;t k&#x1EBF; n&#x1ED9;i th&#x1EA5;t &#x111;&#xE3; l&#x1ED7;i th&#x1EDD;i v&#xE0; ph&#x1B0;&#x1A1;ng &#xE1;n thay th&#x1EBF; cho n&#x103;m 2020">
                            5 xu h&#x1B0;&#x1EDB;ng thi&#x1EBF;t k&#x1EBF; n&#x1ED9;i th&#x1EA5;t &#x111;&#xE3; l&#x1ED7;i th&#x1EDD;i v&#xE0; ph&#x1B0;&#x1A1;ng &#xE1;n thay th&#x1EBF; cho n&#x103;m 2020
                                                    </a>
                    </p>
                </div>
                <div style="clear: both;"></div>
                <div style="padding: 5px; width: 60px; height: 60px; float: left;">
                    <div class="many-readers-title-icon">
                        <a title="M&#x1EB9;o hay s&#x1A1;n t&#x1B0;&#x1EDD;ng tr&#xE1;nh hi&#x1EC7;n t&#x1B0;&#x1EE3;ng r&#xEA;u m&#x1ED1;c, bong tr&#xF3;c"  href="/mua-sam/meo-hay-son-tuong-tranh-hien-tuong-reu-moc-bong-troc-ar105030">
                            <img style="width: 60px; height: 60px;" src="https://file4.batdongsan.com.vn/crop/60x60/2020/09/16/YSUn3oGJ/20200916194916-e97a.jpg">
                        </a>
                    </div>
                </div>
                <div class="data-default-CSSClass">
                    <p style="padding: 0px; margin: 5px 5px 0 70px;">
                        <a class="controls-view-date-contents-link"  href="/mua-sam/meo-hay-son-tuong-tranh-hien-tuong-reu-moc-bong-troc-ar105030" title="M&#x1EB9;o hay s&#x1A1;n t&#x1B0;&#x1EDD;ng tr&#xE1;nh hi&#x1EC7;n t&#x1B0;&#x1EE3;ng r&#xEA;u m&#x1ED1;c, bong tr&#xF3;c">
                            M&#x1EB9;o hay s&#x1A1;n t&#x1B0;&#x1EDD;ng tr&#xE1;nh hi&#x1EC7;n t&#x1B0;&#x1EE3;ng r&#xEA;u m&#x1ED1;c, bong tr&#xF3;c
                                                    </a>
                    </p>
                </div>
                <div style="clear: both;"></div>
                <div style="padding: 5px; width: 60px; height: 60px; float: left;">
                    <div class="many-readers-title-icon">
                        <a title="Top c&#xE1;c lo&#x1EA1;i hoa d&#x1EC5; tr&#x1ED3;ng v&#xE0; c&#xE1;ch ch&#x103;m s&#xF3;c c&#x1A1; b&#x1EA3;n"  href="/mach-ban/cac-loai-hoa-de-trong-ar105398">
                            <img style="width: 60px; height: 60px;" src="https://file4.batdongsan.com.vn/crop/60x60/2020/10/29/JGcIp0rf/20201029211751-95fe.jpg">
                        </a>
                    </div>
                </div>
                <div class="data-default-CSSClass">
                    <p style="padding: 0px; margin: 5px 5px 0 70px;">
                        <a class="controls-view-date-contents-link"  href="/mach-ban/cac-loai-hoa-de-trong-ar105398" title="Top c&#xE1;c lo&#x1EA1;i hoa d&#x1EC5; tr&#x1ED3;ng v&#xE0; c&#xE1;ch ch&#x103;m s&#xF3;c c&#x1A1; b&#x1EA3;n">
                            Top c&#xE1;c lo&#x1EA1;i hoa d&#x1EC5; tr&#x1ED3;ng v&#xE0; c&#xE1;ch ch&#x103;m s&#xF3;c c&#x1A1; b&#x1EA3;n
                                                    </a>
                    </p>
                </div>
                <div style="clear: both;"></div>
        </div>
    </div>


            <div style="clear: both; margin-bottom: 10px;">
            </div>
            
<div class="container-common">
    <div class="box-header">
        <h2 class="name_tit" align="center">Ch&#x1EE7; &#x111;&#x1EC1; &#x111;&#x1B0;&#x1EE3;c quan t&#xE2;m</h2>
    </div>
    <div class="bor_box">
        <div class="list">
            <ul>
                        <li>
                            <a href="/khong-gian-nha-dep" title="Kh&#xF4;ng gian nh&#xE0; &#x111;&#x1EB9;p">
                                <span class="faq-name">
                                    Kh&#xF4;ng gian nh&#xE0; &#x111;&#x1EB9;p
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="/nha-dep-cho-nguoi-doc-than" title="Nh&#xE0; &#x111;&#x1EB9;p cho ng&#x1B0;&#x1EDD;i &#x111;&#x1ED9;c th&#xE2;n">
                                <span class="faq-name">
                                    Nh&#xE0; &#x111;&#x1EB9;p cho ng&#x1B0;&#x1EDD;i &#x111;&#x1ED9;c th&#xE2;n
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="/cay-noi-that" title="C&#xE2;y n&#x1ED9;i th&#x1EA5;t">
                                <span class="faq-name">
                                    C&#xE2;y n&#x1ED9;i th&#x1EA5;t
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="/giai-phap-cho-khong-gian-nho-hep" title="Gi&#x1EA3;i ph&#xE1;p cho kh&#xF4;ng gian nh&#x1ECF;, h&#x1EB9;p">
                                <span class="faq-name">
                                    Gi&#x1EA3;i ph&#xE1;p cho kh&#xF4;ng gian nh&#x1ECF;, h&#x1EB9;p
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="/nha-dep-cho-vo-chong-tre" title="Nh&#xE0; &#x111;&#x1EB9;p cho v&#x1EE3; ch&#x1ED3;ng tr&#x1EBB;">
                                <span class="faq-name">
                                    Nh&#xE0; &#x111;&#x1EB9;p cho v&#x1EE3; ch&#x1ED3;ng tr&#x1EBB;
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="/bai-tri-nha-cua" title="B&#xE0;i tr&#xED; nh&#xE0; c&#x1EED;a">
                                <span class="faq-name">
                                    B&#xE0;i tr&#xED; nh&#xE0; c&#x1EED;a
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="/mau-can-ho-dep" title="M&#x1EAB;u c&#x103;n h&#x1ED9; &#x111;&#x1EB9;p">
                                <span class="faq-name">
                                    M&#x1EAB;u c&#x103;n h&#x1ED9; &#x111;&#x1EB9;p
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="/nha-kieu-nhat" title="Nh&#xE0; ki&#x1EC3;u Nh&#x1EAD;t">
                                <span class="faq-name">
                                    Nh&#xE0; ki&#x1EC3;u Nh&#x1EAD;t
                                </span>
                            </a>
                        </li>
            </ul>
        </div>
            <div style="padding-left: 20px; padding-top: 5px; border-top: 1px solid #ccc; margin-top: 10px;">
                <a href="/chu-de-trong-chu-de-ve-noi-that" class="linktoall">Xem tất cả</a>
            </div>
    </div>
</div>
            <div style="clear: both; margin-bottom: 10px;">
            </div>
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

            <div class="clear10"></div>
            <div style="clear:both;"></div>
        </div>
        <div class="clear">
        </div>
    </div>
</div>
<div class="col_right parent-main-right">
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
<script type='text/javascript'> var bannerContext={"CateId":112,"PageId":null,"CityCode":null,"DistrictId":null,"CurrentPage":340};</script>
    <div style="clear:both;"></div>
    <div>
        
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
<div class="clear">
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
        <ul><li><a href="/ban-can-ho-chung-cu-summer-square">Căn hộ Summer Square</a></li><li><a href="/ban-nha-biet-thu-lien-ke-khu-do-thi-kim-van-kim-lu-golden-silk">Liền kề Kim Văn Kim Lũ</a></li><li><a href="/ban-can-ho-chung-cu-khu-do-thi-kien-hung">Khu đô thị Kiến Hưng</a></li><li><a href="/ban-nha-rieng-phuong-tam-binh">Bán nhà Tam Bình</a></li><li><a href="/tags/ban/Chung-cu-K26-Duong-Quang-Ham">Chung cư K26 Dương Quảng Hàm</a></li><li><a href="/ban-can-ho-chung-cu-chcc-257-giai-phong">Chung cư Hòa Phát</a></li><li><a href="/tags/ban/Chung-cu-gia-re-TPHCM">Chung cư giá rẻ TPHCM 2014</a></li><li><a href="/tags/ban/ban-chung-cu-cuu-long-binh-thanh">Chung cư Cửu Long</a></li><li><a href="/ban-dat-phuong-13-10">Bán đất Phường 13 Tân Bình</a></li><li><a href="/tags/ban/Chung-cu-155-Nguyen-Chi-Thanh">Chung cư 155 Nguyễn Chí Thanh</a></li></ul><ul><li><a href="/tags/cho-thue/Cho-thue-nha-nguyen-can-gia-re">Cho thuê nhà nguyên căn giá rẻ</a></li><li><a href="/tags/cho-thue/Cho-thue-nha-nguyen-can-Binh-Thanh">Cho thuê nhà nguyên căn Bình Thạnh</a></li><li><a href="/ban-can-ho-chung-cu-an-phu-apartment">Căn hộ An Phú Quận 6</a></li><li><a href="/tags/ban/Ca-Sau-Hoa-Ca-Kha-Van-Can-thu-duc">Cá sấu hoa cà Thủ Đức</a></li><li><a href="/nha-dat-ban-nha-trang-kh">Bất động sản Nha Trang</a></li><li><a href="/nha-dat-ban-binh-duong">Bất động sản Bình Dương</a></li><li><a href="/ban-dat-phuong-thao-dien">Bán đất Thảo Điền Quân 2</a></li><li><a href="/ban-can-ho-chung-cu-discovery-complex">Discovery Complex</a></li><li><a href="/ban-can-ho-chung-cu-sakura-tower">Bán chung cư sakura 47 Vũ Trọng Phụng</a></li><li><a href="/tags/ban/Ban-chung-cu-Royal-city-cat-lo">Bán chung cư Royal city cắt lỗ</a></li></ul><ul><li><a href="/ban-can-ho-chung-cu-n04-kdt-dong-nam-tran-duy-hung">Bán chung cư N04</a></li><li><a href="/cao-oc-van-phong-cau-giay/toa-nha-fpt-cau-giay-pj233">Tòa Nhà FPT Cầu Giấy</a></li><li><a href="/ban-can-ho-chung-cu-thu-thiem-xanh">Thủ Thiêm Xanh</a></li><li><a href="/khu-phuc-hop-thuan-an-bd/khu-do-thi-viet-sing-the-oasis-pj1095">The Oasis</a></li><li><a href="/du-an-khac-tra-vinh-tv/vincom-shophouse-tra-vinh-pj2588">Vincom Shophouse Trà Vinh</a></li><li><a href="/khu-du-lich-nghi-duong-phan-thiet-bth/sea-links-city-pj776">Sea Links City</a></li><li><a href="/khu-can-ho-quan-3/screc-tower-pj134">Screc Tower</a></li><li><a href="/tags/cho-thue/Chuyen-nhuong-cua-hang">Nhượng cửa hàng quần áo</a></li><li><a href="/ban-can-ho-chung-cu-riverside-tower">Riverside Tower</a></li><li><a href="/ban-can-ho-chung-cu-richland-southern">Richland Southern</a></li></ul><ul><li><a href="/du-an-khac-tu-liem/to-hop-khach-san-dau-khi-viet-nam-pvn-tower-pj166">PVN Tower</a></li><li><a href="/ban-can-ho-chung-cu-petroland-tower">PetroLand Tower</a></li><li><a href="/khu-du-lich-nghi-duong-phan-thiet-bth/ocean-vista-pj508">Ocean Vista</a></li><li><a href="/khu-phuc-hop-tan-phu/khang-gia-tan-huong-lucky-apartment-pj572">Lucky Apartment</a></li><li><a href="/ban-can-ho-chung-cu-lu-gia-plaza">Lữ Gia Plaza</a></li><li><a href="/khu-phuc-hop-hai-ba-trung/hoang-thanh-tower-pj1275">Hoàng Thành Tower</a></li><li><a href="/ban-can-ho-chung-cu-hh2-bac-ha">HH2 Bắc Hà</a></li><li><a href="/ban-can-ho-chung-cu-green-park-tower">Green Park</a></li><li><a href="/khu-du-lich-nghi-duong-ngu-hanh-son-ddn/furama-villas-pj614">Furama Villas</a></li><li><a href="/ban-can-ho-chung-cu-lang-viet-kieu-chau-au-euroland">Euroland</a></li></ul><ul><li><a href="https://batdongsan.com.vn/nha-dat-ban-binh-chanh">Bán nhà Bình Chánh</a></li><li><a href="https://batdongsan.com.vn/ban-dat-ninh-kieu-ct">Bán đất Ninh Kiều</a></li><li><a href="https://batdongsan.com.vn/nha-dat-ban-quan-11">Bán nhà Quận 11</a></li><li><a href="https://batdongsan.com.vn/nha-dat-ban-phuong-16-3">Bán nhà Phường 16 Gò Vấp</a></li><li><a href="https://batdongsan.com.vn/nha-dat-ban-phuong-4-15">Bán nhà Phường 4 Quận 8</a></li><li><a href="https://batdongsan.com.vn/nha-dat-ban-phuong-9-6">Bán nhà Phường 9 Quận 5</a></li><li><a href="https://batdongsan.com.vn/ban-dat-phuong-dong-hoa">Bán đất Đông Hòa</a></li><li><a href="https://batdongsan.com.vn/nha-dat-ban-phuong-duong-noi">Bán nhà Dương Nội</a></li><li><a href="https://batdongsan.com.vn/nha-dat-ban-thi-tran-trau-quy">Bán nhà Trâu Quỳ</a></li><li><a href="https://batdongsan.com.vn/nha-dat-ban-xa-tien-xuan">Bán nhà Tiến Xuân</a></li></ul>
    </div>



                </div>
            </div>

        <div id="SiteRight" class="banner-right clearfix">
            <div class="container-default">
                <div>
                    <div id="ban_wide_right" class="ban_wide_scroll">
                        <div class="adPosition" positionCode="BANNER_POSITION_WIDE_RIGHT" style="margin-bottom: 0px"></div>
<script type='text/javascript'> var bannerContext={"CateId":112,"PageId":null,"CityCode":null,"DistrictId":null,"CurrentPage":340};</script>
                    </div>

                    <div id="ban_right" class="ban_scroll">
                        <div class="adPosition" positionCode="BANNER_POSITION_RIGHT" style="margin-bottom: 0px"></div>
<script type='text/javascript'> var bannerContext={"CateId":112,"PageId":null,"CityCode":null,"DistrictId":null,"CurrentPage":340};</script>
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
<script type='text/javascript'> var bannerContext={"CateId":112,"PageId":null,"CityCode":null,"DistrictId":null,"CurrentPage":340};</script>

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
    
    
            <script src="https://staticfile.batdongsan.com.vn/js/Common/filestatic.ver202011121106.msvbds.FrontEnd.Common.min.js"></script>
    
    <!--start BannerContext-->
    <script type='text/javascript'> var __bannerContext={"PageId":340,"CateId":112,"CityCode":null,"DistrictId":null,"CurrentPage":1};</script>
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

@section('scripts')
<script type="text/javascript" async="" src="/assets/js/analytics.js"></script>
<script type="text/javascript" async="" src="/assets/js/js.js"></script>
<script type="text/javascript" async="" src="/assets/js/hotjar-1708983.js">
</script><script type="text/javascript" async="" src="/assets/js/analytics.js"></script>
<script async="" charset="utf-8" src="/assets/js/a.js" type="text/javascript"></script>
<script async="" src="/assets/js/gtm.js"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    window.dataLayer.push({'event': 'pageInfo','cat': 'null','dtk': 'null','ite': '','pag': '86','cit': 'null','dis':'null','war':'null','str':'null','pro':'null','pri':'null','mip':'null','map':'null','are':'null','mia':'null','maa':'null','dir':'null','rom':'null'});
</script>

<script async="" src="/assets/js/modules.js" charset="utf-8"></script>
<style type="text/css">iframe#_hjRemoteVarsFrame {display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;}</style>
<script type="text/javascript" src="/assets/js/w.js"></script>
<style media="print" class="jx_ui_StyleSheet" __jx__id="___$_2" type="text/css">.
{ display: none !important }</style>
    
@endsection