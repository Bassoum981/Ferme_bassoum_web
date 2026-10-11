<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function create(): View
    {
        return view('contact');
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:150'],
            'phone' => ['nullable', 'string', 'max:30'],
            'subject' => ['required', 'string', 'max:150'],
            'message' => ['required', 'string', 'max:3000'],
        ]);

        Mail::raw(
            "Nom : {$data['name']}\n"
            ."E-mail : {$data['email']}\n"
            ."Téléphone : ".($data['phone'] ?: 'Non renseigné')."\n\n"
            ."Objet : {$data['subject']}\n\n"
            ."Message :\n{$data['message']}",
            function ($mail) use ($data): void {
                $mail->to(config('mail.contact_address'))
                    ->replyTo($data['email'], $data['name'])
                    ->subject('Nouveau message - Ferme Bassoum');
            },
        );

        return back()->with('success', 'Votre message a bien été envoyé. Nous vous répondrons rapidement.');
    }
}
