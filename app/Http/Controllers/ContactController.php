<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function index()
    {
        return view('portfolio.contact');
    }

    public function send(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:2000'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $data = $request->only(['name', 'email', 'subject', 'message']);

        try {
            // In a real application, you would send an actual email
            // Mail::send('emails.contact', $data, function($message) use ($data) {
            //     $message->to('your-email@example.com')
            //             ->subject($data['subject'])
            //             ->from($data['email'], $data['name']);
            // });

            return back()->with('success', 'Pesan Anda telah berhasil dikirim! Terima kasih telah menghubungi Tatabiin. Saya akan segera merespon pesan Anda.');
        } catch (\Exception $e) {
            return back()->with('error', 'Terjadi kesalahan saat mengirim pesan. Silakan coba lagi.');
        }
    }
}
