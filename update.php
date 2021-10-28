<?php
    session_start();
    if(!isset($_SESSION['admin']))
    {
        header('Location: ./login_page.php');
    }

    if(!isset($_GET['id']))
    {
        header('Location: ./admin_panel.php');
    }
    else
    {
        include('./backend/connection.php');
        $id = $_GET['id'];
        $query = "SELECT * FROM products WHERE product_id=" . $id . ";";
        $result = $conn->query($query);
        $product = mysqli_fetch_array($result);
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добро пожаловать!</title>

    <link rel="icon" href="./images/logo.png">

    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/8408dd06d8.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./styles/update.css">
</head>
<body>
    <div id="add-product">
        <div class="form-wrap">
            <h1 class="m-heading">
                <span class="color-primary">Редактировать</span>
            </h1>
            <?php
                if(isset($_GET['perc']))
                {
                    echo '<div class="alert alert-danger" role="alert">Error! Percentage must be lower then equal to 100.</div>';
                }
                else if(isset($_GET['img']))
                {
                    echo '<div class="alert alert-danger" role="alert">Error! Failed To Upload Image.</div>';
                }
            ?>
            <form action="./backend/edit.php?id=<?php echo $_GET['id']; ?>" method="POST" enctype="multipart/form-data">
                <div id="p-name" class="form-group">
                    <label for="productname">Название</label>
                    <input type="text" name="productname" value="<?php echo $product['product_name']; ?>" placeholder="Введите название товара" required>
                </div>
                <div id="p-price" class="form-group">
                    <label for="productprice">Цена</label>
                    <input type="number" min="0" step="0.01" name="productprice" value="<?php echo $product['product_price']; ?>" placeholder="Введите цену товара" required>
                </div>
                <div id="p-code" class="form-group">
                    <label for="productcode">Артикул</label>
                    <input type="text" name="productcode" value="<?php echo $product['product_code']; ?>" placeholder="Введите артикул" required>
                </div>
                <div id="p-discount" class="form-group">
                    <label for="productdiscount">Скидка</label>
                    <input type="number" min="0" max="100" step="0.1" name="productdiscount" value="<?php echo $product['product_discount']; ?>" placeholder="Введите скидку в %" required>
                </div>
                <div id="p-sizes" class="form-group">
                    <label for="productsizes">Доступные размеры</label>
                    <input type="text" name="productsizes" value="<?php echo $product['product_sizes']; ?>" placeholder="Введите доступные размеры" required>
                </div>
                <div id="p-quantity" class="form-group">
                    <label for="productquantity">Количество</label>
                    <input type="number" min="0" step="0.01" name="productquantity" value="<?php echo $product['product_quantity']; ?>" placeholder="Введите количество" required>
                </div>
                <div id="p-img" class="form-group">
                    <label for="productimage">Изображение</label>
                    <input type="file" name="img" class="form-control-file">
                </div>
                <div id="p-image" class="form-group">
                    <img src="./product_imgs/<?php echo $product['product_image']; ?>" alt="404">
                </div>
                <div id="p-description" class="form-group">
                    <label for="desciption">Описание</label>
                    <textarea name="description" placeholder="Enter Product Description"><?php echo $product['product_detail']; ?></textarea>
                </div>
                <input class="btn btn-primary" type="submit" value="Сохранить" name="save">
                <a href="./admin_panel.php" class="btn btn-secondary">Отмена</a>
            </form>
        </div>
    </div>
</body>
</html>
