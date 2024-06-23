<?php

namespace App\Http\Controllers;

//use App\Models\Author;
//use App\Models\Book;
use App\Models\Category;
//use App\Models\Genre;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index() {
        $product = Product::all();
//        $count = $products->book_count();
//        $topViewedBooks = $products->orderBy('show_count', 'desc')->take(8)->get();
//        $newestBooks = $products->orderBy('created_at', 'desc')->take(8)->get();
//        return view('books.index',['show_books'=>$topViewedBooks, 'new_books'=>$newestBooks,'count'=>$count]);
//        return view('products.shop',['products'=>$product]);
    }

    public function show(Product $product)
    {
        return view('products.product', ['product' => $product]);
    }

    public function book_download(Book $id){
        $id->increment('download_count');
        return response()->download(storage_path('app/public/1.jpg'));
    }
    public function all_books(){
        $all_books = Book::orderBy('created_at')->paginate(20);
        $all_category = Category::all();
        $all_author = Author::all();
        $all_genres = Genre::all();

        return view('books.books',['all_books'=>$all_books,'all_category'=>$all_category,'all_authors'=>$all_author,'all_genres'=>$all_genres]);
    }
    public function search_books(Request $request){
        if (Auth::user()){
            $all = Book::where('name','like', '%'.$request->value.'%')->paginate(10);
            return view('admin.books.index',['books'=>$all,]);
        }
        else{
            $all_category = Category::all();
            $all_author = Author::all();
            $all_genres = Genre::all();
            $all = Book::where('name','like', '%'.$request->value.'%')->paginate(24);
            return view('books.books',['all_books'=>$all,'all_category'=>$all_category,'all_authors'=>$all_author,'all_genres'=>$all_genres]);
        }
    }
    public function filtr_books($name,$id){

        $all_category = Category::all();
        $all_author = Author::all();
        $all_genres = Genre::all();

        if($name == 'category') {
            $all_books = Book::where('category_id', $id)->get();
        }
        elseif ($name == 'author'){
            $all_books = Book::where('author_id', $id)->get();
        }
        elseif ($name == 'genre'){
            $all_books = Book::where('genre_id', $id)->get();
        }
        else{
            $all_books = Book::orderBy('created_at')->paginate(24);
        }

        return view('books.books',['all_books'=>$all_books,'all_category'=>$all_category,'all_authors'=>$all_author,'all_genres'=>$all_genres]);
    }
}
