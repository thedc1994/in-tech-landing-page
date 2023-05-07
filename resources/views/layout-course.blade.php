@extends('layout')

@section('menu')
    @include('home.menu')
@stop

@section('css')
    @include('home.css')
@stop

@section('footer')
    @include('home.footer')
@stop

@section('content')
    @yield('banner')
    <section class="page-banner page-banner-course">
        <img class="thumbnail-img" class="img-fluid w-100"
             src="https://st.ebomb.edu.vn/src/erp-image/2022/06/30/128e5714-6cd1-48ac-b3f9-a52c325b5e21.png" />
    </section>
    <section class="page-benefits pt-5 pb-5" style="background-color: #fbf7f7">
        <div class="container mt-5">
            <h2 class="text-center fw-7 mb-5 mt-5" style="color: #00044A">Trẻ Sẽ Được Gì Sau Khóa Học</h2>
            <div class="row align-items-center mt-5">
                <div class="col-12 col-md-6 pr-37">
                    <div class="block-1-benefit">
                        <div class="w-100 message">
                            <div class="message-block-1">
                                <div class="title-content-course">Kiến thức chủ đạo
                                </div>
                                <div class="message-content-course c-black">

                                    <img src="https://dinotech.edu.vn/images/Icon_2_.png" alt="" style="float: left">
                                    <p class="list-item  c-black">Kiến thức khoa học đời sống.
                                    </p>
                                    <img src="https://dinotech.edu.vn/images/Icon_2_.png" alt="" style="float: left">
                                    <p class="list-item  c-black">Kiến thức về lập trình, sử dụng các câu lệnh theo tư duy logic để tạo ra phần mềm, game, công cụ học tập..
                                    </p>
                                    <img src="https://dinotech.edu.vn/images/Icon_2_.png" alt="" style="float: left">
                                    <p class="list-item  c-black">Bổ trợ kiến thức K12 trên lớp.</p>
                                </div>
                                <img class="w-100" src="https://dinotech.edu.vn/images/block-1-course.png" alt="">
                            </div>
                            <div class="message-block-2">
                                <div class="title-content-course c-white">Kỹ năng bổ trợ
                                </div>
                                <div class="message-content-course">

                                    <img src="https://dinotech.edu.vn/images/Icon_2_.png" alt="" style="float: left">
                                    <p class="list-item  c-white">Lồng ghép các kỹ năng mềm thiết yếu như kỹ năng thuyết trình, kỹ năng tranh biện, kỹ năng phân tích… xen kẽ trong nội dung buổi học
                                    </p>
                                    <img src="https://dinotech.edu.vn/images/Icon_2_.png" alt="" style="float: left">
                                    <p class="list-item  c-white">Kỹ năng xây dựng dự án</p>
                                </div>
                                <img class="w-100" src="https://dinotech.edu.vn/images/block-3-course.png" alt="">
                            </div>
                            <div class="message-block-3">
                                <div class="title-content-course">Hoạt động ngoại khóa
                                </div>
                                <div class="message-content-course c-black">

                                    <img src="https://dinotech.edu.vn/images/Icon_2_.png" alt="" style="float: left">
                                    <p class="list-item  c-black">Tham gia các hoạt động tham quan các nhà máy, công ty công nghệ hàng đầu tại Việt Nam
                                    </p>
                                    <img src="https://dinotech.edu.vn/images/Icon_2_.png" alt="" style="float: left">
                                    <p class="list-item  c-black">Tham gia các buổi thảo luận, giao lưu chia sẻ kiến thức cùng các bạn nhỏ có cùng đam mê</p>
                                </div>
                                <img class="w-100" src="https://dinotech.edu.vn/images/block-1-course.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 pl-37">
                    <div class="row">
                        <div class="col-2 col-md-3">
                            <img class="h-20" src="https://dinotech.edu.vn/images/icon-block-course.png" alt="">
                        </div>
                        <div class="col-10 col-md-9">
                            <div class="title-benefit">Kỹ năng</div>
                            <ul class="list list-bullets list-gap-1 text-muted mb-0">
                                <li class="list-item">Kỹ năng thuyết trình, diễn thuyết trước đám đông
                                </li><li class="list-item">Khả năng sáng tạo trong học tập, sử dụng lập trình để để khám phá thế giới và hỗ trợ học tập.
                                </li><li class="list-item">Khả năng tư duy logic thông qua Mindmap kiến thức, sắp xếp, tổ chức và xây dựng dự án.
                                </li><li class="list-item">Kỹ năng quản lý thời gian trong quá trình học tập trên lớp và tại nhà
                                </li><li class="list-item">Khả năng tìm kiếm và lên ý tưởng cho các dự án
                                </li><li class="list-item">Khả năng phân tích các vấn đề để hiểu sâu hơn và ghi nhớ kiến thức tốt hơn</li>                                </ul>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-2 col-md-3">
                            <img class="h-20" src="https://dinotech.edu.vn/images/icon-block-course-2.png" alt="">
                        </div>
                        <div class="col-10 col-md-9">
                            <div class="title-benefit">Thái độ/Tâm thế</div>
                            <ul class="list list-bullets list-gap-1 text-muted mb-0">
                                <li class="list-item">Thiết lập và duy trì thói quen kỷ luật, tự giác trong mọi công việc
                                </li><li class="list-item">Duy trì động lực học tập và thái độ học tập
                                </li><li class="list-item">Không coi lập trình là một môn học, mà coi lập trình là một ngôn ngữ để mở rộng kiến thức phát triển tư duy và thỏa sức sáng tạo
                                </li><li class="list-item">Chủ động trong học tập và các nhiệm vụ được giao</li>                                </ul>
                        </div>
                    </div>
                </div>
            </div>
            <h2 class="text-center fw-7 mb-5 mt-5" style="color: #00044A">Chứng Chỉ Sau Khóa Học</h2>
            <div class="swiper swiper-teacher swiper-pagination-outside swiper-buttons-outside">
                <div class="swiper-container" data-plugin="swiper"
                     data-options='{"spaceBetween":16,"slidesPerView":2,"breakpoints":{"768":{"spaceBetween":24,"slidesPerView":3},"992":{"spaceBetween":24,"slidesPerView":2}}}'>
                    <div class="swiper-wrapper">
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>
    @yield('road_map')
    <section class="page-service pt-5 pb-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 col-md-12 text-center c-white">
                    <h2 class="mb-3">Dịch Vụ Đồng Hành</h2>
                    <div class="fs-18px">Đến với chương trình học Dinotech, học viên không chỉ đơn thuần được trau dồi kiến thức và kĩ năng làm bài thi, mà còn được cung cấp dịch vụ đồng hành miễn phí, đa dạng và tiện ích.</div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-2"></div>
                <div class="col-12 col-md-4 text-center">
                    <div class="img-service-1">
                        <img class="w-100 img-service-1" src="https://dinotech.edu.vn/images/service-1.jpg" alt="">
                        <div class="text-center c-white title-service-1">
                            <h5>Dịch vụ kiến thức</h5>
                        </div>
                        <div class="text-center content-service-1 mt-3">
                            Hỗ trợ học tập và giải đáp thắc mắc kiến thức tại nhà</div>
                        <div class="text-center content-service-1 mt-3">
                            Tham gia các bài kiểm tra, khảo sát và được cấp chứng chỉ của c các đơn vị quốc tế như HarvardX, Microsoft, Michigan University..</div>
                    </div>
                </div>
                <div class="col-12 col-md-4 text-center">
                    <div class="img-service-2">
                        <img class="w-100 img-service-1" src="https://dinotech.edu.vn/images/service-2.jpg" alt="">
                        <div style="background-color: #36A1C4" class="text-center c-white title-service-1">
                            <h5>Dịch vụ ngoài kiến thức</h5>
                        </div>
                        <div style="background-color: #36A1C4" class="text-center content-service-1 mt-3">
                            Các Workshop về phương pháp dạy con cũng như các workshops giúp con phát triển kỹ năng</div>
                        <div style="background-color: #36A1C4" class="text-center content-service-1 mt-3">
                            Hoạt động trải nghiệm, tham quan các cơ sở, nhà máy, công ty.. về công nghệ</div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>
    <section class="page-teacher pt-5 pb-5">
        <div class="container">
            <div class="section-nested">
                <h2 class="text-center fw-7 mb-5 mt-5" style="color: #00044A">Đội Ngũ Giảng Viên</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card pt-3" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                            <img class="mx-auto d-block" width="20%" src="https://dinotech.edu.vn/images/chuyen-mon-gioi.jpg">
                            <div class="card-body">
                                <h5 class="card-title text-center">Chuyên Môn Giỏi</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card pt-3" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                            <img class="mx-auto d-block" width="20%" src="https://dinotech.edu.vn/images/nhiet-tinh.jpg">
                            <div class="card-body">
                                <h5 class="card-title text-center">Nhiệt Tình</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card pt-3" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                            <img class="mx-auto d-block" width="20%" src="https://dinotech.edu.vn/images/sang-tao.jpg">
                            <div class="card-body">
                                <h5 class="card-title text-center">Sáng Tạo</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper swiper-teacher swiper-pagination-outside swiper-buttons-outside mt-5">
                    <div class="swiper-container" data-plugin="swiper"
                         data-options='{"spaceBetween":16,"slidesPerView":2,"breakpoints":{"768":{"spaceBetween":24,"slidesPerView":3},"992":{"spaceBetween":24,"slidesPerView":4}}}'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card card-teacher">
                                    <a class="thumbnail thumbnail-hover rounded mb-3" href="https://dinotech.edu.vn/tin-tuc/giang-vien-nguyen-truong-son_mt1641797175.html">
                                        <img class="thumbnail-img"
                                             src="https://st.ebomb.edu.vn/src/erp-image/2022/06/29/447ca5f2-b6f3-41b9-be78-3177fd3d76ed.png"
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
                                             src="https://st.ebomb.edu.vn/src/erp-image/2022/06/28/a552981f-a959-469e-be47-a4fb9b83cbe6.png"
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
                                             src="https://st.ebomb.edu.vn/src/erp-image/2022/06/28/19559e3a-cb7a-4192-84d9-b220fb91b761.png"
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
                                             src="https://st.ebomb.edu.vn/src/erp-image/2022/07/11/41cf1f85-7537-44fa-8f0e-ab69c082d727.png"
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
                                             src="https://st.ebomb.edu.vn/src/erp-image/2022/06/22/77aa0b3a-73a6-42aa-b0dc-54708209f609.png"
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
                                    <a class="thumbnail thumbnail-hover rounded mb-3" href="https://dinotech.edu.vn/chuyen-gia/chuyen-gia-nguyen-kim-anh_mt1641797155.html">
                                        <img class="thumbnail-img"
                                             src="https://st.ebomb.edu.vn/src/erp-image/2022/06/14/c7d573be-4e06-48f8-9186-94f45aa85759.png"
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
                                             src="https://st.ebomb.edu.vn/src/erp-image/2022/06/14/c3d97add-7116-4654-a7db-2f4d579082de.png"
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
                                             src="https://st.ebomb.edu.vn/src/erp-image/2022/06/14/549e7ee7-b784-473a-8be5-2f6ebab93910.png"
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
                                             src="https://st.ebomb.edu.vn/src/erp-image/2022/06/21/f24bdda8-dc43-4443-93f5-bf4bf2db6031.jpg"
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
                            <div class="swiper-slide">
                                <div class="card card-teacher">
                                    <a class="thumbnail thumbnail-hover rounded mb-3" href="https://dinotech.edu.vn/chuyen-gia/giang-vien-nguyen-thi-yen_mt1641797146.html">
                                        <img class="thumbnail-img"
                                             src="https://st.ebomb.edu.vn/src/erp-image/2022/06/14/8aaaff0e-00f6-4fbe-84c1-0cb376b36818.png"
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
                                    <use xlink:href="http://dinotech.edu.vn/images/sprite.svg#chevron-right"></use>
                                </svg>
                            </div>
                            <div class="swiper-button-next btn rounded-circle btn-primary text-white">
                                <svg class="iconsvg-chevron-right">
                                    <use xlink:href="http://dinotech.edu.vn/images/sprite.svg#chevron-right"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="page-document pt-5">
        <h2 class="text-center fw-7 mb-3 mt-5" style="color: #00044A">Học Liệu Đào Tạo</h2>
        <div class="tree-content">
            <img class="w-100 document-course-image" src="https://dinotech.edu.vn/images/tree.png" alt="">
            <div class="tree-1">
                <p class="fw-700">Student’s book</p>
                <li class="list-item">Hệ thống bài tập về nhà trên website giúp học sinh củng cố phần kiến thức, lý thuyết đã học ở trên lớp</li>                </div>
            <div class="tree-2">
                <p class="fw-700">Bài giảng trực tuyến</p>
                <li class="list-item">Bài giảng trực tuyến là các bài tổng hợp và nhắc lại kiến thức của buổi học
                </li><li class="list-item">Giáo viên sẽ cùng hướng dẫn học sinh làm các bài tập nâng cao hơn từ những kiến thức học được trên lớp</li>                </div>
            <div class="tree-3">
                <p class="fw-700">Hệ thống bài tập về nhà</p>
                <li class="list-item">Student’s book gồm các bài tập nghiên cứu tại nhà để học sinh chuẩn bị tốt bài học trên lớp.
                </li><li class="list-item">Phần kiến thức, câu lệnh,.. trên lớp học sinh sẽ tổng hợp và ghi vào Student’s book
                </li><li class="list-item">Bài tập nhỏ để học sinh luyện tập tại nhà cũng cố kiến thức</li>                </div>
        </div>
    </section>
    @include('home.register')
@stop