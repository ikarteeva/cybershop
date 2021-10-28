<div id="nav-bar">
    <div class="container">
        <ul>
            <li><a href="./index.php">Главная</a></li>
            <li><a href="./aboutus.php">О нас</a></li>
            <li><a href="./products.php">Товары</a></li>
            <li><a href="./contactus.php">Контакты</a></li>
            <?php
                if(isset($_SESSION['admin']))
                {
                    echo '<li><a href="./admin_panel.php">Панель администратора</a></li>';
                }
            ?>
        </ul>
    </div>
</div>
