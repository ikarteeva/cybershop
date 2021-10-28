<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Наши контакты</title>

    <link rel="icon" href="./images/logo.png">

    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/8408dd06d8.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./styles/contactus.css">

</head>
<body>
    <?php include('./header.php') ?>
    <?php include('./navbar.php') ?>
    <main>
      <section id="contact" class="container">

        <div class="content contact-info">
          <div class="box">
            <i class="fas fa-hotel fa-3x"></i>
            <h2>Адрес</h2>
            <p>Иркутск, Ленина, 11</p>
          </div>
          <div class="box">
            <i class="fas fa-phone fa-3x"></i>
            <h2>Телефонный номер</h2>
            <p>+89501455333</p>
          </div>
          <div class="box">
            <i class="fas fa-envelope fa-3x"></i>
            <h2>Почта</h2>
            <p>ikarteeva@gmail.com</p>
          </div>
        </div>

        <div class="content form-n-map">

          <div class="contact-form">
            <h1 class="m-heading">
                <span class="color-primary">Свяжитесь</span> с нами!
            </h1>
            <form>
                <div class="form-group">
                    <label for="name">Имя</label>
                    <input type="text" id="name" name="name" placeholder="Введите свое имя">
                </div>
                <div class="form-group">
                    <label for="email">Почта</label>
                    <input type="email" id="email" name="email" placeholder="example@email.com">
                </div>
                <div class="form-group">
                    <label for="messege">Сообщение</label>
                    <textarea name="messege" id="messege" placeholder="Введите сообщение"></textarea>
                </div>
                <input class="bttn" type="submit" value="Отправить">
            </form>
          </div>
        <div class="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2440.936985226869!2d104.2799964512514!3d52.28084597967031!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5da83b4c83aaf8f9%3A0xbcf9d51d4b472196!2z0YPQuy4g0JvQtdC90LjQvdCwLCAxMSwg0JjRgNC60YPRgtGB0LosINCY0YDQutGD0YLRgdC60LDRjyDQvtCx0LsuLCA2NjQwMjU!5e0!3m2!1sru!2sru!4v1619042261858!5m2!1sru!2sru" width=100% height=100% style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>

      </div>
      </section>
    </main>
    <?php include('./footer.php') ?>
</body>
</html>
