@extends('layouts.master')

@section('title', 'Mua Bán Nhà Đất Việt Nam Giá Rẻ, Mới Nhất 2020')

@section('styles')
<link rel="stylesheet" href="./assets/css/filestatic.ver202011110505.msvbds.productlisting.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
@endsection

@section('content')

<body class="bg-site">

    <form id="boxSearchForm" action="{{ route('search') }}" method="post" novalidate="novalidate">
        <div class="search-bar shadow-lv-1 clearfix">
            <div class="search-guide" style="left: 985.083px; top: 64px; display: block;">
                <div class="icon-guide"><img src="./assets/image/ic_triangle.svg"></div>
            </div>
            <ul class="search-bar-tab mar-left-16 pad-top-8 mar-right-16">
                <li class="actived" ptype="38">Bán</li>
                <li ptype="49">Cho thuê</li>
            </ul>
            <input data-val="true" data-val-required="The CateId field is required." id="type" name="CateId" type="hidden" value="38">

            <div class="search-bar-suggestion pad-top-8 mar-right-16">
                <input type="hidden" id="suggestionTemp">
                <input id="Keyword" name="Keyword" type="hidden" value="">
                <input type="text" placeholder="Tìm kiếm địa điểm, khu vực" class="search-bar-input ui-autocomplete-input" id="search-suggestion" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true">
                <span class="icon-close hiding">
                    <img src="./assets/image/ic_close.png">
                </span>
            </div>
            <div id="divCategoryRe" class="select-control select-cate">
                <div class="select-control-label">
                    <div class="dropbox-label">Loại nhà đất</div>
                    <div class="custom-value">Tất cả</div>
                </div>
                <input data-val="true" data-val-required="The SubCateId field is required." id="hdCboCatagory" name="SubCateId" type="hidden" value="0">
                <div id="select-cate-options" class="custom-dropbox-cate hiding advance-select-options custom-scroll mCustomScrollbar _mCS_3 mCS_no_scrollbar" style="display: none;">
                    <div id="mCSB_3" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: 0px;" tabindex="0">
                        <div id="mCSB_3_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position: relative; top: 0px; left: 0px;" dir="ltr">
                            <div id="divCate">
                                <ul>
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
                                </ul>
                            </div>
                        </div>
                        <div id="mCSB_3_scrollbar_vertical" class="mCSB_scrollTools mCSB_3_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: none;">
                            <div class="mCSB_draggerContainer" style="">
                                <div id="mCSB_3_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; top: 0px;">
                                    <div class="mCSB_dragger_bar" style="line-height: 30px;"></div>
                                </div>
                                <div class="mCSB_draggerRail"></div>
                            </div>
                        </div>
                    </div>
                </div>
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
                    <div id="divCityOptions" class="custom-scroll mCustomScrollbar _mCS_4 mCS_no_scrollbar" hddvalue="hdCboCity,hdCboDistrict" defaulttext="Toàn quốc" ddlid="divCity" currlevel="1" style="">
                        <div id="mCSB_4" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: 0px;" tabindex="0">
                            <div id="mCSB_4_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position: relative; top: 0px; left: 0px;" dir="ltr">
                                <ul class="advance-options">
                                    <li vl="CN" class="advance-options adv-arrow active">Toàn quốc</li>
                                    <li vl="SG" class="advance-options adv-arrow">Hồ Chí Minh</li>

                                </ul>
                            </div>
                            <div id="mCSB_4_scrollbar_vertical" class="mCSB_scrollTools mCSB_4_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: none;">
                                <div class="mCSB_draggerContainer" style="">
                                    <div id="mCSB_4_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; top: 0px;">
                                        <div class="mCSB_dragger_bar" style="line-height: 30px;"></div>
                                    </div>
                                    <div class="mCSB_draggerRail"></div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                            <span><img src="./assets/image/ic_arrow_left.png"></span>
                            <input id="txtPriceMaxValue" name="MaxPrice" placeholder="Đến" class="max-value advance-options" maxlength="6" numbersonly="true" decimal="true" type="text">
                            <div class="clearfix pad-bot-16"></div>
                            <div id="price-slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                <div class="ui-slider-range ui-widget-header" style="left: 0%; width: 100%;"></div><a href="#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"></a><a href="#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 100%;"></a>
                            </div>
                        </div>
                        <div class="custom-scroll mCustomScrollbar _mCS_5 mCS_no_scrollbar" id="divPriceOptions" minvalue="txtPriceMinValue" maxvalue="txtPriceMaxValue" unit="money" lblmin="lblPriceMin" lblmax="lblPriceMax" hddvalue="hdCboPrice" defaulttext="Tất cả" ddlid="divPrice" currlevel="1" style="">
                            <div id="mCSB_5" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: 0px;" tabindex="0">
                                <div id="mCSB_5_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position: relative; top: 0px; left: 0px;" dir="ltr">
                                    <ul class="advance-options">
                                        <li vl="-1" class="advance-options active">Tất cả</li>
                                        <li vl="0" class="advance-options">Thỏa thuận</li>
                                        <li vl="1" class="advance-options">&lt; 500 triệu</li>
                                        <li vl="2" class="advance-options">500<span class="arrow-icon"></span>800 triệu</li>
                                        <li vl="3" class="advance-options">800 triệu<span class="arrow-icon"></span>1 tỷ</li>
                                        <li vl="4" class="advance-options">1<span class="arrow-icon"></span>2 tỷ</li>
                                        <li vl="5" class="advance-options">2<span class="arrow-icon"></span>3 tỷ</li>
                                        <li vl="6" class="advance-options">3<span class="arrow-icon"></span>5 tỷ</li>
                                        <li vl="7" class="advance-options">5<span class="arrow-icon"></span>7 tỷ</li>
                                        <li vl="8" class="advance-options">7<span class="arrow-icon"></span>10 tỷ</li>
                                        <li vl="9" class="advance-options">10<span class="arrow-icon"></span>20 tỷ</li>
                                        <li vl="10" class="advance-options">20<span class="arrow-icon"></span>30 tỷ</li>
                                        <li vl="11" class="advance-options">&gt; 30 tỷ</li>
                                    </ul>
                                </div>
                                <div id="mCSB_5_scrollbar_vertical" class="mCSB_scrollTools mCSB_5_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: none;">
                                    <div class="mCSB_draggerContainer" style="">
                                        <div id="mCSB_5_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; top: 0px;">
                                            <div class="mCSB_dragger_bar" style="line-height: 30px;"></div>
                                        </div>
                                        <div class="mCSB_draggerRail"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                            <span><img src="./assets/image/ic_arrow_left.png"></span>
                            <input id="txtAreaMaxValue" name="MaxArea" placeholder="Đến" class="max-value" maxlength="6" numbersonly="true" decimal="true" type="text">
                            <div class="clearfix pad-bot-16"></div>
                            <div id="area-slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                <div class="ui-slider-range ui-widget-header" style="left: 0%; width: 100%;"></div><a href="#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"></a><a href="#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 100%;"></a>
                            </div>
                        </div>
                        <div class="custom-scroll mCustomScrollbar _mCS_6 mCS_no_scrollbar" id="divAreaOptions" minvalue="txtAreaMinValue" maxvalue="txtAreaMaxValue" unit="area" hddvalue="hdCboArea" defaulttext="Tất cả" ddlid="divArea" currlevel="1" style="">
                            <div id="mCSB_6" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: 0px;" tabindex="0">
                                <div id="mCSB_6_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position: relative; top: 0px; left: 0px;" dir="ltr">
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
                                </div>
                                <div id="mCSB_6_scrollbar_vertical" class="mCSB_scrollTools mCSB_6_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: none;">
                                    <div class="mCSB_draggerContainer" style="">
                                        <div id="mCSB_6_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; top: 0px;">
                                            <div class="mCSB_dragger_bar" style="line-height: 30px;"></div>
                                        </div>
                                        <div class="mCSB_draggerRail"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                    <input type="text" class="select-text-content" placeholder="Tìm Dự án">
                    <div id="divProjectsOptions" class="custom-scroll mCustomScrollbar _mCS_7 mCS_no_scrollbar" hddvalue="hdCboProjects" defaulttext="Tất cả" ddlid="divProjects" currlevel="1" style="">
                        <div id="mCSB_7" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: 0px;" tabindex="0">
                            <div id="mCSB_7_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position: relative; top: 0px; left: 0px;" dir="ltr">
                                <ul class="advance-options">
                                    <li vl="0" class="advance-options active">Tất cả</li>
                                </ul>
                            </div>
                            <div id="mCSB_7_scrollbar_vertical" class="mCSB_scrollTools mCSB_7_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: none;">
                                <div class="mCSB_draggerContainer" style="">
                                    <div id="mCSB_7_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; top: 0px;">
                                        <div class="mCSB_dragger_bar" style="line-height: 30px;"></div>
                                    </div>
                                    <div class="mCSB_draggerRail"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="select-control filter-control">
                <div class="select-control-label" aria-label="Tìm kiếm nâng cao" data-microtip-position="top" role="tooltip">
                    Lọc thêm<span class="filter-info"><img src="./assets/image/ic_filter.svg" class="icon-filter"><span class="icon-number" style="display: none;"></span></span>
                </div>
                <input type="hidden" id="hdbFilter" value="0">
                <div class="select-filter-dropbox custom-dropbox advance-select-options hiding" style="display: none; height: 516px;">
                    <div class="custom-scroll-outside mCustomScrollbar _mCS_9 mCS_no_scrollbar" style="position: relative; overflow: visible; max-height: 460px;">
                        <div id="mCSB_9" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_outside" style="max-height: 0px;" tabindex="0">
                            <div id="mCSB_9_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position: relative; top: 0px; left: 0px;" dir="ltr">
                                <div class="search-bar-filter"></div>

                                <div class="relative-control select-context">
                                    <label class="mar-top-8">Phường/ Xã</label>
                                    <div id="divWard" class="relative-control" aria-label="Bạn hãy chọn quận huyện trước" data-microtip-position="top" role="tooltip">
                                        <div class="filter-label"><span>Tất cả phường, xã</span><i class="icon-arrow icon-arrow-down"></i></div>
                                        <input type="hidden" id="hdCboWard" name="WardId" value="0">
                                        <input type="text" placeholder="Tìm Phường, Xã" class="select-text-content icon-arrow-up hiding" style="display: none;">
                                    </div>
                                </div>

                                <div class="relative-control select-context">
                                    <label>Đường/ Phố</label>
                                    <div id="divStreet" class="relative-control" aria-label="Bạn hãy chọn tỉnh thành trước" data-microtip-position="top" role="tooltip">
                                        <div class="filter-label"><span>Tất cả đường, phố</span><i class="icon-arrow icon-arrow-down"></i></div>
                                        <input type="hidden" id="hdCboStreet" name="StreetId" value="0">
                                        <input type="text" placeholder="Tìm Đường/ Phố" class="select-text-content hiding icon-arrow-up" style="display: none;">
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
                                        <input type="hidden" id="hdCboHomeDirection" name="DirectionId" value="-1">
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
                            </div>
                        </div>
                        <div id="mCSB_9_scrollbar_vertical" class="mCSB_scrollTools mCSB_9_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: none;">
                            <div class="mCSB_draggerContainer" style="">
                                <div id="mCSB_9_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; top: 0px;">
                                    <div class="mCSB_dragger_bar" style="line-height: 30px;"></div>
                                </div>
                                <div class="mCSB_draggerRail"></div>
                            </div>
                        </div>
                    </div>
                    <div class="select-reset filter-reset">Đặt lại</div>
                </div>
                <!--khuvu loc them -->
                <div id="divWardOptions" ddlid="divWard" class="fly-options custom-dropbox custom-dropbox hiding  advance-select-options mCustomScrollbar _mCS_1 mCS_no_scrollbar" hddvalue="hdCboWard" isfilter="true" currlevel="1" style="display: none;">
                    <div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: 48px;" tabindex="0">
                        <div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position: relative; top: 0px; left: 0px;" dir="ltr">
                            <ul class="advance-options">
                                <li vl="0" class="advance-options active">Tất cả phường, xã</li>
                            </ul>
                        </div>
                        <div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: none;">
                            <div class="mCSB_draggerContainer" style="">
                                <div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; top: 0px;">
                                    <div class="mCSB_dragger_bar" style="line-height: 30px;"></div>
                                </div>
                                <div class="mCSB_draggerRail"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="divStreetOptions" ddlid="divStreet" class="fly-options custom-dropbox custom-dropbox hiding advance-select-options mCustomScrollbar _mCS_2 mCS_no_scrollbar" hddvalue="hdCboStreet" isfilter="true" currlevel="1" style="display: none;">
                    <div id="mCSB_2" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: 48px;" tabindex="0">
                        <div id="mCSB_2_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position: relative; top: 0px; left: 0px;" dir="ltr">
                            <ul class="advance-options">
                                <li vl="0" class="advance-options active">Tất cả đường, phố</li>
                            </ul>
                        </div>
                        <div id="mCSB_2_scrollbar_vertical" class="mCSB_scrollTools mCSB_2_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: none;">
                            <div class="mCSB_draggerContainer" style="">
                                <div id="mCSB_2_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; top: 0px;">
                                    <div class="mCSB_dragger_bar" style="line-height: 30px;"></div>
                                </div>
                                <div class="mCSB_draggerRail"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="divHomeDirectionOptions" ddlid="divHomeDirection" class="hiding fly-options custom-dropbox custom-scroll advance-select-options mCustomScrollbar _mCS_8 mCS_no_scrollbar" hddvalue="hdCboHomeDirection" isfilter="true" currlevel="1" style="display: none;">
                    <div id="mCSB_8" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: 308px;" tabindex="0">
                        <div id="mCSB_8_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position: relative; top: 0px; left: 0px;" dir="ltr">
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
                        </div>
                        <div id="mCSB_8_scrollbar_vertical" class="mCSB_scrollTools mCSB_8_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: none;">
                            <div class="mCSB_draggerContainer" style="">
                                <div id="mCSB_8_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; top: 0px;">
                                    <div class="mCSB_dragger_bar" style="line-height: 30px;"></div>
                                </div>
                                <div class="mCSB_draggerRail"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <input type="button" id="btnSearch" class="btn-blue-7" value="Tìm kiếm">
            <div id="link-reset" aria-label="Xóa tiêu chí lọc" data-microtip-position="bottom-left" role="tooltip"><img src="./assets/image/ic_reset.svg"></div>
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
                boxSearchServices.GetData().then(function(data) {
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
                                    directionId: -1,
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
        <img src="./assets/image/ic_unsave.svg">
        <span> Lưu tin thành công</span>
    </div>
    <div class="popupMarking  unsave" style="display: none">
        <img src="./assets/image/ic_save.svg">
        <span> Đã bỏ lưu tin</span>
    </div>



    <input type="hidden" value="1" id="activeTxtSelect">
    <div>
    </div>
    <div class="main-container clearfix">
        <div class="main-left">
            <!--Product List Binnova-->


            <!-- Header listing-->
            <div class="breadcrumb all-grey-7 link-hover-blue">
                <a href="https://batdongsan.com.vn/nha-dat-ban" level="1" title="Nhà đất bán tại Việt Nam">Bán</a><span>/</span><a href="https://batdongsan.com.vn/nha-dat-ban" level="2" title="Nhà đất bán tại Việt Nam">Tất cả BĐS trên toàn quốc</a>
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
            <div class="product-list-header pad-top-8">
                    <h1>Mua bán nhà đất toàn quốc</h1>
                <div class="product-lists-count all-grey-7 pad-top-8 pad-bot-8">Hiện có <span id="count-number">{!! $count_products !!}</span> bất động sản.</div>


            </div>

            <div class="product-nav-bar pad-top-8 clearfix">
                <ul class="ul-tab fl mar-right-16">
                    <li class="list-display actived">Danh sách</li>
                    <!-- phần này xử lý bỏ tabIndex. xử lý ở đây để về sau nếu sửa page bản đồ thì sẽ bỏ phần ở đây cho đơn giản, kg cam thiệt vào code trong controller -->
                    <li><a title="Xem trên bản đồ" href="https://batdongsan.com.vn/ban-do-nha-dat-ban">Bản đồ</a></li>
                </ul>
                <div class="fr">
                    <div class="custom-drop-control sort-control">
                        <div class="custom-control-label">
                            Sắp xếp
                        </div>
                        <div class="custom-dropbox hiding" id="divSort">
                            <div id="divSortOptions">
                                <ul class="advance-options">
                                    <li vl="0" class="actived">Thông thường</li>
                                    <li vl="1">Tin mới nhất</li>
                                    <li vl="2">Giá thấp đến cao</li>
                                    <li vl="3">Giá cao đến thấp</li>
                                    <li vl="4">Diện tích bé đến lớn</li>
                                    <li vl="5">Diện tích lớn đến bé</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-lists mar-top-16" id="product-lists-web" style="display:block">

                @foreach ($products as $product)
                <div class="vip0 product-item clearfix" uid="649852">
                    <div class="product-image ">
                        <a class="product-avatar" href="{!! Route('nhadatban_single_post', $product->id) !!}" title="{!! $product->title !!}" onclick="">
                            @foreach ($product->image as $image)
                            <img class="product-avatar-img" alt="{!! $product->title !!}" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" 
                            src=" {!! $image['link'] !!}" is-lazy-image="true" lazy-id="0">
                            @break
                            @endforeach
                        </a>
                        <span class="product-feature">
                        </span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            @if ($product['post_type_id'] == 4)
                            <i class="fa fa-star" style="font-size:20px;color:orange;">
                            </i>
                            @endif
                            <a href="{!! Route('nhadatban_single_post', $product['id']) !!}" title="{!! $product['title'] !!}" class="vipZero product-link">
                                {!! $product['title'] !!}
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">{!! $product['price'] !!} {!! $product['unit'] !!}</span>
                            <span class="dot">·</span>
                            <span class="area">{!! $product['area'] !!} m²</span>
                            <span class="dot">·</span>
                            <span class="location">
                            @if(isset($product->district['name_with_type']) && isset($product->province['name_with_type']))
                             {!! $product->district['name_with_type'] !!}, {!! $product->province['name_with_type'] !!}
                            
                            @else
                                 ko co quan, tp
                            
                            @endif
                        </span>
                        </div>
                        <div class="product-content">
                            {!! $product['content'] !!}
                        </div>
                        <div class="product-wrap clearfix">
                            <div class="product-uptime">
                                <span class="product-labeltime">
                                    {{ \Carbon\Carbon::parse($product['created_at'])->format('d/m/Y')}}
                                    <span class="tooltip-time">{{ \Carbon\Carbon::parse($product['created_at'])->format('d/m/Y')}}</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach

                <div class="text-center">
                    <div class="paginate">
                        {{ $products->links() }}
                    </div>

                </div>
            </div>






            <div class="divide">&nbsp;</div>
            <div class="product-seo-tag">
                <h4 class="seo-tag-title">Tìm kiếm theo từ khóa</h4>
                <ul class="ul-round clearfix">
                    <li><a title="Bán đất gần làng đại học Thủ Đức" href="https://batdongsan.com.vn/tags/ban/ban-dat-gan-lang-dai-hoc-thu-duc">Bán đất gần làng đại học Thủ Đức</a></li>
                    <li><a title="Bán nhà chính chủ" href="https://batdongsan.com.vn/tags/ban/ban-nha-chinh-chu">Bán nhà chính chủ</a></li>
                    <li><a title="Bán nhà gần công viên Lê Thị Riêng" href="https://batdongsan.com.vn/tags/ban/ban-nha-gan-cong-vien-le-thi-rieng">Bán nhà gần công viên Lê Thị Riêng</a></li>
                    <li><a title="Bán chung cư chính chủ" href="https://batdongsan.com.vn/tags/ban/ban-chung-cu-chinh-chu">Bán chung cư chính chủ</a></li>
                    <li><a title="Bán đất chính chủ" href="https://batdongsan.com.vn/tags/ban/ban-dat-chinh-chu">Bán đất chính chủ</a></li>
                    <li><a title="Bán nhà mặt phố gIÁ RẺ" href="https://batdongsan.com.vn/tags/ban/ban-nha-mat-pho-gia-re">Bán nhà mặt phố gIÁ RẺ</a></li>
                </ul>
            </div>
            <div class="divide">&nbsp;</div>
            <div class="product-seo-text">
                <div>Hàng nghìn tin đăng <strong>mua bán nhà đất tại Việt Nam</strong> được rao trên <strong>Batdongsan.com.vn</strong>
                    với đầy đủ các tiêu chí tìm kiếm của người mua và bán.
                    Các thông tin mua bán nhà đất khu vực
                    Việt Nam được tổng hợp từ các nguồn tin rao về nhà đất bao gồm tin đăng
                    chính chủ và tin đăng qua môi giới,
                    giúp đa dạng nguồn thông tin và sự lựa
                    chọn đối với bất động sản đang quan tâm.</div>
                <div>Bằng những tiện ích mà
                    Batdongsan.com.vn mang đến cho người dùng, bạn có thể dễ dàng thao tác
                    và tìm kiếm thông tin bất động sản bạn đang quan tâm chỉ trong vài click
                    chuột.
                    Batdongsan.com.vn sẽ là cầu nối giúp bạn
                    tương tác và trao đổi với nhà cung cấp bất động sản bằng việc cung cấp
                    thông tin chính xác, nhanh chóng...,
                    cùng với đó là đội ngũ nhân viên tư vấn
                    chuyên nghiệp. Chắc chắn bạn sẽ thực sự hài lòng về kênh thông tin và
                    dịch vụ của <strong>Batdongsan.com.vn</strong>!</div>
            </div>
            <form id="productListBinnova" method="post">
                <input id="hashAlias" type="hidden" value="48f0d40b1731d909212598242194556c2306f2dde9c6827fab303276aa8fec92">
            </form>
            <script type="text/javascript">
                (function callJQuery() {
                    if (window.FrontEnd && window.FrontEnd.Product && window.FrontEnd.Product.ProductListBinnova) {
                        var ctrl = new window.FrontEnd.Product.ProductListBinnova({
                            getTabProjectUrl: '/Product/ProductListing/GetTabProject?projectId=0',
                            model: {
                                typeOfProduct: 38,
                                categoryId: 0,
                                cityCode: 'CN',
                                districtId: 0,
                                projectId: 0,
                                wardId: 0,
                                streetId: 0
                            }
                        });
                    } else {
                        setTimeout(callJQuery, 100);
                    }
                })();
            </script>
        </div>
        <div class="main-right">

            <div class="box-common box-common-border box-price fixgradient">
                <h4 class="box-title">Lọc theo khoảng giá</h4>
                <div class="box-content">
                    <ul class="link-hover-blue">
                        <li><a href="?giamin=1&giamax=2" title="Nhà đất cho thuê toàn quốc giá 1 - 2 tỷ">1 - 2 tỷ</a></li>
                        <li><a href="?giamin=2&giamax=3" title="Nhà đất cho thuê toàn quốc giá 2 - 3 tỷ">2 - 3 tỷ</a></li>
                        <li><a href="?giamin=3&giamax=5" title="Nhà đất cho thuê toàn quốc giá 3 - 5 tỷ">3 - 5 tỷ</a></li>
                        <li><a href="?giamin=5&giamax=7" title="Nhà đất cho thuê toàn quốc giá 5 - 7 tỷ">5 - 7 tỷ</a></li>
                        <li><a href="?giamin=7&giamax=10" title="Nhà đất cho thuê toàn quốc giá 7 - 10 tỷ">7 - 10 tỷ</a></li>
                        </ul>
                </div>
            </div>



            <div class="box-common box-common-border box-price fixgradient">
                <h4 class="box-title">Lọc theo diện tích</h4>
                <div class="box-content">
                    <ul class="link-hover-blue">
                        <li><a href="?dtmin=0&dtmax=30" title="Nhà đất cho thuê toàn quốc diện tích <= 30 m2">&lt;= 30 m2</a></li>
                        <li><a href="?dtmin=30&dtmax=50" title="Nhà đất cho thuê toàn quốc diện tích 30 - 50 m2">30 - 50 m2</a></li>
                        <li><a href="?dtmin=50&dtmax=80" title="Nhà đất cho thuê toàn quốc diện tích 50 - 80 m2">50 - 80 m2</a></li>
                        <li><a href="?dtmin=80&dtmax=100" title="Nhà đất cho thuê toàn quốc diện tích 80 - 100 m2">80 - 100 m2</a></li>
                        <li><a href="?dtmin=100&dtmax=150" title="Nhà đất cho thuê toàn quốc diện tích 100 - 150 m2">100 - 150 m2</a></li>
                        <li><a href="?dtmin=150&dtmax=200" title="Nhà đất cho thuê toàn quốc diện tích 150 - 200 m2">150 - 200 m2</a></li>
                    </ul>
                </div>
            </div>



            <div class="divide-full"></div>
            <div class="box-common box-common-filled box-max-item-cate">
                <h2 class="box-title">Mua bán nhà đất</h2>

                <div class="box-content link-hover-blue">
                    <ul>
                        @foreach($provinces as $province)
                        <li>
                            <h3>
                                <a href="?tp={!! $province->slug!!}" title="{{$province->name}}" id="{{ $province->id }}">
                                    {!! $province->name !!} ({!! $province->count_posts !!})
                                </a>
                            </h3>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>



            <div class="box-common box-common-filled box-utility link-hover-blue">
                <h4 class="box-title">Hỗ trợ tiện ích</h4>
                <div class="box-content">
                    <ul>
                        <li>
                            <a href="/ho-tro-tien-ich/ht-xem-huong-nha" title="Tư vấn phong thủy" rel="nofollow">
                                Tư vấn phong thủy
                            </a>
                        </li>
                        <li>
                            <a href="/ho-tro-tien-ich/ht-du-toan-chi-tiet" title="Dự tính chi phí làm nhà" rel="nofollow">
                                Dự tính chi phí làm nhà
                            </a>
                        </li>
                        <li>
                            <a href="/ho-tro-tien-ich/ht-tinh-lai-suat" title="Tính lãi suất" rel="nofollow">
                                Tính lãi suất
                            </a>
                        </li>
                        <li>
                            <a href="/quy-trinh-xay-nha" title="Quy trình xây nhà" rel="nofollow">Quy trình xây nhà</a>
                        </li>
                        <li>
                            <a href="/ho-tro-tien-ich/ht-xem-tuoi-xay-nha" title="Xem tuổi làm nhà" rel="nofollow">Xem tuổi làm nhà</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
        
    <div class="divide-full"></div>

        <div class="box-common box-common-filled box-utility link-hover-blue">
    <h4 class="box-title">Hỗ trợ tiện ích</h4>
    <div class="box-content">
        <ul>
            <li>
                <a href="/ho-tro-tien-ich/ht-xem-huong-nha" title="Tư vấn phong thủy" rel="nofollow">
                    Tư vấn phong thủy
                </a>
            </li>
            <li>
                <a href="/ho-tro-tien-ich/ht-du-toan-chi-tiet" title="Dự tính chi phí làm nhà" rel="nofollow">
                    Dự tính chi phí làm nhà
                </a>
            </li>
            <li>
                <a href="/ho-tro-tien-ich/ht-tinh-lai-suat" title="Tính lãi suất" rel="nofollow">
                    Tính lãi suất
                </a>
            </li>
            <li>
                <a href="/quy-trinh-xay-nha" title="Quy trình xây nhà" rel="nofollow">Quy trình xây nhà</a>
            </li>
            <li>
                <a href="/ho-tro-tien-ich/ht-xem-tuoi-xay-nha" title="Xem tuổi làm nhà" rel="nofollow">Xem tuổi làm nhà</a>
            </li>
        </ul>
    </div>
</div>
    </div>
    </div>
    <div class="banner-bottom">
        <div style="float: left; width: 560px">
        </div>
        <div style="float: left; width: 430px; margin-left: 5px">
        </div>
    </div>
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
    @section('scripts')

    @endsection