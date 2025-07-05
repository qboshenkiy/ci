<?php

namespace App\Controllers;

use App\Models\TaskModel;

class TaskController extends BaseController
{
    public function index()
    {
        $model = new TaskModel();

        $data = [
            'task' => $model->findAll(),
        ];

        echo view('tasks/tasklist', $data);
    }

    public function task_details($id)
    {
        $model = new TaskModel();
        $detail = $model->find($id);

        if ($detail === null) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Task not found");
        }

        $data = [
            'task' => $model->findAll(),
            'detail' => $detail,
        ];

        return view('tasks/detail', $data);
    }

    public function task_add()
    {
        $model = new TaskModel();
        $data = [
            'task' => $model->findAll(),
        ];

        $requests = $model->insert([
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description')
        ]);
        if($requests){
            return view('layouts/default');
        }
    }
    public function form()
    {
        return view('tasks/form');
    }
}
