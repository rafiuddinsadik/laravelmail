<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CustomerMail extends Mailable
{
    use Queueable, SerializesModels;

    public $pdf;
    public $pdfName;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($pdf, $pdfName)
    {
        $this->pdf = $pdf;
        $this->pdfName = $pdfName;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('example@example.com')->markdown('email.customer')
            ->attachData($this->pdf, $this->pdfName, [
                'mime' => 'application/pdf',
            ]);
    }
}
