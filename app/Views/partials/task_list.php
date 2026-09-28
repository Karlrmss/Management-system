<?php if ($tasks === []): ?>
    <div class="empty-state">
        <div class="empty-icon" aria-hidden="true">✓</div>
        <h2>Nothing scheduled</h2>
        <p>There are no tasks to show here yet.</p>
    </div>
<?php else: ?>
    <div class="task-list">
        <?php foreach ($tasks as $task): ?>
            <?php
                $statusClass = str_replace(' ', '-', strtolower($task['status']));
                $statusLabel = ucwords(str_replace('-', ' ', $task['status']));
                $date = new DateTimeImmutable($task['task_date']);
            ?>
            <article class="task-row">
                <span class="task-check <?= $task['status'] === 'completed' ? 'is-complete' : '' ?>" aria-hidden="true">
                    <?= $task['status'] === 'completed' ? '✓' : '' ?>
                </span>
                <div class="task-copy">
                    <h3><?= esc($task['title']) ?></h3>
                    <p>
                        <span><?= esc($date->format('D, M j')) ?></span>
                        <span class="dot" aria-hidden="true">•</span>
                        <span>Added <?= esc((new DateTimeImmutable($task['created_at']))->format('g:i A')) ?></span>
                    </p>
                </div>
                <span class="status status-<?= esc($statusClass) ?>"><?= esc($statusLabel) ?></span>
            </article>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
