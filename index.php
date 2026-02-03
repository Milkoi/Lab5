<!-- require 'vendor/autoload.php';

$faker = Faker\Factory::create('vi_VN');

echo "<h2>Dữ liệu Faker</h2>";
echo "Tên: " . $faker->name . "<br>";
echo "Địa chỉ: " . $faker->address . "<br>";
echo "Email: " . $faker->email . "<br>";


use App\Models\Student;

$sv = new Student();
echo "<h2>............................</h2>";
echo $sv->getInfo();


echo "<h2>............................</h2>";
use App\Controllers\HomeController;
$page = $_GET['page'] ?? 'home';

if ($page === 'home') {
    $controller = new HomeController();
    $controller->index();
} else {
    echo "Page Not Found";
}
echo "<h2>............................</h2>";   -->




<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\Controllers\ProductController;

$page = $_GET['page'] ?? 'product-list';
$controller = new ProductController();

switch ($page) {
    case 'product-list':
        $controller->index();
        break;

    case 'product-add':
        $controller->create();
        break;

    case 'product-store':
        $controller->store();
        break;

    case 'product-delete':
        $controller->delete();
        break;

    case 'product-detail':
        $controller->detail();
        break;

    case 'product-edit':
        $controller->edit();
        break;

    case 'product-update':
        $controller->update();
        break;

    default:
        echo "404 - Page not found";
}



