<?php

namespace App\Http\Controllers;

use App\Mail\PostLiked;
use App\Models\Post;
use App\Models\User;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
//            ->except('pdf');
    }
    public function index()
    {
        return view('dashboard');
    }

//    public function pdf()
//    {
//        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('receipt');
//        return $pdf->download('invoice.pdf');
//    }
//
//    public function preview()
//    {
//      $user = User::find(auth()->id());
////      return view('receipt', compact('user'));
//        $data = [
//            'name'=>$user->name,
//            'email'=>$user->email,
//            'username'=>$user->username
//        ];
//        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('receipt', $data);
//        return $pdf->download('invoice.pdf');
//    }
}
