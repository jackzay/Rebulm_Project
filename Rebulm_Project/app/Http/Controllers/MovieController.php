<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Feedback;

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
            'rating' => $request -> rating,
            'img_path' => $imgName
        ]);

        return redirect('/admin');
    }

    public function show($id)
    {
        //
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
            'rating' => $request -> rating,
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
        $feedbacks = Feedback::all();
        return view('admin.feedback', compact('feedbacks'));
    }

    public function create_feedback()
    {
        return view('review');
    }


}
