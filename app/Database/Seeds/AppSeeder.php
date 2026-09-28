<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use DateTimeImmutable;
use DateTimeZone;

class AppSeeder extends Seeder
{
    public function run(): void
    {
        $timezone = new DateTimeZone('Asia/Manila');
        $today = new DateTimeImmutable('today', $timezone);
        $now = new DateTimeImmutable('now', $timezone);

        $this->db->table('tasks')->emptyTable();
        $this->db->table('users')->emptyTable();

        $tasks = [
            ['title' => 'Review the project requirements', 'status' => 'completed', 'task_date' => $today->modify('-1 day')->format('Y-m-d')],
            ['title' => 'Sketch the dashboard layout', 'status' => 'completed', 'task_date' => $today->modify('-1 day')->format('Y-m-d')],
            ['title' => 'Check the team stand-up notes', 'status' => 'completed', 'task_date' => $today->format('Y-m-d')],
            ['title' => 'Finish the database migration', 'status' => 'in-progress', 'task_date' => $today->format('Y-m-d')],
            ['title' => 'Test today\'s task filter', 'status' => 'pending', 'task_date' => $today->format('Y-m-d')],
            ['title' => 'Prepare the project README', 'status' => 'pending', 'task_date' => $today->format('Y-m-d')],
            ['title' => 'Share the demo with the team', 'status' => 'pending', 'task_date' => $today->modify('+1 day')->format('Y-m-d')],
            ['title' => 'Collect feedback for version two', 'status' => 'pending', 'task_date' => $today->modify('+1 day')->format('Y-m-d')],
        ];

        foreach ($tasks as $index => &$task) {
            $task['created_at'] = $now->modify(sprintf('-%d minutes', 80 - ($index * 10)))->format('Y-m-d H:i:s');
        }
        unset($task);

        $this->db->table('tasks')->insertBatch($tasks);
        $this->db->table('users')->insert([
            'username'   => 'karlramos',
            'full_name'  => 'Karl Ramos',
            'email'      => 'karlramos@example.com',
            'created_at' => $now->format('Y-m-d H:i:s'),
        ]);
    }
}
