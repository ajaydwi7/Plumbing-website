<?php
include "components/header.php";

//fetch posts if id is set
if (isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT * FROM posts WHERE category_id=$id ORDER BY date_time DESC";
    $posts = mysqli_query($connection, $query);
} else {
    header('location: ' . ROOT_URL . 'blog.php');
}
?>

<!-- Add your site or application content here -->
<main>

    <div class="adjust-header-space bg-common-white"></div>

    <!-- blog area start  -->
    <section class="df-blog__area section-spacing p-relative fix">
        <div class="circle-2"></div>
        <div class="circle-3"></div>
        <div class="container">
            <div class="row justify-content-center section-title-spacing wow fadeInUp" data-wow-delay=".3s">
                <div class="col-xl-8">
                    <div class="section__title-wrapper text-center">
                        <?php

                        $category_query = "SELECT * FROM categories WHERE id=$id";
                        $category_result = mysqli_query($connection, $category_query);
                        $category = mysqli_fetch_assoc($category_result);
                        ?>
                        <span class="section__subtitle bg-lighter">CATEGORY</span>
                        <h2 class="section__title"><?= $category['title'] ?></h2>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-xxl-8 col-xl-7 col-lg-7 col-md-12">
                    <?php if ((mysqli_num_rows($posts)) > 0) : ?>
                        <div class="df-blog__box">
                            <?php while ($post = mysqli_fetch_assoc($posts)) : ?>
                                <div class="df-blog__thumb">
                                    <a href="<?= ROOT_URL ?>blog-details.php"><img src="assets/img/blog/<?= $post['thumbnail'] ?>" alt="image not found"></a>
                                </div>
                                <div class="df-blog__content">
                                    <div class="df-blog__meta">
                                        <?php // fetch category from categories using category_id
                                        $category_id = $post['category_id'];
                                        $category_query = "SELECT * FROM categories WHERE id=$category_id";
                                        $category_result = mysqli_query($connection, $category_query);
                                        $category = mysqli_fetch_assoc($category_result);
                                        ?>
                                        <a href="<?= ROOT_URL ?>category-posts.php?id=<?= $post['category_id'] ?>"><span class="tag"><?= $category['title'] ?></span></a>
                                        <span class="blog-date"><?= date("M d, Y - H:i", strtotime($post['date_time'])) ?></span>
                                    </div>
                                    <h3 class="df-blog__title"><a href="<?= ROOT_URL ?>blog-details.php?id=<?= $post['id'] ?>"><?= $post['title'] ?></a></h3>
                                    <p><?= substr(htmlspecialchars_decode($post['body']), 0, 120) ?>...</p>
                                    <div class="df-blog__btn">
                                        <a href="<?= ROOT_URL ?>blog-details.php?id=<?= $post['id'] ?>" class="primary-btn">Read More
                                            <span class="icon__box">
                                                <img class="icon__first" src="assets/img/icon/arrow-black.webp" alt="image not found">
                                                <img class="icon__second" src="assets/img/icon/arrow-theme.webp" alt="image not found">
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php else : ?>
                        <div class="alert__message error lg">
                            <p class="text-center">
                                No posts found for this category
                            </p>
                        </div>
                    <?php endif ?>


                    <div class="df-blog2__area-btn text-center mt-60 wow fadeInUp" data-wow-delay=".3s">
                        <a href="#" class="load-btn">Load More<i class="fa-duotone fa-spinner"></i>
                        </a>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-12">
                    <div class="sidebar-widget mb-35">
                        <div class="blog-inner-title mb-30">
                            <h4>Search</h4>
                        </div>
                        <div class="sidebar-search p-relative">
                            <form action="<?= ROOT_URL ?>search.php" method="get">
                                <input type="search" name="search" placeholder="Search...">
                                <button type="submit" name="submit"><i class="icon-049-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="sidebar-widget mb-35">
                        <div class="blog-inner-title mb-30">
                            <h4>Recent Post</h4>
                        </div>
                        <?php
                        $recent_post_query = "SELECT * FROM posts ORDER BY date_time DESC limit 0,3";
                        $recent_post_result = mysqli_query($connection, $recent_post_query);
                        while ($recent_post = mysqli_fetch_assoc($recent_post_result)) :
                        ?>
                            <div class="blog-sideber-meta mb-25">

                                <div class="blog-sideber-img">
                                    <a href="<? ROOT_URL ?>blog-details.php"><img src="assets/img/blog/<?= $recent_post['thumbnail'] ?>" alt="blog-meta"></a>
                                </div>
                                <div class="blog-sideber-text">
                                    <div class="df-blog3__meta">
                                        <span class="blog-date"><?= date("M d, Y", strtotime($recent_post['date_time'])) ?></span>
                                    </div>
                                    <h4><a href="<?= ROOT_URL ?>blog-details.php?id=<?= $recent_post['id'] ?>"><?= $recent_post['title'] ?></a></h4>
                                </div>

                            </div>
                        <?php endwhile; ?>
                    </div>
                    <div class="sidebar-widget mb-35">
                        <div class="blog-inner-title mb-30">
                            <h4>Category</h4>
                        </div>
                        <div class="blog-category-link">
                            <?php
                            $all_categories_query = "SELECT * FROM categories ";
                            $all_categories_result = mysqli_query($connection, $all_categories_query);

                            ?>
                            <ul>
                                <?php while ($category = mysqli_fetch_assoc($all_categories_result)) : ?>
                                    <li><a href="<?= ROOT_URL ?>category-posts.php?id=<?= $category['id'] ?>"><?= $category['title'] ?></a></li>
                                <?php endwhile ?>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget mb-35">
                        <div class="blog-inner-title mb-30">
                            <h4>Tags</h4>
                        </div>
                        <div class="sidebar-widget-tag">
                            <a href="blog-classphp">Plumber</a>
                            <a href="blog-classphp">DIYplumbing</a>
                            <a href="blog-classphp">Fixing</a>
                            <a href="blog-classphp">Plumbtips</a>
                            <a href="blog-classphp">Plumbmat</a>
                            <a href="blog-classphp">Plumb</a>
                            <a href="blog-classphp">Plumbingpros</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog area end  -->

</main>

<?php
include "components/footer.php"
?>