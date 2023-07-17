<?php

namespace App\Services;

use SendGrid\Mail\Mail;
use SendGrid\Mail\TypeException;

class EmailService
{
    public function sendBookingEmail($hostEmail, $bookingData)
    {
        $email = new Mail();
        $email->setFrom('your_email@example.com', 'Your Name');
        $email->setSubject('تأكيد حجز الشاليه');

        $message = "تم تأكيد حجز الشاليه بنجاح!\n\n";
        $message .= "اسم الشاليه: " . $bookingData['chalet_name'] . "\n";
        $message .= "تاريخ الحجز: " . $bookingData['booking_date'] . "\n";
        $message .= "وقت الحجز: " . $bookingData['booking_time'] . "\n";
        // يمكنك إضافة المزيد من التفاصيل هنا إذا لزم الأمر

        $email->addTo($hostEmail, 'صاحب الشاليه');
        $email->addContent("text/plain", $message);

        $sendgrid = new \SendGrid(env('SENDGRID_API_KEY'));

        try {
            $response = $sendgrid->send($email);
            return true;
        } catch (TypeException $e) {
            // حدثت مشكلة أثناء إعداد بيانات البريد الإلكتروني
            return false;
        }
    }
}
