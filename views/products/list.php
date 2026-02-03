<!DOCTYPE html>
<html>
<head>
    <title>Danh sách sản phẩm</title>
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="container mt-4">

<h2>Danh sách sản phẩm</h2>

<a href="index.php?page=product-add" class="btn btn-primary mb-3">
    + Thêm sản phẩm
</a>

<table class="table table-bordered table-striped align-middle">
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
        <?php foreach ($products as $item): ?>
            <tr>
                <td><?= $item['id'] ?></td>
                <td><?= $item['name'] ?></td>
                <td><?= number_format($item['price']) ?> đ</td>
                <td>
                    <?php if (!empty($item['image'])): ?>
                        <img src="public/images/<?= $item['image'] ?>" width="80">
                    <?php else: ?>
                        <span class="text-muted">Không có ảnh</span>
                    <?php endif; ?>
                </td>
                <td>
                    <a href="index.php?page=product-edit&id=<?= $item['id'] ?>"
                        class="btn btn-warning btn-sm">
                        Sửa
                    </a>
                    <a href="index.php?page=product-detail&id=<?= $item['id'] ?>"
                       class="btn btn-success btn-sm">
                        Chi tiết
                    </a>

                    <a href="index.php?page=product-delete&id=<?= $item['id'] ?>"
                       class="btn btn-danger btn-sm"
                       onclick="return confirm('Xóa sản phẩm này?')">
                        Xóa
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>
