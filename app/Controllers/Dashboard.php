namespace App\Controllers;

use App\Models\BookModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $bookModel = new BookModel();

        $data = [
            'title'            => 'System Dashboard',
            'total_books'      => $bookModel->countAllResults(),
            'total_stock'      => $bookModel->selectSum('stock')->first()['stock'] ?? 0,
            'low_stock_count'  => $bookModel->where('stock <', 5)->countAllResults(),
            'total_employees'  => 0, // Placeholder for HR module
            'today_sales'      => 0.00, // Placeholder for Accounts module
        ];

        return view('dashboard/index', $data);
    }
}