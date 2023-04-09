<section class="section-4">
    <div class="w-100 trainning">
        <div class="w-100 bg-top">
            <img class="w-100" src="{{URL::asset($home['section_4']['banner'])}}" alt="">
        </div>
        <div class="container">
            <div class="text-center fs-medium c-white" style="padding-bottom: 5px;font-size: 22px">{{$home['section_4']['title']}}</div>
            <div class="line-bg-green mt-1 m-auto pad"></div>
            <h4 class="title text-center fs-large fw-700 c-white mt-4">{{$home['section_4']['description']}}</h4>
            <div class="text-center fs-small-2 fw-400 c-white">
                {{$home['section_4']['slogan']}}
            </div>
            <div class="row circle-ilp">
                @foreach($home['section_4']['trainning_items'] as $trainningItem)
                <div class="col-md-4 col-4 col-sm-4 pl-4 trainning-item-div">
                    <div class="trainning-item-content" onclick="hoverItem(this)" id="trainning-item-{{$trainningItem['key']}}">
                        <div class="">{{$trainningItem['key_upper']}}</div>
                        <div class="pad-top-10">{{$trainningItem['label']}}</div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row arrow">
                @foreach($home['section_4']['trainning_items'] as $index => $trainningItem)
                <div class="col-md-4 col-sm-4 col-4 mx-auto text-center arrow-inspiration"
                     @if($index != 0)
                         style="visibility:hidden"
                     @endif
                >
                    <img height="50%" class="w-150 m-bot-140" src="{{URL::asset($home['section_4']['image_triangle'])}}" alt="">
                </div>
                @endforeach
                <div class="col-md-4 col-sm-4 col-4 mx-auto text-center arrow-logic" style="visibility:hidden">
                    <img class="w-150 m-bot-140" src="{{URL::asset('/images/triangle-arrow-top-vector-ui-512-removebg-preview.png')}}" alt="">
                </div>
                <div class="col-md-4 col-sm-4 col-4 mx-auto text-center arrow-practice" style="visibility:hidden">
                    <img class="w-150 m-bot-140" src="{{URL::asset('/images/triangle-arrow-top-vector-ui-512-removebg-preview.png')}}" alt="">
                </div>
            </div>
        </div>
        <div class="w-100 bg-bottom">
            <div class="content tc-animation" id="animation-temp">
                <div class="container w-100 bg-white" id="tc-inspiration">
                    <div class="item-polygon "></div>
                    <div class="row">
                        <div class="trainning-content ml-4 col-md-8">
                            <div class="inspiration">Inspiration</div>
                            <div class="mt-3 trainning-pr pb-4">Sứ mệnh của đội ngũ giáo viên tại DinoTech
                                Inspiration
                                là
                                khơi dậy
                                nguồn
                                cảm hứng
                                sáng tạo của học viên, giúp các bạn tự do khám phá những điều mới mẻ, đem lại cho
                                các
                                bạn
                                cảm giác hứng
                                thú. Trong lớp học, tất cả mọi người đều không sợ sai, không sợ bị đánh giá và có
                                thể
                                thoải
                                mái nêu lên
                                ý
                                kiến của mình</div>
                            <a class="view-more c-red" href="https://dinotech.edu.vn/phuong-phap-dao-tao.html">Tìm hiểu thêm</a>
                        </div>
                        <div class="message-content col-md-2">DinoTech luôn nâng cao cảm hứng cho học viên, thực
                            sự
                            là trải
                            nghiệm vui học
                            học vui mà chất lượng tối đa.</div>
                    </div>
                </div>
            </div>

            <div class="container w-100 bg-white hidden importantNone" id="tc-logic">
                <div class="item-polygon"></div>
                <div class="row">
                    <div class="trainning-content ml-4 col-md-8">
                        <div class="inspiration">Logic</div>
                        <div class="mt-3 trainning-pr pb-4">Tại các lớp học của Dino Tech, học viên được tiếp nhận
                            kiến thức – thực hành kỹ năng thông qua mô hình học độc quyền PACES<br>
                            1. Proposal (Đề xuất): Giáo viên đưa ra các gợi ý về bài học để tạo ra mối liên hệ giữa
                            kinh nghiệm học tập trong quá khứ, hiện tại, thiết lập nền tảng tổ chức cho các hoạt
                            động sắp tới. Giúp học sinh có mối liên kết với bài học.<br>
                            2. Analysis (Phân tích): học sinh học theo cách thực hành, làm việc nhóm, giao tiếp và
                            trực tiếp khám phá, thao tác trên giáo cụ, học liệu để kiểm tra và phân tích các giả
                            thuyết họ đưa ra, được giáo viên dẫn dắt thông qua việc cung cấp kiến thức nền tảng và
                            đặt câu hỏi.<br>
                            3. Conclusion (Kết luận): tạo cơ hội để học sinh miêu tả, thuyết trình, và kết luận các
                            kiến thức, trải nghiệm hoặc bản thu hoạch quan sát được trong giai đoạn phân tích. Giáo
                            viên hướng dẫn giúp học sinh tổng hợp kiến thức mới và đặt câu hỏi nếu học sinh cần làm
                            rõ thêm vấn đề.<br>
                            4. Execute (Thực hành): Học sinh áp dụng những kiến thức, những tìm hiểu từ các phần
                            trước vào bài thực hành
                            5. Small Excersie (Luyện tập): Giai đoạn này giáo viên sẽ cho học sinh làm những bài
                            luyện tập nhỏ để củng cố kiến thức. Đồng thời học sinh sẽ luyện tập trình bày về kiến
                            thức tìm hiểu được. Thông qua đó giáo viên sẽ đánh giá được mức độ hiểu bài của học sinh
                            và sự tiếp thu của học sinh.</div>
                        <a class="view-more c-red" href="https://dinotech.edu.vn/phuong-phap-dao-tao.html">Tìm hiểu thêm</a>
                    </div>
                    <div class="message-content col-md-2">DinoTech luôn nâng cao cảm hứng cho học viên, thực sự là
                        trải
                        nghiệm
                        vui
                        học
                        học vui mà chất lượng tối đa.</div>
                </div>
            </div>
            <div class="container w-100 bg-white hidden importantNone" id="tc-practice">
                <div class="item-polygon"></div>
                <div class="row">
                    <div class="trainning-content ml-4 col-md-8">
                        <div class="inspiration">Practice</div>
                        <div class="mt-3 trainning-pr pb-4">Tại Dinotech/ Học theo quy tắc RKP<br>
                            1. Vẫn học kiến thức tuy nhiên kiến thức chỉ là giai đoạn trung gian ở giữa, để
                            người
                            học
                            xử lý thông tin đầu vào và biến nó thành sản phẩm đầu ra.<br>
                            2. Luôn giảng dạy theo tôn chỉ: Mục đích cuối cùng của việc học về công nghệ là
                            giúp
                            học
                            sinh kích thích khả năng sáng tạo, tư duy logics, sự chủ động<br>
                            3. Research
                            Học sinh được tìm hiểu, tìm kiếm những thông tin, kiến thức về chủ đề theo các
                            nguồn
                            tài
                            nguyên khác nhau<br>
                            4. Knowledge
                            Từ những thông tin tiếp nhận được thông qua quá trình tìm hiểu. Học sinh được
                            giáo
                            viên
                            hướng dẫn đúc kết lại kiến thức<br>
                            5. Project
                            Người học áp dụng những kiến thức và những tìm hiểu thu nhận được để tạo ra dự
                            án.
                        </div>
                        <a class="view-more c-red" href="https://dinotech.edu.vn/phuong-phap-dao-tao.html">Tìm hiểu thêm</a>
                    </div>
                    <div class="message-content col-md-2">DinoTech luôn nâng cao cảm hứng cho học viên, thực
                        sự
                        là
                        trải nghiệm
                        vui học
                        học vui mà chất lượng tối đa.</div>
                </div>
            </div>
        </div>
    </div>
</section>
