
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
        @include('home.section-5')
        @include('home.section-6')
        @include('home.section-8')
        @include('home.section-9')
        @include('home.register')

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
    @include('home.footer')
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
