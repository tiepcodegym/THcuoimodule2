<?php
include_once "app/models/ProductModel.php";

class ProductController
{
    protected $ProductModel;

    public function __construct()
    {
        $this->ProductModel = new ProductModel();
    }

    public function showAll()
    {
        $products = $this->ProductModel->getAll();
        include_once "app/views/product/list.php";
    }

    public function delete()
    {
        if (isset($_REQUEST['id'])) {
            $this->ProductModel->delete($_REQUEST['id']);
            header("location:index.php?page=product-list");
        }
    }

    public function addnewProduct()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            include_once "app/views/product/create.php";
        } else {
            $this->ProductModel->stord($_REQUEST);
            header("location:index.php?page=product-list");
        }
    }

    public function edit()
    {
        if (isset($_REQUEST['id'])) {
            $product = $this->ProductModel->getById($_REQUEST['id']);
            include_once "app/views/product/update.php";
        }
    }

    public function updateProduct()
    {
        if ($_REQUEST['id']){
            $this->ProductModel->update($_REQUEST);
            header("location:index.php?page=product-list");
        }
    }

    public function search()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $products = $this->ProductModel->search($_REQUEST['search']);
            include_once "app/views/product/list.php";
        }
    }
}