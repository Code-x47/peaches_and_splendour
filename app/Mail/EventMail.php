<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EventMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    

    public function __construct( 
        public string $title,
        public string $message
        )
    {
        //
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Event Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content():  Content 
    {
        return new Content(
            view: 'view.name',
        );

    }


    public function build()
    {
        return $this->subject($this->title)
                    ->html($this->emailTemplate());
    }


    protected function emailTemplate(): string
{
    return "
    <!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <style>
            body {
                margin: 0;
                padding: 0;
                font-family: 'Arial', sans-serif;
                background-color: #fdf6f0;
                color: #333;
            }
            .container {
                max-width: 600px;
                margin: 20px auto;
                padding: 20px;
                background-color: #ffffff;
                border-radius: 12px;
                box-shadow: 0 4px 8px rgba(0,0,0,0.05);
            }
            h1 {
                color: #d63384;
                text-align: center;
            }
            p {
                font-size: 16px;
                line-height: 1.6;
                text-align: center;
            }
            .button {
                display: inline-block;
                margin: 20px auto;
                padding: 12px 24px;
                background-color: #d63384;
                color: #fff;
                text-decoration: none;
                border-radius: 6px;
                font-weight: bold;
            }
            .footer {
                text-align: center;
                font-size: 12px;
                color: #999;
                margin-top: 20px;
            }
        </style>
    </head>
    <body>
        <div class='container'>
            <h1>{$this->title}</h1>
            <p>{$this->message}</p>
            <a href='/' class='button'>Join Live</a>
            <p class='footer'>You are receiving this email because you signed up for our wedding updates.</p>
        </div>
    </body>
    </html>
    ";
}


    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
