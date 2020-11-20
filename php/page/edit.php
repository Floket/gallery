<?php
include('php/page/layout/navbar.php');
$data = db::onePost($_GET['id']);
$data = $data['0'];
print_r($data);

?>
<section class="admin-panel">
    <div class="admin-bar">
        <a href="/admin">Сhange by note</a>
        <a href="/admin/newpost">New note</a>
    </div>
</section>

<div class="post__wrapper">
    <form action="/edit_page?id=<?php echo $_GET['id']?>" method="POST" enctype="multipart/form-data">
        <div class="card-edit__wrapper">
            <div class="card-edit" style="background-image: url(/img/<?php echo $data['img_name']?>);">

            </div>
        </div>
        <div class="post__block-img">
            <img class="post__img" src="/img/<?php echo $data['img_name']?>">
        </div>
        <div style="margin-top : 5px;">
            <span> Type view image: </span>
            <input class="check" type="radio" name="view__img" value="slider" checked><lable> slider</lable>
            <input class="check" type="radio" name="view__img" value="card"><lable> card</lable>
        </div>


        <span>background position</span>

        <input class="bg__option" type="range" min="0" max="100" step="1" value="<?php echo $data['positionX']?>">
        <input type="text" name="positionX" value="<?php echo $data['positionX']?>">

        <span>Title text</span>
        <input type="hidden" name="firstFName">
        <input type="hidden" name="post__id" value="<?php echo $_GET['id']?> " ">
        <input type="hidden" name="edit">
        <input type="hidden" name="file_name" value="<?php echo $data['img_name']?>"">
        <input type="text" name="title" value="<?php echo $data['title']?>">
        <span>Description</span>
        <textarea type="text" name="text"><?php echo $data['text']?></textarea>
        <input type="file" name="fname">
        <div class="button-item">
            <input class="submit" type="submit" value="Send">
        </div>
        <div class="message__wrapper">
            <?php
            db::editPost( $_GET['id']);
            ?>
        </div>
    </form>
</div>

<script src="/script/editImg.js"></script>
<script src="/script/navbar.js"></script>




