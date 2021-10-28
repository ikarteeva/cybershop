<?php
    session_start();
?>
<header id="top-panel">

    <div class="container">
        <div class="top-panel-flex">
            <a class="logo" href="./index.php">
                <h1>Кибер<br>Shop</h1><span class="logo-icon fas fa-flushed fa-3x"></span>
            </a>

            <div class="login-media">
                <?php
                    if(!isset($_SESSION["admin"]))
                    {
                        echo '<a href="./login_page.php" class="btn btn-light">Войти</a>';
                    }
                    else
                    {
                        echo '<a href="./backend/logout.php" class="btn btn-dark">Выйти</a>';
                    }
                ?>
                <ul class="media">
                    <li><a href="https://www.facebook.com/"><img src="./images/facebook.png" alt="404" height="40px"></a></li>
                    <li><a href="https://twitter.com/?lang=ru"><img src="./images/twitter.png" alt="404" height="40px"></a></li>
                    <li><a href="https://www.instagram.com/"><img src="./images/instagram.png" alt="404" height="40px"></a></li>
                </ul>
                <div id="hamburger" class="hamburger" onClick="navbar()"><div></div></div>
            </div>
        </div>
    </div>
</header>
