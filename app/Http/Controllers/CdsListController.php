<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CdsListController extends Controller
{
    public function getCdFromArray() 
    {
        $cdsListInfo = 
        [

            [
                'title' => 'New Jersey',
                'author' => 'Bon Jovi',
                'year' => 1988,
                'cover' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg'
            ],
            [
                'title' => "Live at Wembley 86",
                'author' => 'Queen',
                'year' => 1992,
                'cover' => 'https://images-na.ssl-images-amazon.com/images/I/71g40mlbinL._SX355_.jpg'
            ],
            [
                'title' => "Ten's Summoner's Tales",
                'author' => 'Sting',
                'year' => 1993,
                'cover' => 'https://images-na.ssl-images-amazon.com/images/I/411BQR6BHRL.jpg'
            ],
            [
                'title' => "Steve Gadd band",
                'author' => 'Steve Gadd Band',
                'year' => 2018,
                'cover' => 'https://m.media-amazon.com/images/I/81UtLzBDoEL._SS500_.jpg'
            ],
            [
                'title' => "Brave new World",
                'author' => 'Iron Maiden',
                'year' => 2000,
                'cover' => 'https://i.ebayimg.com/images/g/1GwAAOSwFytaKr7l/s-l300.jpg'
            ],
            [
                'title' => "One more car, one more rider",
                'author' => 'Eric Clapton',
                'year' => 2002,
                'cover' => 'https://images-na.ssl-images-amazon.com/images/I/81MDAIdh78L._SY355_.jpg'
            ]
        ];
        return view('cds', compact('cdsListInfo'));
    }
}

