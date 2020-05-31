
<!-- ##### Footer Area Start ##### -->
<footer class="footer-area ">
    <div class="main-footer-area col-md-12 section-padding-100-0">
        <div class="contact">
                    <h2 class="col-md-12 text-center" style="color: greenyellow;">Contact Us</h2>
                    <p class="col-md-12 text-center text-white">Our customer service operators work 8am - 1pm Monday to Saturday and 8am - 12pm on Friday.Feel free to contact us or email us your queries. </p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="contact-form-area wow fadeInUp" data-wow-delay="500ms">
                        <form action="#" method="post">
                            <input type="text" class="form-control mt-15" id="name" placeholder="Name">
                            <input type="email" class="form-control mt-15" id="email" placeholder="E-mail">
                            <textarea name="message" class="form-control mt-15" id="message" cols="10" rows="5" placeholder="Message"></textarea>
                            <button class="btn academy-btn mt-15" type="submit">Send Now</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-1">

                </div>
                <div class="col-12 col-sm-6 col-lg-5">
                    <div class="footer-widget mb-100">
                        <div class="single-contact d-flex mb-30">
                            <i class="icon-placeholder"></i>
                            <p class="text-white">The Super Scholar School System,Main Road Shamsabad,Distt. Attock, Pakistan.</p>
                        </div>
                        <div class="single-contact d-flex mb-30">
                            <i class="icon-telephone-1"></i>
                            <ul>
                                <li><a href="tel:0572 542710" ><p class="text-white">Shamsabad Office: +92 572 542710</p></a>
                                    <a href="tel:0572 662050"><p class="text-white">Waisa Office: +92 572 662050 </p></a></li>
                            </ul>
                        </div>
                        <div class="single-contact d-flex mb-30">
                            <i class="fa fa-whatsapp"></i>
                            <ul>
                                <a><p class="whatsapp text-white">Whatsapp: +92 321 2542710 </p></a>
                            </ul>
                        </div>

                        <div class="single-contact d-flex">
                            <i class="fa fa-envelope-open"></i>
                            <a href="mailto:the.super.scholars@gmail.com"><p class="text-white">the.super.scholars@gmail.com</p></a>
                        </div>
                        <div class="single-contact d-flex mt-15 pull-right">
                            <a href="https://www.facebook.com/thesuperscholarschool/"><i class="fa fa-facebook "></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a><i class="whatsapp fa fa-whatsapp"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>
                        Copyright &copy; <script>document.write(new Date().getFullYear());</script> The Super Scholars School System. All Rights Reserved.
                        </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ##### Footer Area Ends ##### -->

<script>
    $(document).ready(function() {
        $('.whatsapp').on("click", function(e) {
            if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
                var article = $(this).attr("data-text");
                var weburl = $(this).attr("data-link");
                var whats_app_message = encodeURIComponent(document.URL);
                var whatsapp_url = "https://wa.me/+923212542710/?text=";
                // var whatsapp_url = "whatsapp://send?text="+whats_app_message;
                window.location.href= whatsapp_url;
            }else{
                alert('You Are Not On A Mobile Device. Kindly visit website from your mobile phone');
            }
        });
    });
</script>


<!-- ##### All Javascript Script ##### -->
<!-- jQuery-2.2.4 js -->
<script src="jsacademy/jquery/jquery-2.2.4.min.js"></script>
<!-- Popper js -->
<script src="jsacademy/bootstrap/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="jsacademy/bootstrap/bootstrap.min.js"></script>
<!-- All Plugins js -->
<script src="jsacademy/plugins/plugins.js"></script>
<!-- Active js -->
<script src="jsacademy/active.js"></script>
</body>

</html>
