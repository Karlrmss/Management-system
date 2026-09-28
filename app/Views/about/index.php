<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section class="about-grid">
    <div class="about-copy">
        <p class="eyebrow">About the project</p>
        <h1>A calmer way to see what’s next.</h1>
        <p class="hero-copy">Tasks for Today is a focused internal task tracker built to separate the work that matters now from the complete project schedule.</p>
        <p>It demonstrates a clean MVC application structure, relational data storage, reusable views, and date-based querying with CodeIgniter 4.</p>
        <div class="developer-signature">
            <span>Designed &amp; developed by</span>
            <strong>Karl Ramos</strong>
        </div>
    </div>
    <aside class="project-card">
        <div class="project-icon" aria-hidden="true">
            <svg viewBox="0 0 32 32"><path d="M9 16.5l4.5 4.5L23 11"/></svg>
        </div>
        <h2>Built with purpose</h2>
        <ul>
            <li><span>01</span> Date-filtered dashboard</li>
            <li><span>02</span> Complete task archive</li>
            <li><span>03</span> Database-backed profile</li>
            <li><span>04</span> Responsive shared layout</li>
        </ul>
    </aside>
</section>
<?= $this->endSection() ?>
