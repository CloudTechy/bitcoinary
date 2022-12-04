<?php

namespace App\Http\Controllers;

use App\PaymentMethod;
use Illuminate\Http\Request;
Use App\Helper;
use \DB;
use \Exception;

class PaymentMethodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $page = request()->query('page', 1);

            $pageSize = request()->query('pageSize', 10000000);

            $paymentmethod = PaymentMethod::filter(request()->all())
                ->orderBy('rank' , 'desc')
                ->paginate($pageSize);
            $data = Helper::buildData($paymentmethod);
            // $data = 'hello';
            return Helper::validRequest($data, 'payment methods fetched successfully', 200);
        } catch (Exception $bug) {

            return $this->exception($bug, 'unknown error', 500);
        }
        
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
        $validated = $request->validate([

            "name" => "required|unique:payment_methods,name|string",
            "show_on" => 'required|string|in:both,withdrawal,deposit',
            "type" => 'required|string|in:crypto,fiat',
            // "image" => 'required|mimes:jpeg,jpg,png,bmp,gif,svg,tiff|max:2048',
            "image" => 'nullable',
            'rank' => 'numeric',

        ]);
        DB::beginTransaction();
         $validated['image'] = Helper::uploadImage($request, 'image', 'images/payment');
        try
        {
            $paymentmethod = PaymentMethod::create($validated);
            DB::commit();
            return Helper::validRequest($paymentmethod, 'Payment method created successfully', 200);
        } catch (Exception $bug) {
            DB::rollback();
            return $this->exception($bug, 'unknown error', 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PaymentMethod  $paymentmethod
     * @return \Illuminate\Http\Response
     */
    public function show(PaymentMethod $paymentmethod)
    {
       try {
            $data = $paymentmethod;
            return Helper::validRequest($data, 'specified data was fetched successfully', 200);

        } catch (Exception $bug) {

            return $this->exception($bug, 'unknown error', 500);
        }
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PaymentMethod  $paymentmethod
     * @return \Illuminate\Http\Response
     */
    public function edit(PaymentMethod $paymentmethod)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PaymentMethod  $paymentmethod
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PaymentMethod $paymentmethod)
    {
        $validated = $request->validate([
            "name" => 'unique:payment_methods,name|string|min:2|max:100',
            "show_on" => 'string|in:both,withdrawal,deposit',
            "type" => 'string|in:crypto,fiat',
            "image" => 'mimes:jpeg,jpg,png,bmp,gif,svg,tiff|max:2048',

        ]);
        DB::beginTransaction();
        $validated['image'] = $request->hasFile('image') ? Helper::uploadImage($request, 'image', 'images/payment') : $paymentmethod->image;
        try {

            $data = $paymentmethod->update($validated);
            DB::commit();
            return Helper::validRequest(["success" => $data], 'data was updated successfully', 200);

        } catch (Exception $bug) {
            DB::rollback();
            return $this->exception($bug, 'unknown error', 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PaymentMethod  $paymentmethod
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaymentMethod $paymentmethod)
    {
       DB::beginTransaction();
        try {
            if(!auth()->user()->isAdmin()){
                return Helper::inValidRequest('You are not unauthorized to perform this operation.', 'Unauthorized Access!', 400);
            }
            $data = $paymentmethod->delete();
            DB::commit();
            return Helper::validRequest(["success" => $data], 'Item deleted successfully', 200);
        } catch (Exception $bug) {
            DB::rollback();
            return $this->exception($bug, 'unknown error', 500);
        }
    }
}
