<?php

namespace App\Controllers;

use App\Models\CategoryModel;

class Categories extends BaseController
{
    public function index()
    {
        $model = new CategoryModel();

        $data = [
            'title' => 'Categories Management',
            'active_menu' => 'categories',
            'categories' => $model->findAll(),
        ];

        return view('categories/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Add New Category',
            'active_menu' => 'categories',
        ];

        return view('categories/create', $data);
    }

    public function store()
    {
        $model = new CategoryModel();

        $model->save([
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
        ]);

        return redirect()->to(base_url('categories'));
    }

    public function delete($id = null)
    {
        $model = new CategoryModel();
        $model->delete($id);

        return redirect()->to(base_url('categories'));
    }
}