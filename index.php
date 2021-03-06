﻿<?php
$color = 'default';
$all_colors = Array('blue', 'red');
if(isset($_GET['color']) && in_array($_GET['color'], $all_colors))
{
    $color = $_GET['color'];
}
?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>Brand</title>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--    Google Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=El+Messiri|Montserrat:800&display=swap">
    <!--    Bootstrap RTL-->
    <link rel="stylesheet" href="https://unpkg.com/@laylazi/bootstrap-rtl@4.4.101/dist/css/bootstrap-rtl.css">
    <!--    Font Awesome icons pack-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <!--    FancyBox 3-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css"/>
    <!--    Swiper.JS-->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.2/css/swiper.min.css'>
    <!--    Burger Menu Button-->
    <link rel="stylesheet" href="./css/burger-btn.css">
    <!--    My stylesheet-->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Color Theme -->
    <link rel="stylesheet" href="./css/<?php echo $color;?>-skin.css">
</head>
<body>
<header id="home">
    <nav id="navbar" class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="#home">
            <svg  class="logo" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
             stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                 class="d-block mx-auto">
                <circle cx="12" cy="12" r="10"></circle>
                <line x1="14.31" y1="8" x2="20.05" y2="17.94"></line>
                <line x1="9.69" y1="8" x2="21.17" y2="8"></line>
                <line x1="7.38" y1="12" x2="13.12" y2="2.06"></line>
                <line x1="9.69" y1="16" x2="3.95" y2="6.06"></line>
                <line x1="14.31" y1="16" x2="2.83" y2="16"></line>
                <line x1="16.62" y1="12" x2="10.88" y2="21.94"></line>
            </svg>

        </a>

        <div id="hamburger" class="hamburglar d-md-none">
            <div class="burger-icon">
                <div class="burger-container">
                    <span class="burger-bun-top"></span>
                    <span class="burger-filling"></span>
                    <span class="burger-bun-bot"></span>
                </div>
            </div>

        </div>

        <a class="navbar-brand d-md-none" href="#">
            <svg class="logo" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                 class="d-block mx-auto">
                <circle cx="12" cy="12" r="10"></circle>
                <line x1="14.31" y1="8" x2="20.05" y2="17.94"></line>
                <line x1="9.69" y1="8" x2="21.17" y2="8"></line>
                <line x1="7.38" y1="12" x2="13.12" y2="2.06"></line>
                <line x1="9.69" y1="16" x2="3.95" y2="6.06"></line>
                <line x1="14.31" y1="16" x2="2.83" y2="16"></line>
                <line x1="16.62" y1="12" x2="10.88" y2="21.94"></line>
            </svg>

        </a>

        <ul class="navbar-nav d-md-flex justify-content-around">
            <li class="nav-item">
                <a class="nav-link" href="#home">الرئيسية<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#service">خدماتنا</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#portfolio">أعمالنا</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#features">لماذا نحن</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#pricing">أسعارنا</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact">اتصل بنا</a>
            </li>
        </ul>

    </nav>

    <nav id="mobile-nav" class="py-2 mb-3 d-md-none">
        <div class="mx-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none"
            class="logo" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                 class="d-inline-block">
                <circle cx="12" cy="12" r="10"></circle>
                <line x1="14.31" y1="8" x2="20.05" y2="17.94"></line>
                <line x1="9.69" y1="8" x2="21.17" y2="8"></line>
                <line x1="7.38" y1="12" x2="13.12" y2="2.06"></line>
                <line x1="9.69" y1="16" x2="3.95" y2="6.06"></line>
                <line x1="14.31" y1="16" x2="2.83" y2="16"></line>
                <line x1="16.62" y1="12" x2="10.88" y2="21.94"></line>
            </svg>
        </div>
    </nav>

    <section class="py-md-3">
        <div id="home-carousel" class="carousel slide " data-touch="false" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#home-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#home-carousel" data-slide-to="1"></li>
                <li data-target="#home-carousel" data-slide-to="2"></li>
            </ol>
            <div class="container">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="background" style="background: url('./img/background1.jpg')"></div>
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Example headline.</h1>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi
                                    porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id
                                    elit.</p>
                                <p><a class="btn btn-lg btn-outline-light" href="#" role="button">Sign up today</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="background" style="background: url('./img/background2.jpeg')"></div>
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Another example headline.</h1>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi
                                    porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id
                                    elit.</p>
                                <p><a class="btn btn-lg btn-outline-light" href="#" role="button">Learn more</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="background" style="background: url('./img/background3.jpg')"></div>
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>One more for good measure.</h1>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi
                                    porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id
                                    elit.</p>
                                <p><a class="btn btn-lg btn-outline-light" href="#" role="button">Browse gallery</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#home-carousel" role="button" data-slide="prev">
                <i class="fas fa-chevron-circle-right fa-2x d-none d-lg-block"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#home-carousel" role="button" data-slide="next">
                <i class="fas fa-chevron-circle-left fa-2x d-none d-lg-block"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
</header>
<section id="service" class="section md-padding">

    <div class="container">

        <div class="section-header text-center">
            <h2 class="title">خدماتنا</h2>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="service">
                    <i class="far fa-gem"></i>
                    <h3>تطوير التطبيقات</h3>
                    <p>نص قصير مساعد لوصف الخدمة والترويج لها.</p>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 col-12">
                <div class="service">
                    <i class="fa fa-rocket"></i>
                    <h3>تطوير مواقع الويب</h3>
                    <p>نص قصير مساعد لوصف الخدمة والترويج لها.</p>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 col-12">
                <div class="service">
                    <i class="fa fa-cogs"></i>
                    <h3>الإستضافة</h3>
                    <p>نص قصير مساعد لوصف الخدمة والترويج لها.</p>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 col-12">
                <div class="service">
                    <i class="fas fa-gem"></i>
                    <h3>التسويق الإلكتروني</h3>
                    <p>نص قصير مساعد لوصف الخدمة والترويج لها.</p>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 col-12">
                <div class="service">
                    <i class="fas fa-pencil-alt"></i>
                    <h3>تصميم العلامة التجارية</h3>
                    <p>نص قصير مساعد لوصف الخدمة والترويج لها.</p>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 col-12">
                <div class="service">
                    <i class="fas fa-flask"></i>
                    <h3>الدعم الدائم</h3>
                    <p>نص قصير مساعد لوصف الخدمة والترويج لها.</p>
                </div>
            </div>

        </div>

    </div>

</section>

<section id="portfolio" class="section md-padding bg-light">

    <div class="container">
        <div class="section-header text-center">
            <h2 class="title">أعمالنا المميزة</h2>
        </div>
        <div class="row">
            <div class="col-md-4 col-6 work">
                <img class="img-fluid" src="./img/work1.jpg" alt="">
                <div class="overlay"></div>
                <div class="work-content">
                    <span>الفئة</span>
                    <h3>اسم المشروع</h3>
                    <div class="work-link">
                        <a href="#"><i class="fas fa-external-link-alt"></i></a>
                        <a data-fancybox="gallery" href="./img/work1.jpg"><i class="fa fa-search"></i></a>
                    </div>
                </div>
            </div>


            <div class="col-md-4 col-6 work">
                <img class="img-fluid" src="./img/work2.jpg" alt="">
                <div class="overlay"></div>
                <div class="work-content">
                    <span>الفئة</span>
                    <h3>اسم المشروع</h3>
                    <div class="work-link">
                        <a href="#"><i class="fas fa-external-link-alt"></i></a>
                        <a data-fancybox="gallery" href="./img/work2.jpg"><i class="fa fa-search"></i></a>
                    </div>
                </div>
            </div>


            <div class="col-md-4 col-6 work">
                <img class="img-fluid" src="./img/work3.jpg" alt="">
                <div class="overlay"></div>
                <div class="work-content">
                    <span>الفئة</span>
                    <h3>اسم المشروع</h3>
                    <div class="work-link">
                        <a href="#"><i class="fas fa-external-link-alt"></i></a>
                        <a data-fancybox="gallery" href="./img/work3.jpg"><i class="fa fa-search"></i></a>
                    </div>
                </div>
            </div>


            <div class="col-md-4 col-6 work">
                <img class="img-fluid" src="./img/work4.jpg" alt="">
                <div class="overlay"></div>
                <div class="work-content">
                    <span>الفئة</span>
                    <h3>اسم المشروع</h3>
                    <div class="work-link">
                        <a href="#"><i class="fas fa-external-link-alt"></i></a>
                        <a data-fancybox="gallery" href="./img/work4.jpg"><i class="fa fa-search"></i></a>
                    </div>
                </div>
            </div>


            <div class="col-md-4 col-6 work">
                <img class="img-fluid" src="./img/work5.jpg" alt="">
                <div class="overlay"></div>
                <div class="work-content">
                    <span>الفئة</span>
                    <h3>اسم المشروع</h3>
                    <div class="work-link">
                        <a href="#"><i class="fas fa-external-link-alt"></i></a>
                        <a data-fancybox="gallery" href="./img/work5.jpg"><i class="fa fa-search"></i></a>
                    </div>
                </div>
            </div>


            <div class="col-md-4 col-6 work">
                <img class="img-fluid" src="./img/work6.jpg" alt="">
                <div class="overlay"></div>
                <div class="work-content">
                    <span>الفئة</span>
                    <h3>اسم المشروع</h3>
                    <div class="work-link">
                        <a href="#"><i class="fas fa-external-link-alt"></i></a>
                        <a data-fancybox="gallery" href="./img/work6.jpg"><i class="fa fa-search"></i></a>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section>

<section id="features" class="section md-padding">

    <div class="container">
        <div class="section-header">
            <h2 class="title">لماذا نحن</h2>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <p>
                    لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في
                    صناعات المطابع ودور النشر.
                </p>
                <div class="feature">
                    <i class="fa fa-check"></i>
                    <p>كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر</p>
                </div>
                <div class="feature">
                    <i class="fa fa-check"></i>
                    <p>عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص</p>
                </div>
                <div class="feature">
                    <i class="fa fa-check"></i>
                    <p> لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف</p>
                </div>
                <div class="feature">
                    <i class="fa fa-check"></i>
                    <p> خمسة قرون من الزمن لم تقضي على هذا النص،</p>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div id="about-carousel" class="carousel slide slide carousel-fade" data-interval="3000"
                     data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#about-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#about-carousel" data-slide-to="1"></li>
                        <li data-target="#about-carousel" data-slide-to="2"></li>
                        <li data-target="#about-carousel" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="./img/about1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="./img/about2.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="./img/about1.jpg" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="./img/about2.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#about-carousel" role="button" data-slide="prev">
                        <i class="fa fa-angle-right"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#about-carousel" role="button" data-slide="next">
                        <i class="fa fa-angle-left"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="pricing" class="section md-padding bg-light">

    <div class="container">

        <div class="section-header text-center">
            <h2 class="title">جدول التسعير</h2>
        </div>

        <div class="row">
            <div class="swiper-container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->

                    <div class="swiper-slide">
                        <div class="pricing">
                            <div class="price-head">
                                <span class="price-title">االخطة الأساسية</span>
                                <div class="price">
                                    <h3>$9<span class="duration">/ شهر</span></h3>
                                </div>
                            </div>
                            <ul class="price-content">
                                <li>
                                    <p>1 جيجابايت من التخزين</p>
                                </li>
                                <li>
                                    <p> الحد الشهري 5 جيجابايت</p>
                                </li>
                                <li>
                                    <p>دعم 24 ساعة</p>
                                </li>
                            </ul>
                            <div class="price-btn">
                                <button class="btn btn-outline-success">اشتري اللآن</button>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="pricing recommended">
                            <div class="price-head">
                                <span class="price-title">االخطة الفضية</span>
                                <div class="price">
                                    <h3>$19<span class="duration">/ شهر</span></h3>
                                </div>
                            </div>
                            <ul class="price-content">
                                <li>
                                    <p>1 جيجابايت من التخزين</p>
                                </li>
                                <li>
                                    <p> الحد الشهري 5 جيجابايت</p>
                                </li>
                                <li>
                                    <p>دعم 24 ساعة</p>
                                </li>
                            </ul>
                            <div class="price-btn">
                                <button class="btn btn-outline-success">اشتري اللآن</button>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="pricing">
                            <div class="price-head">
                                <span class="price-title">االخطة الذهبية</span>
                                <div class="price">
                                    <h3>$39<span class="duration">/ شهر</span></h3>
                                </div>
                            </div>
                            <ul class="price-content">
                                <li>
                                    <p>1 جيجابايت من التخزين</p>
                                </li>
                                <li>
                                    <p> الحد الشهري 5 جيجابايت</p>
                                </li>
                                <li>
                                    <p>دعم 24 ساعة</p>
                                </li>
                            </ul>
                            <div class="price-btn">
                                <button class="btn btn-outline-success">اشتري اللآن</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="section md-padding">
    <div class="section-header text-center">
        <h2 class="title">اتصل بنا</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-6 col-md-4">
                            <div class="contact">
                                <i class="fa fa-envelope"></i>
                                <h3>البريد الإلكتروني</h3>
                                <p><a href="mailto:info@example.com">info@example.com</a></p>
                            </div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="contact">
                                <i class="fa fa-phone"></i>
                                <h3>رقم الهاتف</h3>
                                <p style="direction: ltr;"><a href="tel:+905314554565">+90 531 455 45 65</a></p>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="contact">
                                <i class="fa fa-map-marker"></i>
                                <h3>العنوان</h3>
                                <p><a href="#Link-to-Google-maps">Fatih, Istanbul</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 sm-padding">
                <div class="container-fluid">
                    <div class="row justify-content-around">
                        <div class="col-12 col-md-8">
                            <form>
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="name">الاسم الكامل</label>
                                            <input type="text" class="form-control" id="name" placeholder="أحمد سمير">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="email">البريد الإلكتروني</label>
                                            <input type="email" class="form-control" id="email"
                                                   placeholder="name@example.com">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="subjet">الموضوع</label>
                                    <input type="text" class="form-control" id="subjet" placeholder="....">
                                </div>
                                <div class="form-group">
                                    <label for="message">رسالتك</label>
                                    <textarea class="form-control" id="message" rows="3"></textarea>
                                </div>
                                <div class="d-flex">
                                    <input type="submit" value="إرسال"
                                           class="mx-auto btn btn-outline-success py-2 px-5 my-4">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="bg-dark pb-5 p-md-0">
    <div class="container">
        <div class="row w-100 justify-content-center">
            <div class="col-md-6 col-12 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" viewBox="0 0 24 24" fill="none"
                     stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="d-block mx-auto py-4 ">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="14.31" y1="8" x2="20.05" y2="17.94"></line>
                    <line x1="9.69" y1="8" x2="21.17" y2="8"></line>
                    <line x1="7.38" y1="12" x2="13.12" y2="2.06"></line>
                    <line x1="9.69" y1="16" x2="3.95" y2="6.06"></line>
                    <line x1="14.31" y1="16" x2="2.83" y2="16"></line>
                    <line x1="16.62" y1="12" x2="10.88" y2="21.94"></line>
                </svg>
                <ul class="social-links">
                    <li>
                        <a href="#" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank">
                            <i class="fab fa-github"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <p class="copyrights m-0 mt-5 py-3 py-md-0">COPYRIGHT © 2020. ALL RIGHTS RESERVED. DESIGNED BY <a
            href="#">Ammar Oker</a></p>
</footer>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.2/js/swiper.min.js'></script>
<script src="./js/script.js"></script>

</body>
</html>