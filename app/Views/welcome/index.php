<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<?php
    $todayDate = new DateTimeImmutable($today);
    $totalCount = count($tasks);
    $remainingCount = $totalCount - $completedCount;
    $progress = $totalCount > 0 ? (int) round(($completedCount / $totalCount) * 100) : 0;
?>
<section class="hero hero-dashboard">
    <div>
        <p class="eyebrow"><?= esc($todayDate->format('l, F j')) ?></p>
        <h1>Good day, Karl.</h1>
        <p class="hero-copy">Here’s what needs your attention today. One clear list, no noise.</p>
    </div>
    <div class="date-tile" aria-label="Today is <?= esc($todayDate->format('F j')) ?>">
        <span><?= esc(strtoupper($todayDate->format('M'))) ?></span>
        <strong><?= esc($todayDate->format('j')) ?></strong>
    </div>
</section>

<section class="stats-grid" aria-label="Today's task summary">
    <div class="stat-card stat-primary">
        <span>Today’s tasks</span>
        <strong><?= $totalCount ?></strong>
        <small>scheduled for today</small>
    </div>
    <div class="stat-card">
        <span>Completed</span>
        <strong><?= $completedCount ?></strong>
        <small><?= $progress ?>% of today’s list</small>
    </div>
    <div class="stat-card">
        <span>Still to do</span>
        <strong><?= $remainingCount ?></strong>
        <small>keep the momentum</small>
    </div>
</section>

<section class="panel">
    <div class="section-heading">
        <div>
            <p class="eyebrow">Daily focus</p>
            <h2>Today’s list</h2>
        </div>
        <a class="text-link" href="<?= site_url('tasks') ?>">View all tasks <span aria-hidden="true">→</span></a>
    </div>
    <?= view('partials/task_list', ['tasks' => $tasks]) ?>
</section>
<?= $this->endSection() ?>
