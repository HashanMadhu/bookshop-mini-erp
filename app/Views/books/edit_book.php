<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Book</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css'); ?>">
</head>
<body>
    <div class="form-container">
        <h2>Edit Book Details</h2>
        <form action="<?= base_url('books/update/' . $book['id']); ?>" method="post">
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" value="<?= esc($book['title']); ?>" required>
            </div>
            <div class="form-group">
                <label>Author</label>
                <input type="text" name="author" value="<?= esc($book['author']); ?>" required>
            </div>
            <div class="form-group">
                <label>Price</label>
                <input type="number" step="0.01" name="price" value="<?= esc($book['price']); ?>" required>
            </div>
            <div class="form-group">
                <label>Stock</label>
                <input type="number" name="stock" value="<?= esc($book['stock']); ?>" required>
            </div>
            <button type="submitt">Update Book</button>
        </form>
    </div>
</body>
</html>