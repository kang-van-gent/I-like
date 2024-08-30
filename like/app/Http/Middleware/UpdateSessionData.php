<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\customer;

class UpdateSessionData
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is logged in
        if (Session::has('user') && Session::get('user') === true) {
            // Retrieve the user ID from the session
            $user = Session::get('data');
            $userId = $user[0]->id;

            // Query the latest user data
            $updatedUserData = customer::find($userId);

            // Update the session with the latest data
            if ($updatedUserData) {
                Session::put('data', [$updatedUserData]);
            }
        }

        return $next($request);
    }
}
