<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang Chủ</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<a href="index.php?page=product-list">Products</a>
<?php
include_once "app/controllers/ProductController.php";
$productController = new ProductController();
$page = $_GET['page'] ?? null;
switch ($page) {
    case "product-list":
        $productController->showAll();
        break;
    case "product-delete":
        $productController->delete();
        break;
    case "product-create":
        $productController->addnewProduct();
        break;
    case "product-update":
        if ($_SERVER["REQUEST_METHOD"] == "GET"){
            $productController->edit();
        }else{
            $productController->updateProduct();
        }
        break;
    default:
        if (isset($_REQUEST['search'])){
            $productController->search();
        }
}
?>
</body>

</html>
