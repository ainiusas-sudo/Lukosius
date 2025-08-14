<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $userRole = session('user_role', 'viewer');
        
        $faqs = [
            [
                'question' => 'Po kiek Alus?',
                'answer' => "Store (sklep): 3-5 PLN už 0.5L\nBar (bar): 8-15 PLN už 0.5L\nRestaurant (restoran): 12-20 PLN už 0.5L\nClub (klubas): 15-25 PLN už 0.5L\nCheapest: Lidl/Aldi stores",
                'category' => 'Alus'
            ],
            [
                'question' => 'Kaip bazarinti Lenkiškai?',
                'answer' => "'Dzień dobry' (labas)\n'Dziękuję' (ačiū)\n'Proszę' (prašau)\n'Kurwa' (visi supranta)\n 'Zròb mnie loda' (ciulpk man bybi)\n 'Pokaż Cycki' (parodyk papus)\nArba tiesiog šypsokis",
                'category' => 'Kalba'
            ],
            [
                'question' => 'Kas ravi šiena?',
                'answer' => "Nu čia jau bybis žino",
                'category' => 'Egzistencija'
            ],
        ];
        
        return view('faq.index', compact('faqs', 'userRole'));
    }
}
