<?php
include('php/page/layout/navbar.php');
$items = db::requestItems( 50);
?>


<section class="gallery">
    <div class="gallery__wrapper">
        <?php
        foreach ($items as $row){
            ?>
            <div class="card lazy vertical" style="background-image: url(); background-position-x: <?php echo $row['positionX'] . '%'?>; " data-src="/img/<?php echo $row['img_name']?>" data-id="<?php echo $row['id']?>">
                <div class="gallery-text">
                    <div class="gallery-text__title">
                        <?php echo $row['title']?>
                    </div>
                    <div class="gallery-text__sub">
                        <?php echo $row['text']?>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</section>

<div class="modal">
        <div class="modal__wrapper">
            <div class="modal__wrapper-scroll">

            <div class="modal__image">
                <div class="nav__left">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
            <path d="M379.644,477.872l-207.299-207.73c-7.798-7.798-7.798-20.486,0.015-28.299L379.643,34.128
                c7.803-7.819,7.789-20.482-0.029-28.284c-7.819-7.803-20.482-7.79-28.284,0.029L144.061,213.574
                c-23.394,23.394-23.394,61.459-0.015,84.838L351.33,506.127c3.907,3.915,9.031,5.873,14.157,5.873
                c5.111,0,10.224-1.948,14.128-5.844C387.433,498.354,387.446,485.691,379.644,477.872z"></path>
                        </svg>
                </div>
                <div class="modal__image-block">
                    <img class="left-img" src="" alt="">
                    <img class="main-img" src="" alt="">
                    <img class="right-img" src="" alt="">
                </div>
                <div class="nav__right">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
    <g>
        <g>
            <path d="M367.954,213.588L160.67,5.872c-7.804-7.819-20.467-7.831-28.284-0.029c-7.819,7.802-7.832,20.465-0.03,28.284
                l207.299,207.731c7.798,7.798,7.798,20.486-0.015,28.299L132.356,477.873c-7.802,7.819-7.789,20.482,0.03,28.284
                c3.903,3.896,9.016,5.843,14.127,5.843c5.125,0,10.25-1.958,14.157-5.873l207.269-207.701
                C391.333,275.032,391.333,236.967,367.954,213.588z"/>
        </g>
    </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
    </svg>

                </div>
            </div>

            <div class="modal__text">
                <div class="modal__title"></div>
                <div class="modal__sub-text"></div>
                <div class="modal__link">
                    <a href="" target="_blank" >Open photo</a>
                </div>
            </div>
            <div class="nav__close">
                <svg viewBox="0 0 329.26933 329" xmlns="http://www.w3.org/2000/svg"><path d="m194.800781 164.769531 128.210938-128.214843c8.34375-8.339844 8.34375-21.824219 0-30.164063-8.339844-8.339844-21.824219-8.339844-30.164063 0l-128.214844 128.214844-128.210937-128.214844c-8.34375-8.339844-21.824219-8.339844-30.164063 0-8.34375 8.339844-8.34375 21.824219 0 30.164063l128.210938 128.214843-128.210938 128.214844c-8.34375 8.339844-8.34375 21.824219 0 30.164063 4.15625 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921875-2.089844 15.082031-6.25l128.210937-128.214844 128.214844 128.214844c4.160156 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921874-2.089844 15.082031-6.25 8.34375-8.339844 8.34375-21.824219 0-30.164063zm0 0"/></svg>
            </div>
        </div>
    </div>
</div>
<script src="/script/imgLoad.js"></script>
<script src="/script/slider.js"></script>
<script src="/script/navbar.js"></script>