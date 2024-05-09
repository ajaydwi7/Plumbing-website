<?php
include "partials/header.php";

//fetch categories from database
$query = "SELECT * FROM tags ORDER BY title";
$tags = mysqli_query($connection, $query)

?>


<section class="dashboard">
    <?php if (isset($_SESSION['add-tag-success'])) : ?>
        <div class="alert__message success container">
            <p>
                <?= $_SESSION['add-tag-success'];
                unset($_SESSION['add-tag-success']);
                ?>
            </p>

        </div>
    <?php
    elseif (isset($_SESSION['add-tag'])) : ?>
        <div class="alert__message error container">
            <p>
                <?= $_SESSION['add-tag'];
                unset($_SESSION['add-tag']);
                ?>
            </p>

        </div>
    <?php endif ?>
    <?php if (isset($_SESSION['edit-tag-success'])) : ?>
        <div class="alert__message success container">
            <p>
                <?= $_SESSION['edit-tag-success'];
                unset($_SESSION['edit-tag-success']);
                ?>
            </p>

        </div>
    <?php
    elseif (isset($_SESSION['edit-tag'])) : ?>
        <div class="alert__message error container">
            <p>
                <?= $_SESSION['edit-tag'];
                unset($_SESSION['edit-tag']);
                ?>
            </p>

        </div>
    <?php endif ?>
    <div class="container dashboard__container">

        <button id="show__sidebar-btn" class="sidebar__toggle"><i class="uil uil-angle-right-b"></i></button>
        <button id="hide__sidebar-btn" class="sidebar__toggle"><i class="uil uil-angle-left-b"></i></button>

        <aside>
            <ul>
                <li>
                    <a href="<?= ROOT_URL ?>admin/add-post.php">
                        <i class="uil uil-pen"></i>
                        <h5>Add Post</h5>
                    </a>
                </li>

                <li>
                    <a href="<?= ROOT_URL ?>admin/index.php">
                        <i class="uil uil-postcard"></i>
                        <h5>Manage Posts</h5>
                    </a>
                </li>
                <?php if (isset($_SESSION['user_is_admin'])) : ?>
                    <li>
                        <a href="<?= ROOT_URL ?>admin/add-user.php">
                            <i class="uil uil-user-plus"></i>
                            <h5>Add User</h5>
                        </a>
                    </li>

                    <li>
                        <a href="<?= ROOT_URL ?>admin/manage-users.php">
                            <i class="uil uil-users-alt"></i>
                            <h5>Manage Users</h5>
                        </a>
                    </li>
                    <li>
                        <a href="<?= ROOT_URL ?>admin/add-tag.php">
                            <i class="uil uil-edit"></i>
                            <h5>Add Category</h5>
                        </a>
                    </li>
                    <li>
                        <a href="<?= ROOT_URL ?>admin/manage-tags.php" class="active">
                            <i class="uil uil-list-ul"></i>
                            <h5>Manage Categories</h5>
                        </a>
                    </li>
                    <li>
                        <a href="<?= ROOT_URL ?>admin/add-tag.php">
                            <i class="uil uil-edit"></i>
                            <h5>Add Tag</h5>
                        </a>
                    </li>
                    <li>
                        <a href="<?= ROOT_URL ?>admin/manage-tags.php">
                            <i class="uil uil-list-ul"></i>
                            <h5>Manage Tags</h5>
                        </a>
                    </li>
                <?php endif ?>
            </ul>
        </aside>
        <main>
            <h2>Manage Tags</h2>
            <?php if (mysqli_num_rows($tags) > 0) : ?>
                <table>
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($tag = mysqli_fetch_assoc($tags)) : ?>
                            <tr>
                                <td><?= $tag['title'] ?></td>
                                <td><a href="<?= ROOT_URL ?>admin/edit-tag.php?id=<?= $tag['id'] ?>" class="btn sm">Edit</a></td>
                                <td><a href="<?= ROOT_URL ?>admin/delete-tag.php?id=<?= $tag['id'] ?>" class="btn sm danger">Delete</a></td>
                            </tr>
                        <?php endwhile ?>
                    </tbody>
                <?php else : ?>
                    <div class="alert__message error">
                        No tags found
                    </div>
                <?php endif ?>
                </table>
        </main>
    </div>
</section>




<?php
include "../partials/footer.php";
?>