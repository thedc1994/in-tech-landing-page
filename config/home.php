<?php
/**
 *File name : home.php  / Date: 2/11/2023 - 12:46 AM
 *Code Owner: Tke / Phone: 0367313134 / Email: thedc.it.94@gmail.com
 */
return [
    'title'     => "In Tech",
    'menu'      => [
        'logo'      => '/images/logo-dino.png',
        'logo_href' => "https://dinotech.edu.vn",
        'hotline'   => "02462947586",
        'mail'      => "dinotechschool@imap.edu.vn",
        'list_menu' => [
            [
                'label' => "Trang chủ",
                'href'  => '/'
            ],
            [
                'label' => "Sản phẩm học viên",
                'href'  => '/san-pham-hoc-vien'
            ],
            [
                'label'    => "Về In Tech",
                'href'     => '#',
                'children' => [
                    [
                        'label' => "Tầm nhìn",
                        'href'  => '/tam-nhin',
                    ],
                    [
                        'label' => "Sứ mệnh",
                        'href'  => '/su-menh',
                    ],
                    [
                        'label' => "Lợi ích",
                        'href'  => '/loi-ich',
                    ],
                    [
                        'label' => "Hệ thống",
                        'href'  => '/he-thong',
                    ]
                ]
            ],
            [
                'label' => "Khóa học",
                'href'  => '/khoa-hoc'
            ],
            [
                'label' => "Tài liệu",
                'href'  => '/tai-lieu'
            ],
            [
                'label' => "Tin tức",
                'href'  => '/tin-tuc'
            ],
        ]
    ],
    'section_1' => [
        'banner' => '/images/banner-1.jpg',
        'cards'  => [
            [
                'image' => '/images/card-1.png',
                'href'  => 'https://dinotech.edu.vn/kindy_cd13.html',
                'name'  => 'STEAM CODING',
                'text'  => '5 tuổi - 7 tuổi',
            ],
            [
                'image' => '/images/card-2.png',
                'href'  => "https://dinotech.edu.vn/kids_cd7.html",
                'name'  => 'STEAM DESIGN',
                'text'  => '7 tuổi - 11 tuổi',
            ],
            [
                'image' => '/images/card-3.png',
                'href'  => "https://dinotech.edu.vn/teen_cd8.html",
                'name'  => "STEAM ROBOT",
                'text'  => '12 tuổi - 15 tuổi',
            ],
            [
                'image' => '/images/card-4.png',
                'href'  => "https://dinotech.edu.vn/youngs_cd9.html",
                'name'  => "STEAM KID SKILL",
                'text'  => "16 tuổi - 18 + tuổi",
            ]

        ]
    ],
    'section_2' => [
        'title'        => 'HỌC Ở DINO',
        'sub_title'    => 'Sở hữu đội ngũ chuyên gia hàng đầu trong lĩnh vực giảng dạy công nghệ thông tin, học ở Dino giúp các con kích thích khả năng tư duy, tạo nguồn cảm hứng yêu thích với lập trình ngay từ khi còn nhỏ.',
        'achievements' => [
            [
                'title'       => 'GIÀU KINH NGHIỆM',
                'icon'        => '/images/icon-setting-removebg-preview.png',
                'description' => 'Là sản phẩm của đơn vị có 10 năm kinh nghiệm trong lĩnh vực giáo dục đào tạo, Dinotech tự tin cùng chương trình giảng dạy khoa học, chất lượng hàng đầu Việt Nam hiện nay.'
            ],
            [
                'title'       => 'KỸ NĂNG CHUYÊN MÔN CAO',
                'icon'        => '/images/icon-setting-removebg-preview.png',
                'description' => 'Được bảo đảm dưới sự cố vấn của các thạc sĩ, tiến sĩ và các giảng viên xuất sắc trong ngành công nghệ thông tin, mỗi học viên sẽ được đào tạo vững chắc nền tảng kỹ năng, đảm bảo đầu ra chất lượng.'
            ],
            [
                'title'       => 'KHƠI NGUỒN CẢM HỨNG',
                'icon'        => '/images/icon-setting-removebg-preview.png',
                'description' => 'Là những người trực tiếp truyền tải giá trị đến với học viên, đội ngũ giảng viên tại Dinotech hứa hẹn mỗi giờ học là một giờ tràn đầy năng lượng, nhiều niềm vui và nhiều trải nghiệm. Khơi nguồn cảm hứng đam mê, yêu thích công nghệ.'
            ],
            [
                'title'       => 'DẠY LẬP TRÌNH SONG NGỮ',
                'icon'        => '/images/icon-setting-removebg-preview.png',
                'description' => 'Với các ngôn ngữ lập trình là tiếng Anh, trẻ sẽ được nâng cao vốn từ vựng trong quá trình học tập, củng cố kiến thức tiếng Anh để mở ra con đường du học về ngành công nghệ thông tin tại các quốc gia lớn trên thế giới.'
            ]
        ]
    ],
    'section_3' => [
        'title'       => 'Lộ trình',
        'description' => 'HỌC TẬP TẠI IN TECH',
        'image'       => '/images/10d6af7f-ff88-4a2c-acdf-ce16ae4a0a50.jpeg'
    ],
    'section_4' => [
        'banner'          => '/images/training.png',
        'title'           => 'Phương pháp',
        'description'     => 'ĐÀO TẠO ĐỘC QUYỀN',
        'slogan'          => 'ILP khơi nguồn cảm hứng sáng tạo của thế hệ trẻ',
        'trainning_items' => [
            [
                'key'         => 'i',
                'key_upper'   => 'I',
                'label'       => 'Inspiration',
                'href'        => 'https://dinotech.edu.vn/phuong-phap-dao-tao.html',
                'description' => 'Sứ mệnh của đội ngũ giáo viên tại DinoTech Inspiration là khơi dậy nguồn cảm hứng sáng tạo của học viên, giúp các bạn tự do khám phá những điều mới mẻ, đem lại cho các bạn cảm giác hứng thú. Trong lớp học, tất cả mọi người đều không sợ sai, không sợ bị đánh giá và có thể thoải mái nêu lên ý kiến của mình',
                'note'        => 'DinoTech luôn nâng cao cảm hứng cho học viên, thực sự là trải nghiệm vui học học vui mà chất lượng tối đa.'
            ],
            [
                'key'         => 'l',
                'key_upper'   => 'L',
                'label'       => 'Logic',
                'description' => "Tại các lớp học của Dino Tech, học viên được tiếp nhận
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
                            và sự tiếp thu của học sinh.",
                'note'        => 'DinoTech luôn nâng cao cảm hứng cho học viên, thực sự là trải nghiệm vui học học vui mà chất lượng tối đa.',
                'href'        => 'https://dinotech.edu.vn/phuong-phap-dao-tao.html'
            ],
            [
                'key'         => 'p',
                'key_upper'   => 'P',
                'label'       => 'Practice',
                'note'        => 'DinoTech luôn nâng cao cảm hứng cho học viên, thực sự là trải nghiệm vui học học vui mà chất lượng tối đa.',
                'description' => "Tại Dinotech/ Học theo quy tắc RKP<br>
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
                            án.",
                'href'        => 'https://dinotech.edu.vn/phuong-phap-dao-tao.html'
            ],
        ],
        'image_triangle'  => '/images/triangle-arrow-top-vector-ui-512-removebg-preview.png'
    ],

    'section_5' => [
        'staff_label'       => 'Đội ngũ',
        'staff_title'       => 'CHUYÊN GIA, GIẢNG VIÊN',
        'staff_description' => 'DinoTech được cố vấn bởi các chuyên gia hàng đầu trong lĩnh vực CNTT & GDDT, mang đến một lộ trình học tập hoàn thiện nhất cho học viên',
        'staffs'            => [
            [
                'href'  => 'https://dinotech.edu.vn/chuyen-gia/chuyen-gia-nguyen-kim-anh_mt1641797155.html',
                'image' => '/images/chuyen-gia-1.png',
                'name'  => 'Chị Nguyễn Kim Anh',
                'info'  => [
                    'Giảng viên khoa CNTT Đại học Hàng hải Việt Nam',
                    '2 năm liên tiếp đạt danh hiệu Giảng viên Tin học xuất sắc do Trung ương trao tặng',
                    '17 năm kinh nghiệm trong việc giảng dạy CNTT',
                    'Dẫn dắt nhiều đội tuyển dự thi tin học, lập trình và đạt giải quốc tế'
                ]

            ],
            [
                'href'  => 'https://dinotech.edu.vn/chuyen-gia/chuyen-gia-nguyen-thi-hoa_mt1641797154.html',
                'image' => '/images/chuyen-gia-2.png',
                'name'  => 'Chị Nguyễn Thị Hoa',
                'info'  => [
                    'Co-founder, cố vấn kỹ năng giảng dạy Dino Tech',
                    'Chủ tịch HĐQT IMAP Việt Nam',
                    'Nhà sáng lập các thương hiệu đào tạo Anh ngữ: IELTS Fighter, Anh ngữ Ms Hoa',
                    'Chuyên gia ngôn ngữ',
                    'Giáo viên truyền cảm hứng với 10 năm kinh nghiệm giảng dạy và nghiên cứu về các phương pháp học đổi mới'
                ]

            ],
            [
                'href'  => 'https://dinotech.edu.vn/chuyen-gia/chuyen-gia-tran-quoc-nam_mt1641797153.html',
                'image' => '/images/chuyen-gia-3.png',
                'name'  => 'Anh Trần Quốc Nam',
                'info'  => [
                    'Co-founder Dino Tech',
                    'Giám đốc công nghệ tại IMAP Tech',
                    'Cựu Phó giám đốc trung tâm thanh toán trực tuyến Foxpay - Công ty cổ phần viễn thông FPT Telecom',
                    'Hơn 10 năm đào tạo công nghệ và kiến tạo các sản phẩm công nghệ cho các tập đoàn trong và ngoài nước'
                ]
            ],

            [
                'href'  => 'https://dinotech.edu.vn/chuyen-gia/chuyen-gia-do-minh-hang_mt1641797152.html',
                'image' => '/images/chuyen-gia-4.jpg',
                'name'  => 'Chị Đỗ Minh Hằng',
                'info'  => [
                    'Trưởng phòng đào tạo Dino Tech',
                    '5 năm nghiên cứu về phương pháp giảng dạy và tâm lý học ở trẻ',
                    'Hoàn thành xuất sắc các khóa đào tạo của Harvard X - Harvard University: HarvardX\'s Computer Science for Web Programming',
                    'Được công nhận: Nhà giáo dục sáng tạo của Microsoft'
                ]
            ],
        ],
        'teacher_label'     => '100+ giảng viên',
        'teacher_title'     => 'Đến từ các trường đại học hàng đầu Việt Nam. Các giảng viên là những chuyên gia trong lĩnh vực CNTT và giáo dục đào tạo',
        'teachers'          => [
            [
                'href'  => 'https://dinotech.edu.vn/tin-tuc/giang-vien-nguyen-truong-son_mt1641797175.html',
                'image' => '/images/giang-vien-1.png',
                'name'  => 'Giảng viên Nguyễn Trường Sơn',
                'info'  => [
                    'Kỹ sư CNTT tốt nghiệp loại xuất sắc Đại học Hàng Hải Việt Nam',
                    '3 năm kinh nghiệm trong việc giảng dạy lập trình, STEM cho trẻ',
                    'Giải nhất cuộc thi lập trình ĐH Hàng Hải Việt Nam 2020'
                ]
            ],
            [
                'href'  => 'https://dinotech.edu.vn/tin-tuc/giang-vien-nguyen-van-hoa_mt1641797174.html',
                'image' => '/images/giang-vien-2.png',
                'name'  => 'Giảng viên Nguyễn Văn Hòa',
                'info'  => [
                    'Kỹ sư CNTT tốt nghiệp tại Đại học Bách khoa HN',
                    '10 năm kinh nghiệm trong lĩnh vực công nghệ, lập trình',
                    'Chuyên gia trong lĩnh vực giảng dạy lập trình, STEAM cho trẻ'
                ]
            ],
            [
                'href'  => 'https://dinotech.edu.vn/tin-tuc/giang-vien-chuc-anh-quan_mt1641797173.html',
                'image' => '/images/giang-vien-3.png',
                'name'  => 'Giảng viên Chúc Anh Quân',
                'info'  => [
                    'Tốt nghiệp cử nhân loại giỏi Đại học FPT',
                    '3 năm kinh nghiệm trong lĩnh vực công nghệ, lập trình',
                    '3 năm kinh nghiệm trong việc giảng dạy lập trình, STEM cho trẻ'
                ]
            ],
            [
                'href'  => 'https://dinotech.edu.vn/tin-tuc/giang-vien-nguyen-duy-anh_mt1641797172.html',
                'image' => '/images/giang-vien-4.png',
                'name'  => 'Giảng viên Nguyễn Duy Anh',
                'info'  => [
                    'Cử nhân khoa Vật Lý - ĐH Quốc Gia Hà Nội',
                    '3 năm kinh nghiệm trong giảng dạy lập trình, STEAM cho trẻ',
                    'Giải nhất cuộc thi: Minecraft Hackathon 2020 - 2021 do Trung ương đoàn TNCS tổ chức'
                ]
            ],
            [
                'href'  => 'https://dinotech.edu.vn/tin-tuc/giang-vien-dang-ngoc-linh_mt1641797171.html',
                'image' => '/images/giang-vien-5.png',
                'name'  => 'Giảng viên Đặng Ngọc Linh',
                'info'  => [
                    'Cử nhân loại giỏi khoa CNTT Đại học Sư phạm Hà Nội',
                    '3+ năm kinh nghiệm trong việc giảng dạy lập trình, STEM',
                    'Giảng viên giảng dạy CNTT bằng Tiếng Anh'
                ]
            ],
            [
                'href'  => 'https://dinotech.edu.vn/chuyen-gia/giang-vien-nguyen-thi-yen_mt1641797146.html',
                'image' => '/images/giang-vien-6.png',
                'name'  => 'Giảng viên Nguyễn Thị Yến',
                'info'  => [
                    'Cử nhân loại giỏi Đại học Sư phạm Hà Nội',
                    '3+ năm kinh nghiệm trong việc giảng dạy lập trình, STEM',
                    'Được bình chọn là giảng viên tận tâm nhất trong việc giảng dạy lập trình'
                ]
            ],
        ]
    ],

    'section_6' => [
        'label'        => 'Sản phẩm',
        'title'        => 'CỦA HỌC VIÊN',
        'main_product' => [
            'href'        => 'https://dinotech.edu.vn/tin-tuc/cuoc-thi-lap-trinh-li-xi-tet---giai-ba---thi-sinh-minh-vuong_mt1641797219.html',
            'image'       => '/images/b8422fb3-8399-47da-ae99-0d9ab97a23b5.jpg',
            'title'       => '[Cuộc thi Lập trình Lì xì Tết] - Giải Ba - Thí sinh Minh Vương',
            'description' => 'Minh Vương xuất sắc đạt giải ba trong cuộc thi Lập trình Lì Xì Tết với Dino Tech. Cả nhà hãy cùng xem phần thuyết trình về sản phẩm của Minh Vương dưới đây nhé!'
        ],
        'popular_products'     => [
            [
                'href'  => 'https://dinotech.edu.vn/tin-tuc/cuoc-thi-lap-trinh-li-xi-tet---giai-ba---thi-sinh-minh-vuong_mt1641797219.html',
                'image' => '/images/b8422fb3-8399-47da-ae99-0d9ab97a23b5.jpg',
                'title' => '[Cuộc thi Lập trình Lì xì Tết] - Giải Ba - Thí sinh Minh Vương',
                'description' => 'Minh Vương xuất sắc đạt giải ba trong cuộc thi Lập trình Lì Xì Tết với Dino Tech. Cả nhà hãy cùng xem phần thuyết trình về sản phẩm của Minh Vương dưới đây nhé!'
            ],
            [
                'href'  => 'https://dinotech.edu.vn/tin-tuc/cuoc-thi-lap-trinh-li-xi-tet---giai-nhi---thi-sinh-duc-linh_mt1641797218.html',
                'image' => '/images/28104425-a112-4322-b329-88f0f9808131.jpg',
                'title' => '[Cuộc thi Lập trình Lì xì Tết] - Giải Nhì - Thí sinh Đức Linh',
                'description' => 'Cùng đón xem bài dự thi của Đức Linh - Thí sinh đoạt giải Nhì trong cuộc thi Lập trình Lì Xì Tết với Dino Tech nhé.'
            ],
            [
                'href'  => 'https://dinotech.edu.vn/tin-tuc/cuoc-thi-lap-trinh-li-xi-tet---giai-nhat---thi-sinh-nhu-an_mt1641797217.html',
                'image' => '/images/d6b72b70-bb43-4c0f-b170-f1995f175459.jpg',
                'title' => '[Cuộc thi Lập trình Lì xì Tết] - Giải Nhất - Thí sinh Như An',
                'description' => 'Hãy cùng theo dõi bài thi của Như An, thí sinh đã đạt giải Nhất trong cuộc thi Lập trình lì xì Tết thông qua các lượt bình chọn và chấm điểm từ BTC nhé.'
            ],
            [
                'href'  => 'https://dinotech.edu.vn/tin-tuc/du-an-cuoi-khoa---viet-phuong-le-uyen---hoc-vien-lop-python-hp-1_mt1641797191.html',
                'image' => '/images/81219cbb-67cd-4795-876b-f8efe9c840a3.jpg',
                'title' => '[DỰ ÁN CUỐI KHÓA] - VIỆT PHƯƠNG, LÊ UYÊN - HỌC VIÊN LỚP PYTHON HP 1',
                'description' => 'Lựa chọn Robot tính tiền làm dự án cuối khóa, Việt Phương và Lê Uyên, học viên lớp Lập trình Python HP 1, đã hoàn thành rất tốt bài thuyết trình của mình và chính thức tốt nghiệp&nbsp;học phần đầu tiên của lớp học Python.'
            ],
            [
                'href'  => 'https://dinotech.edu.vn/tin-tuc/du-an-cuoi-khoa---trong-khoi---hoc-vien-lop-minecraft-level-1_mt1641797187.html',
                'image' => '/images/72e75a9a-703e-4a57-9f84-b4f5ae2352cf.jpg',
                'title' => '[DỰ ÁN CUỐI KHÓA] - TRỌNG KHÔI - HỌC VIÊN LỚP MINECRAFT LEVEL 1',
                'description' => 'Tự tin thuyết trình dự án cuối khóa - Khôi tốt nghiệp xuất sắc khóa học Lập trình Minecraft tại&nbsp;Dino Tech'
            ]

        ],
        'products'     => [
            [
                'href'  => 'https://dinotech.edu.vn/tin-tuc/cuoc-thi-lap-trinh-li-xi-tet---giai-ba---thi-sinh-minh-vuong_mt1641797219.html',
                'image' => '/images/b8422fb3-8399-47da-ae99-0d9ab97a23b5.jpg',
                'title' => '[Cuộc thi Lập trình Lì xì Tết] - Giải Ba - Thí sinh Minh Vương',
                'description' => 'Minh Vương xuất sắc đạt giải ba trong cuộc thi Lập trình Lì Xì Tết với Dino Tech. Cả nhà hãy cùng xem phần thuyết trình về sản phẩm của Minh Vương dưới đây nhé!'
            ],
            [
                'href'  => 'https://dinotech.edu.vn/tin-tuc/cuoc-thi-lap-trinh-li-xi-tet---giai-nhi---thi-sinh-duc-linh_mt1641797218.html',
                'image' => '/images/28104425-a112-4322-b329-88f0f9808131.jpg',
                'title' => '[Cuộc thi Lập trình Lì xì Tết] - Giải Nhì - Thí sinh Đức Linh',
                'description' => 'Cùng đón xem bài dự thi của Đức Linh - Thí sinh đoạt giải Nhì trong cuộc thi Lập trình Lì Xì Tết với Dino Tech nhé.'
            ],
            [
                'href'  => 'https://dinotech.edu.vn/tin-tuc/cuoc-thi-lap-trinh-li-xi-tet---giai-nhat---thi-sinh-nhu-an_mt1641797217.html',
                'image' => '/images/d6b72b70-bb43-4c0f-b170-f1995f175459.jpg',
                'title' => '[Cuộc thi Lập trình Lì xì Tết] - Giải Nhất - Thí sinh Như An',
                'description' => 'Hãy cùng theo dõi bài thi của Như An, thí sinh đã đạt giải Nhất trong cuộc thi Lập trình lì xì Tết thông qua các lượt bình chọn và chấm điểm từ BTC nhé.'
            ],
            [
                'href'  => 'https://dinotech.edu.vn/tin-tuc/du-an-cuoi-khoa---viet-phuong-le-uyen---hoc-vien-lop-python-hp-1_mt1641797191.html',
                'image' => '/images/81219cbb-67cd-4795-876b-f8efe9c840a3.jpg',
                'title' => '[DỰ ÁN CUỐI KHÓA] - VIỆT PHƯƠNG, LÊ UYÊN - HỌC VIÊN LỚP PYTHON HP 1',
                'description' => 'Lựa chọn Robot tính tiền làm dự án cuối khóa, Việt Phương và Lê Uyên, học viên lớp Lập trình Python HP 1, đã hoàn thành rất tốt bài thuyết trình của mình và chính thức tốt nghiệp&nbsp;học phần đầu tiên của lớp học Python.'
            ],
            [
                'href'  => 'https://dinotech.edu.vn/tin-tuc/du-an-cuoi-khoa---trong-khoi---hoc-vien-lop-minecraft-level-1_mt1641797187.html',
                'image' => '/images/72e75a9a-703e-4a57-9f84-b4f5ae2352cf.jpg',
                'title' => '[DỰ ÁN CUỐI KHÓA] - TRỌNG KHÔI - HỌC VIÊN LỚP MINECRAFT LEVEL 1',
                'description' => 'Tự tin thuyết trình dự án cuối khóa - Khôi tốt nghiệp xuất sắc khóa học Lập trình Minecraft tại&nbsp;Dino Tech'
            ]
        ]
    ],

    'section_8' => [
        'label'  => 'TIN TỨC, SỰ KIỆN',
        'href'   => 'https://dinotech.edu.vn/tin-tuc.html',
        'events' => [
            [
                'href'        => 'https://dinotech.edu.vn/tin-tuc/cau-lenh-trang-phuc-trong-scratch_mt1641797216.html',
                'image'       => '/images/8a44fa0f-ebdf-4cbc-815a-231de2fc0393.png',
                'title'       => 'CÂU LỆNH TRANG PHỤC TRONG SCRATCH',
                'description' => 'Tiếp tục với series “Tìm hiểu về Scratch”, hãy cùng tìm hiểu về câu lệnh trang phục trong Scratch cùng Dino Tech qua bài viết dưới đây.'
            ],
            [
                'href'        => 'https://dinotech.edu.vn/tin-tuc/cung-cac-ban-hoc-sinh-truong-nguyen-binh-khiem-kham-pha-robotics-cung-dino-tech_mt1641797214.html',
                'image'       => '/images/bcc37e1e-99f2-4798-93f0-15891aeecfb5.png',
                'title'       => 'CÙNG CÁC BẠN HỌC SINH TRƯỜNG NGUYỄN BỈNH KHIÊM KHÁM PHÁ ROBOTICS CÙNG DINO TECH',
                'description' => 'Dino Tech đã có thời gian đồng hành cùng các bạn học sinh trường Nguyễn Bỉnh Khiêm trong hoạt động ngoại khóa của trường tại Vĩnh Phúc. Tại đây, các bạn nhỏ đã cùng nhau khám phá Robotics.'
            ],
            [
                'href'        => 'https://dinotech.edu.vn/tin-tuc/nhom-lenh-pen-trong-scratch_mt1641797213.html',
                'image'       => '/images/da032e09-794a-4523-bb41-0ed539324329.png',
                'title'       => 'NHÓM LỆNH PEN TRONG SCRATCH',
                'description' => 'Ở các bài viết trong series “Lập trình với Scratch” trước đó, Dino Tech đã cùng các bạn tìm hiểu về các câu lệnh âm thanh, và các nhóm lệnh khác nhau... Trong bài viết hôm nay, hãy tiếp tục tìm hiểu về nhóm lệnh Pen trong Scratch cùng Dino Tech nhé!'
            ],
        ]
    ],

    'section_9' => [
        'title'    => 'ĐỐI TÁC',
        'partners' => [
            [
                'href'  => 'https://dinotech.ebomb.edu.vn/',
                'image' => '/images/vn-express.png',
                'alt'   => 'VnExpress'
            ],
            [
                'href'  => 'https://dinotech.ebomb.edu.vn/',
                'image' => '/images/ielts.png',
                'alt'   => 'IELTS Fighter'
            ],
            [
                'href'  => 'https://dinotech.ebomb.edu.vn/',
                'image' => '/images/mshoa.png',
                'alt'   => 'Ms Hoa Junior'
            ],
            [
                'href'  => 'https://dinotech.ebomb.edu.vn/',
                'image' => '/images/Roborobo.jpeg',
                'alt'   => 'Roborobo'
            ],
            [
                'href'  => 'https://dinotech.ebomb.edu.vn/',
                'image' => '/images/Classin.png',
                'alt'   => 'Classin'
            ],
            [
                'href'  => 'https://dinotech.ebomb.edu.vn/',
                'image' => '/images/Viettel.png',
                'alt'   => 'Viettel'
            ],
            [
                'href'  => 'https://dinotech.ebomb.edu.vn/',
                'image' => '/images/IMAP.png',
                'alt'   => 'IMAP'
            ],
        ]
    ],

    'register' => [
        'title_1'     => 'TẶNG VOUCHER',
        'title_2'     => 'KHÓA HỌC',
        'price'       => '2.000.000',
        'unit'        => 'vnđ',
        'description' => 'KHI ĐĂNG KÝ CÁC KHÓA HỌC TRONG THÁNG 6/2022',
        'image'       => '/images/anh-quâtng.png',
        'subjects'    => [
            'Dino Game Scratch basic',
            'Lắp ráp Robot với UARO Basic',
            'Dino Game Scratch Advance'
        ],
        'branches'     => [
            [
                'title'    => '26 Nguyễn Thị Định, Trung Hòa, Cầu Giấy, Hà Nội',
                'address'  => '26 Phố Nguyễn Thị Định, Trung Hoà, Cầu Giấy, Hà Nội, Vietnam',
                'phone'    => '02462947586',
                'map_href' => 'https://maps.google.com/?q=21.012430200000000,105.803552100000000'
            ],
            [
                'title'    => 'Văn phòng Hà Nội',
                'address'  => '14 Phố Trần Kim Xuyến, Yên Hoà, Cầu Giấy, Hanoi, Vietnam',
                'phone'    => '0965500306',
                'map_href' => 'https://maps.google.com/?q=21.018245100000000,105.795860700000000'
            ]
        ]
    ],

    'footer' => [
        'copyright'    => '© 2021. Trực thuộc công ty cổ phần giáo dục và đào tạo IMAP Việt Nam',
        'logo'         => '/images/logo-white.png',
        'logo_href'    => 'https://dinotech.edu.vn',
        'facebook'     => '#',
        'youtube'      => 'https://www.youtube.com/channel/UCE-WfKHFlC3-fKJvl0dLSVQ',
        'tiktok'       => 'https://www.tiktok.com/@laptrinhnhi.dinotech',
        'branch_title' => 'HỆ THỐNG CƠ SỞ DINOTECH',
        'branches'     => [
            [
                'title'    => '26 Nguyễn Thị Định, Trung Hòa, Cầu Giấy, Hà Nội',
                'address'  => '26 Phố Nguyễn Thị Định, Trung Hoà, Cầu Giấy, Hà Nội, Vietnam',
                'phone'    => '02462947586',
                'map_href' => 'https://maps.google.com/?q=21.012430200000000,105.803552100000000'
            ],
            [
                'title'    => 'Văn phòng Hà Nội',
                'address'  => '14 Phố Trần Kim Xuyến, Yên Hoà, Cầu Giấy, Hanoi, Vietnam',
                'phone'    => '0965500306',
                'map_href' => 'https://maps.google.com/?q=21.018245100000000,105.795860700000000'
            ]
        ]

    ]

];