<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User; // 追加

class FavoritesController extends Controller
{
    public function store(Request $request, $id)
    {
        \Auth::user()->favorite($id);
        return back();
    }

    public function destroy($id)
    {
        \Auth::user()->unfavorite($id);
        return back();
    }

// 以下、お気に入りに関して
    public function favorites($id)
    {
        $user = User::find($id);
        $favorites = $user->favorites()->orderBy('created_at', 'desc')->paginate(10);

        $data = [
            'user' => $user,
            'microposts' => $favorites,
        ];

        $data += $this->counts($user); // $userの代りに$favoritesか？
//        $data += $this->counts($favorites);

        return view('users.favorites', $data);

//        return view('users.favorites', [
//            'users' => $users,
//        ]);
    }

//        return back();
}