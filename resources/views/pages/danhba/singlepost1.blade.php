@foreach ($brokers as $brokers)
@foreach ($provinces as $provinces)
@extends('layouts.master')

@section('title', )
{!! $brokers->name !!}
@endsection
@section('styles')
<link rel="stylesheet" href="https://staticfile.batdongsan.com.vn/css/filestatic.ver202011110519.msvbds.FrontEnd.min.css" />
<link rel="stylesheet" type="text/css" href="https://staticfile.batdongsan.com.vn/css/Broker/broker.min.css" media="all">
<link href="https://file4.batdongsan.com.vn/images/icon-bds.ico" rel="shortcut icon" type="image/x-icon" />
<link href="https://file4.batdongsan.com.vn/images/icon-bds.ico" rel="shortcut icon" type="image/x-icon" />
<!-- Laravel Mix -->
<link rel="stylesheet" href="{{asset('css/app.css')}}">
@endsection
@section('content')
  

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
            <meta name="robots" content="index,follow" />

    <meta name="custom-apple-itunes-app" content="app-id=866492094" />
    <meta name ='keywords' content = 'Công, ty, chúng, tôi, hoạt, động, trong, lĩnh, vực' />
<meta name ='description' content = 'Công ty chúng tôi hoạt động trong lĩnh vực dịch vụ môi giới Bất động sản cho thuê được điều hành bởi đội ngũ dày dặn kinh nghiệm trong nhiề' />
<title> {!! $brokers->name !!} | Công ty môi giới</title>
<meta name ='googlebot-news' content = 'noindex' />

        
    
        <link rel="stylesheet" href="https://staticfile.batdongsan.com.vn/css/filestatic.ver202011131001.msvbds.FrontEnd.min.css" />
    
    
    <link rel="stylesheet" href="https://staticfile.batdongsan.com.vn/lib/microtip/microtip.min.css" />
    
    
        <link rel="stylesheet" href="https://staticfile.batdongsan.com.vn/css/Product/filestatic.ver202011131001.msvbds.BrokerDetailsPage.min.css">
    

</head>
<body class="bg-site">
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MMVJT5G"
                height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div class="form-content">
        <div class="adPosition" positionCode="BANNER_POSITION_BACKGROUND"></div>
<script type='text/javascript'> var bannerContext={"CateId":null,"PageId":209,"CityCode":null,"DistrictId":null,"CurrentPage":232};</script>

        <div id="staticDomain" statsDomain="https://statistic.batdongsan.com.vn" data-fileimg="https://file4.batdongsan.com.vn" data-web="https://batdongsan.com.vn" data-msvrouter="/microservice-architecture-router" data-msvrouter-personal="/microservice-architecture-router-personal" data-cssServer="https://staticfile.batdongsan.com.vn" data-oldsystem="https://batdongsan.com.vn" data-content="https://batdongsan.com.vn" data-domainorigin="batdongsan.com.vn" data-sug-sell="https://suggestion1.batdongsan.com.vn/" data-sug-rent="https://suggestion2.batdongsan.com.vn/" class="hide"></div>
        <div id="addonImage" addon-image="https://staticfile.batdongsan.com.vn/images/no-image.png"></div>
        <div id="SiteLeft" class="banner-left">
            <div class="container-default">
                <div>
                    <div id="ban_wide_left" class="ban_wide_scroll">
                        <div class="adPosition" positionCode="BANNER_POSITION_WIDE_LEFT" style="margin-bottom: 0px"></div>
<script type='text/javascript'> var bannerContext={"CateId":null,"PageId":209,"CityCode":null,"DistrictId":null,"CurrentPage":232};</script>
                    </div>

                    <div id="ban_left" class="ban_scroll" style="display: block; top: 0px; position: fixed; left: 321.5px;">
                        <div class="adPosition" positionCode="BANNER_POSITION_LEFT" style="margin-bottom: 0px"></div>
<script type='text/javascript'> var bannerContext={"CateId":null,"PageId":209,"CityCode":null,"DistrictId":null,"CurrentPage":232};</script>
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
                

            <div id="SiteLeft" class="banner-left">
        <div class="container-default">
            <div>
                <div id="ban_wide_left" class="ban_wide_scroll" style="display: block; top: 146px; position: absolute; left: 4.5px; bottom: inherit;width:180px">
                    <div class="adPosition" positioncode="BANNER_POSITION_WIDE_LEFT" style="margin-bottom: 0px">
                        <div class="adshared" rt="">
                            <div class="adshareditem aditem" time="15" style="display: none;" src="https://file4.batdongsan.com.vn/2020/11/02/UVSXfqBy/20201102142443-d843.jpg" altsrc="https://file4.batdongsan.com.vn/images/no-photo1.jpg" link="http://experttalk.batdongsan.com.vn/khac/adapt-2-change-3-giu-lua-kinh-doanh-vuot-qua-covid-ev134?utm_source=BDS&amp;utm_medium=banner&amp;utm_campaign=A2C%233" bid="11037" tip="" tp="7" w="160" h="600" isbg="false" clr="false" k=""><a href="/microservice-architecture-router/Systems/Banner/Click?bannerid=11037" target="_blank" title="" rel="nofollow"><img src="https://file4.batdongsan.com.vn/2020/11/02/UVSXfqBy/20201102142443-d843.jpg" style="max-width: 100%; height:600px;"></a></div>
                            @foreach($sidebars as $sidebar)
                            <div class="adshareditem aditem" time="15" style="display: block;" src="https://file4.batdongsan.com.vn/2020/11/11/ZBfLmblA/20201111093910-ba2f.jpg" altsrc="https://file4.batdongsan.com.vn/images/no-photo1.jpg" link="https://avpe.propertyguru.com.my/?lang=vn" bid="11057" tip="" tp="7" w="160" h="600" isbg="false" clr="false" k=""><a href="/microservice-architecture-router/Systems/Banner/Click?bannerid=11057" target="_blank" title="" rel="nofollow"><img src="/storage/img/slides/{!! $sidebar->link!!}" style="max-width:100%; height:500px;"></a></div>
                            @endforeach
                        </div>
                    </div>
                    <script type="text/javascript">
                        var bannerContext = {
                            "CateId": null,
                            "PageId": 404,
                            "CityCode": null,
                            "DistrictId": null,
                            "CurrentPage": 404
                        };
                    </script>
                </div>

                <div id="ban_left" class="ban_scroll" style="display: block; top: 146px; position: absolute; left: 44.5px; bottom: inherit;">
                    <div class="adPosition" positioncode="BANNER_POSITION_LEFT" style="margin-bottom: 0px"></div>
                    <script type="text/javascript">
                        var bannerContext = {
                            "CateId": null,
                            "PageId": 404,
                            "CityCode": null,
                            "DistrictId": null,
                            "CurrentPage": 404
                        };
                    </script>
                </div>
            </div>
        </div>
    </div>
<div id="MiddleSubMenu">
    


    <div class="broker-top-search">
        <div class="col1">
            <div class="label_search">Tìm kiếm môi giới</div>
        </div>
        <form role="search" method="get" id="searchform" action="{{route('fullTextsearch')}}">
        <div class="col2">
            <div style="position: relative;">
                <input type="text" id="txtKeyword" name="key" class="suggest"  placeholder="Nhập từ khóa tìm kiếm" maxlength="100">
            </div>
        </div>
        <div class="clear"></div>
        <div id="searchcontrol">
            
        <div class="col3" style="margin-top: -34px;">
            <input type="submit" value="Tìm kiếm" id="btnSearch" class="search" >
        </div>
        <div class="clear"></div>
    </div>
    </form>
    <div class="clear"></div>

</div>
<div id="MainContent">
</div>
<div class="clear">
</div>
<div class="body-left">
            <div id="inforPageBroker" data-keyword=""
                 data-cate="0"
                 data-subcate="0"
                 data-city="SG"
                 data-district="0"
                 data-project="0"></div>

    <div>
        <div class="SubTopContent">
        </div>
        <div class="SubTopContent">
        </div>
    </div>
    <div style="clear: both;">
    </div>


    <div class="container-default">
        <div>
            <div class="broker-detail">
                <div class="avamg verticalbox">
                        <img class="img_detail childbox" title="C&#xD4;NG TY TNHH D&#x1ECA;CH V&#x1EE4; B&#x110;S GIGA REAL" src="{!! $brokers->broker_images !!}">
                </div>
                <div class="ttmg">
                    <h1 class="broker-name">
                    {!! $brokers->name !!}
                    </h1>
                    <div class="mb5">
                        <span class="br-icon br-address"></span>
                        <span style="float: left; width: 500px;">
                        {!! $brokers->address !!}
                        </span>
                        <div class="clear"></div>
                    </div>
                    <div class="mb5">
                        <span class="br-icon br-mobile"></span>0769969928

                        <span class="br-icon br-phone"></span>&#x110;ang c&#x1EAD;p nh&#x1EAD;t
                    </div>
                    <div class="mb5">
                        <span class="br-icon br-email"></span>
                        {!! $brokers->mail !!}
                    </div>
                    <div class="mb5">
                        <span class="br-icon br-web"></span>
                            <a href='{!! $brokers->website !!}' target='_blank' rel='nofollow' class='colorblue'>{!! $brokers->website !!}</a>
                    </div>
                    <div class="broker-link">
                            <a id="lnkSendEmail" class="broker-send-email" data-email="cskh.gigareal@gmail.com" data-type="" data-typeemail="0">Gửi Email</a>
                    </div>
                </div>
                <div class="clear10"></div>
                <div class="broker-top-by-cate pad-top-10">
                    <span>Giới thiệu</span>
                </div>
                <div id="broker_intro">
                    <div class="introtitle">
                        <h2>Lĩnh vực công ty môi giới</h2>
                    </div>
                    <div class="ltrAreaIntro">
                        <div>
                        {!! $brokers->name !!} môi giới ở những khu vực sau:
                        </div>
                        <ul>
                                        <li><span>Cho thu&#xEA; nh&#xE0; m&#x1EB7;t ph&#x1ED1; &#x1EDF; {!! $provinces->name_with_type !!}</span></li>
                                        <li><span>Cho thu&#xEA; nh&#xE0; m&#x1EB7;t ph&#x1ED1; &#x1EDF; Ph&#xFA; Nhu&#x1EAD;n, H&#x1ED3; Ch&#xED; Minh</span></li>
                                        <li><span>Cho thu&#xEA; nh&#xE0; m&#x1EB7;t ph&#x1ED1; &#x1EDF; T&#xE2;n B&#xEC;nh, H&#x1ED3; Ch&#xED; Minh</span></li>
                        </ul>
                    </div>
                    <div class="introtitle">
                        <h2>Về chúng tôi</h2>
                    </div>
                   
                    <p class="introcontent">
<p>
	 Ch&uacute;ng t&ocirc;i hoạt động trong lĩnh vực dịch vụ m&ocirc;i giới Bất động sản cho thu&ecirc;, được điều h&agrave;nh bởi đội ngũ d&agrave;y dặn kinh nghiệm trong nhiều năm v&agrave; lu&ocirc;n thấu hiểu được sự trăn trở của kh&aacute;ch h&agrave;ng.</p>
<p>
	Với hơn 10,000 căn nh&agrave; cho thu&ecirc; khắp khu vực {!! $provinces->name_with_type !!} v&agrave; nguồn dữ liệu kh&aacute;ch h&agrave;ng tin cậy v&agrave; h&ugrave;ng hậu. Được sự t&iacute;n nhiệm v&agrave; trao cơ hội ch&uacute;ng t&ocirc;i đang ng&agrave;y c&agrave;ng nắm bắt thị trường v&agrave; cố gắng đem đến ch&uacute; Q&uacute;y Kh&aacute;ch h&agrave;ng một sự chọn lựa dịch vụ hiệu quả nhất.</p>
<p>
	V&igrave; vậy {!! $brokers->name !!} lu&ocirc;n n&ecirc;u cao khẩu hiệu &ldquo;ĐỐI T&Aacute;C CHUY&Ecirc;N NGHIỆP&rdquo; với mục ti&ecirc;u l&agrave; một đối t&aacute;c tin cậy mang lại cho kh&aacute;ch h&agrave;ng những dịch vụ m&ocirc;i giới tốt nhất, sản phẩm ph&ugrave; hợp nhất một c&aacute;ch nhanh ch&oacute;ng v&agrave; ch&iacute;nh x&aacute;c, đảm bảo t&iacute;nh ph&aacute;p l&yacute;, r&otilde; r&agrave;ng, minh bạch.</p>
<p>
	Tr&acirc;n trọng cảm ơn qu&yacute; kh&aacute;ch v&agrave; hy vọng sự hợp t&aacute;c tốt đẹp!</p>
            
                    </p>
                </div>
            </div>
            <div class="clear10"></div>
        </div>
    </div>

    <div class="container-default">
        <div>
            
    <div class="broker-top-by-cate" id="broker-product-list">
        <span>Danh sách tin đăng</span>
    </div>
    <div class="product-lists" id="broker-page">
            <div class="vip5 product-item clearfix" uid="384460">
                <div class="product-image ">
                    <a class="product-avatar" href="/cho-thue-nha-mat-pho-pho-nguyen-thien-thuat-62/cho-tien-125-gan-nga-tu-dinh-chieu-quan-10-pr27857049" title="Cho thu&#xEA; nh&#xE0; m&#x1EB7;t ti&#x1EC1;n 125 Nguy&#x1EC5;n Thi&#x1EC7;n Thu&#x1EAD;t g&#x1EA7;n ng&#xE3; t&#x1B0; Nguy&#x1EC5;n &#x110;&#xEC;nh Chi&#x1EC3;u, qu&#x1EAD;n 10" onclick="">
                        <img class="product-avatar-img" src="https://file4.batdongsan.com.vn/crop/745x510/2020/11/19/20201119153450-560d_wm.jpg" alt="Cho thu&#234; nh&#224; mặt tiền 125 Nguyễn Thiện Thuật gần ng&#227; tư Nguyễn Đ&#236;nh Chiểu, quận 10" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png"/>
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">5</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="/cho-thue-nha-mat-pho-pho-nguyen-thien-thuat-62/cho-tien-125-gan-nga-tu-dinh-chieu-quan-10-pr27857049"
                           title="Cho thu&#xEA; nh&#xE0; m&#x1EB7;t ti&#x1EC1;n 125 Nguy&#x1EC5;n Thi&#x1EC7;n Thu&#x1EAD;t g&#x1EA7;n ng&#xE3; t&#x1B0; Nguy&#x1EC5;n &#x110;&#xEC;nh Chi&#x1EC3;u, qu&#x1EAD;n 10" class="vip5 product-link">
                            Cho thuê nhà mặt tiền 125 Nguyễn Thiện Thuật gần ngã tư Nguyễn Đình Chiểu, quận 10
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">40 tri&#x1EC7;u/th&#xE1;ng</span>
                                                    <span class="dot">·</span>
                        <span class="location">Qu&#x1EAD;n 10, H&#x1ED3; Ch&#xED; Minh</span>
                    </div>
                    <div class="product-content">
                        Cho thuê nhà mặt tiền 125 Nguyễn Thiện Thuật gần ngã tư Nguyễn Đình Chiểu, quận 10. - Toàn bộ căn nhà mặt tiền 1 trệt 5 lầu có thang máy. DTSD gần 200m2, nhà mới sạch đẹp, các lầu trống suốt, trang bị đầy đủ máy lạnh. Khu vực mặt tiền thông thoáng, kinh doanh sầm uất, có lề để xe
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                H&#xF4;m qua
                                <span class="tooltip-time">19/11/2020</span>
                            </span>
                        </div>
                        <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                            <i class="iconSave"
                               data-productid="27857049"
                               data-avatar="&lt;img class=&quot;product-avatar-img&quot; src=&quot;https://file4.batdongsan.com.vn/crop/745x510/2020/11/19/20201119153450-560d_wm.jpg&quot; alt=&quot;Cho thu&amp;#234; nh&amp;#224; m&#x1EB7;t ti&#x1EC1;n 125 Nguy&#x1EC5;n Thi&#x1EC7;n Thu&#x1EAD;t g&#x1EA7;n ng&amp;#227; t&#x1B0; Nguy&#x1EC5;n &#x110;&amp;#236;nh Chi&#x1EC3;u, qu&#x1EAD;n 10&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot;/&gt;"
                               data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/19/20201119153450-560d_wm.jpg"
                               data-vipclass="vip5"
                               data-isaddon="false"
                               data-has3d="false"
                               data-has360="false"
                               data-hasvideo="false"
                               data-title="Cho thu&#xEA; nh&#xE0; m&#x1EB7;t ti&#x1EC1;n 125 Nguy&#x1EC5;n Thi&#x1EC7;n Thu&#x1EAD;t g&#x1EA7;n ng&#xE3; t&#x1B0; Nguy&#x1EC5;n &#x110;&#xEC;nh Chi&#x1EC3;u, qu&#x1EAD;n 10"
                               data-price="40 tri&#x1EC7;u/th&#xE1;ng"
                               data-area="Kh&#xF4;ng x&#xE1;c &#x111;&#x1ECB;nh"
                               data-pricesort="0"
                               data-areasort="0"
                               data-room="0"
                               data-toilets="0"
                               data-address="Qu&#x1EAD;n 10, H&#x1ED3; Ch&#xED; Minh"
                               data-description="Cho thu&#xEA; nh&#xE0; m&#x1EB7;t ti&#x1EC1;n 125 Nguy&#x1EC5;n Thi&#x1EC7;n Thu&#x1EAD;t g&#x1EA7;n ng&#xE3; t&#x1B0; Nguy&#x1EC5;n &#x110;&#xEC;nh Chi&#x1EC3;u, qu&#x1EAD;n 10. - To&#xE0;n b&#x1ED9; c&#x103;n nh&#xE0; m&#x1EB7;t ti&#x1EC1;n 1 tr&#x1EC7;t 5 l&#x1EA7;u c&#xF3; thang m&#xE1;y. DTSD g&#x1EA7;n 200m2, nh&#xE0; m&#x1EDB;i s&#x1EA1;ch &#x111;&#x1EB9;p, c&#xE1;c l&#x1EA7;u tr&#x1ED1;ng su&#x1ED1;t, trang b&#x1ECB; &#x111;&#x1EA7;y &#x111;&#x1EE7; m&#xE1;y l&#x1EA1;nh. Khu v&#x1EF1;c m&#x1EB7;t ti&#x1EC1;n th&#xF4;ng tho&#xE1;ng, kinh doanh s&#x1EA7;m u&#x1EA5;t, c&#xF3; l&#x1EC1; &#x111;&#x1EC3; xe"
                               data-duration="H&#xF4;m qua"
                               data-updatedtime="19/11/2020"
                               data-datesort="11/19/2020 15:35:42"
                               data-contactname=""
                               data-contactmobile=""
                               data-url="/cho-thue-nha-mat-pho-pho-nguyen-thien-thuat-62/cho-tien-125-gan-nga-tu-dinh-chieu-quan-10-pr27857049"
                               data-totalmedia="5"
                               data-createbyuser="384460"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="vip5 product-item clearfix" uid="384460">
                <div class="product-image ">
                    <a class="product-avatar" href="/cho-thue-nha-mat-pho-duong-cao-thang-phuong-4-12/cho-tien-moi-xay-4-quan-3-5-lau-co-may-gia-70-trieu-pr27850018" title="Cho thu&#xEA; nh&#xE0; m&#x1EB7;t ti&#x1EC1;n m&#x1EDB;i x&#xE2;y &#x111;&#x1B0;&#x1EDD;ng Cao Th&#x1EAF;ng, ph&#x1B0;&#x1EDD;ng 4, qu&#x1EAD;n 3, 5 l&#x1EA7;u, c&#xF3; thang m&#xE1;y. Gi&#xE1; 70 tri&#x1EC7;u" onclick="">
                        <img class="product-avatar-img" src="https://file4.batdongsan.com.vn/crop/745x510/2020/11/19/20201119094857-6f47_wm.jpg" alt="Cho thu&#234; nh&#224; mặt tiền mới x&#226;y đường Cao Thắng, phường 4, quận 3, 5 lầu, c&#243; thang m&#225;y. Gi&#225; 70 triệu" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png"/>
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">6</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="/cho-thue-nha-mat-pho-duong-cao-thang-phuong-4-12/cho-tien-moi-xay-4-quan-3-5-lau-co-may-gia-70-trieu-pr27850018"
                           title="Cho thu&#xEA; nh&#xE0; m&#x1EB7;t ti&#x1EC1;n m&#x1EDB;i x&#xE2;y &#x111;&#x1B0;&#x1EDD;ng Cao Th&#x1EAF;ng, ph&#x1B0;&#x1EDD;ng 4, qu&#x1EAD;n 3, 5 l&#x1EA7;u, c&#xF3; thang m&#xE1;y. Gi&#xE1; 70 tri&#x1EC7;u" class="vip5 product-link">
                            Cho thuê nhà mặt tiền mới xây đường Cao Thắng, phường 4, quận 3, 5 lầu, có thang máy. Giá 70 triệu
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">70 tri&#x1EC7;u/th&#xE1;ng</span>
                            <span class="dot">·</span>
                            <span class="area">100 m&#xB2;</span>
                                                    <span class="dot">·</span>
                        <span class="location">Qu&#x1EAD;n 3, H&#x1ED3; Ch&#xED; Minh</span>
                    </div>
                    <div class="product-content">
                        Cho thuê nhà mặt tiền mới xây đường Cao Thắng, phường 4, quận 3. - Cho thuê toàn bộ diện tích ngang 5 mét, dài 20 mét. Xây dựng 1 trệt 5 lầu có thang máy, nhà mới xây 100%. Chưa sữ dụng. Có hình ảnh đính kèm thực tế. - Phù hợp thuê làm văn phòng, thẫm mỹ, spa, trường học... Giá c
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                H&#xF4;m qua
                                <span class="tooltip-time">19/11/2020</span>
                            </span>
                        </div>
                        <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                            <i class="iconSave"
                               data-productid="27850018"
                               data-avatar="&lt;img class=&quot;product-avatar-img&quot; src=&quot;https://file4.batdongsan.com.vn/crop/745x510/2020/11/19/20201119094857-6f47_wm.jpg&quot; alt=&quot;Cho thu&amp;#234; nh&amp;#224; m&#x1EB7;t ti&#x1EC1;n m&#x1EDB;i x&amp;#226;y &#x111;&#x1B0;&#x1EDD;ng Cao Th&#x1EAF;ng, ph&#x1B0;&#x1EDD;ng 4, qu&#x1EAD;n 3, 5 l&#x1EA7;u, c&amp;#243; thang m&amp;#225;y. Gi&amp;#225; 70 tri&#x1EC7;u&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot;/&gt;"
                               data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/19/20201119094857-6f47_wm.jpg"
                               data-vipclass="vip5"
                               data-isaddon="false"
                               data-has3d="false"
                               data-has360="false"
                               data-hasvideo="false"
                               data-title="Cho thu&#xEA; nh&#xE0; m&#x1EB7;t ti&#x1EC1;n m&#x1EDB;i x&#xE2;y &#x111;&#x1B0;&#x1EDD;ng Cao Th&#x1EAF;ng, ph&#x1B0;&#x1EDD;ng 4, qu&#x1EAD;n 3, 5 l&#x1EA7;u, c&#xF3; thang m&#xE1;y. Gi&#xE1; 70 tri&#x1EC7;u"
                               data-price="70 tri&#x1EC7;u/th&#xE1;ng"
                               data-area="100 m&#xB2;"
                               data-pricesort="0"
                               data-areasort="0"
                               data-room="5"
                               data-toilets="6"
                               data-address="Qu&#x1EAD;n 3, H&#x1ED3; Ch&#xED; Minh"
                               data-description="Cho thu&#xEA; nh&#xE0; m&#x1EB7;t ti&#x1EC1;n m&#x1EDB;i x&#xE2;y &#x111;&#x1B0;&#x1EDD;ng Cao Th&#x1EAF;ng, ph&#x1B0;&#x1EDD;ng 4, qu&#x1EAD;n 3. - Cho thu&#xEA; to&#xE0;n b&#x1ED9; di&#x1EC7;n t&#xED;ch ngang 5 m&#xE9;t, d&#xE0;i 20 m&#xE9;t. X&#xE2;y d&#x1EF1;ng 1 tr&#x1EC7;t 5 l&#x1EA7;u c&#xF3; thang m&#xE1;y, nh&#xE0; m&#x1EDB;i x&#xE2;y 100%. Ch&#x1B0;a s&#x1EEF; d&#x1EE5;ng. C&#xF3; h&#xEC;nh &#x1EA3;nh &#x111;&#xED;nh k&#xE8;m th&#x1EF1;c t&#x1EBF;. - Ph&#xF9; h&#x1EE3;p thu&#xEA; l&#xE0;m v&#x103;n ph&#xF2;ng, th&#x1EAB;m m&#x1EF9;, spa, tr&#x1B0;&#x1EDD;ng h&#x1ECD;c... Gi&#xE1; c"
                               data-duration="H&#xF4;m qua"
                               data-updatedtime="19/11/2020"
                               data-datesort="11/19/2020 09:50:06"
                               data-contactname=""
                               data-contactmobile=""
                               data-url="/cho-thue-nha-mat-pho-duong-cao-thang-phuong-4-12/cho-tien-moi-xay-4-quan-3-5-lau-co-may-gia-70-trieu-pr27850018"
                               data-totalmedia="6"
                               data-createbyuser="384460"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="vip5 product-item clearfix" uid="384460">
                <div class="product-image ">
                    <a class="product-avatar" href="/cho-thue-nha-rieng-duong-pham-van-hai-phuong-3-22/cho-nguyen-can-moi-xay-124-7-3-quan-tan-binh-pr27833369" title="Cho thu&#xEA; nh&#xE0; nguy&#xEA;n c&#x103;n m&#x1EDB;i x&#xE2;y 124/7 Ph&#x1EA1;m V&#x103;n Hai, Ph&#x1B0;&#x1EDD;ng 3, Qu&#x1EAD;n T&#xE2;n B&#xEC;nh" onclick="">
                        <img class="product-avatar-img" src="https://file4.batdongsan.com.vn/crop/745x510/2020/11/18/20201118090152-c89e_wm.jpg" alt="Cho thu&#234; nh&#224; nguy&#234;n căn mới x&#226;y 124/7 Phạm Văn Hai, Phường 3, Quận T&#226;n B&#236;nh" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png"/>
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">5</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="/cho-thue-nha-rieng-duong-pham-van-hai-phuong-3-22/cho-nguyen-can-moi-xay-124-7-3-quan-tan-binh-pr27833369"
                           title="Cho thu&#xEA; nh&#xE0; nguy&#xEA;n c&#x103;n m&#x1EDB;i x&#xE2;y 124/7 Ph&#x1EA1;m V&#x103;n Hai, Ph&#x1B0;&#x1EDD;ng 3, Qu&#x1EAD;n T&#xE2;n B&#xEC;nh" class="vip5 product-link">
                            Cho thuê nhà nguyên căn mới xây 124/7 Phạm Văn Hai, Phường 3, Quận Tân Bình
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">17 tri&#x1EC7;u/th&#xE1;ng</span>
                            <span class="dot">·</span>
                            <span class="area">120 m&#xB2;</span>
                                                    <span class="dot">·</span>
                        <span class="location">T&#xE2;n B&#xEC;nh, H&#x1ED3; Ch&#xED; Minh</span>
                    </div>
                    <div class="product-content">
                        Cho thuê nhà nguyên căn mới xây 124/7 Phạm Văn Hai, Phường 3, Quận Tân Bình.- Cho thuê toàn bộ căn nhà mới xây 3 lầu, diện tích sử dụng hơn 120m2.Gồm 4 phòng ngủ, 4WC. Nhà mới sạch đẹp hẻm thông thoáng an ninh, dân trí cao.Phù hợp ở gia đình, văn phòng công ty, kinh doanh ngành n
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                2 ng&#xE0;y tr&#x1B0;&#x1EDB;c
                                <span class="tooltip-time">18/11/2020</span>
                            </span>
                        </div>
                        <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                            <i class="iconSave"
                               data-productid="27833369"
                               data-avatar="&lt;img class=&quot;product-avatar-img&quot; src=&quot;https://file4.batdongsan.com.vn/crop/745x510/2020/11/18/20201118090152-c89e_wm.jpg&quot; alt=&quot;Cho thu&amp;#234; nh&amp;#224; nguy&amp;#234;n c&#x103;n m&#x1EDB;i x&amp;#226;y 124/7 Ph&#x1EA1;m V&#x103;n Hai, Ph&#x1B0;&#x1EDD;ng 3, Qu&#x1EAD;n T&amp;#226;n B&amp;#236;nh&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot;/&gt;"
                               data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/18/20201118090152-c89e_wm.jpg"
                               data-vipclass="vip5"
                               data-isaddon="false"
                               data-has3d="false"
                               data-has360="false"
                               data-hasvideo="false"
                               data-title="Cho thu&#xEA; nh&#xE0; nguy&#xEA;n c&#x103;n m&#x1EDB;i x&#xE2;y 124/7 Ph&#x1EA1;m V&#x103;n Hai, Ph&#x1B0;&#x1EDD;ng 3, Qu&#x1EAD;n T&#xE2;n B&#xEC;nh"
                               data-price="17 tri&#x1EC7;u/th&#xE1;ng"
                               data-area="120 m&#xB2;"
                               data-pricesort="0"
                               data-areasort="0"
                               data-room="4"
                               data-toilets="4"
                               data-address="T&#xE2;n B&#xEC;nh, H&#x1ED3; Ch&#xED; Minh"
                               data-description="Cho thu&#xEA; nh&#xE0; nguy&#xEA;n c&#x103;n m&#x1EDB;i x&#xE2;y 124/7 Ph&#x1EA1;m V&#x103;n Hai, Ph&#x1B0;&#x1EDD;ng 3, Qu&#x1EAD;n T&#xE2;n B&#xEC;nh.- Cho thu&#xEA; to&#xE0;n b&#x1ED9; c&#x103;n nh&#xE0; m&#x1EDB;i x&#xE2;y 3 l&#x1EA7;u, di&#x1EC7;n t&#xED;ch s&#x1EED; d&#x1EE5;ng h&#x1A1;n 120m2.G&#x1ED3;m 4 ph&#xF2;ng ng&#x1EE7;, 4WC. Nh&#xE0; m&#x1EDB;i s&#x1EA1;ch &#x111;&#x1EB9;p h&#x1EBB;m th&#xF4;ng tho&#xE1;ng an ninh, d&#xE2;n tr&#xED; cao.Ph&#xF9; h&#x1EE3;p &#x1EDF; gia &#x111;&#xEC;nh, v&#x103;n ph&#xF2;ng c&#xF4;ng ty, kinh doanh ng&#xE0;nh n"
                               data-duration="2 ng&#xE0;y tr&#x1B0;&#x1EDB;c"
                               data-updatedtime="18/11/2020"
                               data-datesort="11/18/2020 09:02:10"
                               data-contactname=""
                               data-contactmobile=""
                               data-url="/cho-thue-nha-rieng-duong-pham-van-hai-phuong-3-22/cho-nguyen-can-moi-xay-124-7-3-quan-tan-binh-pr27833369"
                               data-totalmedia="5"
                               data-createbyuser="384460"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="vip5 product-item clearfix" uid="384460">
                <div class="product-image ">
                    <a class="product-avatar" href="/cho-thue-nha-rieng-duong-nguyen-trong-tuyen-68/cho-hxh-6m-343-33-gan-nga-tu-le-van-sy-5-x-18m-1-tret-2-lau-4p-pr24718972" title="Cho thu&#xEA; nh&#xE0; bi&#x1EC7;t th&#x1EF1; 343 Nguy&#x1EC5;n Tr&#x1ECD;ng Tuy&#x1EC3;n, th&#xF4;ng &#x110;&#x1EB7;ng V&#x103;n Ng&#x1EEF;. DT 5x18m, 1 tr&#x1EC7;t, 2 l&#x1EA7;u, 4P" onclick="">
                        <img class="product-avatar-img" src="https://file4.batdongsan.com.vn/crop/745x510/2020/10/06/20201006111125-79b5_wm.jpg" alt="Cho thu&#234; nh&#224; biệt thự 343 Nguyễn Trọng Tuyển, th&#244;ng Đặng Văn Ngữ. DT 5x18m, 1 trệt, 2 lầu, 4P" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png"/>
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">4</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="/cho-thue-nha-rieng-duong-nguyen-trong-tuyen-68/cho-hxh-6m-343-33-gan-nga-tu-le-van-sy-5-x-18m-1-tret-2-lau-4p-pr24718972"
                           title="Cho thu&#xEA; nh&#xE0; bi&#x1EC7;t th&#x1EF1; 343 Nguy&#x1EC5;n Tr&#x1ECD;ng Tuy&#x1EC3;n, th&#xF4;ng &#x110;&#x1EB7;ng V&#x103;n Ng&#x1EEF;. DT 5x18m, 1 tr&#x1EC7;t, 2 l&#x1EA7;u, 4P" class="vip5 product-link">
                            Cho thuê nhà biệt thự 343 Nguyễn Trọng Tuyển, thông Đặng Văn Ngữ. DT 5x18m, 1 trệt, 2 lầu, 4P
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">19 tri&#x1EC7;u/th&#xE1;ng</span>
                            <span class="dot">·</span>
                            <span class="area">90 m&#xB2;</span>
                                                    <span class="dot">·</span>
                        <span class="location">Ph&#xFA; Nhu&#x1EAD;n, H&#x1ED3; Ch&#xED; Minh</span>
                    </div>
                    <div class="product-content">
                        Cho thuê nhà biệt thự 343 Nguyễn Trọng Tuyển, Thông Đặng Văn Ngữ. Ra khu Nguyễn Văn Trỗi thông Nam Kỳ Khởi Nghĩa.DT 5 x 18m, 1 trệt, 2 lầu, 4 phòng, nhà sạch sẽ giao ngay.Nằm trong khu KD cao cấp thích hợp đa ngành nghề. Giá 19 tr/th chốt nhanh.Ưu tiên dài hạn, không cần qua MG.L
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                3 ng&#xE0;y tr&#x1B0;&#x1EDB;c
                                <span class="tooltip-time">17/11/2020</span>
                            </span>
                        </div>
                        <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                            <i class="iconSave"
                               data-productid="24718972"
                               data-avatar="&lt;img class=&quot;product-avatar-img&quot; src=&quot;https://file4.batdongsan.com.vn/crop/745x510/2020/10/06/20201006111125-79b5_wm.jpg&quot; alt=&quot;Cho thu&amp;#234; nh&amp;#224; bi&#x1EC7;t th&#x1EF1; 343 Nguy&#x1EC5;n Tr&#x1ECD;ng Tuy&#x1EC3;n, th&amp;#244;ng &#x110;&#x1EB7;ng V&#x103;n Ng&#x1EEF;. DT 5x18m, 1 tr&#x1EC7;t, 2 l&#x1EA7;u, 4P&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot;/&gt;"
                               data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/10/06/20201006111125-79b5_wm.jpg"
                               data-vipclass="vip5"
                               data-isaddon="false"
                               data-has3d="false"
                               data-has360="false"
                               data-hasvideo="false"
                               data-title="Cho thu&#xEA; nh&#xE0; bi&#x1EC7;t th&#x1EF1; 343 Nguy&#x1EC5;n Tr&#x1ECD;ng Tuy&#x1EC3;n, th&#xF4;ng &#x110;&#x1EB7;ng V&#x103;n Ng&#x1EEF;. DT 5x18m, 1 tr&#x1EC7;t, 2 l&#x1EA7;u, 4P"
                               data-price="19 tri&#x1EC7;u/th&#xE1;ng"
                               data-area="90 m&#xB2;"
                               data-pricesort="0"
                               data-areasort="0"
                               data-room="4"
                               data-toilets="0"
                               data-address="Ph&#xFA; Nhu&#x1EAD;n, H&#x1ED3; Ch&#xED; Minh"
                               data-description="Cho thu&#xEA; nh&#xE0; bi&#x1EC7;t th&#x1EF1; 343 Nguy&#x1EC5;n Tr&#x1ECD;ng Tuy&#x1EC3;n, Th&#xF4;ng &#x110;&#x1EB7;ng V&#x103;n Ng&#x1EEF;. Ra khu Nguy&#x1EC5;n V&#x103;n Tr&#x1ED7;i th&#xF4;ng Nam K&#x1EF3; Kh&#x1EDF;i Ngh&#x129#x129;a.DT 5 x 18m, 1 tr&#x1EC7;t, 2 l&#x1EA7;u, 4 ph&#xF2;ng, nh&#xE0; s&#x1EA1;ch s&#x1EBD; giao ngay.N&#x1EB1;m trong khu KD cao c&#x1EA5;p th&#xED;ch h&#x1EE3;p &#x111;a ng&#xE0;nh ngh&#x1EC1;. Gi&#xE1; 19 tr/th ch&#x1ED1;t nhanh.&#x1AF;u ti&#xEA;n d&#xE0;i h&#x1EA1;n, kh&#xF4;ng c&#x1EA7;n qua MG.L"
                               data-duration="3 ng&#xE0;y tr&#x1B0;&#x1EDB;c"
                               data-updatedtime="17/11/2020"
                               data-datesort="11/17/2020 11:15:59"
                               data-contactname=""
                               data-contactmobile=""
                               data-url="/cho-thue-nha-rieng-duong-nguyen-trong-tuyen-68/cho-hxh-6m-343-33-gan-nga-tu-le-van-sy-5-x-18m-1-tret-2-lau-4p-pr24718972"
                               data-totalmedia="4"
                               data-createbyuser="384460"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="vip5 product-item clearfix" uid="384460">
                <div class="product-image ">
                    <a class="product-avatar" href="/cho-thue-nha-rieng-duong-le-van-sy-55/cho-hxh-339-1b-quan-3-gan-nga-tu-tran-quang-dieu-4-5x20m-1-tret-2-lau-st-pr24718824" title="Cho thu&#xEA; nh&#xE0; 386A L&#xEA; V&#x103;n S&#x1EF9;, Qu&#x1EAD;n 3, g&#x1EA7;n ng&#xE3; t&#x1B0; Tr&#x1EA7;n Quang Di&#x1EC7;u. DTSD 250m2" onclick="">
                        <img class="product-avatar-img" src="https://file4.batdongsan.com.vn/crop/745x510/2020/07/18/20200718094951-83a8_wm.jpg" alt="Cho thu&#234; nh&#224; 386A L&#234; Văn Sỹ, Quận 3, gần ng&#227; tư Trần Quang Diệu. DTSD 250m2" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png"/>
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">4</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="/cho-thue-nha-rieng-duong-le-van-sy-55/cho-hxh-339-1b-quan-3-gan-nga-tu-tran-quang-dieu-4-5x20m-1-tret-2-lau-st-pr24718824"
                           title="Cho thu&#xEA; nh&#xE0; 386A L&#xEA; V&#x103;n S&#x1EF9;, Qu&#x1EAD;n 3, g&#x1EA7;n ng&#xE3; t&#x1B0; Tr&#x1EA7;n Quang Di&#x1EC7;u. DTSD 250m2" class="vip5 product-link">
                            Cho thuê nhà 386A Lê Văn Sỹ, Quận 3, gần ngã tư Trần Quang Diệu. DTSD 250m2
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">25 tri&#x1EC7;u/th&#xE1;ng</span>
                            <span class="dot">·</span>
                            <span class="area">100 m&#xB2;</span>
                                                    <span class="dot">·</span>
                        <span class="location">Qu&#x1EAD;n 3, H&#x1ED3; Ch&#xED; Minh</span>
                    </div>
                    <div class="product-content">
                        Diện tích ngang 5x20m, 1 trệt, 3 lầu, 4 phòng ngủ, cầu thang cuối nhà. Nhà mới thiết kế thích hợp nhiều ngành nghề kinh doanh, vị trí nhà đẹp khu kinh doanh, văn phòng cao cấp đông dân cư. Vị trí thuận tiện di chuyển để đi các Quận của trung tâm thành phố. Giá cho thuê 25 triệu/t
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                3 ng&#xE0;y tr&#x1B0;&#x1EDB;c
                                <span class="tooltip-time">17/11/2020</span>
                            </span>
                        </div>
                        <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                            <i class="iconSave"
                               data-productid="24718824"
                               data-avatar="&lt;img class=&quot;product-avatar-img&quot; src=&quot;https://file4.batdongsan.com.vn/crop/745x510/2020/07/18/20200718094951-83a8_wm.jpg&quot; alt=&quot;Cho thu&amp;#234; nh&amp;#224; 386A L&amp;#234; V&#x103;n S&#x1EF9;, Qu&#x1EAD;n 3, g&#x1EA7;n ng&amp;#227; t&#x1B0; Tr&#x1EA7;n Quang Di&#x1EC7;u. DTSD 250m2&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot;/&gt;"
                               data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/07/18/20200718094951-83a8_wm.jpg"
                               data-vipclass="vip5"
                               data-isaddon="false"
                               data-has3d="false"
                               data-has360="false"
                               data-hasvideo="false"
                               data-title="Cho thu&#xEA; nh&#xE0; 386A L&#xEA; V&#x103;n S&#x1EF9;, Qu&#x1EAD;n 3, g&#x1EA7;n ng&#xE3; t&#x1B0; Tr&#x1EA7;n Quang Di&#x1EC7;u. DTSD 250m2"
                               data-price="25 tri&#x1EC7;u/th&#xE1;ng"
                               data-area="100 m&#xB2;"
                               data-pricesort="0"
                               data-areasort="0"
                               data-room="4"
                               data-toilets="0"
                               data-address="Qu&#x1EAD;n 3, H&#x1ED3; Ch&#xED; Minh"
                               data-description="Di&#x1EC7;n t&#xED;ch ngang 5x20m, 1 tr&#x1EC7;t, 3 l&#x1EA7;u, 4 ph&#xF2;ng ng&#x1EE7;, c&#x1EA7;u thang cu&#x1ED1;i nh&#xE0;. Nh&#xE0; m&#x1EDB;i thi&#x1EBF;t k&#x1EBF; th&#xED;ch h&#x1EE3;p nhi&#x1EC1;u ng&#xE0;nh ngh&#x1EC1; kinh doanh, v&#x1ECB; tr&#xED; nh&#xE0; &#x111;&#x1EB9;p khu kinh doanh, v&#x103;n ph&#xF2;ng cao c&#x1EA5;p &#x111;&#xF4;ng d&#xE2;n c&#x1B0;. V&#x1ECB; tr&#xED; thu&#x1EAD;n ti&#x1EC7;n di chuy&#x1EC3;n &#x111;&#x1EC3; &#x111;i c&#xE1;c Qu&#x1EAD;n c&#x1EE7;a trung t&#xE2;m th&#xE0;nh ph&#x1ED1;. Gi&#xE1; cho thu&#xEA; 25 tri&#x1EC7;u/t"
                               data-duration="3 ng&#xE0;y tr&#x1B0;&#x1EDB;c"
                               data-updatedtime="17/11/2020"
                               data-datesort="11/17/2020 11:14:27"
                               data-contactname=""
                               data-contactmobile=""
                               data-url="/cho-thue-nha-rieng-duong-le-van-sy-55/cho-hxh-339-1b-quan-3-gan-nga-tu-tran-quang-dieu-4-5x20m-1-tret-2-lau-st-pr24718824"
                               data-totalmedia="4"
                               data-createbyuser="384460"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="vip5 product-item clearfix" uid="384460">
                <div class="product-image ">
                    <a class="product-avatar" href="/cho-thue-nha-mat-pho-duong-cach-mang-thang-tam-phuong-5-17/cho-goc-2-mt-686-cmt8-doi-dien-cong-vien-le-thi-rieng-pr26198040" title="Cho thu&#xEA; nh&#xE0; 686A CMT8 &#x111;&#x1ED1;i di&#x1EC7;n c&#xF4;ng vi&#xEA;n L&#xEA; Th&#x1ECB; Ri&#xEA;ng" onclick="">
                        <img class="product-avatar-img" src="https://file4.batdongsan.com.vn/crop/745x510/2020/07/10/20200710093940-df1d_wm.jpg" alt="Cho thu&#234; nh&#224; 686A CMT8 đối diện c&#244;ng vi&#234;n L&#234; Thị Ri&#234;ng" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png"/>
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">4</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="/cho-thue-nha-mat-pho-duong-cach-mang-thang-tam-phuong-5-17/cho-goc-2-mt-686-cmt8-doi-dien-cong-vien-le-thi-rieng-pr26198040"
                           title="Cho thu&#xEA; nh&#xE0; 686A CMT8 &#x111;&#x1ED1;i di&#x1EC7;n c&#xF4;ng vi&#xEA;n L&#xEA; Th&#x1ECB; Ri&#xEA;ng" class="vip5 product-link">
                            Cho thuê nhà 686A CMT8 đối diện công viên Lê Thị Riêng
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">26 tri&#x1EC7;u/th&#xE1;ng</span>
                            <span class="dot">·</span>
                            <span class="area">110 m&#xB2;</span>
                                                    <span class="dot">·</span>
                        <span class="location">T&#xE2;n B&#xEC;nh, H&#x1ED3; Ch&#xED; Minh</span>
                    </div>
                    <div class="product-content">
                        Diện tích ngang 5 x 22 mét, nhà gồm 1 trệt, 2 lầu sân thượng. Cầu thang cuối nhà.Mặt bằng đẹp, tiện mở shop và làm showroom trưng bày.Nhà nằm ngay vị trí đắc địa, có lề để xe 6 mét, khu vực đông đúc sầm uất.Giá cho thuê: 26 triệu/tháng.Liên hệ chính chủ 0964027215 Anh Văn.
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                4 ng&#xE0;y tr&#x1B0;&#x1EDB;c
                                <span class="tooltip-time">16/11/2020</span>
                            </span>
                        </div>
                        <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                            <i class="iconSave"
                               data-productid="26198040"
                               data-avatar="&lt;img class=&quot;product-avatar-img&quot; src=&quot;https://file4.batdongsan.com.vn/crop/745x510/2020/07/10/20200710093940-df1d_wm.jpg&quot; alt=&quot;Cho thu&amp;#234; nh&amp;#224; 686A CMT8 &#x111;&#x1ED1;i di&#x1EC7;n c&amp;#244;ng vi&amp;#234;n L&amp;#234; Th&#x1ECB; Ri&amp;#234;ng&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot;/&gt;"
                               data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/07/10/20200710093940-df1d_wm.jpg"
                               data-vipclass="vip5"
                               data-isaddon="false"
                               data-has3d="false"
                               data-has360="false"
                               data-hasvideo="false"
                               data-title="Cho thu&#xEA; nh&#xE0; 686A CMT8 &#x111;&#x1ED1;i di&#x1EC7;n c&#xF4;ng vi&#xEA;n L&#xEA; Th&#x1ECB; Ri&#xEA;ng"
                               data-price="26 tri&#x1EC7;u/th&#xE1;ng"
                               data-area="110 m&#xB2;"
                               data-pricesort="0"
                               data-areasort="0"
                               data-room="0"
                               data-toilets="0"
                               data-address="T&#xE2;n B&#xEC;nh, H&#x1ED3; Ch&#xED; Minh"
                               data-description="Di&#x1EC7;n t&#xED;ch ngang 5 x 22 m&#xE9;t, nh&#xE0; g&#x1ED3;m 1 tr&#x1EC7;t, 2 l&#x1EA7;u s&#xE2;n th&#x1B0;&#x1EE3;ng. C&#x1EA7;u thang cu&#x1ED1;i nh&#xE0;.M&#x1EB7;t b&#x1EB1;ng &#x111;&#x1EB9;p, ti&#x1EC7;n m&#x1EDF; shop v&#xE0; l&#xE0;m showroom tr&#x1B0;ng b&#xE0;y.Nh&#xE0; n&#x1EB1;m ngay v&#x1ECB; tr&#xED; &#x111;&#x1EAF;c &#x111;&#x1ECB;a, c&#xF3; l&#x1EC1; &#x111;&#x1EC3; xe 6 m&#xE9;t, khu v&#x1EF1;c &#x111;&#xF4;ng &#x111;&#xFA;c s&#x1EA7;m u&#x1EA5;t.Gi&#xE1; cho thu&#xEA;: 26 tri&#x1EC7;u/th&#xE1;ng.Li&#xEA;n h&#x1EC7; ch&#xED;nh ch&#x1EE7; 0964027215 Anh V&#x103;n."
                               data-duration="4 ng&#xE0;y tr&#x1B0;&#x1EDB;c"
                               data-updatedtime="16/11/2020"
                               data-datesort="11/16/2020 10:54:44"
                               data-contactname=""
                               data-contactmobile=""
                               data-url="/cho-thue-nha-mat-pho-duong-cach-mang-thang-tam-phuong-5-17/cho-goc-2-mt-686-cmt8-doi-dien-cong-vien-le-thi-rieng-pr26198040"
                               data-totalmedia="4"
                               data-createbyuser="384460"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="vip5 product-item clearfix" uid="384460">
                <div class="product-image ">
                    <a class="product-avatar" href="/cho-thue-nha-rieng-duong-truong-quoc-dung-phuong-10-9/nguyen-can-cho-so-74-5h-gan-nguyen-van-troi-quan-phu-nhuan-pr26208919" title="Nguy&#xEA;n c&#x103;n cho thu&#xEA; s&#x1ED1; 74/5H Tr&#x1B0;&#x1A1;ng Qu&#x1ED1;c Dung, g&#x1EA7;n Nguy&#x1EC5;n V&#x103;n Tr&#x1ED7;i, Qu&#x1EAD;n Ph&#xFA; Nhu&#x1EAD;n" onclick="">
                        <img class="product-avatar-img" src="https://file4.batdongsan.com.vn/crop/745x510/2020/07/10/20200710174142-7517_wm.jpg" alt="Nguy&#234;n căn cho thu&#234; số 74/5H Trương Quốc Dung, gần Nguyễn Văn Trỗi, Quận Ph&#250; Nhuận" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png"/>
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">3</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="/cho-thue-nha-rieng-duong-truong-quoc-dung-phuong-10-9/nguyen-can-cho-so-74-5h-gan-nguyen-van-troi-quan-phu-nhuan-pr26208919"
                           title="Nguy&#xEA;n c&#x103;n cho thu&#xEA; s&#x1ED1; 74/5H Tr&#x1B0;&#x1A1;ng Qu&#x1ED1;c Dung, g&#x1EA7;n Nguy&#x1EC5;n V&#x103;n Tr&#x1ED7;i, Qu&#x1EAD;n Ph&#xFA; Nhu&#x1EAD;n" class="vip5 product-link">
                            Nguyên căn cho thuê số 74/5H Trương Quốc Dung, gần Nguyễn Văn Trỗi, Quận Phú Nhuận
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">20 tri&#x1EC7;u/th&#xE1;ng</span>
                            <span class="dot">·</span>
                            <span class="area">90 m&#xB2;</span>
                                                    <span class="dot">·</span>
                        <span class="location">Ph&#xFA; Nhu&#x1EAD;n, H&#x1ED3; Ch&#xED; Minh</span>
                    </div>
                    <div class="product-content">
                        Khu vực: Cho thuê nhà riêng tại Đường Trương Quốc Dung - Quận Phú Nhuận - Hồ Chí Minh giá: 20 triệu/tháng, diện tích: 190m2 Thông tin mô tả Diện tích ngang 4.5m x 20m, kết cấu trệt, 3 lầu hiện có 6 phòng ngủ, sân thượng thoáng, 4 nhà vệ sinh. Hẻm rộng, sát mặt tiền, nhà đẹp. Khu 
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                4 ng&#xE0;y tr&#x1B0;&#x1EDB;c
                                <span class="tooltip-time">16/11/2020</span>
                            </span>
                        </div>
                        <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                            <i class="iconSave"
                               data-productid="26208919"
                               data-avatar="&lt;img class=&quot;product-avatar-img&quot; src=&quot;https://file4.batdongsan.com.vn/crop/745x510/2020/07/10/20200710174142-7517_wm.jpg&quot; alt=&quot;Nguy&amp;#234;n c&#x103;n cho thu&amp;#234; s&#x1ED1; 74/5H Tr&#x1B0;&#x1A1;ng Qu&#x1ED1;c Dung, g&#x1EA7;n Nguy&#x1EC5;n V&#x103;n Tr&#x1ED7;i, Qu&#x1EAD;n Ph&amp;#250; Nhu&#x1EAD;n&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot;/&gt;"
                               data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/07/10/20200710174142-7517_wm.jpg"
                               data-vipclass="vip5"
                               data-isaddon="false"
                               data-has3d="false"
                               data-has360="false"
                               data-hasvideo="false"
                               data-title="Nguy&#xEA;n c&#x103;n cho thu&#xEA; s&#x1ED1; 74/5H Tr&#x1B0;&#x1A1;ng Qu&#x1ED1;c Dung, g&#x1EA7;n Nguy&#x1EC5;n V&#x103;n Tr&#x1ED7;i, Qu&#x1EAD;n Ph&#xFA; Nhu&#x1EAD;n"
                               data-price="20 tri&#x1EC7;u/th&#xE1;ng"
                               data-area="90 m&#xB2;"
                               data-pricesort="0"
                               data-areasort="0"
                               data-room="6"
                               data-toilets="4"
                               data-address="Ph&#xFA; Nhu&#x1EAD;n, H&#x1ED3; Ch&#xED; Minh"
                               data-description="Khu v&#x1EF1;c: Cho thu&#xEA; nh&#xE0; ri&#xEA;ng t&#x1EA1;i &#x110;&#x1B0;&#x1EDD;ng Tr&#x1B0;&#x1A1;ng Qu&#x1ED1;c Dung - Qu&#x1EAD;n Ph&#xFA; Nhu&#x1EAD;n - H&#x1ED3; Ch&#xED; Minh gi&#xE1;: 20 tri&#x1EC7;u/th&#xE1;ng, di&#x1EC7;n t&#xED;ch: 190m2 Th&#xF4;ng tin m&#xF4; t&#x1EA3; Di&#x1EC7;n t&#xED;ch ngang 4.5m x 20m, k&#x1EBF;t c&#x1EA5;u tr&#x1EC7;t, 3 l&#x1EA7;u hi&#x1EC7;n c&#xF3; 6 ph&#xF2;ng ng&#x1EE7;, s&#xE2;n th&#x1B0;&#x1EE3;ng tho&#xE1;ng, 4 nh&#xE0; v&#x1EC7; sinh. H&#x1EBB;m r&#x1ED9;ng, s&#xE1;t m&#x1EB7;t ti&#x1EC1;n, nh&#xE0; &#x111;&#x1EB9;p. Khu "
                               data-duration="4 ng&#xE0;y tr&#x1B0;&#x1EDB;c"
                               data-updatedtime="16/11/2020"
                               data-datesort="11/16/2020 10:53:41"
                               data-contactname=""
                               data-contactmobile=""
                               data-url="/cho-thue-nha-rieng-duong-truong-quoc-dung-phuong-10-9/nguyen-can-cho-so-74-5h-gan-nguyen-van-troi-quan-phu-nhuan-pr26208919"
                               data-totalmedia="3"
                               data-createbyuser="384460"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="vip5 product-item clearfix" uid="384460">
                <div class="product-image ">
                    <a class="product-avatar" href="/cho-thue-nha-rieng-duong-nguyen-van-troi-68/cho-villa-mini-moi-63-9-gan-nga-tu-huynh-banh-quan-phu-nhuan-pr27793630" title="Cho thu&#xEA; villa mini m&#x1EDB;i 63/9 Nguy&#x1EC5;n V&#x103;n Tr&#x1ED7;i, g&#x1EA7;n ng&#xE3; t&#x1B0; Hu&#x1EF3;nh V&#x103;n B&#xE1;nh, Qu&#x1EAD;n Ph&#xFA; Nhu&#x1EAD;n" onclick="">
                        <img class="product-avatar-img" src="https://file4.batdongsan.com.vn/crop/745x510/2020/11/14/20201114155159-7a51_wm.jpg" alt="Cho thu&#234; villa mini mới 63/9 Nguyễn Văn Trỗi, gần ng&#227; tư Huỳnh Văn B&#225;nh, Quận Ph&#250; Nhuận" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png"/>
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">2</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="/cho-thue-nha-rieng-duong-nguyen-van-troi-68/cho-villa-mini-moi-63-9-gan-nga-tu-huynh-banh-quan-phu-nhuan-pr27793630"
                           title="Cho thu&#xEA; villa mini m&#x1EDB;i 63/9 Nguy&#x1EC5;n V&#x103;n Tr&#x1ED7;i, g&#x1EA7;n ng&#xE3; t&#x1B0; Hu&#x1EF3;nh V&#x103;n B&#xE1;nh, Qu&#x1EAD;n Ph&#xFA; Nhu&#x1EAD;n" class="vip5 product-link">
                            Cho thuê villa mini mới 63/9 Nguyễn Văn Trỗi, gần ngã tư Huỳnh Văn Bánh, Quận Phú Nhuận
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">17 tri&#x1EC7;u/th&#xE1;ng</span>
                            <span class="dot">·</span>
                            <span class="area">70 m&#xB2;</span>
                                                    <span class="dot">·</span>
                        <span class="location">Ph&#xFA; Nhu&#x1EAD;n, H&#x1ED3; Ch&#xED; Minh</span>
                    </div>
                    <div class="product-content">
                        - Cho thuê toàn bộ villa mini thiết kế hiện đại đẹp, diện tích 7 mét, dài 10 mét. Xây dựng 1 trệt, 3 lầu. Gồm 3 phòng ngủ, 3WC riêng biệt. Không gian phòng khách, phòng bếp rộng. Nội thất cao cấp, có hệ thống năng lượng mặt trời. Tầng sân thượng rộng thoáng, có tiểu sân vườn, cây
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                6 ng&#xE0;y tr&#x1B0;&#x1EDB;c
                                <span class="tooltip-time">14/11/2020</span>
                            </span>
                        </div>
                        <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                            <i class="iconSave"
                               data-productid="27793630"
                               data-avatar="&lt;img class=&quot;product-avatar-img&quot; src=&quot;https://file4.batdongsan.com.vn/crop/745x510/2020/11/14/20201114155159-7a51_wm.jpg&quot; alt=&quot;Cho thu&amp;#234; villa mini m&#x1EDB;i 63/9 Nguy&#x1EC5;n V&#x103;n Tr&#x1ED7;i, g&#x1EA7;n ng&amp;#227; t&#x1B0; Hu&#x1EF3;nh V&#x103;n B&amp;#225;nh, Qu&#x1EAD;n Ph&amp;#250; Nhu&#x1EAD;n&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot;/&gt;"
                               data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/14/20201114155159-7a51_wm.jpg"
                               data-vipclass="vip5"
                               data-isaddon="false"
                               data-has3d="false"
                               data-has360="false"
                               data-hasvideo="false"
                               data-title="Cho thu&#xEA; villa mini m&#x1EDB;i 63/9 Nguy&#x1EC5;n V&#x103;n Tr&#x1ED7;i, g&#x1EA7;n ng&#xE3; t&#x1B0; Hu&#x1EF3;nh V&#x103;n B&#xE1;nh, Qu&#x1EAD;n Ph&#xFA; Nhu&#x1EAD;n"
                               data-price="17 tri&#x1EC7;u/th&#xE1;ng"
                               data-area="70 m&#xB2;"
                               data-pricesort="0"
                               data-areasort="0"
                               data-room="3"
                               data-toilets="0"
                               data-address="Ph&#xFA; Nhu&#x1EAD;n, H&#x1ED3; Ch&#xED; Minh"
                               data-description="- Cho thu&#xEA; to&#xE0;n b&#x1ED9; villa mini thi&#x1EBF;t k&#x1EBF; hi&#x1EC7;n &#x111;&#x1EA1;i &#x111;&#x1EB9;p, di&#x1EC7;n t&#xED;ch 7 m&#xE9;t, d&#xE0;i 10 m&#xE9;t. X&#xE2;y d&#x1EF1;ng 1 tr&#x1EC7;t, 3 l&#x1EA7;u. G&#x1ED3;m 3 ph&#xF2;ng ng&#x1EE7;, 3WC ri&#xEA;ng bi&#x1EC7;t. Kh&#xF4;ng gian ph&#xF2;ng kh&#xE1;ch, ph&#xF2;ng b&#x1EBF;p r&#x1ED9;ng. N&#x1ED9;i th&#x1EA5;t cao c&#x1EA5;p, c&#xF3; h&#x1EC7; th&#x1ED1;ng n&#x103;ng l&#x1B0;&#x1EE3;ng m&#x1EB7;t tr&#x1EDD;i. T&#x1EA7;ng s&#xE2;n th&#x1B0;&#x1EE3;ng r&#x1ED9;ng tho&#xE1;ng, c&#xF3; ti&#x1EC3;u s&#xE2;n v&#x1B0;&#x1EDD;n, c&#xE2;y"
                               data-duration="6 ng&#xE0;y tr&#x1B0;&#x1EDB;c"
                               data-updatedtime="14/11/2020"
                               data-datesort="11/14/2020 15:52:15"
                               data-contactname=""
                               data-contactmobile=""
                               data-url="/cho-thue-nha-rieng-duong-nguyen-van-troi-68/cho-villa-mini-moi-63-9-gan-nga-tu-huynh-banh-quan-phu-nhuan-pr27793630"
                               data-totalmedia="2"
                               data-createbyuser="384460"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="vip5 product-item clearfix" uid="384460">
                <div class="product-image ">
                    <a class="product-avatar" href="/cho-thue-nha-mat-pho-duong-dong-nai-phuong-15-3/cho-moi-xay-tien-110a-khu-cu-xa-bac-hai-p-15-quan-10-pr27793011" title="Cho thu&#xEA; nh&#xE0; m&#x1EDB;i x&#xE2;y m&#x1EB7;t ti&#x1EC1;n 110A &#x110;&#x1ED3;ng Nai - khu C&#x1B0; X&#xE1; B&#x1EAF;c H&#x1EA3;i, P. 15, Qu&#x1EAD;n 10" onclick="">
                        <img class="product-avatar-img" src="https://file4.batdongsan.com.vn/crop/745x510/2020/11/14/20201114150334-a6c9_wm.jpg" alt="Cho thu&#234; nh&#224; mới x&#226;y mặt tiền 110A Đồng Nai - khu Cư X&#225; Bắc Hải, P. 15, Quận 10" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png"/>
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">5</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="/cho-thue-nha-mat-pho-duong-dong-nai-phuong-15-3/cho-moi-xay-tien-110a-khu-cu-xa-bac-hai-p-15-quan-10-pr27793011"
                           title="Cho thu&#xEA; nh&#xE0; m&#x1EDB;i x&#xE2;y m&#x1EB7;t ti&#x1EC1;n 110A &#x110;&#x1ED3;ng Nai - khu C&#x1B0; X&#xE1; B&#x1EAF;c H&#x1EA3;i, P. 15, Qu&#x1EAD;n 10" class="vip5 product-link">
                            Cho thuê nhà mới xây mặt tiền 110A Đồng Nai - khu Cư Xá Bắc Hải, P. 15, Quận 10
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">30 tri&#x1EC7;u/th&#xE1;ng</span>
                            <span class="dot">·</span>
                            <span class="area">100 m&#xB2;</span>
                                                    <span class="dot">·</span>
                        <span class="location">Qu&#x1EAD;n 10, H&#x1ED3; Ch&#xED; Minh</span>
                    </div>
                    <div class="product-content">
                        - Diện tích ngang 5 mét, dài 20 mét. 1 trệt 2 lầu. Gồm 3 phòng lớn trang bị đầy đủ máy lạnh. Nhà mới xây thiết kế hiện đại Vị trí cầu thang gần cuối nhà phù hợp cho nhiều mục đích thuê. Có hình thực tế bên dưới. - Vị trí ngay mặt tiền khu đắc địa trung tâm thành phố, khu tập trun
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                6 ng&#xE0;y tr&#x1B0;&#x1EDB;c
                                <span class="tooltip-time">14/11/2020</span>
                            </span>
                        </div>
                        <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                            <i class="iconSave"
                               data-productid="27793011"
                               data-avatar="&lt;img class=&quot;product-avatar-img&quot; src=&quot;https://file4.batdongsan.com.vn/crop/745x510/2020/11/14/20201114150334-a6c9_wm.jpg&quot; alt=&quot;Cho thu&amp;#234; nh&amp;#224; m&#x1EDB;i x&amp;#226;y m&#x1EB7;t ti&#x1EC1;n 110A &#x110;&#x1ED3;ng Nai - khu C&#x1B0; X&amp;#225; B&#x1EAF;c H&#x1EA3;i, P. 15, Qu&#x1EAD;n 10&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot;/&gt;"
                               data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/14/20201114150334-a6c9_wm.jpg"
                               data-vipclass="vip5"
                               data-isaddon="false"
                               data-has3d="false"
                               data-has360="false"
                               data-hasvideo="false"
                               data-title="Cho thu&#xEA; nh&#xE0; m&#x1EDB;i x&#xE2;y m&#x1EB7;t ti&#x1EC1;n 110A &#x110;&#x1ED3;ng Nai - khu C&#x1B0; X&#xE1; B&#x1EAF;c H&#x1EA3;i, P. 15, Qu&#x1EAD;n 10"
                               data-price="30 tri&#x1EC7;u/th&#xE1;ng"
                               data-area="100 m&#xB2;"
                               data-pricesort="0"
                               data-areasort="0"
                               data-room="0"
                               data-toilets="0"
                               data-address="Qu&#x1EAD;n 10, H&#x1ED3; Ch&#xED; Minh"
                               data-description="- Di&#x1EC7;n t&#xED;ch ngang 5 m&#xE9;t, d&#xE0;i 20 m&#xE9;t. 1 tr&#x1EC7;t 2 l&#x1EA7;u. G&#x1ED3;m 3 ph&#xF2;ng l&#x1EDB;n trang b&#x1ECB; &#x111;&#x1EA7;y &#x111;&#x1EE7; m&#xE1;y l&#x1EA1;nh. Nh&#xE0; m&#x1EDB;i x&#xE2;y thi&#x1EBF;t k&#x1EBF; hi&#x1EC7;n &#x111;&#x1EA1;i V&#x1ECB; tr&#xED; c&#x1EA7;u thang g&#x1EA7;n cu&#x1ED1;i nh&#xE0; ph&#xF9; h&#x1EE3;p cho nhi&#x1EC1;u m&#x1EE5;c &#x111;&#xED;ch thu&#xEA;. C&#xF3; h&#xEC;nh th&#x1EF1;c t&#x1EBF; b&#xEA;n d&#x1B0;&#x1EDB;i. - V&#x1ECB; tr&#xED; ngay m&#x1EB7;t ti&#x1EC1;n khu &#x111;&#x1EAF;c &#x111;&#x1ECB;a trung t&#xE2;m th&#xE0;nh ph&#x1ED1;, khu t&#x1EAD;p trun"
                               data-duration="6 ng&#xE0;y tr&#x1B0;&#x1EDB;c"
                               data-updatedtime="14/11/2020"
                               data-datesort="11/14/2020 15:03:54"
                               data-contactname=""
                               data-contactmobile=""
                               data-url="/cho-thue-nha-mat-pho-duong-dong-nai-phuong-15-3/cho-moi-xay-tien-110a-khu-cu-xa-bac-hai-p-15-quan-10-pr27793011"
                               data-totalmedia="5"
                               data-createbyuser="384460"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="vip5 product-item clearfix" uid="384460">
                <div class="product-image ">
                    <a class="product-avatar" href="/cho-thue-nha-rieng-duong-nguyen-dinh-chieu-phuong-2-14/cho-491-5-2-quan-3-tp-ho-chi-minh-pr27779426" title="Cho thu&#xEA; nh&#xE0; 491/5 Nguy&#x1EC5;n &#x111;&#xEC;nh Chi&#x1EC3;u, Ph&#x1B0;&#x1EDD;ng 2, Qu&#x1EAD;n 3, Tp H&#x1ED3; Ch&#xED; Minh" onclick="">
                        <img class="product-avatar-img" src="https://file4.batdongsan.com.vn/crop/745x510/2020/11/13/20201113112736-8f3b_wm.jpg" alt="Cho thu&#234; nh&#224; 491/5 Nguyễn đ&#236;nh Chiểu, Phường 2, Quận 3, Tp Hồ Ch&#237; Minh" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png"/>
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">4</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="/cho-thue-nha-rieng-duong-nguyen-dinh-chieu-phuong-2-14/cho-491-5-2-quan-3-tp-ho-chi-minh-pr27779426"
                           title="Cho thu&#xEA; nh&#xE0; 491/5 Nguy&#x1EC5;n &#x111;&#xEC;nh Chi&#x1EC3;u, Ph&#x1B0;&#x1EDD;ng 2, Qu&#x1EAD;n 3, Tp H&#x1ED3; Ch&#xED; Minh" class="vip5 product-link">
                            Cho thuê nhà 491/5 Nguyễn đình Chiểu, Phường 2, Quận 3, Tp Hồ Chí Minh
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">16 tri&#x1EC7;u/th&#xE1;ng</span>
                            <span class="dot">·</span>
                            <span class="area">54 m&#xB2;</span>
                                                    <span class="dot">·</span>
                        <span class="location">Qu&#x1EAD;n 3, H&#x1ED3; Ch&#xED; Minh</span>
                    </div>
                    <div class="product-content">
                        Dt nhà 4,5 x 12m gồm 1 trệt 2 lầu và 1 sân thượng. Nhà có 5 phòng rộng, 3WC, 1PK, 1 bếp (có 3 máy nước nóng), nhà nội thất căn bản. Hẻm xe hơi ra vào thoải mái. Giá thuê 16,000,000 Đ/tháng.Liên hệ chủ nhà 0964027215 Văn Nguyễn.
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                1 tu&#x1EA7;n tr&#x1B0;&#x1EDB;c
                                <span class="tooltip-time">13/11/2020</span>
                            </span>
                        </div>
                        <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                            <i class="iconSave"
                               data-productid="27779426"
                               data-avatar="&lt;img class=&quot;product-avatar-img&quot; src=&quot;https://file4.batdongsan.com.vn/crop/745x510/2020/11/13/20201113112736-8f3b_wm.jpg&quot; alt=&quot;Cho thu&amp;#234; nh&amp;#224; 491/5 Nguy&#x1EC5;n &#x111;&amp;#236;nh Chi&#x1EC3;u, Ph&#x1B0;&#x1EDD;ng 2, Qu&#x1EAD;n 3, Tp H&#x1ED3; Ch&amp;#237; Minh&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot;/&gt;"
                               data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/13/20201113112736-8f3b_wm.jpg"
                               data-vipclass="vip5"
                               data-isaddon="false"
                               data-has3d="false"
                               data-has360="false"
                               data-hasvideo="false"
                               data-title="Cho thu&#xEA; nh&#xE0; 491/5 Nguy&#x1EC5;n &#x111;&#xEC;nh Chi&#x1EC3;u, Ph&#x1B0;&#x1EDD;ng 2, Qu&#x1EAD;n 3, Tp H&#x1ED3; Ch&#xED; Minh"
                               data-price="16 tri&#x1EC7;u/th&#xE1;ng"
                               data-area="54 m&#xB2;"
                               data-pricesort="0"
                               data-areasort="0"
                               data-room="0"
                               data-toilets="0"
                               data-address="Qu&#x1EAD;n 3, H&#x1ED3; Ch&#xED; Minh"
                               data-description="Dt nh&#xE0; 4,5 x 12m g&#x1ED3;m 1 tr&#x1EC7;t 2 l&#x1EA7;u v&#xE0; 1 s&#xE2;n th&#x1B0;&#x1EE3;ng. Nh&#xE0; c&#xF3; 5 ph&#xF2;ng r&#x1ED9;ng, 3WC, 1PK, 1 b&#x1EBF;p (c&#xF3; 3 m&#xE1;y n&#x1B0;&#x1EDB;c n&#xF3;ng), nh&#xE0; n&#x1ED9;i th&#x1EA5;t c&#x103;n b&#x1EA3;n. H&#x1EBB;m xe h&#x1A1;i ra v&#xE0;o tho&#x1EA3;i m&#xE1;i. Gi&#xE1; thu&#xEA; 16,000,000 &#x110;/th&#xE1;ng.Li&#xEA;n h&#x1EC7; ch&#x1EE7; nh&#xE0; 0964027215 V&#x103;n Nguy&#x1EC5;n."
                               data-duration="1 tu&#x1EA7;n tr&#x1B0;&#x1EDB;c"
                               data-updatedtime="13/11/2020"
                               data-datesort="11/13/2020 11:28:10"
                               data-contactname=""
                               data-contactmobile=""
                               data-url="/cho-thue-nha-rieng-duong-nguyen-dinh-chieu-phuong-2-14/cho-491-5-2-quan-3-tp-ho-chi-minh-pr27779426"
                               data-totalmedia="4"
                               data-createbyuser="384460"></i>
                        </span>
                    </div>
                </div>
            </div>
        <div class="text-center">
            <div class="pagination">
<a pId="1" class="actived" href="/cho-thue-nha-mat-pho/cong-ty-tnhh-dich-vu-bds-giga-real-eb2825">1</a>
<a pId="2" class="" href="/cho-thue-nha-mat-pho/cong-ty-tnhh-dich-vu-bds-giga-real-eb2825/p2">2</a>
<a pId="2" href="/cho-thue-nha-mat-pho/cong-ty-tnhh-dich-vu-bds-giga-real-eb2825/p2"><img src="https://staticfile.batdongsan.com.vn/images/icons/16x16/ic_double_caret_right.png" /></a>
</div>

        </div>
    </div>
    <div class="clear10"></div>

        </div>
    </div>

    

    <div class="container-default">
        <div>
            <div id="plOtherBrokers">
                <div class="broker-top-by-cate">
                    <span>Các nhà môi giới khác</span>

                    <a class="o-br-lnk" rel="nofollow" href="/moi-gioi-cho-thue-nha-mat-pho" target="_blank">Xem thêm nhà môi giới khác</a>
                </div>
                <div>
                    <ul class="mgklist">
                            <li>
                                <div class="o-br-img">
                                    <a href="/cho-thue-nha-mat-pho/cong-ty-tnhh-phat-trien-bat-dong-san-quang-minh-eb2780" rel="nofollow" class="verticalbox" style="width: 105px; height: 77px;">
                                        <img class="img childbox" src="https://file4.batdongsan.com.vn/resize/105x77/2020/02/28/3ZsSL6gy/20200228144525-7c78.jpg" alt=" C&#xD4;NG TY TNHH PH&#xC1;T TRI&#x1EC2;N B&#x1EA4;T &#x110;&#x1ED8;NG S&#x1EA2;N QUANG MINH ">
                                    </a>
                                </div>
                                <div>
                                    <strong>
                                        <a title=" C&#xD4;NG TY TNHH PH&#xC1;T TRI&#x1EC2;N B&#x1EA4;T &#x110;&#x1ED8;NG S&#x1EA2;N QUANG MINH " href="/cho-thue-nha-mat-pho/cong-ty-tnhh-phat-trien-bat-dong-san-quang-minh-eb2780" rel="nofollow"> C&#xD4;NG TY TNHH PH&#xC1;T TRI&#x1EC2;N B&#x1EA4;T &#x110;&#x1ED8;NG S&#x1EA2;N QUANG MINH </a>
                                    </strong>
                                </div>
                            </li>
                            <li>
                                <div class="o-br-img">
                                    <a href="/cho-thue-nha-mat-pho/cong-ty-co-phan-hoaland-eb2734" rel="nofollow" class="verticalbox" style="width: 105px; height: 77px;">
                                        <img class="img childbox" src="https://file4.batdongsan.com.vn/resize/105x77/2019/08/22/PGsxuI1y/20190822155228-8f6d.jpg" alt="C&#xF4;ng ty c&#x1ED5; ph&#x1EA7;n HoaLand">
                                    </a>
                                </div>
                                <div>
                                    <strong>
                                        <a title="C&#xF4;ng ty c&#x1ED5; ph&#x1EA7;n HoaLand" href="/cho-thue-nha-mat-pho/cong-ty-co-phan-hoaland-eb2734" rel="nofollow">C&#xF4;ng ty c&#x1ED5; ph&#x1EA7;n HoaLand</a>
                                    </strong>
                                </div>
                            </li>
                            <li>
                                <div class="o-br-img">
                                    <a href="/cho-thue-nha-mat-pho/cong-ty-cp-dau-tu-bds-kim-phat-eb2676" rel="nofollow" class="verticalbox" style="width: 105px; height: 77px;">
                                        <img class="img childbox" src="https://file4.batdongsan.com.vn/resize/105x77/2019/05/09/3ZsSL6gy/20190509152956-fbd5.jpg" alt="C&#xD4;NG TY CP &#x110;&#x1EA6;U T&#x1AF; B&#x110;S KIM PH&#xC1;T">
                                    </a>
                                </div>
                                <div>
                                    <strong>
                                        <a title="C&#xD4;NG TY CP &#x110;&#x1EA6;U T&#x1AF; B&#x110;S KIM PH&#xC1;T" href="/cho-thue-nha-mat-pho/cong-ty-cp-dau-tu-bds-kim-phat-eb2676" rel="nofollow">C&#xD4;NG TY CP &#x110;&#x1EA6;U T&#x1AF; B&#x110;S KIM PH&#xC1;T</a>
                                    </strong>
                                </div>
                            </li>
                            <li>
                                <div class="o-br-img">
                                    <a href="/cho-thue-nha-mat-pho/cong-ty-tnhh-kinh-doanh-dich-vu-thuong-mai-gia-khang-eb2672" rel="nofollow" class="verticalbox" style="width: 105px; height: 77px;">
                                        <img class="img childbox" src="https://file4.batdongsan.com.vn/resize/105x77/2019/05/07/3ZsSL6gy/20190507160740-924b.jpg" alt="C&#xD4;NG TY TNHH KINH DOANH D&#x1ECA;CH V&#x1EE4; TH&#x1AF;&#x1A0;NG M&#x1EA0;I GIA KHANG">
                                    </a>
                                </div>
                                <div>
                                    <strong>
                                        <a title="C&#xD4;NG TY TNHH KINH DOANH D&#x1ECA;CH V&#x1EE4; TH&#x1AF;&#x1A0;NG M&#x1EA0;I GIA KHANG" href="/cho-thue-nha-mat-pho/cong-ty-tnhh-kinh-doanh-dich-vu-thuong-mai-gia-khang-eb2672" rel="nofollow">C&#xD4;NG TY TNHH KINH DOANH D&#x1ECA;CH V&#x1EE4; TH&#x1AF;&#x1A0;NG M&#x1EA0;I GIA KHANG</a>
                                    </strong>
                                </div>
                            </li>
                            <li>
                                <div class="o-br-img">
                                    <a href="/cho-thue-nha-mat-pho/cong-ty-tnhh-thuong-mai-dich-vu-phat-trien-saigon-house-eb2670" rel="nofollow" class="verticalbox" style="width: 105px; height: 77px;">
                                        <img class="img childbox" src="https://file4.batdongsan.com.vn/resize/105x77/2019/04/26/3ZsSL6gy/20190426161332-67b4.jpg" alt="C&#xD4;NG TY TNHH TH&#x1AF;&#x1A0;NG M&#x1EA0;I - D&#x1ECA;CH V&#x1EE4; PH&#xC1;T TRI&#x1EC2;N SAIGON HOUSE">
                                    </a>
                                </div>
                                <div>
                                    <strong>
                                        <a title="C&#xD4;NG TY TNHH TH&#x1AF;&#x1A0;NG M&#x1EA0;I - D&#x1ECA;CH V&#x1EE4; PH&#xC1;T TRI&#x1EC2;N SAIGON HOUSE" href="/cho-thue-nha-mat-pho/cong-ty-tnhh-thuong-mai-dich-vu-phat-trien-saigon-house-eb2670" rel="nofollow">C&#xD4;NG TY TNHH TH&#x1AF;&#x1A0;NG M&#x1EA0;I - D&#x1ECA;CH V&#x1EE4; PH&#xC1;T TRI&#x1EC2;N SAIGON HOUSE</a>
                                    </strong>
                                </div>
                            </li>
                            <li>
                                <div class="o-br-img">
                                    <a href="/cho-thue-nha-mat-pho/cong-ty-tnhh-thanh-minh-land-eb2669" rel="nofollow" class="verticalbox" style="width: 105px; height: 77px;">
                                        <img class="img childbox" src="https://file4.batdongsan.com.vn/resize/105x77/2019/04/26/3ZsSL6gy/20190426134303-c3ab.jpg" alt="C&#xD4;NG TY TNHH THANH MINH LAND">
                                    </a>
                                </div>
                                <div>
                                    <strong>
                                        <a title="C&#xD4;NG TY TNHH THANH MINH LAND" href="/cho-thue-nha-mat-pho/cong-ty-tnhh-thanh-minh-land-eb2669" rel="nofollow">C&#xD4;NG TY TNHH THANH MINH LAND</a>
                                    </strong>
                                </div>
                            </li>
                    </ul>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="body-right">
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

    <!--info menu##-->
    <div class="clear"></div>
    <!--##district menu-->
    <div class="container-default">
        <div>
            

   


            <div style="clear:both;"></div>
        </div>
    </div>
    <!--district menu##-->
    <!--##broker typical-->
    <div class="container-default">
        <div>
            

    <div id="broker-typical">
        <div class="broker-top-by-cate"><h2><span>Nhà môi giới tiêu biểu</span></h2></div>
        <div id="dntb" style="visibility: visible; overflow: hidden; position: relative; z-index: 2; left: 0px; width: 714px;">
                <div class="dntb-row">
                    <div class="avatar">
                        <a href="/ban-dat/bat-dong-san-duc-phat-eb2729" rel="nofollow" class="verticalbox" style="width: 80px; height: 80px;">
                            <img class="img childbox" src="https://file4.batdongsan.com.vn/resize/200x200/2019/07/18/3ZsSL6gy/20190718101137-51a6.jpg" />
                        </a>
                    </div>
                    <div class="info-row">
                        <a class="link colorboldblue" href="/ban-dat/bat-dong-san-duc-phat-eb2729" rel="nofollow">B&#x1EA4;T &#x110;&#x1ED8;NG S&#x1EA2;N &#x110;&#x1EE8;C PH&#xC1;T</a>
                        <div class="fone"></div>
                        <div class="intro"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="dntb-row">
                    <div class="avatar">
                        <a href="/ban-can-ho-chung-cu/cong-ty-co-phan-dau-tu-dia-oc-bighomes-eb2774" rel="nofollow" class="verticalbox" style="width: 80px; height: 80px;">
                            <img class="img childbox" src="https://file4.batdongsan.com.vn/images/nophoto/broker-no-photo-500_285.jpg" />
                        </a>
                    </div>
                    <div class="info-row">
                        <a class="link colorboldblue" href="/ban-can-ho-chung-cu/cong-ty-co-phan-dau-tu-dia-oc-bighomes-eb2774" rel="nofollow">C&#xD4;NG TY C&#x1ED4; PH&#x1EA6;N &#x110;&#x1EA6;U T&#x1AF; &#x110;&#x1ECA;A &#x1ED0;C BIGHOMES</a>
                        <div class="fone"></div>
                        <div class="intro"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="dntb-row">
                    <div class="avatar">
                        <a href="/ban-can-ho-chung-cu/cong-ty-co-phan-dau-tu-ngoc-mai-land-eb2758" rel="nofollow" class="verticalbox" style="width: 80px; height: 80px;">
                            <img class="img childbox" src="https://file4.batdongsan.com.vn/resize/200x200/2019/11/18/3ZsSL6gy/20191118151335-0aea.jpg" />
                        </a>
                    </div>
                    <div class="info-row">
                        <a class="link colorboldblue" href="/ban-can-ho-chung-cu/cong-ty-co-phan-dau-tu-ngoc-mai-land-eb2758" rel="nofollow">C&#xD4;NG TY C&#x1ED4; PH&#x1EA6;N &#x110;&#x1EA6;U T&#x1AF; NG&#x1ECC;C MAI LAND</a>
                        <div class="fone"></div>
                        <div class="intro"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="dntb-row">
                    <div class="avatar">
                        <a href="/ban-nha-rieng/nguyen-thi-hong-trang-ib198588" rel="nofollow" class="verticalbox" style="width: 80px; height: 80px;">
                            <img class="img childbox" src="https://file4.batdongsan.com.vn/resize/200x200/2017/09/03/20170903075347-85b7.jpg" />
                        </a>
                    </div>
                    <div class="info-row">
                        <a class="link colorboldblue" href="/ban-nha-rieng/nguyen-thi-hong-trang-ib198588" rel="nofollow">Nguy&#x1EC5;n Th&#x1ECB; H&#x1ED3;ng Trang</a>
                        <div class="fone">0919910070</div>
                        <div class="intro">Chuyên môi giới và nhận ký gửi BĐS tại TP.HCM.</div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="dntb-row">
                    <div class="avatar">
                        <a href="/ban-nha-rieng/nguyen-ngoc-ha-ib597" rel="nofollow" class="verticalbox" style="width: 80px; height: 80px;">
                            <img class="img childbox" src="https://file4.batdongsan.com.vn/resize/200x200/2020/10/12/20201012103609-8363.jpg" />
                        </a>
                    </div>
                    <div class="info-row">
                        <a class="link colorboldblue" href="/ban-nha-rieng/nguyen-ngoc-ha-ib597" rel="nofollow">Nguy&#x1EC5;n Ng&#x1ECD;c H&#xE0;</a>
                        <div class="fone">0903696093</div>
                        <div class="intro">Chuyên môi giới và nhận ký gửi Bất Động Sản tại Quận Gò Vấp, Tân Bình</div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="dntb-row">
                    <div class="avatar">
                        <a href="/ban-dat-nen-du-an/thanh-wado-mr-ib556158" rel="nofollow" class="verticalbox" style="width: 80px; height: 80px;">
                            <img class="img childbox" src="https://file4.batdongsan.com.vn/resize/200x200/2017/03/25/eCGLjNi5/20170325092203-ecb0.jpg" />
                        </a>
                    </div>
                    <div class="info-row">
                        <a class="link colorboldblue" href="/ban-dat-nen-du-an/thanh-wado-mr-ib556158" rel="nofollow">Thanh Wado (Mr.)</a>
                        <div class="fone">0909743354</div>
                        <div class="intro"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="dntb-row">
                    <div class="avatar">
                        <a href="/ban-nha-rieng/cong-ty-co-phan-nha-dat-gia-lam-eb2769" rel="nofollow" class="verticalbox" style="width: 80px; height: 80px;">
                            <img class="img childbox" src="https://file4.batdongsan.com.vn/resize/200x200/2019/12/23/PGsxuI1y/20191223163008-e6d6.jpg" />
                        </a>
                    </div>
                    <div class="info-row">
                        <a class="link colorboldblue" href="/ban-nha-rieng/cong-ty-co-phan-nha-dat-gia-lam-eb2769" rel="nofollow">C&#xD4;NG TY C&#x1ED4; PH&#x1EA6;N NH&#xC0; &#x110;&#x1EA4;T GIA L&#xC2;M</a>
                        <div class="fone"></div>
                        <div class="intro"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="dntb-row">
                    <div class="avatar">
                        <a href="/ban-dat-nen-du-an/cong-ty-co-phan-phat-trien-dia-oc-lucky-land-eb2754" rel="nofollow" class="verticalbox" style="width: 80px; height: 80px;">
                            <img class="img childbox" src="https://file4.batdongsan.com.vn/resize/200x200/2019/11/07/3ZsSL6gy/20191107141803-7d94.jpg" />
                        </a>
                    </div>
                    <div class="info-row">
                        <a class="link colorboldblue" href="/ban-dat-nen-du-an/cong-ty-co-phan-phat-trien-dia-oc-lucky-land-eb2754" rel="nofollow">C&#xD4;NG TY C&#x1ED4; PH&#x1EA6;N PH&#xC1;T TRI&#x1EC2;N &#x110;&#x1ECA;A &#x1ED0;C LUCKY LAND</a>
                        <div class="fone"></div>
                        <div class="intro"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="dntb-row">
                    <div class="avatar">
                        <a href="/ban-nha-rieng/cong-ty-co-phan-tu-van-dau-tu-va-quan-ly-bat-dong-san-saigon-center-real-eb2768" rel="nofollow" class="verticalbox" style="width: 80px; height: 80px;">
                            <img class="img childbox" src="https://file4.batdongsan.com.vn/resize/200x200/2019/12/21/PGsxuI1y/20191221135051-67dc.jpg" />
                        </a>
                    </div>
                    <div class="info-row">
                        <a class="link colorboldblue" href="/ban-nha-rieng/cong-ty-co-phan-tu-van-dau-tu-va-quan-ly-bat-dong-san-saigon-center-real-eb2768" rel="nofollow">C&#xD4;NG TY C&#x1ED4; PH&#x1EA6;N T&#x1AF; V&#x1EA4;N &#x110;&#x1EA6;U T&#x1AF; V&#xC0; QU&#x1EA2;N L&#xDD; B&#x1EA4;T &#x110;&#x1ED8;NG S&#x1EA2;N SAIGON CENTER REAL</a>
                        <div class="fone"></div>
                        <div class="intro"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="dntb-row">
                    <div class="avatar">
                        <a href="/ban-nha-rieng/chienhien-83-yahoo-com-vn-ib40115" rel="nofollow" class="verticalbox" style="width: 80px; height: 80px;">
                            <img class="img childbox" src="https://file4.batdongsan.com.vn/resize/200x200/2016/03/09/eCGLjNi5/20160309162137-a122.jpg" />
                        </a>
                    </div>
                    <div class="info-row">
                        <a class="link colorboldblue" href="/ban-nha-rieng/chienhien-83-yahoo-com-vn-ib40115" rel="nofollow">chienhien_83@yahoo.com.vn</a>
                        <div class="fone">0909677159</div>
                        <div class="intro">Chuyên môi giới và nhận ký gửi Bất Động Sản tại TP.Hồ Chí Minh</div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="dntb-row">
                    <div class="avatar">
                        <a href="/ban-dat/cong-ty-tnhh-city-house-viet-nam-eb2771" rel="nofollow" class="verticalbox" style="width: 80px; height: 80px;">
                            <img class="img childbox" src="https://file4.batdongsan.com.vn/resize/200x200/2020/01/02/3ZsSL6gy/20200102173302-78fa.jpg" />
                        </a>
                    </div>
                    <div class="info-row">
                        <a class="link colorboldblue" href="/ban-dat/cong-ty-tnhh-city-house-viet-nam-eb2771" rel="nofollow">C&#xD4;NG TY TNHH CITY HOUSE VI&#x1EC6;T NAM</a>
                        <div class="fone"></div>
                        <div class="intro"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="dntb-row">
                    <div class="avatar">
                        <a href="/ban-dat-nen-du-an/cong-ty-tnhh-dau-tu-bat-dong-san-khoang-san-thuan-viet-eb2566" rel="nofollow" class="verticalbox" style="width: 80px; height: 80px;">
                            <img class="img childbox" src="https://file4.batdongsan.com.vn/resize/200x200/2018/12/07/3ZsSL6gy/20181207091758-a578.jpg" />
                        </a>
                    </div>
                    <div class="info-row">
                        <a class="link colorboldblue" href="/ban-dat-nen-du-an/cong-ty-tnhh-dau-tu-bat-dong-san-khoang-san-thuan-viet-eb2566" rel="nofollow">C&#xF4;ng Ty TNHH &#x110;&#x1EA7;u T&#x1B0; B&#x1EA5;t &#x110;&#x1ED9;ng S&#x1EA3;n Kho&#xE1;ng S&#x1EA3;n Thu&#x1EAD;n Vi&#x1EC7;t</a>
                        <div class="fone"></div>
                        <div class="intro"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="dntb-row">
                    <div class="avatar">
                        <a href="/ban-dat-nen-du-an/cong-ty-tnhh-dau-tu-dia-oc-hung-phat-eb2747" rel="nofollow" class="verticalbox" style="width: 80px; height: 80px;">
                            <img class="img childbox" src="https://file4.batdongsan.com.vn/resize/200x200/2019/10/25/3ZsSL6gy/20191025135455-b657.jpg" />
                        </a>
                    </div>
                    <div class="info-row">
                        <a class="link colorboldblue" href="/ban-dat-nen-du-an/cong-ty-tnhh-dau-tu-dia-oc-hung-phat-eb2747" rel="nofollow">C&#xD4;NG TY TNHH &#x110;&#x1EA6;U T&#x1AF; &#x110;&#x1ECA;A &#x1ED0;C H&#xD9;NG PH&#xC1;T</a>
                        <div class="fone"></div>
                        <div class="intro"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="dntb-row">
                    <div class="avatar">
                        <a href="/ban-dat-nen-du-an/cong-ty-tnhh-dich-vu-bat-dong-san-tan-phu-eb2724" rel="nofollow" class="verticalbox" style="width: 80px; height: 80px;">
                            <img class="img childbox" src="https://file4.batdongsan.com.vn/resize/200x200/2019/06/25/PGsxuI1y/20190625104356-f3f9.jpg" />
                        </a>
                    </div>
                    <div class="info-row">
                        <a class="link colorboldblue" href="/ban-dat-nen-du-an/cong-ty-tnhh-dich-vu-bat-dong-san-tan-phu-eb2724" rel="nofollow">C&#xD4;NG TY TNHH D&#x1ECA;CH V&#x1EE4; B&#x1EA4;T &#x110;&#x1ED8;NG S&#x1EA2;N T&#xC2;N PH&#xDA;</a>
                        <div class="fone"></div>
                        <div class="intro"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="dntb-row">
                    <div class="avatar">
                        <a href="/cho-thue-van-phong/cong-ty-tnhh-kinh-doanh-bds-will-home-eb2559" rel="nofollow" class="verticalbox" style="width: 80px; height: 80px;">
                            <img class="img childbox" src="https://file4.batdongsan.com.vn/resize/200x200/2018/07/10/JGcIp0rf/20180710141143-5c21.jpg" />
                        </a>
                    </div>
                    <div class="info-row">
                        <a class="link colorboldblue" href="/cho-thue-van-phong/cong-ty-tnhh-kinh-doanh-bds-will-home-eb2559" rel="nofollow">C&#xF4;ng ty TNHH Kinh Doanh B&#x110;S Will Home</a>
                        <div class="fone"></div>
                        <div class="intro"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="dntb-row">
                    <div class="avatar">
                        <a href="/ban-nha-rieng/cong-ty-tnhh-thuong-mai-dich-vu-bds-hoi-tu-eb2664" rel="nofollow" class="verticalbox" style="width: 80px; height: 80px;">
                            <img class="img childbox" src="https://file4.batdongsan.com.vn/resize/200x200/2019/07/12/3ZsSL6gy/20190712150749-ce58.jpg" />
                        </a>
                    </div>
                    <div class="info-row">
                        <a class="link colorboldblue" href="/ban-nha-rieng/cong-ty-tnhh-thuong-mai-dich-vu-bds-hoi-tu-eb2664" rel="nofollow">C&#xD4;NG TY TNHH TH&#x1AF;&#x1A0;NG M&#x1EA0;I D&#x1ECA;CH V&#x1EE4; B&#x110;S H&#x1ED8;I T&#x1EE4;</a>
                        <div class="fone"></div>
                        <div class="intro"></div>
                    </div>
                    <div class="clear"></div>
                </div>
        </div>

        <div class="viewall">
            <a href="/nha-moi-gioi" rel="nofollow">Xem tất cả</a>
        </div>
    </div>

        </div>
    </div>
    <!--broker typical##-->
    <!--##news-->
    <div class="container-common">
        <div class="broker-top-by-cate"><h2><span>Lời khuyên</span></h2></div>

        <div class="broker-ul-list">
            <div class="list">
                

<ul>
            <li>
                <a class="controls-view-date-contents-link" title="H&#x1EC7; s&#x1ED1; s&#x1EED; d&#x1EE5;ng &#x111;&#x1EA5;t l&#xE0; g&#xEC;? H&#x1B0;&#x1EDB;ng d&#x1EAB;n chi ti&#x1EBF;t c&#xE1;ch t&#xED;nh n&#x103;m 2020" href="/loi-khuyen-cho-nguoi-mua/he-so-su-dung-dat-la-gi-ar105527">
                    H&#x1EC7; s&#x1ED1; s&#x1EED; d&#x1EE5;ng &#x111;&#x1EA5;t l&#xE0; g&#xEC;? H&#x1B0;&#x1EDB;ng d&#x1EAB;n chi ti&#x1EBF;t c&#xE1;ch t&#xED;nh n&#x103;m 2020
                </a>
            </li>
            <li>
                <a class="controls-view-date-contents-link" title="T&#xF4;i b&#x1ECB; ch&#xF4;n v&#x1ED1;n nhi&#x1EC1;u n&#x103;m v&#xEC; ham mua &#x111;&#x1EA5;t n&#x1EC1;n gi&#xE1; r&#x1EBB;" href="/loi-khuyen-cho-nha-dau-tu/toi-bi-chon-von-nhieu-nam-vi-ham-mua-dat-nen-gia-re-ar105551">
                    T&#xF4;i b&#x1ECB; ch&#xF4;n v&#x1ED1;n nhi&#x1EC1;u n&#x103;m v&#xEC; ham mua &#x111;&#x1EA5;t n&#x1EC1;n gi&#xE1; r&#x1EBB;
                </a>
            </li>
            <li>
                <a class="controls-view-date-contents-link" title="C&#x1EA7;m 10 tri&#x1EC7;u &#x111;i xem nh&#xE0;, t&#xF4;i ch&#x1ED1;t mua trong ph&#xFA;t m&#x1ED1;t" href="/loi-khuyen-cho-nguoi-mua/cam-10-trieu-di-xem-nha-toi-chot-mua-trong-phut-mot-ar105548">
                    C&#x1EA7;m 10 tri&#x1EC7;u &#x111;i xem nh&#xE0;, t&#xF4;i ch&#x1ED1;t mua trong ph&#xFA;t m&#x1ED1;t
                </a>
            </li>
            <li>
                <a class="controls-view-date-contents-link" title="Nh&#xE0; v&#x1B0;&#x1EDD;n l&#xE0; g&#xEC;? &#x1AF;u nh&#x1B0;&#x1EE3;c &#x111;i&#x1EC3;m khi x&#xE2;y? 7 m&#x1EAB;u nh&#xE0; v&#x1B0;&#x1EDD;n &#x111;&#x1EB9;p gi&#xE1; r&#x1EBB;" href="/loi-khuyen-cho-nguoi-mua/nha-vuon-la-gi-7-thiet-ke-nha-vuon-dep-gia-re-ar105523">
                    Nh&#xE0; v&#x1B0;&#x1EDD;n l&#xE0; g&#xEC;? &#x1AF;u nh&#x1B0;&#x1EE3;c &#x111;i&#x1EC3;m khi x&#xE2;y? 7 m&#x1EAB;u nh&#xE0; v&#x1B0;&#x1EDD;n &#x111;&#x1EB9;p gi&#xE1; r&#x1EBB;
                </a>
            </li>
            <li>
                <a class="controls-view-date-contents-link" title="Mua nh&#xE0;, &#x111;&#x1EEB;ng v&#x1ED9;i l&#xE0;m li&#x1EC1;u r&#x1ED3;i ngh&#x129; &quot;thuy&#x1EC1;n &#x111;&#x1EBF;n &#x111;&#x1EA7;u c&#x1EA7;u &#x1EAF;t s&#x1EBD; th&#x1EB3;ng&quot; nh&#x1B0; t&#xF4;i, c&#x1EF1;c l&#x1EAF;m!" href="/loi-khuyen-cho-nguoi-mua/mua-nha-dung-voi-lam-lieu-roi-nghi-thuyen-den-dau-cau-at-se-thang-nhu-toi-ar101515">
                    Mua nh&#xE0;, &#x111;&#x1EEB;ng v&#x1ED9;i l&#xE0;m li&#x1EC1;u r&#x1ED3;i ngh&#x129; &quot;thuy&#x1EC1;n &#x111;&#x1EBF;n &#x111;&#x1EA7;u c&#x1EA7;u &#x1EAF;t s&#x1EBD; th&#x1EB3;ng&quot; nh&#x1B0; t&#xF4;i, c&#x1EF1;c l&#x1EAF;m!
                </a>
            </li>
            <li>
                <a class="controls-view-date-contents-link" title="Tay tr&#x1EAF;ng v&#xE0;o S&#xE0;i G&#xF2;n l&#x1EAD;p nghi&#x1EC7;p, t&#xF4;i mua &#x111;&#x1B0;&#x1EE3;c nh&#xE0; nh&#x1EDD; &#x111;&#x1EA7;u t&#x1B0; &#x111;&#x1EA5;t n&#x1EC1;n" href="/loi-khuyen-cho-nguoi-mua/tay-trang-vao-sai-gon-lap-nghiep-toi-mua-duoc-nha-nho-dau-tu-dat-nen-ar105538">
                    Tay tr&#x1EAF;ng v&#xE0;o S&#xE0;i G&#xF2;n l&#x1EAD;p nghi&#x1EC7;p, t&#xF4;i mua &#x111;&#x1B0;&#x1EE3;c nh&#xE0; nh&#x1EDD; &#x111;&#x1EA7;u t&#x1B0; &#x111;&#x1EA5;t n&#x1EC1;n
                </a>
            </li>
</ul>
            </div>
        </div>
    </div>
    <div style="clear: both; margin-bottom: 10px;"></div>
    <!--news##-->
    <div class="container-default">
        <div></div>

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
        <ul><li><a href="/ban-can-ho-chung-cu-rivera-park-ha-noi">Chung cư Rivera Park Hà Nội</a></li><li><a href="/ban-can-ho-chung-cu-chung-cu-c1-c2-xuan-dinh">Chung cư C1 C2 Xuân Đỉnh</a></li><li><a href="/ban-can-ho-chung-cu-anland-nam-cuong">Chung cư Anland Nam Cường</a></li><li><a href="/ban-can-ho-chung-cu-hanhud-hoang-quoc-viet">Chung cư Hanhud Hoàng Quốc Việt</a></li><li><a href="/ban-can-ho-chung-cu-sunshine-center">Sunshine Center</a></li><li><a href="/ban-nha-biet-thu-lien-ke-khu-do-thi-lakeview-city">Bán biệt thự Lakeview City</a></li><li><a href="/ban-nha-biet-thu-lien-ke-ha-do-756-sai-gon">Bán biệt thự Hà Đô 756 Sài Gòn</a></li><li><a href="/ban-can-ho-chung-cu-park-12-park-hill-times-city">Bán chung cư Park 12 Park Hill Times City</a></li><li><a href="/ban-can-ho-chung-cu-vinpearl-condotel-da-nang">Bán căn hộ Vinpearl Condotel Đà Nẵng</a></li><li><a href="/ban-can-ho-chung-cu-soho-premier">Bán căn hộ Soho Premier</a></li></ul><ul><li><a href="/ban-can-ho-chung-cu-duc-long-golden-land">Bán căn hộ Đức Long Golden Land</a></li><li><a href="/ban-can-ho-chung-cu-hung-phat-golden-star">Bán căn hộ Hưng Phát Golden Star</a></li><li><a href="/ban-can-ho-chung-cu-chung-cu-129d-truong-dinh">Bán chung cư 129D Trương Định</a></li><li><a href="/ban-can-ho-chung-cu-e4-tower">Bán chung cư E4 Tower</a></li><li><a href="/ban-nha-rieng-duong-nguyen-trung-truc-66">Bán nhà Nguyễn Trung Trực Bình Thạnh</a></li><li><a href="/nha-dat-ban-bac-ninh">Nhà đất Bắc Ninh</a></li><li><a href="/ban-can-ho-chung-cu-n03-t3-t4-ngoai-giao-doan">Bán chung cư N03 T3 T4 Ngoại Giao Đoàn</a></li><li><a href="/ban-can-ho-chung-cu-valeo-dam-sen">Bán căn hộ Valeo Đầm Sen</a></li><li><a href="/ban-dat-nen-du-an-khu-do-thi-an-thinh">Bán đất nền Khu đô thị An Thịnh</a></li><li><a href="/ban-can-ho-chung-cu-golden-land">Chung cư Golden Land</a></li></ul><ul><li><a href="/ban-can-ho-chung-cu-happy-star-tower">Bán chung cư Happy Star Tower</a></li><li><a href="/ban-can-ho-chung-cu-sunrise-city">Căn hộ Sunrise City</a></li><li><a href="/nha-dat-ban-thai-nguyen">Nhà đất Thái Nguyên</a></li><li><a href="/khu-thuong-mai-dich-vu-long-bien/vincom-center-long-bien-pj994">Vincom Long Bien</a></li><li><a href="/ban-can-ho-chung-cu-sunview-1-2">Sunview Town</a></li><li><a href="/ban-can-ho-chung-cu-times-city">Chung cư Times City</a></li><li><a href="/ban-can-ho-chung-cu-chung-cu-golden-west-le-van-thiem">Chung cư Golden West</a></li><li><a href="/ban-can-ho-chung-cu-alphanam-luxury-apartment">Bán căn hộ Alphanam Luxury Apartment</a></li><li><a href="/ban-can-ho-chung-cu-ecolife-tay-ho">Bán chung cư Ecolife Tây Hồ</a></li><li><a href="/nha-dat-ban-nam-dinh">Nhà đất Nam Định</a></li></ul><ul><li><a href="/nha-dat-ban-hai-phong">Nhà đất Hải Phòng</a></li><li><a href="/nha-dat-ban-hai-duong">Nhà đất Hải Dương</a></li><li><a href="/nha-dat-ban-can-tho">Nhà đất Cần Thơ</a></li><li><a href="/ban-can-ho-chung-cu-centara-thu-thiem">Căn hộ Centara Thủ Thiêm</a></li><li><a href="/ban-can-ho-chung-cu-athena-complex">Chung cư Athena Complex</a></li><li><a href="/ban-can-ho-chung-cu-tu-hiep-plaza">Chung cư Tứ Hiệp Plaza</a></li><li><a href="/tags/cho-thue/Sang-quan-cafe">Sang quán café</a></li><li><a href="/ban-can-ho-chung-cu-gemek-premium">Chung cư Gemek Premium</a></li><li><a href="/ban-can-ho-chung-cu-vinpearl-condotel-nha-trang">Căn hộ Vinpearl Condotel Nha Trang</a></li></ul>
    </div>



                </div>
            </div>

        <div id="SiteRight" class="banner-right clearfix">
            <div class="container-default">
                <div>
                    <div id="ban_wide_right" class="ban_wide_scroll">
                        <div class="adPosition" positionCode="BANNER_POSITION_WIDE_RIGHT" style="margin-bottom: 0px"></div>
<script type='text/javascript'> var bannerContext={"CateId":null,"PageId":209,"CityCode":null,"DistrictId":null,"CurrentPage":232};</script>
                    </div>

                    <div id="ban_right" class="ban_scroll">
                        <div class="adPosition" positionCode="BANNER_POSITION_RIGHT" style="margin-bottom: 0px"></div>
<script type='text/javascript'> var bannerContext={"CateId":null,"PageId":209,"CityCode":null,"DistrictId":null,"CurrentPage":232};</script>
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

        <div class="adPosition" positionCode="BANNER_POSITION_FLOADING_BOTTOM"></div>
<script type='text/javascript'> var bannerContext={"CateId":null,"PageId":209,"CityCode":null,"DistrictId":null,"CurrentPage":232};</script>

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
    <script type='text/javascript'> var __bannerContext={"PageId":232,"CateId":null,"CityCode":null,"DistrictId":null,"CurrentPage":1};</script>
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
    
    
    
        <script src="https://staticfile.batdongsan.com.vn/js/BDS.Contacts/filestatic.ver202011131001.msvbds.FrontEnd.Broker.FormSearchBroker.min.js"></script>
        <script src="https://staticfile.batdongsan.com.vn/js/BDS.Contacts/filestatic.ver202011131001.msvbds.FrontEnd.BrokerDistrict.min.js"></script>
        <script src="https://staticfile.batdongsan.com.vn/js/BDS.Contacts/filestatic.ver202011131001.msvbds.FrontEnd.Broker.TypicalBroker.min.js"></script>
        <script marking-product-service-params={&quot;unmarkProductUrl&quot;:&quot;/Product/MarkedProducts/UnmarkProduct&quot;,&quot;getMarkedProductsByIdsUrl&quot;:&quot;/Product/ProductDetail/GetMarkedListing&quot;,&quot;markedProductsSyncTime&quot;:24,&quot;listingLimit&quot;:50} src="https://staticfile.batdongsan.com.vn/js/BDS.Contacts/filestatic.ver202011131001.msvbds.FrontEnd.Broker.Detail.BrokerProducts.min.js" asp-append-version="true"></script>
        <script src="https://staticfile.batdongsan.com.vn/js/BDS.Contacts/filestatic.ver202011131001.msvbds.FrontEnd.Broker.SendMail.min.js"></script>
        <script src="https://staticfile.batdongsan.com.vn/js/Product/filestatic.ver202011131001.msvbds.ProductHiddenMobile.min.js"></script>
    
    <script type="text/javascript">
        var brokerDistrict = new brokerDistrict.BrokerDistrict();
        brokerDistrict.Initialize();

        var typicalBroker = new typicalBroker.TypicalBroker();
        typicalBroker.Initialize();

        var paramsSearchBroker = {
            txtKeyword: '#txtKeyword',
            btnSearch: '#btnSearch',
            urlListSubCate: '/Contacts/CommonData/GetListSubCateByCate',
            urlListDistrict: '/Contacts/CommonData/GetListDistrictByCity',
            urlListProject: '/Contacts/CommonData/GetListProjectByDistrict',
        };

        var contactFormSearch = new contactsFormSearch.FormSearchBroker();
        contactFormSearch.Initialize(paramsSearchBroker);

        var brokerProductInfo = new brokerProductInfo.BrokerProducts();
        brokerProductInfo.Initialize();

        var paramsSendMail = {
            lnkSendEmail: '#lnkSendEmail',
            btnSendMail: '#btnSendMail',
            formSubmitSendMail: '#formSubmitSendMail',
            urlSendMail: '/Contacts/SendMail/Send',
        };
        var contactSendMail = new contactSendMail.ContactSendMail();
        contactSendMail.Initialize(paramsSendMail);
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
</html>

@endsection
@endforeach
@endforeach
