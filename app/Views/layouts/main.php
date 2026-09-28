<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Tasks for Today — a simple daily task management system by Karl Ramos.">
    <title><?= esc($pageTitle) ?> · Tasks for Today</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/app.css') ?>">
</head>
<body>
    <header class="site-header">
        <a class="brand" href="<?= site_url('/') ?>" aria-label="Tasks for Today home">
            <span class="brand-mark" aria-hidden="true">
                <svg viewBox="0 0 32 32" role="img"><path d="M9 16.5l4.5 4.5L23 11"/></svg>
            </span>
            <span>Tasks for Today</span>
        </a>

        <nav class="site-nav" aria-label="Primary navigation">
            <a class="<?= $activePage === 'home' ? 'active' : '' ?>" href="<?= site_url('/') ?>">Today</a>
            <a class="<?= $activePage === 'tasks' ? 'active' : '' ?>" href="<?= site_url('tasks') ?>">All tasks</a>
            <a class="<?= $activePage === 'profile' ? 'active' : '' ?>" href="<?= site_url('profile') ?>">Profile</a>
            <a class="<?= $activePage === 'about' ? 'active' : '' ?>" href="<?= site_url('about') ?>">About</a>
        </nav>
    </header>

    <main class="page-shell">
        <?= $this->renderSection('content') ?>
    </main>

    <footer class="site-footer">
        <span>Tasks for Today</span>
        <span>Designed &amp; developed by Karl Ramos · <?= date('Y') ?></span>
    </footer>
</body>
</html>
