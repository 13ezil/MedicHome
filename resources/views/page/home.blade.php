@extends('layout.app')
@section('content')
<<<<<<< HEAD

<style>
  .contact .contact-form .form-control {
  margin-bottom: 30px;
}

.contact .address-block .media {
  display: flex;
}

@media (max-width: 767px) {
  .contact .address-block .media {
    flex-wrap: wrap;
    text-align: center;
  }
  .contact .address-block .media:last-child {
    margin-bottom: 30px;
  }
}

.contact .address-block .media i {
  color: #48bdc5;
  font-size: 30px;
  margin-right: 35px;
  width: 40px;
  display: block;
}

@media (max-width: 767px) {
  .contact .address-block .media i {
    flex-basis: 100%;
    margin-right: 0;
    margin-bottom: 30px;
  }
}

.contact .address-block .media .media-body h3 {
  font-size: 24px;
  margin-bottom: 15px;
}

.contact .address-block .media .media-body p {
  line-height: 25px;
}

.contact .address-block .media:not(:last-child) {
  margin-bottom: 20px;
}

.form-control {
  box-shadow: none;
  border-radius: 0;
  padding: 15px 20px;
  font-size: 14px;
}

.form-control:focus {
  box-shadow: none;
  border: 1px solid #48bdc5;
}

.form-control.main {
  padding: 20px;
}
.accordion-section .accordion-holder {
  margin-top: 60px;
}

.accordion-section .accordion-holder .panel-default {
  box-shadow: none;
  border-radius: 0;
}

.accordion-section .accordion-holder .panel-default .panel-heading {
  background: #fff;
  padding: 0;
  border-radius: 0;
}

.accordion-section .accordion-holder .panel-default .panel-heading h4 {
  position: relative;
}

.accordion-section .accordion-holder .panel-default .panel-heading h4 a {
  font-weight: bold;
  font-family: "Source Sans Pro", sans-serif;
  font-size: 20px;
  display: block;
  background:#132646;
  color: #fff;
  padding: 20px 30px;
  transition: all .3s ease;
}

.accordion-section .accordion-holder .panel-default .panel-heading h4 a:before {
  content: '\f106';
  position: absolute;
  right: 20px;
  font-family: FontAwesome;
}

.accordion-section .accordion-holder .panel-default .panel-heading h4 a.collapsed {
  background: #fff;
  color: #000;
}

.accordion-section .accordion-holder .panel-default .panel-heading h4 a.collapsed:before {
  content: '\f107';
  position: absolute;
  font-family: FontAwesome;
}

.accordion-section .accordion-holder .panel-default .panel-heading h4 a.collapsed:hover {
  color:#132646;
}

.accordion-section .accordion-holder .panel-default .panel-body {
  padding: 20px 30px;
}
.accordion-box {
  margin-top: 40px;
}

.accordion-box .accordion {
  position: relative;
  margin-bottom: 20px;
  box-shadow: 0 0 20px #f1f1f1;
}

.accordion-box .accordion .accord-btn {
  position: relative;
  cursor: pointer;
  padding: 20px;
  background: #fafafa;
  transition: all 500ms ease;
}

.accordion-box .accordion .accord-btn h6 {
  font-size: 15px;
  font-weight: 400;
  color: #222222;
  line-height: 26px;
  transition: all 500ms ease;
}

.accordion-box .accordion .accord-btn::after {
  position: absolute;
  color: #777777;
  content: "\f107";
  font-size: 17px;
  font-weight: 400;
  line-height: 24px;
  top: 20px;
  right: 20px;
  width: 26px;
  text-align: center;
  height: 26px;
  border-radius: 25px;
  font-family: 'FontAwesome';
  transition: all 500ms ease 0s;
}

.accordion-box .accordion .accord-btn.active {
  background: #f4f4f4;
  transition: all 500ms ease;
}

.accordion-box .accordion .accord-btn.active h6 {
  font-weight: 700;
  transition: all 500ms ease;
}

.accordion-box .accordion .accord-btn.active:after {
  content: "\f106";
  color: #012f5d;
  transition: all 500ms ease 0s;
}

.accordion-box .accordion .accord-content {
  position: relative;
  display: none;
  padding-left: 20px;
  padding-right: 50px;
}

.accordion-box .accordion .accord-content.collapsed {
  display: block;
}

.accordion-box .accordion .accord-content p {
  font-size: 15px;
  line-height: 26px;
  font-weight: 400;
  color: #777777;
  padding: 20px 0px;
}
.service-overview .accordion-holder {
  margin-top: 0;
}
.contact-area {
  padding-left: 70px;
}

.contact-area form {
  margin-top: 60px;
}

.contact-area .form-group {
  position: relative;
  margin-bottom: 20px;
}

.contact-area input, .contact-area textarea {
  position: relative;
  width: 100%;
  height: 50px;
  color: #777777;
  padding: 10px 25px;
  background: #f4f4f4;
  display: block;
  border: 1px solid #ececec;
}

.contact-area .form-group select {
  -webkit-appearance: none;
  -ms-appearance: none;
  -moz-appearance: none;
  -o-appearance: none;
  height: 50px;
  width: 100%;
  padding: 10px 20px;
  border: 1px solid #ececec;
  background: #f4f4f4 url(../images/icons/icon-select.png) right center no-repeat;
  cursor: pointer;
}

.contact-area .form-group option {
  font-weight: normal;
  display: block;
  white-space: pre;
  height: 50px;
  padding: 20px;
}

.contact-area .form-group option:hover {
  background: #7b64cb;
}

.contact-area textarea {
  height: 190px;
  resize: none;
}

.contact-area button {
  width: 100%;
  height: 50px;
}

.contact-area .form-group i {
  position: absolute;
  top: 16px;
  right: 20px;
  font-size: 15px;
}

.testimonial-section {
  position: relative;
  background-size: cover !important;
  padding: 110px 0px;
  background-repeat: no-repeat !important;
}

.testimonial-section:before {
  position: absolute;
  top: 0px;
  left: 0px;
  content: '';
  width: 100%;
  height: 100%;
  background: rgba(72, 189, 197, 0.7);
}

.testimonial-section .section-title h3 {
  position: relative;
  padding-bottom: 30px;
  color: #ffffff;
}

.testimonial-section .section-title h3 span {
  color: #ffffff;
}

.testimonial-section .testimonial-carousel .slide-item {
  outline: 0;
}

.testimonial-section .testimonial-carousel .slick-dots li button:before {
  font-size: 15px;
  color: #fff;
}

.testimonial-section .inner-box {
  position: relative;
  padding: 60px 30px;
  background: #fff;
  margin-top: 50px;
  margin-bottom: 20px;
  margin-left: 20px;
  margin-right: 20px;
  border-radius: 10px;
  box-shadow: 0px 0px 10px -2px rgba(0, 0, 0, 0.2);
}

.testimonial-section .inner-box h6 {
  position: relative;
  font-size: 18px;
  line-height: 26px;
  font-weight: 600;
  color: #000;
  padding-bottom: 15px;
  text-transform: uppercase;
  font-weight: normal;
}

.testimonial-section .inner-box p {
  font-size: 15px;
  line-height: 24px;
  font-weight: 400;
  color: #1a1a1a;
}

.testimonial-section .inner-box .image-box {
  position: absolute;
  top: -45px;
  left: 50%;
  -webkit-transform: translateX(-50%);
          transform: translateX(-50%);
  border-radius: 50%;
  border: 5px solid #fff;
}

.testimonial-section .inner-box .image-box img {
  width: 90px;
  height: 90px;
  border-radius: 50%;
}
.section-title h3 {
  font-size: 40px;
  line-height: 50px;
  color: #222222;
  font-weight: 700;
  font-family: "Source Sans Pro", sans-serif;
}

.section-title span {
  color: #222222;
  font-weight: 400;
}

.section-title p {
  font-size: 15px;
  line-height: 25px;
  font-weight: 400;
  color: #777777;
  font-family: "Roboto", sans-serif;
}
.header-uper {
  padding: 40px 0px;
}

.header-uper .logo {
  float: left;
}

.header-uper .right-side {
  float: right;
}

@media (max-width: 991px) {
  .header-uper .right-side {
    float: unset;
    text-align: center;
  }
}

.header-uper .contact-info {
  float: left;
}

@media (max-width: 991px) {
  .header-uper .contact-info {
    padding-left: 0;
    float: unset;
    margin-bottom: 30px;
  }
}

.header-uper .contact-info .item {
  position: relative;
  display: inline-block;
  padding-left: 70px;
  margin-right: 40px;
}

.header-uper .contact-info .item .icon-box {
  position: absolute;
  top: 0px;
  left: 0px;
  width: 53px;
  height: 53px;
  border-radius: 50%;
  text-align: center;
  line-height: 53px;
  border: 1px solid #5ec5cc;
}

.header-uper .contact-info .item .icon-box i:before {
  color: #5ec5cc;
  font-size: 22px;
}

.header-uper .contact-info .item strong {
  font-size: 16px;
  line-height: 26px;
  font-weight: 600;
  color: #222222;
  text-transform: capitalize;
  font-family: "Roboto", sans-serif;
}

.header-uper .contact-info .item span {
  font-size: 15px;
  line-height: 26px;
  font-weight: 400;
  color: #777777;
  font-family: "Roboto", sans-serif;
}


.header-uper .right-side {
    float: none !important;
    text-align: center !important;
  }
  .header-uper .contact-info {
    float: none !important;
    margin-bottom: 30px !important;
  }
  .header-uper .logo {
    margin-bottom: 40px !important;
  }
  .header-uper .contact-info .item {
    text-align: left !important;
    margin-left: 40px !important;
    margin-right: 0px !important;
  }

  .blog-section.style-four .right-side {
  margin-left: -15px;
  margin-top: 10px;
}
/*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/
#hero {
  width: 100%;
  height: 80vh;
  background:#47b2e4;
}

#hero .container {
  padding-top: 72px;
}

#hero h1 {
  margin: 0 0 10px 0;
  font-size: 48px;
  font-weight: 700;
  line-height: 56px;
  color: #fff;
}

#hero h2 {
  color: rgba(255, 255, 255, 0.6);
  margin-bottom: 50px;
  font-size: 24px;
}

#hero .btn-get-started {
  font-family: "Jost", sans-serif;
  font-weight: 500;
  font-size: 16px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 10px 28px 11px 28px;
  border-radius: 50px;
  transition: 0.5s;
  margin: 10px 0 0 0;
  color: #fff;
  background: #47b2e4;
}

#hero .btn-get-started:hover {
  background: #209dd8;
}

#hero .btn-watch-video {
  font-size: 16px;
  display: inline-block;
  padding: 10px 0 8px 40px;
  transition: 0.5s;
  margin: 10px 0 0 25px;
  color: #fff;
  position: relative;
}

#hero .btn-watch-video i {
  color: #fff;
  font-size: 32px;
  position: absolute;
  left: 0;
  top: 7px;
  transition: 0.3s;
}

#hero .btn-watch-video:hover i {
  color: #cee0e9;
}

#hero .animated {
  animation: up-down 2s ease-in-out infinite alternate-reverse both;
}

@media (max-width: 991px) {
  #hero {
    height: 100vh;
    text-align: center;
  }
  #hero .animated {
    -webkit-animation: none;
    animation: none;
  }
  #hero .hero-img {
    text-align: center;
  }
  #hero .hero-img img {
    width: 50%;
  }
}

@media (max-width: 768px) {
  #hero h1 {
    font-size: 28px;
    line-height: 36px;
  }
  #hero h2 {
    font-size: 18px;
    line-height: 24px;
    margin-bottom: 30px;
  }
  #hero .hero-img img {
    width: 70%;
  }
}

@media (max-width: 575px) {
  #hero .hero-img img {
    width: 80%;
  }
  #hero .btn-get-started {
    font-size: 16px;
    padding: 10px 24px 11px 24px;
  }
  #hero .btn-watch-video {
    font-size: 16px;
    padding: 10px 0 8px 40px;
    margin-left: 20px;
  }
  #hero .btn-watch-video i {
    font-size: 32px;
    top: 7px;
  }
}

@-webkit-keyframes up-down {
  0% {
    transform: translateY(10px);
  }
  100% {
    transform: translateY(-10px);
  }
}

@keyframes up-down {
  0% {
    transform: translateY(10px);
  }
  100% {
    transform: translateY(-10px);
  }
}


</style>
<script>
    // Testimonial Slider
	$('.testimonial-carousel').slick({
		infinite: true,
		arrows: false,
		autoplay: true,
		slidesToShow: 2,
		dots: true,
		slidesToScroll: 2,
		responsive: [
			{
				breakpoint: 991,
				settings: {
					slidesToShow: 2
				}
			},
			{
				breakpoint: 525,
				settings: {
					slidesToShow: 1
				}
			}
		]
	});
	
  </script>

 <!-- ======= Hero Section ======= -->
 <section id="hero" class="d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
        <h1>Make you easy Deliver of medicine</h1>
        <h2>Let's be part of our team and make it wasy for you.</h2>
        <div class="d-lg-flex">
          {{-- Link rakhne signup form(user) ko get started ma  --}}
          <a href="#about" class="btn-get-started scrollto">Get Started</a>
          {{-- youtube tutorial ko link haldyne how sushany pharmachy and our website works vanyera --}}
          <a href="https://www.youtube.com/watch?v=TYcKFd1ipck" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Watch Video <i class="fa fa-play-circle"></i></a>
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
        <img src="/logo1.png" class="img-fluid animated" alt="">
      </div>
    </div>
  </div>

</section><!-- End Hero -->

<div class="container" style="overflow: auto; margin-bottom: 6%;">
<img src="/main.jpg" class="img-fluid py-3 w-100 mw-100 ">
=======
<div class="container-fluid-sm">
<img src="/main.jpg" class="img-fluid py-3 px-4">
>>>>>>> 4f961d6abbea41a0d7effe90229bf566031866f9
<hr color="#0892d0" style="height: 2.5px;">

<!--Header Upper-->
<section class="header-uper">
  <div class="container clearfix">
        <div class="logo">
              <figure>
                    <a href="index.html">
                          <img src="/logo.png" alt="">
                    </a>
              </figure>
        </div>
        <div class="right-side">
              <ul class="contact-info">
                    <li class="item">
                          <div class="icon-box">
                                <i class="fa fa-envelope"></i>
                          </div>
                          <strong>Email</strong>
                          <br>
                          <a href="#">
                                <span>info@medichome.com</span>
                          </a>
                    </li>
                    <li class="item">
                          <div class="icon-box">
                                <i class="fa fa-phone"></i>
                          </div>
                          <strong>Call Now</strong>
                          <br>
                          <span>(+977) 9843775127</span>
                    </li>
              </ul>
        </div>
  </div>
</section>
<!--Header Upper-->


<p class="lead pl-4 pr-4 pt-2 text-justify">
    Sushant Pharmacy continues a legacy of success in the health care industry,providing customers 
    with a medical service.A hectic lifestyle to cope with fast pace more and more people are facing 
    health problems irrespective of the age group.Healthcare system has thus become an inevitable part 
    of every family and it is necessity have quick access to health services. The idea behind the projects
    to develop a website to facilitate faster and efficient communication between medical
    shop and patients giving transparency to locations or distance where they are based while using the 
    websit.The main intension of introducing the system is to achieve location transparency for 
    patients and medical shop in the existing traditional health care system.
  </p>
</div>



<!--about section-->
<section class="feature-section section bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-xs-12">
				<div class="image-content">
					<div class="section-title text-center">
						<h3>Best Features
							<span>of Our Medichome and Pharmacy</span>
						</h3>
						<p>Sushant Pharmacy continues a legacy of success in the health care industry,providing customers with a medical service.</p>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="item">
								<h6>Orthopedics</h6>
								<p>Sushant Pharmacy continues a legacy of success in the health care industry,providing customers with a medical service.</p>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="item">
								<h6>Diaginostic</h6>
								<p>Sushant Pharmacy continues a legacy of success in the health care industry,providing customers with a medical service.</p>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="item">
								<h6>Psycology</h6>
								<p>Sushant Pharmacy continues a legacy of success in the health care industry,providing customers with a medical service.</p>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="item">
								<h6>General Treatment</h6>
								<p>Sushant Pharmacy continues a legacy of success in the health care industry,providing customers with a medical service.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End about section-->
{{-- <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-success">
  <div class="col-md-5 p-lg-5 mx-auto my-5">
    <h1 class="display-4 font-weight-normal">Medicine Deliver Offer</h1>
    <p class="lead font-weight-normal">Book your opportunity and get more sicount on your advance booking. GOOD LUCK</p>
    <a class="btn btn-outline-secondary" href="#">Coming soon</a>
  </div>
  <div class="product-device box-shadow d-none d-md-block"></div>
  <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
</div>

<div class="container-fluid ">
<div class="row mb-3">
  <div class="col-lg bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
    <div class="my-3 p-3">
      <h2 class="display-5">Medicine</h2>
      <p class="lead">discription about medicine.</p>
    </div>
    <div class=" bg-white box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
  </div>
  <div class="col-lg bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
    <div class="my-3 py-3">
      <h2 class="display-5">Medicine</h2>
      <p class="lead">discription about medicine.</p>
    </div>
    <div class="bg-white box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
  </div>
  <div class="col-lg bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
    <div class="my-3 py-3">
      <h2 class="display-5">Medicine</h2>
      <p class="lead">discription about medicine.</p>
    </div>
    <div class="bg-white box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
  </div>
  <div class="col-lg bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
    <div class="my-3 py-3">
      <h2 class="display-5">Medicine</h2>
      <p class="lead">discription about medicine.</p>
    </div>
    <div class="bg-white box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
  </div>
</div>
</div> --}}


<!--testimonial-section-->
<section class="testimonial-section" style="background: url(/sand.png);">
  <div class="container">
      <div class="section-title text-center">
          <h3>What Our
              <span>Customer Says</span>
          </h3>
      </div>
      <div class="testimonial-carousel">
          <!--Slide Item-->
          <div class="slide-item">
              <div class="inner-box text-center">
                  <div class="image-box">
                      <figure>
                          <img src="/sand.png" alt="">
                      </figure>
                  </div>
                  <h6>Dipen Basnet</h6>
                  <p>It's me dipen. I'm so satisfied and happy with its services. It's been so much helpful for us as a customer.</p>
              </div>
          </div>
        
          <!--Slide Item-->
          <div class="slide-item">
              <div class="inner-box text-center">
                  <div class="image-box">
                      <figure>
                          <img src="/sand.png" alt="">
                      </figure>
                  </div>
                  <h6>Dipen Basnet</h6>
                  <p>It's me dipen. I'm so satisfied and happy with its services. It's been so much helpful for us as a customer.</p>
              </div>
          </div>
      </div>
  </div>
</section>
<!--End testimonial-section-->

<!-- Contact Section -->
<section class="appoinment-section section">
  <div class="container">
      <div class="row">
          <div class="col-md-6 col-sm-12 col-xs-12">
             <div class="accordion-section">
                <div class="section-title">
                   <h3>FAQ</h3>
                </div>
          <div class="accordion-holder">
              <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                  <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingOne">
                          <h4 class="panel-title">
                              <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  Why Should I choose Medical Health
                              </a>
                          </h4>
                      </div>
                      <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                          <div class="panel-body">
                            Sushant Pharmacy continues a legacy of success in the health care industry,providing customers with a medical service.A hectic lifestyle to cope with 
                            fast pace more and more people are facing health problems irrespective of the age group.Healthcare system has thus become an inevitable part of every 
                            family and it is necessity have quick access to health services. The idea behind the projects to develop a website to facilitate faster and efficient 
                            communication between medical shop and patients giving transparency to locations or distance where they are based while using the websit.The main intension 
                            of introducing the system is to achieve location transparency for patients and medical shop in the existing traditional health care system.
                          </div>
                      </div>
                  </div>
              <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingTwo">
                      <h4 class="panel-title">
                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                              aria-controls="collapseTwo">
                              What are the Centre’s visiting hours?
                          </a>
                      </h4>
                  </div>
                  <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                      <div class="panel-body">
                        Sushant Pharmacy continues a legacy of success in the health care industry,providing customers with a medical service.A hectic lifestyle to cope with 
                        fast pace more and more people are facing health problems irrespective of the age group.Healthcare system has thus become an inevitable part of every 
                        family and it is necessity have quick access to health services. The idea behind the projects to develop a website to facilitate faster and efficient 
                        communication between medical shop and patients giving transparency to locations or distance where they are based while using the websit.The main intension 
                        of introducing the system is to achieve location transparency for patients and medical shop in the existing traditional health care system.
                      </div>
                  </div>
              </div>
              <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingThree">
                      <h4 class="panel-title">
                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false"
                              aria-controls="collapseThree">
                              How many visitors are allowed?
                          </a>
                      </h4>
                  </div>
                  <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                      <div class="panel-body">
                        Sushant Pharmacy continues a legacy of success in the health care industry,providing customers with a medical service.A hectic lifestyle to cope with 
                        fast pace more and more people are facing health problems irrespective of the age group.Healthcare system has thus become an inevitable part of every 
                        family and it is necessity have quick access to health services. The idea behind the projects to develop a website to facilitate faster and efficient 
                        communication between medical shop and patients giving transparency to locations or distance where they are based while using the websit.The main intension 
                        of introducing the system is to achieve location transparency for patients and medical shop in the existing traditional health care system.
                      </div>
                  </div>
              </div>
             </div>
             </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="contact-area">
          <div class="section-title">
              <h3>Request
                  <span>Appointment</span>
              </h3>
          </div>
      <form name="contact_form" class="default-form contact-form" action="sendmail.php" method="post">
          <div class="row">
              <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                      <input type="text" name="Name" placeholder="Name" required="">
                  </div>
                  <div class="form-group">
                      <input type="email" name="Email" placeholder="Email" required="">
                  </div>
                  {{-- yadi medical bata hospital ma doctor ko appointment line ho vane  --}}
                  {{-- <div class="form-group">
                      <select name="subject">
                          <option>Departments</option>
                          <option>Diagnostic</option>
                          <option>Psychological</option>
                      </select>
                  </div> --}}
              </div>
              <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                      <input type="text" name="Phone" placeholder="Phone" required="">
                  </div>
                  <div class="form-group">
                      <input type="text" name="Date" placeholder="Date" required="" id="datepicker">
                      <i class="fa fa-calendar" aria-hidden="true"></i>
                  </div>
                  <div class="form-group">
                      <select name="subject">
                          <option>Doctor</option>
                          <option>Pharmasist</option>
                      </select>
                  </div>
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="form-group">
                      <textarea name="form_message" placeholder="Your Message" required=""></textarea>
                  </div>
                  <div class="form-group text-center">
                      <button type="submit" class="btn-style-one">submit now</button>
                  </div>
              </div>
          </div>
      </form>
            </div>                        
          </div>
      </div>                    
  </div>
</section>
<!-- End Contact Section -->
  
@endsection
