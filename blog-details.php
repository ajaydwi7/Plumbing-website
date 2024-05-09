<?php
include "components/header.php";

if (isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT * FROM posts WHERE id=$id";
    $result = mysqli_query($connection, $query);
    $post = mysqli_fetch_assoc($result);
    $author_id = $post['author_id'];
    $author_query = "SELECT * FROM users WHERE id=$author_id";
    $author_result = mysqli_query($connection, $author_query);
    $author = mysqli_fetch_assoc($author_result);

    // Query for previous post
    $previous_query = "SELECT * FROM posts WHERE id < $id ORDER BY id DESC LIMIT 1";
    $previous_result = mysqli_query($connection, $previous_query);
    $previous_post = mysqli_fetch_assoc($previous_result);

    // Query for next post
    $next_query = "SELECT * FROM posts WHERE id > $id ORDER BY id ASC LIMIT 1";
    $next_result = mysqli_query($connection, $next_query);
    $next_post = mysqli_fetch_assoc($next_result);

    // Fetch comments from the database for the current post
    $comments_query = "SELECT * FROM comments WHERE post_id = $id ORDER BY created_at DESC";
    $comments_result = mysqli_query($connection, $comments_query);
} else {
    header('location: ' . ROOT_URL . 'blog.php');
    die();
}
?>

<!-- Add your site or application content here -->
<main>

    <div class="adjust-header-space bg-common-white"></div>

    <!-- page title area start  -->
    <section class="page-title-area-2 breadcrumb-spacing bg-theme-4 section-spacing">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-9">
                    <div class="page-title-wrapper-2 text-center">
                        <h1 class="page__title-2 mb-25"><?= $post['title'] ?></h1>
                        <div class="breadcrumb-menu-2 d-flex justify-content-center">
                            <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                                <ul class="trail-items-2">
                                    <li class="trail-item-2 trail-begin"><a href="<? ROOT_URL ?>index.php"><span>Home</span></a></li>
                                    <li class="trail-item-2 trail-center"><a href="<? ROOT_URL ?>blog.php"><span>Blog</span></a></li>
                                    <li class="trail-item-2 trail-end"><span>Blog post</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- page title area start  -->

    <!-- blog area start  -->
    <section class="df-blog__area section-spacing fix">
        <div class="container">
            <div class="row g-5">
                <div class="col-xxl-8 col-xl-7 col-lg-7 col-md-12">
                    <div class="df-blog-details__wrap">
                        <div class="df-blog-details__box mb-30 wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="0.3">
                            <div class="df-blog-details__thumb p-relative">
                                <div class="df-blog-details__thumb-overlay wow"></div>
                                <img src="assets/img/blog/<?= $post['thumbnail'] ?>" alt="image not found">
                            </div>
                            <div class="df-blog-details__content mb-40">
                                <div class="df-blog-details__meta mb-25">
                                    <?php // fetch category from categories using category_id
                                    $category_id = $post['category_id'];
                                    $category_query = "SELECT * FROM categories WHERE id=$category_id";
                                    $category_result = mysqli_query($connection, $category_query);
                                    $category = mysqli_fetch_assoc($category_result);
                                    ?>
                                    <span><a href="<? ROOT_URL ?>blog-details.html"><i class="fa-thin fa-circle-user"></i>By <?= "{$author['firstname']} {$author['lastname']}" ?></a></span>
                                    <a href="<?= ROOT_URL ?>category-posts.php?id=<?= $post['category_id'] ?>"><span class="tag"><?= $category['title'] ?></span></a>
                                    <span><i class="fa-thin fa-calendar-days"></i><?= date("M d, Y", strtotime($post['date_time'])) ?></span>
                                    <span><a href="blog-details.html"><i class="fal fa-comments"></i> 04
                                            Comments</a></span>
                                </div>
                                <div></div>
                                <p class="df-blog-details__text mb-20"><?= htmlspecialchars_decode($post['body']) ?></p>

                                <div class="df-blog-details__tag-wrap d-flex align-items-center justify-content-between">
                                    <!-- get tag title of each post from tags table -->
                                    <?php
                                    $tag_id = $post['tag_id'];
                                    $tag_query = "SELECT title FROM tags WHERE id=$tag_id";
                                    $tag_result = mysqli_query($connection, $tag_query);
                                    $tag = mysqli_fetch_assoc($tag_result);
                                    ?>
                                    <div class="sidebar-widget-tag d-flex align-items-center flex-wrap">
                                        <a href="#"><?= $tag['title'] ?></a>
                                    </div>
                                </div>
                            </div>
                            <div class="df-blog-details__author-wrap wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="0.3">
                                <div class="df-blog-details__author-thumb">
                                    <img src="assets/img/blog/<?= $author['avatar'] ?>" alt="image not found">
                                </div>
                                <div class="df-blog-details__author-content">
                                    <a href="team-details.html">
                                        <h3 class="df-blog-details__author-name"><?= "{$author['firstname']} {$author['lastname']}" ?></h3>
                                    </a>
                                    <p class="df-blog-details__author-text">Dolor set ameyt conse adipiscing elit Ut
                                        et mass Aliquam in Pellentesque sit amet sen.</p>
                                    <div class="social-links">
                                        <ul>
                                            <li><a href="https://www.facebook.com/"><i class="icon-023-facebook-app-symbol"></i></a>
                                            </li>
                                            <li><a href="https://www.instagram.com/"><i class="icon-025-instagram"></i></a>
                                            </li>
                                            <li><a href="https://www.pinterest.com/"><i class="icon-029-pinterest"></i></a>
                                            </li>
                                            <li><a href="https://twitter.com/"><i class="icon-twitter-x"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="df-blog-details__nav mb-30 wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="0.3">
                            <div class="df-blog-details__nav-item">
                                <?php if ($previous_post) : ?>
                                    <a href="blog-details.php?id=<?= $previous_post['id'] ?>" class="circle-btn rotate">
                                        <span class="icon__box">
                                            <img class="icon__first" src="assets/img/icon/arrow-black.webp" alt="image not found">
                                            <img class="icon__second" src="assets/img/icon/arrow-white.webp" alt="image not found">
                                        </span>
                                    </a><?php endif; ?><span>Previous Post</span>

                            </div>
                            <div class="df-blog-details__nav-item  d-none d-sm-block">
                                <div class="df-blog-details__nav-dot">
                                    <img src="assets/img/icon/dot-icon.webp" alt="image not found">
                                </div>
                            </div>
                            <div class="df-blog-details__nav-item">
                                <?php if ($next_post) : ?>
                                    <span>Next Post</span>
                                    <a href="blog-details.php?id=<?= $next_post['id'] ?>" class="circle-btn">
                                        <span class="icon__box">
                                            <img class="icon__first" src="assets/img/icon/arrow-black.webp" alt="image not found">
                                            <img class="icon__second" src="assets/img/icon/arrow-white.webp" alt="image not found">
                                        </span>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <!-- Display comments -->
                        <div class="df-blog-details__comments">
                            <h3 class="df-blog-details__subtitle">Comments</h3>
                            <ul class="comments-list">
                                <?php while ($comment = mysqli_fetch_assoc($comments_result)) : ?>
                                    <li class="comment">
                                        <div class="comment-meta">
                                            <span class="comment-author"><?= $comment['name'] ?></span>
                                            <span class="comment-date"><?= date("M d, Y", strtotime($comment['created_at'])) ?></span>
                                        </div>
                                        <p><?= $comment['comment'] ?></p>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        </div>

                        <div class="post-comment-form mb-40 wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="0.3">
                            <!-- Display comments -->
                            <div class="df-blog-details__comments">
                                <h3 class="df-blog-details__subtitle">Comments</h3>
                                <ul class="comments-list">
                                    <?php while ($comment = mysqli_fetch_assoc($comments_result)) : ?>
                                        <li class="comment">
                                            <div class="comment-meta">
                                                <span class="comment-author"><?= $comment['name'] ?></span>
                                                <span class="comment-date"><?= date("M d, Y", strtotime($comment['created_at'])) ?></span>
                                            </div>
                                            <p><?= $comment['comment'] ?></p>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            </div>
                            <div class="df-booking2__form">
                                <h3 class="df-blog-details__subtitle mb-35">Leave a Reply</h3>
                                <form action="submit-comments.php" method="post">
                                    <div class="row gx-5">
                                        <div class="col-md-6">
                                            <div class="df-input-field">
                                                <input type="text" id="name" name="name" placeholder="Your Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="df-input-field">
                                                <input type="text" id="email" name="email" placeholder="Your Email">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="df-input-field">
                                                <textarea id="comment" name="comment" placeholder="Write Message Here..."></textarea>
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
                </div>
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-12">
                    <div class="sidebar-widget mb-35">
                        <div class="blog-inner-title mb-30">
                            <h4>Search</h4>
                        </div>
                        <div class="sidebar-search p-relative">
                            <form action="<?= ROOT_URL ?>search.php" method="get">
                                <input type="text" placeholder="Search...">
                                <button><i class="icon-049-search"></i></button>
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
                        <?php
                        $all_tags_query = "SELECT * FROM tags ";
                        $all_tags_result = mysqli_query($connection, $all_tags_query);
                        ?>
                        <div class="sidebar-widget-tag">
                            <?php while ($tag = mysqli_fetch_assoc($all_tags_result)) : ?>
                                <a href="<?= ROOT_URL ?>tag-posts.php?id=<?= $category['id'] ?>"><?= $tag['title'] ?></a>
                            <?php endwhile ?>
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