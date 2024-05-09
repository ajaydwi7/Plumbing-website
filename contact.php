<?php
include "components/header.php"
?>

<!-- Add your site or application content here -->
<main>

    <div class="adjust-header-space bg-common-white"></div>

    <!-- contact area start  -->
    <section class="df-contact__area section-spacing-top p-relative fix">
        <div class="circle-2"></div>
        <div class="circle-3"></div>
        <div class="container">
            <div class="row justify-content-center section-title-spacing wow fadeInUp" data-wow-delay=".3s">
                <div class="col-xl-8">
                    <div class="section__title-wrapper text-center">

                        <h2 class="section__title">Contact Us</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-xxl-4 col-lg-6 col-md-6">
                    <div class="df-contact__box wow fadeInUp" data-wow-delay=".4s">
                        <div class="df-contact__icon mb-20"><a href="tel:+44 01279	295	772"><i class="icon-051-telephone-1"></i></a></div>
                        <p class="df-contact__title mb-5">PHONE NUMBER</p>
                        <h4 class="df-contact__content"><a href="tel:+44 01279	295	772">+44 01279 295 772</a></h4>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-6 col-md-6">
                    <div class="df-contact__box wow fadeInUp" data-wow-delay=".5s">
                        <div class="df-contact__icon mb-20"><a href="mailto:info@glister.uk"><i class="icon-052-email"></i></a></div>
                        <p class="df-contact__title mb-5">EMAIL ADDRESS</p>
                        <h4 class="df-contact__content"><a href="mailto:info@glister.uk"><span class="__cf_email__" data-cfemail="">info@glister.uk</span></a>
                        </h4>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-6 col-md-6">
                    <div class="df-contact__box wow fadeInUp" data-wow-delay=".6s">
                        <div class="df-contact__icon mb-20"><a href="https://maps.app.goo.gl/ymnkTde2USj8EDZT6"><i class="icon-030-pin"></i></a></div>
                        <p class="df-contact__title mb-5">OUR LOCATION</p>
                        <h4 class="df-contact__content"><a href="https://maps.app.goo.gl/ymnkTde2USj8EDZT6">Bishops Park, Bishops Stortford, UK.</a></h4>
                    </div>
                </div>
            </div>
            <div class="df-booking2__form-wrapper section-spacing-top">
                <div class="df-booking__video">
                    <img src="assets/img/gallery/bathroom-02.webp" alt="image not found">
                    <div class="df-video__play-btn pos-center">
                        <a href="assets/video/plumbing.mp4" class="play-btn popup-video"><i class="icon-008-play-button"></i></a>
                    </div>
                </div>
                <div class="df-booking2__form">
                    <form action="submit.php" Method="post" enctype="multipart/form-data">
                        <div class="row gx-5">
                            <div class="col-md-6">
                                <div class="df-input-field">
                                    <input type="text" id="name" name="name" placeholder="Your Name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="df-input-field">
                                    <input type="text" id="email" name="email" placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="df-input-field">
                                    <input type="text" id="number" name="number" placeholder="Your Phone" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="df-input-field">
                                    <select name="service" id="service" required>
                                        <option value="subject">Subject</option>
                                        <option value="Boiler Installation">Boiler Installation</option>
                                        <option value="Bathroom Installation">Bathroom Installation</option>
                                        <option value="Servicing & Maintenance">Servicing & Maintenance</option>
                                        <option value="Special Projects">Special Projects</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="df-input-field">
                                    <input type="text" id="address" name="address" placeholder="House Address" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="df-input-field">
                                    <textarea id="message" name="message" placeholder="Write Message Here..."></textarea>

                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="df-booking2__form-btn mt-0">
                                    <button type="submit" class="primary-btn" onsubmit="() => location.reload()">send now
                                        <span class="icon__box">
                                            <img class="icon__first" src="assets/img/icon/arrow-white.webp" alt="image not found">
                                            <img class="icon__second" src="assets/img/icon/arrow-white.webp" alt="image not found">
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="df__map p-relative section-spacing-top">
            <div class="df__google-map">
                <a href="https://maps.app.goo.gl/YxoU9eps9jwi1sa98" target="_blank">
                    <!-- Your iframe code here -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d157652.54935817188!2d-0.15464841328119697!3d51.87335130000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8854e6f42f4f1%3A0xe4da6f2aa88d9cd7!2sGlister%20UK!5e0!3m2!1sen!2sin!4v1711964322416!5m2!1sen!2sin" width="1920" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </a>

            </div>
        </div>
    </section>
    <!-- contact area end  -->

</main>

<?php
include "components/footer.php"
?>