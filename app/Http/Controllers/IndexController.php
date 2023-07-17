<?php

namespace App\Http\Controllers;

use services;
use App\Models\Info;
use App\Models\Chalet;
use App\Models\Contact;
use App\Models\Service;
use App\Models\Customer;
use App\Models\Experience;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{$chalets = Chalet::all();
    $customers = Customer::all();
    $services = Service::all();
    $experiences = Experience::all();
    $info = Info::first(); // استخراج بيانات جهة الاتصال الواحدة أو يمكنك استخدام الطريقة التي تحدد بها بيانات الاتصال
    return view('index', compact('services', 'customers', 'experiences', 'info', 'chalets'));


}

public function about()
{$chalets = Chalet::all();
    $customers = Customer::all();
    $services = Service::all();
    $experiences = Experience::all();
    $info = Info::first(); // استخراج بيانات جهة الاتصال الواحدة أو يمكنك استخدام الطريقة التي تحدد بها بيانات الاتصال
    return view('about', compact('services', 'customers', 'experiences', 'info', 'chalets'));
}

public function ss()
{$chalets = Chalet::all();
    $customers = Customer::all();
    $services = Service::all();
    $experiences = Experience::all();
    $info = Info::first(); // استخراج بيانات جهة الاتصال الواحدة أو يمكنك استخدام الطريقة التي تحدد بها بيانات الاتصال
    return view('chalets', compact('services', 'customers', 'experiences', 'info', 'chalets'));
}

public function contact()
{$chalets = Chalet::all();
    $customers = Customer::all();
    $services = Service::all();
    $experiences = Experience::all();
    $info = Info::first(); // استخراج بيانات جهة الاتصال الواحدة أو يمكنك استخدام الطريقة التي تحدد بها بيانات الاتصال
    return view('contact', compact('services', 'customers', 'experiences', 'info', 'chalets'));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
