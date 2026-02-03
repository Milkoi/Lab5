<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Danh sách sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

<h2 class="mb-3">Danh sách sản phẩm</h2>

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Tên</th>
            <th>Giá</th>
            <th>Hình ảnh</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?= $product['id'] ?></td>
                <td><?= $product['name'] ?></td>
                <td><?= number_format($product['price']) ?> VND</td>
                <td>
                    <?php if (!empty($product['image'])): ?>
                        <img src="<?= $product['image'] ?>" width="80">
                    <?php else: ?>
                        Không có ảnh
                    <?php endif; ?>
                </td>
                <td>
                    <a href="index.php?page=product-edit&id=<?= $product['id'] ?>"
                        class="btn btn-warning btn-sm">
                        Sửa
                    </a>
                    <a href="#" class="btn btn-danger btn-sm">Xóa</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>
