<?= $this->extend('layouts/main'); ?>

<?= $this->section('content'); ?>
<h2>Book List</h2>
<a href="<?= base_url('books/create'); ?>" class="btn-add">+ Add New Book</a>

<table>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Author</th>
        <th>Category</th>
        <th>Price</th>
        <th>Stock</th>
        <th>Actions</th>
    </tr>
    <?php if (!empty($books) && is_array($books)): ?>
        <?php foreach ($books as $book): ?>
            <tr>
                <td><?= esc($book['id']); ?></td>
                <td><?= esc($book['title']); ?></td>
                <td><?= esc($book['author']); ?></td>
                <td><?= esc($book['category_name'] ?? 'Uncategorized'); ?></td>
                <td><?= esc($book['price']); ?></td>
                <td><?= esc($book['stock']); ?></td>
                <td>
                    <a href="<?= base_url('books/edit/' . $book['id']); ?>" class="btn-edit">Edit</a>
                    <a href="<?= base_url('books/delete/' . $book['id']); ?>" class="btn-delete"
                        onclick="return confirm('Are you sure you want to delete this book?');">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="7">No books found in database.</td>
        </tr>
    <?php endif; ?>
</table>
<?= $this->endSection(); ?>