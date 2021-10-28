<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Панель администратора</title>

    <link rel="icon" href="./images/logo.png">

    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/8408dd06d8.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./styles/admin.css">
</head>
<body>
    <?php include('./header.php') ?>
    <?php
        if(!isset($_SESSION['admin']))
        {
            header('Location: ./login_page.php');
        }

        include('./backend/connection.php');

        $query = "SELECT * FROM products;";

        $result = $conn->query($query);
    ?>
    <?php include('./navbar.php') ?>
    <main>
        <div class="admin-panel">
            <div class="admin-welome">
                <h2><i class="fas fa-user-circle"></i> Добро пожаловать, <?php echo $_SESSION["admin"]; ?></h2>
            </div>
            <div class="admin-actions content">
                <a class="btn btn-primary btn-lg" href="./add_product.php">Добавить новый продукт</a>
            </div>
            <div class="products-table">
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Название</th>
                            <th scope="col">Цена</th>
                            <th scope="col">Скидка(%)</th>
                            <th scope="col">Количество</th>
                            <th scope="col">Изображение</th>
                            <th scope="col">Что сделать?</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($data = mysqli_fetch_array($result))
                            { ?>
                                <tr>
                                    <td><?php echo $data['product_id'] ?></td>
                                    <td><?php echo $data['product_name'] ?></td>
                                    <td><?php echo $data['product_price'] ?></td>
                                    <td><?php echo $data['product_discount'] ?></td>
                                    <td><?php echo $data['product_quantity'] ?></td>
                                    <td>
                                        <img class="p-img" src="./product_imgs/<?php echo $data['product_image']; ?>" alt="Responsive image">
                                    </td>
                                    <td>
                                        <a class="btn btn-warning" href="./update.php?id=<?php echo $data['product_id']; ?>">
                                            <span class="fas fa-edit"></span>
                                        </a>
                                        <button class="btn btn-danger" onclick="delete_row(<?php echo $data['product_id']; ?>, '<?php echo $data['product_image']; ?>')">
                                            <span class="fas fa-trash-alt"></span>
                                        </button>
                                    </td>
                                </tr>

                            <?php }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <?php include('./footer.php') ?>
</body>
</html>
