<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CdsListController extends Controller
{
    public function getCdFromArray() 
    {
        $cdsListInfo = 
        [
            'covers'=> 
            [
                'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg',
                'https://images-na.ssl-images-amazon.com/images/I/71g40mlbinL._SX355_.jpg',
                'https://images-na.ssl-images-amazon.com/images/I/411BQR6BHRL.jpg',
                'https://m.media-amazon.com/images/I/81UtLzBDoEL._SS500_.jpg',
                'https://i.ebayimg.com/images/g/1GwAAOSwFytaKr7l/s-l300.jpg',
                'https://images-na.ssl-images-amazon.com/images/I/81MDAIdh78L._SY355_.jpg'
            ],
            'titles' =>
            [
                'New Jersey',
                'Live at Wembley 86',
                "Ten's Summoner's Tales",
                'Steve Gadd band',
                'Brave new World',
                'One more car, one more rider'
            ]
        ];
        return view('cds', $cdsListInfo);
    }
}
