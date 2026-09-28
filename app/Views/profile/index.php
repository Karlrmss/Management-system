<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section class="hero hero-compact">
    <div>
        <p class="eyebrow">Account details</p>
        <h1>Your profile</h1>
        <p class="hero-copy">The demo user record stored in the application database.</p>
    </div>
</section>

<?php if ($user === null): ?>
    <section class="panel empty-state">
        <div class="empty-icon" aria-hidden="true">!</div>
        <h2>No profile found</h2>
        <p>Run the database seeder to create the demo user.</p>
    </section>
<?php else: ?>
    <section class="profile-card">
        <div class="profile-banner"></div>
        <div class="profile-body">
            <div class="avatar" aria-hidden="true">KR</div>
            <div class="profile-intro">
                <p class="eyebrow">Demo account</p>
                <h2><?= esc($user['full_name']) ?></h2>
                <span>@<?= esc($user['username']) ?></span>
            </div>
            <dl class="profile-details">
                <div>
                    <dt>Email address</dt>
                    <dd><a href="mailto:<?= esc($user['email'], 'attr') ?>"><?= esc($user['email']) ?></a></dd>
                </div>
                <div>
                    <dt>Member since</dt>
                    <dd><?= esc((new DateTimeImmutable($user['created_at']))->format('F j, Y')) ?></dd>
                </div>
                <div>
                    <dt>Role</dt>
                    <dd>Project developer</dd>
                </div>
            </dl>
        </div>
    </section>
<?php endif; ?>
<?= $this->endSection() ?>
