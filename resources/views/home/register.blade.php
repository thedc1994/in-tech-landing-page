<div class="advise d-flex pt-5 pb-5 w-100">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 d-flex flex-column align-items-center">
                <div class="fs-large fw-800 c-white">{{$home['register']['title_1']}}</div>
                <div class="fs-large fw-800 c-white pr-12 pl-12 course-voucher">{{$home['register']['title_2']}}</div>
                <div class="fs-large-2 fw-800 lh-8 c-yellow mt-5 fz-94 animated pulse infinite course-voucher-money">{{$home['register']['price']}}</div>
                <div class="fs-large fw-800 c-yellow mt-4">{{$home['register']['unit']}}</div>
                <div class="text-center fs-small-2 fw-400 c-white mb-5 register-note"></div>
                <div class="voucher-image">
                    <img src="{{URL::asset($home['register']['image'])}}" class="w-100" alt="">
                </div>
            </div>
            <!-- CUSTOM REGISTER FORM -->
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
            <!-- END CUSTOM -->
        </div>
    </div>
</div>