<?php

namespace App\Models;

use CodeIgniter\Model;

class TaskModel extends Model
{
    protected $table = 'tasks';

    protected $primaryKey = 'id';

    protected $returnType = 'array';

    protected $allowedFields = ['title', 'status', 'task_date', 'created_at'];

    protected $useTimestamps = false;

    /**
     * @return list<array<string, mixed>>
     */
    public function getTasksForDate(string $date): array
    {
        return $this->where('task_date', $date)
            ->orderBy('created_at', 'ASC')
            ->findAll();
    }

    /**
     * @return list<array<string, mixed>>
     */
    public function getAllTasksOrderedByDate(): array
    {
        return $this->orderBy('task_date', 'ASC')
            ->orderBy('created_at', 'ASC')
            ->findAll();
    }
}
