<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bookshop - Books List</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background-color: #f4f4f9; }
        h2 { color: #333; }
        table { width: 100%; border-collapse: collapse; background: #fff; margin-top: 20px; }
        th, td { padding: 12px; border: 1px solid #ddd; text-align: left; }
        th { background-color: #007bff; color: white; }
    </style>
</head>
<body>
    <h2>Book List</h2>
    <a href="<?= base_url('books/create'); ?>" style="display: inline-block; margin-bottom: 15px; padding: 10px 15px; background-color: #28a745; color: white; text-decoration: none; border-radius: 4px;">+ Add New Book</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Price</th>
            <th>Stock</th>
        </tr>
        <?php if (!empty($books) && is_array($books)): ?>
            <?php foreach ($books as $book): ?>
                <tr>
                    <td><?= esc($book['id']); ?></td>
                    <td><?= esc($book['title']); ?></td>
                    <td><?= esc($book['author']); ?></td>
                    <td><?= esc($book['price']); ?></td>
                    <td><?= esc($book['stock']); ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="5">No books found in database.</td>
            </tr>
        <?php endif; ?>
    </table>
</body>
</html>