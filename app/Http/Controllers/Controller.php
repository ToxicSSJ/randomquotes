<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

use Illuminate\Support\Facades\Storage;

class Controller extends BaseController
{
    public static $quotes = array(
        "The Black Knight Always Triumphs! - Monty Python", 
        "Anyone who has never made a mistake has never tried anything new - Albert Einstein",
        "Never Stop Exploring - The North Face",
        "Be yourself; everyone else is already taken - Oscar Wilde",
        "So many books, so little time - Frank Zappa",
        "Be the change that you wish to see in the world - Mahatma Gandhi",
    );

    public function index()
    {
        $totalQuotes = (count(Controller::$quotes));
        $randomNumber = (rand(0,($totalQuotes-1)));
        $randomQuote = Controller::$quotes[$randomNumber];
        return response()->json(['quote' => $randomQuote, 'server_ip' => gethostbyname(gethostname())]);
    }

    public function randomImages()
    {
        $fetch = $this->fetchS3RandomImage();
        return response()->json(['file' => $fetch['file'], 'url' => $fetch['access'], 'server_ip' => $fetch['server_ip']]);
    }

    public function randomImagesDisplay()
    {
        $fetch = $this->fetchS3RandomImage();
        return view('random-quote', ['file' => $fetch['file'], 'url' => $fetch['access'], 'ip' => $fetch['server_ip']]);
    }

    private function fetchS3RandomImage()
    {
        $files = Storage::disk('s3')->files();
        $totalFiles = (count($files));
        $randomNumber = (rand(0,($totalFiles-1)));
        $randomFile = $files[$randomNumber];
        $temp = Storage::disk('s3')->temporaryUrl($randomFile, \Carbon\Carbon::now()->addMinutes(5));
        return ['file' => $randomFile, 'access' => $temp, 'server_ip' => gethostbyname(gethostname())];
    }
    
}
