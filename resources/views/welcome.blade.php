<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>pattarawit Technology</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('frontend/assets/img/logos/pa.jpg') }}" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="{{ asset('frontend/css/styles.css')}}">
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">

                <a class="navbar-brand" href="#page-top">pattarawit technology</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#services">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">shop</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">about</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Welcome To</div>
                <div class="masthead-heading text-uppercase">pattarawit Technology</div>
                <div class="row justify-content-center">
                    <div class="col-2">
                        <a class="btn btn-primary btn-xl text-uppercase" href="{{ route('login') }}">Login</a>
                    </div>
                    <div class="col-2">
                        <a class="btn btn-primary btn-xl text-uppercase" href="{{ route('register') }}">Register</a>
                    </div>
                </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h1 class="section-heading text-uppercase">home</h1>
                    <br><h3 class="section-subheading text-muted">วิทยุสื่อสาร ระบบ 4G หยุดทุดขีดจำกัด ด้านการสื่อสาร</h3></br>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-broadcast-tower fa-stack-1x fa-inverse"></i>
                        </span>
                        <h3 class="my-3">ระบบ iPOC System</h3>
                        <p class="text-muted">ไร้เสียงรบกวน ครอบคลุมทุกพื้นที่ แม้ในอาคารสูงที่สุด
                            <br>ในประเทศไทยเหนือขั้นกว่าวิทยุสื่อสารทั่วไป</br></p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-city fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">วิทยุสื่อสารสำหรับองค์กร</h4>
                        <p class="text-muted">การสื่อสารมีความสำคัญในทุกองค์กร 
                                <br>ประสานงานในทุกภาคส่วนอย่างมืออาชีพ</br></p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-pager fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Gateway System</h4>
                        <p class="text-muted">สามารถใช้งานร่วมกับวิทยุสื่อสารรูปแบบเดิมได้ 
                            <br>ใช้งานง่ายไร้ข้อจำกัด เมื่อติดตั้งระบบเกตเวย์</br></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">shop</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{ asset('frontend/assets/img/portfolio/11.jpg') }}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">T.C.COM TCM-5</div>
                                <div class="portfolio-caption-subheading text-muted">วิทยุเอกชน</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">

                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{ asset('frontend/assets/img/portfolio/222.jpg') }}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">SPENDER TC-246H Plus</div>
                                <div class="portfolio-caption-subheading text-muted">วิทยุเอกชน</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{ asset('frontend/assets/img/portfolio/333.jpg') }}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">ICOM IC-80FX PLUS</div>
                                <div class="portfolio-caption-subheading text-muted">วิทยุเอกชน</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{ asset('frontend/assets/img/portfolio/444.jpg') }}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">SPENDER DHS-8000H</div>
                                <div class="portfolio-caption-subheading text-muted">วิทยุราชการ</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{ asset('frontend/assets/img/portfolio/555.jpg') }}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">SPENDER GM-888MTV</div>
                                <div class="portfolio-caption-subheading text-muted">วิทยุราชการ</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{ asset('frontend/assets/img/portfolio/66.jpg') }}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">MOTOROLA XiR-P8268</div>
                                <div class="portfolio-caption-subheading text-muted">วิทยุราชการ</div>
                            </div>
                        </div>
                    </div> 
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 7-->
                        <br><div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal7">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{ asset('frontend/assets/img/portfolio/777.jpg') }}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">YAESU FM-9012</div>
                                <div class="portfolio-caption-subheading text-muted">วิทยุสมัครเล่น</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 8-->
                        <br><div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal8">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{ asset('frontend/assets/img/portfolio/888.jpg') }}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">T.C.COM TCM-1 PLUS</div>
                                <div class="portfolio-caption-subheading text-muted">วิทยุสมัครเล่น</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-8">
                        <!-- Portfolio item 9-->
                        <br><div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal9">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{ asset('frontend/assets/img/portfolio/999.jpg') }}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">SPEEDER SP-IP4 PLUS</div>
                                <div class="portfolio-caption-subheading text-muted">วิทยุสมัครเล่น</div>
                            </div>
                        </div>
                    </div> 
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 10-->
                        <br><div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal10">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{ asset('frontend/assets/img/portfolio/1010.jpg') }}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">ICOM IC-5000FX</div>
                                <div class="portfolio-caption-subheading text-muted">สินค้าเข้าใหม่</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 11-->
                        <br><div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal11">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{ asset('frontend/assets/img/portfolio/1111.jpg') }}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">MOTOROLA CP-246i</div>
                                <div class="portfolio-caption-subheading text-muted">สินค้าเข้าใหม่</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-8">
                        <!-- Portfolio item 12-->
                        <br><div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal12">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{ asset('frontend/assets/img/portfolio/1214.jpg') }}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">ICOM IC-86FX</div>
                                <div class="portfolio-caption-subheading text-muted">สินค้าเข้าใหม่</div>
                            </div>
                        </div>
                    </div> 
                </div>
        </section>
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">about</h2>
                    <h3 class="section-subheading text-muted">อาณาจักรแห่งการสื่อสาร ว่องไวด้านบริการ ศูนย์บริการที่ได้มาตรฐาน บริการด้วยรอยยิ้มที่เป็นกันเอง พร้อมมอบสิ่งที่ดีที่สุดให้แก่ลูกค้า</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{ asset('frontend/assets/img/team/a1.jpg') }}" alt="..." />
                            
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{ asset('frontend/assets/img/team/a2.jpg') }}" alt="..." />
                            
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{ asset('frontend/assets/img/team/a3.jpg') }}" alt="..." />
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted"><br><h3>ภัทรวิชญ์ เทคโนโลยี</h3></br>
                        ภัทรวิชญ์ เทคโนโลยี ให้บริการเกี่ยวกับวิทยุสื่อสาร ที่ใช้ภายในองค์กรด้วยประสบการณ์ด้านวิทยุสื่อสารมามากกว่าสิบปี ทางเราได้พัฒนาคุณภาพด้านสินค้าและบริการอย่างต่อเนื่อง 
                        ปัจจุบันเรามีพื้นที่ให้บริการและสถานที่จอดรถสำหรับลูกค้ากว้างขวางมากยิ่งขึ้น ลูกค้าสามารถนั่งรอรับสินค้าหรือรอรับเครื่องซ่อมได้อย่างสะดวกสบาย 
                        ทางเรามีความเข้าใจปัญหาด้านวิทยุสื่อสารเป็นอย่างดี ยินดีให้คำปรึกษาเกี่ยวกับการใช้งานด้านต่างๆ บริการของเรา มีดังนี้
                        <br>- จำหน่ายวิทยุสื่อสาร
                        <br>- ให้เช่าวิทยุสื่อสารทั้งแบบ รายวัน-รายเดือน-รายปี
                        <br>- รับซ่อมวิทยุสื่อสาร 
                        <br>- บริการตอบคำถามด้านการใช้งาน
                        <br>- บริการให้คำปรึกษาปัญหาวิทยุสื่อสารในอาคารสูง</p>
                    </div>
            </div>
        </section>
        <!-- Clients-->
        <div class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="{{ asset('frontend/assets/img/logos/ya.jpg') }}" alt="..." /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="{{ asset('frontend/assets/img/logos/ic.jpg') }}" alt="..." /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="{{ asset('frontend/assets/img/logos/sp.jpg') }}" alt="..." /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="{{ asset('frontend/assets/img/logos/mo.jpg') }}" alt="..." /></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <div class="row justify-content-around">
                        <div class="col-md-6">
                            <h4 class="section-heading text-uppercase">
                                Contact Info :
                            <div class="form-group">
                                <!-- Name input-->
                                <br><input class="form-control" id="name" type="text" placeholder="Your Name *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <br><textarea class="form-control" placeholder="A message is required." id="floatingTextarea2" style="height: 350px"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                                <br><div class="form-group form-group-textarea mb-md-0"></div>
                            </div>
                        </div>
                        <div class="col-5">
                            <h4 class="section-heading text-uppercase">
                                Reservation Form :
                                <Br><br><i class="fas fa-phone-square-alt fa-2x"></i>   089-145-4782
                                <br><br> <i class="fab fa-line fa-2x"></i>    @pattarawit
                                <br><br> <i class="fas fa-map-pin fa-2x"></i></i>    เลขที่ 72 ซอยลาดปลาเค้า 48 <br>ถนนลาดปลาเค้า แขวงจรเข้บัว เขตลาดพร้าว กรุงเทพฯ 10230</h4>
                                <br><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3873.9250716399033!2d100.59926971483146!3d13.843536090288131!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29d6a3692b69d%3A0xfc1a6b86d0a89b8d!2z4Lir4LmJ4Liy4LiH4Lir4Li44LmJ4LiZ4Liq4LmI4Lin4LiZ4LiI4Liz4LiB4Lix4LiUIOC4oOC4seC4l-C4o-C4p-C4tOC4iuC4jeC5jCDguYDguJfguITguYLguJnguYLguKXguKLguLU!5e0!3m2!1sth!2sth!4v1674450177241!5m2!1sth!2sth" width="500" height="330" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                          </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-6">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br/>
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="col-md-6">
                    <div class="d-none" id="submitErrorMessage"><div class="text- text-danger mb-3">Error sending message!</div></div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Send Message</button></div>  
                </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-3">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 text-lg-start">Copyright &copy; Your Website 2021</div>
                    <div class="col-lg-3 text-lg-start">Distributed By <a href="https://themewagon.com/">Themewagon</a></div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="https://www.pattarawit.net/"><i class="fas fa-globe-africa"></i></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://th-th.facebook.com/people/%E0%B8%A0%E0%B8%B1%E0%B8%97%E0%B8%A3%E0%B8%A7%E0%B8%B4%E0%B8%8A%E0%B8%8D%E0%B9%8C-%E0%B9%80%E0%B8%97%E0%B8%84%E0%B9%82%E0%B8%99%E0%B9%82%E0%B8%A5%E0%B8%A2%E0%B8%B5-%E0%B8%A7%E0%B8%B4%E0%B8%97%E0%B8%A2%E0%B8%B8%E0%B8%AA%E0%B8%B7%E0%B9%88%E0%B8%AD%E0%B8%AA%E0%B8%B2%E0%B8%A3/100057429190893/"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://page.line.me/914eqcdn?openQrModal=true"><i class="fab fa-line"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://goo.gl/maps/L464obJewGGMHNAU9"><i class="fas fa-map-marker-alt"></i></i></a>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset('frontend/assets/img/close-icon.svg') }}" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">T.C.COM TCM-5</h2>
                                    <p class="item-intro text-muted">วิทยุเอกชน</p>
                                    <img class="img-fluid d-block mx-auto" src="{{ asset('frontend/assets/img/portfolio/111.jpg') }}"  alt="..." />
                                    <p><strong>ประเภท : </strong> วิทยุเอกชน (245 MHz.)
                                        <br><strong>ความถี่ : </strong> 245.000-245.9875 MHz.
                                        <br><strong>ยี่ห้อ : </strong> T.C.COM </br>
                                        <strong>รุ่น : </strong> TCM-5
                                    </p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>price :</strong>
                                            2,ุ150 THB 
                                        </li>
                                        <li>
                                            <strong>ID line :</strong>
                                            @pattarawit.net
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset('frontend/assets/img/close-icon.svg') }}" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">SPENDER TC-246H Plus</h2>
                                    <p class="item-intro text-muted">วิทยุเอกชน</p>
                                    <img class="img-fluid d-block mx-auto" src="{{ asset('frontend/assets/img/portfolio/22.jpg') }}" alt="..." />
                                    <p><strong>ประเภท : </strong> วิทยุเอกชน (245 MHz.)
                                        <br><strong>ความถี่ : </strong> 245.0000 MHz.-246.9875 MHz.
                                        <br><strong>ยี่ห้อ : </strong> SPENDER</br>
                                        <strong>รุ่น : </strong> TC-246H PLUS
                                    </p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>price :</strong>
                                            3,ุ890 THB 
                                        </li>
                                        <li>
                                            <strong>ID line :</strong>
                                            @pattarawit.net
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset('frontend/assets/img/close-icon.svg') }}" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">ICOM IC-80FX PLUS</h2>
                                    <p class="item-intro text-muted">วิทยุเอกชน</p>
                                    <img class="img-fluid d-block mx-auto" src="{{ asset('frontend/assets/img/portfolio/33.jpg') }}" alt="..." />
                                    <p><strong>ประเภท : </strong> วิทยุเอกชน (245 MHz.)
                                        <br><strong>ความถี่ : </strong> 245.0000-246.9875 MHz.
                                        <br><strong>ยี่ห้อ : </strong> ICOM </br>
                                        <strong>รุ่น : </strong> IC-80FX PLUS
                                    </p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>price :</strong>
                                            3,ุ500 THB 
                                        </li>
                                        <li>
                                            <strong>ID line :</strong>
                                            @pattarawit.net
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset('frontend/assets/img/close-icon.svg') }}" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">SPENDER DHS-8000H</h2>
                                    <p class="item-intro text-muted">วิทยุราชการ</p>
                                    <img class="img-fluid d-block mx-auto" src="{{ asset('frontend/assets/img/portfolio/44.jpg') }}" alt="..." />
                                    <p><strong>ประเภท : </strong> วิทยุราชการ VHF (136-174 MHz.)
                                        <br><strong>ความถี่ : </strong> 136.0000-174.0000 MHz.
                                        <br><strong>ยี่ห้อ : </strong> SPENDER </br>
                                        <strong>รุ่น : </strong> DHS-8000H
                                    </p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>price :</strong>
                                            4,ุ275 THB 
                                        </li>
                                        <li>
                                            <strong>ID line :</strong>
                                            @pattarawit.net
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 5 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset('frontend/assets/img/close-icon.svg') }}" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">SPENDER GM-888MTV                                    </h2>
                                    <p class="item-intro text-muted">วิทยุราชการ</p>
                                    <img class="img-fluid d-block mx-auto" src="{{ asset('frontend/assets/img/portfolio/555.jpg') }}" alt="..." />
                                    <p><strong>ประเภท : </strong> วิทยุราชการ VHF (136-174 MHz.)
                                        <br><strong>ความถี่ : </strong> 136.0000-174.0000 MHz.
                                        <br><strong>ยี่ห้อ : </strong> SPENDER</br>
                                        <strong>รุ่น : </strong> GM-888MTV
                                    </p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>price :</strong>
                                            13,ุ330 THB 
                                        </li>
                                        <li>
                                            <strong>ID line :</strong>
                                            @pattarawit.net
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 6 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset('frontend/assets/img/close-icon.svg') }}" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">MOTOROLA XiR-P8268</h2>
                                    <p class="item-intro text-muted">วิทยุราชการ</p>
                                    <img class="img-fluid d-block mx-auto" src="{{ asset('frontend/assets/img/portfolio/66.jpg') }}" alt="..." />
                                    <p><strong>ประเภท : </strong> วิทยุราชการ VHF (136-174 MHz.)
                                        <br><strong>ความถี่ : </strong> 136.0000-174.0000 MHz.
                                        <br><strong>ยี่ห้อ : </strong> MOTOROLA </br>
                                        <strong>รุ่น : </strong> XiR-P8268
                                    </p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>price :</strong>
                                            20,ุ500 THB 
                                        </li>
                                        <li>
                                            <strong>ID line :</strong>
                                            @pattarawit.net
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 7 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset('frontend/assets/img/close-icon.svg') }}" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">YAESU FM-9012</h2>
                                    <p class="item-intro text-muted">วิทยุสมัครเล่น</p>
                                    <img class="img-fluid d-block mx-auto" src="{{ asset('frontend/assets/img/portfolio/777.jpg') }}" alt="..." />
                                    <p><strong>ประเภท : </strong> วิทยุสมัครเล่น (144-147 MHz.)
                                        <br><strong>ความถี่ : </strong> 144.0000-147.0000 MHz.
                                        <br><strong>ยี่ห้อ : </strong>YAESU</br>
                                        <strong>รุ่น : </strong> FM-9012
                                    </p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>price :</strong>
                                            13,ุ330 THB 
                                        </li>
                                        <li>
                                            <strong>ID line :</strong>
                                            @pattarawit.net
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 8 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset('frontend/assets/img/close-icon.svg') }}" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">T.C.COM TCM-1 PLUS</h2>
                                    <p class="item-intro text-muted">วิทยุสมัครเล่น</p>
                                    <img class="img-fluid d-block mx-auto" src="{{ asset('frontend/assets/img/portfolio/88.jpg') }}" alt="..." />
                                    <p><strong>ประเภท : </strong> วิทยุสมัครเล่น (144-147 MHz.)
                                        <br><strong>ความถี่ : </strong> 144.0000-146.0000 MHz.
                                        <br><strong>ยี่ห้อ : </strong>T.C.COM</br>
                                        <strong>รุ่น : </strong> TCM-1 PLUS
                                    </p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>price :</strong>
                                            2,ุ570 THB 
                                        </li>
                                        <li>
                                            <strong>ID line :</strong>
                                            @pattarawit.net
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 9 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal9" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset('frontend/assets/img/close-icon.svg') }}" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">SPEEDER SP-IP4 PLUS</h2>
                                    <p class="item-intro text-muted">วิทยุสมัครเล่น</p>
                                    <img class="img-fluid d-block mx-auto" src="{{ asset('frontend/assets/img/portfolio/99.jpg') }}" alt="..." />
                                    <p><strong>ประเภท : </strong> วิทยุสมัครเล่น (144-147 MHz.)
                                        <br><strong>ความถี่ : </strong> 144.0000-147.0000 MHz.
                                        <br><strong>ยี่ห้อ : </strong>SPEEDER</br>
                                        <strong>รุ่น : </strong> SP-IP4 PLUS
                                    </p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>price :</strong>
                                            2,450 THB 
                                        </li>
                                        <li>
                                            <strong>ID line :</strong>
                                            @pattarawit.net
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 10 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal10" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset('frontend/assets/img/close-icon.svg') }}" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">ICOM IC-5000FX</h2>
                                    <p class="item-intro text-muted">วิทยุเอกชน</p>
                                    <img class="img-fluid d-block mx-auto" src="{{ asset('frontend/assets/img/portfolio/1010.jpg') }}" alt="..." />
                                    <p><strong>ประเภท : </strong> วิทยุเอกชน (245 MHz.)
                                        <br><strong>ความถี่ : </strong> 245.000-245.9875 MHz.
                                        <br><strong>ยี่ห้อ : </strong>ICOM</br>
                                        <strong>รุ่น : </strong> IC-5000FX
                                    </p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>price :</strong>
                                            10,ุ900 THB 
                                        </li>
                                        <li>
                                            <strong>ID line :</strong>
                                            @pattarawit.net
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 11 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal11" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset('frontend/assets/img/close-icon.svg') }}" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">MOTOROLA CP-246i</h2>
                                    <p class="item-intro text-muted">วิทยุเอกชน</p>
                                    <img class="img-fluid d-block mx-auto" src="{{ asset('frontend/assets/img/portfolio/1111.jpg') }}" alt="..." />
                                    <p><strong>ประเภท : </strong> วิทยุเอกชน (245 MHz.)
                                        <br><strong>ความถี่ : </strong> 245.0000-245.9875 MHz.
                                        <br><strong>ยี่ห้อ : </strong>MOTOROLA</br>
                                        <strong>รุ่น : </strong> CP-246i
                                    </p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>price :</strong>
                                            7,ุ900 THB 
                                        </li>
                                        <li>
                                            <strong>ID line :</strong>
                                            @pattarawit.net
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 12 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal12" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset('frontend/assets/img/close-icon.svg') }}" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">ICOM IC-86FX</h2>
                                    <p class="item-intro text-muted">วิทยุเอกชน</p>
                                    <img class="img-fluid d-block mx-auto" src="{{ asset('frontend/assets/img/portfolio/1213.jpg') }}" alt="..." />
                                    <p><strong>ประเภท : </strong> วิทยุเอกชน (245 MHz.)
                                        <br><strong>ความถี่ : </strong> 245.0000-246.9875 MHz.
                                        <br><strong>ยี่ห้อ : </strong>ICOM</br>
                                        <strong>รุ่น : </strong> IC-86FX
                                    </p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>price :</strong>
                                            4,ุ890 THB 
                                        </li>
                                        <li>
                                            <strong>ID line :</strong>
                                            @pattarawit.net
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('fronted/js/scripts.js')}}"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
