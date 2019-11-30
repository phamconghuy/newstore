<?php
$layout_class = newstore_blog_layout();
get_header();
do_action( 'newstore_before_blog_post');
?>

    <!-- start contact section -->
    <section id="aa-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-contact-area">
                        <div class="aa-contact-top">
                            <h2>Liên hệ vs chúng tôi qua</h2>
                        </div>
                        <!-- contact map -->
                        <div class="aa-contact-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.1307306485687!2d106.67560421462154!3d10.877660060291829!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174d7d6d75b7305%3A0x9cc6442d4b22af76!2zSMOgIEh1eSBHacOhcCwgVGjhuqFuaCBM4buZYywgUXXhuq1uIDEyLCBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1575089834548!5m2!1svi!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </div>
                        <!-- Contact address -->
                        <div class="aa-contact-address">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="aa-contact-address-left">
                                        <form class="comments-form contact-form" action="">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" placeholder="Your Name" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="email" placeholder="Email" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" placeholder="Subject" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" placeholder="Company" class="form-control">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <textarea class="form-control" rows="3" placeholder="Message"></textarea>
                                            </div>
                                            <button class="aa-secondary-btn">Send</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="aa-contact-address-right">
                                        <address>
                                            <h4>Shop Tea</h4>
                                            <p>Cuối Hẻm 551 Hà Huy Giáp Phường Thạnh Lộc Quận 12 Thành Phố Hồ Chí Mình</p>
                                            <p><span class="fa fa-home"></span>Huntsville, AL 35813, USA</p>
                                            <p><span class="fa fa-phone"></span>+ 021.343.7575</p>
                                            <p><span class="fa fa-envelope"></span>Email: phamconghuy2609@gmail.com</p>
                                        </address>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Subscribe section -->


<?php
get_footer();
