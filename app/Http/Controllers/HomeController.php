<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checkout;
use App\Models\User;
use Auth;

class HomeController extends Controller
{
    public function dashboard()
    {
        $checkouts = Checkout::with('camp')->where('user_id',Auth::id())->get();
        return view('user.dashboard', [
            "checkouts" => $checkouts
        ]);
    }


// DashboardController.php

    public function index()
    {
        $user = Auth::user();
        $checkouts = $user->checkouts()->with('camp')->get();

        return view('dashboard.index', compact('checkouts'));
    }
}