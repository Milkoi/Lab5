<?php
namespace App\Controllers;

use App\Models\Product;

class ProductController {

    public function index() {
        $productModel = new Product();
        $products = $productModel->all();

        require_once __DIR__ . '/../../views/products/list.php';
    }

    public function delete() {
        $id = $_GET['id'] ?? null;

        if ($id) {
            $productModel = new Product();
            $productModel->delete($id);
        }

        header("Location: index.php?page=product-list");
        exit;
    }

    public function detail() {
        $id = $_GET['id'] ?? null;

        if (!$id) {
            echo "Không có ID sản phẩm";
            return;
        }

        $productModel = new Product();
        $product = $productModel->find($id);

        require_once __DIR__ . '/../../views/products/detail.php';
    }
    public function create() {
    require_once __DIR__ . '/../../views/products/add.php';
}

    public function store() {
        $name = $_POST['name'] ?? '';
        $price = $_POST['price'] ?? '';
        $description = $_POST['description'] ?? '';
        $image = $_POST['image'] ?? '';

        if ($name == '' || $price == '') {
            echo "Vui lòng nhập đầy đủ Tên và Giá";
            return;
        }

        $productModel = new Product();
        $productModel->insert([
            'name' => $name,
            'price' => $price,
            'description' => $description,
            'image' => $image
        ]);

        header("Location: index.php?page=product-list");
        exit;
    }

    public function edit() {
    $id = $_GET['id'] ?? null;

    if (!$id) {
        echo "Thiếu ID sản phẩm";
        return;
    }

    $productModel = new Product();
    $product = $productModel->find($id);

    require_once __DIR__ . "/../../views/products/edit.php";

    }

    public function update() {
    $id = $_POST['id'] ?? null;
    $name = $_POST['name'] ?? '';
    $price = $_POST['price'] ?? '';
    $description = $_POST['description'] ?? '';
    $image = $_POST['image'] ?? '';

    if (!$id || $name == '' || $price == '') {
        echo "Dữ liệu không hợp lệ";
        return;
    }

    $productModel = new Product();
    $productModel->update($id, [
        'name' => $name,
        'price' => $price,
        'description' => $description,
        'image' => $image
    ]);

    header("Location: index.php?page=product-list");
    exit;
}


}
