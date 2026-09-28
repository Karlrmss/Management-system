<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Tasks extends BaseController
{
    public function index(): string
    {
        $tasks = (new TaskModel())->getAllTasksOrderedByDate();

        return view('tasks/index', [
            'pageTitle'  => 'All tasks',
            'activePage' => 'tasks',
            'tasks'      => $tasks,
        ]);
    }
}
