<?php

namespace App\Http\Controllers;

use App\Loan;
use App\Http\Requests\StoreLoanRequest;
use App\Http\Requests\UpdateLoanRequest;
use App\User;
use App\Helper;
use \DB;
use \Exception;

class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLoanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLoanRequest $request)
    {
        DB::beginTransaction();
        try
        {
            // Implement loan request logic here...\
            $validated = $request->validated();
            Loan::create($validated);
            DB::commit();
            return Helper::invalidRequest(['error' => 'Inelligible loan request'], 'You are not elligible for this offer at the moment, contact our support team for assistance', 400); 
            

        } catch (Exception $bug) {
            DB::rollback();
            return $this->exception($bug, 'unknown error', 500);
        }
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function show(Loan $loan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLoanRequest  $request
     * @param  \App\Loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLoanRequest $request, Loan $loan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Loan $loan)
    {
        if(!auth()->user()->isAdmin()){
                return Helper::inValidRequest('You are not unauthorized to perform this operation.', 'Unauthorized Access!', 400);
        }
    }
}
