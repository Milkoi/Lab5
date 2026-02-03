<!DOCTYPE html>
<html>
<head>
    <title>Sửa sản phẩm</title>
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="container mt-4">

<h2>Sửa sản phẩm</h2>

<form method="post" action="index.php?page=product-update">
    <input type="hidden" name="id" value="<?= $product['id'] ?>">

    <div class="mb-3">
        <label>Tên sản phẩm</label>
        <input type="text" name="name" class="form-control"
               value="<?= $product['name'] ?>">
    </div>

    <div class="mb-3">
        <label>Giá</label>
        <input type="number" name="price" class="form-control"
               value="<?= $product['price'] ?>">
    </div>

    <div class="mb-3">
        <label>Mô tả</label>
        <textarea name="description" class="form-control"><?= $product['description'] ?></textarea>
    </div>

    <div class="mb-3">
        <label>Hình ảnh</label>
        <input type="text" name="image" class="form-control"
               value="<?= $product['image'] ?>">
    </div>

    <button class="btn btn-primary">Cập nhật</button>
    <a href="index.php?page=product-list" class="btn btn-secondary">Quay lại</a>
</form>

</body>
</html>
