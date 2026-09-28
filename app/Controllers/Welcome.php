<?php

namespace App\Controllers;

use App\Models\TaskModel;
use CodeIgniter\I18n\Time;

class Welcome extends BaseController
{
    public function index(): string
    {
        $today = Time::now('Asia/Manila')->toDateString();
        $tasks = (new TaskModel())->getTasksForDate($today);

        return view('welcome/index', [
            'pageTitle'      => 'Today',
            'activePage'     => 'home',
            'today'          => $today,
            'tasks'          => $tasks,
            'completedCount' => count(array_filter(
                $tasks,
                static fn (array $task): bool => $task['status'] === 'completed'
            )),
        ]);
    }
}
