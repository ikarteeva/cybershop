<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>

    <link rel="icon" href="./images/logo.png">

    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/8408dd06d8.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./styles/login.css">
</head>
<body>
    <?php include('./header.php') ?>
    <?php include('./navbar.php') ?>
    <main>
        <div class="content f-box">
            <div class="login">
                <div class="pic">
                    <img class="responsive" src="./images/signin-image.jpg" alt="404">
                </div>
                <div class="f-box">
                    <div class="form-wrap">
                        <h1 class="l-heading">
                            <span class="color-primary">Войти</span>
                        </h1>

                        <?php
                            if(isset($_GET['login']))
                            {
                                echo '<div class="alert alert-danger" role="alert">
                                Неверное имя OR <br> Пароль!
                                </div>';
                            }
                        ?>

                        <form action="./backend/login.php" method="POST">
                            <div class="form-group">
                                <label for="adminname"><i class="fas fa-user"></i></label>
                                <input type="text" name="adminname" placeholder="Логин" required>
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="fas fa-key"></i></label>
                                <input type="password" name="password" placeholder="Пароль" required>
                            </div>
                            <input class="bttn" type="submit" name="Login" value="Войти">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include('./footer.php') ?>
</body>
</html>
