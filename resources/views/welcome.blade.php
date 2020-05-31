@include('header')
<!-- ##### Hero Area Start ##### -->
<section class="hero-area">
    <div class="hero-slides owl-carousel">

        <!-- Single Hero Slide -->
        <div class="single-hero-slide bg-img" style="background-image: url(img/bg-img/banner2.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <div class="hero-slides-content">
                            <h4  style="color: gold;"  data-animation="fadeInUp" data-delay="100ms">All the learning you need</h4>
                            <h2  style="color: palegreen;"  data-animation="fadeInUp" data-delay="400ms">Welcome to our <br>Online Schooling</h2>
                            <!--<a href="#" class="btn academy-btn" data-animation="fadeInUp" data-delay="700ms">Read More</a>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Hero Slide -->
        <div class="single-hero-slide bg-img" style="background-image: url(img/bg-img/welcome.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <div class="hero-slides-content">
                            <h4  style="color: gold;"  data-animation="fadeInUp" data-delay="100ms">All the learning you need</h4>
                            <h2  style="color: palegreen;"  data-animation="fadeInUp" data-delay="400ms">Welcome to our <br>Online Schooling</h2>
                            <!--<a href="#" class="btn academy-btn" data-animation="fadeInUp" data-delay="700ms">Read More</a>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Hero Area End ##### -->

<!-- ##### Top Feature Area Start ##### -->
<div class="top-features-area wow fadeInUp" data-wow-delay="300ms">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="features-content">
                    <div class="row no-gutters">
                        <!-- Single Top Features -->
                        <div class="col-12 col-md-3" >
                            <div class="single-top-features d-flex align-items-center justify-content-center">
                                <i class="icon-agenda-1" ></i>
                                <h5>News Letter</h5>
                            </div>
                        </div>
                        <!-- Single Top Features -->
                        <div class="col-12 col-md-9">
                            <h5 class="text-center text-black">
                                <marquee scrolldelay = "200" height="30" behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout = "this.start();">
                                    @foreach($newsletters = \App\Newsletter::orderBy('id',$request->sort ?? 'DESC')->get() as $newsletter)
                                        <lable><a style="color: yellow" class="text-uppercase text-bold">
                                    {{$newsletter->title}} NOTICE :
                                            </a>
                                            <a>{{$newsletter->notice}}
                                        </a></lable>
                                    @endforeach
                                </marquee>
                            </h5>
                        </div>
                        <!-- Single Top Features -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Top Feature Area End ##### -->

<!-- ##### Course Area Start ##### -->
<div class="academy-courses-area section-padding-100-0">
    <div class="container">
        <div class="row">
            <!-- Single Course Area -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                    <div class="course-icon">
                        <i class="icon-id-card"></i>
                    </div>
                    <div class="course-content">
                        <h4>School</h4>
                        <p>Starts from PreSchool leads towards higher level Education.</p>
                    </div>
                </div>
            </div>
            <!-- Single Course Area -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="400ms">
                    <div class="course-icon">
                        <i class="icon-worldwide"></i>
                    </div>
                    <div class="course-content">
                        <h4>Learning</h4>
                        <p>Learning is the act of acquiring something new in life.</p>
                    </div>
                </div>
            </div>
            <!-- Single Course Area -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="500ms">
                    <div class="course-icon">
                        <i class="icon-map"></i>
                    </div>
                    <div class="course-content">
                        <h4>Study</h4>
                        <p>Reading is a complex cognitive process.</p>
                    </div>
                </div>
            </div>
            <!-- Single Course Area -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="600ms">
                    <div class="course-icon">
                        <i class="icon-like"></i>
                    </div>
                    <div class="course-content">
                        <h4>Playing</h4>
                        <p>Big play ground equiped with games for physical activities.</p>
                    </div>
                </div>
            </div>
            <!-- Single Course Area -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="700ms">
                    <div class="course-icon">
                        <i class="icon-responsive"></i>
                    </div>
                    <div class="course-content">
                        <h4>Examination</h4>
                        <p>To evalute student's knowledge Term wise.</p>
                    </div>
                </div>
            </div>
            <!-- Single Course Area -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="800ms">
                    <div class="course-icon">
                        <i class="icon-message"></i>
                    </div>
                    <div class="course-content">
                        <h4>Result</h4>
                        <p>Merit level of the experience.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Course Area End ##### -->

<!-- ##### Testimonials Area Start ##### -->
<div class="testimonials-area section-padding-100-0 bg-img bg-overlay" style="background-image: url(img/bg-img/bg_09.jpeg);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center mx-auto white wow fadeInUp" data-wow-delay="300ms">
                    <span>HOW WE TRAIN OUR STUDENTS FOR BETTER FUTURE</span>
                    <h4 style="color: #ffffff">A step to build great citizen of Pakistan</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Single Testimonials Area -->
            <div class="col-12 ">
                <div class="single-testimonial-area mb-100 d-flex wow fadeInUp" data-wow-delay="400ms">
                    <div class="testimonial-content text-justify">
                        <h5 style="color: white">Our vision at The Super Scholars School is to empower students to acquire, demonstrate, articulate and value knowledge and skills that will support them, as life-long learners, to participate in and contribute to the global world and practise the core values of the school: respect, tolerance, inclusion, and excellence.
                            The function of education is to teach one to think intensively and to think critically. Intelligence plus character - that is the goal of true education. </h5>
                        <h6>
                            <span>Soban Arshad </span> | Admin</h6>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </div>
</div>
<!-- ##### Testimonials Area End ##### -->

<!-- ##### Top Popular Courses Area Start ##### -->
<div class="top-popular-courses-area section-padding-100-70">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                    <span>The Best is</span>
                    <h3>Our educational process</h3>
                </div>
            </div>
        </div>
        <div class="row">

            <!-- Single Top Popular Course -->
            <div class="col-12 col-lg-6">
                <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="400ms">
                    <div class="popular-course-content">
                        <h5>Learning</h5>
                        <span>Skills Through Study</span>
                        <p class="text-justify">Facilitating children to participate in their own learning through play is focused work for teachers with the objective of truly giving their students a quality learning experience. Opportunities to inquire, discover and experiment lead them to become thinkers.</p>
                    </div>
                    <div class="popular-course-thumb bg-img" style="background-image: url(img/bg-img/bg-4.jpg);"></div>
                </div>
            </div>

            <!-- Single Top Popular Course -->
            <div class="col-12 col-lg-6">
                <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="500ms">
                    <div class="popular-course-content">
                        <h5>Knowledge</h5>
                        <span>Academic Attainment</span>
                        <p class="text-justify">knowledge comes to people by their experiences in life. In other words, life is an instrument that leads me to gain knowledge. As students, a way to acquire knowledge is to have a role model in our lives. Almost every student has a hero in their lives.Follow to get success.</p>
                    </div>
                    <div class="popular-course-thumb bg-img" style="background-image: url(img/bg-img/pc-2.jpg);"></div>
                </div>
            </div>

            <!-- Single Top Popular Course -->
            <div class="col-12 col-lg-6">
                <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="600ms">
                    <div class="popular-course-content">
                        <h5>Teaching</h5>
                        <span>Practical Understanding</span>
                        <p class="text-justify">By 'practical work' we mean tasks in which students observe or manipulate real objects or materials or they witness a teacher demonstration.Our teacers spend most of the time with students to make them a role model in the practicale world / society.</p>
                    </div>
                    <div class="popular-course-thumb bg-img" style="background-image: url(img/bg-img/pc-3.jpg);"></div>
                </div>
            </div>

            <!-- Single Top Popular Course -->
            <div class="col-12 col-lg-6">
                <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="700ms">
                    <div class="popular-course-content">
                        <h5>Discussion</h5>
                        <span>To Exchange Ideas</span>
                        <p class="text-justify">Facilitating children to participate in their own learning through play is focused work for teachers with the objective of truly giving their students a quality learning experience. Opportunities to inquire, discover and experiment lead them to become thinkers.</p>
                    </div>
                    <div class="popular-course-thumb bg-img" style="background-image: url(img/bg-img/pc-4.jpg);"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Top Popular Courses Area End ##### -->
@include('footer')
