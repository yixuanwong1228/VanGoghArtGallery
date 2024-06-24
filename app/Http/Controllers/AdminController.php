<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;
use App\Models\ArtWork;
use App\Models\Biography;
use App\Models\Admin;
use App\Models\Video;

class AdminController extends Controller
{
    public function login_page(){

        
        return view('admin.login_page');
    }

    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        
        $admin = Admin::where('username', $username)
                    ->where('password', $password)
                    ->first();
        
        if (!$admin) {
            return redirect()->back()->withInput()->withErrors(['username' => 'Invalid username or password']);
        }
        
        return redirect()->route('admin.home_page'); 
    }
    
    public function home_page(){
        $data=artist::all();
        
        return view('admin.home',compact('data'));
    }

    public function add_artist_page(){
        
        return view('admin.add_artist');
    }

    public function add_artist(Request $request){
        
        $artist = new Artist();
        $artist->id = $request->input('artist_id');
        $artist->name = $request->input('name');
        $artist->intro = $request->input('intro');
        $artist->birthdate = $request->input('birthdate');
        $artist->deathdate = $request->input('deathdate');
        $artist->nationality = $request->input('nationality');
        $artist->birthplace = $request->input('birthplace');
        $artist->occupation = $request->input('occupation');
        $artist->artmovement = $request->input('artmovement');
        $artist->story = $request->input('story');
        $artist->deathplace = $request->input('deathplace');
        $artist->deathage = $request->input('deathage');

        // Handle the file upload if there's an image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $request->input('artist_id') . '.' . $image->getClientOriginalExtension();
            $image->move('img', $imageName);
            $artist->profilePictureURL = '/assets/img/' . $imageName;
        }
    

        // Save the artist to the database
        $artist->save();

        // Redirect back with a success message
        return redirect()->back()->with('message', 'Artist Added Successfully.');

    }

    public function update_artist(Request $request,$id){
        // Find the artist using the provided ID
    
        $artist = Artist::find($id);
    
        // Ensure the artist is found before proceeding
        if (!$artist) {
            return redirect()->back()->withErrors(['message' => 'Artist not found.']);
        }
    
        // Update the artist's details
        $artist->name = $request->input('name');
        $artist->intro = $request->input('intro');
        $artist->birthdate = $request->input('birthdate');
        $artist->deathdate = $request->input('deathdate');
        $artist->nationality = $request->input('nationality');
        $artist->birthplace = $request->input('birthplace');
        $artist->occupation = $request->input('occupation');
        $artist->artmovement = $request->input('artmovement');
        $artist->story = $request->input('story');
        $artist->deathplace = $request->input('deathplace');
        $artist->deathage = $request->input('deathage');
    
        // Handle the file upload if there's an image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $id . '.' . $image->getClientOriginalExtension(); // Use artist ID for image name
            $image->move('assets/img', $imageName);
            $artist->profilePictureURL = '/assets/img/' . $imageName;
        }
    
        // Save the artist to the database
        $artist->save();
    
        // Redirect back with a success message
        return redirect()->back()->with('message', 'Artist updated successfully.');
    }
    

    public function artist_details($id){
        $data=artist::find($id);
        
        return view('admin.artist_details',compact('data'));
    }

    public function view_artworks($id)
    {
        // Find the artist by ID
        $artist = Artist::findOrFail($id);

        // Get all artworks related to this artist
        $artworks = $artist->artWorks;

        return view('admin.view_artworks', compact('artist', 'artworks'));
    }
    public function add_artwork_page($id){
        $artist=artist::find($id);
        return view('admin.add_artwork', compact('artist'));
    }

    public function add_artwork(Request $request){
        
        // Create new artwork
        $artwork = new ArtWork;
        $artwork->artistID = $request->input('artistID');
        $artwork->name = $request->input('name');
        $artwork->year = $request->input('year');
        $artwork->location = $request->input('location');
        $artwork->dimension = $request->input('dimension');
        $artwork->medium = $request->input('medium');
        $artwork->keywords = $request->input('keywords');
        $artwork->description = $request->input('description');
        $artwork->story = $request->input('story');
        $artwork->save();

        if ($request->hasFile('imageURL')) {
            $image = $request->file('imageURL');
            $nameWithoutSpaces = str_replace(' ', '', $request->input('name'));
            $imageName = $nameWithoutSpaces . '.' . $image->getClientOriginalExtension();
            $image->move('assets/img/gallery', $imageName);
            $artwork->imageURL = '/assets/img/gallery/' . $imageName;
        }

        $artwork->save();

        // Redirect back with a success message
        return redirect()->back()->with('message', 'Artwork added successfully');

    }



    public function artwork_details($id){
        $artwork = Artwork::find($id);
        $artist = $artwork->artist; // Assuming you have defined the relationship in your Artwork model
    
        return view('admin.artwork_details', compact('artwork', 'artist'));
    }
    
    public function view_biographies($id)
    {
        // Find the artist by ID
        $artist = Artist::findOrFail($id);

        // Get all artworks related to this artist
        $biographies = $artist->biographies;

        return view('admin.view_biographies', compact('artist', 'biographies'));
    }

    public function add_biography_page($id){
        $artist=artist::find($id);
        return view('admin.add_biography', compact('artist'));
    }

    public function add_biography(Request $request){
        
        // Create new artwork
        $biography = new Biography();
        $biography->artistID = $request->input('artistID');
        $biography->timeline = $request->input('timeline');
        $biography->description = $request->input('description');


        if ($request->hasFile('imageURL')) {
            $image = $request->file('imageURL');
            $imageName = $request->input('artistID') . '_' .$request->input('timeline') . '.' .  $image->getClientOriginalExtension();
            $image->move('assets/img/Biography', $imageName);
            $biography->imageURL = '/assets/img/Biography/' . $imageName;
        }

        $biography->save();

        // Redirect back with a success message
        return redirect()->back()->with('message', 'Biography added successfully');

    }

    public function update_artwork(Request $request,$id){
        $artwork=artwork::find($id);

        $artwork->name = $request->input('name');
        $artwork->year = $request->input('year');
        $artwork->location = $request->input('location');
        $artwork->dimension = $request->input('dimension');
        $artwork->medium = $request->input('medium');
        $artwork->keywords = $request->input('keywords');
        $artwork->description = $request->input('description');
        $artwork->story = $request->input('story');
        $artwork->save();

        if ($request->hasFile('imageURL')) {
            $image = $request->file('imageURL');
            $nameWithoutSpaces = str_replace(' ', '', $request->input('name'));
            $imageName = $nameWithoutSpaces . '.' . $image->getClientOriginalExtension();
            $image->move('assets/img/gallery', $imageName);
            $artwork->imageURL = '/assets/img/gallery/' . $imageName;
        }

        $artwork->save();

        // Redirect back with a success message
        return redirect()->back()->with('message', 'Artwork updated successfully');
    }

    public function feedback_artwork_lists($id){
        // Find the artist by ID
        $artist = Artist::findOrFail($id);

        // Get all artworks related to this artist
        $artworks = $artist->artWorks;

        return view('admin.feedback_artwork_lists', compact('artist', 'artworks'));
    }

    public function feedback_details($id)
    {
        $artwork = ArtWork::findOrFail($id);
        $feedbacks = $artwork->feedbacks;
        $artist = $artwork->artist;
        return view('admin.feedback_details', compact('artist','artwork', 'feedbacks'));
    }

    public function view_videos($id)
    {
        // Find the artist by ID
        $artist = Artist::findOrFail($id);

        // Get all artworks related to this artist
        $videos = $artist->videos;

        return view('admin.view_videos', compact('artist', 'videos'));
    }

    public function add_video_page($id){
        $artist=artist::find($id);
        return view('admin.add_video', compact('artist'));
    }

    public function add_video(Request $request)
    {
        $video = new Video;
        $video->artistID = $request->input('artistID');
        $video->title = $request->input('title');

        if ($request->hasFile('videoURL')) {
            $file = $request->file('videoURL');
            $nameWithoutSpaces = str_replace(' ', '', $request->input('title'));
            $videoName = $nameWithoutSpaces . '.' . $file->getClientOriginalExtension();
            $file->move('assets/video', $videoName);
            $video->videoURL = '/assets/video/' . $videoName;
        }

        $video->save();

        // Redirect back with a success message
        return redirect()->back()->with('message', 'Video added successfully');
    }

  
public function delete_video($id)
{
    $video = Video::findOrFail($id);

    // Delete the video file from the server
    $videoFilePath = public_path($video->videoURL);
    if (file_exists($videoFilePath)) {
        unlink($videoFilePath);
    }

    // Delete the video record from the database
    $video->delete();

    // Redirect back with a success message
    return redirect()->back()->with('message', 'Video deleted successfully');
}



}
