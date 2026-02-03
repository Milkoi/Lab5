<!DOCTYPE html>
<html>
<head>
    <title>Chi tiết sản phẩm</title>
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="container mt-4">

<h2>Chi tiết sản phẩm</h2>

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <td><?= $product['id'] ?></td>
    </tr>
    <tr>
        <th>Tên</th>
        <td><?= $product['name'] ?></td>
    </tr>
    <tr>
        <th>Giá</th>
        <td><?= number_format($product['price']) ?> đ</td>
    </tr>
    <tr>
        <th>Hình ảnh</th>
        <td>
            <?php if (!empty($item['image'])): ?>
                <img src="public/images/<?= $item['image'] ?>" width="80">
            <?php else: ?>
                <span>Không có ảnh</span>
            <?php endif;?>
        </td>
    </tr>
</table>

<a href="index.php?page=product-list" class="btn btn-secondary">Quay lại</a>

</body>
</html>
