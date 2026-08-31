<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Bookshop ERP'; ?></title>
    <link rel="stylesheet" href="<?= base_url('css/style.css'); ?>">
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="sidebar-brand">
                <h3>Bookshop ERP</h3>
            </div>
            <nav class="sidebar-menu">
                <ul>
                    <li>
                        <a href="<?= base_url('dashboard'); ?>"
                            class="<?= ($active_menu ?? '') === 'dashboard' ? 'active' : ''; ?>">
                            <span>📊</span> Main Dashboard
                        </a>
                    </li>
                    <li class="menu-header">OPERATIONS</li>
                    <li>
                        <a href="<?= base_url('books'); ?>"
                            class="<?= ($active_menu ?? '') === 'books' ? 'active' : ''; ?>">
                            <span>📚</span> Book Management
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('pos'); ?>"
                            class="<?= ($active_menu ?? '') === 'pos' ? 'active' : ''; ?>">
                            <span>🛒</span> Sales / POS
                        </a>
                    </li>
                    <li class="menu-header">MANAGEMENT</li>
                    <li>
                        <a href="<?= base_url('hr'); ?>" class="<?= ($active_menu ?? '') === 'hr' ? 'active' : ''; ?>">
                            <span>👥</span> Employee Management (HR)
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('accounting'); ?>"
                            class="<?= ($active_menu ?? '') === 'accounting' ? 'active' : ''; ?>">
                            <span>💰</span> Accounts & Finance
                        </a>
                    </li>
                    <li class="menu-header">SYSTEM</li>
                    <li>
                        <a href="<?= base_url('settings'); ?>"
                            class="<?= ($active_menu ?? '') === 'settings' ? 'active' : ''; ?>">
                            <span>⚙️</span> System Settings
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content Area -->
        <div class="main-content">
            <header class="topbar">
                <div class="page-title">
                    <h2><?= $title ?? 'Dashboard'; ?></h2>
                </div>
                <div class="user-profile">
                    <span>👤 Admin User</span>
                </div>
            </header>

            <main class="content">
                <?= $this->renderSection('content'); ?>
            </main>
        </div>
    </div>
</body>

</html>