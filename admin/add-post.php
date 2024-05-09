<?php
include "partials/header.php";

// fetch categories from database
$query = "SELECT * FROM categories";
$categories = mysqli_query($connection, $query);

// fetch tags from database
$tag_query = "SELECT * FROM tags";
$tags = mysqli_query($connection, $tag_query);

// get back form data if form was invalid

$title = $_SESSION['add-post-data']['title'] ?? null;
$body = $_SESSION['add-post-data']['body'] ?? null;
unset($_SESSION['add-post-data']);
?>



<section class="form__section">
    <div class="container form__section-container">
        <h2>Add Post</h2>
        <?php if (isset($_SESSION['add-post'])) : ?>
            <div class="alert__message error">
                <p>
                    <?=
                    $_SESSION['add-post'];
                    unset($_SESSION['add-post']);
                    ?>
                </p>
            </div>
        <?php endif ?>
        <form action="<?= ROOT_URL ?>admin/add-post-logic.php" enctype="multipart/form-data" method="POST">
            <input type="text" name="title" value="<?= $title ?>" placeholder="Title">
            <select name="category_id">
                <?php while ($category = mysqli_fetch_assoc($categories)) : ?>
                    <option value="<?= $category['id'] ?>"><?= $category['title'] ?></option>
                <?php endwhile ?>
            </select>
            <select name="tag_id">
                <?php while ($tag = mysqli_fetch_assoc($tags)) : ?>
                    <option value="<?= $tag['id'] ?>"><?= $tag['title'] ?></option>
                <?php endwhile ?>
            </select>
            <?php if (isset($_SESSION["user_is_admin"])) : ?>
                <div class="form__control inline">
                    <input type="checkbox" name="is_featured" value='1' id="is_featured" checked>
                    <label for="is_featured">Featured</label>
                </div>
            <?php endif ?>

            <textarea name="body" id="content" placeholder="Body"><?= $body ?></textarea>

            <div class="form__control">
                <label for="thumbnail">Add Thumbnail</label>
                <input type="file" name="thumbnail" id="thumbnail">
            </div>
            <button type="submit" name="submit" class="btn">Add Post</button>
        </form>
    </div>
</section>

<?php
include '../partials/footer.php';
?>