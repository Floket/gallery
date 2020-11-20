<?php
include('php/page/layout/navbar.php');
?>

<section class="admin-panel">
    <div class="admin-bar">
        <a href="/admin">Edit by note</a>
        <a href="/admin/newpost">New note</a>
    </div>
</section>

<div class="post__wrapper">
    <form action="/admin/newpost" method="POST" enctype="multipart/form-data">

        <span>Title text</span>
        <input type="text" name="title">
        <span>Description</span>
        <textarea type="text" name="text"></textarea>
        <input type="file" name="fname">
        <div class="button-item">
            <input class="submit" type="submit" value="Send">
        </div>
        <div class="message__wrapper">
            <?php
                db::sendPost();
            ?>
        </div>
    </form>
</div>
<script src="/script/navbar.js"></script>

