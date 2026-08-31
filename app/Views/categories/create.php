<?= $this->extend('layouts/main'); ?>

<?= $this->section('content'); ?>
<div class="form-container">
    <h2>Add New Category</h2>
    <form action="<?= base_url('categories/store'); ?>" method="post">
        <div class="form-group">
            <label>Category Name</label>
            <input type="text" name="name" placeholder="e.g. Novels, Science, History" required>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" rows="4" style="width: 100%; padding: 8px; box-sizing: border-box;"
                placeholder="Optional description..."></textarea>
        </div>
        <button type="submit">Save Category</button>
    </form>
</div>
<?= $this->endSection(); ?>