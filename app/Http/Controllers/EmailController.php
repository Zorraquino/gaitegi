<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\LeadGenerated;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        try {
            // Validate input
            $validated = $request->validate([
                'email' => 'required|email',
                'name' => 'required|string|max:255',
                'message' => 'required|string'
            ]);

            // Send email to the provided address instead of authenticated user
            Mail::to($validated['email'])
                ->send(new LeadGenerated(
                    $validated['email'],
                    $validated['name'],
                    $validated['message']
                ));

            Log::info('Email sent successfully to: ' . $validated['email']);
            return response()->json(['success' => true]);

        } catch (\Exception $e) {
            Log::error('Email error: ' . $e->getMessage());
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}