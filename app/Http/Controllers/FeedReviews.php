<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Statamic\API\Entry;

class FeedReviews extends Controller
{
    
        public function index()
        {
            $entry= Entry::whereCollection('blog')->map(function ($entry) {
                return [
                    'id' => $url = $entry->url(),
                    'url' => $url,
                    'content_html' => $entry->content()
                ];
            })->all();

            return $entry;
        }
    
    
}
