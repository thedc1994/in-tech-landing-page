
<!DOCTYPE html>
<html class="no-js" lang="vi">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
{{--    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">--}}
    <title>
        {{$home['title'] ?? "Dino Tech - Trường học Công nghệ Sáng tạo"}}
    </title>
    <link rel="preconnect" href="https://st.ebomb.edu" />
    <link rel="preconnect" href="https://www.googletagmanager.com" />
    <link rel="preconnect" href="https://www.facebook.com" />
    <link rel="dns-prefetch" href="https://st.ebomb.edu" />
    <link rel="dns-prefetch" href="https://www.googletagmanager.com" />
    <link rel="dns-prefetch" href="https://www.facebook.com" />
    <meta property="fb:app_id" content="987055298019777" />
    <meta property="fb:admins" content="1020299739" />
    <meta name="csrf-token" content="mgkXIwlCErvpBsSXoCCswRJqTJGAKksc1twLRs0B" />
    <meta property="keyword" content="DINOTECH, Đào tạo công nghệ, Học lập trình, Trẻ học lập trình" />
    <meta property="description" content="Dino Tech trường học công nghệ cho trẻ 5-18 tuổi hàng đầu Việt Nam; Chuyên đào tạo Lập trình (game/web/app), Robotics, Công nghệ 3D &amp; Thiết kế đồ họa..." />
    <meta property="og:image" content="https://st.ebomb.edu.vn/src/erp-image/2022/06/13/b58f9464-66d7-403d-bfb4-2cffd2fb2ed7.png" />
    <meta property="og:title" content="Dino Tech - Trường học Công nghệ Sáng tạo" />
    <meta property="og:description" content="Dino Tech trường học công nghệ cho trẻ 5-18 tuổi hàng đầu Việt Nam; Chuyên đào tạo Lập trình (game/web/app), Robotics, Công nghệ 3D &amp; Thiết kế đồ họa..." />
    <meta property="og:url" content="http://dinotech.edu.vn" />
    <link rel="shortcut icon" href="{{URL::asset('/images/favicon.ico')}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{URL::asset('/images/apple-touch-icon.png')}}">
    <link rel="stylesheet" href="{{URL::asset('/css/animate.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/css/vendor.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/css/main.css')}}">
    @include('home.css')
    <!-- Google Tag Manager -->
    <script>
        // (function(w, d, s, l, i) {
        //     w[l] = w[l] || [];
        //     w[l].push({
        //         'gtm.start': new Date().getTime(),
        //         event: 'gtm.js'
        //     });
        //     var f = d.getElementsByTagName(s)[0],
        //         j = d.createElement(s),
        //         dl = l != 'dataLayer' ? '&l=' + l : '';
        //     j.async = true;
        //     j.src =
        //         'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        //     f.parentNode.insertBefore(j, f);
        // })(window, document, 'script', 'dataLayer', 'GTM-TJP6NXC');
    </script>
    <!-- End Google Tag Manager -->
    <script type='application/ld+json'>
        {
          "@context": "http://www.schema.org",
          "@type": "LocalBusiness",
          "name": "Dinotech",
          "url": "http://dinotech.edu.vn",
          "logo": "{{URL::asset('/images/logo.svg')}}",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "14 Trần Kim Xuyến, Yên Hòa, Cầu Giấy, Hà Nội",
            "addressLocality": "Hà Nội",
            "postalCode": "100000",
            "addressCountry": "Việt Nam"
          },
          "contactPoint": {
            "@type": "ContactPoint",
            "telephone": ""
          }
        }
    </script>
    <style>
        .post-content img {
            max-width: 100% !important;
        }

        table {
            max-width: 100% !important;
            min-width: auto !important;
        }

        .video-container {
            position: relative;
            padding-bottom: 56.25%;
            /* 16:9 */
            height: 0;
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        iframe {
            max-width: 100%;
            border: 0;
        }
    </style>
    <script defer src="{{URL::asset('js/vendor/jquery-3.6.0.min.js')}}"></script>
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<!-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TJP6NXC" height="0" width="0"
                  style="display:none;visibility:hidden"></iframe></noscript> -->
<!-- End Google Tag Manager (noscript) -->
<div class="page page-home">
    @include('home.menu')
    <!-- banner -->
    <div class="page-main">
        @include('home.section-1-banner')
        @include('home.section-2')
        @include('home.section-3')
        @include('home.section-4')
        <section class="section-5">
            <div class="container">
                <div class="section-nested">
                    <div class="text-center fs-medium" style="padding-bottom: 5px;font-size: 22px; color: #858DA8">Đội
                        ngũ
                    </div>
                    <div class="line-bg-green mt-1 m-auto pad"></div>
                    <h2 class="section-title text-center mb-2">CHUYÊN GIA, GIẢNG VIÊN</h2>
                    <p class="text-center mb-4 teacher-subtitle">DinoTech được cố vấn bởi các chuyên gia hàng đầu trong
                        lĩnh
                        vực CNTT & GDDT, mang đến một lộ trình học tập hoàn thiện nhất cho học viên</p>
                    <div class="swiper swiper-teacher swiper-pagination-outside swiper-buttons-outside">
                        <div class="swiper-container" data-plugin="swiper"
                             data-options='{"spaceBetween":16,"slidesPerView":2,"breakpoints":{"768":{"spaceBetween":24,"slidesPerView":3},"350":{"spaceBetween":24,"slidesPerView":1},"992":{"spaceBetween":24,"slidesPerView":4}}}'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card card-teacher">
                                        <a class="thumbnail thumbnail-hover rounded mb-3" href="https://dinotech.edu.vn/chuyen-gia/chuyen-gia-nguyen-kim-anh_mt1641797155.html">
                                            <img class="thumbnail-img"
                                                 src="{{URL::asset('/images/chuyen-gia-1.png')}}"
                                                 alt="Chị Nguyễn Kim Anh" />
                                        </a>
                                        <div class="card-body p-0">
                                            <h5 class="card-title">
                                                <a href="https://dinotech.edu.vn/chuyen-gia/chuyen-gia-nguyen-kim-anh_mt1641797155.html">Chị Nguyễn Kim Anh</a>
                                            </h5>
                                            <ul class="list list-bullets list-gap-1 text-muted mb-0">
                                                <li class="list-item">Giảng viên khoa CNTT Đại học Hàng hải Việt Nam
                                                </li><li class="list-item">2 năm liên tiếp đạt danh hiệu Giảng viên Tin học xuất sắc do Trung ương trao tặng
                                                </li><li class="list-item">17 năm kinh nghiệm trong việc giảng dạy CNTT
                                                </li><li class="list-item">Dẫn dắt nhiều đội tuyển dự thi tin học, lập trình và đạt giải quốc tế</li>                                                    </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card card-teacher">
                                        <a class="thumbnail thumbnail-hover rounded mb-3" href="https://dinotech.edu.vn/chuyen-gia/chuyen-gia-nguyen-thi-hoa_mt1641797154.html">
                                            <img class="thumbnail-img"
                                                 src="{{URL::asset('/images/chuyen-gia-2.png')}}"
                                                 alt="Chị Nguyễn Thị Hoa" />
                                        </a>
                                        <div class="card-body p-0">
                                            <h5 class="card-title">
                                                <a href="https://dinotech.edu.vn/chuyen-gia/chuyen-gia-nguyen-thi-hoa_mt1641797154.html">Chị Nguyễn Thị Hoa</a>
                                            </h5>
                                            <ul class="list list-bullets list-gap-1 text-muted mb-0">
                                                <li class="list-item">Co-founder, cố vấn kỹ năng giảng dạy Dino Tech
                                                </li><li class="list-item">Chủ tịch HĐQT IMAP Việt Nam
                                                </li><li class="list-item">Nhà sáng lập các thương hiệu đào tạo Anh ngữ: IELTS Fighter, Anh ngữ Ms Hoa
                                                </li><li class="list-item">Chuyên gia ngôn ngữ
                                                </li><li class="list-item">Giáo viên truyền cảm hứng với 10 năm kinh nghiệm giảng dạy và nghiên cứu về các phương pháp học đổi mới</li>                                                    </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card card-teacher">
                                        <a class="thumbnail thumbnail-hover rounded mb-3" href="https://dinotech.edu.vn/chuyen-gia/chuyen-gia-tran-quoc-nam_mt1641797153.html">
                                            <img class="thumbnail-img"
                                                 src="{{URL::asset('/images/chuyen-gia-3.png')}}"
                                                 alt="Anh Trần Quốc Nam" />
                                        </a>
                                        <div class="card-body p-0">
                                            <h5 class="card-title">
                                                <a href="https://dinotech.edu.vn/chuyen-gia/chuyen-gia-tran-quoc-nam_mt1641797153.html">Anh Trần Quốc Nam</a>
                                            </h5>
                                            <ul class="list list-bullets list-gap-1 text-muted mb-0">
                                                <li class="list-item">Co-founder Dino Tech
                                                </li><li class="list-item">Giám đốc công nghệ tại IMAP Tech
                                                </li><li class="list-item">Cựu Phó giám đốc trung tâm thanh toán trực tuyến Foxpay - Công ty cổ phần viễn thông FPT Telecom
                                                </li><li class="list-item">Hơn 10 năm đào tạo công nghệ và kiến tạo các sản phẩm công nghệ cho các tập đoàn trong và ngoài nước</li>                                                    </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card card-teacher">
                                        <a class="thumbnail thumbnail-hover rounded mb-3" href="https://dinotech.edu.vn/chuyen-gia/chuyen-gia-do-minh-hang_mt1641797152.html">
                                            <img class="thumbnail-img"
                                                 src="{{URL::asset('/images/chuyen-gia-4.jpg')}}"
                                                 alt="Chị Đỗ Minh Hằng" />
                                        </a>
                                        <div class="card-body p-0">
                                            <h5 class="card-title">
                                                <a href="https://dinotech.edu.vn/chuyen-gia/chuyen-gia-do-minh-hang_mt1641797152.html">Chị Đỗ Minh Hằng</a>
                                            </h5>
                                            <ul class="list list-bullets list-gap-1 text-muted mb-0">
                                                <li class="list-item">Trưởng phòng đào tạo Dino Tech
                                                </li><li class="list-item">5 năm nghiên cứu về phương pháp giảng dạy và tâm lý học ở trẻ
                                                </li><li class="list-item">Hoàn thành xuất sắc các khóa đào tạo của Harvard X - Harvard University: HarvardX's Computer Science for Web Programming
                                                </li><li class="list-item">Được công nhận: Nhà giáo dục sáng tạo của Microsoft</li>                                                    </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-buttons">
                                <div class="swiper-button-prev btn rounded-circle btn-primary text-white">
                                    <svg class="iconsvg-chevron-right rotate-180">
                                        <use xlink:href="{{URL::asset('/images/sprite.svg#chevron-right')}}"></use>
                                    </svg>
                                </div>
                                <div class="swiper-button-next btn rounded-circle btn-primary text-white">
                                    <svg class="iconsvg-chevron-right">
                                        <use xlink:href="{{URL::asset('/images/sprite.svg#chevron-right')}}"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
                <div class="line-bg-green mt-1 m-auto pad"></div>
                <div class="section-nested">
                    <h2 class="section-title text-center mb-2">100+ giảng viên</h2>
                    <p class="text-muted text-center mb-4">Đến từ các trường đại học hàng đầu Việt Nam. Các giảng viên
                        là
                        những chuyên gia trong lĩnh vực CNTT và giáo dục đào tạo</p>
                    <div class="swiper swiper-teacher swiper-pagination-outside swiper-buttons-outside">
                        <div class="swiper-container" data-plugin="swiper"
                             data-options='{"spaceBetween":16,"slidesPerView":2,"breakpoints":{"768":{"spaceBetween":24,"slidesPerView":3},"350":{"spaceBetween":24,"slidesPerView":1},"992":{"spaceBetween":24,"slidesPerView":4}}}'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card card-teacher">
                                        <a class="thumbnail thumbnail-hover rounded mb-3" href="https://dinotech.edu.vn/tin-tuc/giang-vien-nguyen-truong-son_mt1641797175.html">
                                            <img class="thumbnail-img"
                                                 src="{{URL::asset('/images/giang-vien-1.png')}}"
                                                 alt="Giảng viên Nguyễn Trường Sơn" />
                                        </a>
                                        <div class="card-body p-0">
                                            <h5 class="card-title">
                                                <a href="https://dinotech.edu.vn/tin-tuc/giang-vien-nguyen-truong-son_mt1641797175.html">Giảng viên Nguyễn Trường Sơn</a>
                                            </h5>
                                            <ul class="list list-bullets list-gap-1 text-muted mb-0">
                                                <li class="list-item">Kỹ sư CNTT tốt nghiệp loại xuất sắc Đại học Hàng Hải Việt Nam
                                                </li><li class="list-item">3 năm kinh nghiệm trong việc giảng dạy lập trình, STEM cho trẻ
                                                </li><li class="list-item">Giải nhất cuộc thi lập trình ĐH Hàng Hải Việt Nam 2020</li>                                                    </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card card-teacher">
                                        <a class="thumbnail thumbnail-hover rounded mb-3" href="https://dinotech.edu.vn/tin-tuc/giang-vien-nguyen-van-hoa_mt1641797174.html">
                                            <img class="thumbnail-img"
                                                 src="{{URL::asset('/images/giang-vien-2.png')}}"
                                                 alt="Giảng viên Nguyễn Văn Hòa" />
                                        </a>
                                        <div class="card-body p-0">
                                            <h5 class="card-title">
                                                <a href="https://dinotech.edu.vn/tin-tuc/giang-vien-nguyen-van-hoa_mt1641797174.html">Giảng viên Nguyễn Văn Hòa</a>
                                            </h5>
                                            <ul class="list list-bullets list-gap-1 text-muted mb-0">
                                                <li class="list-item">Kỹ sư CNTT tốt nghiệp tại Đại học Bách khoa HN
                                                </li><li class="list-item">10 năm kinh nghiệm trong lĩnh vực công nghệ, lập trình
                                                </li><li class="list-item">Chuyên gia trong lĩnh vực giảng dạy lập trình, STEAM cho trẻ</li>                                                    </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card card-teacher">
                                        <a class="thumbnail thumbnail-hover rounded mb-3" href="https://dinotech.edu.vn/tin-tuc/giang-vien-chuc-anh-quan_mt1641797173.html">
                                            <img class="thumbnail-img"
                                                 src="{{URL::asset('/images/giang-vien-3.png')}}"
                                                 alt="Giảng viên Chúc Anh Quân" />
                                        </a>
                                        <div class="card-body p-0">
                                            <h5 class="card-title">
                                                <a href="https://dinotech.edu.vn/tin-tuc/giang-vien-chuc-anh-quan_mt1641797173.html">Giảng viên Chúc Anh Quân</a>
                                            </h5>
                                            <ul class="list list-bullets list-gap-1 text-muted mb-0">
                                                <li class="list-item">Tốt nghiệp cử nhân loại giỏi Đại học FPT
                                                </li><li class="list-item">3 năm kinh nghiệm trong lĩnh vực công nghệ, lập trình
                                                </li><li class="list-item">3 năm kinh nghiệm trong việc giảng dạy lập trình, STEM cho trẻ</li>                                                    </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card card-teacher">
                                        <a class="thumbnail thumbnail-hover rounded mb-3" href="https://dinotech.edu.vn/tin-tuc/giang-vien-nguyen-duy-anh_mt1641797172.html">
                                            <img class="thumbnail-img"
                                                 src="{{URL::asset('/images/giang-vien-4.png')}}"
                                                 alt="Giảng viên Nguyễn Duy Anh" />
                                        </a>
                                        <div class="card-body p-0">
                                            <h5 class="card-title">
                                                <a href="https://dinotech.edu.vn/tin-tuc/giang-vien-nguyen-duy-anh_mt1641797172.html">Giảng viên Nguyễn Duy Anh</a>
                                            </h5>
                                            <ul class="list list-bullets list-gap-1 text-muted mb-0">
                                                <li class="list-item">Cử nhân khoa Vật Lý - ĐH Quốc Gia Hà Nội
                                                </li><li class="list-item">3 năm kinh nghiệm trong giảng dạy lập trình, STEAM cho trẻ
                                                </li><li class="list-item">Giải nhất cuộc thi: Minecraft Hackathon 2020 - 2021 do Trung ương đoàn TNCS tổ chức</li>                                                    </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card card-teacher">
                                        <a class="thumbnail thumbnail-hover rounded mb-3" href="https://dinotech.edu.vn/tin-tuc/giang-vien-dang-ngoc-linh_mt1641797171.html">
                                            <img class="thumbnail-img"
                                                 src="{{URL::asset('/images/giang-vien-5.png')}}"
                                                 alt="Giảng viên Đặng Ngọc Linh" />
                                        </a>
                                        <div class="card-body p-0">
                                            <h5 class="card-title">
                                                <a href="https://dinotech.edu.vn/tin-tuc/giang-vien-dang-ngoc-linh_mt1641797171.html">Giảng viên Đặng Ngọc Linh</a>
                                            </h5>
                                            <ul class="list list-bullets list-gap-1 text-muted mb-0">
                                                <li class="list-item">Cử nhân loại giỏi khoa CNTT Đại học Sư phạm Hà Nội
                                                </li><li class="list-item">3+ năm kinh nghiệm trong việc giảng dạy lập trình, STEM
                                                </li><li class="list-item">Giảng viên giảng dạy CNTT bằng Tiếng Anh</li>                                                    </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card card-teacher">
                                        <a class="thumbnail thumbnail-hover rounded mb-3" href="https://dinotech.edu.vn/chuyen-gia/giang-vien-nguyen-thi-yen_mt1641797146.html">
                                            <img class="thumbnail-img"
                                                 src="{{URL::asset('/images/giang-vien-6.png')}}"
                                                 alt="Giảng viên Nguyễn Thị Yến" />
                                        </a>
                                        <div class="card-body p-0">
                                            <h5 class="card-title">
                                                <a href="https://dinotech.edu.vn/chuyen-gia/giang-vien-nguyen-thi-yen_mt1641797146.html">Giảng viên Nguyễn Thị Yến</a>
                                            </h5>
                                            <ul class="list list-bullets list-gap-1 text-muted mb-0">
                                                <li class="list-item">Cử nhân loại giỏi Đại học Sư phạm Hà Nội
                                                </li><li class="list-item">3+ năm kinh nghiệm trong việc giảng dạy lập trình, STEM
                                                </li><li class="list-item">Được bình chọn là giảng viên tận tâm nhất trong việc giảng dạy lập trình</li>                                                    </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-buttons">
                                <div class="swiper-button-prev btn rounded-circle btn-primary text-white">
                                    <svg class="iconsvg-chevron-right rotate-180">
                                        <use xlink:href="{{URL::asset('/images/sprite.svg#chevron-right')}}"></use>
                                    </svg>
                                </div>
                                <div class="swiper-button-next btn rounded-circle btn-primary text-white">
                                    <svg class="iconsvg-chevron-right">
                                        <use xlink:href="{{URL::asset('/images/sprite.svg#chevron-right')}}"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-6">
            <div class="d-flex flex-column align-items-center pt-5 pb-5 student-product">
                <div class="text-center fs-medium c-white">Sản phẩm</div>
                <div class="line-bg-green mt-1"></div>
                <div class="title text-center fs-large fw-700 c-white mt-4">CỦA HỌC VIÊN</div>
                <div class="container">
                    <div class="row align-items-center mt-5">
                        <div class="col-12 col-md-6">
                            <a href="https://dinotech.edu.vn/tin-tuc/cuoc-thi-lap-trinh-li-xi-tet---giai-ba---thi-sinh-minh-vuong_mt1641797219.html">
                                <img class="w-100"
                                     src="{{URL::asset('/images/b8422fb3-8399-47da-ae99-0d9ab97a23b5.jpg')}}"
                                     alt="">
                            </a>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="fs-small-2 fw-700 c-white">[Cuộc thi Lập trình Lì xì Tết] - Giải Ba - Thí sinh Minh Vương</div>
                            <div class="fs-small-2 fw-400 c-white mt-4">Minh Vương xuất sắc đạt giải ba trong cuộc thi Lập trình Lì Xì Tết với Dino Tech. Cả nhà hãy cùng xem phần thuyết trình về sản phẩm của Minh Vương dưới đây nhé!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-7" style="margin-top: 0px">
            <div class="swiper swiper-teacher swiper-pagination-outside swiper-buttons-outside">
                <div class="swiper-container" data-plugin="swiper"
                     data-options='{"spaceBetween":16,"slidesPerView":2,"breakpoints":{"768":{"spaceBetween":24,"slidesPerView":3},"350":{"spaceBetween":24,"slidesPerView":1},"992":{"spaceBetween":24,"slidesPerView":4}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide no-mr">
                            <div class="card card-teacher">
                                <a class="thumbnail thumbnail-hover rounded mb-3" href="https://dinotech.edu.vn/tin-tuc/cuoc-thi-lap-trinh-li-xi-tet---giai-ba---thi-sinh-minh-vuong_mt1641797219.html">
                                    <img class="thumbnail-img" style="border-radius: 0px"
                                         src="{{URL::asset('/images/b8422fb3-8399-47da-ae99-0d9ab97a23b5.jpg')}}"
                                         alt="[Cuộc thi Lập trình Lì xì Tết] - Giải Ba - Thí sinh Minh Vương" />
                                </a>
                                <div class="card-body p-0">
                                    <h5 class="card-title text-center">
                                        <a href="https://dinotech.edu.vn/tin-tuc/cuoc-thi-lap-trinh-li-xi-tet---giai-ba---thi-sinh-minh-vuong_mt1641797219.html">[Cuộc thi Lập trình Lì xì Tết] - Giải Ba - Thí sinh Minh Vương</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide no-mr">
                            <div class="card card-teacher">
                                <a class="thumbnail thumbnail-hover rounded mb-3" href="https://dinotech.edu.vn/tin-tuc/cuoc-thi-lap-trinh-li-xi-tet---giai-nhi---thi-sinh-duc-linh_mt1641797218.html">
                                    <img class="thumbnail-img" style="border-radius: 0px"
                                         src="{{URL::asset('/images/28104425-a112-4322-b329-88f0f9808131.jpg')}}"
                                         alt="[Cuộc thi Lập trình Lì xì Tết] - Giải Nhì - Thí sinh Đức Linh" />
                                </a>
                                <div class="card-body p-0">
                                    <h5 class="card-title text-center">
                                        <a href="https://dinotech.edu.vn/tin-tuc/cuoc-thi-lap-trinh-li-xi-tet---giai-nhi---thi-sinh-duc-linh_mt1641797218.html">[Cuộc thi Lập trình Lì xì Tết] - Giải Nhì - Thí sinh Đức Linh</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide no-mr">
                            <div class="card card-teacher">
                                <a class="thumbnail thumbnail-hover rounded mb-3" href="https://dinotech.edu.vn/tin-tuc/cuoc-thi-lap-trinh-li-xi-tet---giai-nhat---thi-sinh-nhu-an_mt1641797217.html">
                                    <img class="thumbnail-img" style="border-radius: 0px"
                                         src="{{URL::asset('/images/d6b72b70-bb43-4c0f-b170-f1995f175459.jpg')}}"
                                         alt="[Cuộc thi Lập trình Lì xì Tết] - Giải Nhất - Thí sinh Như An" />
                                </a>
                                <div class="card-body p-0">
                                    <h5 class="card-title text-center">
                                        <a href="https://dinotech.edu.vn/tin-tuc/cuoc-thi-lap-trinh-li-xi-tet---giai-nhat---thi-sinh-nhu-an_mt1641797217.html">[Cuộc thi Lập trình Lì xì Tết] - Giải Nhất - Thí sinh Như An</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide no-mr">
                            <div class="card card-teacher">
                                <a class="thumbnail thumbnail-hover rounded mb-3" href="https://dinotech.edu.vn/tin-tuc/du-an-cuoi-khoa---viet-phuong-le-uyen---hoc-vien-lop-python-hp-1_mt1641797191.html">
                                    <img class="thumbnail-img" style="border-radius: 0px"
                                         src="{{URL::asset('/images/81219cbb-67cd-4795-876b-f8efe9c840a3.jpg')}}"
                                         alt="[DỰ ÁN CUỐI KHÓA] - VIỆT PHƯƠNG, LÊ UYÊN - HỌC VIÊN LỚP PYTHON HP 1" />
                                </a>
                                <div class="card-body p-0">
                                    <h5 class="card-title text-center">
                                        <a href="https://dinotech.edu.vn/tin-tuc/du-an-cuoi-khoa---viet-phuong-le-uyen---hoc-vien-lop-python-hp-1_mt1641797191.html">[DỰ ÁN CUỐI KHÓA] - VIỆT PHƯƠNG, LÊ UYÊN - HỌC VIÊN LỚP PYTHON HP 1</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide no-mr">
                            <div class="card card-teacher">
                                <a class="thumbnail thumbnail-hover rounded mb-3" href="https://dinotech.edu.vn/tin-tuc/du-an-cuoi-khoa---trong-khoi---hoc-vien-lop-minecraft-level-1_mt1641797187.html">
                                    <img class="thumbnail-img" style="border-radius: 0px"
                                         src="{{URL::asset('/images/72e75a9a-703e-4a57-9f84-b4f5ae2352cf.jpg')}}"
                                         alt="[DỰ ÁN CUỐI KHÓA] - TRỌNG KHÔI - HỌC VIÊN LỚP MINECRAFT LEVEL 1" />
                                </a>
                                <div class="card-body p-0">
                                    <h5 class="card-title text-center">
                                        <a href="https://dinotech.edu.vn/tin-tuc/du-an-cuoi-khoa---trong-khoi---hoc-vien-lop-minecraft-level-1_mt1641797187.html">[DỰ ÁN CUỐI KHÓA] - TRỌNG KHÔI - HỌC VIÊN LỚP MINECRAFT LEVEL 1</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide no-mr">
                            <div class="card card-teacher">
                                <a class="thumbnail thumbnail-hover rounded mb-3" href="https://dinotech.edu.vn/tin-tuc/du-an-cuoi-khoa---nguyen-gia-bao---hoc-vien-lop-minecraft-level-1_mt1641797186.html">
                                    <img class="thumbnail-img" style="border-radius: 0px"
                                         src="{{URL::asset('/images/0b57a9d8-9925-4b0c-be43-0368c98c3b86.jpg')}}"
                                         alt="[DỰ ÁN CUỐI KHÓA] - NGUYỄN GIA BẢO - HỌC VIÊN LỚP MINECRAFT LEVEL 1" />
                                </a>
                                <div class="card-body p-0">
                                    <h5 class="card-title text-center">
                                        <a href="https://dinotech.edu.vn/tin-tuc/du-an-cuoi-khoa---nguyen-gia-bao---hoc-vien-lop-minecraft-level-1_mt1641797186.html">[DỰ ÁN CUỐI KHÓA] - NGUYỄN GIA BẢO - HỌC VIÊN LỚP MINECRAFT LEVEL 1</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide no-mr">
                            <div class="card card-teacher">
                                <a class="thumbnail thumbnail-hover rounded mb-3" href="https://dinotech.edu.vn/san-pham-hoc-vien/san%20pham%20lop%20hoc%20Scratch%20Hoang%20Duy_mt1641797156.html">
                                    <img class="thumbnail-img" style="border-radius: 0px"
                                         src="{{URL::asset('/images/fad44fa5-14d9-408e-afee-8e4382c9d027.png')}}"
                                         alt="Xây dựng Hệ Mặt Trời bằng ngôn ngữ lập trình Scratch" />
                                </a>
                                <div class="card-body p-0">
                                    <h5 class="card-title text-center">
                                        <a href="https://dinotech.edu.vn/san-pham-hoc-vien/san%20pham%20lop%20hoc%20Scratch%20Hoang%20Duy_mt1641797156.html">Xây dựng Hệ Mặt Trời bằng ngôn ngữ lập trình Scratch</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide no-mr">
                            <div class="card card-teacher">
                                <a class="thumbnail thumbnail-hover rounded mb-3" href="https://dinotech.edu.vn/san-pham-hoc-vien/san-pham-cua-tung-khoi_mt1455531156.html">
                                    <img class="thumbnail-img" style="border-radius: 0px"
                                         src="{{URL::asset('/images/175a3cb5-d147-4004-9974-a9aee80e0a02.png')}}"
                                         alt="Sản phẩm của Tùng Khôi bằng phần mềm lập trình Scratch" />
                                </a>
                                <div class="card-body p-0">
                                    <h5 class="card-title text-center">
                                        <a href="https://dinotech.edu.vn/san-pham-hoc-vien/san-pham-cua-tung-khoi_mt1455531156.html">Sản phẩm của Tùng Khôi bằng phần mềm lập trình Scratch</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide no-mr">
                            <div class="card card-teacher">
                                <a class="thumbnail thumbnail-hover rounded mb-3" href="https://dinotech.edu.vn/writing/Unit-14-Writing-task-2-Cach-mieu-ta-chu-de-cho-phep-va-co-the_mt1455529485.html">
                                    <img class="thumbnail-img" style="border-radius: 0px"
                                         src="{{URL::asset('/images/80e53f48-1d51-45eb-ab8a-babadc38ef73.png')}}"
                                         alt="Sử dụng ngôn ngữ lập trình Scratch để xây dựng Hệ Mặt Trời" />
                                </a>
                                <div class="card-body p-0">
                                    <h5 class="card-title text-center">
                                        <a href="https://dinotech.edu.vn/writing/Unit-14-Writing-task-2-Cach-mieu-ta-chu-de-cho-phep-va-co-the_mt1455529485.html">Sử dụng ngôn ngữ lập trình Scratch để xây dựng Hệ Mặt Trời</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide no-mr">
                            <div class="card card-teacher">
                                <a class="thumbnail thumbnail-hover rounded mb-3" href="https://dinotech.edu.vn/writing/Unit-13-Writing-task-2-Cach-mieu-ta-chu-de-nhieu-va-it_mt1455529311.html">
                                    <img class="thumbnail-img" style="border-radius: 0px"
                                         src="{{URL::asset('/images/560746d0-82f2-45b7-9f8f-5ab17f83956c.png')}}"
                                         alt="Sản phẩm của Gia Phong sau lớp học xây nền Scratch" />
                                </a>
                                <div class="card-body p-0">
                                    <h5 class="card-title text-center">
                                        <a href="https://dinotech.edu.vn/writing/Unit-13-Writing-task-2-Cach-mieu-ta-chu-de-nhieu-va-it_mt1455529311.html">Sản phẩm của Gia Phong sau lớp học xây nền Scratch</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <section class="section section-8 mt-5" style="background-color: #F9F9F9">
            <div class="container">
                <h2 class="section-title flex-center-y justify-content-between">TIN TỨC, SỰ KIỆN<a class="btn btn-primary-dark flex-shrink-0 px-4 ms-3 d-none d-md-flex" href="https://dinotech.edu.vn/tin-tuc.html" role="button">Xem toàn bộ</a>
                </h2>
                <div class="swiper swiper-post">
                    <div class="swiper-container" data-plugin="swiper"
                         data-options='{"slidesPerView":"auto","spaceBetween":16,"breakpoints":{"768":{"allowTouchMove":false,"slidesPerView":3,"spaceBetween":24},"350":{"allowTouchMove":false,"slidesPerView":1,"spaceBetween":24},"992":{"allowTouchMove":false,"slidesPerView":3,"spaceBetween":24}}}'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide h-auto d-flex">
                                <article class="card card-post">
                                    <a class="thumbnail thumbnail-hover rounded-top" href="https://dinotech.edu.vn/tin-tuc/cau-lenh-trang-phuc-trong-scratch_mt1641797216.html">
                                        <img class="thumbnail-img"
                                             src="{{URL::asset('/images/8a44fa0f-ebdf-4cbc-815a-231de2fc0393.png')}}"
                                             alt="CÂU LỆNH TRANG PHỤC TRONG SCRATCH" />
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title text-uppercase fs-18px lh-base mb-3">
                                            <a href="https://dinotech.edu.vn/tin-tuc/cau-lenh-trang-phuc-trong-scratch_mt1641797216.html">CÂU LỆNH TRANG PHỤC TRONG SCRATCH</a>
                                        </h5>
                                        <p class="card-text text-muted fs-sm">Tiếp tục với series “Tìm hiểu về Scratch”, hãy cùng tìm hiểu về câu lệnh trang phục trong Scratch cùng Dino Tech qua bài viết dưới đây.</p>
                                        <a class="card-read-more link-primary mt-auto" href="https://dinotech.edu.vn/tin-tuc/cau-lenh-trang-phuc-trong-scratch_mt1641797216.html">Xem
                                            chi tiết<svg class="iconsvg-long-arrow-right ms-2">
                                                <use
                                                        xlink:href="{{URL::asset('/images/sprite.svg#long-arrow-right')}}">
                                                </use>
                                            </svg>
                                        </a>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide h-auto d-flex">
                                <article class="card card-post">
                                    <a class="thumbnail thumbnail-hover rounded-top" href="https://dinotech.edu.vn/tin-tuc/cung-cac-ban-hoc-sinh-truong-nguyen-binh-khiem-kham-pha-robotics-cung-dino-tech_mt1641797214.html">
                                        <img class="thumbnail-img"
                                             src="{{URL::asset('/images/bcc37e1e-99f2-4798-93f0-15891aeecfb5.png')}}"
                                             alt="CÙNG CÁC BẠN HỌC SINH TRƯỜNG NGUYỄN BỈNH KHIÊM KHÁM PHÁ ROBOTICS CÙNG DINO TECH" />
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title text-uppercase fs-18px lh-base mb-3">
                                            <a href="https://dinotech.edu.vn/tin-tuc/cung-cac-ban-hoc-sinh-truong-nguyen-binh-khiem-kham-pha-robotics-cung-dino-tech_mt1641797214.html">CÙNG CÁC BẠN HỌC SINH TRƯỜNG NGUYỄN BỈNH KHIÊM KHÁM PHÁ ROBOTICS CÙNG DINO TECH</a>
                                        </h5>
                                        <p class="card-text text-muted fs-sm">Dino Tech đã có thời gian đồng hành cùng các bạn học sinh trường Nguyễn Bỉnh Khiêm trong hoạt động ngoại khóa của trường tại Vĩnh Phúc. Tại đây, các bạn nhỏ đã cùng nhau khám phá Robotics.</p>
                                        <a class="card-read-more link-primary mt-auto" href="https://dinotech.edu.vn/tin-tuc/cung-cac-ban-hoc-sinh-truong-nguyen-binh-khiem-kham-pha-robotics-cung-dino-tech_mt1641797214.html">Xem
                                            chi tiết<svg class="iconsvg-long-arrow-right ms-2">
                                                <use
                                                        xlink:href="{{URL::asset('/images/sprite.svg#long-arrow-right')}}">
                                                </use>
                                            </svg>
                                        </a>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide h-auto d-flex">
                                <article class="card card-post">
                                    <a class="thumbnail thumbnail-hover rounded-top" href="https://dinotech.edu.vn/tin-tuc/nhom-lenh-pen-trong-scratch_mt1641797213.html">
                                        <img class="thumbnail-img"
                                             src="{{URL::asset('/images/da032e09-794a-4523-bb41-0ed539324329.png')}}"
                                             alt="NHÓM LỆNH PEN TRONG SCRATCH" />
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title text-uppercase fs-18px lh-base mb-3">
                                            <a href="https://dinotech.edu.vn/tin-tuc/nhom-lenh-pen-trong-scratch_mt1641797213.html">NHÓM LỆNH PEN TRONG SCRATCH</a>
                                        </h5>
                                        <p class="card-text text-muted fs-sm">Ở các bài viết trong series “Lập trình với Scratch” trước đó, Dino Tech đã cùng các bạn tìm hiểu về các câu lệnh âm thanh, và các nhóm lệnh khác nhau... Trong bài viết hôm nay, hãy tiếp tục tìm hiểu về nhóm lệnh Pen trong Scratch cùng Dino Tech nhé!</p>
                                        <a class="card-read-more link-primary mt-auto" href="https://dinotech.edu.vn/tin-tuc/nhom-lenh-pen-trong-scratch_mt1641797213.html">Xem
                                            chi tiết<svg class="iconsvg-long-arrow-right ms-2">
                                                <use
                                                        xlink:href="{{URL::asset('/images/sprite.svg#long-arrow-right')}}">
                                                </use>
                                            </svg>
                                        </a>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-4 d-md-none">
                    <a class="btn btn-primary-dark flex-shrink-0 px-4 ms-3" href="https://dinotech.edu.vn/tin-tuc.html" role="button">Xem toàn bộ</a>
                </div>
            </div>
        </section>
        <section class="section section-9 py-0 section-mb">
            <div class="container">
                <h2 class="section-title text-center mb-5 mt-5">ĐỐI TÁC</h2>
                <div class="swiper swiper-brands swiper-pagination-outside">
                    <div class="swiper-container" data-plugin="swiper"
                         data-options='{"slidesPerView":3,"spaceBetween":32,"loop":true,"autoplay":{"delay":5000},"breakpoints":{"576":{"slidesPerView":4},"768":{"slidesPerView":5}}}'>
                        <div class="swiper-wrapper">
                            <a class="swiper-slide text-center"
                               href="https://dinotech.ebomb.edu.vn/">
                                <img class="img-fluid"
                                     src="{{URL::asset('/images/vn-express.png')}}"
                                     alt="VnExpress" />
                            </a>
                            <a class="swiper-slide text-center"
                               href="https://dinotech.ebomb.edu.vn/">
                                <img class="img-fluid"
                                     src="{{URL::asset('/images/ielts.png')}}"
                                     alt="IELTS Fighter" />
                            </a>
                            <a class="swiper-slide text-center"
                               href="https://dinotech.ebomb.edu.vn/">
                                <img class="img-fluid"
                                     src="{{URL::asset('/images/mshoa.png')}}"
                                     alt="Ms Hoa Junior" />
                            </a>
                            <a class="swiper-slide text-center"
                               href="https://dinotech.ebomb.edu.vn/">
                                <img class="img-fluid"
                                     src="{{URL::asset('/images/Roborobo.jpeg')}}"
                                     alt="Roborobo" />
                            </a>
                            <a class="swiper-slide text-center"
                               href="https://dinotech.ebomb.edu.vn/">
                                <img class="img-fluid"
                                     src="{{URL::asset('/images/Classin.png')}}"
                                     alt="Classin" />
                            </a>
                            <a class="swiper-slide text-center"
                               href="vnexpress.net">
                                <img class="img-fluid"
                                     src="{{URL::asset('/images/Viettel.png')}}"
                                     alt="Viettel" />
                            </a>
                            <a class="swiper-slide text-center"
                               href="vtv.vn">
                                <img class="img-fluid"
                                     src="{{URL::asset('/images/IMAP.png')}}"
                                     alt="IMAP" />
                            </a>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </section>
        <div class="advise d-flex pt-5 pb-5 w-100">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 d-flex flex-column align-items-center">
                        <div class="fs-large fw-800 c-white">TẶNG VOUCHER</div>
                        <div class="fs-large fw-800 c-white pr-12 pl-12 course-voucher">KHÓA HỌC</div>
                        <div class="fs-large-2 fw-800 lh-8 c-yellow mt-5 fz-94 animated pulse infinite course-voucher-money">2.000.000</div>
                        <div class="fs-large fw-800 c-yellow mt-4">vnđ</div>
                        <div class="text-center fs-small-2 fw-400 c-white mb-5 register-note">KHI ĐĂNG KÝ CÁC KHÓA HỌC TRONG
                            THÁNG
                            6/2022</div>
                        <div class="voucher-image">
                            <img src="{{URL::asset('/images/anh-quâtng.png')}}" class="w-100" alt="">
                        </div>
                    </div>
                    <div class="row col-12 col-md-6 p-3 bg-gray-2 register-form">
                        <form class="form-1 mb-3 form-contact" action="https://dinotech.edu.vn/contact" method="post">
                            <div class="col-12 fs-large-1 fw-700">Nhận tư vấn lộ trình học và ưu đãi</div>
                            <div class="col-12 fs-small fw-700 mt-2">Bạn vui lòng điền SĐT để nhận tư vấn về chương trình này
                            </div>
                            <div class="row g-3 mt-2">
                                <div class="col-12">
                                    <label class="form-label visually-hidden" for="form-name">Họ và tên phụ huynh</label>
                                    <input class="form-control" id="form-name" name="full_name_parents" type="text"
                                           placeholder="Họ và tên phụ huynh">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label visually-hidden" for="form-phonenumber">Số điện thoại</label>
                                    <input class="form-control" id="form-phonenumber" name="phone" type="text"
                                           placeholder="Số điện thoại">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label visually-hidden" for="form-email">Email</label>
                                    <input class="form-control" id="form-email" type="email" placeholder="Email" name="email"
                                           required="">
                                </div>
                                <div class="col-12">
                                    <label class="form-label visually-hidden" for="form-name">Họ và tên con</label>
                                    <input class="form-control" id="form-name" name="full_name_student" type="text"
                                           placeholder="Họ và tên con">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label visually-hidden" for="form-phonenumber">Con học lớp</label>
                                    <input class="form-control" id="form-phonenumber" name="class" type="text"
                                           placeholder="Con học lớp">
                                </div>
                                <div class="col-6">
                                    <label class="form-label visually-hidden" for="form-work">Chọn khóa học</label>
                                    <select class="form-select form-select-default" id="form-work" name="course_id">
                                        <option selected="selected">Chọn khóa học</option>
                                        <option value="128">Dino Game Scratch basic</option>
                                        <option value="129">Lắp ráp Robot với UARO Basic</option>
                                        <option value="132">Dino Game Scratch Advance</option>
                                        <option value="133">Dino Game Minecraft Basic</option>
                                        <option value="134">Dino Game Minecraft Advance</option>
                                        <option value="135">Lắp ráp Robot với UARO Advance</option>
                                        <option value="137">Dino Design Tinkercad Basic</option>
                                        <option value="138">Dino Design Tinkercad Advance</option>
                                        <option value="139">Thiết kế 3D trong không gian thực tế ảo - Basic</option>
                                        <option value="140">Thiết kế 3D trong không gian thực tế ảo - Advance</option>
                                        <option value="141">Dino Game Makecode Basic</option>
                                        <option value="142">Dino Game Makecode Advance</option>
                                        <option value="143">Dino Python Basic</option>
                                        <option value="144">Dino Python Advanced</option>
                                        <option value="145">DINO WEB HTML/CSS</option>
                                        <option value="146">DINO WEB Boostrap</option>
                                        <option value="147">DINO WEB Javascript</option>
                                        <option value="148">DINO WEB Framework</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label visually-hidden" for="form-address">Cơ sở gần bạn nhất</label>
                                    <select class="form-select form-select-default" id="form-address" name="branch_id">
                                        <option selected="selected" value="0">Cơ sở gần bạn nhất</option>
                                        <option value="162">26 Nguyễn Thị Định, Trung Hòa, Cầu Giấy, Hà Nội</option>
                                        <option value="15">Văn phòng Hà Nội</option>
                                    </select>
                                </div>
                                <div class="col-12 d-grid">
                                    <button class="btn btn-lg btn-primary text-uppercase fw-bold fs-lg animated pulse infinite"
                                            type="submit">Giữ chỗ ngay</button>
                                </div>
                                <div class="col-12">
                                    <p class="fs-xs text-muted text-center fst-italic mb-0">* Vui lòng để ý điện thoại, chúng
                                        tôi sẽ
                                        liên hệ bạn sớm (trong vòng 24h)</p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script>
        function hoverItem(e) {
            var id = $(e).attr('id');
            if (id === 'trainning-item-i') {
                $('#tc-logic, #tc-practice').addClass('importantNone');
                $('.arrow-logic, .arrow-practice').css('visibility', 'hidden');
                $('#tc-inspiration').removeClass('importantNone');
                $('.arrow-inspiration').css('visibility', 'visible');
            } else if (id === 'trainning-item-l') {
                $('#tc-practice, #tc-inspiration').addClass('importantNone');
                $('.arrow-inspiration, .arrow-practice').css('visibility', 'hidden');
                $('#tc-logic').removeClass('importantNone');
                $('.arrow-logic').css('visibility', 'visible');
            } else if (id === 'trainning-item-p') {
                $('#tc-inspiration, #tc-logic').addClass('importantNone');
                $('.arrow-inspiration, .arrow-logic').css('visibility', 'hidden');
                $('#tc-practice').removeClass('importantNone');
                $('.arrow-practice').css('visibility', 'visible');
            }
        }
    </script>

    <footer class="footer" id="footer">
        <div class="footer-main py-5">
            <div class="container">
                <div class="row gy-5 g-md-4 align-items-start lh-lg mb-5">
                    <div class="col-md-3">
                        <a class="footer-logo" href="https://dinotech.edu.vn">
                            <img class="img-fluid" src="{{URL::asset('/images/logo-white.png')}}" alt="">
                        </a>
                        <div class="card-body p-4">
                            <h6 class="card-title">VĂN PHÒNG HÀ NỘI</h6>
                            <ul class="list list-icons list-gap-2 mb-2 pb-1">
                                <li class="list-item">
                                    <svg class="iconsvg-map-pin list-icon" style="margin-top: 2px">
                                        <use xlink:href="{{URL::asset('/images/sprite.svg#map-pin')}}"></use>
                                    </svg>26 Nguyễn Thị Định, Trung Hòa, Cầu Giấy, Hà Nội
                                </li>
                                <li class="list-item">
                                    <svg class="iconsvg-phone list-icon" style="margin-top: 2px">
                                        <use xlink:href="{{URL::asset('/images/sprite.svg#phone')}}"></use>
                                    </svg>
                                    <a href='tel:02462947586'>02462947586</a>
                                </li>
                                <li class="list-item">
                                    <svg class="iconsvg-mail list-icon" style="margin-top: 3px">
                                        <use xlink:href="{{URL::asset('/images/sprite.svg#mail')}}"></use>
                                    </svg>
                                    <a href='tel:0867196779'><span class="__cf_email__" data-cfemail="98fcf1f6f7ecfdfbf0ebfbf0f7f7f4d8f1f5f9e8b6fdfcedb6eef6">[email&#160;protected]</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="social" style="margin-left: 20px">
                            <a class="social-item" href="">
                                <img class="img-fluid social-icon" src="{{URL::asset('/images/facebook-circle.svg')}}" alt="" />
                            </a>
                            <a class="social-item" href="https://www.youtube.com/channel/UCE-WfKHFlC3-fKJvl0dLSVQ">
                                <img class="img-fluid social-icon" src="{{URL::asset('/images/youtube-circle.svg')}}" alt="" />
                            </a>
                            <a class="social-item" href="https://www.tiktok.com/@laptrinhnhi.dinotech">
                                <img class="img-fluid social-icon" src="{{URL::asset('/images/tiktok-circle.svg')}}" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 d-grid gap-5 gap-md-3">
                        <div class="card-body p-4">
                            <h6 class="card-title">VỀ DINOTECH</h6>
                            <ul class="list list-icons list-gap-2 mb-2 pb-1">
                                <li class="mb-2">
                                    <a href="https://dinotech.edu.vn/gioi-thieu.html">Về Dinotech</a>
                                </li>
                                <li class="mb-2">
                                    <a href="https://dinotech.edu.vn/chuyen-gia.html">Đội ngũ chuyên gia</a>
                                </li>
                                <li class="mb-2">
                                    <a href="https://dinotech.edu.vn/mo-hinh-dao-tao.html">Mô hình đào tạo</a>
                                </li>
                                <li class="mb-2">
                                    <a href="https://dinotech.edu.vn/triet-ly-dao-tao.html">Triết lý đào tạo</a>
                                </li>
                                <li class="mb-2">
                                    <a href="https://dinotech.edu.vn/phuong-phap-dao-tao.html">Phương pháp đào đạo</a>
                                </li>
                                <li class="mb-2">
                                    <a href="#">Báo chí</a>
                                </li>
                                <li class="mb-2">
                                    <a href="https://dinotech.edu.vn/lich-khai-giang.html">Hệ thống cơ sở</a>
                                </li>
                                <li class="mb-2">
                                    <a href="#">Đối tác</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card-body p-4">
                            <h6 class="card-title">CHƯƠNG TRÌNH HỌC</h6>
                            <ul class="list list-icons list-gap-2 mb-2 pb-1">
                                <li class="mb-2">
                                    <a href="https://dinotech.edu.vn/kindy_cd13.html">Kindy</a>
                                </li>
                                <li class="mb-2">
                                    <a href="https://dinotech.edu.vn/kids_cd7.html">Kids</a>
                                </li>
                                <li class="mb-2">
                                    <a href="https://dinotech.edu.vn/teen_cd8.html">Teen</a>
                                </li>
                                <li class="mb-2">
                                    <a href="https://dinotech.edu.vn/youngs_cd9.html">Youngs</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 d-grid gap-5 gap-md-3">
                        <div class="card-body p-4">
                            <h6 class="card-title">CHÍNH SÁCH, QUY ĐỊNH</h6>
                            <ul class="list list-icons list-gap-2 mb-2 pb-1">
                                <li class="mb-2">
                                    <a href="#">Chính sách, quy định chung</a>
                                </li>
                                <li class="mb-2">
                                    <a href="#">Quy trình cung ứng dịch vụ</a>
                                </li>
                                <li class="mb-2">
                                    <a href="#">Phương thức thanh toán</a>
                                </li>
                                <li class="mb-2">
                                    <a href="#">Chính sách bảo vệ thông tin</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr>
                <h5 class="text-center mb-4">HỆ THỐNG CƠ SỞ DINOTECH</h5>
                <div class="accordion accordion-2 accordion-icon-caret mb-4" id="accordion-store">
                    <div class="row g-3 g-lg-4">
                        <div class="col-lg-4 col-sm-6 d-flex">
                            <div class="card card-store border-0">
                                <div class="card-body p-4">
                                    <h5 class="card-title">26 Nguyễn Thị Định, Trung Hòa, Cầu Giấy, Hà Nội</h5>
                                    <ul class="list list-icons list-gap-2 mb-2 pb-1">
                                        <li class="list-item">
                                            <svg class="iconsvg-map-pin list-icon">
                                                <use xlink:href="{{URL::asset('/images/sprite.svg#map-pin')}}">
                                                </use>
                                            </svg>26 Phố Nguyễn Thị Định, Trung Hoà, Cầu Giấy, Hà Nội, Vietnam
                                        </li>
                                        <li class="list-item">
                                            <svg class="iconsvg-phone list-icon">
                                                <use xlink:href="{{URL::asset('/images/sprite.svg#phone')}}">
                                                </use>
                                            </svg>
                                            <a class='text-muted'
                                               href='tel:02462947586'>02462947586</a>
                                        </li>
                                    </ul>
                                    <a class="btn btn-primary-light text-primary mt-auto" href="https://maps.google.com/?q=21.012430200000000,105.803552100000000" role="button" target="_blank">Xem bản đồ</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 d-flex">
                            <div class="card card-store border-0">
                                <div class="card-body p-4">
                                    <h5 class="card-title">Văn phòng Hà Nội</h5>
                                    <ul class="list list-icons list-gap-2 mb-2 pb-1">
                                        <li class="list-item">
                                            <svg class="iconsvg-map-pin list-icon">
                                                <use xlink:href="{{URL::asset('/images/sprite.svg#map-pin')}}">
                                                </use>
                                            </svg>14 Phố Trần Kim Xuyến, Yên Hoà, Cầu Giấy, Hanoi, Vietnam
                                        </li>
                                        <li class="list-item">
                                            <svg class="iconsvg-phone list-icon">
                                                <use xlink:href="{{URL::asset('/images/sprite.svg#phone')}}">
                                                </use>
                                            </svg>
                                            <a class='text-muted'
                                               href='tel:0965500306'>0965500306</a>
                                        </li>
                                    </ul>
                                    <a class="btn btn-primary-light text-primary mt-auto" href="https://maps.google.com/?q=21.018245100000000,105.795860700000000" role="button" target="_blank">Xem bản đồ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <p class="text-center mb-0">© 2021. Trực thuộc công ty cổ phần giáo dục và đào tạo IMAP Việt Nam</p>
            </div>
        </div>
    </footer>
</div>
<script data-cfasync="false" src="{{URL::asset('js/email-decode.min.js')}}"></script>
<script src="{{URL::asset('/js/vendors.js')}}"></script>
<script src="{{URL::asset('/js/main.js')}}"></script>
<script defer src="https://www.google.com/recaptcha/api.js?render=6Lc7w5sgAAAAAEsmRH_Ogj62nolfSzOH9Q9IzNir"></script>
<script>
    window.addEventListener("load", function() {
        // $('img').each(function() {
        //     let this_url = $(this).attr('src');
        //     var http = new XMLHttpRequest();
        //     http.open('HEAD', this_url, false);
        //     http.send();
        //     if (http.status !== 200) {
        //         $(this).attr("src", "{{URL::asset('/images/default.jpg')}}");
        //     }
        // });
        if ($("#post-content-detail table")[0]) {
            $("#post-content-detail table").addClass('table').wrap('<div class="table-responsive"></div>');
        }
        $(".iframe-data").each(function() {
            var dataUrl = $(this).attr('data-url');
            $(this).append('<iframe loading="lazy" src="' + dataUrl +
                '" allowfullscreen="" frameborder="0" width="100%" height="100%"></iframe>');
        });
        $(document).ready(function() {
            if ($(".recaptchaToken")[0]) {
                grecaptcha.ready(function() {
                    grecaptcha.execute('6Lc7w5sgAAAAAEsmRH_Ogj62nolfSzOH9Q9IzNir', {
                        action: 'contact'
                    }).then(function(token) {
                        $(".recaptchaToken").val(token);
                    });
                });
            }

            $(".form-contact").submit(function(event) {
                var dataSerialize = $(this).serializeArray();
                var url = $(this).attr('action');
                var notifyForm = $(this).attr('notify-form');
                $.ajax({
                    type: 'POST',
                    url: url,
                    data: dataSerialize, // serializes the form's elements.
                    dataType: 'json',
                    success: function(data) {
                        if (data.status == 'success') {
                            if (data.popup_result != null) {
                                $('#' + data.popup_result).modal('show');
                            } else {
                                if (notifyForm) {
                                    alert(notifyForm);
                                } else {
                                    alert(
                                        'Cảm ơn bạn đã đăng ký tư vấn và nhận email từ Dinotech. Chúng tôi sẽ sớm gửi email và liên hệ với bạn sớm nhất trong 24h tới nhé. Chúc bạn một ngày vui vẻ.'
                                    );
                                }
                                location.reload();
                            }
                        } else {
                            if (data.message) {
                                alert(data.message);
                            } else {
                                alert('Không thành công, vui lòng nhập lại');
                            }
                            location.reload();
                        }
                    },
                    error: function(e) {
                        alert('Lỗi hệ thống, vui lòng nhập lại');
                        location.reload();
                    }
                });
                event.preventDefault();
            });
        });
    }, false);
</script>
<div id="fb-root"></div>
<!-- <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v11.0&appId=987055298019777&autoLogAppEvents=1"
        nonce="nTQ0MHeo"></script> -->
</body>

</html>
