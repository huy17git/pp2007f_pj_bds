@foreach ($products as $products)
@extends('layouts.master')

@section('title')
{!! $products->title !!}
@endsection

@section('styles')
<link rel="stylesheet" href="/assets/css/bien_hoa1.css">
<link rel="stylesheet" href="/assets/css/bien_hoa2.css">
<link rel="stylesheet" href="/assets/css/filestatic.ver202011121105.msvbds.FrontEnd.Product.ProductDetails.min.css">
<link href="https://file4.batdongsan.com.vn/images/icon-bds.ico" rel="shortcut icon" type="image/x-icon">
<link rel="next" href="https://batdongsan.com.vn/ban-can-ho-chung-cu/p2">
<style type="text/css">iframe#_hjRemoteVarsFrame {display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;}</style>
<style media="print" class="jx_ui_StyleSheet" __jx__id="___$_2" type="text/css">.zopim { display: none !important }</style>
@endsection

@section('content')

<body class="bg-site">
<form id="boxSearchForm" action="https://batdongsan.com.vn/microservice-architecture-router/Product/ProductSearch/Index" method="post" novalidate="novalidate">
    <div class="search-bar shadow-lv-1 clearfix">
        <ul class="search-bar-tab mar-left-16 pad-top-8 mar-right-16">
            <li class="actived" ptype="38">Bán</li>
            <li ptype="49">Cho thuê</li>
        </ul>
        <input data-val="true" data-val-required="The CateId field is required." id="type" name="CateId" type="hidden" value="38">

        <div class="search-bar-suggestion pad-top-8 mar-right-16">
            <input type="hidden" id="suggestionTemp">
            <input id="Keyword" name="Keyword" type="hidden" value="">
            <input type="text" placeholder="Tìm kiếm địa điểm, khu vực" value="" class="search-bar-input ui-autocomplete-input" id="search-suggestion" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true">
            <span class="icon-close hiding">
                <img src="/assets/image/ic_close.png">
            </span>
        </div>
        <div id="divCategoryRe" class="select-control select-cate">
            <div class="select-control-label">
                <div class="dropbox-label">Loại nhà đất</div>
                <div class="custom-value">Tất cả</div>
            </div>
            <input data-val="true" data-val-required="The SubCateId field is required." id="hdCboCatagory" name="SubCateId" type="hidden" value="0">
            <div id="select-cate-options" class="custom-dropbox-cate hiding advance-select-options custom-scroll mCustomScrollbar _mCS_3 mCS_no_scrollbar" style="display: none;"><div id="mCSB_3" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" tabindex="0" style="max-height: 0px;"><div id="mCSB_3_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position: relative; top: 0px; left: 0px;" dir="ltr"><div id="divCate"><ul>
                                    <li vl="0"><span class="active current">Tất cả nhà đất</span></li>
                                    <li vl="324"><span>Căn hộ chung cư</span></li>
                                    <li vl="362"><span>Các loại nhà bán</span>
                                        <ul>
                                            <li vl="41"><span>Nhà riêng</span></li>
                                            <li vl="325"><span>Nhà biệt thự, liền kề</span></li>
                                            <li vl="163"><span>Nhà mặt phố</span></li>
                                        </ul>
                                    </li>
                                    <li vl="361"><span>Các loại đất bán</span>
                                        <ul>
                                            <li vl="40"><span>Đất nền dự án</span></li>
                                            <li vl="283"><span>Bán đất</span></li>
                                        </ul>
                                    </li>
                                    <li vl="44"><span>Trang trại, khu nghỉ dưỡng</span></li>
                                    <li vl="45"><span>Kho, nhà xưởng</span></li>
                                    <li vl="48"><span>Bất động sản khác</span></li>
                                </ul></div></div><div id="mCSB_3_scrollbar_vertical" class="mCSB_scrollTools mCSB_3_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: none;"><div class="mCSB_draggerContainer" style=""><div id="mCSB_3_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>
        </div>
        <div class="select-control city-control">
            <div class="select-control-label">
                <div class="dropbox-label">Khu vực</div>
                <div class="custom-value city-label">Toàn quốc</div>
            </div>
            <div class="select-context custom-dropbox advance-select-options hiding" id="divCity" style="display: none;">
                <div class="city-root hiding"></div>
                <input type="text" id="select-context-content" class="select-text-content" placeholder="Tìm Tỉnh/ Thành phố">
                <input type="hidden" name="CityCode" id="hdCboCity" value="CN">
                <input type="hidden" name="DistrictId" id="hdCboDistrict" value="">
                <div id="divCityOptions" class="custom-scroll mCustomScrollbar _mCS_4 mCS_no_scrollbar" hddvalue="hdCboCity,hdCboDistrict" defaulttext="Toàn quốc" ddlid="divCity" currlevel="1" style=""><div id="mCSB_4" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" tabindex="0" style="max-height: 0px;"><div id="mCSB_4_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position: relative; top: 0px; left: 0px;" dir="ltr">
                    <ul class="advance-options"><li vl="CN" class="advance-options adv-arrow active">Toàn quốc</li><li vl="SG" class="advance-options adv-arrow">Hồ Chí Minh</li><li vl="HN" class="advance-options adv-arrow">Hà Nội</li><li vl="DDN" class="advance-options adv-arrow">Đà Nẵng</li><li vl="BD" class="advance-options adv-arrow">Bình Dương</li><li vl="DNA" class="advance-options adv-arrow">Đồng Nai</li><li vl="KH" class="advance-options adv-arrow">Khánh Hòa</li><li vl="HP" class="advance-options adv-arrow">Hải Phòng</li><li vl="LA" class="advance-options adv-arrow">Long An</li><li vl="QNA" class="advance-options adv-arrow">Quảng Nam</li><li vl="VT" class="advance-options adv-arrow">Bà Rịa Vũng Tàu</li><li vl="DDL" class="advance-options adv-arrow">Đắk Lắk</li><li vl="CT" class="advance-options adv-arrow">Cần Thơ</li><li vl="BTH" class="advance-options adv-arrow">Bình Thuận  </li><li vl="LDD" class="advance-options adv-arrow">Lâm Đồng</li><li vl="TTH" class="advance-options adv-arrow">Thừa Thiên Huế</li><li vl="KG" class="advance-options adv-arrow">Kiên Giang</li><li vl="BN" class="advance-options adv-arrow">Bắc Ninh</li><li vl="QNI" class="advance-options adv-arrow">Quảng Ninh</li><li vl="TH" class="advance-options adv-arrow">Thanh Hóa</li><li vl="NA" class="advance-options adv-arrow">Nghệ An</li><li vl="HD" class="advance-options adv-arrow">Hải Dương</li><li vl="GL" class="advance-options adv-arrow">Gia Lai</li><li vl="BP" class="advance-options adv-arrow">Bình Phước</li><li vl="HY" class="advance-options adv-arrow">Hưng Yên</li><li vl="BDD" class="advance-options adv-arrow">Bình Định</li><li vl="TG" class="advance-options adv-arrow">Tiền Giang</li><li vl="TB" class="advance-options adv-arrow">Thái Bình</li><li vl="BG" class="advance-options adv-arrow">Bắc Giang</li><li vl="HB" class="advance-options adv-arrow">Hòa Bình</li><li vl="AG" class="advance-options adv-arrow">An Giang</li><li vl="VP" class="advance-options adv-arrow">Vĩnh Phúc</li><li vl="TNI" class="advance-options adv-arrow">Tây Ninh</li><li vl="TN" class="advance-options adv-arrow">Thái Nguyên</li><li vl="LCA" class="advance-options adv-arrow">Lào Cai</li><li vl="NDD" class="advance-options adv-arrow">Nam Định</li><li vl="QNG" class="advance-options adv-arrow">Quảng Ngãi</li><li vl="BTR" class="advance-options adv-arrow">Bến Tre</li><li vl="DNO" class="advance-options adv-arrow">Đắk Nông</li><li vl="CM" class="advance-options adv-arrow">Cà Mau</li><li vl="VL" class="advance-options adv-arrow">Vĩnh Long</li><li vl="NB" class="advance-options adv-arrow">Ninh Bình</li><li vl="PT" class="advance-options adv-arrow">Phú Thọ</li><li vl="NT" class="advance-options adv-arrow">Ninh Thuận</li><li vl="PY" class="advance-options adv-arrow">Phú Yên</li><li vl="HNA" class="advance-options adv-arrow">Hà Nam</li><li vl="HT" class="advance-options adv-arrow">Hà Tĩnh</li><li vl="DDT" class="advance-options adv-arrow">Đồng Tháp</li><li vl="ST" class="advance-options adv-arrow">Sóc Trăng</li><li vl="KT" class="advance-options adv-arrow">Kon Tum</li><li vl="QB" class="advance-options adv-arrow">Quảng Bình</li><li vl="QT" class="advance-options adv-arrow">Quảng Trị</li><li vl="TV" class="advance-options adv-arrow">Trà Vinh</li><li vl="HGI" class="advance-options adv-arrow">Hậu Giang</li><li vl="SL" class="advance-options adv-arrow">Sơn La</li><li vl="BL" class="advance-options adv-arrow">Bạc Liêu</li><li vl="YB" class="advance-options adv-arrow">Yên Bái</li><li vl="TQ" class="advance-options adv-arrow">Tuyên Quang</li><li vl="DDB" class="advance-options adv-arrow">Điện Biên</li><li vl="LCH" class="advance-options adv-arrow">Lai Châu</li><li vl="LS" class="advance-options adv-arrow">Lạng Sơn</li><li vl="HG" class="advance-options adv-arrow">Hà Giang</li><li vl="BK" class="advance-options adv-arrow">Bắc Kạn</li><li vl="CB" class="advance-options adv-arrow">Cao Bằng</li></ul>
                </div><div id="mCSB_4_scrollbar_vertical" class="mCSB_scrollTools mCSB_4_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: none;"><div class="mCSB_draggerContainer" style=""><div id="mCSB_4_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>
            </div>
        </div>

        <div class="select-control price-control">
            <div class="select-control-label">
                <div class="dropbox-label">Mức giá</div>
                <div class="custom-value">Tất cả</div>
            </div>
            <div id="divPrice" class="select-area-option custom-dropbox hiding advance-select-options" style="display: none;">
                <input type="hidden" id="hdCboPrice" name="PriceId" value="-1">
                <div class="pad-bot-40 pad-top-8">
                    <div class="price-slider-range slider-range">
                        <input id="txtPriceMinValue" name="MinPrice" placeholder="Từ" class="min-value advance-options" maxlength="6" numbersonly="true" decimal="true" type="text">
                        <span><img src="/assets/image/ic_arrow_left.png"></span>
                        <input id="txtPriceMaxValue" name="MaxPrice" placeholder="Đến" class="max-value advance-options" maxlength="6" numbersonly="true" decimal="true" type="text">
                        <div class="clearfix pad-bot-16"></div>
                        <div id="price-slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header" style="left: 0%; width: 100%;"></div><a href="https://batdongsan.com.vn/ban-dat-nen-du-an-pho-nam-cao-phuong-phuoc-tan-prj-bien-hoa-new-city/khach-ket-tien-can-ban-nhanh-lo-dt-5-x-20-6-x-20-12-x-20-da-nhan-so-pr27748072#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"></a><a href="https://batdongsan.com.vn/ban-dat-nen-du-an-pho-nam-cao-phuong-phuoc-tan-prj-bien-hoa-new-city/khach-ket-tien-can-ban-nhanh-lo-dt-5-x-20-6-x-20-12-x-20-da-nhan-so-pr27748072#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 100%;"></a></div>
                    </div>
                    <div class="custom-scroll mCustomScrollbar _mCS_5 mCS_no_scrollbar" id="divPriceOptions" minvalue="txtPriceMinValue" maxvalue="txtPriceMaxValue" unit="money" lblmin="lblPriceMin" lblmax="lblPriceMax" hddvalue="hdCboPrice" defaulttext="Tất cả" ddlid="divPrice" currlevel="1" style=""><div id="mCSB_5" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" tabindex="0" style="max-height: 0px;"><div id="mCSB_5_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position: relative; top: 0px; left: 0px;" dir="ltr">
                        <ul class="advance-options"><li vl="-1" class="advance-options active">Tất cả</li><li vl="0" class="advance-options">Thỏa thuận</li><li vl="1" class="advance-options">&lt; 500 triệu</li><li vl="2" class="advance-options">500<span class="arrow-icon"></span>800 triệu</li><li vl="3" class="advance-options">800 triệu<span class="arrow-icon"></span>1 tỷ</li><li vl="4" class="advance-options">1<span class="arrow-icon"></span>2 tỷ</li><li vl="5" class="advance-options">2<span class="arrow-icon"></span>3 tỷ</li><li vl="6" class="advance-options">3<span class="arrow-icon"></span>5 tỷ</li><li vl="7" class="advance-options">5<span class="arrow-icon"></span>7 tỷ</li><li vl="8" class="advance-options">7<span class="arrow-icon"></span>10 tỷ</li><li vl="9" class="advance-options">10<span class="arrow-icon"></span>20 tỷ</li><li vl="10" class="advance-options">20<span class="arrow-icon"></span>30 tỷ</li><li vl="11" class="advance-options">&gt; 30 tỷ</li></ul>
                    </div><div id="mCSB_5_scrollbar_vertical" class="mCSB_scrollTools mCSB_5_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: none;"><div class="mCSB_draggerContainer" style=""><div id="mCSB_5_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>
                    <div class="select-reset price-reset">Đặt lại</div>
                </div>

            </div>
        </div>
        <div class="select-control area-control">
            <div class="select-control-label">
                <div class="dropbox-label">Diện tích</div>
                <div class="custom-value">Tất cả</div>
            </div>
            <div id="divArea" class="select-area-option custom-dropbox hiding advance-select-options" style="display: none;">
                <input type="hidden" id="hdCboArea" name="AreaId" value="-1">
                <div class="pad-bot-40 pad-top-8">
                    <div class="area-slider-range slider-range">
                        <input id="txtAreaMinValue" name="MinArea" placeholder="Từ" class="min-value" maxlength="6" numbersonly="true" decimal="true" type="text">
                        <span><img src="/assets/image/ic_arrow_left.png"></span>
                        <input id="txtAreaMaxValue" name="MaxArea" placeholder="Đến" class="max-value" maxlength="6" numbersonly="true" decimal="true" type="text">
                        <div class="clearfix pad-bot-16"></div>
                        <div id="area-slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header" style="left: 0%; width: 100%;"></div><a href="https://batdongsan.com.vn/ban-dat-nen-du-an-pho-nam-cao-phuong-phuoc-tan-prj-bien-hoa-new-city/khach-ket-tien-can-ban-nhanh-lo-dt-5-x-20-6-x-20-12-x-20-da-nhan-so-pr27748072#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"></a><a href="https://batdongsan.com.vn/ban-dat-nen-du-an-pho-nam-cao-phuong-phuoc-tan-prj-bien-hoa-new-city/khach-ket-tien-can-ban-nhanh-lo-dt-5-x-20-6-x-20-12-x-20-da-nhan-so-pr27748072#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 100%;"></a></div>
                    </div>
                    <div class="custom-scroll mCustomScrollbar _mCS_6 mCS_no_scrollbar" id="divAreaOptions" minvalue="txtAreaMinValue" maxvalue="txtAreaMaxValue" unit="area" hddvalue="hdCboArea" defaulttext="Tất cả" ddlid="divArea" currlevel="1" style=""><div id="mCSB_6" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" tabindex="0" style="max-height: 0px;"><div id="mCSB_6_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position: relative; top: 0px; left: 0px;" dir="ltr">
                        <ul>
                            <li vl="-1" class="advance-options active">Tất cả</li>
                            <li vl="1" class="advance-options">0<span class="arrow-icon"></span>30 m²</li>
                            <li vl="2" class="advance-options">30 m²<span class="arrow-icon"></span>50 m²</li>
                            <li vl="3" class="advance-options">50 m²<span class="arrow-icon"></span>80 m²</li>
                            <li vl="4" class="advance-options">80 m²<span class="arrow-icon"></span>100 m²</li>
                            <li vl="5" class="advance-options">100 m²<span class="arrow-icon"></span>150 m²</li>
                            <li vl="6" class="advance-options">150 m²<span class="arrow-icon"></span>200 m²</li>
                            <li vl="7" class="advance-options">200 m²<span class="arrow-icon"></span>250 m²</li>
                            <li vl="8" class="advance-options">250 m²<span class="arrow-icon"></span>300 m²</li>
                            <li vl="9" class="advance-options">300 m²<span class="arrow-icon"></span>500 m²</li>
                            <li vl="10" class="advance-options">&gt;= 500 m²</li>
                        </ul>
                    </div><div id="mCSB_6_scrollbar_vertical" class="mCSB_scrollTools mCSB_6_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: none;"><div class="mCSB_draggerContainer" style=""><div id="mCSB_6_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>
                    <div class="select-reset area-reset">Đặt lại</div>
                </div>

            </div>
        </div>
        <div class="select-control project-control" aria-label="Bạn hãy chọn tỉnh thành trước" data-microtip-position="top" role="tooltip">
            <div class="select-control-label">
                <div class="dropbox-label">Dự án</div>
                <div class="custom-value custom-value-project">Tất cả</div>
            </div>
            <div id="divProjects" class="select-context custom-dropbox advance-select-options hiding" style="display: none;">
                <input type="hidden" id="hdCboProjects" name="ProjectId" value="0">
                <input type="text" class="select-text-content" value="" placeholder="Tìm Dự án">
                <div id="divProjectsOptions" class="custom-scroll mCustomScrollbar _mCS_7 mCS_no_scrollbar" hddvalue="hdCboProjects" defaulttext="Tất cả" ddlid="divProjects" currlevel="1" style=""><div id="mCSB_7" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" tabindex="0" style="max-height: 0px;"><div id="mCSB_7_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position: relative; top: 0px; left: 0px;" dir="ltr">
                    <ul class="advance-options"><li vl="0" class="advance-options active">Tất cả</li></ul>
                </div><div id="mCSB_7_scrollbar_vertical" class="mCSB_scrollTools mCSB_7_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: none;"><div class="mCSB_draggerContainer" style=""><div id="mCSB_7_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>
            </div>
        </div>
        <div class="select-control filter-control">
            <div class="select-control-label" aria-label="Tìm kiếm nâng cao" data-microtip-position="top" role="tooltip">
                Lọc thêm<span class="filter-info"><img src="/assets/image/ic_filter.svg" class="icon-filter"><span class="icon-number" style="display: none;"></span></span>
            </div>
            <input type="hidden" id="hdbFilter" value="0">
            <div class="select-filter-dropbox custom-dropbox advance-select-options hiding" style="display: none; height: 516px;">
                <div class="custom-scroll-outside mCustomScrollbar _mCS_9 mCS_no_scrollbar" style="position: relative; overflow: visible; max-height: 460px;"><div id="mCSB_9" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_outside" tabindex="0" style="max-height: 0px;"><div id="mCSB_9_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position: relative; top: 0px; left: 0px;" dir="ltr">
                    <div class="search-bar-filter"></div>

                    <div class="relative-control select-context">
                        <label class="mar-top-8">Phường/ Xã</label>
                        <div id="divWard" class="relative-control" aria-label="Bạn hãy chọn quận huyện trước" data-microtip-position="top" role="tooltip">
                            <div class="filter-label"><span>Tất cả phường, xã</span><i class="icon-arrow icon-arrow-down"></i></div>
                            <input type="hidden" id="hdCboWard" name="WardId" value="0">
                            <input type="text" placeholder="Tìm Phường, Xã" value="" class="select-text-content icon-arrow-up hiding" style="display: none;">
                        </div>
                    </div>

                    <div class="relative-control select-context">
                        <label>Đường/ Phố</label>
                        <div id="divStreet" class="relative-control" aria-label="Bạn hãy chọn tỉnh thành trước" data-microtip-position="top" role="tooltip">
                            <div class="filter-label"><span>Tất cả đường, phố</span><i class="icon-arrow icon-arrow-down"></i></div>
                            <input type="hidden" id="hdCboStreet" name="StreetId" value="0">
                            <input type="text" placeholder="Tìm Đường/ Phố" value="" class="select-text-content hiding icon-arrow-up" style="display: none;">
                        </div>
                    </div>

                    <div id="divBedRoom" class="select-bedroom ul-new clearfix">
                        <label>Phòng ngủ</label>
                        <input type="hidden" id="hdCboBedRoom" name="RoomId" value="-1">
                        <div id="divBedRoomOptions" hddvalue="hdCboBedRoom" ddlid="divBedRoom" currlevel="1">
                            <ul>
                                <li vl="-1" class="advance-options">Tất cả</li>
                                <li vl="1" class="advance-options">1+</li>
                                <li vl="2" class="advance-options">2+</li>
                                <li vl="3" class="advance-options">3+</li>
                                <li vl="4" class="advance-options">4+</li>
                            </ul>
                        </div>
                    </div>

                    <div class="relative-control select-context">
                        <label>Hướng nhà</label>
                        <div id="divHomeDirection" class="relative-control">
                            <div class="filter-label"><span>Tất cả hướng nhà</span><i class="icon-arrow icon-arrow-down"></i></div>
                            <input type="text" placeholder="Tìm hướng nhà" value="Tất cả hướng nhà" class="select-text-content hiding icon-arrow-up" style="display: none;">
                            <input type="hidden" id="hdCboHomeDirection" name="DirectionId" value="">
                        </div>
                    </div>

                    <div id="divMedia" class="select-media-type ul-new clearfix">
                        <label>Loại tin đăng</label>
                        <input type="hidden" id="hdCboMedia" name="TabIndex" value="0">
                        <div id="divMediaOptions" hddvalue="hdCboMedia" ddlid="divMedia" currlevel="1">
                            <ul>
                                <li vl="0">Tất cả</li>
                                <li vl="1">Hình ảnh</li>
                                <li vl="2">Video</li>
                                <li vl="4">3D &amp; 360°</li>
                            </ul>
                        </div>
                    </div>
                </div></div><div id="mCSB_9_scrollbar_vertical" class="mCSB_scrollTools mCSB_9_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: none;"><div class="mCSB_draggerContainer" style=""><div id="mCSB_9_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div>
                <div class="select-reset filter-reset">Đặt lại</div>
            </div>
            <!--khuvu loc them -->
            <div id="divWardOptions" ddlid="divWard" class="fly-options custom-dropbox custom-dropbox hiding  advance-select-options mCustomScrollbar _mCS_1 mCS_no_scrollbar" hddvalue="hdCboWard" isfilter="true" currlevel="1" style="display: none;"><div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: 48px;" tabindex="0"><div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position: relative; top: 0px; left: 0px;" dir="ltr">
                <ul class="advance-options"><li vl="0" class="advance-options active">Tất cả phường, xã</li></ul>
            </div><div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: none;"><div class="mCSB_draggerContainer" style=""><div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>

            <div id="divStreetOptions" ddlid="divStreet" class="fly-options custom-dropbox custom-dropbox hiding advance-select-options mCustomScrollbar _mCS_2 mCS_no_scrollbar" hddvalue="hdCboStreet" isfilter="true" currlevel="1" style="display: none;"><div id="mCSB_2" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" tabindex="0" style="max-height: 48px;"><div id="mCSB_2_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position: relative; top: 0px; left: 0px;" dir="ltr">
                <ul class="advance-options"><li vl="0" class="advance-options active">Tất cả đường, phố</li></ul>
            </div><div id="mCSB_2_scrollbar_vertical" class="mCSB_scrollTools mCSB_2_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: none;"><div class="mCSB_draggerContainer" style=""><div id="mCSB_2_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>

            <div id="divHomeDirectionOptions" ddlid="divHomeDirection" class="hiding fly-options custom-dropbox custom-scroll advance-select-options mCustomScrollbar _mCS_8 mCS_no_scrollbar" hddvalue="hdCboHomeDirection" isfilter="true" currlevel="1" style="display: none;"><div id="mCSB_8" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" tabindex="0" style="max-height: 308px;"><div id="mCSB_8_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position: relative; top: 0px; left: 0px;" dir="ltr">
                <ul class="advance-options">
                    <li vl="-1" class="advance-options active">Tất cả hướng nhà</li>
                    <li vl="1" class="advance-options">Đông</li>
                    <li vl="2" class="advance-options">Tây</li>
                    <li vl="3" class="advance-options">Nam</li>
                    <li vl="4" class="advance-options">Bắc</li>
                    <li vl="5" class="advance-options">Đông-Bắc</li>
                    <li vl="6" class="advance-options">Tây-Bắc</li>
                    <li vl="7" class="advance-options">Tây-Nam</li>
                    <li vl="8" class="advance-options">Đông-Nam</li>
                </ul>
            </div><div id="mCSB_8_scrollbar_vertical" class="mCSB_scrollTools mCSB_8_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: none;"><div class="mCSB_draggerContainer" style=""><div id="mCSB_8_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>
        </div>


        <input type="button" id="btnSearch" class="btn-blue-7" value="Tìm kiếm">
        <div id="link-reset" aria-label="Xóa tiêu chí lọc" data-microtip-position="bottom" role="tooltip"><img src="/assets/image/ic_reset.svg"></div>
    </div>
</form>
<script type="text/javascript">
    ///<reference path='../../../../../../../DVG.BDS.WebApp.FrontEnd.StaticFiles/wwwroot/js/Common/FrontEnd.BoxSearch.js' />
    (function getData() {
        if (window.FrontEnd && window.FrontEnd.BoxSearch) {
            var boxSearchServices = new FrontEnd.BoxSearch({
                boxSearchDataCacheKey: 'BoxSearchData',
                boxSearchDataCacheTime: 120,
                getDataForBoxSearchUrl: '/Systems/Home/GetDataForBoxSearch'
            })

            boxSearchServices.GetData().then(function (data) {
                (function callJQuery() {
                    if (window.FrontEnd && window.FrontEnd.Product && window.FrontEnd.Product.BoxProductSearchBinnova) {
                        new FrontEnd.Product.BoxProductSearchBinnova({
                            cities: data.cities,
                            prices: data.priceLevels,
                            url: '/Product/ProductSearch',
                            serverCss: 'https://staticfile.batdongsan.com.vn',
                            model: {
                                type: 38,
                                categoryId: 0,
                                cityCode: 'CN',
                                districtId: 0,
                                projectId: 0,
                                priceId: -1,
                                maxPrice: !!'' ? +'' : undefined,
                                minPrice: !!'' ? +'' : undefined,
                                areaId: -1,
                                maxArea: !!'' ? +'' : undefined,
                                minArea: !!'' ? +'' : undefined,
                                roomId: -1,
                                wardId: -1 < 0 ? 0 : -1,
                                streetId: (-1 < 0 ? 0 : -1),
                                directionId: 0,
                                tabIndex: 0
                            },
                            maxSearchingHistoriesLength: 20,
                            syncTimeSearchingHistories: 5,
                            syncSearchingHistoriesUrl: '/Product/ProductSearch/SyncSearchingHistories',
                            removeSearchingHistoryUrl: '/Product/ProductSearch/RemoveSearchingHistory'
                        });
                    } else {
                        setTimeout(callJQuery, 100);
                    }
                })();
            })
        } else {
            setTimeout(getData, 100);
        }
    })();
</script>

        <div class="popupMarking  save" style="display: none">
            <img src="/assets/image/ic_unsave.svg">
            <span> Lưu tin thành công</span>
        </div>
        <div class="popupMarking  unsave" style="display: none">
            <img src="/assets/image/ic_save.svg">
            <span> Đã bỏ lưu tin</span>
        </div>




<!-- Product-detail-->
<div class="main-container clearfix">
    <div class="main-left">



        <section class="product-detail">
            <!--start slide-product-->
            <!--end slide-product-->
            <!--start description-->
            

    <div class="slide-product" tabindex="0">
        <div class="swiper-container gallery-top swiper-container-initialized swiper-container-horizontal">
            <ul class="swiper-wrapper list-unstyled row" style="transform: translate3d(0px, 0px, 0px);">
                                                                        <li class="swiper-slide swiper-slide-active" data-filter="image" data-index="0" style="width: 840px; margin-right: 10px;">
                            <a onmouseover="this.style.cursor=&#39;pointer&#39;" style="background-image: url('{!! $products->link !!}'); cursor: pointer;">
                            </a>
                            <div class="ioverlay" style="display: none;">
                                <img class="img-responsive" onmouseover="this.style.cursor=&#39;pointer&#39;" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src-preloading="https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image.png" src="{!! $products->link !!}" is-lazy-image="true" lazy-id="0">
                            </div>
                        </li>
                        <li class="swiper-slide swiper-slide-next" data-filter="image" data-index="1" style="width: 840px; margin-right: 10px;">
                            <a onmouseover="this.style.cursor=&#39;pointer&#39;" style="background-image:url('{!! $products->link !!}')">
                            </a>
                            <div class="ioverlay">
                                <img class="img-responsive" onmouseover="this.style.cursor=&#39;pointer&#39;" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src-preloading="{!! $products->link !!}" src="{!! $products->link !!}" src-lazy="{!! $products->link !!}" is-lazy-image="true" lazy-id="1">
                            </div>
                        </li>
                        <li class="swiper-slide" data-filter="image" data-index="2" style="width: 840px; margin-right: 10px;">
                            <a onmouseover="this.style.cursor=&#39;pointer&#39;" style="background-image:url(&#39;https://file4.batdongsan.com.vn/resize/745x510/2020/11/11/20201111095817-45e1_wm.jpg&#39;)">
                            </a>
                            <div class="ioverlay">
                                <img class="img-responsive" onmouseover="this.style.cursor=&#39;pointer&#39;" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src-preloading="https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image.png" src="/assets/image/lazy-preview-image.png" src-lazy="https://file4.batdongsan.com.vn/resize/745x510/2020/11/11/20201111095817-45e1_wm.jpg" is-lazy-image="true" lazy-id="2">
                            </div>
                        </li>
            </ul>
                <!-- Add Pagination -->
                <div class="swiper-pagination swiper-pagination-fraction"><span class="swiper-pagination-current">1</span> / <span class="swiper-pagination-total">3</span></div>
                <!-- Add Arrows -->
                <div class="swiper-button-next slide-next1" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false"><img src="/assets/image/ic_carousel_caret_right.png"> </div>
                <div class="swiper-button-prev slide-prev1 swiper-button-disabled" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="true"><img src="/assets/image/ic_carousel_caret_left.png"></div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
        <div class="swiper-container gallery-thumbs swiper-container-initialized swiper-container-horizontal swiper-container-free-mode swiper-container-thumbs">
            <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                                                                        <div class="swiper-slide swiper-slide-visible swiper-slide-active swiper-slide-thumb-active" style="margin-right: 8px;">
                            <img onmouseover="this.style.cursor=&#39;pointer&#39;" alt="{!! $products->title !!}" title="{!! $products->title !!}" error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="/assets/image/20201111095750-3277_wm(1).jpg" is-lazy-image="true" lazy-id="3">
                        </div>
                        <div class="swiper-slide swiper-slide-visible swiper-slide-next" style="margin-right: 8px;">
                            <img onmouseover="this.style.cursor=&#39;pointer&#39;" alt="{!! $products->title !!}" error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="/assets/image/20201111095757-9bf4_wm.jpg" is-lazy-image="true" lazy-id="4">
                        </div>
                        <div class="swiper-slide swiper-slide-visible" style="margin-right: 8px;">
                            <img onmouseover="this.style.cursor=&#39;pointer&#39;" alt="{!! $products->title !!}" title="{!! $products->title !!}" error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="/assets/image/20201111095817-45e1_wm.jpg" is-lazy-image="true" lazy-id="5">
                        </div>
            </div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
        <!-- Initialize Swiper -->
    </div>
    <!--slide-product-->
    <div id="popup">
        <div class="icon-close"></div>
        <div class="popup-choice pad-16">
            <ul>
                                                    <li data-filter="image">Ảnh</li>
                <li data-filter="map">Bản đồ</li>
            </ul>
        </div>
            <div class="popup-pagination">
                <div class="swiper-pagination-full swiper-pagination-fraction"><span class="swiper-pagination-current">1</span> / <span class="swiper-pagination-total">3</span></div>
                <div class="swiper-pagination-full-360 swiper-pagination-fraction hidden">
                    <span class="swiper-pagination-current">0</span> / <span class="swiper-pagination-total">0</span>
                </div>
            </div>
        <div class="content">
            <div class="slide-content slide-3d">
                <iframe frameborder="0" width="840" height="473" scrolling="no" src="/assets/image/saved_resource(6).html" allowfullscreen=""></iframe>
            </div>
            <div class="slide-content slide-360 group-img360" id="photo360">
                <div class="view-full">
                    <div class="view-img360">
                        <div id="divPhoto360Active" class="show-img">
                            <div class="top-controls">
                                <span id="btnCloseFullscreen" class="close-popup360"></span>
                                <ul class="nav-img360">
                                    <li>
                                        <span class="nav" id="zoom-in">
                                            <i class="icon360-zoomin"></i>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="nav" id="zoom-out">
                                            <i class="icon360-zoomout"></i>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="nav" id="pan-left">
                                            <i class="icon360-prev"></i>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="nav" id="pan-right">
                                            <i class="icon360-next"></i>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="nav" id="pan-up">
                                            <i class="icon360-up"></i>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="nav" id="pan-down">
                                            <i class="icon360-down"></i>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="nav" id="auto-rotate">
                                            <i class="icon360-reload"></i>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="nav" id="fullscreen">
                                            <i class="icon360-viewfull"></i>
                                        </span>
                                    </li>
                                </ul>
                            <div class="control-popup360"><span class="prev-thumb360"></span><div class="thumb-img360 swiper-container"><ul class="list-thumb360 swiper-wrapper">null</ul></div><span class="next-thumb360"></span></div></div>
                        </div>
                        <div id="titImg360" class="tit-img"></div>
                    </div>
                </div>

            </div>
            <div class="slide-content slide-image">

                <div class="swiper-container gallery-top-full swiper-container-initialized swiper-container-horizontal">
                    <ul class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                                                        <li class="swiper-slide swiper-slide-active" style="width: 1576px;">
                                    <img alt="{!! $products->title !!}" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src-preloading="https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image.png" src="/assets/image/lazy-preview-image.png" src-lazy="https://file4.batdongsan.com.vn/2020/11/11/20201111095750-3277_wm.jpg" is-lazy-image="true" lazy-id="6">
                                </li>
                                <li class="swiper-slide swiper-slide-next" style="width: 1576px;">
                                    <img alt="{!! $products->title !!}" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src-preloading="https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image.png" src="/assets/image/lazy-preview-image.png" src-lazy="https://file4.batdongsan.com.vn/2020/11/11/20201111095757-9bf4_wm.jpg" is-lazy-image="true" lazy-id="7">
                                </li>
                                <li class="swiper-slide" style="width: 1576px;">
                                    <img alt="{!! $products->title !!}" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src-preloading="https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image.png" src="/assets/image/lazy-preview-image.png" src-lazy="https://file4.batdongsan.com.vn/2020/11/11/20201111095817-45e1_wm.jpg" is-lazy-image="true" lazy-id="8">
                                </li>
                    </ul>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false"></div>
                    <div class="swiper-button-prev swiper-button-disabled" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="true"></div>
                <div class="swiper-container gallery-thumbs-full swiper-container-initialized swiper-container-horizontal swiper-container-thumbs" style="max-width: 360px;">
                    <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                                                        <div class="swiper-slide swiper-slide-visible swiper-slide-active swiper-slide-thumb-active" style="margin-right: 8px;">
                                    <img alt="{!! $products->title !!}" title="{!! $products->title !!}" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src-preloading="https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image.png" src="/assets/image/lazy-preview-image.png" src-lazy="https://file4.batdongsan.com.vn/2020/11/11/20201111095750-3277_wm.jpg" is-lazy-image="true" lazy-id="9">
                                </div>
                                <div class="swiper-slide swiper-slide-visible swiper-slide-next" style="margin-right: 8px;">
                                    <img alt="{!! $products->title !!}" title="{!! $products->title !!}" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src-preloading="https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image.png" src="/assets/image/lazy-preview-image.png" src-lazy="https://file4.batdongsan.com.vn/2020/11/11/20201111095757-9bf4_wm.jpg" is-lazy-image="true" lazy-id="10">
                                </div>
                                <div class="swiper-slide swiper-slide-visible" style="margin-right: 8px;">
                                    <img alt="{!! $products->title !!}" title="{!! $products->title !!}" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src-preloading="https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image.png" src="/assets/image/lazy-preview-image.png" src-lazy="https://file4.batdongsan.com.vn/2020/11/11/20201111095817-45e1_wm.jpg" is-lazy-image="true" lazy-id="11">
                                </div>
                    </div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            </div>
            <div class="slide-content slide-map"></div>
        </div>
    </div>
    <script type="text/javascript">
        (function callJQuery() {
            if (window.FrontEnd && window.FrontEnd.Product && window.FrontEnd.Product.Details && window.FrontEnd.Product.Details.MediaSlide) {
                new FrontEnd.Product.Details.MediaSlide({})
            }
            else {
                setTimeout(callJQuery, 100);
            }
        })();
    </script>

<div class="breadcrumb all-grey-7 link-hover-blue">
    <a href="https://batdongsan.com.vn/ban-dat-nen-du-an" level="1" title="Bán đất nền dự án tại Việt Nam">Bán</a><span>/</span><a href="https://batdongsan.com.vn/ban-dat-nen-du-an-dong-nai" level="2" title="Bán đất nền dự án tại Đồng Nai">Đồng Nai</a><span>/</span><a href="https://batdongsan.com.vn/ban-dat-nen-du-an-bien-hoa-dna" level="3" title="Bán đất nền dự án tại Thành phố Biên Hòa">Biên Hòa</a><span>/</span><a href="https://batdongsan.com.vn/ban-dat-nen-du-an-bien-hoa-new-city" level="4" title="Bán đất nền dự án tại Biên Hòa New City">Đất nền dự án tại Biên Hòa New City</a>
</div>
<script type="text/javascript">
    (function callJQuery() {
        if (window.FrontEnd && window.FrontEnd.Product && window.FrontEnd.Product.Breadcrumbs) {
            new FrontEnd.Product.Breadcrumbs({});
        } else {
            setTimeout(callJQuery, 100);
        }
    })();
</script>

<div class="description" id="product-detail-web" uid="649852">
    <h1 class="tile-product"> {!! $products->title !!}</h1>
    <div class="short-detail">
        Dự án Biên Hòa New City, Phố Nam Cao, Phường Phước Tân, Biên Hòa, Đồng Nai
    </div>
    <div class="divide">&nbsp;</div>
    <div class="short-detail-wrap">
        <ul class="short-detail-2 clearfix pad-16">
            <li><span class="sp1">Mức giá:</span><span class="sp2">{!! $products->price !!} triệu/tháng</span></li>
                <li><span class="sp1">Diện tích:</span><span class="sp2">{!! $products->area !!} m²</span></li>
                    </ul>
        <div class="repost">
            <span class="product-share">Chia sẻ <span class="ic_share">&nbsp;</span></span>
            <div class="box-share hidden">
                <ul>
                    <li>
                        <a id="facebook" target="_blank" rel="nofollow" href="https://www.facebook.com/sharer/sharer.php?u=https://batdongsan.com.vn/ban-dat-nen-du-an-pho-nam-cao-phuong-phuoc-tan-prj-bien-hoa-new-city/khach-ket-tien-can-ban-nhanh-lo-dt-5-x-20-6-x-20-12-x-20-da-nhan-so-pr27748072&amp;t=Kh%C3%A1ch%20k%E1%BA%B9t%20ti%E1%BB%81n%20c%E1%BA%A7n%20b%C3%A1n%20nhanh%20l%C3%B4%20%C4%91%E1%BA%A5t%20Bi%C3%AAn%20H%C3%B2a%20New%20City,%20DT%205%20x%2020m,%206%20x%2020m,%2012%20x%2020m,%20%C4%91%C3%A3%20nh%E1%BA%ADn%20s%E1%BB%95"><img src="/assets/image/ic_facebook.png">Facebook</a>
                    </li>
                    <li>
                        <div class="zalo-share-button" data-href="" data-oaid="579745863508352884" data-layout="2" data-color="blue" data-customize="true"><img src="/assets/image/ic_zalo.png">Zalo<iframe frameborder="0" allowfullscreen="" scrolling="no" width="0px" height="0px" src="/assets/image/share.html" style="position: absolute;"></iframe></div>
                    </li>
                    <li>
                        <a id="copyLink"><img src="/assets/image/ic_link.png">Sao chép liên kết</a>
                    </li>
                </ul>
            </div>
            <span class="product-save iconSave" data-productid="27748072" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Kh&amp;#225;ch kẹt tiền cần b&amp;#225;n nhanh l&amp;#244; đất Bi&amp;#234;n H&amp;#242;a New City, DT 5 x 20m, 6 x 20m, 12 x 20m, đ&amp;#227; nhận sổ&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111095750-3277_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/11/20201111095750-3277_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="{!! $products->title !!}" data-price="1.45 tỷ" data-area="100 m²" data-pricesort="1450000000" data-areasort="100" data-room="" data-toilets="" data-address="Biên Hòa, Đồng Nai" data-description="Khách kẹt tiền muốn đẩy nhanh một số Lô Biên Hòa New City ở sân golf Long Thành. DT: 5 x 20m. 6 x 18m. 9 x 20 m. 12 x 20 m. Giá: 1.450 tỷ bao sang tên và ra sổ hồng. Tất cả đã có sổ hồng từng nền, mặ" data-duration="2 ngày trước" data-updatedtime="11/11/2020" data-datesort="11/11/2020 09:58:51" data-contactname="Thái Bá Lợi" data-contactmobile="0946722227" data-totalmedia="3" data-url="https://batdongsan.com.vn/ban-dat-nen-du-an-pho-nam-cao-phuong-phuoc-tan-prj-bien-hoa-new-city/khach-ket-tien-can-ban-nhanh-lo-dt-5-x-20-6-x-20-12-x-20-da-nhan-so-pr27748072" data-createbyuser="649852">Lưu tin <span class="ic_save">&nbsp;</span></span>
        </div>
    </div>

    <div class="divide">&nbsp;</div>
    <div class="detail-product">
        <div class="detail-1 pad-bot-16">
            <span class="title-detail">Thông tin mô tả</span>
            <div class="des-product" style="overflow: visible;">
                {!! $products->content !!}
            </div>
            <div class="box-view-more hidden">
                <div class="gradient">&nbsp;</div>
                <div class="view-more">Xem thêm<img src="/assets/image/ic_caret_down.svg"></div>
            </div>
            <div class="box-view-less hidden" style="display: block;">
                <div class="view-less">Thu gọn<img src="/assets/image/ic_caret_up.svg"></div>
            </div>
        </div>
        <div class="detail-2 pad-16">
            <span class="title-detail">Đặc điểm bất động sản</span>
            <div class="box-round-grey3">
                <div class="row-1"><span class="r1">Loại tin đăng:</span><span class="r2">{!! $products->name !!}</span></div>
                <div class="row-1"><span class="r1">Địa chỉ:</span><span class="r2">{!! $products->address !!}</span></div>
                                    <div class="row-1"><span class="r1">Số phòng ngủ:</span><span class="r2">{!! $products->number_of_bedroom !!}</span></div>
                                   <div class="row-1"><span class="r1">Số nhà vệ sinh:</span><span class="r2">{!! $products->number_of_restroom !!}</span></div>
                                   <div class="row-1"><span class="r1">Tầng số:</span><span class="r2">{!! $products->number_of_floor !!}</span></div>
                                </div>
        </div>
            {{-- <div class="detail-2 pad-16">
                <span class="title-detail">Thông tin dự án</span>
                <div class="box-round-grey3">
                    <div class="row-1">
                        <span class="r1">Tên dự án:</span><span class="r2">
                            Biên Hòa New City<span class="dot">·</span>
                            <a href="https://batdongsan.com.vn/khu-do-thi-moi-bien-hoa-dna/bien-hoa-new-city-pj3684" target="_blank" class="link">Xem dự án</a>
                        </span>
                    </div>
                                            <div class="row-1"><span class="r1">Quy mô:</span><span class="r2">3.625 lô biệt thự, liền kề</span></div>
                </div>
            </div> --}}
                <div class="detail-2 pad-16">
            <span class="title-detail">Xem trên bản đồ</span>
            <div class="map">
                <iframe width="100%" height="246px" ignore-lazy-loading="" frameborder="0" style="border:0" src="/assets/image/place.html" allowfullscreen=""></iframe>
                <div class="map-overlay"></div>
            </div>
        </div>
            <div class="tablet-box-contact clearfix">
        <h4 class="tablet-box-contact-title">Liên hệ</h4>
            <div class="avatar">
                        <span>L</span>
            </div>
        <div class="tablet-name">
            <div class="tablet-cell">
                    <div class="name" title="Thái Bá Lợi">
                        Thái Bá Lợi
                    </div>
                                    <div class="info">
                        <a href="https://batdongsan.com.vn/tin-rao-cung-nguoi-dang-nha-dat-ban-us649852">Xem thêm 1 tin khác</a>
                </div>
            </div>
        </div>
        <div class="btn-border-grey text-center"><a href="https://batdongsan.com.vn/ban-dat-nen-du-an-pho-nam-cao-phuong-phuoc-tan-prj-bien-hoa-new-city/khach-ket-tien-can-ban-nhanh-lo-dt-5-x-20-6-x-20-12-x-20-da-nhan-so-pr27748072#divSendContact" id="btnSendContact">Yêu cầu liên hệ lại</a></div>               
    </div>       

        <!--start product seo tag-->
            <div class="product-seo-tag">
                <h4 class="seo-tag-title">Tìm kiếm theo từ khóa</h4>
                <ul class="ul-round clearfix">
                        <li><a href="https://batdongsan.com.vn/tags/ban/ban-dat-nen-gan-cong-vien-xanh-tuoi-mat-thanh-pho-bien-hoa" title="Bán đất nền gần công viên xanh tươi mát Thành phố Biên Hòa">Bán đất nền gần công viên xanh tươi mát Thành phố Biên Hòa</a></li>
                        <li><a href="https://batdongsan.com.vn/tags/ban/ban-dat-nen-gan-cau-dong-nai-thanh-pho-bien-hoa" title="Bán đất nền gần Cầu Đồng Nai Thành phố Biên Hòa">Bán đất nền gần Cầu Đồng Nai Thành phố Biên Hòa</a></li>
                        <li><a href="https://batdongsan.com.vn/tags/ban/ban-dat-nen-bien-hoa-new-city" title="Bán đất nền Biên Hòa New City">Bán đất nền Biên Hòa New City</a></li>
                        <li><a href="https://batdongsan.com.vn/tags/ban/ban-dat-nen-thanh-pho-bien-hoa" title="Bán đất nền Thành phố Biên Hòa">Bán đất nền Thành phố Biên Hòa</a></li>
                        <li><a href="https://batdongsan.com.vn/tags/ban/ban-dat-nen-gan-cau-vam-thanh-pho-bien-hoa" title="Bán đất nền gần Cầu Vàm Thành phố Biên Hòa">Bán đất nền gần Cầu Vàm Thành phố Biên Hòa</a></li>
                </ul>
            </div>
        <!--end product seo tag-->
        <div class="divide">&nbsp;</div>
        <div class="product-config pad-16">
            <ul class="short-detail-2 list2 clearfix">
                <li><span class="sp1">Ngày đăng:</span><span class="sp3">{!! $products->created_at !!}</span></li>
                <li><span class="sp1">Ngày hết hạn:</span><span class="sp3">21/11/2020</span></li>
                <li><span class="sp1">Loại tin:</span><span class="sp3">Tin Vip đặc biệt</span></li>
                <li><span class="sp1">Mã tin:</span><span class="sp3">27748072</span></li>
            </ul>
            <div class="repost"><a id="report">Báo cáo<span class="ic_report">&nbsp;</span></a></div>
            <div class="pl-popup fb-popup" id="popup_feedback" style="display: none;">
    <div class="pl-popup-title fb-popup">
        <span class="fb-popup">Tin rao có các thông tin không đúng:</span>
        <div id="pl-popup-close" class="fb-popup">X</div>
    </div>
    <div class="pl-popup-tab fb-popup">
        <div class="button current fb-popup" rel="info">Tin rao</div>
        <div class="button fb-popup" rel="map">Bản đồ</div>
        <div class="pl-popup-tab-content tab-info fb-popup">
            <label for="info-1" class="fb-popup">
                <input type="checkbox" id="info-1" class="fb-popup" value="Địa chỉ của bất động sản">Địa chỉ của bất động sản
            </label>
            <label for="info-2" class="fb-popup">
                <input type="checkbox" id="info-2" class="fb-popup" value=" Các thông tin về đặc điểm: giá, diện tích, mô tả ....">Các thông tin về đặc điểm: giá, diện tích, mô tả ....
            </label>
            <label for="info-3" class="fb-popup">
                <input type="checkbox" id="info-3" class="fb-popup" value="Ảnh">Ảnh
            </label>
            <label for="info-4" class="fb-popup">
                <input type="checkbox" id="info-4" class="fb-popup" value="Trùng với tin rao khác">Trùng với tin rao khác
            </label>
            <label for="info-5" class="fb-popup">
                <input type="checkbox" id="info-5" class="fb-popup" value="Không liên lạc được">Không liên lạc được
            </label>
            <label for="info-6" class="fb-popup">
                <input type="checkbox" id="info-7" class="fb-popup" value="Tin không có thật">Tin không có thật
            </label>
            <label for="info-7" class="fb-popup">
                <input type="checkbox" id="info-8" class="fb-popup" value="Bất động sản đã bán">Bất động sản đã bán
            </label>
            <label class="fb-popup">Phản hồi khác:</label>
            <textarea cols="20" rows="5" id="info-9" class="fb-popup"></textarea>
        </div>
        <div class="pl-popup-tab-content tab-map fb-popup">
            <label for="map-1" class="fb-popup">
                <input type="checkbox" id="map-1" class="fb-popup" value="Tốc độ load chậm">Tốc độ load chậm
            </label>
            <label for="map-2" class="fb-popup">
                <input type="checkbox" id="map-2" class="fb-popup" value="Vị trí bất động sản chưa chính xác">Vị trí bất động sản chưa chính xác
            </label>
            <label for="map-3" class="fb-popup">
                <input type="checkbox" id="map-3" class="fb-popup" value="Vị trí tiện ích chưa chính xác">Vị trí tiện ích chưa chính xác
            </label>
            <label for="map-4" class="fb-popup">
                <input type="checkbox" id="map-4" class="fb-popup" value="Bản đồ lỗi">Bản đồ lỗi
            </label>
            <label class="fb-popup">Phản hồi khác:</label>
            <textarea cols="20" rows="5" id="map-5" class="fb-popup"></textarea>
        </div>
        <div class="pl-popup-captcha fb-popup">
            <div class="fb-input"><span>Họ và tên </span><input type="text" value="" id="userFullName" class="fb-popup"></div>
            <div class="fb-input"><span>Email <i>*</i></span><input type="text" id="userEmail" value="" class="fb-popup"></div>
            <div class="fb-input"><span>SDT <i>*</i></span><input type="text" id="userMobile" value="" class="fb-popup"></div>
        </div>
        <div class="pl-popup-message"></div>
        <div class="btn-green fb-popup">
            <span class="fb-popup">
                <span class="fb-popup">
                    <div><div class="grecaptcha-badge" data-style="bottomright" style="width: 256px; height: 60px; display: block; transition: right 0.3s ease 0s; position: fixed; bottom: 14px; right: -186px; box-shadow: gray 0px 0px 5px; border-radius: 2px; overflow: hidden;"><div class="grecaptcha-logo"><iframe src="/assets/image/anchor.html" width="256" height="60" role="presentation" name="a-dden5yvkd606" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><div class="grecaptcha-error"></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div></div><button class="btn-sendfeedback fb-popup g-recaptcha" rel="nofollow" href="javascript:void(0)" data-sitekey="6Lf-hbgZAAAAAGWhpwOnaSnHeERaH7lqJ065rGM4" data-callback="onSubmit_FrontEnd_Product_Details_DetailsBinnova_SendFeedback" data-action="submit">
                        Gửi
                    </button>
                </span>
            </span>
        </div>
    </div>
</div>
<script>
    function onSubmit_FrontEnd_Product_Details_DetailsBinnova_SendFeedback(token) {
        (function callFunction() {
            if (FrontEnd_Product_Details_DetailsBinnova) {
                FrontEnd_Product_Details_DetailsBinnova.SendFeedback(token);
            } else {
                setTimeout(callFunction, 100);
            }
        })();
    }
</script>
            <div id="divSendContact">
    <div class="sendContactContent">
        <div class="title">Thông tin liên hệ</div>
        <div class="note1">Yêu cầu người đăng tin liên hệ theo thông tin dưới đây.</div>
        <div class="contact-result"></div>
        <div class="row">
            <div class="colleft">Họ và tên</div>
            <div class="colright"><input type="text" id="txtSenderName"></div>
        </div>
        <div class="row">
            <div class="colleft">Số điện thoại <span class="redfont">(*)</span></div>
            <div class="colright"><input type="text" id="txtSenderMobile"></div>
        </div>
        <div class="row">
            <div class="colleft">Email</div>
            <div class="colright"><input type="text" id="txtSenderEmail"></div>
        </div>
        <div class="row">
            <div class="colleft">Lời nhắn</div>
            <div class="colright">
                <textarea id="txtSenderContent" maxlength="160">Tôi có quan tâm đến bất động sản này.</textarea>
            </div>
        </div>

        <div class="row text-center">
            <div><div class="grecaptcha-badge" data-style="none" style="width: 256px; height: 60px; position: fixed; visibility: hidden;"><div class="grecaptcha-logo"><iframe src="/assets/image/anchor(1).html" width="256" height="60" role="presentation" name="a-3u4gfsgp33hz" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><div class="grecaptcha-error"></div><textarea id="g-recaptcha-response-1" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;" src="/assets/image/saved_resource(7).html"></iframe></div><button class="g-recaptcha" data-sitekey="6Lf-hbgZAAAAAGWhpwOnaSnHeERaH7lqJ065rGM4" data-callback="onSubmit_FrontEnd_Product_Details_ContactBox_SendRequest" data-action="submit" onmouseover="this.style.cursor=&#39;pointer&#39;" id="btnSendRequest">Gửi yêu cầu</button>
        </div>
    </div>
</div>
<script>
    function onSubmit_FrontEnd_Product_Details_ContactBox_SendRequest(token) {
        (function callFunction() {
            if (FrontEnd_Product_Details_ContactBox) {
                FrontEnd_Product_Details_ContactBox.SendRequest(token);
            } else {
                setTimeout(callFunction, 100);
            }
        })();
    }
</script>
        </div>
    </div>
</div>
<input type="hidden" value="0" id="vipOrder">



    <div class="divide divide-full">&nbsp;</div>
    <div class="list-product list-product-area pad-16">
        <div class="title-list">Bất động sản cùng khu vực</div>
        <div class="list-product-slide">
            <div class="swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-free-mode">
                <ul class="ul-list-product swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">

                    @foreach ($product2 as $product3)

                        <li class="vip5 swiper-slide swiper-slide-visible swiper-slide-active" uid="783243">
                            <div class="img-product">
                                <a href="{!! Route('nhadatban_single_post', $product3->id) !!}">
                                    <img alt="{!! $product3->title !!}" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" imgerr="3" src="{!! $product3->link !!}" src-lazy="{!! $product3->link !!}" is-lazy-image="true" lazy-id="12">
                                </a>
                                <span class="product-feature">
                                                                                                        </span>
                            </div>
                            <div class="info-product">
                                <h3 class="p-title">
                                    <a href="{!! Route('nhadatban_single_post', $product3->id) !!}" title="{!! $product3->title !!}" style="overflow: visible;">{!! $product3->title !!} <span class="hidden-mobile m-on-title" raw="0931113767"></span></a>
                                </h3>
                                <div class="pro-price">{!! $product3->price !!} triệu/tháng</div>
                                    <span class="ic_dot">·</span>
                                    <div class="pro-m2">{!! $product3->area !!} m²</div>
                                <div class="pro-adress">{!! $product3->path_with_type !!}</div>
                                <div class="date">
                                    {{-- Hôm nay --}}
                                    <span class="tooltip-time">{!! $product3->created_at !!}</span>
                                </div>
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="top" role="tooltip">
                                    <i class="iconSave" data-productid="27605272" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ch&amp;#237;nh chủ t&amp;#244;i cần b&amp;#225;n gấp l&amp;#244; Bi&amp;#234;n Ho&amp;#224; New City, 100m2, gi&amp;#225; 1,4 tỷ, cho vay 70% gi&amp;#225; trị, 0931113767&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/30/20201030115255-63bf_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/10/30/20201030115255-63bf_wm.jpg" data-vipclass="vip5" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán đất nền dự án dự án Biên Hòa New City" data-price="1.4 tỷ" data-area="100 m²" data-pricesort="1400000000" data-areasort="100" data-room="Undefined" data-toilets="0" data-address="Biên Hòa, Đồng Nai" data-description="Tôi chính chủ cần tiền làm ăn cần bán 2 nền 100m2 dự án Biên Hòa New City, liền kề sân golf đã có sổ đỏ riêng từng nền.Giá bán chỉ 1,4 tỷ/nền.Hạ tầng hoàn thiện 100%.Ngân hàng hỗ trợ vay - thủ tục nh" data-duration="Hôm nay" data-updatedtime="13/11/2020" data-datesort="11/13/2020 13:54:33" data-contactname="Trần Thụy Như Hoàng" data-contactmobile="0931113767" data-url="/ban-dat-nen-du-an-duong-quoc-lo-51-phuong-phuoc-tan-prj-bien-hoa-new-city/chinh-chu-toi-can-ban-gap-100m2-gia-1-4-ty-cho-vay-70-gia-tri-0931113767-pr27605272" data-totalmedia="8" data-createbyuser="783243"></i>
                                </span>
                            </div>
                        </li>                       
                        @endforeach

                </ul>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            <div class="swiper-button-next slide-next" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false"><img src="/assets/image/slide-next.png"></div>
            <div class="swiper-button-prev slide-prev swiper-button-disabled" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="true"><img src="/assets/image/slide-prev.png"></div>
        </div>
    </div>
<script type="text/javascript">
    (function callJQuery() {
        if (window.FrontEnd && window.FrontEnd.Product && window.FrontEnd.Product.Details && window.FrontEnd.Product.Details.SimilarListing) {
            new FrontEnd.Product.Details.SimilarListing()
        }
        else {
            setTimeout(callJQuery, 100);
        }
    })();
</script>
<div class="divide divide-full">&nbsp;</div>
<div class="list-product list-history pad-16 clearfix">
    <div class="title-list">Tin đăng đã xem</div>
    <div class="list-product-slide">
        <div class="swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-free-mode">
            <ul class="ul-list-product swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">


                               @foreach ($product1 as $product4)
                <li class="vip0 swiper-slide swiper-slide-visible swiper-slide-active">
                                        <div class="img-product">
                                            <a href="{!! Route('nhadatban_single_post', $product4->id) !!}"><img src="{!! $product4->link !!}" alt="{!! $product4->title !!}" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png"></a>
                                            <span class="product-feature">
                                                
                                                
                                                
                                            </span>
                                        </div>
                                        <div class="info-product">
                                            <h3 class="p-title"><a href="{!! Route('nhadatban_single_post', $product4->id) !!}" title="{!! $product4->title !!}">{!! $product4->title !!}</a></h3>
                                            <div class="pro-price">{!! $product4->price !!} triệu/tháng</div>
                                            <span class="ic_dot">·</span><div class="pro-m2">{!! $product4->area !!} m²</div>
                                            <div class="pro-adress">{!! $product4->path_with_type !!}</div>
                                            <div class="date">{!! $product4->created_at !!}<span class="tooltip-time">{!! $product4->created_at !!}</span></div>
                                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="top" role="tooltip">
                                                <i class="iconSave" data-productid="27748072" data-avatar="%3Cimg%20class%3D%22product-avatar-img%22%20alt%3D%22Kh%26%23225%3Bch%20k%E1%BA%B9t%20ti%E1%BB%81n%20c%E1%BA%A7n%20b%26%23225%3Bn%20nhanh%20l%26%23244%3B%20%C4%91%E1%BA%A5t%20Bi%26%23234%3Bn%20H%26%23242%3Ba%20New%20City%2C%20DT%205%20x%2020m%2C%206%20x%2020m%2C%2012%20x%2020m%2C%20%C4%91%26%23227%3B%20nh%E1%BA%ADn%20s%E1%BB%95%22%20error-image-src%3D%22https%3A%2F%2Fstaticfile.batdongsan.com.vn%2Fimages%2Fno-image.png%22%20src%3D%22https%3A%2F%2Fstaticfile.batdongsan.com.vn%2Fimages%2Ficons%2Flazy-preview-image-DFE3E8.png%22%20src-lazy%3D%22https%3A%2F%2Ffile4.batdongsan.com.vn%2Fcrop%2F350x232%2F2020%2F11%2F11%2F20201111095750-3277_wm.jpg%22%20is-lazy-image%3D%22true%22%2F%3E" data-avatarwap="https%3A%2F%2Ffile4.batdongsan.com.vn%2Fcrop%2F200x140%2F2020%2F11%2F11%2F20201111095750-3277_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="{!! $products->title !!}" data-price="1.45 tỷ" data-area="100 m²" data-pricesort="1450000000" data-areasort="100" data-room="" data-toilets="" data-address="Biên Hòa, Đồng Nai" data-description="Khách kẹt tiền muốn đẩy nhanh một số Lô Biên Hòa New City ở sân golf Long Thành.&lt;br/&gt;DT:&lt;br/&gt;5 x 20m.&lt;br/&gt;6 x 18m.&lt;br/&gt;9 x 20 m.&lt;br/&gt;12 x 20 m.&lt;br/&gt;Giá: 1.450 tỷ bao sang tên và ra sổ hồng.&lt;br/&gt;Tất cả đã có sổ hồng từng nền, mặt tiền đường 24m, 18m, 15m, 13m.&lt;br/&gt;Làm việc trực tiếp chính chủ thương lượng giá tốt nhất cho anh chị mua đầu tư hoặc để dành ở sau này.&lt;br/&gt;LH: 0903224939 (Bá Lợi).&lt;br/&gt;&lt;br/&gt;Một số thông tin cơ bản Biên Hòa New City.&lt;br/&gt;- Hỗ trợ vay ngân hàng.&lt;br/&gt;- Cơ sở hạ tầng hoàn chỉnh 100% (điện, đường, cây xanh, nước... ).&lt;br/&gt;- Cắm mốc phân lô từng nền.&lt;br/&gt;- Dự án đất nền Biên Hoà New City năm trong khu kinh tế trọng điểm, khu sân golf Long Thành kết nối Quốc Lộ 51, cao tốc Long Thành - Vũng Tàu, Hương Lộ 2 - Cầu Đồng Nai 2, bên cạnh khu đô thị Aqua City, Cách dự án Vincity - Quận 9 chỉ một cây cầu.&lt;br/&gt;- Cầu Vàm Cái Sứt đã khởi công đi ngang dự án đến cao tốc Long Thành, rút ngắn đoạn đường về Quận 2, TP. HCM chỉ còn 20 phút.&lt;br/&gt;- Tiện ích đẳng cấp tiêu chuẩn Quốc tế:&lt;br/&gt;+ Quần thể sân golf, nhà hàng.&lt;br/&gt;+ Khuôn viên lớn, công viên xanh tươi mát.&lt;br/&gt;+ Khu thương mại, hồ bơi, phòng gym, spa, trường học, khu y tế.&lt;br/&gt;+ An ninh 24/24." data-duration="2 ngày trước" data-updatedtime="11/11/2020" data-datesort="11/11/2020 09:58:51" data-contactname="Thái Bá Lợi" data-contactmobile="0946722227" data-url="https://batdongsan.com.vn/ban-dat-nen-du-an-pho-nam-cao-phuong-phuoc-tan-prj-bien-hoa-new-city/khach-ket-tien-can-ban-nhanh-lo-dt-5-x-20-6-x-20-12-x-20-da-nhan-so-pr27748072" data-totalmedia="3" data-createbyuser="649852"></i>
                                                </span>
                                        </div>
                                    </li>
                @endforeach   
               </ul>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
        <div class="swiper-button-next slide-next" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false"><img src="/assets/image/slide-next.png"></div>
        <div class="swiper-button-prev slide-prev swiper-button-disabled" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="true"><img src="/assets/image/slide-prev.png"></div>
    </div>
</div>
<script type="text/javascript">
    (function callJQuery() {
        if (window.FrontEnd && window.FrontEnd.Product && window.FrontEnd.Product.Details && window.FrontEnd.Product.Details.ListingHistory) {
            new FrontEnd.Product.Details.ListingHistory({
                product: {
                    productId: 27748072,
                    avatar: 'https://file4.batdongsan.com.vn/crop/257x147/2020/11/11/20201111095750-3277_wm.jpg',
                    avatarinfo: '<img class="product-avatar-img" alt="Kh&#225;ch kẹt tiền cần b&#225;n nhanh l&#244; đất Bi&#234;n H&#242;a New City, DT 5 x 20m, 6 x 20m, 12 x 20m, đ&#227; nhận sổ" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111095750-3277_wm.jpg" is-lazy-image="true"/>',
                    avatarinfowap: 'https://file4.batdongsan.com.vn/crop/200x140/2020/11/11/20201111095750-3277_wm.jpg',
                    vipClass: 'vip0',
                    isAddon: 'false' === 'true',
                    has3D: 'false' === 'true',
                    has360: 'false' === 'true',
                    hasVideo: 'false' === 'true',
                    title: 'KH&#xC1;CH K&#x1EB8;T TI&#x1EC0;N C&#x1EA6;N B&#xC1;N NHANH L&#xD4; &#x110;&#x1EA4;T BI&#xCA;N H&#xD2;A NEW CITY, DT 5 X 20M, 6 X 20M, 12 X 20M, &#x110;&#xC3; NH&#x1EAC;N S&#x1ED4;',
                    price: '1.45 t&#x1EF7;',
                    area: '100 m&#xB2;',
                    address: 'Bi&#xEA;n H&#xF2;a, &#x110;&#x1ED3;ng Nai',
                    duration: '2 ng&#xE0;y tr&#x1B0;&#x1EDB;c',
                    updatedTime: '11/11/2020',
                    avatarSave: '&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Kh&amp;#225;ch k&#x1EB9;t ti&#x1EC1;n c&#x1EA7;n b&amp;#225;n nhanh l&amp;#244; &#x111;&#x1EA5;t Bi&amp;#234;n H&amp;#242;a New City, DT 5 x 20m, 6 x 20m, 12 x 20m, &#x111;&amp;#227; nh&#x1EAD;n s&#x1ED5;&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111095750-3277_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;',
                    avatarWapSave: 'https://file4.batdongsan.com.vn/crop/200x140/2020/11/11/20201111095750-3277_wm.jpg',
                    priceSort: '1450000000',
                    areaSort: '100',
                    room: '',
                    toilets: '',
                    description: 'Kh&#xE1;ch k&#x1EB9;t ti&#x1EC1;n mu&#x1ED1;n &#x111;&#x1EA9;y nhanh m&#x1ED9;t s&#x1ED1; L&#xF4; Bi&#xEA;n H&#xF2;a New City &#x1EDF; s&#xE2;n golf Long Th&#xE0;nh.&lt;br/&gt;DT:&lt;br/&gt;5 x 20m.&lt;br/&gt;6 x 18m.&lt;br/&gt;9 x 20 m.&lt;br/&gt;12 x 20 m.&lt;br/&gt;Gi&#xE1;: 1.450 t&#x1EF7; bao sang t&#xEA;n v&#xE0; ra s&#x1ED5; h&#x1ED3;ng.&lt;br/&gt;T&#x1EA5;t c&#x1EA3; &#x111;&#xE3; c&#xF3; s&#x1ED5; h&#x1ED3;ng t&#x1EEB;ng n&#x1EC1;n, m&#x1EB7;t ti&#x1EC1;n &#x111;&#x1B0;&#x1EDD;ng 24m, 18m, 15m, 13m.&lt;br/&gt;L&#xE0;m vi&#x1EC7;c tr&#x1EF1;c ti&#x1EBF;p ch&#xED;nh ch&#x1EE7; th&#x1B0;&#x1A1;ng l&#x1B0;&#x1EE3;ng gi&#xE1; t&#x1ED1;t nh&#x1EA5;t cho anh ch&#x1ECB; mua &#x111;&#x1EA7;u t&#x1B0; ho&#x1EB7;c &#x111;&#x1EC3; d&#xE0;nh &#x1EDF; sau n&#xE0;y.&lt;br/&gt;LH: 0903224939 (B&#xE1; L&#x1EE3;i).&lt;br/&gt;&lt;br/&gt;M&#x1ED9;t s&#x1ED1; th&#xF4;ng tin c&#x1A1; b&#x1EA3;n Bi&#xEA;n H&#xF2;a New City.&lt;br/&gt;- H&#x1ED7; tr&#x1EE3; vay ng&#xE2;n h&#xE0;ng.&lt;br/&gt;- C&#x1A1; s&#x1EDF; h&#x1EA1; t&#x1EA7;ng ho&#xE0;n ch&#x1EC9;nh 100% (&#x111;i&#x1EC7;n, &#x111;&#x1B0;&#x1EDD;ng, c&#xE2;y xanh, n&#x1B0;&#x1EDB;c... ).&lt;br/&gt;- C&#x1EAF;m m&#x1ED1;c ph&#xE2;n l&#xF4; t&#x1EEB;ng n&#x1EC1;n.&lt;br/&gt;- D&#x1EF1; &#xE1;n &#x111;&#x1EA5;t n&#x1EC1;n Bi&#xEA;n Ho&#xE0; New City n&#x103;m trong khu kinh t&#x1EBF; tr&#x1ECD;ng &#x111;i&#x1EC3;m, khu s&#xE2;n golf Long Th&#xE0;nh k&#x1EBF;t n&#x1ED1;i Qu&#x1ED1;c L&#x1ED9; 51, cao t&#x1ED1;c Long Th&#xE0;nh - V&#x169;ng T&#xE0;u, H&#x1B0;&#x1A1;ng L&#x1ED9; 2 - C&#x1EA7;u &#x110;&#x1ED3;ng Nai 2, b&#xEA;n c&#x1EA1;nh khu &#x111;&#xF4; th&#x1ECB; Aqua City, C&#xE1;ch d&#x1EF1; &#xE1;n Vincity - Qu&#x1EAD;n 9 ch&#x1EC9; m&#x1ED9;t c&#xE2;y c&#x1EA7;u.&lt;br/&gt;- C&#x1EA7;u V&#xE0;m C&#xE1;i S&#x1EE9;t &#x111;&#xE3; kh&#x1EDF;i c&#xF4;ng &#x111;i ngang d&#x1EF1; &#xE1;n &#x111;&#x1EBF;n cao t&#x1ED1;c Long Th&#xE0;nh, r&#xFA;t ng&#x1EAF;n &#x111;o&#x1EA1;n &#x111;&#x1B0;&#x1EDD;ng v&#x1EC1; Qu&#x1EAD;n 2, TP. HCM ch&#x1EC9; c&#xF2;n 20 ph&#xFA;t.&lt;br/&gt;- Ti&#x1EC7;n &#xED;ch &#x111;&#x1EB3;ng c&#x1EA5;p ti&#xEA;u chu&#x1EA9;n Qu&#x1ED1;c t&#x1EBF;:&lt;br/&gt;&#x2B; Qu&#x1EA7;n th&#x1EC3; s&#xE2;n golf, nh&#xE0; h&#xE0;ng.&lt;br/&gt;&#x2B; Khu&#xF4;n vi&#xEA;n l&#x1EDB;n, c&#xF4;ng vi&#xEA;n xanh t&#x1B0;&#x1A1;i m&#xE1;t.&lt;br/&gt;&#x2B; Khu th&#x1B0;&#x1A1;ng m&#x1EA1;i, h&#x1ED3; b&#x1A1;i, ph&#xF2;ng gym, spa, tr&#x1B0;&#x1EDD;ng h&#x1ECD;c, khu y t&#x1EBF;.&lt;br/&gt;&#x2B; An ninh 24/24.',
                    dateSort: '11/11/2020 09:58:51',
                    contactName: 'Th&#xE1;i B&#xE1; L&#x1EE3;i',
                    contactMobile: '0946722227',
                    totalMedia: '3',
                    createByUser: '649852'
                },
                getListingHistory: '/Product/ProductDetail/GetListingHistory',
                listingLimit: 20,
                displayedItemCount: 12,
                asyncTime: 24,
                errorImageSrc: 'https://staticfile.batdongsan.com.vn/images/no-image.png'
            });
        }
        else {
            setTimeout(callJQuery, 100);
        }
    })();
</script>
<script type="text/javascript">
    (function callJQuery() {
        if (window.FrontEnd && window.FrontEnd.Product && window.FrontEnd.Product.Details && window.FrontEnd.Product.Details.Details) {
            window.FrontEnd_Product_Details_DetailsBinnova = new FrontEnd.Product.Details.Details({
                urlSubmitFeedback: '/Product/ProductDetail/SendFeedback'
            });
        }
        else {
            setTimeout(callJQuery, 100);
        }
    })();
    (function callJQueryChart() {
        if (window.FrontEnd && window.FrontEnd.Product && window.FrontEnd.Product.Details && window.FrontEnd.Product.Details.Chart) {
            window.FrontEnd_Product_Details_ChartBinnova = new FrontEnd.Product.Details.Chart({
                urlGetData: '/Product/ProductDetail/GetProductChart',
                cateId: '40',
                projectId: '3684',
                districtId: '245',
                chartlabel: 'Qu&#xFD; 1/2019, Qu&#xFD; 2/2019, Qu&#xFD; 3/2019, Qu&#xFD; 4/2019, Qu&#xFD; 1/2020, Qu&#xFD; 2/2020'
            });
        }
        else {
            setTimeout(callJQueryChart, 100);
        }
    })();
</script>

            <!--end description-->
            <!--start product-area-->
            <!--end product area-->
            <!--start product history-->
            <!--end product history-->
            <div class="divide divide-full">&nbsp;</div>
            <div class="note pad-16">
                Quý vị đang xem nội dung tin rao "{!! $products->title !!}" - <strong style="font-weight: bold">Mã tin 27748072</strong>.
                Mọi thông tin, nội dung liên quan tới tin rao này là do người đăng tin đăng tải và chịu trách nhiệm.
                Batdongsan.com.vn luôn cố gắng để các thông tin được hữu ích nhất cho quý vị tuy nhiên Batdongsan.com.vn không đảm bảo và không chịu trách nhiệm về bất kỳ thông tin, nội dung nào liên quan tới tin rao này.
                Trường hợp phát hiện nội dung tin đăng không chính xác, Quý vị hãy thông báo và cung cấp thông tin cho Ban quản trị Batdongsan.com.vn theo <strong style="font-weight: bold">Hotline 19001881</strong> để được hỗ trợ nhanh và kịp thời nhất.
            </div>
        </section>


    </div>
    <div class="main-right">
                <div class="box-contact">
            <div class="user">
                    <div class="avatar">
                                <span>L</span>
                    </div>
                                    <div class="name" title="Thái Bá Lợi">
                        Thái Bá Lợi
                    </div>
                                    <div class="info">
                        <a href="https://batdongsan.com.vn/tin-rao-cung-nguoi-dang-nha-dat-ban-us649852">Xem thêm 1 tin khác</a>
                </div>
                <div class="phone text-center"><span class="phoneEvent" raw="0946722227" moblie="094672222709467222270946722227">0946 722 ***&nbsp;·&nbsp;Hiện số</span></div>
                    <div class="mail btn-border-grey text-center">
                        <a id="email" href="mailto:bdscamranh@gmail.com?subject=Kha%CC%81ch%20ha%CC%80ng%20Batdongsan.com%20quan%20t%C3%A2m%20t%C6%A1%CC%81i%20tin%20%C4%91%C4%83ng&amp;body=T%C3%B4i%20co%CC%81%20quan%20t%C3%A2m%20t%C6%A1%CC%81i%20tin%20%C4%91%C4%83ng%20na%CC%80y%20https://batdongsan.com.vn/ban-dat-nen-du-an-pho-nam-cao-phuong-phuoc-tan-prj-bien-hoa-new-city/khach-ket-tien-can-ban-nhanh-lo-dt-5-x-20-6-x-20-12-x-20-da-nhan-so-pr27748072" data-email="bdscamranh@gmail.com" class="email-copy">Gửi email</a>
                    </div>
                <div class="btn-border-grey text-center div-send-contact"><a href="https://batdongsan.com.vn/ban-dat-nen-du-an-pho-nam-cao-phuong-phuoc-tan-prj-bien-hoa-new-city/khach-ket-tien-can-ban-nhanh-lo-dt-5-x-20-6-x-20-12-x-20-da-nhan-so-pr27748072#divSendContact" id="btnSendContact">Yêu cầu liên hệ lại</a></div>
            </div>
        </div>       

        
    <div class="divide-full"></div>
    <div class="box-common box-common-filled box-max-item-cate">
        <h2 class="box-title">Bán đất nền dự án theo dự án tại Thành phố Biên Hòa</h2>

        <div class="box-content link-hover-blue">
            <ul>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-bien-hoa-golden-town" title="Bán đất nền dự án Biên Hòa Golden Town">
                                Biên Hòa Golden Town (12)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-bien-hoa-new-city" title="Bán đất nền dự án Biên Hòa New City">
                                Biên Hòa New City (184)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-bien-hoa-new-town" title="Bán đất nền dự án Biên Hòa New Town">
                                Biên Hòa New Town (16)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-dreamland-city" title="Bán đất nền dự án Dreamland City">
                                Dreamland City (45)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-golden-center-city-3" title="Bán đất nền dự án Golden Center City 3">
                                Golden Center City 3 (20)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-khu-dan-cu-duong-5-noi-dai" title="Bán đất nền dự án Khu dân cư đường 5 nối dài">
                                Khu dân cư đường 5 nối dài (27)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-paradise-riverside" title="Bán đất nền dự án Paradise Riverside">
                                Paradise Riverside (30)
                            </a>
                        </h3>
                    </li>
            </ul>
        </div>
    </div>

        
    <div class="divide-full"></div>
    <div class="box-common box-common-filled box-max-item-keyword">
        <h4 class="box-title">Bất động sản nổi bật</h4>

        <div class="box-content link-hover-blue">
            <ul>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/nha-dat-ban-ba-dinh" title="Nhà đất Ba Đình">
                                    Nhà đất Ba Đình
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/nha-dat-ban-bien-hoa-dna" title="Nhà đất Biên Hòa">
                                    Nhà đất Biên Hòa
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-kho-nha-xuong-bien-hoa-dna" title="Bán nhà xưởng Biên Hòa">
                                    Bán nhà xưởng Biên Hòa
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-bien-hoa-dna" title="Cho thuê kho xưởng Biên Hòa">
                                    Cho thuê kho xưởng Biên Hòa
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-bien-hoa-dna" title="Cho thuê phòng trọ Biên Hòa">
                                    Cho thuê phòng trọ Biên Hòa
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/nha-dat-ban-hai-duong" title="Mua bán nhà đất Hải Dương">
                                    Mua bán nhà đất Hải Dương
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-bien-hoa-dna" title="Bán đất nền Biên Hòa">
                                    Bán đất nền Biên Hòa
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-duong-pham-van-thuan-245" title="Cho thuê cửa hàng Phạm Văn Thuận">
                                    Cho thuê cửa hàng Phạm Văn Thuận
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/nha-dat-ban-quan-1" title="Bán nhà Quận 1">
                                    Bán nhà Quận 1
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/nha-dat-ban-xa-an-hoa-10" title="Bán nhà An Hòa">
                                    Bán nhà An Hòa
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/nha-dat-ban-phuong-24" title="Bán nhà Phường 24 Bình Thạnh">
                                    Bán nhà Phường 24 Bình Thạnh
                                </a>
                            </h3>
                        </li>
                                            </ul>
        </div>
    </div>

        <div class="box-common box-common-filled box-utility link-hover-blue">
    <h4 class="box-title">Hỗ trợ tiện ích</h4>
    <div class="box-content">
        <ul>
            <li>
                <a href="https://batdongsan.com.vn/ho-tro-tien-ich/ht-xem-huong-nha" title="Tư vấn phong thủy" rel="nofollow">
                    Tư vấn phong thủy
                </a>
            </li>
            <li>
                <a href="https://batdongsan.com.vn/ho-tro-tien-ich/ht-du-toan-chi-tiet" title="Dự tính chi phí làm nhà" rel="nofollow">
                    Dự tính chi phí làm nhà
                </a>
            </li>
            <li>
                <a href="https://batdongsan.com.vn/ho-tro-tien-ich/ht-tinh-lai-suat" title="Tính lãi suất" rel="nofollow">
                    Tính lãi suất
                </a>
            </li>
            <li>
                <a href="https://batdongsan.com.vn/quy-trinh-xay-nha" title="Quy trình xây nhà" rel="nofollow">Quy trình xây nhà</a>
            </li>
            <li>
                <a href="https://batdongsan.com.vn/ho-tro-tien-ich/ht-xem-tuoi-xay-nha" title="Xem tuổi làm nhà" rel="nofollow">Xem tuổi làm nhà</a>
            </li>
        </ul>
    </div>
</div>
                <div class="product-detail-scroll" style="opacity: 0; top: 0px; display: none;">
            <div class="scroll-wrap clearfix">
                <div class="scroll-info" style="width: auto;">
                    <label>1.45 tỷ</label>
                        <span class="dot">·</span><label>100 m²</label>
                                        <div class="scroll-address ellipsis">Dự án Biên Hòa New City, Phố Nam Cao, Phường Phước Tân, Biên Hòa, Đồng Nai</div>
                </div>
                <div class="scroll-contact clearfix" style="">
                        <div class="avatar">
                                    <span>L</span>
                        </div>
                                            <div class="name" title="Thái Bá Lợi">
                            Lợi
                        </div>
                    <div class="btn-border-grey"><a href="https://batdongsan.com.vn/ban-dat-nen-du-an-pho-nam-cao-phuong-phuoc-tan-prj-bien-hoa-new-city/khach-ket-tien-can-ban-nhanh-lo-dt-5-x-20-6-x-20-12-x-20-da-nhan-so-pr27748072#divSendContact" id="btnSendContact">Yêu cầu liên hệ lại</a></div>
                    <div class="phone phoneEvent" raw="0946722227" moblie="0946 722 *** · Hiện số09467222270946722227">0946 722 ***&nbsp;·&nbsp;Hiện số</div>
                </div>
            </div>
        </div>
        <div class="product-detail-fix">
            <div class="fix-wrap">
                    <a href="mailto:bdscamranh@gmail.com?subject=Kha%CC%81ch%20ha%CC%80ng%20Batdongsan.com%20quan%20t%C3%A2m%20t%C6%A1%CC%81i%20tin%20%C4%91%C4%83ng&amp;body=T%C3%B4i%20co%CC%81%20quan%20t%C3%A2m%20t%C6%A1%CC%81i%20tin%20%C4%91%C4%83ng%20na%CC%80y%20https://batdongsan.com.vn/ban-dat-nen-du-an-pho-nam-cao-phuong-phuoc-tan-prj-bien-hoa-new-city/khach-ket-tien-can-ban-nhanh-lo-dt-5-x-20-6-x-20-12-x-20-da-nhan-so-pr27748072" class="link_mail" target="_blank" rel="nofollow">
                        Gửi email
                    </a>
                    <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-pho-nam-cao-phuong-phuoc-tan-prj-bien-hoa-new-city/khach-ket-tien-can-ban-nhanh-lo-dt-5-x-20-6-x-20-12-x-20-da-nhan-so-pr27748072#" data-href="sms://0946722227/?body=Toi co quan tam den tin dang nay https://batdongsan.com.vn/ban-dat-nen-du-an-pho-nam-cao-phuong-phuoc-tan-prj-bien-hoa-new-city/khach-ket-tien-can-ban-nhanh-lo-dt-5-x-20-6-x-20-12-x-20-da-nhan-so-pr27748072" rel="nofollow" class="link_sms">Nhắn tin</a>
            </div>
            <div class="phone text-center"><span class="phoneEvent" raw="0946722227" moblie="0946 722 *** · Hiện số0946 722 *** · Hiện số0946722227">0946 722 ***&nbsp;·&nbsp;Hiện số</span></div>
        </div>

        

    <div class="divide-full"></div>
    <div class="box-common box-common-filled box-broker">
        <h4 class="box-title">Nhà môi giới trong khu vực</h4>
        <div class="box-content">
            <div class="swiper-container swiper-container-initialized swiper-container-horizontal">
                <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(-928px, 0px, 0px);"><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="3" style="width: 232px;"><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/c-ty-tnhh-xay-dung-thuong-mai-moi-gioi-bat-dong-san-dat-viet-eb2712" rel="nofollow">
                                                                            <img src="/assets/image/20190531173625-b770.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/c-ty-tnhh-xay-dung-thuong-mai-moi-gioi-bat-dong-san-dat-viet-eb2712" rel="nofollow">C TY TNHH XÂY DỰNG THƯƠNG MẠI MÔI GIỚI BẤT ĐỘNG SẢN ĐẤT VIỆT</a></div>
                                <div class="broker-phone">0914920202</div>
                            </div>
                        </div><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/cong-ty-co-phan-dv-tm-xd-dia-oc-kim-oanh-eb2466" rel="nofollow">
                                                                            <img src="/assets/image/20180104105026-5581.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/cong-ty-co-phan-dv-tm-xd-dia-oc-kim-oanh-eb2466" rel="nofollow">Công ty Cổ phần DV-TM &amp; XD Địa Ốc Kim Oanh</a></div>
                                <div class="broker-phone">0933733655</div>
                            </div>
                        </div><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/cong-ty-co-phan-dau-tu-viet-hung-phat-eb2420" rel="nofollow">
                                                                            <img src="/assets/image/20170825163101-f2fb.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/cong-ty-co-phan-dau-tu-viet-hung-phat-eb2420" rel="nofollow">Công Ty Cổ Phần Đầu Tư Việt Hưng Phát</a></div>
                                <div class="broker-phone"></div>
                            </div>
                        </div><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/cong-ty-tnhh-dich-vu-bat-dong-san-dong-a-eb946" rel="nofollow">
                                                                            <img src="/assets/image/thumb200x200.2306.cong-ty-tnhh-dich-vu-bat-dong-san-dong-a.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/cong-ty-tnhh-dich-vu-bat-dong-san-dong-a-eb946" rel="nofollow">Công ty TNHH Dịch vụ Bất động sản Đông Á</a></div>
                                <div class="broker-phone">0919951010</div>
                            </div>
                        </div></div>
                        <div class="swiper-slide swiper-slide-duplicate-next" data-swiper-slide-index="0" style="width: 232px;"><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/cong-ty-cp-kinh-doanh-dia-oc-dat-moi-eb2588" rel="nofollow">
                                                                            <img src="/assets/image/20180817111042-29df.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/cong-ty-cp-kinh-doanh-dia-oc-dat-moi-eb2588" rel="nofollow">Công ty CP Kinh doanh Địa ốc Đất Mới</a></div>
                                <div class="broker-phone">0934579676</div>
                            </div>
                        </div><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/vpdd-cong-ty-cppt-dia-oc-van-xuan-eb2538" rel="nofollow">
                                                                            <img src="/assets/image/20180618174008-4ee6.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/vpdd-cong-ty-cppt-dia-oc-van-xuan-eb2538" rel="nofollow">VPĐD Công ty CPPT Địa Ốc Vạn Xuân</a></div>
                                <div class="broker-phone">0937437613</div>
                            </div>
                        </div><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/san-giao-dich-dohuhappyland-eb2512" rel="nofollow">
                                                                            <img src="/assets/image/20180510151049-8b4b.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/san-giao-dich-dohuhappyland-eb2512" rel="nofollow">Sàn giao dịch Dohuhappyland</a></div>
                                <div class="broker-phone">0906031033</div>
                            </div>
                        </div><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/san-giao-dich-dohuinternational-eb2511" rel="nofollow">
                                                                            <img src="/assets/image/20180510142917-d740.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/san-giao-dich-dohuinternational-eb2511" rel="nofollow">Sàn giao dịch Dohuinternational</a></div>
                                <div class="broker-phone">0938150151</div>
                            </div>
                        </div></div>
                        
                        
                        
                        <div class="swiper-slide" data-swiper-slide-index="1" style="width: 232px;"><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/san-giao-dich-dohudona-eb2510" rel="nofollow">
                                                                            <img src="/assets/image/20180510141326-909b.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/san-giao-dich-dohudona-eb2510" rel="nofollow">Sàn giao dịch Dohudona</a></div>
                                <div class="broker-phone">0939233433</div>
                            </div>
                        </div><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/san-giao-dich-dohuhousing-eb2509" rel="nofollow">
                                                                            <img src="/assets/image/20180510141042-e71d.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/san-giao-dich-dohuhousing-eb2509" rel="nofollow">Sàn giao dịch Dohuhousing</a></div>
                                <div class="broker-phone">0932086088</div>
                            </div>
                        </div><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/san-giao-dich-dohuhcm-eb2508" rel="nofollow">
                                                                            <img src="/assets/image/20180510140751-1857.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/san-giao-dich-dohuhcm-eb2508" rel="nofollow">Sàn giao dịch Dohuhcm</a></div>
                                <div class="broker-phone">0938967796</div>
                            </div>
                        </div><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/san-giao-dich-dohumiennam-eb2507" rel="nofollow">
                                                                            <img src="/assets/image/20180510140422-59d2.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/san-giao-dich-dohumiennam-eb2507" rel="nofollow">Sàn giao dịch Dohumiennam</a></div>
                                <div class="broker-phone">0915565639</div>
                            </div>
                        </div></div>
                        
                        
                        
                        <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="2" style="width: 232px;"><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/san-giao-dich-dohumiendong-eb2506" rel="nofollow">
                                                                            <img src="/assets/image/20180510120438-a0e5.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/san-giao-dich-dohumiendong-eb2506" rel="nofollow">Sàn giao dịch Dohumiendong</a></div>
                                <div class="broker-phone">0901890891</div>
                            </div>
                        </div><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/san-giao-dich-dohureal-eb2505" rel="nofollow">
                                                                            <img src="/assets/image/20180510113359-da64.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/san-giao-dich-dohureal-eb2505" rel="nofollow">Sàn giao dịch Dohureal</a></div>
                                <div class="broker-phone">0934077477</div>
                            </div>
                        </div><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/san-giao-dich-dohuland-eb1100" rel="nofollow">
                                                                            <img src="/assets/image/20180510143557-2bfd.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/san-giao-dich-dohuland-eb1100" rel="nofollow">Sàn giao dịch Dohuland</a></div>
                                <div class="broker-phone">0937777247</div>
                            </div>
                        </div><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/cong-ty-tnhh-xay-dung-thuong-mai-moi-gioi-bat-dong-san-dat-viet-eb2762" rel="nofollow">
                                                                            <img src="/assets/image/20191207111310-b5e7.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/cong-ty-tnhh-xay-dung-thuong-mai-moi-gioi-bat-dong-san-dat-viet-eb2762" rel="nofollow">CÔNG TY TNHH XÂY DỰNG THƯƠNG MẠI MÔI GIỚI BẤT ĐỘNG SẢN ĐẤT VIỆT</a></div>
                                <div class="broker-phone">0914920202</div>
                            </div>
                        </div></div>
                        
                        
                        
                        <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="3" style="width: 232px;"><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/c-ty-tnhh-xay-dung-thuong-mai-moi-gioi-bat-dong-san-dat-viet-eb2712" rel="nofollow">
                                                                            <img src="/assets/image/20190531173625-b770.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/c-ty-tnhh-xay-dung-thuong-mai-moi-gioi-bat-dong-san-dat-viet-eb2712" rel="nofollow">C TY TNHH XÂY DỰNG THƯƠNG MẠI MÔI GIỚI BẤT ĐỘNG SẢN ĐẤT VIỆT</a></div>
                                <div class="broker-phone">0914920202</div>
                            </div>
                        </div><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/cong-ty-co-phan-dv-tm-xd-dia-oc-kim-oanh-eb2466" rel="nofollow">
                                                                            <img src="/assets/image/20180104105026-5581.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/cong-ty-co-phan-dv-tm-xd-dia-oc-kim-oanh-eb2466" rel="nofollow">Công ty Cổ phần DV-TM &amp; XD Địa Ốc Kim Oanh</a></div>
                                <div class="broker-phone">0933733655</div>
                            </div>
                        </div><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/cong-ty-co-phan-dau-tu-viet-hung-phat-eb2420" rel="nofollow">
                                                                            <img src="/assets/image/20170825163101-f2fb.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/cong-ty-co-phan-dau-tu-viet-hung-phat-eb2420" rel="nofollow">Công Ty Cổ Phần Đầu Tư Việt Hưng Phát</a></div>
                                <div class="broker-phone"></div>
                            </div>
                        </div><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/cong-ty-tnhh-dich-vu-bat-dong-san-dong-a-eb946" rel="nofollow">
                                                                            <img src="/assets/image/thumb200x200.2306.cong-ty-tnhh-dich-vu-bat-dong-san-dong-a.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/cong-ty-tnhh-dich-vu-bat-dong-san-dong-a-eb946" rel="nofollow">Công ty TNHH Dịch vụ Bất động sản Đông Á</a></div>
                                <div class="broker-phone">0919951010</div>
                            </div>
                        </div></div>
                        
                        
                        
                <div class="swiper-slide swiper-slide-duplicate swiper-slide-next" data-swiper-slide-index="0" style="width: 232px;"><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/cong-ty-cp-kinh-doanh-dia-oc-dat-moi-eb2588" rel="nofollow">
                                                                            <img src="/assets/image/20180817111042-29df.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/cong-ty-cp-kinh-doanh-dia-oc-dat-moi-eb2588" rel="nofollow">Công ty CP Kinh doanh Địa ốc Đất Mới</a></div>
                                <div class="broker-phone">0934579676</div>
                            </div>
                        </div><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/vpdd-cong-ty-cppt-dia-oc-van-xuan-eb2538" rel="nofollow">
                                                                            <img src="/assets/image/20180618174008-4ee6.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/vpdd-cong-ty-cppt-dia-oc-van-xuan-eb2538" rel="nofollow">VPĐD Công ty CPPT Địa Ốc Vạn Xuân</a></div>
                                <div class="broker-phone">0937437613</div>
                            </div>
                        </div><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/san-giao-dich-dohuhappyland-eb2512" rel="nofollow">
                                                                            <img src="/assets/image/20180510151049-8b4b.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/san-giao-dich-dohuhappyland-eb2512" rel="nofollow">Sàn giao dịch Dohuhappyland</a></div>
                                <div class="broker-phone">0906031033</div>
                            </div>
                        </div><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/san-giao-dich-dohuinternational-eb2511" rel="nofollow">
                                                                            <img src="/assets/image/20180510142917-d740.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/san-giao-dich-dohuinternational-eb2511" rel="nofollow">Sàn giao dịch Dohuinternational</a></div>
                                <div class="broker-phone">0938150151</div>
                            </div>
                        </div></div></div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            <div class="broker-pagination">
                <!-- Add Pagination -->
                <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 4"></span></div>
                <!-- Add Arrows -->
                <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"></div>
                <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"></div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        (function callJQuery() {
            if (window.FrontEnd && window.FrontEnd.Product && window.FrontEnd.Product.Details && window.FrontEnd.Product.Details.BrokerSlide) {
                new FrontEnd.Product.Details.BrokerSlide({})
            }
            else {
                setTimeout(callJQuery, 100);
            }
        })();
    </script>

    </div>
</div>
<!-- end product-detail-->

            <div class="banner-bottom">
                <div style="float: left; width: 560px">
                </div>
                <div style="float: left; width: 430px; margin-left: 5px">
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="boxLinkFooter newLayout">
                


            </div>

        <div id="SiteRight" class="banner-right clearfix">

        </div>
@endsection
@endforeach
