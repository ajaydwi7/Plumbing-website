<?php
include "partials/header.php";
if(isset($_GET['id'])){
    $id=filter_var($_GET['id'],FILTER_SANITIZE_NUMBER_INT);

    // fetch category from database
    $query="SELECT * FROM tags WHERE id=$id";
    $result=mysqli_query($connection,$query);
    if(mysqli_num_rows($result)==1){
        $tag = mysqli_fetch_assoc($result);
    }


}else{
    header("location: " . ROOT_URL . "admin/manage-tags.php");
    die();
}
?>


<section class="form__section">

    <div class="container form__section-container" >
        <h2>Edit Tags</h2>
        <form action="<?= ROOT_URL ?>admin/edit-tag-logic.php" method="POST">
           <input type="hidden"  name="id" value="<?=$tag['id']?>">
            <input type="text"  name="title" value="<?=$tag['title']?>" placeholder="Title">
            <textarea  rows="4" name="description" placeholder="Description"><?=$tag['description']?></textarea>

            <button type="submit" name ="submit" class="btn">Update Tag</button>
        </form>
    </div>


    

</section>

<?php
include "../partials/footer.php";
?>