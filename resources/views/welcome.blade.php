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
                @foreach ($product as $pro)
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">


                                <img class="img-fluid" src="{{ asset('backend/img/img_pro/'.$pro->image) }}" alt="..." />

                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">{{$pro->name}}</div>
                                <h6>{{$pro->description}}</h6>
                                <div class="portfolio-caption-heading text-warning">ราคา : {{$pro->price}} THB</div>

                            </div>
                        </div>
                    </div>
                    @endforeach
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
