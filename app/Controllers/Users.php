<?php

namespace App\Controllers;

use App\Models\UserModel;

class Users extends BaseController
{
    public function index()
    {
        $model = new UserModel();
        $data['users'] = $model->findAll();

        return view('users_list', $data);
    }

    public function create()
    {
        return view('users_create');
    }

    public function store()
    {
        $validation = \Config\Services::validation();

        $rules = [
            'name'  => 'required|min_length[3]',
            'email' => 'required|valid_email',
            'age'   => 'required|integer'
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $model = new UserModel();

        $model->insert([
            'name'  => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'age'   => $this->request->getPost('age'),
        ]);

        return redirect()->to('/users');
    }
}
