<?= $this->extend('layouts/main'); ?>

<?= $this->section('content'); ?>

<!-- Module KPI Summary Cards -->
<div class="card-grid">
    <!-- Books Module Card -->
    <div class="card card-blue">
        <div class="card-title">📚 Total Book Titles</div>
        <div class="card-value"><?= esc($total_books); ?></div>
        <div class="card-footer">Total Units in Stock: <?= esc($total_stock); ?></div>
    </div>

    <!-- Inventory Alert Card -->
    <div class="card card-red">
        <div class="card-title">⚠️ Low Stock Warnings</div>
        <div class="card-value"><?= esc($low_stock_count); ?></div>
        <div class="card-footer">Items with stock < 5</div>
    </div>

    <!-- HR Module Card -->
    <div class="card card-green">
        <div class="card-title">👥 Active Staff (HR)</div>
        <div class="card-value"><?= esc($total_employees); ?></div>
        <div class="card-footer">Registered Employees</div>
    </div>

    <!-- Accounting Card -->
    <div class="card card-purple">
        <div class="card-title">💰 Today's Sales</div>
        <div class="card-value">LKR <?= number_format($today_sales, 2); ?></div>
        <div class="card-footer">Real-time revenue</div>
    </div>
</div>

<!-- Quick Module Navigation Section -->
<div class="modules-overview">
    <h3>Module Overview & Quick Links</h3>
    <div class="module-links-grid">
        <a href="<?= base_url('books'); ?>" class="module-box">
            <h4>📚 Inventory & Books</h4>
            <p>Manage books, categories, cover photos, and stock updates.</p>
        </a>
        <a href="<?= base_url('pos'); ?>" class="module-box">
            <h4>🛒 Sales & Billing</h4>
            <p>Open POS counter screen, generate receipts, process sales.</p>
        </a>
        <a href="<?= base_url('hr'); ?>" class="module-box">
            <h4>👥 HR Management</h4>
            <p>Manage employee records, roles, shifts, and staff details.</p>
        </a>
        <a href="<?= base_url('accounting'); ?>" class="module-box">
            <h4>💰 Accounting & Reports</h4>
            <p>Track cash flow, daily revenue, and expense records.</p>
        </a>
    </div>
</div>

<?= $this->endSection(); ?>