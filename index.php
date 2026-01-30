<?php
require 'vendor/autoload.php';

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

