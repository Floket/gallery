

<?php

include('php/page/layout/navbar.php');

?>
    <section class="login">
        <div class="login__wrapper">
        <form class="login" action="/login"  method="POST">

            <div class="login__text">
                <span>Login</span><br>
                <span>Password</span>
            </div>

            <div class="login__input">
                <input name="login" type="text"><br>
                <input name="password" type="password">


            </div>
            <div class="login__wrapper-btn">
                <input  value="Enter" type="submit">

            </div>
            <div class="login__message">
                <?php db::loginUser();?>
            </div>
        </form>

        </div>
    </section>

<script src="/script/navbar.js"></script>
