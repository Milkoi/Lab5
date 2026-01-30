<?php
namespace App\Controllers;

use App\Models\Product;

class ProductController
{
    public function index()
    {
        $productModel = new Product();
        $products = $productModel->getAllProducts();

        require_once __DIR__ . "/../../views/product_list.php";
    }
}
