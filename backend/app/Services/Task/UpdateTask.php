<?php

namespace App\Services\Task;

use App\Models\Task;

class UpdateTask {

    /**
     * @param $data
     * @param $task Task
     */
    public function execute($task, array $data) : Task
    {
        try {
            $task->name = $data['name'];
            $task->description = $data['description'];
            $task->status = $data['status'];
            $task->start_at = $data['start_at'];
            $task->end_at = $data['end_at'];
    
            $task->save();
    
            return $task;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
