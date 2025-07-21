<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Address;

class KontakMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Pesan dari Form Kontak Website',
            replyTo: [
                new Address($this->data['email'], $this->data['nama'])
            ]
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.kontak',
            with: [
                'nama' => $this->data['nama'],
                'email' => $this->data['email'],
                'telp'  => $this->data['telp'] ?? '-',
                'judul' => $this->data['judul'],
                'pesan' => $this->data['pesan'],
            ]
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
