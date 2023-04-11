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
                <form class="form-1 mb-3 form-contact">
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
                            <label class="form-label visually-hidden" for="form-address">Địa chỉ</label>
                            <input class="form-control" id="form-address" name="address" type="text"
                                   placeholder="Địa chỉ">
                        </div>
                        <div class="col-12">
                            <label class="form-label visually-hidden" for="form-student-name">Họ và tên con</label>
                            <input class="form-control" id="form-student-name" name="full_name_student" type="text"
                                   placeholder="Họ và tên con">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label visually-hidden" for="form-student-age">Độ tuổi của con</label>
                            <input class="form-control" id="form-student-age" name="class" type="number"
                                   min="3"
                                   max="18"
                                   step="1" 
                                   placeholder="Độ tuổi của con">
                        </div>
                        <div class="col-6">
                            <label class="form-label visually-hidden" for="form-subject">Môn học quan tâm</label>
                            <select class="form-select form-select-default" id="form-subject" name="course_id">
                                <option selected="selected">Chọn môn học</option>
                                @foreach($home['register']['subjects'] as $subject)
                                    <option value="{{$subject}}">{{$subject}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="form-label visually-hidden" for="form-branch">Cơ sở học</label>
                            <select class="form-select form-select-default" id="form-branch" name="branch_id">
                                <option selected="selected">Cơ sở học</option>
                                @foreach($home['register']['branches'] as $branch)
                                    <option value="{{$branch['address']}}">
                                        {{$branch['address']}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12 d-grid">
                            <button class="btn btn-lg btn-primary text-uppercase fw-bold fs-lg animated pulse infinite"
                                    type="button"
                                    onclick="registerForm();" 
                                    >Giữ chỗ ngay</button>
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