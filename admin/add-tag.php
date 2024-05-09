<?php
include "partials/header.php";
$title = $_SESSION["add-tag-data"]['title'] ?? null;
$description = $_SESSION["add-tag-data"]['description'] ?? null;

unset($_SESSION['add-tag-data'])
?>

<section class="form__section">

    <div class="container form__section-container">
        <h2>Add Tag</h2>
        <?php if(isset($_SESSION['add-tag'])): ?>
        <div class="alert__message error">
            <p><?=$_SESSION['add-tag'];
            unset($_SESSION['add-tag']);
            ?></p>
        </div>
        <?php endif?>
        <form action="<?= ROOT_URL ?>admin/add-tag-logic.php" method="POST">
            <input type="text" name="title"        value = "<?=$title?>"placeholder="Title">
            <textarea  rows="4" name="description" value = "<?=$description?>"placeholder="Description"></textarea>

            <button type="submit" name="submit" class="btn">Add Tag</button>
        </form>
    </div>


    

</section>

<?php
include "../partials/footer.php";
?>
