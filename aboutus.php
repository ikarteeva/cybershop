<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О нас</title>

    <link rel="icon" href="./images/logo.png">

    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/8408dd06d8.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./styles/aboutus.css">
</head>
<body>
    <?php include('./header.php') ?>
    <?php include('./navbar.php') ?>
    <main>
      <section id="aboutus" class="container">

        <div class="content aboutus-grid">
          <div class="about-text">
            <h1><span class="color-primary">О</span> нас</h1>
            <p>
             Мы хотим дать человеку возможность стать больше чем его тело.
              <br>
             Двигайтесь с нами в светлое будущее!
            </p>
          </div>
          <div class="about-img1"></div>
        </div>

        <div class="content aboutus-grid">
          <div class="about-img2"></div>
          <div class="about-text">
            <h1><span class="color-primary">Почему</span> мы</h1>
            <p>
              А кто кроме нас?
            </p>
          </div>
        </div>

      </section>

      <section id="reviews" class="container">
        <div class="content">
          <h1><span class="color-primary">Отзывы</span> Наших покупателей</h1>
          <div>

            <div class="review-card">
              <div class="review-user">
                <i class="fas fa-user fa-2x"></i>
                <i class="fab fa-twitter fa-2x"></i>
              </div>
              <div class="review">
                <h5>@Scorpion</h5>
                <p>Зажгли меня по новой 🔥</p>
              </div>
            </div>

            <div class="review-card">
              <div class="review-user">
                <i class="fas fa-user fa-2x"></i>
                <i class="fab fa-twitter fa-2x"></i>
              </div>
              <div class="review">
                <h5>@SabZiro</h5>
                <p>Теперь я готов заморозить любого🌨️</p>
              </div>
            </div>

            <div class="review-card">
              <div class="review-user">
                <i class="fas fa-user fa-2x"></i>
                <i class="fab fa-twitter fa-2x"></i>
              </div>
              <div class="review">
                <h5>@ikarteeva</h5>
                <p>Господи примите сайт💯.</p>
              </div>
            </div>

          </div>
        </div>
      </section>
    </main>
    <?php include('./footer.php') ?>
</body>
</html>
