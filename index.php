<?php
include "components/header.php";


$query = "SELECT * FROM posts ORDER BY date_time DESC";
$posts = mysqli_query($connection, $query);

?>

<!-- Add your site or application content here -->
<main>

    <div class="adjust-header-space bg-common-white"></div>

    <!-- hero area start  -->
    <section class="p-relative hero-bg-theme-1 hero__area-3 fix ">
        <div class="hero__area p-relative hero__area-3 fix hero-overlay">
            <div class="container container-big">
                <div class="hero__content p-relative">
                    <div class="hero__title-wrap">
                        <p class="hero__subtitle small uppercase lh-1 wow fadeInUp" data-wow-delay=".3s">Introducing Glister UK
                        </p>
                        <h1 class="hero__title text-white wow fadeInUp" data-wow-delay=".5s">Your Trusted Partner for Exceptional Plumbing and Heating Services.</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hero area end  -->

    <!-- services area start  -->
    <section class="df-services2__area section-spacing p-relative x-clip">
        <div class="area-shapes">
            <div class="df-inner-area__shape1"></div>
            <div class="df-inner-area__shape2"></div>
        </div>
        <div class="container">
            <div class="row justify-content-center section-title-spacing mb-40 wow fadeInUp" data-wow-delay=".3s">
                <div class="col-xl-8">
                    <div class="section__title-wrapper text-center">
                        <span class="section__subtitle bg-lighter">OUR SERVICES</span>
                        <h2 class="section__title">Explore Our Services</h2>
                    </div>
                </div>
            </div>
            <div class="row mt-50 g-5 row-cols-xl-2 row-cols-md-2 row-cols-1">
                <div class="col">
                    <div class="service2__box">
                        <div class="service2__content">
                            <div class="service2__img bg-1">
                                <i class="fa-light fa-heat"></i>
                            </div>
                            <h4 class="service2__title"><a href="boiler-installations.html">Boiler Installation</a></h4>
                            <p class="small">Free instant Boiler installation quotes bespoke to your home.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="service2__box">
                        <div class="service2__content">
                            <div class="service2__img bg-2">
                                <i class="icon-013-shower"></i>
                            </div>
                            <h4 class="service2__title"><a href="bathroom-installations.html">Bathroom installation</a></h4>
                            <p class="small">From budget to Billionaire, we can design and install your dream bathroom.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="service2__box">
                        <div class="service2__content">
                            <div class="service2__img bg-3">
                                <i class="icon-df-service"></i>
                            </div>
                            <h4 class="service2__title"><a href="servicing-maintenance.html">Servicing & Maintenance</a></h4>
                            <p class="small">A comprehensive range of plumbing & heating services. Boiler servicing, Tap changes and much more!</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="service2__box">
                        <div class="service2__content">
                            <div class="service2__img bg-5">
                                <i class="icon-002-building"></i>
                            </div>
                            <h4 class="service2__title"><a href="special-projects.html">Special Projects</a></h4>
                            <p class="small">High end residential refurbishment projects for private clients & developers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- services area end  -->

    <!-- about area start  -->
    <section class="df-about__area section-spacing bg-theme-4">
        <div class="container">
            <div class="row g-5 gy-50 align-items-center wow fadeInUp" data-wow-delay=".3s">
                <div class="col-lg-6">
                    <div class="df-about__content ">
                        <div class="section__title-wrapper">
                            <span class="section__subtitle bg-lighter">ABOUT US</span>
                            <h2 class="section__title">Plumbing and Heating Services Provider</h2>
                        </div>
                        <p class="mt-35 mb-35">At Glister UK, we take pride in being your dedicated plumbing and heating services provider, catering exclusively to our
                            domestic customers in Bishops Stortford and surrounding boroughs, including Hertfordshire, Essex, Cambridge, and London.
                            As a family-run business with two decades of industry experience, we understand the importance of a warm and
                            well-functioning home. Our Gas Safe registered team specializes in boiler installations, bathroom refurbishments, and
                            heat pump installations, ensuring your home stays comfortable and energy-efficient.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="df-video__box">
                        <img src="assets/img/plumbing/img-03.webp" alt="Plumbing-services">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about area end  -->

    <!-- service area start -->
    <section class="df-service5__area section-spacing">
        <div class="container">
            <div class="row g-50 align-items-center">
                <div class="col-lg-5 order-lg-0 order-1">
                    <div class="df-service5__thumb">
                        <img src="assets/img/gallery/img-01.webp" alt="img not found">
                    </div>
                </div>
                <div class="col-lg-7 order-lg-1 order-0">
                    <div class="df-service5__content">
                        <div class="section__title-wrapper">
                            <span class="section__subtitle bg-lighter">WHY CHOOSE US</span>
                            <!-- <h2 class="section__title">Most Plumbing Experts</h2> -->
                        </div>
                        <p class="mt-35 mb-35">Beyond our core services, we offer a comprehensive range, from general plumbing and heating installations to reliable
                            call-outs, servicing, and maintenance. Our expertise extends to high-end residential refurbishments and special
                            projects, with a portfolio that includes some of the UK's most exquisite homes. What sets us apart is our unwavering
                            customer focus – every installation or project is approached as a bespoke endeavour, tailored to meet the unique needs
                            of each homeowner. Trust Glister UK for quality craftsmanship, reliability, and a personalized touch in every project we
                            undertake.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service area start -->

    <!-- testimonial area start  -->
    <section id="testimonial" class="df-testimonial__area section-spacing bg-theme-4 p-relative x-clip z-index-3">
        <div class="container">
            <div class="df-testimonial__wrapper p-relative wow fadeInUp" data-wow-delay=".3s">
                <div class="swiper testimonial__slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="df-testimonial__box">
                                <div class="df-testimonial__box-content">
                                    <div class="df-testimonial__icon">
                                        <i class="icon-020-quote"></i>
                                    </div>
                                    <div class="df-testimonial__text">
                                        <p>I had Craig from Glister UK install two of the bathrooms in my house. He designed and provided a competitive quote. Craig and his team were excellent, keeping all mess to a minimum using carpet protectors and dust sheets. We were really happy with the bathrooms, they look fabulous and we get lots of compliments about them! Would recommend Craig and team at Glister UK without any doubt..
                                        </p>
                                    </div>
                                    <div class="df-testimonial__author-meta d-flex justify-content-center">
                                        <div class="df-testimonial__author-thumb">
                                            <img src="assets/img/clients/client-01.webp" alt="image not found">
                                        </div>
                                        <div class="df-testimonial__author-review">
                                            <h4 class="df-testimonial__author">Danielle Langrish-Smith</h4>
                                            <div class="df-satisfaction__ratings">
                                                <ul>
                                                    <li><i class="icon-004-star"></i></li>
                                                    <li><i class="icon-004-star"></i></li>
                                                    <li><i class="icon-004-star"></i></li>
                                                    <li><i class="icon-004-star"></i></li>
                                                    <li><i class="icon-004-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="df-testimonial__box">
                                <div class="df-testimonial__box-content">
                                    <div class="df-testimonial__icon">
                                        <i class="icon-020-quote"></i>
                                    </div>
                                    <div class="df-testimonial__text">
                                        <p>Craig and the team recently installed new heating throughout my house. I had previously depended on a log burner to keep my house warm, after not having very efficient and workable heating for a really long period of time. Craig completed a thorough consultation, to ensure he met the needs of what heating would work best for me and my house.
                                        </p>
                                    </div>
                                    <div class="df-testimonial__author-meta d-flex justify-content-center">
                                        <div class="df-testimonial__author-thumb">
                                            <img src="assets/img/clients/client-02.webp" alt="image not found">
                                        </div>
                                        <div class="df-testimonial__author-review">
                                            <h4 class="df-testimonial__author">Emma Wise</h4>
                                            <div class="df-satisfaction__ratings">
                                                <ul>
                                                    <li><i class="icon-004-star"></i></li>
                                                    <li><i class="icon-004-star"></i></li>
                                                    <li><i class="icon-004-star"></i></li>
                                                    <li><i class="icon-004-star"></i></li>
                                                    <li><i class="icon-004-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="df-testimonial__box">
                                <div class="df-testimonial__box-content">
                                    <div class="df-testimonial__icon">
                                        <i class="icon-020-quote"></i>
                                    </div>
                                    <div class="df-testimonial__text">
                                        <p>Craig did a great job installing our new boiler very professional job would recommend
                                        </p>
                                    </div>
                                    <div class="df-testimonial__author-meta d-flex justify-content-center">
                                        <div class="df-testimonial__author-thumb">
                                            <img src="assets/img/clients/client-03.webp" alt="image not found">
                                        </div>
                                        <div class="df-testimonial__author-review">
                                            <h4 class="df-testimonial__author">Claudine Aiken</h4>
                                            <div class="df-satisfaction__ratings">
                                                <ul>
                                                    <li><i class="icon-004-star"></i></li>
                                                    <li><i class="icon-004-star"></i></li>
                                                    <li><i class="icon-004-star"></i></li>
                                                    <li><i class="icon-004-star"></i></li>
                                                    <li><i class="icon-004-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="df-testimonial__box">
                                <div class="df-testimonial__box-content">
                                    <div class="df-testimonial__icon">
                                        <i class="icon-020-quote"></i>
                                    </div>
                                    <div class="df-testimonial__text">
                                        <p>Craig has completed various jobs at our house. From leaking taps, boiler servicing and a full bathroom refurb. He supported us with design, gave us different ideas and tips. He worked incredibly hard and his attention to detail means we have a beautiful bathroom! We would definitely recommend Craig, he’s the only Plummer we use!
                                        </p>
                                    </div>
                                    <div class="df-testimonial__author-meta d-flex justify-content-center">
                                        <div class="df-testimonial__author-thumb">
                                            <img src="assets/img/clients/client-05.webp" alt="image not found">
                                        </div>
                                        <div class="df-testimonial__author-review">
                                            <h4 class="df-testimonial__author">Keily Tomlin</h4>
                                            <div class="df-satisfaction__ratings">
                                                <ul>
                                                    <li><i class="icon-004-star"></i></li>
                                                    <li><i class="icon-004-star"></i></li>
                                                    <li><i class="icon-004-star"></i></li>
                                                    <li><i class="icon-004-star"></i></li>
                                                    <li><i class="icon-004-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="df-testimonial__box">
                                <div class="df-testimonial__box-content">
                                    <div class="df-testimonial__icon">
                                        <i class="icon-020-quote"></i>
                                    </div>
                                    <div class="df-testimonial__text">
                                        <p>I have been extremely pleased to used Craig at Glister UK to deal with a variety of issues with my heating system over the years and have always received a very high standard of service from Craig. Works undertaken range from installing a new wireless thermostat, replacing 3 port value and balancing the heating system. I always have my boiler annually serviced by Craig and I know he does a thorough service and can be relied on. Would highly recommend him and his business.
                                        </p>
                                    </div>
                                    <div class="df-testimonial__author-meta d-flex justify-content-center">
                                        <div class="df-testimonial__author-thumb">
                                            <img src="assets/img/clients/client-04.webp" alt="image not found">
                                        </div>
                                        <div class="df-testimonial__author-review">
                                            <h4 class="df-testimonial__author">Trevor Baxter</h4>
                                            <div class="df-satisfaction__ratings">
                                                <ul>
                                                    <li><i class="icon-004-star"></i></li>
                                                    <li><i class="icon-004-star"></i></li>
                                                    <li><i class="icon-004-star"></i></li>
                                                    <li><i class="icon-004-star"></i></li>
                                                    <li><i class="icon-004-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="df-testimonial__navigation">
                    <div class="testimonial__slider-button-prev slider__nav-btn"><i class="icon-022-left"></i>
                    </div>
                    <div class="testimonial__slider-button-next slider__nav-btn"><i class="icon-021-next"></i>
                    </div>
                </div>
                <div class="testimonial__slider-pagination df__pagination mt-60 justify-content-center wow fadeInUp" data-wow-delay=".3s"></div>
            </div>
        </div>
    </section>
    <!-- testimonial area end  -->

    <!-- horizontal line start  -->
    <div class="container">
        <div class="hr1"></div>
    </div>
    <!-- horizontal line end  -->

    <!-- booking area start  -->
    <section class="df-booking__area section-spacing-top bg-theme-4">
        <div class="df-booking__area-bg"></div>
        <div class="container">
            <div class="row align-items-end section-title-spacing g-5 wow fadeInUp" data-wow-delay=".3s">
                <div class="col-lg-8 col-md-7">
                    <div class="section__title-wrapper">
                        <span class="section__subtitle bg-lighter">Contact Us</span>
                        <h2 class="section__title">Reach Out to Us</h2>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5">
                    <div class="d-flex justify-content-lg-end">
                        <div class="meta-item meta__df-booking">
                            <div class="meta-item__icon is-white">
                                <i class="icon-074-phone"></i>
                            </div>
                            <div class="meta-item__text-2">
                                <p class="text-white uppercase fw-500 lh-1">CONTACT NUMBER</p>
                                <span class="text-white"><a href="tel:+44 01279	295	772">+44 01279 295 772</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="df-booking__form-wrapper wow fadeInUp" data-wow-delay=".3s">
                <div class="df-booking__video">
                    <img src="assets/img/gallery/img-02.webp" alt="image not found">
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
                                    <button type="submit" class="primary-btn">send now
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
    </section>
    <!-- booking area end  -->

    <!-- blog area start  -->
    <section class="df-blog__area section-spacing">
        <div class="container">
            <div class="row justify-content-center section-title-spacing wow fadeInUp" data-wow-delay=".3s">
                <div class="col-xl-8">
                    <div class="section__title-wrapper text-center">
                        <span class="section__subtitle bg-lighter">OUR BLOG</span>
                        <h2 class="section__title">Read Latest Blog</h2>
                    </div>
                </div>
            </div>
            <div class="df-blog5__wrapper">
                <div class="swiper blog__slider">

                    <div class="swiper-wrapper">
                        <?php while ($post = mysqli_fetch_assoc($posts)) : ?>
                            <div class="swiper-slide">

                                <div class="df-blog5__box wow fadeInUp" data-wow-delay=".5s">
                                    <div class="df-blog5__thumb">
                                        <a href="<?= ROOT_URL ?>blog-details.php"><img src="assets/img/blog/<?= $post['thumbnail'] ?>" alt="image not found"></a>
                                    </div>
                                    <div class="df-blog5__content">
                                        <div class="df-blog5__meta">
                                            <?php // fetch category from categories using category_id
                                            $category_id = $post['category_id'];
                                            $category_query = "SELECT * FROM categories WHERE id=$category_id";
                                            $category_result = mysqli_query($connection, $category_query);
                                            $category = mysqli_fetch_assoc($category_result);
                                            ?>
                                            <span class="blog-category"><a href="<?= ROOT_URL ?>category-posts.php?id=<?= $post['category_id'] ?>"><?= $category['title'] ?></a></span>
                                            <span class="separate"></span>
                                            <span class="blog-date"><?= date("M d, Y - H:i", strtotime($post['date_time'])) ?></span>
                                        </div>
                                        <h3 class="df-blog5__title underline"><a href="<?= ROOT_URL ?>blog-details.php?id=<?= $post['id'] ?>"><?= $post['title'] ?></a></h3>
                                        <div class="df-blog5__btn">
                                            <a href="<?= ROOT_URL ?>blog-details.php?id=<?= $post['id'] ?>" class="primary-btn">Read More
                                                <span class="icon__box">
                                                    <img class="icon__first" src="assets/img/icon/arrow-black.webp" alt="image not found">
                                                    <img class="icon__second" src="assets/img/icon/arrow-theme.webp" alt="image not found">
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        <?php endwhile; ?>
                    </div>

                </div>
            </div>
            <div class="blog__slider-pagination df__pagination mt-70 p-relative z-index-5 justify-content-center wow fadeInUp" data-wow-delay=".3s"></div>
        </div>
    </section>
    <!-- blog area end  -->

</main>

<?php
include "components/footer.php"
?>