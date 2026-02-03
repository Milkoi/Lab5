<!DOCTYPE html>
<html>
<head>
    <title>Thêm sản phẩm</title>
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="container mt-4">

<h2>Thêm sản phẩm mới</h2>

<form method="POST" action="index.php?page=product-store">
    <div class="mb-3">
        <label>Tên sản phẩm</label>
        <input type="text" name="name" class="form-control">
    </div>

    <div class="mb-3">
        <label>Giá</label>
        <input type="number" name="price" class="form-control">
    </div>

    <div class="mb-3">
        <label>Mô tả</label>
        <textarea name="description" class="form-control"></textarea>
    </div>

    <div class="mb-3">
        <label>Hình ảnh (URL)</label>
        <input type="text" name="image" class="form-control">
    </div>

    <button class="btn btn-success">Lưu</button>
    <a href="index.php?page=product-list" class="btn btn-secondary">Quay lại</a>
</form>

</body>
</html>
