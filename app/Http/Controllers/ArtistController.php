<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;
use App\Models\Video;

class ArtistController extends Controller
{
    public function biography_timeline(){
        // Find the artist by ID
        $artist = Artist::where('id', 'vangogh')->first();
    
        $biographies = $artist->biographies;
        // Pass the artist data to the view
        return view('timeline', compact('biographies'));
    }
    

    public function about(){
        $data=artist::find('vangogh');
        $videos = Video::all();
        return view('about',compact('data','videos'));
    }
}
