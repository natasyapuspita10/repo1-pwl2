<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Requests\User\Checkout\Store as StoreRequest;
use App\Models\Checkout;
use App\Models\Camp;
use App\Models\User;
use Auth;
use Mail;
use App\Mail\Checkout\AfterCheckout;

class CheckoutController extends Controller
{
    public function create(Camp $camp)
    {
        if ($camp->isRegistered) {
            session()->flash('error', "You already registered on {$camp->title} camp.");
            return redirect(route('dashboard'));
        }

        return view('checkout.create', [
            "camp" => $camp
        ]);
    }

    public function store(StoreRequest $request, Camp $camp)
    {
        try {
            DB::beginTransaction();

            // Mapping request data
            $data = $request->validated();
            $data['user_id'] = Auth::id();
            $data['camp_id'] = $camp->id;

            // Update user data
            $user = Auth::user();
            $user->email = $data['email'];
            $user->name = $data['name'];
            $user->occupation = $data['occupation'];
            $user->save();

            // Create checkout
            $checkout = Checkout::create($data);

            // Sending notification via email
            Mail::to(Auth::user()->email)->send(new AfterCheckout($checkout));

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors(['msg' => $e->getMessage()]);
        } catch (\Throwable $ex) {
            DB::rollBack();
            return redirect()->back()->withErrors(['msg' => $ex->getMessage()]);
        }

        return redirect(route('checkout.success'))->with('success', 'Checkout successful.');
    }

    public function success()
    {
        return view('checkout.success');
    }
}
