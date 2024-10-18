<?php
// app/Http/Controllers/EmailController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\LeadGenerated;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $email = $request->input('email');
        $name = $request->input('name');
        $message = $request->input('message');

        Mail::to($request->user())
            ->send(new LeadGenerated($email, $name, $message));

        return response()->json(['success' => 'true']);
    }
}