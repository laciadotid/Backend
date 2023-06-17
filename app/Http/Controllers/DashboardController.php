<?php

namespace App\Http\Controllers;

// use App\Models\Reservation;
// use App\Models\Service;
// use App\Models\User;
use App\Models\Payment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

use Auth;

class DashboardController extends Controller
{
    public function admin()
    {
        $postinganadn = Post::orderByDesc('created_at')->limit(5)->get();
        // $all = User::where('user_id', Auth::user()->id)->count();
        $all = User::where('user_category', 'penulis')->count();
        // $today = Reservation::whereDate('created_at', Carbon::today())->count();
        // $all = Reservation::count();
        // $service = Service::count();
        // $customer = User::where('role', 'customer')->count();
        // $reservations = Reservation::orderByDesc('created_at')->limit(7)->get();
        // return view('dashboards.admin', compact('today', 'all', 'service', 'customer', 'reservations'));
        return view('dashboards.admin', compact('all','postinganadn'));
        
    }

    public function penulis()
    {
        $money = Payment::join('post', 'payment.payment_post', '=', 'post.id')
        ->where('post.post_author', Auth::user()->id)
        ->sum('payment.money');

        // $today = Reservation::where('user_id', Auth::user()->id)->whereDate('created_at', Carbon::today())->count();
        // $all = Reservation::where('user_id', Auth::user()->id)->count();
        // $complete = Reservation::where('user_id', Auth::user()->id)->where('status', 'completed')->count();
        $postingan = Post::where('post_author', Auth::user()->id)
            ->orderBy('created_at', 'desc')
            ->limit(5)
            ->get();
        // return view('dashboards.customer', compact('today', 'all', 'complete', 'reservations'));
          return view('dashboards.penulis', compact('money','postingan'));
        // return view('dashboards.penulis');
    }
}
