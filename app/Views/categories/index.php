<?= $this->extend('layouts/main'); ?>

<?= $this->section('content'); ?>
<h2>Category List</h2>
<a href="<?= base_url('categories/create'); ?>" class="btn-add" style="margin-bottom: 20px;">+ Add New Category</a>

<table>
    <tr>
        <th>ID</th>
        <th>Category Name</th>
        <th>Description</th>
        <th>Actions</th>
    </tr>
    <?php if (!empty($categories) && is_array($categories)): ?>
        <?php foreach ($categories as $cat): ?>
            <tr>
                <td><?= esc($cat['id']); ?></td>
                <td><strong><?= esc($cat['name']); ?></strong></td>
                <td><?= esc($cat['description'] ?? 'N/A'); ?></td>
                <td>
                    <a href="<?= base_url('categories/delete/' . $cat['id']); ?>" class="btn-delete"
                        onclick="return confirm('Are you sure you want to delete this category?');">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="4">No categories found in database.</td>
        </tr>
    <?php endif; ?>
</table>
<?= $this->endSection(); ?>