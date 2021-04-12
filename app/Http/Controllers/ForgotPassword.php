<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;
// use PHPMailer\PHPMailer\SMTP;

class ForgotPassword extends Controller
{
    public function index()
    {
        return view('ForgotPassword/VerifyEmail');
    }

    public function EmailVerify()
    {
        // php artisan make:mail SendMail

        $data = [
            'name' => 'Gericht',
            'message' => 'This if for testing email using gmail'
        ];

        Mail::to('mraqwan471@gmail.com')->send(new SendEmail($data));


        // require 'PHPMailer/vendor/autoload.php';

        // $mail = new PHPMailer();

        // try {
        //     $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        //     $mail->isSMTP();
        //     $mail->Host = env('EMAIL_HOST');
        //     $mail->SMTPAuth = true;
        //     $mail->Username = env('EMAIL_USERNAME');
        //     $mail->Password = env('EMAIL_PASSWORD');
        //     $mail->Port = 587;
        //     $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

        //     $mail->isHTML(true);
        //     $mail->setFrom('mohwannn1@gmail.com', "Rayon`s Cruise Line");
        //     $mail->addAddress('mraqwan471@gmail.com');
        //     $mail->Subject = ("mraqwan471@gmail.com ('Verifikasi Email')");
        //     $mail->Body = "Ini adalah kode verifikasi email anda untuk mengganti password, harap verifikasi kode ini,
        //             jika selama sepuluh menit belum terkonfirmasi kode ini akan automatis tidak valid. Terima Kasih.\n\n" . "Kode Verifikasi Anda = ";

        //     if ($mail->send()) {
        //         dd('Berhasil');
        //     } else {
        //         dd('Gagal');
        //     }
        // } catch (Exception $e) {
        //     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        // }

        return 'Email Send';
    }
}
