<?php

namespace App\Controllers;

use App\Models\TaskModel;

class TaskController extends BaseController
{
    public function index()
    {
        $model = new TaskModel();

        $data = [
            'task' => $model->getTask(),
            'title' => 'All tasks',
        ];

        echo view('layouts/header', $data);
        echo view('tasks/task', $data);
    }

    public function taks($slug = NULL)
    {
        $model = new TaskModel();

        $task = $model->getTask($slug);

        if ($task) {
            $data['title'] = $task['title'];
            $data['task'] = $task;
        } else {
            $data['title'] = 'Page not found';
            $data['task']['title'] = 'Page not found';
            $data['task']['body'] = '404...';
        }
        echo view('tasks/task', $data);
        echo view('layouts/header', $data);
    }
}
