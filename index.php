<!DOCTYPE html>
<html lang="en">

<head>
  <script src="js/jquery-3.6.3.min.js" type="text/javascript"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <!-- <script src="js/jquery.js" type="text/javascript"></script> -->
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-2EDYP4WHHD"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-2EDYP4WHHD');
  </script>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EMBI</title>
  <meta name="description" content="Quản lí nhân sự.">
  <meta name="description" content="EMBI">
  <meta name="description" content="Hệ thống quản lí nhân sự">
  <meta name="description" content="Dashboard quản lí nhân sự">
  <meta name="description" content="BI Quản lí nhân sự">
  <meta name="description" content="meowtech">
  <meta name="description" content="MEOWTECH">
  <meta name="description" content="Business Intelligence trong quản lí nhân sự">



  <!-- icofont-css-link -->
  <link rel="stylesheet" href="../../css/icofont.min.css">
  <!-- Owl-Carosal-Style-link -->
  <link rel="stylesheet" href="../../css/owl.carousel.min.css">
  <!-- Bootstrap-Style-link -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Aos-Style-link -->
  <link rel="stylesheet" href="css/aos.css">
  <!-- Coustome-Style-link -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Responsive-Style-link -->
  <link rel="stylesheet" href="css/responsive.css">
  <!-- Favicon -->
  <link rel="shortcut icon" href="images/favicon.webp" type="image/x-icon">
</head>

<body>
<!-- Messenger Plugin chat Code -->
<div id="fb-root"></div>

<!-- Your Plugin chat code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "102964414429279");
  chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v15.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_GB/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>

<!-- Page-wrapper-Start -->
<div class="page_wrapper">

  <!-- Preloader -->
  <div id="preloader">
    <div id="loader"></div>
  </div>

  <!-- Header Start -->
  <header>
    <!-- container start -->
    <div class="container">
      <!-- navigation bar -->
      <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="index.html">
          <img src="images/logo.webp" alt="image" >
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
              <!-- <i class="icofont-navigation-menu ico_menu"></i> -->
              <div class="toggle-wrap">
                <span class="toggle-bar"></span>
              </div>
            </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <!-- secondery menu start -->
            <li class="nav-item">
              <a class="nav-link" href="index.html">Trang chủ</a>
            </li>
            <!-- secondery menu end -->
            <li class="nav-item">
              <a class="nav-link" href="#features">Tính năng</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#pricing">Chi phí</a>
            </li>

            <!-- secondery menu end -->
            <li class="nav-item">
              <a class="nav-link" href="https://blog.meowtech.vn/" target="_blank">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://meowtech.vn/contact.php" target="_blank">Liên hệ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://meowtech.vn/about-us.php" target="_blank">Về chúng tôi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link dark_btn" href="https://app.powerbi.com/view?r=eyJrIjoiZTg1NThiNDctYjkzYS00ZDQyLWI3MGUtNjM2MDVkYzFhYzkxIiwidCI6ImI3OTllMDhkLWM2YzAtNGI4ZS1iMWU3LTUyYTdjYzNmMThlYSIsImMiOjEwfQ%3D%3D" target="_blank">DEMO</a>
            </li>
          </ul>
        </div>
      </nav>
      <!-- navigation end -->
    </div>
    <!-- container end -->
  </header>

  <!-- Banner-Section-Start -->
  <section class="banner_section">
    <!-- hero bg -->
    <div class="hero_bg"> <img src="images/hero-bg.webp" alt="image" > </div>
    <!-- container start -->
    <div class="container">
      <!-- row start -->
      <div class="row">
        <div class="col-lg-6 col-md-12"  data-aos="fade-right" data-aos-duration="1500">
          <!-- banner text -->
          <div class="banner_text">
            <!-- h1 -->
            <h1>EMBI <span>quản lí nhân sự cho doanh nghiệp.</span></h1>
            <!-- p -->
            <p>Giúp nhà quản lí có bức tranh toàn cảnh bao quát về nhân sự, giám sát & đo lường, đưa ra các quyết định hiệu quả.
            </p>
          </div>

          <div class="trial_box">
            <!-- form -->
            <form id="myForm" action="" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="100">
              <div class="form-group">
                <input id="email" type="email" class="form-control" placeholder="Nhập email của bạn">
              </div>
              <div class="form-group">
                <button id="btnSubmit" class="btn">ĐĂNG KÝ</button>
              </div>
              <div id="message">

              </div>

              <script>
                                // $(document).ready(function() {
                                //   $('#myForm').submit(function(e) {
                                //     e.preventDefault(); // Prevent default form submission
                                    
                                //     var formData = $(this).serialize(); // Serialize form data
                                //     console.log(formData);
                                    
                                //     $.ajax({
                                //       type: 'POST',
                                //       url: 'insert.php', // PHP script to handle the insertion
                                //       data: formData,
                                //       success: function(response) {
                                //         // Handle the response from the PHP script
                                //         console.log(response);
                                        
                                //         // Display success message
                                //         $('#message').text('Data inserted successfully');
                                        
                                //         // Reset the form
                                //         $('#myForm')[0].reset();
                                //       }
                                //     });
                                //   });
                                // });
                                $(document).ready(function() {
                                    $('#btnSubmit').on('click', function() {
                                    $("#btnSubmit").attr("disabled", "disabled");
                                    var email = $('#email').val();
                                    if(email!=""){
                                        console.log(email);
                                        $.ajax({
                                            url: "insert.php",
                                            type: "POST",
                                            data: {
                                              email: email
                                            },
                                            cache: false,
                                            success: function(dataResult){
                                                var dataResult = JSON.parse(dataResult);
                                                if(dataResult.statusCode==200){
                                                    $("#btnSubmit").removeAttr("disabled");
                                                    $('#myForm').find('input:text').val('');
                                                    $("#message").show();
                                                    $('#message').html('Email has been sent successfully');
                                                }
                                                else if(dataResult.statusCode==201){
                                                    alert("Error occured !");
                                                }
                                            }
                                        });
                                        }
                                        else{
                                            alert('Please fill all the field !');
                                        }
                                    });
                                });
              </script>
            </form>

          </div>

          <!-- list -->
          <div class="trial_box_list">
            <ul>
              <li><i class="icofont-check-circled"></i> Chỉ từ 210.000 VNĐ</li>
              <li><i class="icofont-check-circled"></i> Miễn phí dùng thử 3 ngày</li>
            </ul>
          </div>

          <!-- users -->
          <div class="used_app">
            <ul>
              <li><img src="images/used01.webp" alt="image" ></li>
<!--              <li><img src="images/used02.webp" alt="image" ></li>-->
<!--              <li><img src="images/used03.webp" alt="image" ></li>-->
<!--              <li><img src="images/used04.webp" alt="image" ></li>-->
            </ul>
            <p>100+ <br> doanh nghiệp đã sử dụng</p>
          </div>
        </div>

        <!-- banner images start -->
        <div class="col-lg-3 col-md-6"  data-aos="fade-in" data-aos-duration="1500">
          <div class="banner_images image_box1">
            <span class="banner_image1"> <img class="moving_position_animatin" src="images/bannerimage1.webp" alt="image" > </span>
            <span class="banner_image2"> <img class="moving_animation" src="images/bannerimage2.webp" alt="image" > </span>
          </div>
        </div>

        <div class="col-lg-3 col-md-6"  data-aos="fade-in" data-aos-duration="1500">
          <div class="banner_images image_box2">
            <span class="banner_image3"> <img class="moving_animation" src="images/bannerimage3.webp" alt="image" > </span>
            <span class="banner_image4"> <img class="moving_position_animatin" src="images/bannerimage4.webp" alt="image" > </span>
          </div>
        </div>
        <!-- banner slides end -->

      </div>
      <!-- row end -->
    </div>
    <!-- container end -->
  </section>
  <!-- Banner-Section-end -->

  <!-- Features-Section-Start -->
  <section class="row_am features_section margin-top-30" id="features">
    <!-- section bg -->
    <div class="feature_section_bg"> <img src="images/section-bg.webp" alt="image" > </div>
    <!-- container start -->
    <div class="container">
      <div class="features_inner">

        <!-- feature image -->
        <div class="feature_img" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
          <img src="images/device-feature.webp" alt="image" >
        </div>

        <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
          <!-- h2 -->
          <h2><span>EMBI</span> - BI như thế nào?</h2>
          <!-- p -->
          <p>Với EMBI - Áp dụng Business Intelligence với công nghệ Dữ liệu lớn.</p>
        </div>

        <!-- story -->
        <div class="features_block">
          <div class="row">
            <div class="col-md-3">
              <div class="feature_box" data-aos="fade-up" data-aos-duration="1500">
                <div class="image">
                  <img src="images/secure_data.webp" alt="image" >
                </div>
                <div class="text">
                  <h4>Bảo mật dữ liệu</h4>
                  <p>Dữ liệu được bảo mật tuyệt đối. Không can thiệp dữ liệu của doanh nghiệp.</p>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="feature_box" data-aos="fade-up" data-aos-duration="1700">
                <div class="image">
                  <img src="images/functional.webp" alt="image" >
                </div>
                <div class="text">
                  <h4>Quy trình tự động</h4>
                  <p>Chỉ cần nhập dữ liệu nhân sự, toàn bộ báo cáo sẽ được tự động tạo ra.</p>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="feature_box" data-aos="fade-up" data-aos-duration="1900">
                <div class="image">
                  <img src="images/live-chat.webp" alt="image" >
                </div>
                <div class="text">
                  <h4>Tuỳ biến</h4>
                  <p>Tuỳ biến giao diện dễ dàng, tạo thêm các báo cáo theo yêu cầu của doanh nghiệp.</p>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="feature_box" data-aos="fade-up" data-aos-duration="1900">
                <div class="image">
                  <img src="images/support.webp" alt="image" >
                </div>
                <div class="text">
                  <h4>Dữ liệu lớn</h4>
                  <p>Xây dựng trên nền tảng công nghệ dữ liệu lớn, xử lý dữ liệu từ nhiều nguồn.</p>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </div>
    <!-- container end -->
  </section>
  <!-- Features-Section-end -->

  <!-- About-App-Section-Start -->
  <section class="row_am about_app_section">
    <!-- container start -->
    <div class="container">
      <!-- row start -->
      <div class="row">
        <div class="col-lg-6">

          <!-- about images -->
          <div class="about_img" data-aos="fade-in" data-aos-duration="1500">
            <div class="frame_img">
              <img class="moving_position_animatin" src="images/about-frame.webp" alt="image" >
            </div>
            <div class="screen_img">
              <img class="moving_animation" src="images/about-screen.webp" alt="image" >
            </div>
          </div>
        </div>
        <div class="col-lg-6">

          <!-- about text -->
          <div class="about_text">
            <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">

              <!-- h2 -->
              <h2>Tại sao nên chọn <span>EMBI.</span></h2>

              <!-- p -->
              <p>
                EMBI - giúp chuyển đổi số cho doanh nghiệp về việc quản lí nhân sự. Giúp doanh nghiệp phân tích từng chỉ số trong việc quản lí nhân sự, tiết kiệm chi phí và thời gian. Giúp nhà quản lí đưa ra các quyết định hiệu quả.
              </p>
            </div>

            <!-- UL -->
            <ul class="app_statstic" id="counter" data-aos="fade-in" data-aos-duration="1500">
              <li>
                <div class="icon">
                  <img src="images/download.webp" alt="image" >
                </div>
                <div class="text">
                  <p><span class="counter-value" data-count="80">0</span><span>%</span></p>
                  <p>Giảm thời gian</p>
                </div>
              </li>
              <li>
                <div class="icon">
                  <img src="images/followers.webp" alt="image" >
                </div>
                <div class="text">
                  <p><span class="counter-value" data-count="90">0 </span><span>%</span></p>
                  <p>Giảm chi phí</p>
                </div>
              </li>
              <li>
                <div class="icon">
                  <img src="images/reviews.webp" alt="image" >
                </div>
                <div class="text">
                  <p><span class="counter-value" data-count="10">0</span><span>+</span></p>
                  <p>Nguồn dữ liệu</p>
                </div>
              </li>
              <li>
                <div class="icon">
                  <img src="images/countries.webp" alt="image" >
                </div>
                <div class="text">
                  <p><span class="counter-value" data-count="300">0</span><span>%</span></p>
                  <p>Hiệu suất</p>
                </div>
              </li>
            </ul>
            <!-- UL end -->
            <a href="https://meowtech.vn/contact.php" target="_blank" class="btn puprple_btn" data-aos="fade-in" data-aos-duration="1500">ĐĂNG KÝ DÙNG THỬ</a>
          </div>
        </div>
      </div>
      <!-- row end -->
    </div>
    <!-- container end -->
  </section>
  <!-- About-App-Section-end -->

  <!-- ModernUI-Section-Start -->
  <section class="row_am modern_ui_section">
    <!-- section bg -->
    <div class="modernui_section_bg"> <img src="images/section-bg.webp" alt="image" > </div>
    <!-- container start -->
    <div class="container">
      <!-- row start -->
      <div class="row">
        <div class="col-lg-6">
          <!-- UI content -->
          <div class="ui_text">
            <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
              <h2>Những <span>tính năng</span> - tuyệt vời</h2>
              <p>
                EMBI cung cấp đưa ra các Dashboard - phân tích tổng quan và chuyên sâu một cách tự động dựa trên dữ liệu nhân sự của doanh nghiệp...
              </p>
            </div>
            <ul class="design_block">
              <li data-aos="fade-up" data-aos-duration="1500">
                <h4>Bức tranh 360</h4>
                <p>Tổng số nhân viên, nhân viên thử việc, nhân viên chính thức, tổng số dự án, biến động nhân sự, nhân sự theo phòng ban/dự án/vị trí, chi phí nhân sự theo vị trí/dự án...</p>
              </li>
              <li data-aos="fade-up" data-aos-duration="1500">
                <h4>Chí phí nhân sự</h4>
                <p>Tổng chi phí nhân sự theo lương cơ bản/Net/Gross. Chi phí lương cơ bản/Net/Gross theo từng vị trí/phòng ban/dự án.</p>
              </li>
              <li data-aos="fade-up" data-aos-duration="1500">
                <h4>Thông tin khác</h4>
                <p>Nhân sự theo giới tính, nhân sự theo nhóm tuổi, nhân sự cần cố gắng, nhân sự theo mô hình làm việc, nhân sự theo thâm niên, nhân sự theo mô hình làm việc/theo từng dự án...</p>
              </li>
              <li data-aos="fade-up" data-aos-duration="1500">
                <h4>Profile nhân viên</h4>
                <p>Thông tin cá nhân. Thông tin công việc: phòng ban, mô hình làm việc, loại hình làm việc, dự án đang tham gia, điểm cố gắng, nơi làm việc, ngày kết thúc hợp đồng, loại hợp đồng. Thông tin lương: lương Net/cơ bản/Gross...</p>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6">
          <!-- UI Image -->
          <div class="ui_images" data-aos="fade-in" data-aos-duration="1500">
            <div class="left_img">
              <img class="moving_position_animatin" src="images/modern01.webp" alt="image" >
            </div>
            <!-- UI Image -->
            <div class="right_img">
              <img class="moving_position_animatin" src="images/shield_icon.webp" alt="image" >
              <img class="moving_position_animatin" src="images/modern02.webp" alt="image" >
              <img class="moving_position_animatin" src="images/modern03.webp" alt="image" >
            </div>
          </div>
        </div>
      </div>
      <!-- row end -->
    </div>
    <!-- container end -->
  </section>
  <!-- ModernUI-Section-end -->

  <!-- How-It-Workes-Section-Start -->
  <section class="row_am how_it_works" id="how_it_work">
    <!-- section bg -->
    <div class="how_section_bg"> <img src="images/section-bg.webp" alt="image" > </div>
    <!-- container start -->
    <div class="container">
      <div class="how_it_inner">
        <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
          <!-- h2 -->
          <h2><span>Sử dụng EMBI</span> - 3 bước đơn giản</h2>
          <!-- p -->
          <p>Hướng dẫn sử dụng EMBI dành cho gói Standard với 1 nguồn dữ liệu Excel.</p>
        </div>
        <div class="step_block">
          <!-- UL -->
          <ul>
            <!-- step -->
            <li>
              <div class="step_text" data-aos="fade-right" data-aos-duration="1500">
                <h4>Tải mẫu dữ liệu "Quản lí nhân sự" </h4>
                <div class="app_icon">
                  <a href="https://meowtech.larksuite.com/sheets/VNeKsobSlhmSXBt92KauQ8kdsYb" target="_blank"><i class="icofont-download"></i></i></a>
                </div>
                <p>Ấn vào icon để tải mẫu dữ liệu.</p>
              </div>
              <div class="step_number number1">
                <h3>01</h3>
              </div>
              <div class="step_img" data-aos="fade-left" data-aos-duration="1500">
                <img src="images/download_app.webp" alt="image" >
              </div>
            </li>

            <!-- step -->
            <li>
              <div class="step_text" data-aos="fade-left" data-aos-duration="1500">
                <h4>Nhập & tải dữ liệu</h4>
                <span>Dựa vào mẫu dữ liệu</span>
                <p>Nhập dữ liệu nhân sự của doanh nghiệp bạn và tải lên  EMBI.</p>
              </div>
              <div class="step_number number2">
                <h3>02</h3>
              </div>
              <div class="step_img" data-aos="fade-right" data-aos-duration="1500">
                <img src="images/create_account.webp" alt="image" >
              </div>
            </li>

            <!-- step -->
            <li>
              <div class="step_text" data-aos="fade-right" data-aos-duration="1500">
                <h4>Hoàn thành & tận hưởng</h4>
                <span>Sau khi tải dữ liệu lên<a href="index.html">EMBI</a></span>
                <p>sẽ tự động tạo ra các Dashboard - báo cáo về quản lí nhân sự trong doanh nghiệp dựa trên dữ liệu nhân sự bạn tải lên.</p>
              </div>
              <div class="step_number number3">
                <h3>03</h3>
              </div>
              <div class="step_img" data-aos="fade-left" data-aos-duration="1500">
                <img src="images/enjoy_app.webp" alt="image" >
              </div>
            </li>
          </ul>
        </div>
      </div>

      <!-- video section start -->
      <div class="yt_video" data-aos="fade-in" data-aos-duration="1500">
        <div class="thumbnil">
          <img src="images/yt_thumb.webp" alt="image">
          <a class="popup-youtube play-button" data-toggle="modal" data-target="#myModal" title="embi">
      <span class="play_btn">
        <img src="images/play_icon.webp" alt="image">
        <div class="waves-block">
          <div class="waves wave-1"></div>
          <div class="waves wave-2"></div>
          <div class="waves wave-3"></div>
        </div>
      </span>
            Hướng dẫn sử dụng EMBI
            <span>Xem video</span>
          </a>
        </div>
      </div>

      <!-- video section end -->
    </div>
    <!-- container end -->

  </section>
  <!-- How-It-Workes-Section-end -->

<!--  &lt;!&ndash; Testimonial-Section start &ndash;&gt;-->
<!--  <section class="row_am testimonial_section">-->
<!--    &lt;!&ndash; container start &ndash;&gt;-->
<!--    <div class="container">-->
<!--      <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">-->
<!--        &lt;!&ndash; h2 &ndash;&gt;-->
<!--        <h2>Khách hàng<span> nói về EMBI</span></h2>-->
<!--        &lt;!&ndash; p &ndash;&gt;-->
<!--        <p>Những đánh giá phản hồi từ các doanh nghiệp sau khi sử dụng EMBI.</p>-->
<!--      </div>-->
<!--      <div class="testimonial_block" data-aos="fade-in" data-aos-duration="1500">-->
<!--        <div id="testimonial_slider" class="owl-carousel owl-theme">-->
<!--          &lt;!&ndash; user 1 &ndash;&gt;-->
<!--          <div class="item">-->
<!--            <div class="testimonial_slide_box">-->
<!--              <div class="rating">-->
<!--                <span><i class="icofont-star"></i></span>-->
<!--                <span><i class="icofont-star"></i></span>-->
<!--                <span><i class="icofont-star"></i></span>-->
<!--                <span><i class="icofont-star"></i></span>-->
<!--                <span><i class="icofont-star"></i></span>-->
<!--              </div>-->
<!--              <p class="review">-->
<!--                “ Loading... ”-->
<!--              </p>-->
<!--              <div class="testimonial_img">-->
<!--                <img src="images/testimonial_user1.webp" alt="image" >-->
<!--              </div>-->
<!--              <h3>Bà Hồ Thanh Ngọc</h3>-->
<!--              <span class="designation">CEO</span>-->
<!--            </div>-->
<!--          </div>-->

<!--          &lt;!&ndash; user 2 &ndash;&gt;-->
<!--          <div class="item">-->
<!--            <div class="testimonial_slide_box">-->
<!--              <div class="rating">-->
<!--                <span><i class="icofont-star"></i></span>-->
<!--                <span><i class="icofont-star"></i></span>-->
<!--                <span><i class="icofont-star"></i></span>-->
<!--                <span><i class="icofont-star"></i></span>-->
<!--                <span><i class="icofont-star"></i></span>-->
<!--              </div>-->
<!--              <p class="review">-->
<!--                “Loading... ”-->
<!--              </p>-->
<!--              <div class="testimonial_img">-->
<!--                <img src="images/testimonial_user2.webp" alt="image" >-->
<!--              </div>-->
<!--              <h3>Ông Nguyễn Hoàng Vũ</h3>-->
<!--              <span class="designation">CEO</span>-->
<!--            </div>-->
<!--          </div>-->

<!--          &lt;!&ndash; user 3 &ndash;&gt;-->
<!--          <div class="item">-->
<!--            <div class="testimonial_slide_box">-->
<!--              <div class="rating">-->
<!--                <span><i class="icofont-star"></i></span>-->
<!--                <span><i class="icofont-star"></i></span>-->
<!--                <span><i class="icofont-star"></i></span>-->
<!--                <span><i class="icofont-star"></i></span>-->
<!--                <span><i class="icofont-star"></i></span>-->
<!--              </div>-->
<!--              <p class="review">-->
<!--                “ Loading... ”-->
<!--              </p>-->
<!--              <div class="testimonial_img">-->
<!--                <img src="images/testimonial_user3.webp" alt="image" >-->
<!--              </div>-->
<!--              <h3>Ông Lê Quốc Anh</h3>-->
<!--              <span class="designation">CEO</span>-->
<!--            </div>-->

<!--          </div>-->
<!--        </div>-->

<!--        &lt;!&ndash; total review &ndash;&gt;-->
<!--        <div class="total_review">-->
<!--          <div class="rating">-->
<!--            <span><i class="icofont-star"></i></span>-->
<!--            <span><i class="icofont-star"></i></span>-->
<!--            <span><i class="icofont-star"></i></span>-->
<!--            <span><i class="icofont-star"></i></span>-->
<!--            <span><i class="icofont-star"></i></span>-->
<!--            <p>5.0 / 5.0</p>-->
<!--          </div>-->
<!--          <h3>95</h3>-->
<!--          <a href="reviews.html">LƯỢT ĐÁNH GIÁ <i class="icofont-arrow-right"></i></a>-->
<!--        </div>-->

<!--        &lt;!&ndash; avtar faces &ndash;&gt;-->
<!--        <div class="avtar_faces">-->
<!--          <img src="images/avtar_testimonial.webp" alt="image" >-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
<!--    &lt;!&ndash; container end &ndash;&gt;-->
<!--  </section>-->
  <!-- Testimonial-Section end -->

  <!-- Pricing-Section -->
  <section class="row_am pricing_section" id="pricing">
    <!-- container start -->
    <div class="container">
      <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
        <!-- h2 -->
        <h2>GÓI GIẢI PHÁP</h2>
        <!-- p -->
        <p>Đáp ứng mọi quy mô doanh nghiệp: siêu nhỏ – nhỏ – vừa – lớn</p>
      </div>
      <!-- toggle button -->
      <div class="toggle_block" data-aos="fade-up" data-aos-duration="1500">
        <span class="month active">Tháng</span>
        <div class="tog_block">
          <span class="tog_btn"></span>
        </div>
        <span class="years">Năm</span>
        <span class="offer">30% off</span>
      </div>

      <!-- pricing box  monthly start -->
      <div class="pricing_pannel monthly_plan active" data-aos="fade-up" data-aos-duration="1500">
        <!-- row start -->
        <div class="row">
          <!-- pricing box 1 -->
          <div class="col-md-4">
            <div class="pricing_block highlited_block">
              <div class="icon">
                <img src="images/standard.webp" alt="image" >
              </div>
              <div class="pkg_name">
                <h3>Standard</h3>
              </div>
              <span class="price">300.000</span>
              <ul class="benifits">
                <li>
                  <p>Dữ liệu từ 1 nguồn</p>
                </li>
                <li>
                  <p>Cập nhật 24/7</p><br><br><br><br><br>
                </li>
              </ul>
              <a href="https://meowtech.vn/contact.php" target="_blank"  class="btn white_btn">MUA NGAY</a>
            </div>
          </div>

          <!-- pricing box 2 -->
          <div class="col-md-4">
            <div class="pricing_block">
              <div class="icon">
                <img src="images/unlimited.webp" alt="image" >
              </div>
              <div class="pkg_name">
                <h3>Professional</h3>
              </div>
              <span class="price">16.000.000+</span>
              <ul class="benifits">
                <li>
                  <p>Tuỳ biến giao diện</p>
                </li>
                <li>
                  <p>Chuyển đổi và xử lý dữ liệu</p>
                </li>
                <li>
                  <p>Tạo cơ sở dữ liệu riêng trên đám mây</p>
                </li>
                <li>
                  <p></p>
                </li>
                <li>
                  <p>Báo cáo theo yêu cầu</p>
                </li>
                <li>
                  <p>Cập nhật 24/7</p><br><br>
                </li>
              </ul>
              <a href="https://meowtech.vn/contact.php" target="_blank"  class="btn white_btn">MUA NGAY</a>
            </div>
          </div>

          <!-- pricing box 3 -->
          <div class="col-md-4">
            <div class="pricing_block">
              <div class="icon">
                <img src="images/premium.webp" alt="image" >
              </div>
              <div class="pkg_name">
                <h3>Enterprise</h3>
<!--                <span>For large team</span>-->
              </div>
              <span class="price">30.000.000+</span>
              <ul class="benifits">
                <li>
                  <p>Dữ liệu lớn từ nhiều nguồn</p>
                </li>
                <li>
                  <p>Thiết kế kiến trúc dữ liệu</p>
                </li>
                <li>
                  <p>Thiết kế đường ống xử lý dữ liệu tự động</p>
                </li>
                <li>
                  <p>Xây dựng cơ sở dữ liệu riêng trên đám mây</p>
                </li>
                <li>
                  <p>Tuỳ biến giao diện</p>
                </li>
                <li>
                  <p>Báo cáo theo yêu cầu</p>
                </li>
                <li>
                  <p>Cập nhật 24/7</p>
                </li>
              </ul>
              <a href="https://meowtech.vn/contact.php" target="_blank"  class="btn white_btn">MUA NGAY</a>
            </div>
          </div>
        </div>
        <!-- row end -->
      </div>
      <!-- pricing box monthly end -->

      <!-- pricing box yearly start -->
      <div class="pricing_pannel yearly_plan">
        <!-- row start -->
        <div class="row">
          <!-- pricing box 1 -->
          <div class="col-md-4">
            <div class="pricing_block highlited_block">
              <div class="icon">
                <img src="images/standard.webp" alt="image" >
              </div>
              <div class="pkg_name">
                <h3>Standard</h3>
              </div>
              <span class="price">2.520.000</span>
              <ul class="benifits">
                <li>
                  <p>Dữ liệu từ 1 nguồn</p>
                </li>
                <li>
                  <p>Cập nhật 24/7</p><br><br><br><br><br>
                </li>
              </ul>
              <a href="https://meowtech.vn/contact.php" target="_blank"  class="btn white_btn">MUA NGAY</a>
            </div>
          </div>

          <!-- pricing box 2 -->
          <div class="col-md-4">
            <div class="pricing_block ">
              <div class="icon">
                <img src="images/unlimited.webp" alt="image" >
              </div>
              <div class="pkg_name">
                <h3>Professional</h3>
              </div>
              <span class="price">134.400.000+</span>
              <ul class="benifits">
                <li>
                  <p>Tuỳ biến giao diện</p>
                </li>
                <li>
                  <p>Chuyển đổi và xử lý dữ liệu</p>
                </li>
                <li>
                  <p>Tạo cơ sở dữ liệu riêng trên đám mây</p>
                </li>
                <li>
                  <p></p>
                </li>
                <li>
                  <p>Báo cáo theo yêu cầu</p>
                </li>
                <li>
                  <p>Cập nhật 24/7</p><br><br>
                </li>
              </ul>
              <a href="https://meowtech.vn/contact.php" target="_blank"  class="btn white_btn">MUA NGAY</a>
            </div>
          </div>

          <!-- pricing box 3 -->
          <div class="col-md-4">
            <div class="pricing_block">
              <div class="icon">
                <img src="images/premium.webp" alt="image" >
              </div>
              <div class="pkg_name">
                <h3>Enterprise</h3>
                <!--                <span>For large team</span>-->
              </div>
              <span class="price">252.000.000+</span>
              <ul class="benifits">
                <li>
                  <p>Dữ liệu lớn từ nhiều nguồn</p>
                </li>
                <li>
                  <p>Thiết kế kiến trúc dữ liệu</p>
                </li>
                <li>
                  <p>Thiết kế đường ống xử lý dữ liệu tự động</p>
                </li>
                <li>
                  <p>Xây dựng cơ sở dữ liệu riêng trên đám mây</p>
                </li>
                <li>
                  <p>Tuỳ biến giao diện</p>
                </li>
                <li>
                  <p>Báo cáo theo yêu cầu</p>
                </li>
                <li>
                  <p>Cập nhật 24/7</p>
                </li>
              </ul>
              <a href="https://meowtech.vn/contact.php" target="_blank"  class="btn white_btn">MUA NGAY</a>
            </div>
          </div>
        </div>
        <!-- row end -->
      </div>
      <!-- pricing box yearly end -->

      <p class="contact_text" data-aos="fade-up" data-aos-duration="1500">Bạn cần tư vấn? <a href="https://meowtech.vn/contact.php" target="_blank" >Liên hệ với chúng tôi </a> để được hỗ trợ</p>
    </div>
    <!-- container start end -->
  </section>
  <!-- Pricing-Section end -->

  <!-- FAQ-Section start -->
  <section class="row_am faq_section">
    <!-- section bg -->
    <div class="faq_bg"> <img src="images/section-bg.webp" alt="image" > </div>
    <!-- container start -->
    <div class="container">
      <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
        <!-- h2 -->
        <h2><span>FAQ</span> - Câu hỏi thường hỏi</h2>
        <!-- p -->
        <p>Một số câu hỏi thường hỏi, đã được chúng tôi trả lời.</p>
      </div>
      <!-- faq data -->
      <div class="faq_panel">
        <div class="accordion" id="accordionExample">
          <div class="card" data-aos="fade-up" data-aos-duration="1500">
            <div class="card-header" id="headingOne">
              <h2 class="mb-0">
                <button type="button" class="btn btn-link active" data-toggle="collapse" data-target="#collapseOne">
                  <i class="icon_faq icofont-plus"></i></i> Đăng ký sử dụng như thế nào ?</button>
              </h2>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                <p>Để đăng ký và nhận sự hỗ trợ từ MEOWTECH, bạn chỉ cần điền thông tin của bạn tại nút "Đăng Ký" trên trang web của chúng tôi. Sau đó, bộ phận hỗ trợ của chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất.</p>
              </div>
            </div>
          </div>
          <div class="card" data-aos="fade-up" data-aos-duration="1500">
            <div class="card-header" id="headingTwo">
              <h2 class="mb-0">
                <button type="button" class="btn btn-link collapsed" data-toggle="collapse"
                        data-target="#collapseTwo"><i class="icon_faq icofont-plus"></i></i> Chi phí hằng năm là bao nhiêu?</button>
              </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                <p>Gói cơ bản dành cho doanh nghiệp mới tiếp cận có chi phí hằng năm là 2.520.000đ. Nếu bạn chia tổng số này thành trả theo tháng, giá sẽ là 210.000đ/tháng.</p>
              </div>
            </div>
          </div>
          <div class="card" data-aos="fade-up" data-aos-duration="1500">
            <div class="card-header" id="headingThree">
              <h2 class="mb-0">
                <button type="button" class="btn btn-link collapsed" data-toggle="collapse"
                        data-target="#collapseThree"><i class="icon_faq icofont-plus"></i></i>Dữ liệu dư thừa thì xử được như nào?</button>
              </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body">
                <p>Xử lý dữ liệu dư thừa thường được thực hiện thông qua quy trình xử lý dữ liệu. MEOWTECH sử dụng phương pháp lưu trữ hiện có của khách hàng để xử lý dữ liệu dư thừa. Điều này bao gồm việc chạy các job chức năng trên nền tảng điện toán đám mây Azure Databricks để tìm và loại bỏ dữ liệu trùng lặp, không cần thiết hoặc không hợp lệ.</p>
              </div>
            </div>
          </div>
          <div class="card" data-aos="fade-up" data-aos-duration="1500">
            <div class="card-header" id="headingFour">
              <h2 class="mb-0">
                <button type="button" class="btn btn-link collapsed" data-toggle="collapse"
                        data-target="#collapseFour"><i class="icon_faq icofont-plus"></i></i>Công nghệ dữ liệu lớn là gì?
                  ?</button>
              </h2>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
              <div class="card-body">
                <p>Công nghệ dữ liệu lớn Azure, Databricks và Power BI là những công nghệ quan trọng trong lĩnh vực xử lý và phân tích dữ liệu. Dưới đây là mô tả ngắn về từng công nghệ:

                  <br><br><b>1. Công nghệ dữ liệu lớn Azure:</b> Azure là một nền tảng đám mây được cung cấp bởi Microsoft. Công nghệ dữ liệu lớn Azure cung cấp một loạt các dịch vụ và công cụ để xử lý, lưu trữ và phân tích dữ liệu lớn. Điều này bao gồm các dịch vụ như Azure Data Lake Storage, Azure HDInsight, Azure Data Factory và Azure SQL Data Warehouse. Công nghệ dữ liệu lớn Azure giúp doanh nghiệp xử lý dữ liệu lớn một cách linh hoạt và hiệu quả trên nền tảng đám mây.

                  <br><br><b>2. Databricks:</b> Databricks là một nền tảng tính toán đám mây dựa trên Apache Spark. Nó cung cấp một môi trường phân tích dữ liệu và xử lý dữ liệu phân tán. Databricks giúp tăng cường hiệu suất và năng suất trong việc xử lý dữ liệu lớn và thực hiện các nhiệm vụ phức tạp như xử lý dữ liệu dư thừa, đào tạo mô hình máy học và phân tích dữ liệu. Nó cũng tích hợp tốt với các công nghệ và dịch vụ khác trong hệ sinh thái Azure.

                  <br><br><b>3. Power BI:</b>Power BI là một nền tảng phân tích dữ liệu và trực quan hóa được phát triển bởi Microsoft. Nó cho phép người dùng kết nối và tạo các báo cáo, biểu đồ và bảng điều khiển động từ nhiều nguồn dữ liệu khác nhau. Power BI cung cấp các tính năng mạnh mẽ để khám phá, trực quan hóa và chia sẻ thông tin qua các báo cáo tương tác và trực quan. Nó cũng tích hợp tốt với các dịch vụ và công cụ khác trong hệ sinh thái Azure, cho phép việc phân tích dữ liệu mạnh mẽ và đáng tin cậy.

                  <br><br>Cả ba công nghệ trên đều cung cấp các giải pháp quan trọng để xử lý, phân tích và trực quan hóa dữ liệu lớn, và chúng thường được sử dụng kết hợp để tạo ra các quy trình xử lý dữ liệu toàn diện</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- container end -->
  </section>
  <!-- FAQ-Section end -->

  <!-- Beautifull-interface-Section start -->
  <section class="row_am interface_section">
    <!-- container start -->
    <div class="container-fluid">
      <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
        <!-- h2 -->
        <h2>Giao diện <span>trực quan</span></h2>
        <!-- p -->
        <p>
          EMBI với giao diện trực quan, mang lại trải nghiệm người dùng tốt nhất  <br> khi xem qua các báo cáo về quản lí nhân sự.
        </p>
      </div>

      <!-- screen slider start -->
      <div class="screen_slider" >
        <div id="screen_slider" class="owl-carousel owl-theme">
          <div class="item">
            <div class="">
<!--              <div class="screen_frame_img">-->

              <img src="images/screen-1.webp" alt="image" >
            </div>
          </div>
          <div class="item">
            <div class="">
              <img src="images/screen-2.webp" alt="image" >
            </div>
          </div>
          <div class="item">
            <div class="">
              <img src="images/screen-3.webp" alt="image" >
            </div>
          </div>
          <div class="item">
            <div class="">
              <img src="images/screen-4.webp" alt="image" >
            </div>
          </div>
          <div class="item">
            <div class="">
              <img src="images/screen-5.webp" alt="image" >
            </div>
          </div>
          <div class="item">
            <div class="">
              <img src="images/screen-3.webp" alt="image" >
            </div>
          </div>
        </div>
      </div>
      <!-- screen slider end -->
    </div>
    <!-- container end -->
  </section>
  <!-- Beautifull-interface-Section end -->

  <!-- Features-Section-Start -->
  <section class="row_am features_section margin-top-25" id="features">
    <!-- section bg -->
    <div class="feature_section_bg"> <img src="images/section-bg.webp" alt="image" > </div>
    <!-- container start -->
    <div class="container">
      <div class="features_inner">

        <!-- feature image -->
        <div class="feature_img" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
          <img src="images/device-feature.webp" alt="image" >
        </div>

        <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
          <!-- h2 -->
          <h2><span>Công nghệ</span> - được phát triển?</h2>
          <!-- p -->
          <p>EMBI được phát triển dự trên những công nghệ dữ liệu lớn hàng đầu trên thế giới.</p>
        </div>

        <!-- story -->
        <div class="features_block">
          <div class="row">
            <div class="col-md-4">
              <div class="feature_box" data-aos="fade-up" data-aos-duration="1500">
                <div class="image">
                  <a href="https://azure.microsoft.com/en-us/" target="_blank"><img src="images/azure-logo.webp" alt="image" ></a>
                </div>
                <div class="text">
                  <a href="https://azure.microsoft.com/en-us/" target="_blank"><h4>Azure Cloud</h4></a>
                  <p>Nền tảng điện toán đám mây hàng đầu thế giới của Microsoft .</p>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="feature_box" data-aos="fade-up" data-aos-duration="1700">
                <div class="image">
                  <a href="https://www.databricks.com/" target="_blank"><img src="images/databricks-logo.webp" alt="image" ></a>
                </div>
                <div class="text">
                  <a href="https://www.databricks.com/" target="_blank"><h4>Databricks</h4></a>
                  <p>Nền tảng dữ liệu lớn- Hợp nhất tất cả dữ liệu, phân tích và
                    AI trên một nền tảng</p>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="feature_box" data-aos="fade-up" data-aos-duration="1900">
                <div class="image">
                  <a href="https://powerbi.microsoft.com/en-us/" target="_blank"><img src="images/powerbi-logo.webp" alt="image" ></a>
                </div>
                <div class="text">
                  <a href="https://powerbi.microsoft.com/en-us/" target="_blank"><h4>Power BI</h4></a>
                  <p>Nền tảng trực quan hoá dữ liệu của Microsoft. Áp dụng Business Intelligence.</p>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>

    </div>
    <!-- container end -->
  </section>
  <!-- Features-Section-end -->

  <!-- Download-Free-App-section-Start  -->
  <section class="row_am free_app_section" id="getstarted">
    <!-- container start -->
    <div class="container">
      <div class="free_app_inner" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="100">
        <!-- row start -->
        <div class="row">
          <!-- content -->
          <div class="col-md-6">
            <div class="free_text">
              <div class="section_title">
                <h2>Thử sử dụng ngay EMBI</h2>
                <p>Áp dụng BI - Business Intelligence cho doanh nghiệp của bạn ngay hôm nay.</p>
              </div>
              <ul class="app_btn">
                <li class="nav-item">
                  <a class="nav-link dark_btn" href="https://app.powerbi.com/view?r=eyJrIjoiZTg1NThiNDctYjkzYS00ZDQyLWI3MGUtNjM2MDVkYzFhYzkxIiwidCI6ImI3OTllMDhkLWM2YzAtNGI4ZS1iMWU3LTUyYTdjYzNmMThlYSIsImMiOjEwfQ%3D%3D" target="_blank">DEMO</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link dark_btn" href="catalogue.html" target="_blank">CATALOGUE</a>
                </li>
              </ul>
            </div>
          </div>

          <!-- images -->
          <div class="col-md-6">
            <div class="free_img">
              <img class="mobile_mockup ml-5" src="images/download-screen01.webp" alt="image" >
<!--              <img class="mobile_mockup" src="images/download-screen01.webp" alt="image" >-->
            </div>
          </div>
        </div>
        <!-- row end -->
      </div>
    </div>
    <!-- container end -->
  </section>
  <!-- Download-Free-App-section-end  -->

  <!-- Story-Section-Start -->
  <section class="row_am latest_story" id="blog">
    <!-- container start -->
    <div class="container">
      <div class="section_title" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="100">
        <h2>Đọc <span>những câu chuyện</span> gần đây</h2>
        <p>Về dữ liệu, các giải pháp về dữ liệu, chuyển đổi số<br> giúp phát triển doanh nghiệp.</p>
      </div>
      <!-- row start -->
      <div class="row">
        <!-- story -->
        <div class="col-md-4">
          <div class="story_box" data-aos="fade-up" data-aos-duration="1500">
            <div class="story_img">
              <img src="images/story01.webp" style="width: 362px; height: 270px" alt="image" >
            </div>
            <div class="story_text">
              <h3>4 Nguyên nhân khiến Dashboard trở nên "quyền lực"</h3>
              <p>Dashboard giúp nắm bắt được ngay thông tin KPI chi tiết...</p>
              <a href="https://blog.meowtech.vn" target="_blank">XEM THÊM</a>
            </div>
          </div>
        </div>

        <!-- story -->
        <div class="col-md-4">
          <div class="story_box" data-aos="fade-up" data-aos-duration="1500">
            <div class="story_img">
              <img src="images/story02.webp" style="width: 362px; height: 270px" alt="image" >
            </div>
            <div class="story_text">
              <h3>5 Cái lợi của Dashboard nhân sự</h3>
              <p>1. Theo dõi nhân số chính xác và quản lý nguồn lực mọi lúc mọi nơi
                Khác với báo cáo truyền thống...</p>
              <a href="https://blog.meowtech.vn" target="_blank">XEM THÊM</a>
            </div>
          </div>
        </div>

        <!-- story -->
        <div class="col-md-4">
          <div class="story_box" data-aos="fade-up" data-aos-duration="1500">
            <div class="story_img">
              <img src="images/story03.webp" style="width: 362px; height: 270px" alt="image" >
            </div>
            <div class="story_text">
              <h3>3 Nguyên tắc lập Dashboard chuyên nghiệp</h3>
              <p>Dashboard là một giao diện số dùng để tổng hợp và trình bày dữ liệu từ nhiều nguồn khác nhau của tổ chức...</p>
              <a href="https://blog.meowtech.vn" target="_blank">XEM THÊM</a>
            </div>
          </div>
        </div>
      </div>
      <!-- row end -->
    </div>
    <!-- container end -->
  </section>
  <!-- Story-Section-end -->

  <!-- Trusted Section start -->
  <section class="row_am trusted_section">
    <!-- container start -->
    <div class="container">
      <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
        <!-- h2 -->
        <h2>Được tin dùng <span>100+</span> doanh nghiệp.</h2>
        <!-- p -->
        <p>EMBI mang Business Intelligence áp dụng cho quản lí nhân sự trong doanh nghiệp.</p>
      </div>

      <!-- logos slider start -->
      <div class="company_logos" >
        <div id="company_slider" class="owl-carousel owl-theme">
          <div class="item">
            <div class="logo">
              <img src="images/paypal.webp" alt="image" >
            </div>
          </div>
          <div class="item">
            <div class="logo">
              <img src="images/spoty.webp" alt="image" >
            </div>
          </div>
          <div class="item">
            <div class="logo">
              <img src="images/shopboat.webp" alt="image" >
            </div>
          </div>
          <div class="item">
            <div class="logo">
              <img src="images/slack.webp" alt="image" >
            </div>
          </div>
          <div class="item">
            <div class="logo">
              <img src="images/envato.webp" alt="image" >
            </div>
          </div>
          <div class="item">
            <div class="logo">
              <img src="images/paypal.webp" alt="image" >
            </div>
          </div>
          <div class="item">
            <div class="logo">
              <img src="images/spoty.webp" alt="image" >
            </div>
          </div>
          <div class="item">
            <div class="logo">
              <img src="images/shopboat.webp" alt="image" >
            </div>
          </div>
        </div>
      </div>
      <!-- logos slider end -->
    </div>
    <!-- container end -->
  </section>
  <!-- Trusted Section ends -->

  <!-- News-Letter-Section-Start -->
  <section class="newsletter_section">
    <!-- container start -->
    <div class="container">
      <div class="newsletter_box">
        <div class="section_title" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="100">
          <!-- h2 -->
          <h2>Đăng ký ngay hôm nay</h2>
          <!-- p -->
          <p>Vui lòng điền thông tin email của bạn</p>
        </div>
        <form if="formSecond" action="" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="100">
          <div class="form-group">
            <input id="emailSecond" type="email" class="form-control" placeholder="Nhập email của bạn">
          </div>
          <div class="form-group">
            <button id="btnSubmitSecond" class="btn">ĐĂNG KÝ</button>
          </div>
          <div id="messageSecond">

          </div>
          <script>
            $(document).ready(function() {
                                    $('#btnSubmitSecond').on('click', function() {
                                    $("#btnSubmitSecond").attr("disabled", "disabled");
                                    var email = $('#emailSecond').val();
                                    if(email!=""){
                                        console.log(email);
                                        $.ajax({
                                            url: "insert.php",
                                            type: "POST",
                                            data: email,
                                            cache: false,
                                            success: function(dataResult){
                                                var dataResult = JSON.parse(dataResult);
                                                if(dataResult.statusCode==200){
                                                    $("#btnSubmitSecond").removeAttr("disabled");
                                                    $('#formSecond').find('input:text').val('');
                                                    $("#messageSecond").show();
                                                    $('#messageSecond').html('Email has been sent successfully');
                                                }
                                                else if(dataResult.statusCode==201){
                                                    alert("Error occured !");
                                                }
                                            }
                                        });
                                        }
                                        else{
                                            alert('Please fill all the field !');
                                        }
                                    });
                                });
          </script>
        </form>
      </div>
    </div>
    <!-- container end -->
  </section>
  <!-- News-Letter-Section-end -->

  <!-- Footer-Section start -->
  <footer>
    <!-- section bg -->
    <div class="footer_bg"> <img src="images/section-bg.webp" alt="image" > </div>
    <div class="top_footer" id="contact">
      <!-- container start -->
      <div class="container">
        <!-- row start -->
        <div class="row">
          <!-- footer link 1 -->
          <div class="col-lg-4 col-md-6 col-12">
            <div class="abt_side">
              <div class="logo"> <a href="https://meowtech.vn" target="_blank"><img src="images/logo.webp" alt="image" ></a></div>
              <ul>
                <li><a href="#">help@meowtech.vn</a></li>
                <li><a href="#">+84-355-206-653</a></li>
              </ul>
              <ul class="social_media">
                <li><a href="https://www.facebook.com/meowtechvn" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                <li><a href="https://www.instagram.com/meowtechvn" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="https://g.page/r/CarwTJ5DitVnEAE" target="_blank"><i class="fa-brands fa-google"></i></a></li>
                <li><a href="https://www.linkedin.com/company/meowtech" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
              </ul>
            </div>
          </div>

          <!-- footer link 2 -->
          <div class="col-lg-3 col-md-6 col-12">
            <div class="links">
              <h3>Khám phá</h3>
              <ul>
                <li><a href="https://meowtech.vn/" target="_blank">Về MEOWTECH</a></li>
                <li><a href="https://meowtech.vn/contact.php" target="_blank">Đăng ký dùng thử</a></li>
                <li><a href="https://meowtech.vn/service.php" target="_blank">Dịch vụ chúng tôi</a></li>
                <li><a href="https://meowtech.vn/careers.php" target="_blank">Tuyển dụng</a></li>
                <li><a href="https://meowtech.vn/contact.php" target="_blank">Liên hệ</a></li>
              </ul>
            </div>
          </div>


          <!-- footer link 4-->
          <div class="col-lg-3 col-md-6 col-12">
            <div class="links">
              <h3>Blogs</h3>
              <ul>
                <li><a href="https://blog.meowtech.vn"target="_blank">Web 3D</a></li>
                <li><a href="https://blog.meowtech.vn" target="_blank">Data Solutions</a></li>
                <li><a href="https://blog.meowtech.vn" target="_blank">Marketing Automation</a></li>
              </ul>
            </div>
          </div>

          <!-- footer link 4 -->
          <div class="col-lg-2 col-md-6 col-12">
            <div class="try_out">
              <h3>Thử dùng ngay</h3>
              <ul class="app_btn">
                <li>
                  <a href="https://app.powerbi.com/view?r=eyJrIjoiZTg1NThiNDctYjkzYS00ZDQyLWI3MGUtNjM2MDVkYzFhYzkxIiwidCI6ImI3OTllMDhkLWM2YzAtNGI4ZS1iMWU3LTUyYTdjYzNmMThlYSIsImMiOjEwfQ%3D%3D" target="_blank">
                    DEMO
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- row end -->
      </div>
      <!-- container end -->
    </div>

    <!-- last footer -->
    <div class="bottom_footer">
      <!-- container start -->
      <div class="container">
        <!-- row start -->
        <div class="row">
          <div class="col-md-6">
            <p></p>
          </div>
          <div class="col-md-6">
            <p  class="developer_text">© 2023. All rights reserved by <a href="https://meowtech.vn/" target="blank">MeowTech CO., LTD.</a></p>
          </div>
        </div>
        <!-- row end -->
      </div>
      <!-- container end -->
    </div>

    <!-- go top button -->
    <div class="go_top">
      <span><img src="images/go_top.webp" alt="image" ></span>
    </div>
  </footer>
  <!-- Footer-Section end -->

  <!-- VIDEO MODAL -->
  <div class="modal fade youtube-video" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <button id="close-video" type="button" class="button btn btn-default text-right" data-dismiss="modal">
          <i class="icofont-close-line-circled"></i>
        </button>
        <div class="modal-body">
          <div id="video-container" class="video-container">
            <iframe id="youtubevideo" src="https://youtu.be/b9p0DcKJLr8" width="640" height="360" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>

  <div class="purple_backdrop"></div>

</div>
<!-- Page-wrapper-End -->

<!-- Jquery-js-Link -->
<script src="js/jquery.js"></script>
<!-- owl-js-Link -->
<script src="js/owl.carousel.min.js"></script>
<!-- bootstrap-js-Link -->
<script src="js/bootstrap.min.js"></script>
<!-- aos-js-Link -->
<script src="js/aos.js"></script>
<!-- main-js-Link -->
<script src="js/main.js"></script>
<script src="https://kit.fontawesome.com/ea347ce605.js" crossorigin="anonymous"></script>


</body>

</html>