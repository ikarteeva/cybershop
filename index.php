<?php
    include('./backend/connection.php');

    $query = "SELECT * FROM products ORDER BY product_id DESC;";
    $result = $conn->query($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>КиберShop</title>

    <link rel="icon" href="./images/logo.png">

    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/8408dd06d8.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
    <?php include('./header.php') ?>
    <?php include('./navbar.php') ?>
    <main>

      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./images/slider1.jpg" alt="First slide" width="100%" height="700px">
          </div>
          <div class="carousel-item">
            <img src="./images/slider2.jpg" alt="Second slide" width="100%" height="700px">
          </div>
          <div class="carousel-item">
            <img src="./images/slider3.jpg" alt="Third slide" width="100%" height="700px">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Предыдущая</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Следующая</span>
        </a>
      </div>

      <section id="about" class="container">
        <div class="content">
          <div>
            <center><h1><span class="color-primary">Кто</span> Мы</h1></center>
          <p>Стань больше чем тело</p>
          <a href="./aboutus.php" class="bttn">Перейти</a>
          </div>
          <div class="suit-img"></div>
        </div>
      </section>

      <section id="featured" class="container">
        <div class="content">
          <h1 class="featured-heading">
            <center><span class="color-primary">Наши</span> Товары</center>
          </h1>
          <div class="product-grid">
            <?php
                for($i = 0; $i < 4; $i++)
                {
                    $data = mysqli_fetch_array($result);
                    if($data['product_quantity'] == 0)
                  {
                    continue;
                  }
                    ?>
                    <a class="product" href="./product_page.php?id=<?php echo $data['product_id']; ?>">
                        <img src="./product_imgs/<?php echo $data['product_image']; ?>" alt="404" height="200px" width=100%>
                        <div class="product-info">
                            <h5><?php echo $data['product_name']; ?></h5>
                            <h6><?php echo $data['product_price']; ?>₽</h6>
                        </div>
                    </a>
              <?php
                }
              ?>
          </div>
        </div>
      </section>

      <section id="map12" class="container">
      <center><h1><span class="color-primary">Наше</span> Местоположение</h1></center>

    <center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2440.936985226869!2d104.2799964512514!3d52.28084597967031!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5da83b4c83aaf8f9%3A0xbcf9d51d4b472196!2z0YPQuy4g0JvQtdC90LjQvdCwLCAxMSwg0JjRgNC60YPRgtGB0LosINCY0YDQutGD0YLRgdC60LDRjyDQvtCx0LsuLCA2NjQwMjU!5e0!3m2!1sru!2sru!4v1619042261858!5m2!1sru!2sru" width="50%" height=500px style="border:0;" allowfullscreen="" loading="lazy"></iframe></center>
  </section>
    </main>
    <?php include('./footer.php') ?>
</body>
</html>
