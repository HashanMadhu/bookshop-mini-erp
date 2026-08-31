<?php

namespace App\Controllers;

use App\Models\BookModel;

class Books extends BaseController
{
    public function index()
    {
        $model = new BookModel();

        // Fetch all books from the database
        $data['books'] = $model->findAll();

        // Send data to the view page
        return view('books/index', $data);
    }

    public function create()
    {
        return view('books/Create_book');
    }

    public function store()
    {
      $model = new BookModel();
      
      $model->save([
        'title' => $this->request->getpost('title'),
        'author'=> $this->request->getpost('author'),
        'price'=> $this->request->getpost('price'),
        'stock'=> $this->request->getpost('stock'),
      ]);

      return redirect()->to(base_url('books'));
    }

    public function edit($id=null)
    {
      $model = new BookModel();
      $data['book'] = $model->find($id);

      return view('books/edit_book', $data);
    }

    public function update($id=null)
    {
      $model = new BookModel();

      $model->update($id, [
        'title' => $this->request->getpost('title'),
        'author'=> $this->request->getpost('author'),
        'price'=> $this->request->getpost('price'),
        'stock'=> $this->request->getpost('stock'),
      ]);

      return redirect()->to(base_url('books'));
    }

    public function delete($id=null)
    {
      $model = new BookModel();
      $model->delete($id);

      return redirect()->to(base_url('books'));
    }

}