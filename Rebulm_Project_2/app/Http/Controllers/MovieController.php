<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Movie;
use App\Models\Feedback;
use App\Models\Transaksi;
use App\Models\Users;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('admin.home_admin', compact('movies'));
    }

    public function index_user()
    {
        $movies = Movie::all();
        return view('user.videos', compact('movies'));
    }

    public function create()
    {
        return view('admin.add_movies');
    }

    public function store(Request $request)
    {
        $imgName = $request->img_path->getClientOriginalName() . '-' . time() 
        . '.' . $request->img_path->extension();
        $request->img_path->move(public_path('images'), $imgName);

        Movie::create([
            'movie_title' => $request -> title,
            'synopsis' => $request -> synopsis,
            'year' => $request -> release,
            'director' => $request -> director,
            'actress' => $request -> actress,
            'duration' => $request -> duration,
            'rating' => $request -> rating,
            'trailer' => $request -> trailer,
            'img_path' => $imgName
        ]);

        return redirect('/admin');
    }

    public function review($id)
    {
        $movie = Movie::where('id_movie',$id) -> first();

        $feedback = Feedback::where('id_movie',$id)->get();
        return view('user.review', compact('movie','feedback'));
    }

    public function edit($id)
    {
        $movie = \DB::table('movies')->where('id_movie',$id)->get();

        return view('admin.edit_movies', compact('movie')); 
    }

    public function update(Request $request, $id)
    {
        $movie = \DB::table('movies')->where('id_movie',$id)->get();

        foreach ($movie as $movie) {
            $imgName = $movie->img_path;
            if ($request->img_path) {
                $imgName = $request->img_path->getClientOriginalName() . '-' . time() 
                            . '.' . $request->img_path->extension();
                $request->img_path->move(public_path('images'), $imgName);
            }
        }

        \DB::table('movies')->where('id_movie',$id)->update([
            'movie_title' => $request -> title,
            'synopsis' => $request -> synopsis,
            'year' => $request -> release,
            'director' => $request -> director,
            'actress' => $request -> actress,
            'duration' => $request -> duration,
            'rating' => $request -> rating,
            'trailer' => $request -> trailer,
            'img_path' => $imgName
        ]);

        return redirect('/admin');
    }

    public function destroy($id)
    {
        \DB::table('movies')->where('id_movie',$id)->delete();

        return redirect('/admin'); 
    }

    // Feedback Section
    public function index_feedback()
    {
        $feedbacks = Feedback::orderBy('id_feedback','desc')->get();

        return view('admin.feedback', compact('feedbacks'));
    }

    // public function create_feedback()
    // {
    //     return view('user.review');
    // }

    public function store_feedback(Request $request)
    {

        Feedback::create([
            'comment' => $request -> comment,
            'id_movie' => $request -> id_movie,
            'id_user' => $request -> id_user,
            'id_admin' => '1'

        ]);

        return back();
    }

    public function destroy_feedback($id)
    {
        \DB::table('feedback')->where('id_feedback',$id)->delete();

        return redirect('/admin/feedback'); 
    }

    // public function reply(Type $var = null)
    // {
    //     # code...
    // }

    //transaction

    public function create_transaction(Request $request)
    {
        // $movie = Transaksi::where('id_movie',$id) -> first();
        switch ($request->input('paket')) {
            case 'rent1':
                $movie = Transaksi::create([
                    'paket' => 'Rent 1 Week',
                    'id_movie' => $request -> id_movie,
                    'id_user' => $request -> id_user,
                    'total_price' => '10000'
        
                ]);
                break;

            case 'buy':
                $movie = Transaksi::create([
                    'paket' => 'Buy',
                    'id_movie' => $request -> id_movie,
                    'id_user' => $request -> id_user,
                    'total_price' => '50000'
        
                ]);
                break;
        }

        return view('user.transaksi', compact('movie'));
    }

    public function end_transaction(Request $request, $id)
    {
        \DB::table('transaksi')->where('id_transaksi',$id)->get();
        $movie = \DB::table('movies')->where('id_movie',$request -> id_movie)->first();

        \DB::table('transaksi')->where('id_transaksi',$id)->update([
            'paket' => $request -> paket,
            'id_movie' => $request -> id_movie,
            'id_user' => $request -> id_user,
            'total_price' => $request -> total_price,
            'payment_method' => $request -> payment_method
        ]);

        return view('user.watch', compact('movie'));
    }


    public function update_profile(Request $request)
    {
        $request->user()->update(
            $request->all()
        );
    
        return back();
    }
}
