<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\User;

use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function index()
    {
        $bookCount = book::count();
        $categoryCount = Category::count();
        $userCount = User::count();
        return view ('admin.dashboard', ['book_count' => $bookCount, 'category_count' => $categoryCount, 'user_count'=> $userCount ]);


    }

    public function user()
    {
        $user = User::where('roles_id', 2)->where('status','active')->get();
        return view ('admin.user', ['user' =>$user]);
    }

    public function userregistered()
    {
        $userRegistered = User::where('roles_id', 2)->where('status','inactive')->get();
        return view ('admin.user-registered', ['userRegistered' => $userRegistered]);
        
    }

    public function userdetail($slug)
    {
        $user = User::where('slug', $slug)->first();
        return view ('admin.user-detail',['user' => $user]);
    }

    public function userapprove($slug)
    {
        $user = User::where('slug',$slug)->first();
        $user->status = 'active';
        $user->save();
        return redirect ('user-detail/'.$slug)->with('status','User approved successfully');
    }

    public function userban($slug)
    {
        $user = User::where('slug',$slug)->first();
        $user->delete();
        return redirect('users')->with('status','user deleted successfully');
    }

    public function userbaned()
    {
        $userbaned = User::onlyTrashed()->get();
        return view ('admin.user-baned',['userbaned' => $userbaned]);
    }

    public function userrestore($slug)
    {
        $user = User::withTrashed()->where('slug',$slug)->first();
        $user->restore();
        return redirect('users')->with('status','user restored successfully');
    }

    public function category()
    {
        $category = Category:: all ();    
        return view ('admin.category',['category' =>$category]);
    }

    public function book()
    {
        $book = book::all();
        return view ('admin.books',['book' => $book]);
    }
    
    public function bookadd()
    {
        $categories = Category::all();
return view('admin.book-add',['categories' => $categories]);
        
    }

    public function bookStore(Request $request)
    {
        $validate = $request->validate([
            'book_code' => 'required|unique:books',
            'title' => 'required',
        ]);
             $newName = '';
             if($request->file('image')){
             $extension = $request->file('image')->getClientOriginalExtension();
              $newName = $request->title.'-'.now()->timestamp.'.'.$extension;
              $request->file('image')->storeAs('cover',$newName);
    }     

        $request['cover'] = $newName;
        $book = book::create($request->all());
        $book->categories()->sync($request->categories);
        return redirect('books')->with('status', 'Book Add Successfully');
    }
    public function booksEdit($slug)
    {
        $books = Book :: where('slug', $slug)->first();
        $categories = Category::all();
        return view ('admin.books-edit', ['books' => $books ,'categories' => $categories]);
    }

    public function bookUpdate(Request $request, $slug)
{
if($request->file('image')){
$extension = $request->file('image')->getClientOriginalExtension();
$newName = $request->title.'-'.now()->timestamp.'.'.$extension;
$request->file('image')->storeAs('cover',$newName);
$request['cover'] = $newName;
}

$book = Book::where('slug', $slug)->first();
$book->update($request->all());
if($request->categories){
$book->categories()->sync($request->categories);
}
return redirect('book')->with('status', 'Book Updated Successfully');

}
    public function bookdestroy($slug)
{
    $book = Book::where('slug', $slug)->first();
    $book->delete();
    return redirect('book')->with('status','book deleted Sccesfully');

}

    public function hanslog()
    {
        return view ('admin.hanslog');
    }

    public function categoryAdd()
    {
        return view('admin.categoryadd');
    }

    public function categoryStore(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:categories',
        ]);

        $category = Category::create($request->all());
        return redirect('category')->with('status','Category add Sccesfully');

    }
    public function categoryEdit($slug){
        $category = Category::where('slug', $slug)->first();
        return view ('admin.category-edit',['category'=>$category]);
    }

    public function categoryupdate(Request $request, $slug)
    {
        $validated = $request->validate([
            'name' => 'required|unique:categories',]);
        $category = Category::where('slug', $slug)->first();
        $category->slug = null;
        $category->update($request->all());
        return redirect('category')->with('status','Category updated Sccesfully');

    }

    public function categorydestroy($slug){
        $category = Category::where('slug', $slug)->first();
        $category->delete();
        return redirect('category')->with('status','Category deleted Sccesfully');

    }
    
    public function booksupdate (Request $request, $slug)
    {
        if($request->file('image')){
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->title.'-'.now()->timestamp.'.'.$extension;
            $request->file('image')->storeAs('cover',$newName);
            $request['cover'] = $newName;
            }
            
            $book = Book::where('slug', $slug)->first();
            $book->update($request->all());
            if($request->categories){
            $book->categories()->sync($request->categories);
            }
            return redirect('book')->with('status', 'Book Updated Successfully');
            
            }
            
            
    


}
