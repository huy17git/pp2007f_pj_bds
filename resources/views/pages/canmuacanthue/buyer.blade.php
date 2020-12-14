@extends('layouts.master')

@section('title', 'Cần mua nhà đất, bất động sản | Batdongsan.com.vn')


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
                        <span class="select-text-content" style="width: 100.5px;">Nhà đất bán</span>
                    </span>
                    <input type="hidden" id="cboTypeSearch" value="1">
                </div>
                <div id="home-top-search-otions" class="advance-select-options advance-options" hddvalue="cboTypeSearch"
                    ddlid="home-top-search" style="">
                    <ul class="advance-options" style="min-width: 125px;">
                        <li vl="1" class="advance-options current" style="min-width: 93px;">Nhà đất bán</li>
                        <li vl="2" class="advance-options" style="min-width: 93px;">Nhà đất cho thuê</li>
                        <li vl="3" class="advance-options" style="min-width: 93px;">Tin tức</li>
                        <li vl="5" class="advance-options" style="min-width: 93px;">Dự án</li>
                        <li vl="6" class="advance-options" style="min-width: 93px;">Doanh nghiệp</li>
                        <li vl="7" class="advance-options" style="min-width: 93px;">Môi giới</li>
                    </ul>
                </div>
                <img src="/assets/image/header-bottom-button.jpg"
                    onclick="SearchKeyword();" class="fg-button fg-button-bg-default fg-button-toggleable ui-corner-all"
                    alt="Tìm kiếm" name="btnSearch" id="btnSearch">
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
                                    Nhà đất cần mua tại Việt Nam
                                </h1>
                                <div class="Footer">
                                    Có <span class="greencolor"><strong>369</strong></span> bất động sản.
                                </div>
                            </div>
                            <div class="Main">
                                <div class="Header">
                                    <div class="Left"></div>
                                    <div class="Repeat">
                                        <h2>
                                            Nhà đất cần mua tại Việt Nam
                                        </h2>
                                    </div>
                                    <div class="Right"></div>
                                </div>
                                <div class="vip2" uid="153939">
                                    <div class="p-title">
                                        <a href="https://batdongsan.com.vn/mua-nha-mat-pho-binh-thanh/can-tim-mua-nha-chinh-chu-gia-tot-tai-cac-quan-tp-hcm-ad105920"
                                            title="Cần tìm mua nhà chính chủ giá tốt tại các quận TP HCM">Cần tìm mua nhà
                                            chính chủ giá tốt tại các quận TP HCM</a>
                                    </div>
                                    <div class="p-main">
                                        <div class="p-main-image-crop">
                                            <a
                                                href="https://batdongsan.com.vn/mua-nha-mat-pho-binh-thanh/can-tim-mua-nha-chinh-chu-gia-tot-tai-cac-quan-tp-hcm-ad105920">
                                                <img class="product-avatar-img"
                                                    src="/assets/image/nophoto-175x116.jpg"
                                                    alt="Cần tìm mua nhà chính chủ giá tốt tại các quận TP HCM">
                                            </a>
                                        </div>
                                        <div class="p-content pos-relative">
                                            <div class="p-main-tex mar-bot-8">Cần tìm mua nhà chính chủ giá tốt, chưa qua
                                                kinh doanh, ngang trên 3m, có kết cấu. Đúng nhu cầu alo mình đi xem nha
                                                liền, và xuống tiền ngay nhé. Mặt tiền từ 1 tỷ - 10 tỷ. Khu vực: Q1, 3, 10,
                                                Bình Thạnh, Phú Nhuận, Tân Bình, Gò Vấp và Thủ Đức. Nếu mua được giá tốt sẽ
                                                gửi thêm 0,5% - 1.5%. Cho ace gi...</div>
                                            <div>
                                                <div class="floatleft">
                                                    Giá: <span class="product-price">1 tỷ - 10 tỷ</span>&nbsp;
                                                    Diện tích: <span class="product-area">Không xác định</span><br>
                                                    Quận/Huyện: <span class="product-city-dist">Bình Thạnh, Quận 1, Quận 10,
                                                        Quận 3, Thủ Đức</span>
                                                    <span class="inline-blk">
                                                        Tỉnh/TP: <span class="product-city-dist">Hồ Chí Minh</span>
                                                    </span>
                                                </div>
                                                <div class="floatright mar-right-10 bot-right-abs">
                                                    12/11/2020
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear10"></div>
                                    </div>
                                </div>
                                <div class="vip3" uid="153939">
                                    <div class="p-title">
                                        <a href="https://batdongsan.com.vn/mua-dat-ben-cat-bd/can-mua-dat-lam-nha-xuong-dien-tich-5ha-den-10ha-ad105984"
                                            title="Cần mua đất làm nhà xưởng diện tích 5ha đến 10ha ">Cần mua đất làm nhà
                                            xưởng diện tích 5ha đến 10ha </a>
                                    </div>
                                    <div class="p-main">
                                        <div class="p-main-image-crop">
                                            <a
                                                href="https://batdongsan.com.vn/mua-dat-ben-cat-bd/can-mua-dat-lam-nha-xuong-dien-tich-5ha-den-10ha-ad105984">
                                                <img class="product-avatar-img"
                                                    src="/assets/image/nophoto-175x116.jpg"
                                                    alt="Cần mua đất làm nhà xưởng diện tích 5ha đến 10ha ">
                                            </a>
                                        </div>
                                        <div class="p-content pos-relative">
                                            <div class="p-main-tex mar-bot-8">Cần mua đất làm nhà xưởng diện tích 5ha đến
                                                10ha cách trung tâm tp Hồ Chí Minh 30 đến 50km có điện nước đường xe
                                                container... Liên hệ Ms Nhung 0986501861....</div>
                                            <div>
                                                <div class="floatleft">
                                                    Giá: <span class="product-price">Thỏa thuận</span>&nbsp;
                                                    Diện tích: <span class="product-area">50000 m² - 100000 m²</span><br>
                                                    Quận/Huyện: <span class="product-city-dist">Bến Cát, Dĩ An, Tân Uyên,
                                                        Thủ Dầu Một, Thuận An</span>
                                                    <span class="inline-blk">
                                                        Tỉnh/TP: <span class="product-city-dist">Bình Dương</span>
                                                    </span>
                                                </div>
                                                <div class="floatright mar-right-10 bot-right-abs">
                                                    13/11/2020
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear10"></div>
                                    </div>
                                </div>
                                <div class="vip3" uid="153939">
                                    <div class="p-title">
                                        <a href="https://batdongsan.com.vn/mua-dat-nen-du-an-green-city/khach-ha-noi-can-tim-hang-gia-tot-du-an-green-city-va-seaview-dau-tu-ad104242"
                                            title="Khách Hà Nội cần tìm hàng gía tốt dự án Green City và Seaview đầu tư">Khách
                                            Hà Nội cần tìm hàng gía tốt dự án Green City và Seaview đầu tư</a>
                                    </div>
                                    <div class="p-main">
                                        <div class="p-main-image-crop">
                                            <a
                                                href="https://batdongsan.com.vn/mua-dat-nen-du-an-green-city/khach-ha-noi-can-tim-hang-gia-tot-du-an-green-city-va-seaview-dau-tu-ad104242">
                                                <img class="product-avatar-img"
                                                    src="/assets/image/20201013134209-a3f8.jpg"
                                                    alt="Khách Hà Nội cần tìm hàng gía tốt dự án Green City và Seaview đầu tư">
                                            </a>
                                        </div>
                                        <div class="p-content pos-relative">
                                            <div class="p-main-tex mar-bot-8">Khách Hà Nội cần tìm hàng gía tốt dự án Green
                                                City và Seaview đầu tư.Mình có khách nét cần đầu tư 2 dự án Green City và
                                                Sea View.- Yêu cầu: + Lô sạch không dính cống và ngã 3. + Seaview cần tìm
                                                block quanh chợ. + Gía tốt so với thị trường hiện tại.- Anh chị ai có nhu
                                                cầu ra hàng 2 dự án trên hoặc ac...</div>
                                            <div>
                                                <div class="floatleft">
                                                    Giá: <span class="product-price">Thỏa thuận</span>&nbsp;
                                                    Diện tích: <span class="product-area">Không xác định</span><br>
                                                    Quận/Huyện: <span class="product-city-dist">Điện Bàn</span>
                                                    <span class="inline-blk">
                                                        Tỉnh/TP: <span class="product-city-dist">Quảng Nam</span>
                                                    </span>
                                                </div>
                                                <div class="floatright mar-right-10 bot-right-abs">
                                                    13/10/2020
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear10"></div>
                                    </div>
                                </div>
                                <div class="vip5" uid="49523">
                                    <div class="p-title">
                                        <a href="https://batdongsan.com.vn/mua-can-ho-chung-cu-quan-2/khach-can-mua-can-ho-gan-cau-sai-gon-2pn-co-so-de-vay-ad106008"
                                            title="Khách cần mua căn hộ gần Cầu Sài Gòn, 2pn có sổ, để vay">Khách cần mua
                                            căn hộ gần Cầu Sài Gòn, 2pn có sổ, để vay</a>
                                    </div>
                                    <div class="p-main">
                                        <div class="p-main-image-crop">
                                            <a
                                                href="https://batdongsan.com.vn/mua-can-ho-chung-cu-quan-2/khach-can-mua-can-ho-gan-cau-sai-gon-2pn-co-so-de-vay-ad106008">
                                                <img class="product-avatar-img"
                                                    src="/assets/image/no-photo1.jpg"
                                                    alt="Khách cần mua căn hộ gần Cầu Sài Gòn, 2pn có sổ, để vay">
                                            </a>
                                        </div>
                                        <div class="p-content pos-relative">
                                            <div class="p-main-tex mar-bot-8">Khách cần mua căn hộ gần cầu Sài Gòn, 2pn có
                                                sổ, để vay. Tài chính max 3 tỷ 5. Anh chị có căn zalo 0937873268....</div>
                                            <div>
                                                <div class="floatleft">
                                                    Giá: <span class="product-price">3 tỷ - 5 tỷ</span>&nbsp;
                                                    Diện tích: <span class="product-area">80 m² - 100 m²</span><br>
                                                    Quận/Huyện: <span class="product-city-dist">Quận 2</span>
                                                    <span class="inline-blk">
                                                        Tỉnh/TP: <span class="product-city-dist">Hồ Chí Minh</span>
                                                    </span>
                                                </div>
                                                <div class="floatright mar-right-10 bot-right-abs">
                                                    16/11/2020
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear10"></div>
                                    </div>
                                </div>
                                <div class="vip5" uid="1477953">
                                    <div class="p-title">
                                        <a href="https://batdongsan.com.vn/mua-dat-thi-tran-hiep-phuoc/can-nguon-dat-chinh-chu-o-nhon-trach-ad106007"
                                            title="Cần nguồn đất chính chủ ở Nhơn Trạch">Cần nguồn đất chính chủ ở Nhơn
                                            Trạch</a>
                                    </div>
                                    <div class="p-main">
                                        <div class="p-main-image-crop">
                                            <a
                                                href="https://batdongsan.com.vn/mua-dat-thi-tran-hiep-phuoc/can-nguon-dat-chinh-chu-o-nhon-trach-ad106007">
                                                <img class="product-avatar-img"
                                                    src="/assets/image/20201115095630-0a93_wm.jpg"
                                                    alt="Cần nguồn đất chính chủ ở Nhơn Trạch">
                                            </a>
                                        </div>
                                        <div class="p-content pos-relative">
                                            <div class="p-main-tex mar-bot-8">Mình cần nguồn đất chính chủ giá rẻ ở Nhơn
                                                Trạch để giao cho khách, khách sẵn tiền và chốt ngay nếu đất đẹp và rẻ. Để
                                                trữ hàng sang năm bùng nổ....</div>
                                            <div>
                                                <div class="floatleft">
                                                    Giá: <span class="product-price">Thỏa thuận</span>&nbsp;
                                                    Diện tích: <span class="product-area">Không xác định</span><br>
                                                    Quận/Huyện: <span class="product-city-dist">Nhơn Trạch</span>
                                                    <span class="inline-blk">
                                                        Tỉnh/TP: <span class="product-city-dist">Đồng Nai</span>
                                                    </span>
                                                </div>
                                                <div class="floatright mar-right-10 bot-right-abs">
                                                    16/11/2020
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear10"></div>
                                    </div>
                                </div>
                                <div class="vip5" uid="181520">
                                    <div class="p-title">
                                        <a href="https://batdongsan.com.vn/mua-dat-nen-du-an-khu-do-thi-my-phuoc-3/do-co-luong-tien-nhan-roi-nen-toi-hien-dang-rat-quan-tam-mua-dat-my-phuoc-3-binh-duong-de-dau-tu-ad105999"
                                            title="Do có lượng tiền nhàn rỗi nên tôi hiện đang rất quan tâm mua đất Mỹ Phước 3 Bình Dương để đầu tư ">Do
                                            có lượng tiền nhàn rỗi nên tôi hiện đang rất quan tâm mua đất Mỹ Phước 3 Bình
                                            Dương để đầu tư </a>
                                    </div>
                                    <div class="p-main">
                                        <div class="p-main-image-crop">
                                            <a
                                                href="https://batdongsan.com.vn/mua-dat-nen-du-an-khu-do-thi-my-phuoc-3/do-co-luong-tien-nhan-roi-nen-toi-hien-dang-rat-quan-tam-mua-dat-my-phuoc-3-binh-duong-de-dau-tu-ad105999">
                                                <img class="product-avatar-img"
                                                    src="/assets/image/20201114135841-ca5d_wm.jpg"
                                                    alt="Do có lượng tiền nhàn rỗi nên tôi hiện đang rất quan tâm mua đất Mỹ Phước 3 Bình Dương để đầu tư ">
                                            </a>
                                        </div>
                                        <div class="p-content pos-relative">
                                            <div class="p-main-tex mar-bot-8">Do có lượng tiền nhàn rỗi nên tôi hiện đang
                                                rất quan tâm mua đất Mỹ Phước 3 Bình Dương để đầu tư gấp số lượng lớn các
                                                nền đất tại đây.Cần mua lô L2, lô L3, lô L4, lô L5, lô L6, lô L7 Mỹ Phước 3
                                                không quan trọng hướng đất, mua nhanh nhiều nền liền kề nhau càng tốt.Khách
                                                hàng đã mua đất Mỹ Phước 3 nay...</div>
                                            <div>
                                                <div class="floatleft">
                                                    Giá: <span class="product-price">Thỏa thuận</span>&nbsp;
                                                    Diện tích: <span class="product-area">100 m² - 300 m²</span><br>
                                                    Quận/Huyện: <span class="product-city-dist">Bến Cát</span>
                                                    <span class="inline-blk">
                                                        Tỉnh/TP: <span class="product-city-dist">Bình Dương</span>
                                                    </span>
                                                </div>
                                                <div class="floatright mar-right-10 bot-right-abs">
                                                    16/11/2020
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear10"></div>
                                    </div>
                                </div>
                                <div class="vip5" uid="227049">
                                    <div class="p-title">
                                        <a href="https://batdongsan.com.vn/mua-can-ho-chung-cu-the-manor-tp-ho-chi-minh/can-mua-can-ho-the-manor-nguyen-huu-canh-ad105996"
                                            title="Cần mua căn hộ The Manor, Nguyễn Hữu Cảnh">Cần mua căn hộ The Manor,
                                            Nguyễn Hữu Cảnh</a>
                                    </div>
                                    <div class="p-main">
                                        <div class="p-main-image-crop">
                                            <a
                                                href="https://batdongsan.com.vn/mua-can-ho-chung-cu-the-manor-tp-ho-chi-minh/can-mua-can-ho-the-manor-nguyen-huu-canh-ad105996">
                                                <img class="product-avatar-img"
                                                    src="/assets/image/nophoto-175x116.jpg"
                                                    alt="Cần mua căn hộ The Manor, Nguyễn Hữu Cảnh">
                                            </a>
                                        </div>
                                        <div class="p-content pos-relative">
                                            <div class="p-main-tex mar-bot-8">Cần mua căn hộ 2 PN, diện tích khoảng 100m2,
                                                tầng từ 15 trở lên, giá từ 4 tỷ trở xuống....</div>
                                            <div>
                                                <div class="floatleft">
                                                    Giá: <span class="product-price">3 tỷ - 4 tỷ</span>&nbsp;
                                                    Diện tích: <span class="product-area">Dưới 100 m²</span><br>
                                                    Quận/Huyện: <span class="product-city-dist">Bình Thạnh</span>
                                                    <span class="inline-blk">
                                                        Tỉnh/TP: <span class="product-city-dist">Hồ Chí Minh</span>
                                                    </span>
                                                </div>
                                                <div class="floatright mar-right-10 bot-right-abs">
                                                    16/11/2020
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear10"></div>
                                    </div>
                                </div>
                                <div class="vip5" uid="1286086">
                                    <div class="p-title">
                                        <a href="https://batdongsan.com.vn/mua-dat-nen-du-an-khu-do-thi-manh-hung/can-mua-lo-dat-giai-doan-2-manh-hung-ha-nam-nhu-cau-xay-nha-de-o-ad105995"
                                            title="Cần mua lô đất giai đoạn 2 Mạnh Hùng Hà Nam. Nhu cầu xây nhà để ở">Cần
                                            mua lô đất giai đoạn 2 Mạnh Hùng Hà Nam. Nhu cầu xây nhà để ở</a>
                                    </div>
                                    <div class="p-main">
                                        <div class="p-main-image-crop">
                                            <a
                                                href="https://batdongsan.com.vn/mua-dat-nen-du-an-khu-do-thi-manh-hung/can-mua-lo-dat-giai-doan-2-manh-hung-ha-nam-nhu-cau-xay-nha-de-o-ad105995">
                                                <img class="product-avatar-img"
                                                    src="/assets/image/20201114105328-aa95_wm.jpg"
                                                    alt="Cần mua lô đất giai đoạn 2 Mạnh Hùng Hà Nam. Nhu cầu xây nhà để ở">
                                            </a>
                                        </div>
                                        <div class="p-content pos-relative">
                                            <div class="p-main-tex mar-bot-8">Cần tim mua lô đất mạnh hùng giai đoạn hai cho
                                                đôi vợ chồng trẻ. Nhu cầu thực sự cần mua xây nhà để ở. DT 80 - 100m2. Mong
                                                muốn mua được giá cả đàm phán vừa phải hợp lý....</div>
                                            <div>
                                                <div class="floatleft">
                                                    Giá: <span class="product-price">Thỏa thuận</span>&nbsp;
                                                    Diện tích: <span class="product-area">80 m² - 100 m²</span><br>
                                                    Quận/Huyện: <span class="product-city-dist">Lý Nhân</span>
                                                    <span class="inline-blk">
                                                        Tỉnh/TP: <span class="product-city-dist">Hà Nam</span>
                                                    </span>
                                                </div>
                                                <div class="floatright mar-right-10 bot-right-abs">
                                                    16/11/2020
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear10"></div>
                                    </div>
                                </div>
                                <div class="vip5" uid="1434729">
                                    <div class="p-title">
                                        <a href="https://batdongsan.com.vn/mua-dat-xa-tien-xuan/can-mua-dat-lam-nha-vuon-khu-vuc-tien-xuan-yen-binh-ad105989"
                                            title="Cần mua đất làm nhà vườn khu vực Tiến Xuân, Yên Bình">Cần mua đất làm nhà
                                            vườn khu vực Tiến Xuân, Yên Bình</a>
                                    </div>
                                    <div class="p-main">
                                        <div class="p-main-image-crop">
                                            <a
                                                href="https://batdongsan.com.vn/mua-dat-xa-tien-xuan/can-mua-dat-lam-nha-vuon-khu-vuc-tien-xuan-yen-binh-ad105989">
                                                <img class="product-avatar-img"
                                                    src="/assets/image/20201114092600-5748_wm.jpeg"
                                                    alt="Cần mua đất làm nhà vườn khu vực Tiến Xuân, Yên Bình">
                                            </a>
                                        </div>
                                        <div class="p-content pos-relative">
                                            <div class="p-main-tex mar-bot-8">Cần mua đất làm nhà vườn, diện tích 1000 -
                                                1500m2, đường rộng ô tô vào đất, ven suối hoặc view hồ nước là một lợi thế.
                                                Tài chính 2 tỷ. AE có đất thông tin lại giúp....</div>
                                            <div>
                                                <div class="floatleft">
                                                    Giá: <span class="product-price">1 tỷ - 2 tỷ</span>&nbsp;
                                                    Diện tích: <span class="product-area">1000 m² - 1500 m²</span><br>
                                                    Quận/Huyện: <span class="product-city-dist">Thạch Thất</span>
                                                    <span class="inline-blk">
                                                        Tỉnh/TP: <span class="product-city-dist">Hà Nội</span>
                                                    </span>
                                                </div>
                                                <div class="floatright mar-right-10 bot-right-abs">
                                                    16/11/2020
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear10"></div>
                                    </div>
                                </div>
                                <div class="vip5" uid="0">
                                    <div class="p-title">
                                        <a href="https://batdongsan.com.vn/mua-can-ho-chung-cu-imperial-plaza/toi-can-mua-can-ho-chung-cu-tai-360-giai-phong-ad106009"
                                            title="Tôi cần mua căn hộ chung cư tại 360 Giải Phóng">Tôi cần mua căn hộ chung
                                            cư tại 360 Giải Phóng</a>
                                    </div>
                                    <div class="p-main">
                                        <div class="p-main-image-crop">
                                            <a
                                                href="https://batdongsan.com.vn/mua-can-ho-chung-cu-imperial-plaza/toi-can-mua-can-ho-chung-cu-tai-360-giai-phong-ad106009">
                                                <img class="product-avatar-img"
                                                    src="/assets/image/nophoto-175x116.jpg"
                                                    alt="Tôi cần mua căn hộ chung cư tại 360 Giải Phóng">
                                            </a>
                                        </div>
                                        <div class="p-content pos-relative">
                                            <div class="p-main-tex mar-bot-8">Tôi có nhu cầu mua 01 căn hộ chung cư tại 360
                                                Giải Phóng: 3 phòng ngủ, cửa vào hướng nam, ban công bắc. Tôi có liên hệ với
                                                môi giới nhưng nhìn chung giá cả bị thổi cao. Hy vọng gặp được người cần
                                                bán. Đt: 0908151978....</div>
                                            <div>
                                                <div class="floatleft">
                                                    Giá: <span class="product-price">Thỏa thuận</span>&nbsp;
                                                    Diện tích: <span class="product-area">100 m² - 150 m²</span><br>
                                                    Quận/Huyện: <span class="product-city-dist">Thanh Xuân</span>
                                                    <span class="inline-blk">
                                                        Tỉnh/TP: <span class="product-city-dist">Hà Nội</span>
                                                    </span>
                                                </div>
                                                <div class="floatright mar-right-10 bot-right-abs">
                                                    16/11/2020
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear10"></div>
                                    </div>
                                </div>
                                <div class="vip5" uid="1434037">
                                    <div class="p-title">
                                        <a href="https://batdongsan.com.vn/mua-can-ho-chung-cu-khu-do-thi-trung-hoa-nhan-chinh/can-mua-nha-tai-chung-cu-24t2-hoang-dao-thuy-ad106028"
                                            title="Cần mua nhà tại chung cư 24T2 Hoàng Đạo Thúy">Cần mua nhà tại chung cư
                                            24T2 Hoàng Đạo Thúy</a>
                                    </div>
                                    <div class="p-main">
                                        <div class="p-main-image-crop">
                                            <a
                                                href="https://batdongsan.com.vn/mua-can-ho-chung-cu-khu-do-thi-trung-hoa-nhan-chinh/can-mua-nha-tai-chung-cu-24t2-hoang-dao-thuy-ad106028">
                                                <img class="product-avatar-img"
                                                    src="/assets/image/nophoto-175x116.jpg"
                                                    alt="Cần mua nhà tại chung cư 24T2 Hoàng Đạo Thúy">
                                            </a>
                                        </div>
                                        <div class="p-content pos-relative">
                                            <div class="p-main-tex mar-bot-8">Mình có nhu cầu mua nhà tại căn chung cư 24t2
                                                Hoàng Đạo Thuý. Bạn nào đang có nhu cầu bán liên hệ với mình qua số
                                                0988388204. Yêu cầu: Ưu tiên các trục hướng mát....</div>
                                            <div>
                                                <div class="floatleft">
                                                    Giá: <span class="product-price">Thỏa thuận</span>&nbsp;
                                                    Diện tích: <span class="product-area">100 m² - 150 m²</span><br>
                                                    Quận/Huyện: <span class="product-city-dist">Cầu Giấy</span>
                                                    <span class="inline-blk">
                                                        Tỉnh/TP: <span class="product-city-dist">Hà Nội</span>
                                                    </span>
                                                </div>
                                                <div class="floatright mar-right-10 bot-right-abs">
                                                    16/11/2020
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear10"></div>
                                    </div>
                                </div>
                                <div class="vip5" uid="871056">
                                    <div class="p-title">
                                        <a href="https://batdongsan.com.vn/mua-dat-ha-dong/can-mua-khoang-150-200m2-dat-lam-nha-xuong-ad105975"
                                            title="Cần mua khoảng 150 - 200m2 đất làm nhà xưởng">Cần mua khoảng 150 - 200m2
                                            đất làm nhà xưởng</a>
                                    </div>
                                    <div class="p-main">
                                        <div class="p-main-image-crop">
                                            <a
                                                href="https://batdongsan.com.vn/mua-dat-ha-dong/can-mua-khoang-150-200m2-dat-lam-nha-xuong-ad105975">
                                                <img class="product-avatar-img"
                                                    src="/assets/image/nophoto-175x116.jpg"
                                                    alt="Cần mua khoảng 150 - 200m2 đất làm nhà xưởng">
                                            </a>
                                        </div>
                                        <div class="p-content pos-relative">
                                            <div class="p-main-tex mar-bot-8">Tôi có nhu cầu mua khoảng 150 - 200m2 đất ở có
                                                thể làm nhà xưởng quanh khu vực Hà Đông, Thanh Oai, Đường 32......</div>
                                            <div>
                                                <div class="floatleft">
                                                    Giá: <span class="product-price">800 triệu - 1 tỷ</span>&nbsp;
                                                    Diện tích: <span class="product-area">150 m² - 200 m²</span><br>
                                                    Quận/Huyện: <span class="product-city-dist">Hà Đông, Thanh Oai</span>
                                                    <span class="inline-blk">
                                                        Tỉnh/TP: <span class="product-city-dist">Hà Nội</span>
                                                    </span>
                                                </div>
                                                <div class="floatright mar-right-10 bot-right-abs">
                                                    13/11/2020
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear10"></div>
                                    </div>
                                </div>
                                <div class="vip5" uid="1509201">
                                    <div class="p-title">
                                        <a href="https://batdongsan.com.vn/mua-can-ho-chung-cu-phuong-long-bien/can-mua-chcc-gan-duong-co-linh-uu-tien-huong-dong-nam-moi-ban-giao-noi-that-co-ban-ad105973"
                                            title="Cần mua CHCC gần đường Cổ Linh, ưu tiên hướng Đông Nam, mới bàn giao, nội thất cơ bản">Cần
                                            mua CHCC gần đường Cổ Linh, ưu tiên hướng Đông Nam, mới bàn giao, nội thất cơ
                                            bản</a>
                                    </div>
                                    <div class="p-main">
                                        <div class="p-main-image-crop">
                                            <a
                                                href="https://batdongsan.com.vn/mua-can-ho-chung-cu-phuong-long-bien/can-mua-chcc-gan-duong-co-linh-uu-tien-huong-dong-nam-moi-ban-giao-noi-that-co-ban-ad105973">
                                                <img class="product-avatar-img"
                                                    src="/assets/image/nophoto-175x116.jpg"
                                                    alt="Cần mua CHCC gần đường Cổ Linh, ưu tiên hướng Đông Nam, mới bàn giao, nội thất cơ bản">
                                            </a>
                                        </div>
                                        <div class="p-content pos-relative">
                                            <div class="p-main-tex mar-bot-8">Mình đang cần mua 1 CHCC từ 70 - 80m2, gia
                                                đình 2 người lớn 2 trẻ nhỏ. Mình đang có 1 nhà mặt đất đã đầy đủ nội thất
                                                nên chỉ yêu cầu CHCC có nội thất cơ bản, sàn gỗ, thiết bị vệ sinh... Yêu cầu
                                                sổ đỏ chính chủ, chỉ làm việc với chủ nhà không tiếp môi giới. Hiện mình
                                                đang ở trên đường Cổ Linh nên ưu ...</div>
                                            <div>
                                                <div class="floatleft">
                                                    Giá: <span class="product-price">1 tỷ - 2 tỷ</span>&nbsp;
                                                    Diện tích: <span class="product-area">70 m² - 80 m²</span><br>
                                                    Quận/Huyện: <span class="product-city-dist">Long Biên</span>
                                                    <span class="inline-blk">
                                                        Tỉnh/TP: <span class="product-city-dist">Hà Nội</span>
                                                    </span>
                                                </div>
                                                <div class="floatright mar-right-10 bot-right-abs">
                                                    13/11/2020
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear10"></div>
                                    </div>
                                </div>
                                <div class="vip5" uid="1470655">
                                    <div class="p-title">
                                        <a href="https://batdongsan.com.vn/mua-nha-rieng-phuong-13-10/can-mua-nha-de-o-kh-bau-cat-tan-binh-ad105944"
                                            title="Cần mua nhà để ở KH Bàu Cát, Tân Bình">Cần mua nhà để ở KH Bàu Cát, Tân
                                            Bình</a>
                                    </div>
                                    <div class="p-main">
                                        <div class="p-main-image-crop">
                                            <a
                                                href="https://batdongsan.com.vn/mua-nha-rieng-phuong-13-10/can-mua-nha-de-o-kh-bau-cat-tan-binh-ad105944">
                                                <img class="product-avatar-img"
                                                    src="/assets/image/nophoto-175x116.jpg"
                                                    alt="Cần mua nhà để ở KH Bàu Cát, Tân Bình">
                                            </a>
                                        </div>
                                        <div class="p-content pos-relative">
                                            <div class="p-main-tex mar-bot-8">Vị trí: Gần khu vực Bàu Cát, Tân Bình. Tài
                                                chính: 5 - 6 tỷ. Diện tích: Thỏa thuận. Hẻm ô tô càng tốt. Anh chị em môi
                                                giới hợp tác gửi zalo qua cho em Chiến: 0911753911. Em cảm ơn....</div>
                                            <div>
                                                <div class="floatleft">
                                                    Giá: <span class="product-price">5 tỷ - 6 tỷ</span>&nbsp;
                                                    Diện tích: <span class="product-area">Không xác định</span><br>
                                                    Quận/Huyện: <span class="product-city-dist">Tân Bình</span>
                                                    <span class="inline-blk">
                                                        Tỉnh/TP: <span class="product-city-dist">Hồ Chí Minh</span>
                                                    </span>
                                                </div>
                                                <div class="floatright mar-right-10 bot-right-abs">
                                                    12/11/2020
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear10"></div>
                                    </div>
                                </div>
                                <div class="vip5" uid="1480487">
                                    <div class="p-title">
                                        <a href="https://batdongsan.com.vn/mua-can-ho-chung-cu-phuong-nhat-tan-2/can-mua-chung-cu-view-ho-tay-1-8-ty-do-lai-ad105967"
                                            title="Cần mua chung cư view Hồ Tây 1,8 tỷ đổ lại">Cần mua chung cư view Hồ Tây
                                            1,8 tỷ đổ lại</a>
                                    </div>
                                    <div class="p-main">
                                        <div class="p-main-image-crop">
                                            <a
                                                href="https://batdongsan.com.vn/mua-can-ho-chung-cu-phuong-nhat-tan-2/can-mua-chung-cu-view-ho-tay-1-8-ty-do-lai-ad105967">
                                                <img class="product-avatar-img"
                                                    src="/assets/image/nophoto-175x116.jpg"
                                                    alt="Cần mua chung cư view Hồ Tây 1,8 tỷ đổ lại">
                                            </a>
                                        </div>
                                        <div class="p-content pos-relative">
                                            <div class="p-main-tex mar-bot-8">Chỉ mua chung cư có hướng view Hồ Tây, 1,8 tỷ
                                                đổ lại, yêu cầu có sổ đỏ đầy đủ. Nhà có nội thất luôn càng tốt. Liên hệ Minh
                                                0368.58.57.56....</div>
                                            <div>
                                                <div class="floatleft">
                                                    Giá: <span class="product-price">1 tỷ - 1.8 tỷ</span>&nbsp;
                                                    Diện tích: <span class="product-area">Không xác định</span><br>
                                                    Quận/Huyện: <span class="product-city-dist">Tây Hồ</span>
                                                    <span class="inline-blk">
                                                        Tỉnh/TP: <span class="product-city-dist">Hà Nội</span>
                                                    </span>
                                                </div>
                                                <div class="floatright mar-right-10 bot-right-abs">
                                                    12/11/2020
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear10"></div>
                                    </div>
                                </div>
                                <div class="vip5" uid="807867">
                                    <div class="p-title">
                                        <a href="https://batdongsan.com.vn/mua-dat-bac-ninh-bn/can-mua-dat-luong-tai-gia-binh-bac-ninh-0986287189-ad105964"
                                            title="Cần mua đất Lương Tài, Gia Bình, Bắc Ninh, 0986287189">Cần mua đất Lương
                                            Tài, Gia Bình, Bắc Ninh, 0986287189</a>
                                    </div>
                                    <div class="p-main">
                                        <div class="p-main-image-crop">
                                            <a
                                                href="https://batdongsan.com.vn/mua-dat-bac-ninh-bn/can-mua-dat-luong-tai-gia-binh-bac-ninh-0986287189-ad105964">
                                                <img class="product-avatar-img"
                                                    src="/assets/image/nophoto-175x116.jpg"
                                                    alt="Cần mua đất Lương Tài, Gia Bình, Bắc Ninh, 0986287189">
                                            </a>
                                        </div>
                                        <div class="p-content pos-relative">
                                            <div class="p-main-tex mar-bot-8">Công ty Bất Động sản Lộc Phát cần mua đất khu
                                                vực Gia Bình, Lương Tài, Quế Võ, Bắc Ninh với giá cao nhất thị trường.
                                                0986287189....</div>
                                            <div>
                                                <div class="floatleft">
                                                    Giá: <span class="product-price">Thỏa thuận</span>&nbsp;
                                                    Diện tích: <span class="product-area">Không xác định</span><br>
                                                    Quận/Huyện: <span class="product-city-dist">Bắc Ninh, Gia Bình, Lương
                                                        Tài</span>
                                                    <span class="inline-blk">
                                                        Tỉnh/TP: <span class="product-city-dist">Bắc Ninh</span>
                                                    </span>
                                                </div>
                                                <div class="floatright mar-right-10 bot-right-abs">
                                                    12/11/2020
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear10"></div>
                                    </div>
                                </div>
                                <div class="vip5" uid="0">
                                    <div class="p-title">
                                        <a href="https://batdongsan.com.vn/mua-can-ho-chung-cu-luxgarden/can-mua-can-ho-lux-garden-tu-2-3pn-lau-cao-ad105950"
                                            title="Cần mua căn hộ Lux Garden từ 2-3pn lầu cao">Cần mua căn hộ Lux Garden từ
                                            2-3pn lầu cao</a>
                                    </div>
                                    <div class="p-main">
                                        <div class="p-main-image-crop">
                                            <a
                                                href="https://batdongsan.com.vn/mua-can-ho-chung-cu-luxgarden/can-mua-can-ho-lux-garden-tu-2-3pn-lau-cao-ad105950">
                                                <img class="product-avatar-img"
                                                    src="/assets/image/nophoto-175x116.jpg"
                                                    alt="Cần mua căn hộ Lux Garden từ 2-3pn lầu cao">
                                            </a>
                                        </div>
                                        <div class="p-content pos-relative">
                                            <div class="p-main-tex mar-bot-8">Cần mua căn hộ Lux Garden tầng cao 2 - 3 pn.
                                                Tel: 0983581293....</div>
                                            <div>
                                                <div class="floatleft">
                                                    Giá: <span class="product-price">Thỏa thuận</span>&nbsp;
                                                    Diện tích: <span class="product-area">Không xác định</span><br>
                                                    Quận/Huyện: <span class="product-city-dist">Quận 7</span>
                                                    <span class="inline-blk">
                                                        Tỉnh/TP: <span class="product-city-dist">Hồ Chí Minh</span>
                                                    </span>
                                                </div>
                                                <div class="floatright mar-right-10 bot-right-abs">
                                                    12/11/2020
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear10"></div>
                                    </div>
                                </div>
                                <div class="vip5" uid="1508523">
                                    <div class="p-title">
                                        <a href="https://batdongsan.com.vn/mua-dat-nen-du-an-bac-lieu-bl/mua-dat-khu-dan-cu-va-khu-do-thi-noi-o-thanh-pho-bac-lieu-tinh-bac-lieu-co-phap-ly-ro-rang-ad105931"
                                            title="Mua đất khu dân cư và khu đô thị nội ô thành phố Bạc Liêu, Tỉnh Bạc Liêu có pháp lý rõ ràng">Mua
                                            đất khu dân cư và khu đô thị nội ô thành phố Bạc Liêu, Tỉnh Bạc Liêu có pháp lý
                                            rõ ràng</a>
                                    </div>
                                    <div class="p-main">
                                        <div class="p-main-image-crop">
                                            <a
                                                href="https://batdongsan.com.vn/mua-dat-nen-du-an-bac-lieu-bl/mua-dat-khu-dan-cu-va-khu-do-thi-noi-o-thanh-pho-bac-lieu-tinh-bac-lieu-co-phap-ly-ro-rang-ad105931">
                                                <img class="product-avatar-img"
                                                    src="/assets/image/nophoto-175x116.jpg"
                                                    alt="Mua đất khu dân cư và khu đô thị nội ô thành phố Bạc Liêu, Tỉnh Bạc Liêu có pháp lý rõ ràng">
                                            </a>
                                        </div>
                                        <div class="p-content pos-relative">
                                            <div class="p-main-tex mar-bot-8">Mua đất khu dân cư và khu đô thị nội ô thành
                                                phố Bạc Liêu, Tỉnh Bạc Liêu. Pháp lý rõ ràng và đất thổ cư....</div>
                                            <div>
                                                <div class="floatleft">
                                                    Giá: <span class="product-price">Thỏa thuận</span>&nbsp;
                                                    Diện tích: <span class="product-area">Không xác định</span><br>
                                                    Quận/Huyện: <span class="product-city-dist">Bạc Liêu</span>
                                                    <span class="inline-blk">
                                                        Tỉnh/TP: <span class="product-city-dist">Bạc Liêu</span>
                                                    </span>
                                                </div>
                                                <div class="floatright mar-right-10 bot-right-abs">
                                                    12/11/2020
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear10"></div>
                                    </div>
                                </div>
                                <div class="vip5" uid="215816">
                                    <div class="p-title">
                                        <a href="https://batdongsan.com.vn/mua-nha-rieng-phuong-hiep-binh-chanh/can-mua-nha-thu-duc-can-mua-nha-nat-ad105927"
                                            title="Cần mua nhà Thủ Đức cần mua nhà nát">Cần mua nhà Thủ Đức cần mua nhà
                                            nát</a>
                                    </div>
                                    <div class="p-main">
                                        <div class="p-main-image-crop">
                                            <a
                                                href="https://batdongsan.com.vn/mua-nha-rieng-phuong-hiep-binh-chanh/can-mua-nha-thu-duc-can-mua-nha-nat-ad105927">
                                                <img class="product-avatar-img"
                                                    src="/assets/image/nophoto-175x116.jpg"
                                                    alt="Cần mua nhà Thủ Đức cần mua nhà nát">
                                            </a>
                                        </div>
                                        <div class="p-content pos-relative">
                                            <div class="p-main-tex mar-bot-8">Cần mua nhà nát có sổ hồng quận Thủ Đức,
                                                phường Hiệp Bình Chánh, Hiệp Bình Phước, Linh Đông, Linh Tây, Trường Thọ,
                                                Bình Thọ, Linh Xuân, Linh Chiểu....</div>
                                            <div>
                                                <div class="floatleft">
                                                    Giá: <span class="product-price">Thỏa thuận</span>&nbsp;
                                                    Diện tích: <span class="product-area">Không xác định</span><br>
                                                    Quận/Huyện: <span class="product-city-dist">Thủ Đức</span>
                                                    <span class="inline-blk">
                                                        Tỉnh/TP: <span class="product-city-dist">Hồ Chí Minh</span>
                                                    </span>
                                                </div>
                                                <div class="floatright mar-right-10 bot-right-abs">
                                                    12/11/2020
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear10"></div>
                                    </div>
                                </div>
                                <div class="vip5" uid="638941">
                                    <div class="p-title">
                                        <a href="https://batdongsan.com.vn/mua-nha-mat-pho-phuong-trung-hoa-4/thue-mha-mat-tien-rong-thoang-kinh-doanh-duoc-co-chieu-rong-tu-5-7-met-ad105926"
                                            title="Thuê mhà mặt tiền rộng thoáng kinh doanh được có chiều rộng từ 5-7 mét">Thuê
                                            mhà mặt tiền rộng thoáng kinh doanh được có chiều rộng từ 5-7 mét</a>
                                    </div>
                                    <div class="p-main">
                                        <div class="p-main-image-crop">
                                            <a
                                                href="https://batdongsan.com.vn/mua-nha-mat-pho-phuong-trung-hoa-4/thue-mha-mat-tien-rong-thoang-kinh-doanh-duoc-co-chieu-rong-tu-5-7-met-ad105926">
                                                <img class="product-avatar-img"
                                                    src="/assets/image/nophoto-175x116.jpg"
                                                    alt="Thuê mhà mặt tiền rộng thoáng kinh doanh được có chiều rộng từ 5-7 mét">
                                            </a>
                                        </div>
                                        <div class="p-content pos-relative">
                                            <div class="p-main-tex mar-bot-8">Kinh doanh cho thuê dễ dàng. Nhà mặt tiền rộng
                                                thoáng kinh doanh được có chiều rộng từ 5 - 7 mét. DTL: 80 - 100m2....</div>
                                            <div>
                                                <div class="floatleft">
                                                    Giá: <span class="product-price">Thỏa thuận</span>&nbsp;
                                                    Diện tích: <span class="product-area">80 m² - 100 m²</span><br>
                                                    Quận/Huyện: <span class="product-city-dist">Cầu Giấy</span>
                                                    <span class="inline-blk">
                                                        Tỉnh/TP: <span class="product-city-dist">Hà Nội</span>
                                                    </span>
                                                </div>
                                                <div class="floatright mar-right-10 bot-right-abs">
                                                    12/11/2020
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear10"></div>
                                    </div>
                                </div>

                                <div class="clear"></div>
                            </div>
                            <div class="clear"></div>
                            <div class="separable"></div>
                            <div>
                                <h3></h3>
                            </div>
                            <div class="separable">
                                <br>
                            </div>
                            <div>
                                <h3>Tìm Nhà đất cần mua khác tại Việt Nam</h3>
                            </div>
                            <div class="separable">
                                <br>
                            </div>
                            <div class="margit5">
                                <div class="tc-tit-bottom">
                                    <div class="ks-pagination-links" align="center" stype="float: right">
                                        <a pid="1" href="https://batdongsan.com.vn/nha-dat-can-mua">
                                            <div class="style-pager-row-selected">1</div>
                                        </a>
                                        <a pid="2" href="https://batdongsan.com.vn/nha-dat-can-mua/p2">
                                            <div class="">2</div>
                                        </a>
                                        <a pid="3" href="https://batdongsan.com.vn/nha-dat-can-mua/p3">
                                            <div class="">3</div>
                                        </a>
                                        <a pid="4" href="https://batdongsan.com.vn/nha-dat-can-mua/p4">
                                            <div class="">4</div>
                                        </a>
                                        <a pid="5" href="https://batdongsan.com.vn/nha-dat-can-mua/p5">
                                            <div class="">5</div>
                                        </a>
                                        <a pid="2" href="https://batdongsan.com.vn/nha-dat-can-mua/p2">
                                            <div>...</div>
                                        </a>
                                        <a pid="19" href="https://batdongsan.com.vn/nha-dat-can-mua/p19">
                                            <div>&gt;</div>
                                        </a>
                                    </div>

                                </div>
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
                                        <img
                                            src="/assets/image/icon-newsletter-small.jpg">
                                    </div>
                                    <div class="fl news-text">Nhận bản tin từ Batdongsan.com.vn</div>
                                    <div class="clear"></div>
                                </div>
                                <div class="newsletter-content">
                                    <div class="newsletter-bound">
                                        <div class="fl input">
                                            <input type="text" id="email" placeholder="Nhập email của bạn">
                                        </div>
                                        <div class="fl a"><a href="https://batdongsan.com.vn/nha-dat-can-mua#"
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

            <div class="adPosition" positioncode="BANNER_POSITION_RIGHT_MAIN_CONTENT" style=""></div>
            <script type="text/javascript">
                var bannerContext = {
                    "CateId": 400,
                    "PageId": null,
                    "CityCode": null,
                    "DistrictId": null,
                    "CurrentPage": 576
                };

            </script>
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
                                        <span class="select-text hasvalue">
                                            <span class="select-text-content" style="width: 192.5px;">Nhà đất Cần mua</span>
                                        </span>
                                        <input data-val="true" data-val-required="The CateId field is required."
                                            id="hdCboCatagory" name="CateId" type="hidden" value="400">
                                    </div>
                                    <div id="divCatagoryOptions"
                                        class="advance-select-options advance-options advance-select-options-2"
                                        hddvalue="hdCboCatagory" ddlid="divCategory" style="">
                                        <ul class="advance-options" style="min-width: 218px;">
                                            <li vl="-1" style="min-width: 186px;">--Chọn loại tin rao--</li>
                                            <li vl="400" class="current" style="min-width: 186px;">Nhà đất Cần mua</li>
                                            <li vl="401" class="" style="min-width: 186px;">Nhà đất Cần thuê</li>
                                        </ul>
                                    </div>

                                    <div id="divCategoryRe" class="searchrow advance-select-box">
                                        <span class="select-text">
                                            <span class="select-text-content" style="width: 192.5px;">--Chọn loại nhà
                                                đất--</span>
                                        </span>
                                        <input data-val="true" data-val-required="The SubCateId field is required."
                                            id="hdCboCatagoryRe" name="SubCateId" type="hidden" value="0">
                                    </div>
                                    <div id="divCatagoryReOptions"
                                        class="advance-select-options advance-options advance-select-options-2"
                                        hddvalue="hdCboCatagoryRe" ddlid="divCategoryRe"
                                        style="top: 348.711px; left: 1420px; display: none;" value="[object Object]">
                                        <ul class="advance-options" style="min-width: 218px;">
                                            <li vl="0" class="current" style="min-width: 186px;">--Chọn loại nhà đất--</li>
                                            <li vl="402" class="" style="min-width: 186px;">Mua căn hộ chung cư</li>
                                            <li vl="403" class="" style="min-width: 186px;">Mua nhà riêng</li>
                                            <li vl="404" class="" style="min-width: 186px;">Mua nhà biệt thự, liền kề</li>
                                            <li vl="405" class="" style="min-width: 186px;">Mua nhà mặt phố</li>
                                            <li vl="406" class="" style="min-width: 186px;">Mua đất nền dự án</li>
                                            <li vl="407" class="" style="min-width: 186px;">Mua đất</li>
                                            <li vl="408" class="" style="min-width: 186px;">Mua trang trại, khu nghỉ dưỡng
                                            </li>
                                            <li vl="409" class="" style="min-width: 186px;">Mua kho, nhà xưởng</li>
                                            <li vl="410" class="" style="min-width: 186px;">Mua loại bất động sản khác</li>
                                        </ul>
                                    </div>

                                    <div id="divCity" class="searchrow advance-select-box">
                                        <span class="select-text"><input type="text" class="select-text-content"
                                                value="--Chọn Tỉnh/Thành phố--" placeholder="--Chọn Tỉnh/Thành phố--"
                                                style="width: 192.5px;"></span>
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
                                                style="width: 192.5px;"></span>
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
                                            <span class="select-text-content" style="width: 192.5px;">--Chọn Diện
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
                                            <span class="select-text-content" style="width: 192.5px;">--Chọn mức
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

            <div class="container-default">
                <div class="box-tien-ich">
                    <div class="box-header aligncenter">
                        <h2 class="name_tit">Hỗ trợ tiện ích</h2>
                    </div>
                    <div class="bor_box">
                        <ul>
                            <li>
                                <a href="https://batdongsan.com.vn/ho-tro-tien-ich/ht-xem-huong-nha">
                                    <img alt="Tư vấn phong thủy"
                                        src="/assets/image/icon-phongthuy.png">Tư
                                    vấn phong thủy
                                </a>
                            </li>
                            <li>
                                <a href="https://batdongsan.com.vn/ho-tro-tien-ich/ht-du-toan-chi-tiet">
                                    <img alt="Tính lãi suất"
                                        src="/assets/image/icon-chiphi.png">Dự
                                    tính chi phí làm nhà
                                </a>
                            </li>
                            <li>
                                <a href="https://batdongsan.com.vn/ho-tro-tien-ich/ht-tinh-lai-suat">
                                    <img alt="Tính lãi suất"
                                        src="/assets/image/icon-laisuat.png">Tính
                                    lãi suất
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="clear10"></div>
            </div>
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

            <div style="clear:both;"></div>
            <div class="fb-fanpage">
                <div id="fb-root" class=" fb_reset">
                    <div style="position: absolute; top: -10000px; width: 0px; height: 0px;">
                        <div></div>
                    </div>
                </div>
                <script>
                    (function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s);
                        js.id = id;
                        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9&appId=302507473246792";
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));

                </script>

                <div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/Batdongsandv/"
                    data-small-header="false" data-adapt-container-width="true" data-hide-cover="false"
                    data-show-facepile="true" fb-xfbml-state="rendered"
                    fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=302507473246792&amp;container_width=240&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FBatdongsandv%2F&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false">
                    <span style="vertical-align: bottom; width: 240px; height: 130px;"><iframe name="f3c3a4081791de4"
                            width="1000px" height="1000px" data-testid="fb:page Facebook Social Plugin"
                            title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true"
                            allowfullscreen="true" scrolling="no" allow="encrypted-media"
                            src="/assets/image/page.html"
                            style="border: none; visibility: visible; width: 240px; height: 130px;"
                            class=""></iframe></span></div>
            </div>

            <div style="clear:both;"></div>

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
                    <li><a href="https://batdongsan.com.vn/nha-dat-ban-hai-duong">Bán nhà Hải Dương</a></li>
                </ul>
                <ul>
                    <li><a href="https://batdongsan.com.vn/ban-dat-hung-yen">Bán đất Hưng Yên</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-dat-my-tho-tg">Bán đất Mỹ Tho</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-ban-nam-dinh-ndd">Bán nhà Nam Định</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-ban-phuong-13-1">Bán nhà Phường 13 Quận 3</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-ban-phuong-16-3">Bán nhà Phường 16 Gò Vấp</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-ban-phuong-8-10">Bán nhà Phường 8 Quận 10</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-dat-phuong-hoa-hai">Bán đất Hòa Hải</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-dat-phuong-ngoc-khanh">Bán đất Ngọc Khánh</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-dat-xa-tu-hiep">Bán đất Tứ Hiệp</a></li>
                </ul>
            </div>



        </div>
    </div>

    <div id="SiteRight" class="banner-right clearfix">
        <div class="container-default">
            <div>
                <div id="ban_wide_right" class="ban_wide_scroll"
                    style="display: block; top: 144.75px; position: absolute; right: 479px; bottom: inherit;">
                    <div class="adPosition" positioncode="BANNER_POSITION_WIDE_RIGHT" style="margin-bottom: 0px">
                        <div class="adshared" rt="">
                            <div class="adshareditem aditem" time="15" style="display: block;"
                                src="https://file4.batdongsan.com.vn/2020/11/12/UVSXfqBy/20201112094854-071c.jpg"
                                altsrc="https://file4.batdongsan.com.vn/images/no-photo1.jpg"
                                link="http://vres.batdongsan.com.vn/" bid="11107" tip="" tp="7" w="160" h="600" isbg="false"
                                clr="false" k=""><a
                                    href="https://batdongsan.com.vn/microservice-architecture-router/Systems/Banner/Click?bannerid=11107"
                                    target="_blank" title="" rel="nofollow"><img
                                        src="/assets/image/20201112094854-071c.jpg"
                                        style="max-width: 100%; height:600px;"></a></div>
                        </div>
                    </div>
                    <script type="text/javascript">
                        var bannerContext = {
                            "CateId": 400,
                            "PageId": null,
                            "CityCode": null,
                            "DistrictId": null,
                            "CurrentPage": 576
                        };

                    </script>
                </div>

                <div id="ban_right" class="ban_scroll"
                    style="display: block; top: 144.75px; position: absolute; right: 519px; bottom: inherit;">
                    <div class="adPosition" positioncode="BANNER_POSITION_RIGHT" style="margin-bottom: 0px"></div>
                    <script type="text/javascript">
                        var bannerContext = {
                            "CateId": 400,
                            "PageId": null,
                            "CityCode": null,
                            "DistrictId": null,
                            "CurrentPage": 576
                        };

                    </script>
                </div>
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

@endsection
