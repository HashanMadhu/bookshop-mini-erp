<?php
namespace App\Models;

use CodeIgniter\Model;

class BookModel extends Model
{
    protected $table = 'books';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'author', 'category_id', 'price', 'stock'];
    protected $useTimestamps = false;


    // Join query to fetch Category Name along with Book Details
    public function getBooksWithCategory()
    {
        return $this->select('books.*, categories.name as category_name')
            ->join('categories', 'categories.id = books.category_id', 'left')
            ->findAll();
    }
}