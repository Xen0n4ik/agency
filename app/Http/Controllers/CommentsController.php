<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Comments;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function serv_com_print()
    {
        $arr= Comments::comments_serv_print();
        return view('pages.comments.comments', compact('arr'));
    }

    public function add_serv(Request $request)
    {
        $status = true;
        $message = 'Спасибо за отзыв!';

        $author = $request->input('author');
        $text = $request->input('message');

        if($author==''){
            $status = false;
            $message = 'Заполните поле "Имя"!';
        }
        if(mb_strlen($text)< 25){
            $status = false;
            $message = 'Комментарий должен состоять минимум из 25-ти символов!';
        }
        if($status){
            $arr= Comments::add_serve($author, $text);
        }

        return response()->json(['status' => $status, 'message' => $message]);
    }

    public function add_tour(Request $request)
    {
        $status = true;
        $message = 'Спасибо за отзыв!';

        $author = $request->input('author');
        $text = $request->input('message');
        $id_tour = $request->input('id_tour');

        if($author==''){
            $status = false;
            $message = 'Заполните поле "Имя"!';
        }
        if(mb_strlen($text)< 25){
            $status = false;
            $message = 'Комментарий должен состоять минимум из 25-ти символов!';
        }
        if($status){
            $arr= Comments::add_tour($author, $text, $id_tour);
        }

        return response()->json(['status' => $status, 'message' => $message]);

    }
}
