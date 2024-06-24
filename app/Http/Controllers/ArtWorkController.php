<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtWork;
use App\Models\Feedback;
use Illuminate\Support\Facades\Http; // Import the Http facade


class ArtWorkController extends Controller
{
    
    public function face_change_game(){
        
        return view('faceChangeGame');
    }
    
    
    public function index(){
        
        $data=ArtWork::all();
        return view('welcome',compact('data'));
    }
    
    public function artwork_details($id){
        
        $data=ArtWork::find($id);
        $feedbacks = Feedback::where('artworkID', $id)->get();
        return view('artworkdetails', compact('data', 'feedbacks'));
    }

    public function art_assistance($id){
        
        $data=ArtWork::find($id);
        return view('artassistance',compact('data'));
    }

    public function getArtworkInfo(Request $request)
    {
        $query = $request->input('query');
        $artworkId = $request->input('artwork_id');

        // Fetch the specific artwork using the ID
        $artwork = Artwork::find($artworkId);

        // Default response
        $response = 'No information found for your query.';

        if ($artwork) {
            // Basic keyword detection
            $keywords = [
                'year' => ['year', 'when'],
                'location' => ['location', 'where'],
                'dimension' => ['dimension', 'size', 'how big'],
                'medium' => ['medium', 'material'],
                'description' => ['description', 'tell me about', 'information'],
                'artist' => ['artist', 'who painted', 'painter', 'creator'],
            ];

            $foundKeyword = null;
            foreach ($keywords as $key => $terms) {
                foreach ($terms as $term) {
                    if (strpos(strtolower($query), strtolower($term)) !== false) {
                        $foundKeyword = $key;
                        break 2;
                    }
                }
            }

            if ($foundKeyword) {
                switch ($foundKeyword) {
                    case 'year':
                        $response = "The artwork was painted in the year {$artwork->year}.";
                        break;
                    case 'location':
                        $response = "The artwork is located at {$artwork->location}.";
                        break;
                    case 'dimension':
                        $response = "The dimensions of the artwork are {$artwork->dimension}.";
                        break;
                    case 'medium':
                        $response = "The medium used for the artwork is {$artwork->medium}.";
                        break;
                    case 'description':
                        $response = "Here is a description of the artwork: {$artwork->description}.";
                        break;
                    case 'artist':
                        $response = "The artist who painted the artwork is Vincent Van Gogh."; // Assuming Van Gogh for demo purposes
                        break;
                    default:
                        $response = 'No specific information found for your query.';
                }
            }
        }

        return response()->json($response);
    }

    
    public function add_feedback(Request $request)
    {
        $feedback = new Feedback();
        // Store the artwork ID
        $feedback->artworkID = $request->input('artworkid');
        // Use a geolocation service to get the country and IP address
        $response = Http::get('http://ip-api.com/json');
        $geoData = $response->json();
        $feedback->ipaddress = $geoData['query'] ?? 'Unknown';
        $feedback->country = $geoData['country'] ?? 'Unknown';

        // Store the comment
        $feedback->comment = $request->input('comment');
        

       // Handle the file upload
       // Handle the file upload
       // Handle the file upload
       if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $imageData = file_get_contents($file->getRealPath());
            $feedback->avatarImageURL = base64_encode($imageData);
        }

        // Save the feedback
        $feedback->save();

        return redirect()->back()->with('message', 'Feedback submitted successfully.');
    }

    

}
