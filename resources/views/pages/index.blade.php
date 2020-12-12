@extends('layouts.master')

@section('title', 'Kênh thông tin bất động sản - Mua bán nhà đất số 1 Việt Nam')

@section('style-libraries')
    <link rel="stylesheet" type="text/css" href="./assets/css/filestatic.msvbds.home.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/box.css">
@endsection


@section('content')
    <!-- Banner & search tool-->
    <div class="new-home-2020">
        <div class="home-center">
            <div class="banner-home-slide">
                <form action="/microservice-architecture-router/Product/ProductSearch/Index" method="post"
                    novalidate="novalidate">
                    <div class="home-search">
                        <div class="home-search-tool">
                            <ul class="home-search-tab">
                                <li class="actived" ptype="38">Nhà đất bán</li>
                                <li ptype="49">Nhà đất cho thuê</li>
                            </ul>
                            <div class="home-search-content">
                                <div class="home-search-control">
                                    <div class="search-cate">
                                        <div class="select-custom">
                                            <o id="lblCurrCate">Loại nhà đất</o>
                                        </div>
                                        <div id="divCatagoryReOptions" class="advance-select-options">
                                            <ul>
                                                <li vl="0"><span>Tất cả nhà đất</span></li>
                                                <li vl="324"><span><img src="./assets/image/chungcu.png">Căn hộ chung
                                                        cư</span>
                                                </li>
                                                <li vl="362"><span><img src="./assets/image/nhaban.png">Các loại nhà
                                                        bán</span>
                                                    <ul style="min-width: 210px !important;">
                                                        <li vl="41"><span>Nhà riêng</span></li>
                                                        <li vl="325"><span>Nhà biệt thự, liền kề</span></li>
                                                        <li vl="163"><span>Nhà mặt phố</span></li>
                                                    </ul>
                                                </li>
                                                <li vl="361"><span><img src="./assets/image/datban.png">Các loại đất
                                                        bán</span>
                                                    <ul style="min-width: 210px !important;">
                                                        <li vl="40"><span>Đất nền dự án</span></li>
                                                        <li vl="283"><span>Bán đất</span></li>
                                                    </ul>
                                                </li>
                                                <li vl="44"><span><img src="./assets/image/trangtrai.png">Trang trại, khu
                                                        nghỉ
                                                        dưỡng</span></li>
                                                <li vl="45"><span><img src="./assets/image/khonhaxuong.png">Kho, nhà
                                                        xưởng</span>
                                                </li>
                                                <li vl="48"><span><img src="./assets/image/bdskhac.png">Bất động sản
                                                        khác</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="search-input">
                                        <input type="text" id="txtSearch" placeholder="Tìm kiếm địa điểm, khu vực"
                                            autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true"
                                            name="txtSearch" class="ui-autocomplete-input">
                                        <input type="hidden" id="keyWord" name="KeyWord">
                                    </div>
                                    <div class="search-button">
                                        <input type="button" class="btn-home-search" value="Tìm kiếm" id="btnSearch">
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="home-filter home-filter-1 slideClose">
                                    <div id="divCity" class="search-filter advance-select-box">
                                        <span class="select-text select-custom"><input type="text"
                                                class="select-text-content" value="Trên toàn quốc"
                                                placeholder="Trên toàn quốc" style="width: 148px;"></span>
                                        <input id="hdCboCity" name="CityCode" type="hidden" value="CN">
                                        <input data-val="true" data-val-required="The DistrictId field is required."
                                            id="hdCboDistrict" name="DistrictId" type="hidden" value="">
                                        <div id="divCityOptions"
                                            class="custom-scroll advance-select-options advance-options"
                                            hddvalue="hdCboCity,hdCboDistrict" ddlid="divCity" currlevel="1"
                                            style="width: 190px;">
                                            <ul class="advance-options level" style="min-width: 190px;">
                                                <li vl="CN" class="advance-options">Trên toàn quốc</li>
                                                <li vl="SG" class="advance-options">Hồ Chí Minh</li>
                                                <li vl="HN" class="advance-options">Hà Nội</li>
                                                <li vl="DDN" class="advance-options">Đà Nẵng</li>
                                                <li vl="BD" class="advance-options">Bình Dương</li>
                                                <li vl="DNA" class="advance-options">Đồng Nai</li>
                                                <li vl="KH" class="advance-options">Khánh Hòa</li>
                                                <li vl="HP" class="advance-options">Hải Phòng</li>
                                                <li vl="LA" class="advance-options">Long An</li>
                                                <li vl="QNA" class="advance-options">Quảng Nam</li>
                                                <li vl="VT" class="advance-options">Bà Rịa Vũng Tàu</li>
                                                <li vl="DDL" class="advance-options">Đắk Lắk</li>
                                                <li vl="CT" class="advance-options">Cần Thơ</li>
                                                <li vl="BTH" class="advance-options">Bình Thuận </li>
                                                <li vl="LDD" class="advance-options">Lâm Đồng</li>
                                                <li vl="TTH" class="advance-options">Thừa Thiên Huế</li>
                                                <li vl="KG" class="advance-options">Kiên Giang</li>
                                                <li vl="BN" class="advance-options">Bắc Ninh</li>
                                                <li vl="QNI" class="advance-options">Quảng Ninh</li>
                                                <li vl="TH" class="advance-options">Thanh Hóa</li>
                                                <li vl="NA" class="advance-options">Nghệ An</li>
                                                <li vl="HD" class="advance-options">Hải Dương</li>
                                                <li vl="GL" class="advance-options">Gia Lai</li>
                                                <li vl="BP" class="advance-options">Bình Phước</li>
                                                <li vl="HY" class="advance-options">Hưng Yên</li>
                                                <li vl="BDD" class="advance-options">Bình Định</li>
                                                <li vl="TG" class="advance-options">Tiền Giang</li>
                                                <li vl="TB" class="advance-options">Thái Bình</li>
                                                <li vl="BG" class="advance-options">Bắc Giang</li>
                                                <li vl="HB" class="advance-options">Hòa Bình</li>
                                                <li vl="AG" class="advance-options">An Giang</li>
                                                <li vl="VP" class="advance-options">Vĩnh Phúc</li>
                                                <li vl="TNI" class="advance-options">Tây Ninh</li>
                                                <li vl="TN" class="advance-options">Thái Nguyên</li>
                                                <li vl="LCA" class="advance-options">Lào Cai</li>
                                                <li vl="NDD" class="advance-options">Nam Định</li>
                                                <li vl="QNG" class="advance-options">Quảng Ngãi</li>
                                                <li vl="BTR" class="advance-options">Bến Tre</li>
                                                <li vl="DNO" class="advance-options">Đắk Nông</li>
                                                <li vl="CM" class="advance-options">Cà Mau</li>
                                                <li vl="VL" class="advance-options">Vĩnh Long</li>
                                                <li vl="NB" class="advance-options">Ninh Bình</li>
                                                <li vl="PT" class="advance-options">Phú Thọ</li>
                                                <li vl="NT" class="advance-options">Ninh Thuận</li>
                                                <li vl="PY" class="advance-options">Phú Yên</li>
                                                <li vl="HNA" class="advance-options">Hà Nam</li>
                                                <li vl="HT" class="advance-options">Hà Tĩnh</li>
                                                <li vl="DDT" class="advance-options">Đồng Tháp</li>
                                                <li vl="ST" class="advance-options">Sóc Trăng</li>
                                                <li vl="KT" class="advance-options">Kon Tum</li>
                                                <li vl="QB" class="advance-options">Quảng Bình</li>
                                                <li vl="QT" class="advance-options">Quảng Trị</li>
                                                <li vl="TV" class="advance-options">Trà Vinh</li>
                                                <li vl="HGI" class="advance-options">Hậu Giang</li>
                                                <li vl="SL" class="advance-options">Sơn La</li>
                                                <li vl="BL" class="advance-options">Bạc Liêu</li>
                                                <li vl="YB" class="advance-options">Yên Bái</li>
                                                <li vl="TQ" class="advance-options">Tuyên Quang</li>
                                                <li vl="DDB" class="advance-options">Điện Biên</li>
                                                <li vl="LCH" class="advance-options">Lai Châu</li>
                                                <li vl="LS" class="advance-options">Lạng Sơn</li>
                                                <li vl="HG" class="advance-options">Hà Giang</li>
                                                <li vl="BK" class="advance-options">Bắc Kạn</li>
                                                <li vl="CB" class="advance-options">Cao Bằng</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div id="divPrice" class="search-filter advance-select-box">
                                        <span class="select-text select-custom hasvalue">
                                            <span class="select-text-content" style="width: 148px;">Mức giá</span>
                                        </span>
                                        <input data-val="true" data-val-required="The PriceId field is required."
                                            id="hdCboPrice" name="PriceId" type="hidden" value="-1">
                                        <div id="divPriceOptions"
                                            class="advance-select-options advance-price-options advance-options"
                                            minvalue="txtPriceMinValue" maxvalue="txtPriceMaxValue" unit="money"
                                            lblmin="lblPriceMin" lblmax="lblPriceMax" hddvalue="hdCboPrice" ddlid="divPrice"
                                            currlevel="1" style="width: 190px;">
                                            <div class="custom-slider">
                                                <input class="min-value advance-options" data-val="true"
                                                    data-val-number="The field MinPrice must be a number." decimal="true"
                                                    id="txtPriceMinValue" maxlength="6" name="MinPrice" numbersonly="true"
                                                    placeholder="Từ" type="text">
                                                <span>-</span>
                                                <input class="min-value advance-options" data-val="true"
                                                    data-val-number="The field MaxPrice must be a number." decimal="true"
                                                    id="txtPriceMaxValue" maxlength="6" name="MaxPrice" numbersonly="true"
                                                    placeholder="Đến" type="text">
                                                <div id="price-slider-range"
                                                    class="price-filter-range ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"
                                                    name="rangeInput">
                                                    <div class="ui-slider-range ui-widget-header"
                                                        style="left: 0%; width: 100%;"></div><a href="#"
                                                        class="ui-slider-handle ui-state-default ui-corner-all"
                                                        style="left: 0%;"></a><a href="#"
                                                        class="ui-slider-handle ui-state-default ui-corner-all"
                                                        style="left: 100%;"></a>
                                                </div>
                                            </div>
                                            <ul class="advance-options" style="min-width: 190px;">
                                                <li vl="-1" class="advance-options">Mức giá</li>
                                                <li vl="1" class="advance-options">&lt; 500 triệu</li>
                                                <li vl="2" class="advance-options">500 - 800 triệu</li>
                                                <li vl="3" class="advance-options">800 triệu - 1 tỷ</li>
                                                <li vl="4" class="advance-options">1 - 2 tỷ</li>
                                                <li vl="5" class="advance-options">2 - 3 tỷ</li>
                                                <li vl="6" class="advance-options">3 - 5 tỷ</li>
                                                <li vl="7" class="advance-options">5 - 7 tỷ</li>
                                                <li vl="8" class="advance-options">7 - 10 tỷ</li>
                                                <li vl="9" class="advance-options">10 - 20 tỷ</li>
                                                <li vl="10" class="advance-options">20 - 30 tỷ</li>
                                                <li vl="11" class="advance-options">&gt; 30 tỷ</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="divArea" class="search-filter advance-select-box">
                                        <span class="select-text select-custom">
                                            <span class="select-text-content" style="width: 148px;">Diện tích</span>
                                        </span>
                                        <input data-val="true" data-val-required="The AreaId field is required."
                                            id="hdCboArea" name="AreaId" type="hidden" value="-1">
                                        <div id="divAreaOptions"
                                            class="advance-select-options advance-area-options advance-options"
                                            minvalue="txtAreaMinValue" maxvalue="txtAreaMaxValue" unit="area"
                                            hddvalue="hdCboArea" ddlid="divArea" currlevel="1" style="width: 190px;">
                                            <div class="custom-slider">
                                                <input class="min-value advance-options" decimal="true" id="txtAreaMinValue"
                                                    maxlength="6" name="MinArea" numbersonly="true" placeholder="Từ"
                                                    type="text">
                                                <span>-</span>
                                                <input class="min-value advance-options" decimal="true" id="txtAreaMaxValue"
                                                    maxlength="6" name="MaxArea" numbersonly="true" placeholder="Đến"
                                                    type="text">
                                                <span>m²</span>
                                                <div id="area-slider-range"
                                                    class="price-filter-range ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"
                                                    name="rangeInput">
                                                    <div class="ui-slider-range ui-widget-header"
                                                        style="left: 0%; width: 100%;"></div><a href="#"
                                                        class="ui-slider-handle ui-state-default ui-corner-all"
                                                        style="left: 0%;"></a><a href="#"
                                                        class="ui-slider-handle ui-state-default ui-corner-all"
                                                        style="left: 100%;"></a>
                                                </div>
                                            </div>
                                            <ul class="advance-options" style="min-width: 190px;">
                                                <li vl="-1" class="advance-options" style="min-width: 158px;">Diện tích</li>
                                                <li vl="0" class="advance-options " style="min-width: 158px;">Chưa xác định
                                                </li>
                                                <li vl="1" class="advance-options " style="min-width: 158px;">&lt;= 30 m2
                                                </li>
                                                <li vl="2" class="advance-options " style="min-width: 158px;">30 - 50 m2
                                                </li>
                                                <li vl="3" class="advance-options " style="min-width: 158px;">50 - 80 m2
                                                </li>
                                                <li vl="4" class="advance-options " style="min-width: 158px;">80 - 100 m2
                                                </li>
                                                <li vl="5" class="advance-options " style="min-width: 158px;">100 - 150 m2
                                                </li>
                                                <li vl="6" class="advance-options " style="min-width: 158px;">150 - 200 m2
                                                </li>
                                                <li vl="7" class="advance-options " style="min-width: 158px;">200 - 250 m2
                                                </li>
                                                <li vl="8" class="advance-options " style="min-width: 158px;">250 - 300 m2
                                                </li>
                                                <li vl="9" class="advance-options " style="min-width: 158px;">300 - 500 m2
                                                </li>
                                                <li vl="10" class="advance-options " style="min-width: 158px;">&gt;= 500 m2
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="divProject" class="search-filter advance-select-box" title="">
                                        <span class="select-text select-custom"><input type="text"
                                                class="select-text-content" value="Dự án" placeholder="Dự án"
                                                style="width: 148px;"></span>
                                        <input data-val="true" data-val-required="The ProjectId field is required."
                                            id="hdCboProject" name="ProjectId" type="hidden" value="0">
                                        <div id="divProjectOptions"
                                            class="custom-scroll advance-select-options advance-options"
                                            hddvalue="hdCboProject" ddlid="divProject" currlevel="1" style="width: 190px;">
                                            <ul class="advance-options" style="min-width: 190px;">
                                                <li vl="0" class="advance-options">Dự án</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="search-action search-action1">
                                        <a href="javascript:void(0)" class="m-r-10 filter-more">
                                            <img src="./assets/image/icon-down-arrow.png">
                                            Thêm
                                        </a>
                                        <a href="javascript:void(0)" class="action-reset-search-form">
                                            <img src="./assets/image/search-reset.png">
                                            Xóa
                                        </a>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="home-filter home-filter-2 slideClose">
                                    <div id="divWard" class="search-filter advance-select-box adv-search" title="">
                                        <span class="select-text select-custom"><input type="text"
                                                class="select-text-content" value="Phường xã" placeholder="Phường xã"
                                                style="width: 148px;"></span>
                                        <input data-val="true" data-val-required="The WardId field is required."
                                            id="hdCboWard" name="WardId" type="hidden" value="0">
                                        <div id="divWardOptions"
                                            class="custom-scroll advance-select-options advance-options"
                                            hddvalue="hdCboWard" ddlid="divWard" currlevel="1" style="width: 190px;">
                                            <ul class="advance-options" style="min-width: 190px;">
                                                <li vl="0" class="advance-options">Phường xã</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="divStreet" class="search-filter advance-select-box adv-search" title="">
                                        <span class="select-text select-custom"><input type="text"
                                                class="select-text-content" value="Đường phố" placeholder="Đường phố"
                                                style="width: 148px;"></span>
                                        <input data-val="true" data-val-required="The StreetId field is required."
                                            id="hdCboStreet" name="StreetId" type="hidden" value="0">
                                        <div id="divStreetOptions"
                                            class="custom-scroll advance-select-options advance-options"
                                            hddvalue="hdCboStreet" ddlid="divStreet" currlevel="1" style="width: 190px;">
                                            <ul class="advance-options" style="min-width: 190px;">
                                                <li vl="0" class="advance-options">Đường phố</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="divBedRoom" class="search-filter advance-select-box adv-search">
                                        <span class="select-text select-custom">
                                            <span class="select-text-content" style="width: 148px;">Số phòng</span>
                                        </span>
                                        <input data-val="true" data-val-required="The RoomId field is required."
                                            id="hdCboBedRoom" name="RoomId" type="hidden" value="-1">
                                        <div id="divBedRoomOptions" class="advance-select-options advance-options"
                                            hddvalue="hdCboBedRoom" ddlid="divBedRoom" currlevel="1" style="width: 190px;">
                                            <ul class="advance-options" style="min-width: 190px;">
                                                <li vl="-1" class="advance-options" style="min-width: 158px;">Số phòng</li>
                                                <li vl="0" class="advance-options " style="min-width: 158px;">Không xác định
                                                </li>
                                                <li vl="1" class="advance-options " style="min-width: 158px;">1+</li>
                                                <li vl="2" class="advance-options " style="min-width: 158px;">2+</li>
                                                <li vl="3" class="advance-options " style="min-width: 158px;">3+</li>
                                                <li vl="4" class="advance-options " style="min-width: 158px;">4+</li>
                                                <li vl="5" class="advance-options " style="min-width: 158px;">5+</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="divHomeDirection" class="search-filter advance-select-box adv-search">
                                        <span class="select-text select-custom">
                                            <span class="select-text-content" style="width: 148px;">Hướng nhà</span>
                                        </span>
                                        <input data-val="true" data-val-required="The DirectionId field is required."
                                            id="hdCboHomeDirection" name="DirectionId" type="hidden" value="-1">
                                        <div id="divHomeDirectionOptions" class="advance-select-options advance-options"
                                            hddvalue="hdCboHomeDirection" ddlid="divHomeDirection" currlevel="1"
                                            style="width: 190px;">
                                            <ul class="advance-options" style="min-width: 190px;">
                                                <li vl="-1" style="min-width: 158px;">Hướng nhà</li>
                                                <li vl="0" class="advance-options " style="min-width: 158px;">KXĐ</li>
                                                <li vl="1" class="advance-options " style="min-width: 158px;">Đông</li>
                                                <li vl="2" class="advance-options " style="min-width: 158px;">Tây</li>
                                                <li vl="3" class="advance-options " style="min-width: 158px;">Nam</li>
                                                <li vl="4" class="advance-options " style="min-width: 158px;">Bắc</li>
                                                <li vl="5" class="advance-options " style="min-width: 158px;">Đông-Bắc</li>
                                                <li vl="6" class="advance-options " style="min-width: 158px;">Tây-Bắc</li>
                                                <li vl="7" class="advance-options " style="min-width: 158px;">Tây-Nam</li>
                                                <li vl="8" class="advance-options " style="min-width: 158px;">Đông-Nam</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="search-action search-action2">
                                        <a href="javascript:void(0)" class="filter-less">
                                            <img src="./assets/image/up-arrow.png"> Thu gọn
                                        </a>
                                        <a href="javascript:void(0)" class="action-reset-search-form">
                                            <img src="./assets/image/search-reset.png"> Xóa
                                        </a>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input data-val="true" data-val-required="The SubCateId field is required." id="hdCboCatagoryRe"
                        name="SubCateId" type="hidden" value="0">
                    <input data-val="true" data-val-required="The CateId field is required." id="hdCboCatagory"
                        name="CateId" type="hidden" value="38">
                </form>
                <script type="text/javascript">
                    ///<reference path='../../../../../../../../DVG.BDS.WebApp.FrontEnd.StaticFiles/wwwroot/js/Common/FrontEnd.BoxSearch.js' />
                    (function getData() {
                        if (window.FrontEnd && window.FrontEnd.BoxSearch) {
                            var boxSearchServices = new FrontEnd.BoxSearch({
                                boxSearchDataCacheKey: 'BoxSearchData',
                                boxSearchDataCacheTime: 120,
                                getDataForBoxSearchUrl: '/Systems/Home/GetDataForBoxSearch'
                            })
                            boxSearchServices.GetData().then(function(data) {
                                (function callJQuery() {
                                    if (window.FrontEnd && window.FrontEnd.Home && window.FrontEnd.Home
                                        .BoxSearchBinnova) {
                                        new window.FrontEnd.Home.BoxSearchBinnova({
                                            cities: data.cities,
                                            cateList: data.cateList,
                                            priceLevels: data.priceLevels
                                        });
                                    } else {
                                        setTimeout(callJQuery, 100)
                                    }
                                })();
                            })
                        } else {
                            setTimeout(getData, 100);
                        }
                    })();
                </script>



                

                <div class="loveMoney102" positioncode="BANNER_POSITION_MASTER_HEAD_WEB" style="margin-bottom: 0px">
                <div class="swiper-container swiper-container-fade swiper-container-initialized swiper-container-horizontal">
                        @foreach($banners as $banner)
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="/storage/img/slides/{!! $banner->link!!}" class="d-block w-100" alt="..." style="width: 100%;height: 480px;">
                            </div>

                        </div>
                        @endforeach

                        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>

            </div>
                </div>
                <script type="text/javascript">
                    var bannerContext = {
                        "CateId": 0,
                        "PageId": 189,
                        "CityCode": null,
                        "DistrictId": null,
                        "CurrentPage": 189
                    };
                    var clickBannerUrl = '/Systems/Banner/Click'
                </script>

                <div class="banner-cover" style="display: none;"></div>
            </div>
            <script type="text/javascript">
                    (function callJQuery() {
                        if (window.FrontEnd && window.FrontEnd.Home && window.FrontEnd.Home.HotNewsGroupBinnova) {
                            new window.FrontEnd.Home.HotNewsGroupBinnova({
                                getNewNewsAsHtmlUrl: '/Systems/Home/GetNewNewsAsHtml',
                                getAdviceNewsAsHtmlUrl: '/Systems/Home/GetAdviceNewsAsHtml',
                                getFengshuiNewsAsHtmlUrl: '/Systems/Home/GetFengshuiNewsAsHtml'
                            });
                        } else {
                            setTimeout(callJQuery, 100)
                        }
                    })();
                </script>
        </div>
        <!-- Cac control o giua-->
        <div class="home-small">
            <div class="home-small-main">

                <div class="home-small-heading" id="hometabs">
                    <ul>
                        <li>
                            <h2><a style="cursor: pointer" data-tab="hometab1" class="actived">Tin nổi bật</a></h2>
                        </li>
                        <li>
                            <h2><a style="cursor: pointer" href="javascript:void(0)" data-tab="hometab4">Phong thủy</a></h2>
                        </li>
                    </ul>
                    <a href="{{ Route('tintucbds') }}" id="tabview" class="home-small-more">Xem thêm tin tức<img
                            src="./assets/image/icon-arrow-right.png"></a>
                    <div class="clear"></div>
                </div>
                <div id="news-slide">
                    <div id="hometab1" class="newscontain">
                        <div class="home-small-main-1 news-show">
                            @foreach ($articles as $article)
                                <div id="hottab-{{ $i++ }}" class="" style="display: none;">
                                    <h3>
                                        <a title="{{ $article->title }}"
                                            href="https://batdongsan.com.vn/loi-khuyen-cho-nguoi-mua/-infographic-nhung-quy-dinh-phap-ly-khong-the-bo-qua-khi-mua-ban-bat-dong-san-ar103077">
                                            <span>
                                                <img noloaderror="true" imgerr="1" src="{{ $article->image_link }}"
                                                    is-lazy-image="true" lazy-id="0">
                                            </span>
                                            {{ $article->title }}
                                        </a>
                                    </h3>
                                    <div class="news-time">
                                        <img src="./assets/image/clock.png">4 giờ trước
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="home-small-main-2">
                            <div class="list-news">
                                <ul>
                                    @foreach ($articles as $article)

                                        <li class="">
                                            <h3>
                                                <a title="{{ $article->title }}" data-index="#hottab-{{ $j++ }}"
                                                    href="https://batdongsan.com.vn/loi-khuyen-cho-nguoi-mua/-infographic-nhung-quy-dinh-phap-ly-khong-the-bo-qua-khi-mua-ban-bat-dong-san-ar103077">
                                                    {{ $article->title }}
                                                </a>
                                            </h3>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div id="hometab4" class="hidden newscontain">
                        <div class="home-small-main-1 news-show" javascript-location-value="newNews">
                            @foreach ($articles as $article)
                                <div id="hottab-{{ $k++ }}" class="" style="display: none;">
                                    <h3>
                                        <a title="{{ $article->title }}"
                                            href="https://batdongsan.com.vn/loi-khuyen-cho-nguoi-mua/-infographic-nhung-quy-dinh-phap-ly-khong-the-bo-qua-khi-mua-ban-bat-dong-san-ar103077">
                                            <span>
                                                <img noloaderror="true" imgerr="1" src="{{ $article->image_link }}"
                                                    is-lazy-image="true" lazy-id="0">
                                            </span>
                                            {{ $article->title }}
                                        </a>
                                    </h3>
                                    <div class="news-time">
                                        <img src="./assets/image/clock.png">4 giờ trước
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="home-small-main-2">
                            <div class="list-news">
                                <ul>
                                    @foreach ($articles as $article)

                                        <li class="">
                                            <h3>
                                                <a title="{{ $article->title }}" data-index="#hottab-{{ $l++ }}"
                                                    href="https://batdongsan.com.vn/loi-khuyen-cho-nguoi-mua/-infographic-nhung-quy-dinh-phap-ly-khong-the-bo-qua-khi-mua-ban-bat-dong-san-ar103077">
                                                    {{ $article->title }}
                                                </a>
                                            </h3>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div id="hometab3" class="hidden newscontain">
                        <div class="clear"></div>
                    </div>
                    <div id="hometab4" class="hidden newscontain">
                        <div class="clear"></div>
                    </div>
                </div>

            </div>
            <div class="home-small-banner">

                <div class="loveMoney102" positioncode="BANNER_POSITION_RIGHT_2020" style="margin-bottom: 0px">
                    @foreach($sidebars as $sidebar)
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="/storage/img/slides/{!! $sidebar->link!!}" class="d-block w-100" alt="...">
                            </div>

                        </div>
                        @endforeach
                </div>
                
                <script type="text/javascript">
                    var bannerContext = {
                        "CateId": 0,
                        "PageId": 189,
                        "CityCode": null,
                        "DistrictId": null,
                        "CurrentPage": 189
                    };
                    var clickBannerUrl = '/Systems/Banner/Click'
                </script>
            </div>
            <div class="clear"></div>
        </div>



        <div class="home-center bg-grey" id="interestedProductsBinnovaContent">

            <div class="home-product product-4-you">
                <h2 class="fl">Bất động sản dành cho bạn</h2>
                <div class="home-more-link">
                    <a href="{{ Route('nha_dat_ban') }}">Tin nhà đất bán mới nhất</a>
                    &nbsp;&nbsp;|&nbsp;&nbsp;
                    <a href="{{ Route('nha_dat_cho_thue') }}">Tin nhà đất cho thuê mới nhất</a>
                </div>
                <div class="clear"></div>
                <link rel="stylesheet" href="./assets/image/microtip.css">
                <ul>
                    @foreach ($products as $product)


                        <li class="">
                            <div class="vip5 vipaddon" rel="26878040" uid="328276">
                                <div class="product-thumb ">
                                    <a title="Chính chủ bán mảnh đất đấu giá Tê Quả, Xã Tam Hưng, mặt Tỉnh Lộ 427, cách ngã ba Bình Đà 500m"
                                        href="https://batdongsan.com.vn/ban-dat-duong-tinh-lo-427-xa-tam-hung-1/chinh-chu-ban-manh-dau-gia-te-qua-mat-427-cach-nga-ba-binh-da-500m-pr26878040">
                                        @foreach ($product->image as $image)
                                            @if ($loop->first)
                                                <img src="{{ $image->link }}" alt="{{ $image->name }}">
                                            @endif
                                        @endforeach

                                    </a>
                                    <span class="product-feature">
                                    </span>
                                    <span class="product-media">{{ $product->image->count() }}</span>
                                </div>
                                <div class="home-product-bound">


                                    <div class="p-title textTitle">
                                        <a href=""
                                            title="Chính chủ bán mảnh đất đấu giá Tê Quả, Xã Tam Hưng, mặt Tỉnh Lộ 427, cách ngã ba Bình Đà 500m">{{ $product->title }}</a>
                                    </div>


                                    <div class="product-price">19.5 triệu/m²</div>
                                    <span class="ic_dot">·</span>
                                    <div class="pro-m2">68.8 m²</div>
                                    <div class="product-address">
                                        <a href="https://batdongsan.com.vn/ban-dat-thanh-oai-hn"
                                            title="Ban dat Thanh Oai HN">
                                            @if(isset($districs->find($product->district_code)->name))
                                                {{ $districs->find($product->district_code)->name }},</a>
                                            @else
                                                khong co quan
                                            @endif
                                        <a href="https://batdongsan.com.vn/ban-dat-ha-noi"
                                            title="Hà Nội">
                                            @if(isset($provinces->find($product->province_code)->name))
                                            {{ $provinces->find($product->province_code)->name }}</a>
                                            @else
                                                ko co tp
                                            @endif
                                    </div>
                                    <div class="product-date">
                                        Hôm nay
                                        <span class="tooltip-time">09/11/2020</span>
                                    </div>
                                    <span class="tooltipMarking" aria-label="Bấm để lưu tin"
                                        data-microtip-position="bottom" role="tooltip"><i class="iconSave"
                                            data-productid="26878040"
                                            data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ch&amp;#237;nh chủ b&amp;#225;n mảnh đất đấu gi&amp;#225; T&amp;#234; Quả, X&amp;#227; Tam Hưng, mặt Tỉnh Lộ 427, c&amp;#225;ch ng&amp;#227; ba B&amp;#236;nh Đ&amp;#224; 500m&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/09/01/20200901151848-9e49_wm.jpg&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/09/01/20200901151940-a55a_wm.jpg&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/09/01/20200901152034-890a_wm.jpg&quot;/&gt;"
                                            data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/09/01/20200901151848-9e49_wm.jpg"
                                            data-vipclass="vip5 vipaddon" data-isaddon="false" data-has3d="false"
                                            data-has360="false" data-hasvideo="false"
                                            data-title="Chính chủ bán mảnh đất đấu giá Tê Quả, Xã Tam Hưng, mặt Tỉnh Lộ 427, cách ngã ba Bình Đà 500m"
                                            data-price="19.5 triệu/m²" data-area="68.8 m²" data-pricesort="0"
                                            data-areasort="0" data-room="" data-toilets="0" data-address="Thanh Oai, Hà Nội"
                                            data-description="Chính chủ bán mảnh đất đấu giá Tê Quả, Xã Tam Hưng, mặt Tỉnh Lộ 427, cách ngã ba Bình Đà 500m, đối diện trường cấp 3 Thanh Oai B, Tỉnh Lộ đã trải thảm đường vỉa hè 24m, cách đường Cienco 5, 1,5km, đô thị Thanh Hà 4km, trung tâm Hà Đông 9km, bán mảnh đất lô góc 68,8m2. 3 mặt thoáng, mặt tiền 4,5m đườ..."
                                            data-duration="Hôm nay" data-updatedtime="09/11/2020"
                                            data-datesort="11/09/2020 22:58:26" data-contactname="" data-contactmobile=""
                                            data-url="/ban-dat-duong-tinh-lo-427-xa-tam-hung-1/chinh-chu-ban-manh-dau-gia-te-qua-mat-427-cach-nga-ba-binh-da-500m-pr26878040"
                                            data-totalmedia="3" data-createbyuser="328276"></i></span>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
                <div class="clear"></div>
                <div id="ucHomeProductInterest_pnlViewMore">
                    <div class="home-viewmore">
                        <a href="javascript:void(0)" id="prd-viewmore">
                            Mở rộng&nbsp;&nbsp;<img src="./assets/image/icon-down-blue.png">
                        </a>
                        <a href="https://batdongsan.com.vn/ban-nha-rieng-duong-quang-trung-phuong-11-8" id="prd-viewless"
                            class="hidden">
                            Xem tiếp
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            (function callJQuery() {
                if (window.FrontEnd && window.FrontEnd.Home && window.FrontEnd.Home.InterestedProductsBinnova) {
                    new window.FrontEnd.Home.InterestedProductsBinnova({
                        getInterestedProductsBinnovaUrl: '/Systems/Home/GetInterestedProductsBinnova'
                    });
                } else {
                    setTimeout(callJQuery, 100)
                }
            })();
        </script>

        <div class="home-small">
            <div class="home-product-place">


                <h2>Bất động sản theo địa điểm</h2>
                <div>
                    <div class="place-big">
                        <div class="place-img slick-initialized slick-slider">
                            <div aria-live="polite" class="slick-list draggable">
                                <div class="slick-track" style="opacity: 1; width: 1680px;" role="listbox"><img
                                        src="./assets/image/HCM-web-1.jpg" is-lazy-image="true" lazy-id="6"
                                        class="slick-slide slick-current slick-active" data-slick-index="0"
                                        aria-hidden="false"
                                        style="width: 560px; position: relative; left: 0px; top: 0px; z-index: 1000; opacity: 1; transition: opacity 500ms ease 0s;"
                                        tabindex="-1" role="option" aria-describedby="slick-slide00"><img
                                        src="./assets/image/HCM-web-2.jpg" is-lazy-image="true" lazy-id="7"
                                        class="slick-slide" data-slick-index="1" aria-hidden="true"
                                        style="width: 560px; position: relative; left: -560px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;"
                                        tabindex="-1" role="option" aria-describedby="slick-slide01"><img
                                        src="./assets/image/HCM-web-3.jpg" is-lazy-image="true" lazy-id="8"
                                        class="slick-slide" data-slick-index="2" aria-hidden="true"
                                        style="width: 560px; position: relative; left: -1120px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;"
                                        tabindex="-1" role="option" aria-describedby="slick-slide02"></div>
                            </div>


                        </div>
                        <div class="place-info buy-info">
                            <h3>
                                <a href="https://batdongsan.com.vn/nha-dat-ban-tp-hcm">
                                    <span class="place-name">TP. Hồ Chí Minh</span>
                                    <span class="place-number">71004 tin đăng</span>
                                </a>
                            </h3>
                        </div>

                    </div>
                    <div class="place-small">
                        <div class="place-item">
                            <div class="place-img slick-initialized slick-slider">
                                <div aria-live="polite" class="slick-list draggable">
                                    <div class="slick-track" style="opacity: 1; width: 810px;" role="listbox"><img
                                            src="./assets/image/HN-web-1.jpg" is-lazy-image="true" lazy-id="9"
                                            class="slick-slide" data-slick-index="0" aria-hidden="true"
                                            style="width: 270px; position: relative; left: 0px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;"
                                            tabindex="-1" role="option" aria-describedby="slick-slide10"><img
                                            src="./assets/image/HN-web-2.jpg" is-lazy-image="true" lazy-id="10"
                                            class="slick-slide" data-slick-index="1" aria-hidden="true"
                                            style="width: 270px; position: relative; left: -270px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;"
                                            tabindex="-1" role="option" aria-describedby="slick-slide11"><img
                                            src="./assets/image/HN-web-3.jpg" is-lazy-image="true" lazy-id="11"
                                            class="slick-slide slick-current slick-active" data-slick-index="2"
                                            aria-hidden="false"
                                            style="width: 270px; position: relative; left: -540px; top: 0px; z-index: 999; opacity: 1;"
                                            tabindex="-1" role="option" aria-describedby="slick-slide12"></div>
                                </div>


                            </div>
                            <div class="place-info buy-info">
                                <h3>
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-ha-noi">
                                        <span class="place-name">Hà Nội</span>
                                        <span class="place-number">56649 tin đăng</span>
                                    </a>
                                </h3>
                            </div>

                        </div>
                        <div class="place-item">
                            <div class="place-img slick-initialized slick-slider">
                                <div aria-live="polite" class="slick-list draggable">
                                    <div class="slick-track" style="opacity: 1; width: 810px;" role="listbox"><img
                                            src="./assets/image/DDN-web-1.jpg" is-lazy-image="true" lazy-id="12"
                                            class="slick-slide" data-slick-index="0" aria-hidden="true"
                                            style="width: 270px; position: relative; left: 0px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;"
                                            tabindex="-1" role="option" aria-describedby="slick-slide20"><img
                                            src="./assets/image/DDN-web-2.jpg" is-lazy-image="true" lazy-id="13"
                                            class="slick-slide" data-slick-index="1" aria-hidden="true"
                                            style="width: 270px; position: relative; left: -270px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;"
                                            tabindex="-1" role="option" aria-describedby="slick-slide21"><img
                                            src="./assets/image/DDN-web-3.jpg" is-lazy-image="true" lazy-id="14"
                                            class="slick-slide slick-current slick-active" data-slick-index="2"
                                            aria-hidden="false"
                                            style="width: 270px; position: relative; left: -540px; top: 0px; z-index: 999; opacity: 1;"
                                            tabindex="-1" role="option" aria-describedby="slick-slide22"></div>
                                </div>


                            </div>
                            <div class="place-info buy-info">
                                <h3>
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-da-nang">
                                        <span class="place-name">Đà Nẵng</span>
                                        <span class="place-number">3635 tin đăng</span>
                                    </a>
                                </h3>
                            </div>

                        </div>
                        <div class="place-item nomargin">
                            <div class="place-img slick-initialized slick-slider">
                                <div aria-live="polite" class="slick-list draggable">
                                    <div class="slick-track" style="opacity: 1; width: 540px;" role="listbox"><img
                                            src="./assets/image/lazy-preview-image-DFE3E8.png"
                                            src-lazy="https://file4.batdongsan.com.vn/images/newhome/cities1/BD-web-1.jpg"
                                            is-lazy-image="true" lazy-id="15" class="slick-slide slick-current slick-active"
                                            data-slick-index="0" aria-hidden="false"
                                            style="width: 270px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;"
                                            tabindex="-1" role="option" aria-describedby="slick-slide30"><img
                                            src="./assets/image/lazy-preview-image-DFE3E8.png"
                                            src-lazy="https://file4.batdongsan.com.vn/images/newhome/cities1/BD-web-2.jpg"
                                            is-lazy-image="true" lazy-id="16" class="slick-slide" data-slick-index="1"
                                            aria-hidden="true"
                                            style="width: 270px; position: relative; left: -270px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;"
                                            tabindex="-1" role="option" aria-describedby="slick-slide31"></div>
                                </div>

                            </div>
                            <div class="place-info buy-info">
                                <h3>
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-binh-duong">
                                        <span class="place-name">Bình Dương</span>
                                        <span class="place-number">11175 tin đăng</span>
                                    </a>
                                </h3>
                            </div>

                        </div>
                        <div class="place-item nomargin">
                            <div class="place-img slick-initialized slick-slider">
                                <div aria-live="polite" class="slick-list draggable">
                                    <div class="slick-track" style="opacity: 1; width: 810px;" role="listbox"><img
                                            src="./assets/image/lazy-preview-image-DFE3E8.png"
                                            src-lazy="https://file4.batdongsan.com.vn/images/newhome/cities1/DNA-web-1.jpg"
                                            is-lazy-image="true" lazy-id="17" class="slick-slide" data-slick-index="0"
                                            aria-hidden="true"
                                            style="width: 270px; position: relative; left: 0px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;"
                                            tabindex="-1" role="option" aria-describedby="slick-slide40"><img
                                            src="./assets/image/lazy-preview-image-DFE3E8.png"
                                            src-lazy="https://file4.batdongsan.com.vn/images/newhome/cities1/DNA-web-2.jpg"
                                            is-lazy-image="true" lazy-id="18" class="slick-slide" data-slick-index="1"
                                            aria-hidden="true"
                                            style="width: 270px; position: relative; left: -270px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;"
                                            tabindex="-1" role="option" aria-describedby="slick-slide41"><img
                                            src="./assets/image/lazy-preview-image-DFE3E8.png"
                                            src-lazy="https://file4.batdongsan.com.vn/images/newhome/cities1/DNA-web-3.jpg"
                                            is-lazy-image="true" lazy-id="19" class="slick-slide slick-current slick-active"
                                            data-slick-index="2" aria-hidden="false"
                                            style="width: 270px; position: relative; left: -540px; top: 0px; z-index: 999; opacity: 1;"
                                            tabindex="-1" role="option" aria-describedby="slick-slide42"></div>
                                </div>


                            </div>
                            <div class="place-info buy-info">
                                <h3>
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-dong-nai">
                                        <span class="place-name">Đồng Nai</span>
                                        <span class="place-number">7558 tin đăng</span>
                                    </a>
                                </h3>
                            </div>

                        </div>
                    </div>
                    <div class="clear"></div>
                </div>

                <style type="text/css">
                    .rent-info {
                        display: none;
                    }

                </style>

<script type="text/javascript">
                    (function callJQuery() {
                        if (window.FrontEnd && window.FrontEnd.Home && window.FrontEnd.Home.ProductCountBinnova) {
                            new window.FrontEnd.Home.ProductCountBinnova({});
                        } else {
                            setTimeout(callJQuery, 100)
                        }
                    })();
                </script>


            </div>
            <!-- Tag -->


            <!-- Banner giua -->
            <div class="home-enterprise m-b-30">
                <h2 class="fl">Doanh nghiệp tiêu biểu</h2>
                <div class="home-more-link">
                    <a href="https://batdongsan.com.vn/doanh-nghiep">Xem thêm&nbsp;&nbsp;<img
                            src="./assets/image/icon-arrow-right.png"></a>
                </div>
                <div class="clear"></div>
                <div class="swiper-container swiper-container-initialized swiper-container-horizontal">
                    <ul class="swiper-wrapper" style="transform: translate3d(-3056px, 0px, 0px); transition-duration: 0ms;">
                        <li class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="6"
                            style="width: 165px; margin-right: 26px;">
                            <a href="https://batdongsan.com.vn/tu-van-moi-gioi-bat-dong-san-quan-12/cong-ty-co-phan-tap-doan-dia-oc-va-ep2773"
                                title="CÔNG TY CỔ PHẦN TẬP ĐOÀN ĐỊA ỐC VẠN XUÂN">
                                <img class="color_flip" alt="CÔNG TY CỔ PHẦN TẬP ĐOÀN ĐỊA ỐC VẠN XUÂN"
                                    src="./assets/image/lazy-preview-image-DFE3E8.png"
                                    src-lazy="https://file4.batdongsan.com.vn/2020/04/06/PGsxuI1y/20200406083257-058a.jpg"
                                    is-lazy-image="true" lazy-id="36"> </a>
                        </li>
                        <li class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="7"
                            style="width: 165px; margin-right: 26px;">
                            <a href="https://batdongsan.com.vn/tu-van-moi-gioi-bat-dong-san-quan-2/cong-ty-tnhh-dau-tu-va-quan-ly-bat-dong-sa-ep2772"
                                title="CÔNG TY TNHH ĐẦU TƯ VÀ QUẢN LÝ BẤT ĐỘNG SẢN DTN">
                                <img class="color_flip" alt="CÔNG TY TNHH ĐẦU TƯ VÀ QUẢN LÝ BẤT ĐỘNG SẢN DTN"
                                    src="./assets/image/lazy-preview-image-DFE3E8.png"
                                    src-lazy="https://file4.batdongsan.com.vn/2020/01/03/3ZsSL6gy/20200103145745-1450.jpg"
                                    is-lazy-image="true" lazy-id="37"> </a>
                        </li>
                        <li class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="8"
                            style="width: 165px; margin-right: 26px;">
                            <a href="https://batdongsan.com.vn/thi-cong-xay-dung-thu-dau-mot-bd/cong-ty-cp-xay-dung-tu-van-dau-tu-binh-duon-ep75"
                                title="Công ty CP Xây dựng Tư vấn Đầu tư Bình Dương (BICONSI)">
                                <img class="color_flip" alt="Công ty CP Xây dựng Tư vấn Đầu tư Bình Dương (BICONSI)"
                                    src="./assets/image/lazy-preview-image-DFE3E8.png"
                                    src-lazy="https://file4.batdongsan.com.vn/2020/05/27/hmcVYWuR/20200527142414-6a13.jpg"
                                    is-lazy-image="true" lazy-id="38"> </a>
                        </li>
                        <li class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev"
                            data-swiper-slide-index="9" style="width: 165px; margin-right: 26px;">
                            <a href="https://batdongsan.com.vn/dau-tu-du-an-quan-7/novalan-ep480" title="Novaland Group">
                                <img class="color_flip" alt="Novaland Group"
                                    src="./assets/image/lazy-preview-image-DFE3E8.png"
                                    src-lazy="https://file4.batdongsan.com.vn/2020/07/21/n1AwoD7S/20200721151328-207e.jpg"
                                    is-lazy-image="true" lazy-id="39"> </a>
                        </li>
                        <li class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active"
                            data-swiper-slide-index="10" style="width: 165px; margin-right: 26px;">
                            <a href="https://batdongsan.com.vn/dau-tu-du-an-rach-gia-kg/cong-ty-cpdt-phu-cuong-kie-ep2787"
                                title="CÔNG TY CPĐT PHÚ CƯỜNG KIÊN GIANG">
                                <img class="color_flip" alt="CÔNG TY CPĐT PHÚ CƯỜNG KIÊN GIANG"
                                    src="./assets/image/lazy-preview-image-DFE3E8.png"
                                    src-lazy="https://file4.batdongsan.com.vn/2020/04/22/PGsxuI1y/20200422111005-0350.jpg"
                                    is-lazy-image="true" lazy-id="40"> </a>
                        </li>
                        <li class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next"
                            data-swiper-slide-index="11" style="width: 165px; margin-right: 26px;">
                            <a href="https://batdongsan.com.vn/tu-van-moi-gioi-bat-dong-san-quan-5/cong-ty-tnhh-tm-dv-nha-ta-ep2777"
                                title="CÔNG TY TNHH TM &amp; DV NHÀ TÂN PHÁT">
                                <img class="color_flip" src="./assets/image/20200110153537-ce21.jpg"
                                    alt="CÔNG TY TNHH TM &amp; DV NHÀ TÂN PHÁT">
                            </a>
                        </li>
                        <li class="swiper-slide" data-swiper-slide-index="0" style="width: 165px; margin-right: 26px;">
                            <a href="https://batdongsan.com.vn/dau-tu-du-an-quan-1/cong-ty-tnhh-dau-tu-dia-oc-thanh-ph-ep1898"
                                title="Công ty TNHH Đầu tư Địa ốc Thành phố (CityLand)">
                                <img class="color_flip" alt="Công ty TNHH Đầu tư Địa ốc Thành phố (CityLand)"
                                    src="./assets/image/lazy-preview-image-DFE3E8.png"
                                    src-lazy="https://file4.batdongsan.com.vn/2020/10/16/hmcVYWuR/20201016153855-fa63.jpg"
                                    is-lazy-image="true" lazy-id="30"> </a>
                        </li>
                        <li class="swiper-slide" data-swiper-slide-index="1" style="width: 165px; margin-right: 26px;">
                            <a href="https://batdongsan.com.vn/dau-tu-du-an-quan-1/cong-ty-cp-tap-doan-dau-tu-chau-a-thai-bin-ep2818"
                                title="Công ty CP Tập Đoàn Đầu Tư Châu Á Thái Bình Dương">
                                <img class="color_flip" alt="Công ty CP Tập Đoàn Đầu Tư Châu Á Thái Bình Dương"
                                    src="./assets/image/lazy-preview-image-DFE3E8.png"
                                    src-lazy="https://file4.batdongsan.com.vn/2020/10/05/hmcVYWuR/20201005135528-83f1.jpg"
                                    is-lazy-image="true" lazy-id="31"> </a>
                        </li>
                        <li class="swiper-slide" data-swiper-slide-index="2" style="width: 165px; margin-right: 26px;">
                            <a href="https://batdongsan.com.vn/tu-van-moi-gioi-bat-dong-san-ben-cat-bd/cong-ty-tnhh-dau-tu-xay-dung-dich-vu-hoang-th-ep2813"
                                title="CÔNG TY TNHH ĐẦU TƯ XÂY DỰNG DỊCH VỤ HOÀNG THỔ GROUP">
                                <img class="color_flip" alt="CÔNG TY TNHH ĐẦU TƯ XÂY DỰNG DỊCH VỤ HOÀNG THỔ GROUP"
                                    src="./assets/image/lazy-preview-image-DFE3E8.png"
                                    src-lazy="https://file4.batdongsan.com.vn/2020/09/28/PGsxuI1y/20200928152939-aa13.jpg"
                                    is-lazy-image="true" lazy-id="32"> </a>
                        </li>
                        <li class="swiper-slide" data-swiper-slide-index="3" style="width: 165px; margin-right: 26px;">
                            <a href="https://batdongsan.com.vn/tu-van-moi-gioi-bat-dong-san-quan-2/cong-ty-tnhh-dau-tu-dich-vu-bat-dong-san-16-ep2807"
                                title="CÔNG TY TNHH ĐẦU TƯ DỊCH VỤ BẤT ĐỘNG SẢN 168 PROPERTY">
                                <img class="color_flip" alt="CÔNG TY TNHH ĐẦU TƯ DỊCH VỤ BẤT ĐỘNG SẢN 168 PROPERTY"
                                    src="./assets/image/lazy-preview-image-DFE3E8.png"
                                    src-lazy="https://file4.batdongsan.com.vn/2020/09/15/PGsxuI1y/20200915154813-0430.jpg"
                                    is-lazy-image="true" lazy-id="33"> </a>
                        </li>
                        <li class="swiper-slide" data-swiper-slide-index="4" style="width: 165px; margin-right: 26px;">
                            <a href="https://batdongsan.com.vn/tu-van-moi-gioi-bat-dong-san-quan-1/cong-ty-cp-tu-van-dau-tu-va-quan-ly-bat-dong-san-saigon-cente-ep2776"
                                title="CÔNG TY CP TƯ VẤN ĐẦU TƯ VÀ QUẢN LÝ BẤT ĐỘNG SẢN SAIGON CENTER REAL">
                                <img class="color_flip"
                                    alt="CÔNG TY CP TƯ VẤN ĐẦU TƯ VÀ QUẢN LÝ BẤT ĐỘNG SẢN SAIGON CENTER REAL"
                                    src="./assets/image/lazy-preview-image-DFE3E8.png"
                                    src-lazy="https://file4.batdongsan.com.vn/2020/01/09/PGsxuI1y/20200109093229-ce7d.jpg"
                                    is-lazy-image="true" lazy-id="34"> </a>
                        </li>
                        <li class="swiper-slide" data-swiper-slide-index="5" style="width: 165px; margin-right: 26px;">
                            <a href="https://batdongsan.com.vn/thi-cong-xay-dung-ba-dinh/hd-mo-ep2132"
                                title="HD Mon Holdings">
                                <img class="color_flip" alt="HD Mon Holdings"
                                    src="./assets/image/lazy-preview-image-DFE3E8.png"
                                    src-lazy="https://file4.batdongsan.com.vn/2016/12/17/Nl3mS01v/20161217085942-2e1c.jpg"
                                    is-lazy-image="true" lazy-id="35"> </a>
                        </li>
                        <li class="swiper-slide" data-swiper-slide-index="6" style="width: 165px; margin-right: 26px;">
                            <a href="https://batdongsan.com.vn/tu-van-moi-gioi-bat-dong-san-quan-12/cong-ty-co-phan-tap-doan-dia-oc-va-ep2773"
                                title="CÔNG TY CỔ PHẦN TẬP ĐOÀN ĐỊA ỐC VẠN XUÂN">
                                <img class="color_flip" alt="CÔNG TY CỔ PHẦN TẬP ĐOÀN ĐỊA ỐC VẠN XUÂN"
                                    src="./assets/image/lazy-preview-image-DFE3E8.png"
                                    src-lazy="https://file4.batdongsan.com.vn/2020/04/06/PGsxuI1y/20200406083257-058a.jpg"
                                    is-lazy-image="true" lazy-id="63"> </a>
                        </li>
                        <li class="swiper-slide" data-swiper-slide-index="7" style="width: 165px; margin-right: 26px;">
                            <a href="https://batdongsan.com.vn/tu-van-moi-gioi-bat-dong-san-quan-2/cong-ty-tnhh-dau-tu-va-quan-ly-bat-dong-sa-ep2772"
                                title="CÔNG TY TNHH ĐẦU TƯ VÀ QUẢN LÝ BẤT ĐỘNG SẢN DTN">
                                <img class="color_flip" alt="CÔNG TY TNHH ĐẦU TƯ VÀ QUẢN LÝ BẤT ĐỘNG SẢN DTN"
                                    src="./assets/image/lazy-preview-image-DFE3E8.png"
                                    src-lazy="https://file4.batdongsan.com.vn/2020/01/03/3ZsSL6gy/20200103145745-1450.jpg"
                                    is-lazy-image="true" lazy-id="64"> </a>
                        </li>
                        <li class="swiper-slide" data-swiper-slide-index="8" style="width: 165px; margin-right: 26px;">
                            <a href="https://batdongsan.com.vn/thi-cong-xay-dung-thu-dau-mot-bd/cong-ty-cp-xay-dung-tu-van-dau-tu-binh-duon-ep75"
                                title="Công ty CP Xây dựng Tư vấn Đầu tư Bình Dương (BICONSI)">
                                <img class="color_flip" alt="Công ty CP Xây dựng Tư vấn Đầu tư Bình Dương (BICONSI)"
                                    src="./assets/image/lazy-preview-image-DFE3E8.png"
                                    src-lazy="https://file4.batdongsan.com.vn/2020/05/27/hmcVYWuR/20200527142414-6a13.jpg"
                                    is-lazy-image="true" lazy-id="65"> </a>
                        </li>
                        <li class="swiper-slide swiper-slide-prev" data-swiper-slide-index="9"
                            style="width: 165px; margin-right: 26px;">
                            <a href="https://batdongsan.com.vn/dau-tu-du-an-quan-7/novalan-ep480" title="Novaland Group">
                                <img class="color_flip" alt="Novaland Group"
                                    src="./assets/image/lazy-preview-image-DFE3E8.png"
                                    src-lazy="https://file4.batdongsan.com.vn/2020/07/21/n1AwoD7S/20200721151328-207e.jpg"
                                    is-lazy-image="true" lazy-id="66"> </a>
                        </li>
                        <li class="swiper-slide swiper-slide-active" data-swiper-slide-index="10"
                            style="width: 165px; margin-right: 26px;">
                            <a href="https://batdongsan.com.vn/dau-tu-du-an-rach-gia-kg/cong-ty-cpdt-phu-cuong-kie-ep2787"
                                title="CÔNG TY CPĐT PHÚ CƯỜNG KIÊN GIANG">
                                <img class="color_flip" alt="CÔNG TY CPĐT PHÚ CƯỜNG KIÊN GIANG"
                                    src="./assets/image/lazy-preview-image-DFE3E8.png"
                                    src-lazy="https://file4.batdongsan.com.vn/2020/04/22/PGsxuI1y/20200422111005-0350.jpg"
                                    is-lazy-image="true" lazy-id="67"> </a>
                        </li>
                        <li class="swiper-slide swiper-slide-next" data-swiper-slide-index="11"
                            style="width: 165px; margin-right: 26px;">
                            <a href="https://batdongsan.com.vn/tu-van-moi-gioi-bat-dong-san-quan-5/cong-ty-tnhh-tm-dv-nha-ta-ep2777"
                                title="CÔNG TY TNHH TM &amp; DV NHÀ TÂN PHÁT">
                                <img class="color_flip" src="./assets/image/20200110153537-ce21.jpg"
                                    alt="CÔNG TY TNHH TM &amp; DV NHÀ TÂN PHÁT">
                            </a>
                        </li>
                        <li class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0"
                            style="width: 165px; margin-right: 26px;">
                            <a href="https://batdongsan.com.vn/dau-tu-du-an-quan-1/cong-ty-tnhh-dau-tu-dia-oc-thanh-ph-ep1898"
                                title="Công ty TNHH Đầu tư Địa ốc Thành phố (CityLand)">
                                <img class="color_flip" alt="Công ty TNHH Đầu tư Địa ốc Thành phố (CityLand)"
                                    src="./assets/image/lazy-preview-image-DFE3E8.png"
                                    src-lazy="https://file4.batdongsan.com.vn/2020/10/16/hmcVYWuR/20201016153855-fa63.jpg"
                                    is-lazy-image="true" lazy-id="68"> </a>
                        </li>
                        <li class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1"
                            style="width: 165px; margin-right: 26px;">
                            <a href="https://batdongsan.com.vn/dau-tu-du-an-quan-1/cong-ty-cp-tap-doan-dau-tu-chau-a-thai-bin-ep2818"
                                title="Công ty CP Tập Đoàn Đầu Tư Châu Á Thái Bình Dương">
                                <img class="color_flip" alt="Công ty CP Tập Đoàn Đầu Tư Châu Á Thái Bình Dương"
                                    src="./assets/image/lazy-preview-image-DFE3E8.png"
                                    src-lazy="https://file4.batdongsan.com.vn/2020/10/05/hmcVYWuR/20201005135528-83f1.jpg"
                                    is-lazy-image="true" lazy-id="69"> </a>
                        </li>
                        <li class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2"
                            style="width: 165px; margin-right: 26px;">
                            <a href="https://batdongsan.com.vn/tu-van-moi-gioi-bat-dong-san-ben-cat-bd/cong-ty-tnhh-dau-tu-xay-dung-dich-vu-hoang-th-ep2813"
                                title="CÔNG TY TNHH ĐẦU TƯ XÂY DỰNG DỊCH VỤ HOÀNG THỔ GROUP">
                                <img class="color_flip" alt="CÔNG TY TNHH ĐẦU TƯ XÂY DỰNG DỊCH VỤ HOÀNG THỔ GROUP"
                                    src="./assets/image/lazy-preview-image-DFE3E8.png"
                                    src-lazy="https://file4.batdongsan.com.vn/2020/09/28/PGsxuI1y/20200928152939-aa13.jpg"
                                    is-lazy-image="true" lazy-id="70"> </a>
                        </li>
                        <li class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3"
                            style="width: 165px; margin-right: 26px;">
                            <a href="https://batdongsan.com.vn/tu-van-moi-gioi-bat-dong-san-quan-2/cong-ty-tnhh-dau-tu-dich-vu-bat-dong-san-16-ep2807"
                                title="CÔNG TY TNHH ĐẦU TƯ DỊCH VỤ BẤT ĐỘNG SẢN 168 PROPERTY">
                                <img class="color_flip" alt="CÔNG TY TNHH ĐẦU TƯ DỊCH VỤ BẤT ĐỘNG SẢN 168 PROPERTY"
                                    src="./assets/image/lazy-preview-image-DFE3E8.png"
                                    src-lazy="https://file4.batdongsan.com.vn/2020/09/15/PGsxuI1y/20200915154813-0430.jpg"
                                    is-lazy-image="true" lazy-id="71"> </a>
                        </li>
                        <li class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="4"
                            style="width: 165px; margin-right: 26px;">
                            <a href="https://batdongsan.com.vn/tu-van-moi-gioi-bat-dong-san-quan-1/cong-ty-cp-tu-van-dau-tu-va-quan-ly-bat-dong-san-saigon-cente-ep2776"
                                title="CÔNG TY CP TƯ VẤN ĐẦU TƯ VÀ QUẢN LÝ BẤT ĐỘNG SẢN SAIGON CENTER REAL">
                                <img class="color_flip"
                                    alt="CÔNG TY CP TƯ VẤN ĐẦU TƯ VÀ QUẢN LÝ BẤT ĐỘNG SẢN SAIGON CENTER REAL"
                                    src="./assets/image/lazy-preview-image-DFE3E8.png"
                                    src-lazy="https://file4.batdongsan.com.vn/2020/01/09/PGsxuI1y/20200109093229-ce7d.jpg"
                                    is-lazy-image="true" lazy-id="72"> </a>
                        </li>
                        <li class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="5"
                            style="width: 165px; margin-right: 26px;">
                            <a href="https://batdongsan.com.vn/thi-cong-xay-dung-ba-dinh/hd-mo-ep2132"
                                title="HD Mon Holdings">
                                <img class="color_flip" alt="HD Mon Holdings"
                                    src="./assets/image/lazy-preview-image-DFE3E8.png"
                                    src-lazy="https://file4.batdongsan.com.vn/2016/12/17/Nl3mS01v/20161217085942-2e1c.jpg"
                                    is-lazy-image="true" lazy-id="73"> </a>
                        </li>
                    </ul>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
                <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"></div>
                <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"></div>
                <div class="clear"></div>
            </div>
            <script type="text/javascript">
                (function callJQuery() {
                    if (window.FrontEnd && window.FrontEnd.Home && window.FrontEnd.Home.TypicalEnterpriseBinnova) {
                        new window.FrontEnd.Home.TypicalEnterpriseBinnova({});
                    } else {
                        setTimeout(callJQuery, 100)
                    }
                })();
            </script>


            <div class="homemain home-social">
                <h2>Báo chí nói về Batdongsan.com.vn</h2>
                <div class="swiper-container swiper-container-initialized swiper-container-horizontal">
                    <ul class="swiper-wrapper" style="transform: translate3d(-1145px, 0px, 0px); transition-duration: 0ms;">
                        <li class="swiper-slide swiper-slide-duplicate" style="width: 261.25px; margin-right: 25px;"
                            data-swiper-slide-index="4">
                            <div class="home-social-img">
                                <a href="https://dantri.com.vn/bat-dong-san/gia-condotel-lao-doc-20191212143023187.htm"
                                    target="_blank'" rel="nofollow">
                                    <img src="./assets/image/lazy-preview-image-DFE3E8.png"
                                        src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/B-03_DanTri_CondotelLaoDoc.jpg"
                                        is-lazy-image="true" lazy-id="49"> </a>
                            </div>
                            <div class="home-social-link">
                                <img style="max-height: 40px; max-width: 40px"
                                    src="./assets/image/lazy-preview-image-DFE3E8.png"
                                    src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/Icon_DanTri.png"
                                    is-lazy-image="true" lazy-id="50"> <a
                                    href="https://dantri.com.vn/bat-dong-san/gia-condotel-lao-doc-20191212143023187.htm"
                                    target="_blank'" rel="nofollow">
                                    Batdongsan.com.vn công bố số liệu về thị trường Condotel 2019
                                </a>
                            </div>
                        </li>
                        <li class="swiper-slide swiper-slide-duplicate" style="width: 261.25px; margin-right: 25px;"
                            data-swiper-slide-index="5">
                            <div class="home-social-img">
                                <a href="https://vietnammoi.vn/ha-noi-gia-nha-tai-quan-dong-da-co-luc-len-toi-290-trieu-dong-moi-m2-20191015093243315.htm"
                                    target="_blank'" rel="nofollow">
                                    <img src="./assets/image/lazy-preview-image-DFE3E8.png"
                                        src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/B-08_VietnamMoi.jpg"
                                        is-lazy-image="true" lazy-id="51"> </a>
                            </div>
                            <div class="home-social-link">
                                <img style="max-height: 40px; max-width: 40px"
                                    src="./assets/image/lazy-preview-image-DFE3E8.png"
                                    src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/Icon_VietnamMoi.png"
                                    is-lazy-image="true" lazy-id="52"> <a
                                    href="https://vietnammoi.vn/ha-noi-gia-nha-tai-quan-dong-da-co-luc-len-toi-290-trieu-dong-moi-m2-20191015093243315.htm"
                                    target="_blank'" rel="nofollow">
                                    Batdongsan.com.vn công bố giá rao bán bất động sản trên thị trường quý 3/2019
                                </a>
                            </div>
                        </li>
                        <li class="swiper-slide swiper-slide-duplicate" style="width: 261.25px; margin-right: 25px;"
                            data-swiper-slide-index="6">
                            <div class="home-social-img">
                                <a href="https://dantri.com.vn/bat-dong-san/batdongsancomvn-cong-bo-giao-dien-trang-chu-moi-20200110003608422.htm"
                                    target="_blank'" rel="nofollow">
                                    <img src="./assets/image/lazy-preview-image-DFE3E8.png"
                                        src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/01/10/yl6ZFYiO/20200110174136-6f7e.jpg"
                                        is-lazy-image="true" lazy-id="53"> </a>
                            </div>
                            <div class="home-social-link">
                                <img style="max-height: 40px; max-width: 40px"
                                    src="./assets/image/lazy-preview-image-DFE3E8.png"
                                    src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/Icon_DanTri.png"
                                    is-lazy-image="true" lazy-id="54"> <a
                                    href="https://dantri.com.vn/bat-dong-san/batdongsancomvn-cong-bo-giao-dien-trang-chu-moi-20200110003608422.htm"
                                    target="_blank'" rel="nofollow">
                                    Batdongsan.com.vn công bố giao diện trang chủ mới
                                </a>
                            </div>
                        </li>
                        <li class="swiper-slide swiper-slide-duplicate swiper-slide-prev"
                            style="width: 261.25px; margin-right: 25px;" data-swiper-slide-index="7">
                            <div class="home-social-img">
                                <a href="https://baoxaydung.com.vn/dat-nen-van-la-kenh-dau-tu-hap-dan-trong-tuong-lai-269183.html"
                                    target="_blank'" rel="nofollow">
                                    <img style="max-height: 173px" src="./assets/image/B-02_BaoXayDung.jpg">
                                </a>
                            </div>
                            <div class="home-social-link">
                                <img style="max-height: 40px; max-width: 40px" src="./assets/image/icon_BaoXayDung.png">
                                <a href="https://baoxaydung.com.vn/dat-nen-van-la-kenh-dau-tu-hap-dan-trong-tuong-lai-269183.html"
                                    target="_blank'" rel="nofollow">
                                    Batdongsan.com.vn tổ chức Hội nghị bất động sản Việt nam 2019
                                </a>
                            </div>
                        </li>
                        <li class="swiper-slide swiper-slide-active" style="width: 261.25px; margin-right: 25px;"
                            data-swiper-slide-index="0">
                            <div class="home-social-img">
                                <a href="http://cafef.vn/batdongsancomvn-chinh-thuc-thay-giao-dien-trang-chu-moi-20200110115000392.chn"
                                    target="_blank'" rel="nofollow">
                                    <img src="./assets/image/lazy-preview-image-DFE3E8.png"
                                        src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/01/10/yl6ZFYiO/20200110174140-b87a.jpg"
                                        is-lazy-image="true" lazy-id="41"> </a>
                            </div>
                            <div class="home-social-link">
                                <img style="max-height: 40px; max-width: 40px"
                                    src="./assets/image/lazy-preview-image-DFE3E8.png"
                                    src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/icon_CafeF.png"
                                    is-lazy-image="true" lazy-id="42"> <a
                                    href="http://cafef.vn/batdongsancomvn-chinh-thuc-thay-giao-dien-trang-chu-moi-20200110115000392.chn"
                                    target="_blank'" rel="nofollow">
                                    2020: Batdongsan.com.vn và những cải tiến công nghệ
                                </a>
                            </div>
                        </li>
                        <li class="swiper-slide swiper-slide-next" style="width: 261.25px; margin-right: 25px;"
                            data-swiper-slide-index="1">
                            <div class="home-social-img">
                                <a href="https://nhadat.tuoitre.vn/quy-mo-thi-truong-bat-dong-san-viet-nam-van-con-nho-so-voi-tiem-nang-20190702160134482.htm"
                                    target="_blank'" rel="nofollow">
                                    <img src="./assets/image/lazy-preview-image-DFE3E8.png"
                                        src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/B-06_TuoiTre.jpg"
                                        is-lazy-image="true" lazy-id="43"> </a>
                            </div>
                            <div class="home-social-link">
                                <img style="max-height: 40px; max-width: 40px"
                                    src="./assets/image/lazy-preview-image-DFE3E8.png"
                                    src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/Icon_TuoiTre.png"
                                    is-lazy-image="true" lazy-id="44"> <a
                                    href="https://nhadat.tuoitre.vn/quy-mo-thi-truong-bat-dong-san-viet-nam-van-con-nho-so-voi-tiem-nang-20190702160134482.htm"
                                    target="_blank'" rel="nofollow">
                                    Quy mô thị trường bất động sản việt nam vẫn còn nhỏ so với tiềm năng
                                </a>
                            </div>
                        </li>
                        <li class="swiper-slide" style="width: 261.25px; margin-right: 25px;" data-swiper-slide-index="2">
                            <div class="home-social-img">
                                <a href="http://cafef.vn/3-diem-nghen-cua-nen-kinh-te-va-tac-dong-den-thi-truong-bds-nam-2020-20191126173124409.chn"
                                    target="_blank'" rel="nofollow">
                                    <img src="./assets/image/lazy-preview-image-DFE3E8.png"
                                        src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/B-04_CafeF.jpg"
                                        is-lazy-image="true" lazy-id="45"> </a>
                            </div>
                            <div class="home-social-link">
                                <img style="max-height: 40px; max-width: 40px"
                                    src="./assets/image/lazy-preview-image-DFE3E8.png"
                                    src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/icon_CafeF.png"
                                    is-lazy-image="true" lazy-id="46"> <a
                                    href="http://cafef.vn/3-diem-nghen-cua-nen-kinh-te-va-tac-dong-den-thi-truong-bds-nam-2020-20191126173124409.chn"
                                    target="_blank'" rel="nofollow">
                                    Tác động của kinh tế đến thị trường bất động sản theo ghi nhận của Batdongsan.com.vn
                                </a>
                            </div>
                        </li>
                        <li class="swiper-slide" style="width: 261.25px; margin-right: 25px;" data-swiper-slide-index="3">
                            <div class="home-social-img">
                                <a href="https://thoibaonganhang.vn/vres-2019-noi-hoi-tu-cua-chuyen-gia-va-doanh-nghiep-bat-dong-san-hang-dau-95645.html"
                                    target="_blank'" rel="nofollow">
                                    <img src="./assets/image/lazy-preview-image-DFE3E8.png"
                                        src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/B-01_ThoiBaoNganHang.jpg"
                                        is-lazy-image="true" lazy-id="47"> </a>
                            </div>
                            <div class="home-social-link">
                                <img style="max-height: 40px; max-width: 40px"
                                    src="./assets/image/lazy-preview-image-DFE3E8.png"
                                    src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/icon_ThoiBaoNganHang.png"
                                    is-lazy-image="true" lazy-id="48"> <a
                                    href="https://thoibaonganhang.vn/vres-2019-noi-hoi-tu-cua-chuyen-gia-va-doanh-nghiep-bat-dong-san-hang-dau-95645.html"
                                    target="_blank'" rel="nofollow">
                                    VRES 2019 – Sự kiện được quan tâm nhất thị trường bất động sản Việt Nam
                                </a>
                            </div>
                        </li>
                        <li class="swiper-slide" style="width: 261.25px; margin-right: 25px;" data-swiper-slide-index="4">
                            <div class="home-social-img">
                                <a href="https://dantri.com.vn/bat-dong-san/gia-condotel-lao-doc-20191212143023187.htm"
                                    target="_blank'" rel="nofollow">
                                    <img src="./assets/image/lazy-preview-image-DFE3E8.png"
                                        src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/B-03_DanTri_CondotelLaoDoc.jpg"
                                        is-lazy-image="true" lazy-id="74"> </a>
                            </div>
                            <div class="home-social-link">
                                <img style="max-height: 40px; max-width: 40px"
                                    src="./assets/image/lazy-preview-image-DFE3E8.png"
                                    src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/Icon_DanTri.png"
                                    is-lazy-image="true" lazy-id="75"> <a
                                    href="https://dantri.com.vn/bat-dong-san/gia-condotel-lao-doc-20191212143023187.htm"
                                    target="_blank'" rel="nofollow">
                                    Batdongsan.com.vn công bố số liệu về thị trường Condotel 2019
                                </a>
                            </div>
                        </li>
                        <li class="swiper-slide" style="width: 261.25px; margin-right: 25px;" data-swiper-slide-index="5">
                            <div class="home-social-img">
                                <a href="https://vietnammoi.vn/ha-noi-gia-nha-tai-quan-dong-da-co-luc-len-toi-290-trieu-dong-moi-m2-20191015093243315.htm"
                                    target="_blank'" rel="nofollow">
                                    <img src="./assets/image/lazy-preview-image-DFE3E8.png"
                                        src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/B-08_VietnamMoi.jpg"
                                        is-lazy-image="true" lazy-id="76"> </a>
                            </div>
                            <div class="home-social-link">
                                <img style="max-height: 40px; max-width: 40px"
                                    src="./assets/image/lazy-preview-image-DFE3E8.png"
                                    src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/Icon_VietnamMoi.png"
                                    is-lazy-image="true" lazy-id="77"> <a
                                    href="https://vietnammoi.vn/ha-noi-gia-nha-tai-quan-dong-da-co-luc-len-toi-290-trieu-dong-moi-m2-20191015093243315.htm"
                                    target="_blank'" rel="nofollow">
                                    Batdongsan.com.vn công bố giá rao bán bất động sản trên thị trường quý 3/2019
                                </a>
                            </div>
                        </li>
                        <li class="swiper-slide" style="width: 261.25px; margin-right: 25px;" data-swiper-slide-index="6">
                            <div class="home-social-img">
                                <a href="https://dantri.com.vn/bat-dong-san/batdongsancomvn-cong-bo-giao-dien-trang-chu-moi-20200110003608422.htm"
                                    target="_blank'" rel="nofollow">
                                    <img src="./assets/image/lazy-preview-image-DFE3E8.png"
                                        src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/01/10/yl6ZFYiO/20200110174136-6f7e.jpg"
                                        is-lazy-image="true" lazy-id="78"> </a>
                            </div>
                            <div class="home-social-link">
                                <img style="max-height: 40px; max-width: 40px"
                                    src="./assets/image/lazy-preview-image-DFE3E8.png"
                                    src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/Icon_DanTri.png"
                                    is-lazy-image="true" lazy-id="79"> <a
                                    href="https://dantri.com.vn/bat-dong-san/batdongsancomvn-cong-bo-giao-dien-trang-chu-moi-20200110003608422.htm"
                                    target="_blank'" rel="nofollow">
                                    Batdongsan.com.vn công bố giao diện trang chủ mới
                                </a>
                            </div>
                        </li>
                        <li class="swiper-slide swiper-slide-duplicate-prev" style="width: 261.25px; margin-right: 25px;"
                            data-swiper-slide-index="7">
                            <div class="home-social-img">
                                <a href="https://baoxaydung.com.vn/dat-nen-van-la-kenh-dau-tu-hap-dan-trong-tuong-lai-269183.html"
                                    target="_blank'" rel="nofollow">
                                    <img style="max-height: 173px" src="./assets/image/B-02_BaoXayDung.jpg">
                                </a>
                            </div>
                            <div class="home-social-link">
                                <img style="max-height: 40px; max-width: 40px" src="./assets/image/icon_BaoXayDung.png">
                                <a href="https://baoxaydung.com.vn/dat-nen-van-la-kenh-dau-tu-hap-dan-trong-tuong-lai-269183.html"
                                    target="_blank'" rel="nofollow">
                                    Batdongsan.com.vn tổ chức Hội nghị bất động sản Việt nam 2019
                                </a>
                            </div>
                        </li>
                        <li class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active"
                            style="width: 261.25px; margin-right: 25px;" data-swiper-slide-index="0">
                            <div class="home-social-img">
                                <a href="http://cafef.vn/batdongsancomvn-chinh-thuc-thay-giao-dien-trang-chu-moi-20200110115000392.chn"
                                    target="_blank'" rel="nofollow">
                                    <img src="./assets/image/lazy-preview-image-DFE3E8.png"
                                        src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/01/10/yl6ZFYiO/20200110174140-b87a.jpg"
                                        is-lazy-image="true" lazy-id="80"> </a>
                            </div>
                            <div class="home-social-link">
                                <img style="max-height: 40px; max-width: 40px"
                                    src="./assets/image/lazy-preview-image-DFE3E8.png"
                                    src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/icon_CafeF.png"
                                    is-lazy-image="true" lazy-id="81"> <a
                                    href="http://cafef.vn/batdongsancomvn-chinh-thuc-thay-giao-dien-trang-chu-moi-20200110115000392.chn"
                                    target="_blank'" rel="nofollow">
                                    2020: Batdongsan.com.vn và những cải tiến công nghệ
                                </a>
                            </div>
                        </li>
                        <li class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next"
                            style="width: 261.25px; margin-right: 25px;" data-swiper-slide-index="1">
                            <div class="home-social-img">
                                <a href="https://nhadat.tuoitre.vn/quy-mo-thi-truong-bat-dong-san-viet-nam-van-con-nho-so-voi-tiem-nang-20190702160134482.htm"
                                    target="_blank'" rel="nofollow">
                                    <img src="./assets/image/lazy-preview-image-DFE3E8.png"
                                        src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/B-06_TuoiTre.jpg"
                                        is-lazy-image="true" lazy-id="82"> </a>
                            </div>
                            <div class="home-social-link">
                                <img style="max-height: 40px; max-width: 40px"
                                    src="./assets/image/lazy-preview-image-DFE3E8.png"
                                    src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/Icon_TuoiTre.png"
                                    is-lazy-image="true" lazy-id="83"> <a
                                    href="https://nhadat.tuoitre.vn/quy-mo-thi-truong-bat-dong-san-viet-nam-van-con-nho-so-voi-tiem-nang-20190702160134482.htm"
                                    target="_blank'" rel="nofollow">
                                    Quy mô thị trường bất động sản việt nam vẫn còn nhỏ so với tiềm năng
                                </a>
                            </div>
                        </li>
                        <li class="swiper-slide swiper-slide-duplicate" style="width: 261.25px; margin-right: 25px;"
                            data-swiper-slide-index="2">
                            <div class="home-social-img">
                                <a href="http://cafef.vn/3-diem-nghen-cua-nen-kinh-te-va-tac-dong-den-thi-truong-bds-nam-2020-20191126173124409.chn"
                                    target="_blank'" rel="nofollow">
                                    <img src="./assets/image/lazy-preview-image-DFE3E8.png"
                                        src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/B-04_CafeF.jpg"
                                        is-lazy-image="true" lazy-id="84"> </a>
                            </div>
                            <div class="home-social-link">
                                <img style="max-height: 40px; max-width: 40px"
                                    src="./assets/image/lazy-preview-image-DFE3E8.png"
                                    src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/icon_CafeF.png"
                                    is-lazy-image="true" lazy-id="85"> <a
                                    href="http://cafef.vn/3-diem-nghen-cua-nen-kinh-te-va-tac-dong-den-thi-truong-bds-nam-2020-20191126173124409.chn"
                                    target="_blank'" rel="nofollow">
                                    Tác động của kinh tế đến thị trường bất động sản theo ghi nhận của Batdongsan.com.vn
                                </a>
                            </div>
                        </li>
                        <li class="swiper-slide swiper-slide-duplicate" style="width: 261.25px; margin-right: 25px;"
                            data-swiper-slide-index="3">
                            <div class="home-social-img">
                                <a href="https://thoibaonganhang.vn/vres-2019-noi-hoi-tu-cua-chuyen-gia-va-doanh-nghiep-bat-dong-san-hang-dau-95645.html"
                                    target="_blank'" rel="nofollow">
                                    <img src="./assets/image/lazy-preview-image-DFE3E8.png"
                                        src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/B-01_ThoiBaoNganHang.jpg"
                                        is-lazy-image="true" lazy-id="86"> </a>
                            </div>
                            <div class="home-social-link">
                                <img style="max-height: 40px; max-width: 40px"
                                    src="./assets/image/lazy-preview-image-DFE3E8.png"
                                    src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/icon_ThoiBaoNganHang.png"
                                    is-lazy-image="true" lazy-id="87"> <a
                                    href="https://thoibaonganhang.vn/vres-2019-noi-hoi-tu-cua-chuyen-gia-va-doanh-nghiep-bat-dong-san-hang-dau-95645.html"
                                    target="_blank'" rel="nofollow">
                                    VRES 2019 – Sự kiện được quan tâm nhất thị trường bất động sản Việt Nam
                                </a>
                            </div>
                        </li>
                    </ul>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
                <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"></div>
                <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"></div>
                <div class="clear"></div>
            </div>
            <script type="text/javascript">
                (function callJQuery() {
                    if (window.FrontEnd && window.FrontEnd.Home && window.FrontEnd.Home.NewsSocialBinnova) {
                        new window.FrontEnd.Home.NewsSocialBinnova({});
                    } else {
                        setTimeout(callJQuery, 100)
                    }
                })();
            </script>
        </div>
    </div>

    <div class="banner-bottom">
        <div style="float: left; width: 560px">
        </div>
        <div style="float: left; width: 430px; margin-left: 5px">
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="boxLinkFooter ">
        <div class="home-center bg-grey2">
            <div class="home-small">
                <div class="html-content">
                    <div class="home-list-tag">
                        <div class="footer-middle">
                            <div class="footer-middle-colum1">
                                <div class="footer-middle-colum1-title">
                                    <h3>
                                        <a href="https://batdongsan.com.vn/nha-dat-ban-tp-hcm">MUA BÁN NHÀ ĐẤT TP HCM</a>
                                    </h3>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/ban-nha-rieng-quan-1">Bán nhà Quận 1</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-quan-2">Bán nhà Quận 2</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-quan-3">Bán nhà Quận 3</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-quan-4">Bán nhà Quận 4</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-quan-5">Bán nhà Quận 5</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-quan-6">Bán nhà Quận 6</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/ban-nha-rieng-quan-7">Bán nhà Quận 7</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-quan-8">Bán nhà Quận 8</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-quan-9">Bán nhà Quận 9</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-quan-10">Bán nhà Quận 10</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-quan-11">Bán nhà Quận 11</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/ban-nha-mat-pho-quan-12">Bán nhà Quận 12</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-tan-phu">Bán nhà Tân Phú</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-thu-duc">Bán nhà Thủ Đức</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-binh-chanh">Bán nhà Bình Chánh</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-binh-tan">Bán nhà Quận Bình Tân</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-diamond-island">Diamond
                                        Island</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-go-vap">Biệt thự Gò Vấp</a>
                                </div>
                                <div class="clear">
                                    &nbsp;
                                </div>
                            </div>
                            <div class="footer-middle-colum1">
                                <div class="footer-middle-colum1-title">
                                    <h3>
                                        <a href="https://batdongsan.com.vn/nha-dat-ban-ha-noi">MUA BÁN NHÀ ĐẤT HÀ NỘI</a>
                                    </h3>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/ban-nha-rieng-ha-noi">Bán nhà Hà Nội</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/tags/ban/ban-nha-chinh-chu-co-so-do-tai-ha-noi">Bán
                                        nhà chính chủ Hà Nội</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-ha-noi">Mua&nbsp;bán&nbsp;nhà&nbsp;đất Hà
                                        Nội</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-long-bien">Nhà đất Long Biên</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-ha-dong">Nhà đất Hà Đông</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-ha-noi">Chung cư Hà Nội</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/ban-nha-rieng-bac-tu-liem">Bán nhà Bắc Từ Liêm</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-ha-noi">Thuê nhà Hà Nội</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-ha-noi">Thuê chung cư Hà
                                        Nội</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-ha-dong">Thuê nhà Hà Đông</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-dong-anh">Nhà đất Đông Anh</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-ha-noi">Cho thuê mặt bằng Hà
                                        Nội</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-ha-noi">Thuê phòng trọ Hà
                                        Nội</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-times-city">Time City</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-vinhomes-ocean-park-gia-lam">Vinhomes
                                        Ocean Park</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-vinhomes-smart-city-dai-mo">Vinhomes
                                        Smart City</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-vinhomes-sky-lake">Vinhomes Sky
                                        Lake</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/ban-nha-mat-pho-go-vap">Nhà Phố Gò Vấp</a>
                                </div>
                                <div class="clear">
                                    &nbsp;
                                </div>
                            </div>
                            <div class="footer-middle-colum1">
                                <div class="footer-middle-colum1-title">
                                    <h3>
                                        <a href="https://batdongsan.com.vn/nha-dat-ban">MUA BÁN NHÀ ĐẤT</a>
                                    </h3>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-hai-phong">Nhà đất Hải Phòng</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-da-nang">Nhà đất Đà Nẵng</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-nam-dinh">Nhà đất Nam Định</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-an-giang">Nhà đất An Giang</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-hai-duong">Nhà đất Hải Dương</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-thai-binh">Nhà đất Thái Bình</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-can-tho">Nhà đất Cần Thơ</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-nha-trang-kh">Nhà đất Nha Trang</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-gia-lai">Nhà đất Gia Lai</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-quang-ngai">Nhà đất Quảng Ngãi</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-soc-trang">Nhà đất Sóc Trăng</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-vung-tau-vt">Nhà đất Vũng Tàu</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-binh-duong">Nhà đất Bình Dương</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-bac-ninh">Nhà đất Bắc Ninh</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-kon-tum">Nhà đất Kon Tum</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-quy-nhon-bdd">Nhà đất Quy Nhơn</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-bcons-green-view">Bcons Green
                                        View</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-cityland-park-hills">CityLand
                                        Park Hills</a>
                                </div>
                                <div class="clear">
                                    &nbsp;
                                </div>
                            </div>
                            <div class="footer-middle-colum1">
                                <div class="footer-middle-colum1-title">
                                    <h3>
                                        <a href="https://batdongsan.com.vn/nha-dat-cho-thue">NHÀ ĐẤT CHO THUÊ</a>
                                    </h3>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-da-nang">Cho thuê nhà Đà Nẵng</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-ha-noi">Cho thuê nhà Hà Nội</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-binh-thanh">Cho thuê nhà Bình
                                        Thạnh</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-go-vap">Cho thuê nhà Gò Vấp</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-thu-duc">Cho thuê nhà Thủ Đức</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-hai-phong">Cho thuê nhà Hải
                                        Phòng</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-quan-2">Cho thuê nhà Quận 2</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-tan-phu">Cho thuê nhà Tân Phú</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-quan-12">Cho thuê nhà Quận 12</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/cho-thue-nha-rieng">Thuê nhà nguyên căn</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-quan-7">Cho thuê nhà Quận 7</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro">Cho thuê phòng trọ</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-tan-binh">Cho thuê nhà Tân
                                        Bình</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-binh-thanh">Cho thuê nhà Bình
                                        Thạnh</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-quan-10">Cho thuê nhà Quận 10</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-quan-8">Cho thuê nhà Quận 8</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot">Cho thuê mặt bằng</a>
                                </div>
                                <div class="clear">
                                    &nbsp;
                                </div>
                            </div>
                        </div>
                        <div class="clear">
                            &nbsp;
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection

@section('scripts')

@endsection