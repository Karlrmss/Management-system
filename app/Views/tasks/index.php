<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section class="hero hero-compact">
    <div>
        <p class="eyebrow">Complete archive</p>
        <h1>All tasks</h1>
        <p class="hero-copy">Every task in one place, ordered by its scheduled date.</p>
    </div>
    <div class="count-pill"><strong><?= count($tasks) ?></strong> total tasks</div>
</section>

<section class="panel">
    <div class="section-heading">
        <div>
            <p class="eyebrow">Full schedule</p>
            <h2>Task list</h2>
        </div>
        <span class="muted-label">Oldest to newest</span>
    </div>
    <?= view('partials/task_list', ['tasks' => $tasks]) ?>
</section>
<?= $this->endSection() ?>
