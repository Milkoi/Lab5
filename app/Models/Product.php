<?php
namespace App\Models;

use PDO;

class Product extends BaseModel {

    public function all() {
        $stmt = $this->pdo->query("SELECT * FROM products");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function delete($id) {
        $stmt = $this->pdo->prepare("DELETE FROM products WHERE id = ?");
        $stmt->execute([$id]);
    }

    public function find($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM products WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id, $data) {
    $sql = "UPDATE products
            SET name = ?, price = ?, description = ?, image = ?
            WHERE id = ?";

    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([
        $data['name'],
        $data['price'],
        $data['description'],
        $data['image'],
        $id
    ]);
}

    public function insert($data) {
    $sql = "INSERT INTO products (name, price, description, image)
            VALUES (?, ?, ?, ?)";

    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([
        $data['name'],
        $data['price'],
        $data['description'],
        $data['image']
    ]);

}

}
