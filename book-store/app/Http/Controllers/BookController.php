<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // <-- Quan trọng: Import Query Builder

class BookController extends Controller
{
    /**
     * Hiển thị trang chủ
     */
    public function home()
    {
        // 8 sản phẩm giá cao nhất
        $highestPriceBooks = DB::table('books')
            ->orderBy('price', 'desc')
            ->limit(8)
            ->get();

        // 8 sản phẩm giá thấp nhất
        $lowestPriceBooks = DB::table('books')
            ->orderBy('price', 'asc')
            ->limit(8)
            ->get();
        
        // Lấy danh sách loại để làm menu (Tùy chọn)
        $categories = DB::table('categories')->get();

        // Trả về view 'home' và truyền dữ liệu
        return view('home', compact(
            'highestPriceBooks', 
            'lowestPriceBooks', 
            'categories'
        ));
    }

    /**
     * Hiển thị sách theo loại
     */
    public function category($id)
    {
        // Lấy thông tin loại sách
        $category = DB::table('categories')->where('id', $id)->first();

        // Nếu không tìm thấy loại sách, báo lỗi 404
        if (!$category) {
            abort(404);
        }

        // Lấy danh sách sách thuộc loại đó (thêm phân trang)
        $books = DB::table('books')
            ->where('category_id', $id)
            ->paginate(12); // Mỗi trang 12 sản phẩm

        return view('category', compact('category', 'books'));
    }

    /**
     * Hiển thị chi tiết sách
     */
    public function detail($id)
    {
        // Lấy chi tiết sách, JOIN với loại để lấy tên loại
        $book = DB::table('books')
            ->join('categories', 'books.category_id', '=', 'categories.id')
            ->select('books.*', 'categories.name as category_name')
            ->where('books.id', $id)
            ->first();

        // Nếu không tìm thấy sách, báo lỗi 404
        if (!$book) {
            abort(404);
        }

        return view('detail', compact('book'));
    }
}