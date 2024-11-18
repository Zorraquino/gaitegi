<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\LeadGenerated;
use Illuminate\Support\Facades\Validator;

class EmailController extends Controller
{
    public function sendEmail(array $data)
    {
        try {

            $validator = Validator::make($data, [
                'email' => 'required|email',
                'name' => 'required|string|max:255',
                'message' => 'required|string'
            ]);

            if ($validator->fails()) {
                throw new \Exception('Validation failed: ' . $validator->errors()->first());
            }

            $validated = $validator->validated();

            Mail::to($validated['email'])
                ->send(new LeadGenerated(
                    $validated['email'],
                    $validated['name'],
                    $validated['message']
                ));

            Log::info('Email sent successfully to: ' . $validated['email']);
            return ['success' => true];

        } catch (\Exception $e) {
            Log::error('Email error: ' . $e->getMessage());
            throw $e;
        }
    }
}