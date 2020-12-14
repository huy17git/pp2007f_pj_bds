@extends('layouts.master')
@section('title', 'Nhà đất cho thuê, cho thuê nhà Việt Nam | Nhà đất cho thuê, cho thuê nhà tại Việt Nam')
@section('style-libraries')
    <link rel="stylesheet" type="text/css" href="/assets/css/box.css">
    <style>
        ul.pagination li {
            display: inline;
            margin-right: 20px;
        }

    </style>
@endsection
@section('content')
    <div class="site-center">


        <input type="hidden" value="1" id="activeTxtSelect">
        <div id="MiddleSubMenu">
            <div class="home-top-search" style="padding-bottom: 10px !important;">
                <div class="home-top-search-keyword">
                    <input type="text" placeholder="Nhập từ khóa để tìm theo cụm từ" id="txt1" class="txtKeyword">
                </div>
                <div class="advance-select-box" id="home-top-search">
                    <span class="select-text">
                        <span class="select-text-content" style="width: 100.778px;">Nhà đất bán</span>
                    </span>
                    <input type="hidden" id="cboTypeSearch" value="1">
                </div>
                <div id="home-top-search-otions" class="advance-select-options advance-options" hddvalue="cboTypeSearch"
                    ddlid="home-top-search" style="">
                    <ul class="advance-options" style="min-width: 124px;">
                        <li vl="1" class="advance-options current" style="min-width: 92px;">Nhà đất bán</li>
                        <li vl="2" class="advance-options" style="min-width: 92px;">Nhà đất cho thuê</li>
                        <li vl="3" class="advance-options" style="min-width: 92px;">Tin tức</li>
                        <li vl="5" class="advance-options" style="min-width: 92px;">Dự án</li>
                        <li vl="6" class="advance-options" style="min-width: 92px;">Doanh nghiệp</li>
                        <li vl="7" class="advance-options" style="min-width: 92px;">Môi giới</li>
                    </ul>
                </div>
                <img src="/assets/image/header-bottom-button.jpg" onclick="SearchKeyword();"
                    class="fg-button fg-button-bg-default fg-button-toggleable ui-corner-all" alt="Tìm kiếm"
                    name="btnSearch" id="btnSearch">
            </div>
            <div id="gglbody"></div>
            <div class="clear"></div>
        </div>
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
                    <div>
                        <div class="product-list product-list-page other-product">
                            <div class="Title">
                                <h1>
                                    Nhà đất Cần mua - Cần thuê tại Việt Nam
                                </h1>
                                <div class="Footer">
                                    Có <span class="greencolor"><strong>{{ $buyersellercost->count() }}</strong></span> bất
                                    động sản.
                                </div>
                            </div>
                            <div class="Main">
                                <div class="Header">
                                    <div class="Left"></div>
                                    <div class="Repeat">
                                        <h2>
                                            Nhà đất Cần mua - Cần thuê tại Việt Nam
                                        </h2>
                                    </div>
                                    <div class="Right"></div>
                                </div>
                                <div class="tag_container">
                                    @include('pages.canmuacanthue.presult')
                                </div>
                            </div>

                            <div>
                                <h3></h3>
                            </div>
                            <div class="separable">
                                <br>
                            </div>
                            <div>
                                <h3>Tìm Nhà đất Cần mua - Cần thuê khác tại Việt Nam</h3>
                            </div>
                            <div class="separable">
                                <br>
                            </div>
                            <div class="margit5">

                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="body-right" id="RightMainContent">
            <div>
                <div class="container-common">
                    <div>
                        <div>
                            <div class="newsletter-form-small">
                                <div class="mb5">
                                    <div class="fl">
                                        <img src="/assets/image/icon-newsletter-small.jpg">
                                    </div>
                                    <div class="fl news-text">Nhận bản tin từ Batdongsan.com.vn</div>
                                    <div class="clear"></div>
                                </div>
                                <div class="newsletter-content">
                                    <div class="newsletter-bound">
                                        <div class="fl input">
                                            <input type="text" id="email" placeholder="Nhập email của bạn">
                                        </div>
                                        <div class="fl a"><a href="https://batdongsan.com.vn/can-mua-can-thue#"
                                                class="newsletter-register" id="newsletterRegister">Đăng ký</a></div>
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

            <div id="content-main-right">
                <div id="column-right">


                    <div>
                        <div id="product_search" class="box-left">
                            <div class="box-title">
                                Tìm kiếm tin rao cần mua, cần thuê
                            </div>
                            <div id="searchcp" class="search-form">
                                <form
                                    action="https://batdongsan.com.vn/microservice-architecture-router/Demand/DemandSearch/Index"
                                    method="post" novalidate="novalidate">
                                    <div class="result"></div>
                                    <div id="divCategory" class="searchrow advance-select-box">
                                        <span class="select-text">
                                            <span class="select-text-content" style="width: 192.778px;">--Chọn loại tin
                                                rao--</span>
                                        </span>
                                        <input data-val="true" data-val-required="The CateId field is required."
                                            id="hdCboCatagory" name="CateId" type="hidden" value="-1">
                                    </div>
                                    <div id="divCatagoryOptions"
                                        class="advance-select-options advance-options advance-select-options-2"
                                        hddvalue="hdCboCatagory" ddlid="divCategory" style="">
                                        <ul class="advance-options" style="min-width: 218px;">
                                            <li vl="-1" style="min-width: 186px;">--Chọn loại tin rao--</li>
                                            <li vl="400" class="" style="min-width: 186px;">Nhà đất Cần mua</li>
                                            <li vl="401" class="" style="min-width: 186px;">Nhà đất Cần thuê</li>
                                        </ul>
                                    </div>

                                    <div id="divCategoryRe" class="searchrow advance-select-box">
                                        <span class="select-text">
                                            <span class="select-text-content" style="width: 192.778px;">--Chọn loại nhà
                                                đất--</span>
                                        </span>
                                        <input data-val="true" data-val-required="The SubCateId field is required."
                                            id="hdCboCatagoryRe" name="SubCateId" type="hidden" value="0">
                                    </div>
                                    <div id="divCatagoryReOptions"
                                        class="advance-select-options advance-options advance-select-options-2"
                                        hddvalue="hdCboCatagoryRe" ddlid="divCategoryRe" style="" value="[object Object]">
                                        <ul class="advance-options" style="min-width: 218px;">
                                            <li vl="0" style="min-width: 186px;">--Chọn loại nhà đất--</li>
                                        </ul>
                                    </div>

                                    <div id="divCity" class="searchrow advance-select-box">
                                        <span class="select-text"><input type="text" class="select-text-content"
                                                value="--Chọn Tỉnh/Thành phố--" placeholder="--Chọn Tỉnh/Thành phố--"
                                                style="width: 192.778px;"></span>
                                        <input id="hdCboCity" name="CityCode" type="hidden" value="CN">
                                    </div>
                                    <div id="divCityOptions"
                                        class="advance-select-options advance-options advance-select-options-2"
                                        hddvalue="hdCboCity" ddlid="divCity" style="">
                                        <ul class="advance-options" style="min-width: 218px;">
                                            <li vl="CN" class="advance-options" style="min-width: 186px;">--Chọn Tỉnh/Thành
                                                phố--</li>
                                            <li vl="SG" class="advance-options " style="min-width: 186px;">Hồ Chí Minh</li>
                                            <li vl="HN" class="advance-options " style="min-width: 186px;">Hà Nội</li>
                                            <li vl="DDN" class="advance-options " style="min-width: 186px;">Đà Nẵng</li>
                                            <li vl="BD" class="advance-options " style="min-width: 186px;">Bình Dương</li>
                                            <li vl="DNA" class="advance-options " style="min-width: 186px;">Đồng Nai</li>
                                            <li vl="KH" class="advance-options " style="min-width: 186px;">Khánh Hòa</li>
                                            <li vl="HP" class="advance-options " style="min-width: 186px;">Hải Phòng</li>
                                            <li vl="LA" class="advance-options " style="min-width: 186px;">Long An</li>
                                            <li vl="QNA" class="advance-options " style="min-width: 186px;">Quảng Nam</li>
                                            <li vl="VT" class="advance-options " style="min-width: 186px;">Bà Rịa Vũng Tàu
                                            </li>
                                            <li vl="DDL" class="advance-options " style="min-width: 186px;">Đắk Lắk</li>
                                            <li vl="CT" class="advance-options " style="min-width: 186px;">Cần Thơ</li>
                                            <li vl="BTH" class="advance-options " style="min-width: 186px;">Bình Thuận </li>
                                            <li vl="LDD" class="advance-options " style="min-width: 186px;">Lâm Đồng</li>
                                            <li vl="TTH" class="advance-options " style="min-width: 186px;">Thừa Thiên Huế
                                            </li>
                                            <li vl="KG" class="advance-options " style="min-width: 186px;">Kiên Giang</li>
                                            <li vl="BN" class="advance-options " style="min-width: 186px;">Bắc Ninh</li>
                                            <li vl="QNI" class="advance-options " style="min-width: 186px;">Quảng Ninh</li>
                                            <li vl="TH" class="advance-options " style="min-width: 186px;">Thanh Hóa</li>
                                            <li vl="NA" class="advance-options " style="min-width: 186px;">Nghệ An</li>
                                            <li vl="HD" class="advance-options " style="min-width: 186px;">Hải Dương</li>
                                            <li vl="GL" class="advance-options " style="min-width: 186px;">Gia Lai</li>
                                            <li vl="BP" class="advance-options " style="min-width: 186px;">Bình Phước</li>
                                            <li vl="HY" class="advance-options " style="min-width: 186px;">Hưng Yên</li>
                                            <li vl="BDD" class="advance-options " style="min-width: 186px;">Bình Định</li>
                                            <li vl="TG" class="advance-options " style="min-width: 186px;">Tiền Giang</li>
                                            <li vl="TB" class="advance-options " style="min-width: 186px;">Thái Bình</li>
                                            <li vl="BG" class="advance-options " style="min-width: 186px;">Bắc Giang</li>
                                            <li vl="HB" class="advance-options " style="min-width: 186px;">Hòa Bình</li>
                                            <li vl="AG" class="advance-options " style="min-width: 186px;">An Giang</li>
                                            <li vl="VP" class="advance-options " style="min-width: 186px;">Vĩnh Phúc</li>
                                            <li vl="TNI" class="advance-options " style="min-width: 186px;">Tây Ninh</li>
                                            <li vl="TN" class="advance-options " style="min-width: 186px;">Thái Nguyên</li>
                                            <li vl="LCA" class="advance-options " style="min-width: 186px;">Lào Cai</li>
                                            <li vl="NDD" class="advance-options " style="min-width: 186px;">Nam Định</li>
                                            <li vl="QNG" class="advance-options " style="min-width: 186px;">Quảng Ngãi</li>
                                            <li vl="BTR" class="advance-options " style="min-width: 186px;">Bến Tre</li>
                                            <li vl="DNO" class="advance-options " style="min-width: 186px;">Đắk Nông</li>
                                            <li vl="CM" class="advance-options " style="min-width: 186px;">Cà Mau</li>
                                            <li vl="VL" class="advance-options " style="min-width: 186px;">Vĩnh Long</li>
                                            <li vl="NB" class="advance-options " style="min-width: 186px;">Ninh Bình</li>
                                            <li vl="PT" class="advance-options " style="min-width: 186px;">Phú Thọ</li>
                                            <li vl="NT" class="advance-options " style="min-width: 186px;">Ninh Thuận</li>
                                            <li vl="PY" class="advance-options " style="min-width: 186px;">Phú Yên</li>
                                            <li vl="HNA" class="advance-options " style="min-width: 186px;">Hà Nam</li>
                                            <li vl="HT" class="advance-options " style="min-width: 186px;">Hà Tĩnh</li>
                                            <li vl="DDT" class="advance-options " style="min-width: 186px;">Đồng Tháp</li>
                                            <li vl="ST" class="advance-options " style="min-width: 186px;">Sóc Trăng</li>
                                            <li vl="KT" class="advance-options " style="min-width: 186px;">Kon Tum</li>
                                            <li vl="QB" class="advance-options " style="min-width: 186px;">Quảng Bình</li>
                                            <li vl="QT" class="advance-options " style="min-width: 186px;">Quảng Trị</li>
                                            <li vl="TV" class="advance-options " style="min-width: 186px;">Trà Vinh</li>
                                            <li vl="HGI" class="advance-options " style="min-width: 186px;">Hậu Giang</li>
                                            <li vl="SL" class="advance-options " style="min-width: 186px;">Sơn La</li>
                                            <li vl="BL" class="advance-options " style="min-width: 186px;">Bạc Liêu</li>
                                            <li vl="YB" class="advance-options " style="min-width: 186px;">Yên Bái</li>
                                            <li vl="TQ" class="advance-options " style="min-width: 186px;">Tuyên Quang</li>
                                            <li vl="DDB" class="advance-options " style="min-width: 186px;">Điện Biên</li>
                                            <li vl="LCH" class="advance-options " style="min-width: 186px;">Lai Châu</li>
                                            <li vl="LS" class="advance-options " style="min-width: 186px;">Lạng Sơn</li>
                                            <li vl="HG" class="advance-options " style="min-width: 186px;">Hà Giang</li>
                                            <li vl="BK" class="advance-options " style="min-width: 186px;">Bắc Kạn</li>
                                            <li vl="CB" class="advance-options " style="min-width: 186px;">Cao Bằng</li>
                                        </ul>
                                    </div>


                                    <div id="divDistrict" class="searchrow advance-select-box" title="" bt-xtitle="">
                                        <span class="select-text"><input type="text" class="select-text-content"
                                                value="--Chọn Quận/Huyện--" placeholder="--Chọn Quận/Huyện--"
                                                style="width: 192.778px;"></span>
                                        <input data-val="true" data-val-required="The DistrictId field is required."
                                            id="hdCboDistrict" name="DistrictId" type="hidden" value="0">
                                    </div>
                                    <div id="divDistrictOptions"
                                        class="advance-select-options advance-options advance-select-options-2"
                                        hddvalue="hdCboDistrict" ddlid="divDistrict" style="">
                                        <ul class="advance-options" style="min-width: 218px;">
                                            <li vl="0" class="advance-options current" style="min-width: 186px;">--Chọn
                                                Quận/Huyện--</li>
                                        </ul>
                                    </div>


                                    <div id="divArea" class="searchrow advance-select-box ">
                                        <span class="select-text">
                                            <span class="select-text-content" style="width: 192.778px;">--Chọn Diện
                                                tích--</span>
                                        </span>
                                        <input data-val="true" data-val-required="The AreaId field is required."
                                            id="hdCboArea" name="AreaId" type="hidden" value="-1">
                                    </div>
                                    <div id="divAreaOptions"
                                        class="advance-select-options advance-options advance-select-options-2"
                                        minvalue="txtAreaMinValue" maxvalue="txtAreaMaxValue" unit="area"
                                        hddvalue="hdCboArea" ddlid="divArea" style="">
                                        <table class="header-options options">
                                            <tbody>
                                                <tr class="advance-options">
                                                    <td class="advance-options">
                                                        <input value="" type="text" id="txtAreaMinValue" name="MinArea"
                                                            placeholder="Từ" class="min-value advance-options" maxlength="6"
                                                            numbersonly="true" decimal="false">
                                                    </td>
                                                    <td class="advance-options"><span class="advance-options">- </span></td>
                                                    <td class="advance-options">
                                                        <input value="" type="text" id="txtAreaMaxValue" name="MaxArea"
                                                            placeholder="Đến" class="max-value advance-options"
                                                            maxlength="6" numbersonly="true" decimal="false">
                                                    </td>
                                                    <td class="advance-options"><span class="advance-options">m2</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <ul class="advance-options" style="min-width: 218px;">
                                            <li vl="-1" class="advance-options" style="min-width: 186px;">--Chọn Diện tích--
                                            </li>
                                            <li vl="0" class="advance-options " style="min-width: 186px;">Chưa xác định</li>
                                            <li vl="1" class="advance-options " style="min-width: 186px;">&lt;= 30 m2</li>
                                            <li vl="2" class="advance-options " style="min-width: 186px;">30 - 50 m2</li>
                                            <li vl="3" class="advance-options " style="min-width: 186px;">50 - 80 m2</li>
                                            <li vl="4" class="advance-options " style="min-width: 186px;">80 - 100 m2</li>
                                            <li vl="5" class="advance-options " style="min-width: 186px;">100 - 150 m2</li>
                                            <li vl="6" class="advance-options " style="min-width: 186px;">150 - 200 m2</li>
                                            <li vl="7" class="advance-options " style="min-width: 186px;">200 - 250 m2</li>
                                            <li vl="8" class="advance-options " style="min-width: 186px;">250 - 300 m2</li>
                                            <li vl="9" class="advance-options " style="min-width: 186px;">300 - 500 m2</li>
                                            <li vl="10" class="advance-options " style="min-width: 186px;">&gt;= 500 m2</li>
                                        </ul>
                                    </div>

                                    <div id="divPrice" class="searchrow advance-select-box">
                                        <span class="select-text">
                                            <span class="select-text-content" style="width: 192.778px;">--Chọn mức
                                                giá--</span>
                                        </span>
                                        <input data-val="true" data-val-required="The PriceId field is required."
                                            id="hdCboPrice" name="PriceId" type="hidden" value="-1">
                                    </div>
                                    <div id="divPriceOptions"
                                        class="advance-select-options advance-options advance-select-options-2"
                                        minvalue="txtPriceMinValue" maxvalue="txtPriceMaxValue" unit="money"
                                        lblmin="lblPriceMin" lblmax="lblPriceMax" hddvalue="hdCboPrice" ddlid="divPrice"
                                        style="">
                                        <table class="header-options options">
                                            <tbody>
                                                <tr class="advance-options">
                                                    <td class="advance-options">
                                                        <input value="" type="text" id="txtPriceMinValue" name="MinPrice"
                                                            placeholder="Từ" class="min-value advance-options" maxlength="6"
                                                            numbersonly="true" decimal="true">
                                                        <div id="lblPriceMin"></div>
                                                    </td>
                                                    <td class="advance-options"><span class="advance-options">- </span></td>
                                                    <td class="advance-options">
                                                        <input value="" type="text" id="txtPriceMaxValue" name="MaxPrice"
                                                            placeholder="Đến" class="max-value advance-options"
                                                            maxlength="6" numbersonly="true" decimal="true">
                                                        <div id="lblPriceMax"></div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <ul class="advance-options" style="min-width: 218px;">
                                            <li vl="-1" class="advance-options" style="min-width: 186px;">--Chọn mức giá--
                                            </li>
                                            <li vl="0" class="advance-options " style="min-width: 186px;">Thỏa thuận</li>
                                            <li vl="1" class="advance-options " style="min-width: 186px;">&lt; 500 triệu
                                            </li>
                                            <li vl="2" class="advance-options " style="min-width: 186px;">500 - 800 triệu
                                            </li>
                                            <li vl="3" class="advance-options " style="min-width: 186px;">800 triệu - 1 tỷ
                                            </li>
                                            <li vl="4" class="advance-options " style="min-width: 186px;">1 - 2 tỷ</li>
                                            <li vl="5" class="advance-options " style="min-width: 186px;">2 - 3 tỷ</li>
                                            <li vl="6" class="advance-options " style="min-width: 186px;">3 - 5 tỷ</li>
                                            <li vl="7" class="advance-options " style="min-width: 186px;">5 - 7 tỷ</li>
                                            <li vl="8" class="advance-options " style="min-width: 186px;">7 - 10 tỷ</li>
                                            <li vl="9" class="advance-options " style="min-width: 186px;">10 - 20 tỷ</li>
                                            <li vl="10" class="advance-options " style="min-width: 186px;">20 - 30 tỷ</li>
                                            <li vl="11" class="advance-options " style="min-width: 186px;">&gt; 30 tỷ</li>
                                        </ul>
                                    </div>

                                    <div id="divWard" class="searchrow adv-search advance-select-box" title=""
                                        style="display: none; width: 218px;" bt-xtitle="">
                                        <span class="select-text" style=""><input type="text" class="select-text-content"
                                                value="--Chọn Phường/Xã--" placeholder="--Chọn Phường/Xã--"
                                                style="width: 75px;"></span>
                                        <input data-val="true" data-val-required="The WardId field is required."
                                            id="hdCboWard" name="WardId" type="hidden" value="0">
                                    </div>
                                    <div id="divWardOptions"
                                        class="advance-select-options advance-options advance-select-options-2"
                                        hddvalue="hdCboWard" ddlid="divWard" style="">
                                        <ul class="advance-options" style="min-width: 218px;">
                                            <li vl="0" class="advance-options current" style="min-width: 186px;">--Chọn
                                                Phường/Xã--</li>
                                        </ul>
                                    </div>

                                    <div id="divStreet" class="searchrow adv-search advance-select-box" title=""
                                        style="display: none; width: 218px;" bt-xtitle="">
                                        <span class="select-text" style=""><input type="text" class="select-text-content"
                                                value="--Chọn Đường/Phố--" placeholder="--Chọn Đường/Phố--"
                                                style="width: 75px;"></span>
                                        <input data-val="true" data-val-required="The StreetId field is required."
                                            id="hdCboStreet" name="StreetId" type="hidden" value="0">
                                    </div>
                                    <div id="divStreetOptions"
                                        class="advance-select-options advance-options advance-select-options-2"
                                        hddvalue="hdCboStreet" ddlid="divStreet" style="">
                                        <ul class="advance-options" style="min-width: 218px;">
                                            <li vl="0" class="advance-options current" style="min-width: 186px;">--Chọn
                                                Đường/Phố--</li>
                                        </ul>
                                    </div>

                                    <div id="divProject" class="searchrow adv-search advance-select-box" title=""
                                        style="display: none; width: 218px;" bt-xtitle="">
                                        <span class="select-text" style=""><input type="text" class="select-text-content"
                                                value="--Chọn dự án bất động sản--"
                                                placeholder="--Chọn dự án bất động sản--" style="width: 75px;"></span>
                                        <input data-val="true" data-val-required="The ProjectId field is required."
                                            id="hdCboProject" name="ProjectId" type="hidden" value="0">
                                    </div>
                                    <div id="divProjectOptions"
                                        class="advance-select-options advance-options advance-select-options-2"
                                        hddvalue="hdCboProject" ddlid="divProject" style="">
                                        <ul class="advance-options" style="min-width: 218px;">
                                            <li vl="0" class="advance-options current" style="min-width: 186px;">--Chọn dự
                                                án bất động sản--</li>
                                        </ul>
                                    </div>

                                    <div class="searchbtn">
                                        <input type="image" name="btnSearch" id="btnSearchContext"
                                            onmouseover="this.src = &#39;https://file4.batdongsan.com.vn/images/search2.jpg&#39;"
                                            onmouseout="this.src = &#39;https://file4.batdongsan.com.vn/images/opt/search1.jpg&#39;"
                                            src="/assets/image/search1.jpg">
                                    </div>
                                    <div id="divLabelSearchAdv">
                                        <span class="box-sub-title" id="lblSearch">Tìm nâng cao</span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="clear:both;"></div>

            <div class="adPosition" positioncode="BANNER_POSITION_RIGHT_MAIN_CONTENT" style=""></div>
            <script type="text/javascript">
                var bannerContext = {
                    "CateId": null,
                    "PageId": 575,
                    "CityCode": null,
                    "DistrictId": null,
                    "CurrentPage": 575
                };

            </script>
            <div style="clear:both;"></div>


            <div class="box1">
                <h2 class="h1">Dành cho người xây nhà</h2>
                <ul>
                    <li>
                        <a href="https://batdongsan.com.vn/quy-trinh-xay-nha" title="Quy trình xây nhà" rel="nofollow">Quy
                            trình xây nhà</a>
                    </li>
                    <li class="last">
                        <a href="https://batdongsan.com.vn/ho-tro-tien-ich/ht-xem-tuoi-xay-nha" title="Xem tuổi xây nhà"
                            rel="nofollow">Xem tuổi xây nhà</a>
                    </li>
                </ul>
            </div>

            <div style="clear:both;"></div>

            <div class="container-default">
                <div>
                    <div class="adPosition" positioncode="BANNER_POSITION_FIX" style=""></div>
                    <script type="text/javascript">
                        var bannerContext = {
                            "CateId": null,
                            "PageId": 575,
                            "CityCode": null,
                            "DistrictId": null,
                            "CurrentPage": 575
                        };

                    </script>
                </div>
            </div>
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
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-rivera-park-ha-noi">Chung cư Rivera Park Hà
                            Nội</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-chung-cu-c1-c2-xuan-dinh">Chung cư C1 C2 Xuân
                            Đỉnh</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-anland-nam-cuong">Chung cư Anland Nam
                            Cường</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-hanhud-hoang-quoc-viet">Chung cư Hanhud Hoàng
                            Quốc Việt</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-sunshine-center">Sunshine Center</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-khu-do-thi-lakeview-city">Bán biệt thự
                            Lakeview City</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-ha-do-756-sai-gon">Bán biệt thự Hà Đô
                            756 Sài Gòn</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-park-12-park-hill-times-city">Bán chung cư
                            Park 12 Park Hill Times City</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-vinpearl-condotel-da-nang">Bán căn hộ
                            Vinpearl Condotel Đà Nẵng</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-soho-premier">Bán căn hộ Soho Premier</a>
                    </li>
                </ul>
                <ul>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-duc-long-golden-land">Bán căn hộ Đức Long
                            Golden Land</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-hung-phat-golden-star">Bán căn hộ Hưng Phát
                            Golden Star</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-chung-cu-129d-truong-dinh">Bán chung cư 129D
                            Trương Định</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-e4-tower">Bán chung cư E4 Tower</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-nha-rieng-duong-nguyen-trung-truc-66">Bán nhà Nguyễn Trung
                            Trực Bình Thạnh</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-ban-bac-ninh">Nhà đất Bắc Ninh</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-n03-t3-t4-ngoai-giao-doan">Bán chung cư N03
                            T3 T4 Ngoại Giao Đoàn</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-valeo-dam-sen">Bán căn hộ Valeo Đầm Sen</a>
                    </li>
                    <li><a href="https://batdongsan.com.vn/ban-dat-nen-du-an-khu-do-thi-an-thinh">Bán đất nền Khu đô thị An
                            Thịnh</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-golden-land">Chung cư Golden Land</a></li>
                </ul>
                <ul>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-happy-star-tower">Bán chung cư Happy Star
                            Tower</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-sunrise-city">Căn hộ Sunrise City</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-ban-thai-nguyen">Nhà đất Thái Nguyên</a></li>
                    <li><a href="https://batdongsan.com.vn/khu-thuong-mai-dich-vu-long-bien/vincom-center-long-bien-pj994">Vincom
                            Long Bien</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-sunview-1-2">Sunview Town</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-times-city">Chung cư Times City</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-chung-cu-golden-west-le-van-thiem">Chung cư
                            Golden West</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-alphanam-luxury-apartment">Bán căn hộ
                            Alphanam Luxury Apartment</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-ecolife-tay-ho">Bán chung cư Ecolife Tây
                            Hồ</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-ban-nam-dinh">Nhà đất Nam Định</a></li>
                </ul>
                <ul>
                    <li><a href="https://batdongsan.com.vn/nha-dat-ban-hai-phong">Nhà đất Hải Phòng</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-ban-hai-duong">Nhà đất Hải Dương</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-ban-can-tho">Nhà đất Cần Thơ</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-centara-thu-thiem">Căn hộ Centara Thủ
                            Thiêm</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-athena-complex">Chung cư Athena Complex</a>
                    </li>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-tu-hiep-plaza">Chung cư Tứ Hiệp Plaza</a>
                    </li>
                    <li><a href="https://batdongsan.com.vn/tags/cho-thue/Sang-quan-cafe">Sang quán café</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-gemek-premium">Chung cư Gemek Premium</a>
                    </li>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-vinpearl-condotel-nha-trang">Căn hộ Vinpearl
                            Condotel Nha Trang</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-ban-binh-chanh">Bán nhà Bình Chánh</a></li>
                </ul>
                <ul>
                    <li><a href="https://batdongsan.com.vn/ban-dat-ninh-kieu-ct">Bán đất Ninh Kiều</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-ban-quan-11">Bán nhà Quận 11</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-ban-phuong-16-3">Bán nhà Phường 16 Gò Vấp</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-ban-phuong-4-15">Bán nhà Phường 4 Quận 8</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-ban-phuong-9-6">Bán nhà Phường 9 Quận 5</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-dat-phuong-dong-hoa">Bán đất Đông Hòa</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-ban-phuong-duong-noi">Bán nhà Dương Nội</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-ban-thi-tran-trau-quy">Bán nhà Trâu Quỳ</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-ban-xa-tien-xuan">Bán nhà Tiến Xuân</a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

    <div class="modal fade" id="dialogPopup" role="dialog">
        <div class="nomodal"></div>
        <div class="modal-dialog">
            <div class="modal-content ">
            </div>
        </div>
    </div>

    <div class="adPosition" positionCode="BANNER_POSITION_FLOADING_BOTTOM" style=""></div>
    <script type='text/javascript'>
        var bannerContext = {
            "CateId": null,
            "PageId": 575,
            "CityCode": null,
            "DistrictId": null,
            "CurrentPage": 575
        };

    </script>

    <div class="hide" id="domainUserInfo" data-value="https://batdongsan.com.vn"></div>
    <div class="hide" id="domainWeb" data-value="https://batdongsan.com.vn"></div>
    <div class="hide" id="getBannerUrl" data-value="/microservice-architecture-router/Systems/Banner/GetBanners"></div>
    <div class="hide" id="domainStatistic" data-value="https://statistic.batdongsan.com.vn"></div>
    <div class="popup-content ">
    </div>
    <div class="lg-backdrop in" id="dialog-backdrop" style="transition-duration: 150ms;display: none;"
        onclick="account.CloseAccountPopup()"></div>
    <div id="gototop" title="Go to top"></div>
    </div>
    <div style="display: none" class="searching-histories-configs" max-searching-histories-length="20"
        sync-time-searching-histories="5" sync-searching-histories-url="/Product/ProductSearch/SyncSearchingHistories"
        remove-searching-histories-url="/Product/ProductSearch/RemoveSearchingHistory">
    </div>


    <script src="https://staticfile.batdongsan.com.vn/js/Common/filestatic.ver202011121057.msvbds.FrontEnd.Common.min.js">
    </script>

    <!--start BannerContext-->
    <script type='text/javascript'>
        var __bannerContext = {
            "PageId": 575,
            "CateId": null,
            "CityCode": null,
            "DistrictId": null,
            "CurrentPage": 1
        };

    </script>
    <!--end BannerContext-->
    <!--Start of Zendesk Chat Script-->
    <script type="text/javascript">
        window.$zopim || (function(d, s) {
            var z = $zopim = function(c) {
                    z._.push(c)
                },
                $ = z.s =
                d.createElement(s),
                e = d.getElementsByTagName(s)[0];
            z.set = function(o) {
                z.set.
                _.push(o)
            };
            z._ = [];
            z.set._ = [];
            $.async = !0;
            $.setAttribute("charset", "utf-8");
            $.src = "https://v2.zopim.com/?6fJlcOXWwJofJZOzmeDIifb7bHGvvSte";
            z.t = +new Date;
            $.
            type = "text/javascript";
            e.parentNode.insertBefore($, e)
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
        unmarked-product-url="/Product/MarkedProducts/UnmarkProduct" marked-product-ids-sync-time="0.5"></div>



    <script
        src="https://staticfile.batdongsan.com.vn/js/Product/filestatic.ver202011121057.msvbds.FrontEnd.Product.Search.min.js">
    </script>
    <script
        src="https://staticfile.batdongsan.com.vn/js/Product/filestatic.ver202011121057.msvbds.FrontEnd.Product.ProductHome.min.js">
    </script>


    <script type="text/javascript">
        var params = {
            formSubmit: "#formSubmit",
            loadContent: "#contentPage",
            ddlSortBy: "#ddlSortBy",
            tabActive: ".tabactive",
            tabIndexValue: "#tabIndexValue",
            sortValue: "#sortValue",
            urlListDistrict: '/Contacts/CommonData/GetListDistrictByCity',
            urlListStreet: '/Contacts/CommonData/GetStreetList',
            urlListWard: '/Contacts/CommonData/GetWardList',
            urlListRoom: '/Contacts/CommonData/GetRoomList',
            urlListDirection: '/Contacts/CommonData/GetDirectionList',
            urlListProject: '/Contacts/CommonData/GetListProjectByDistrict',
            urlListSubCate: '/Contacts/CommonData/GetCategoryByParentId',
            urlListPrice: '/Contacts/CommonData/GetPriceList',
            suggestionApi: {
                apiForSell: 'https://suggestion1.batdongsan.com.vn/',
                apiForRent: 'https://suggestion2.batdongsan.com.vn/'
            }
        };

        var productHome = new product.ProductHome();
        productHome.InitializeLoad(params);

        var hdbCategory = $('#divCategory').AdvanceHiddenDropbox({
            id: 'divCatagoryOptions',
            hddValue: 'hdCboCatagory'
        });

    </script>

    <script type="text/javascript">
        try {
            var script_imported = document.createElement('script');
            script_imported.src = 'https://log.batdongsan.com.vn/js/bds/bds-msv-log.min.js?hv=2&amp;dv=' + (new Date()
                .toJSON().slice(0, 10));
            if (document.body != null && document.body != undefined) {
                document.body.appendChild(script_imported);
            } else {
                document.head.appendChild(script_imported);
            }
        } catch (e) {}

    </script>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            var lazyImages = [].slice.call(document.querySelectorAll('[src-lazy]'));
            window.countOfLazyImages = lazyImages.length;
            if ('IntersectionObserver' in window) {
                let lazyImageObserver = new IntersectionObserver(function(entries, observer) {
                    entries.forEach(function(entry) {
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
                lazyImages.forEach(function(lazyImage, i) {
                    lazyImage.setAttribute('lazy-id', i);
                    lazyImageObserver.observe(lazyImage);
                });
                (function checkDuplicate() {
                    var countOfLazyElements = [].slice.call(document.querySelectorAll('[lazy-id]'));
                    if (countOfLazyElements.length > window.countOfLazyImages) {
                        var elements = [].slice.call(document.querySelectorAll('[src-lazy]'));
                        elements.forEach(element => {
                            var lazyId = element.attributes['lazy-id'].value;
                            var lazyElements = [].slice.call(document.querySelectorAll(
                                `[lazy-id="${lazyId}"]`));
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
                $('[src-lazy]').each(function() {
                    this.src = this.attributes['src-lazy'].value;
                    this.removeAttribute('src-lazy');
                });
            }
        });

    </script>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            
            $(document).on('click', '.pagination a', function(event) {
                
                event.preventDefault();
                $('li').removeClass('active');
                $(this).parent('li').addClass('active');
                var myurl = $(this).attr('href');
                var page = $(this).attr('href').split('page=')[1];
                getData(page);
            });
        });

        function getData(page) {
            $.ajax({
                url: '?page=' + page,
                type: "get",
                datatype: "html"
            }).done(function(data) {
                $(".tag_container").empty().html(data);
                location.hash = page;
            }).fail(function(jqXHR, ajaxOptions, thrownError) {
                alert('No response from server');
            });
        }

    </script>
@endsection
