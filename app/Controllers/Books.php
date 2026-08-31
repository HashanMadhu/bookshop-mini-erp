<?php

namespace App\Controllers;

use App\Models\BookModel;
use App\Models\CategoryModel;

class Books extends BaseController
{
  public function index()
  {
    $bookModel = new BookModel();

    $data = [
      'title' => 'Book Management',
      'active_menu' => 'books',
      'books' => $bookModel->getBooksWithCategory(),
    ];

    return view('books/index', $data);
  }

  public function create()
  {
    $categoryModel = new CategoryModel();

    $data = [
      'title' => 'Add New Book',
      'active_menu' => 'books',
      'categories' => $categoryModel->findAll(),
    ];
    return view('books/create_book', $data);
  }

  public function store()
  {
    $bookModel = new BookModel();

    $bookModel->save([
      'title' => $this->request->getpost('title'),
      'author' => $this->request->getpost('author'),
      'category_id' => $this->request->getpost('category_id'),
      'price' => $this->request->getpost('price'),
      'stock' => $this->request->getpost('stock'),
    ]);

    return redirect()->to(base_url('books'));
  }

  public function edit($id = null)
  {
    $bookModel = new BookModel();
    $categoryModel = new CategoryModel();

    $data = [
      'title' => 'Edit Book',
      'active_menu' => 'books',
      'book' => $bookModel->find($id),
      'categories' => $categoryModel->findAll(),
    ];

    return view('books/edit_book', $data);
  }

  public function update($id = null)
  {
    $bookModel = new BookModel();

    $bookModel->update($id, [
      'title' => $this->request->getPost('title'),
      'author' => $this->request->getPost('author'),
      'category_id' => $this->request->getPost('category_id'),
      'price' => $this->request->getPost('price'),
      'stock' => $this->request->getPost('stock'),
    ]);

    return redirect()->to(base_url('books'));
  }

  public function delete($id = null)
  {
    $model = new BookModel();
    $model->delete($id);

    return redirect()->to(base_url('books'));
  }

}