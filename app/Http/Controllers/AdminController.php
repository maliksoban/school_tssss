<?php


namespace App\Http\Controllers;


use App\Events\UserRegistered;
use App\Http\Requests\User\CreateAdminRequest;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{

    /**
     * @param CreateAdminRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeAdmin(CreateAdminRequest $request)
    {
        $password = $request->password;
        $tb = $this->userService->storeAdmin($request);
        try {
            // Fire event to send welcome email
            // event(new userRegistered($userObject, $plain_password)); // $plain_password(optional)
            event(new UserRegistered($tb, $password));
        } catch(\Exception $ex) {
            Log::info('Email failed to send to this address: '.$tb->email);
        }

        return back()->with('status', __('Saved'));
    }

}
