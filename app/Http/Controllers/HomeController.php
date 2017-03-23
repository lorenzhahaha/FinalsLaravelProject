<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = DB::table('users') -> first();
        $comments = DB::table('posts') -> get();

        return view('home' , [
            'user' => $user,
            'comments' => $comments,
            ]);
    }

    public function processComment(Request $request){
        $form_comment = $request -> form_comment;
        $comment_user_id = $request -> comment_user_id;

        $comment = new Post;
        $comment -> form_comment = $form_comment;
        $comment -> user_comment_code = $comment_user_id;
        $comment -> save();

        $user = DB::table('users') -> where(
            'id' , '=' , $comment_user_id
            ) -> first();

        $comments = DB::table('posts') -> get();

            return view('home' , [
            'user' => $user,
            'comments' => $comments,
            ]);
    }
}
