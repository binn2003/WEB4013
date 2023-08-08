<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class GuiEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct()
    {
        //
    }

    // public function envelope()
    // {
    //     return new Envelope(
    //         subject: 'Gui Email Test',
    //     );
    // }

    // public function content()
    // {
    //     return new Content(
    //         view: 'guimail',
    //     );
    // }

    public function build()
    {
        return $this
            ->from("ducvqpd06941@fpt.edu.vn", "TestMailGun")
            ->to("voquyduc2003@gmail.com")
            ->subject(("Tiêu đề thư"))
            ->view('guimail'); //nạp view nội dung mail
    }
}
