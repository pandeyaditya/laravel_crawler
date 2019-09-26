<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPHtmlParser\Dom;

class HomeController extends Controller
{
    public function search(Request $request){

        $request->validate([
            'search_item' => 'required'
        ]);

        $website    = $request->input('search_item');
        $searchmode = $request->input('searchmode');

        $dom = new Dom;
        $data = [];

        $pilot_store = 'https://www.trustpilot.com/review/www.';
        $trusted_store = 'http://www.trustedshops.de/shops/?q=';


        if($searchmode == "trustedsearch"){
            $dom->loadFromUrl($trusted_store.$website);
            $response = $dom->find('body');
            $data['reviews_list'] = $response;            
            return view('trustsearch')->with('data',$data);   
        }

        // else($searchmode == "trustpilot"){
        else{
            $dom->loadFromUrl($pilot_store.$website);

            // Find logo
            $content = $dom->find('.business-unit-profile-summary__image');
            $data['logo'] = $content->src;

            //Star Rating
            $star_rating = $dom->find('.star-rating');
            $data['star_rating'] = $star_rating;

            //Review Count
            $review_count = $dom->find('.headline__review-count');
            $data['review_count'] = $review_count;

            // Find reviews
            $review_content = $dom->find('.review-list');
            $data['reviews_list'] = $review_content;

            return view('pilotsearch')->with('data',$data);
        }          

    }
}
