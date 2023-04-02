<?php
/**
 *File name : home.php  / Date: 2/11/2023 - 12:46 AM
 *Code Owner: Tke / Phone: 0367313134 / Email: thedc.it.94@gmail.com
 */
return [
    'title' => "In Tech",
    'menu'  => [
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
                'label' => "Về In Tech",
                'href'  => '#',
                'children'  => [
                    [
                        'label' => "Về In Tech",
                        'href'  => '/gioi-thieu.html',
                    ],
                    [
                        'label' => "Triết lý đào tạo",
                        'href'  => '/triet-ly-dao-tao.html',
                    ]
                ]
            ],
            [
                'label' => "Sản phẩm học viên",
                'href'  => '/'
            ],
            [
                'label' => "Khóa học",
                'href'  => '/'
            ],
            [
                'label' => "Lịch khai giảng",
                'href'  => '/'
            ],
            [
                'label' => "Tài liệu",
                'href'  => '/'
            ],
            [
                'label' => "Tin tức",
                'href'  => '/'
            ],
            [
                'label' => "Chuyên gia",
                'href'  => '/'
            ]
        ]
    ],
    'section_1' => [
        'banner'    => '/images/banner-1.jpg',
        'cards' => [
            [
                'image' => '/images/card-1.png',
                'href' => 'https://dinotech.edu.vn/kindy_cd13.html',
                'name' => 'Kindy',
                'text' => '5 tuổi - 7 tuổi',
            ],
            [
                'image' => '/images/card-2.png',
                'href' => "https://dinotech.edu.vn/kids_cd7.html",
                'name' => 'Kids',
                'text' => '7 tuổi - 11 tuổi',
            ],
            [
                'image' => '/images/card-3.png',
                'href' => "https://dinotech.edu.vn/teen_cd8.html",
                'name' => "Teen",
                'text' => '12 tuổi - 15 tuổi',
            ],
            [
                'image' => '/images/card-4.png',
                'href' => "https://dinotech.edu.vn/youngs_cd9.html",
                'name' => "Youngs",
                'text' => "16 tuổi - 18 + tuổi",
            ]

        ]
    ],
    'section_2' => [
        'title' => 'HỌC Ở DINO',
        'sub_title' => 'Sở hữu đội ngũ chuyên gia hàng đầu trong lĩnh vực giảng dạy công nghệ thông tin, học ở Dino giúp các con kích thích khả năng tư duy, tạo nguồn cảm hứng yêu thích với lập trình ngay từ khi còn nhỏ.',
        'achievements' => [
            [
                'title' => 'GIÀU KINH NGHIỆM',
                'icon'  => '/images/icon-setting-removebg-preview.png',
                'description' => 'Là sản phẩm của đơn vị có 10 năm kinh nghiệm trong lĩnh vực giáo dục đào tạo, Dinotech tự tin cùng chương trình giảng dạy khoa học, chất lượng hàng đầu Việt Nam hiện nay.'
            ],
            [
                'title' => 'KỸ NĂNG CHUYÊN MÔN CAO',
                'icon'  => '/images/icon-setting-removebg-preview.png',
                'description' => 'Được bảo đảm dưới sự cố vấn của các thạc sĩ, tiến sĩ và các giảng viên xuất sắc trong ngành công nghệ thông tin, mỗi học viên sẽ được đào tạo vững chắc nền tảng kỹ năng, đảm bảo đầu ra chất lượng.'
            ],
            [
                'title' => 'KHƠI NGUỒN CẢM HỨNG',
                'icon'  => '/images/icon-setting-removebg-preview.png',
                'description' => 'Là những người trực tiếp truyền tải giá trị đến với học viên, đội ngũ giảng viên tại Dinotech hứa hẹn mỗi giờ học là một giờ tràn đầy năng lượng, nhiều niềm vui và nhiều trải nghiệm. Khơi nguồn cảm hứng đam mê, yêu thích công nghệ.'
            ],
            [
                'title' => 'DẠY LẬP TRÌNH SONG NGỮ',
                'icon'  => '/images/icon-setting-removebg-preview.png',
                'description' => 'Với các ngôn ngữ lập trình là tiếng Anh, trẻ sẽ được nâng cao vốn từ vựng trong quá trình học tập, củng cố kiến thức tiếng Anh để mở ra con đường du học về ngành công nghệ thông tin tại các quốc gia lớn trên thế giới.'
            ]
        ]
    ]

];