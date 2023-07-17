<?php

namespace App\Http\Controllers;

use App\Models\Chalet;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



     public function index()
     {

         return view('evaluation');
     }

     // باقي الأكواد الأخرى



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */




    public function create($id)
    {
        $s = Chalet::findOrFail($id);


        return view('evaluation', compact('s'));
    }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'message' => 'required|string',
        'rating' => 'required|in:1,2,3,4,5',
    ]);

    $customer = new Customer();
    $customer->name = $request->input('name');
    $customer->message = $request->input('message');
    $customer->rating = $request->input('rating');
    $customer->chalet_id = $id; // تعيين رقم الشاليه في الجدول
    $customer->save();

    return redirect()->back()->with('success', 'تم إرسال التقييم بنجاح!');
}



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
{
    $chalet = Chalet::findOrFail($id);
    return view('evaluation', compact('chalet'));
}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
