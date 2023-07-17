<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\EmailService;
use App\Models\Booking;
use App\Models\Chalet;

class BookingController extends Controller
{
    // ... (الدوال الأخرى في الكنترولر)

    public function store(Request $request, $id)
    {
        // التحقق من صحة البيانات المدخلة
        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'phone_number' => 'required|string',
            'email' => 'required|email',
            'id_number' => 'required|string',
            'message' => 'nullable|string',
            'booking_date' => 'required|date',
            'booking_time' => 'required|integer|in:0,1,2',
        ]);

        $bookingTime = '';
        switch ($request->input('booking_time')) {
            case 0:
                $bookingTime = 'صباحي';
                break;
            case 1:
                $bookingTime = 'مسائي';
                break;
            case 2:
                $bookingTime = 'مسائي وصباحي';
                break;
        }

        $a = Chalet::findOrFail($id);
        $hostEmail = $a->email;

        // حفظ بيانات الحجز في قاعدة البيانات
        $booking = new Booking();
        $booking->host_email = $hostEmail;
        $booking->first_name = $request->input('first_name');
        $booking->last_name = $request->input('last_name');
        $booking->phone_number = $request->input('phone_number');
        $booking->email = $request->input('email');
        $booking->identification = $request->input('id_number');
        $booking->message = $request->input('message');
        $booking->chalet_id = $id;
        $booking->chalet_date = $request->input('booking_date');
        $booking->chalet_time = $bookingTime;
        $booking->save();

        // إعداد بيانات البريد الإلكتروني
        $bookingData = [
            'chalet_name' => $a->name,
            'booking_date' => $request->input('booking_date'),
            'booking_time' => $bookingTime,
            // يمكنك إضافة المزيد من التفاصيل هنا إذا لزم الأمر
        ];

        // إرسال البريد الإلكتروني لصاحب الشاليه
        $emailService = new EmailService();
        $emailSent = $emailService->sendBookingEmail($hostEmail, $bookingData);

        // إعادة توجيه المستخدم إلى صفحة تأكيد الحجز
        if ($booking->save() && $emailSent) {
            // إذا تم حفظ الحجز وتم إرسال البريد الإلكتروني بنجاح، قم بإعادة التوجيه إلى صفحة تأكيد الحجز
            return redirect()->route('chalets.show', ['id' => $id])->with('success', 'تم  ارسال بيانات حجز الشاليه بنجاح سوف يتم ابلاغك عن طريق البريد الالكتروني الخاص بك!');
        } else {
            // إذا لم يتم حفظ الحجز أو فشل إرسال البريد الإلكتروني، قم بإعادة التوجيه إلى صفحة الحجز مرة أخرى مع عرض رسالة خطأ
            return redirect()->route('chalets.show', ['id' => $id])->with('error', 'حدثت مشكلة أثناء حجز الشاليه. يرجى المحاولة مرة أخرى.');
        }
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
