<?php

namespace App\Http\Controllers;

use App\BankDetail;
use App\Helper;
use Illuminate\Http\Request;
use App\Http\Resources\BankDetailResource;
use \DB;
use \Exception;
use Illuminate\Validation\Rule;

class BankDetailController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		try {
			$page = request()->query('page', 1);

			$pageSize = request()->query('pageSize', 10000000);

			$bankDetails = BankDetail::filter(request()->all())
				->latest()
				->paginate($pageSize);

			$total = $bankDetails->total();
			$data = BankDetailResource::collection($bankDetails);

			$data = Helper::buildData($data, $total);

		} catch (Exception $bug) {

			return $this->exception($bug, 'unknown error', 500);
		}
		return Helper::validRequest($data, 'bankDetails fetched successfully', 200);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		$validated = $request->validate([

			"bank_id" => "numeric|exists:banks,id|nullable",
			"acc_name" => "required_unless:currency_type,crypto|string|nullable",
			"acc_number" => "required_unless:currency_type,crypto|numeric|nullable",
			"user_id" => "required|numeric|exists:users,id",
			'swift_code' => 'nullable|string',
			'currency_type' => 'required|string|exists:payment_methods,type',
			'payment_method' => [
				'required',
				'string', 
				Rule::exists('payment_methods' , 'name')->where(function ($query) use($request){
		            $query->where('type', $request->currency_type);
		        }),
				Rule::unique('bank_details')->where(function ($query) use($request){
				    return $query->where('user_id', $request->user_id);
				})
			],
			
			'wallet' => 'required_unless:currency_type,fiat|string|nullable',

		]);
		DB::beginTransaction();

		try
		{
			$bankdetail = BankDetail::create($validated);

			DB::commit();

		} catch (Exception $bug) {
			DB::rollback();
			return $this->exception($bug, 'unknown error', 500);
		}

		return Helper::validRequest(new BankDetailResource($bankdetail), 'BankDetail was sent successfully', 200);

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\BankDetail  $bankDetail
	 * @return \Illuminate\Http\Response
	 */
	public function show(BankDetail $bankdetail) {
		try {
			
			return Helper::validRequest(new BankDetailResource($bankdetail), 'specified BankDetail was fetched successfully', 200);

		} catch (Exception $bug) {

			return $this->exception($bug, 'unknown error', 500);
		}
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\BankDetail  $bankDetail
	 * @return \Illuminate\Http\Response
	 */
	public function edit(BankDetail $bankDetail) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\BankDetail  $bankDetail
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, BankDetail $bankdetail) {
		$validated = $request->validate([
			"bank_id" => "numeric|exists:banks,id|nullable",
			"acc_name" => "required_unless:currency_type,crypto|string|nullable",
			"acc_number" => "required_unless:currency_type,crypto|numeric|nullable",
			'swift_code' => 'nullable|string',
			'currency_type' => 'string|exists:payment_methods,type',
			'payment_method' => [
				'string', 
				Rule::exists('payment_methods' , 'name')->where(function ($query) use($request){
		            $query->where('type', $request->currency_type);
		        }),
			],
			
			'wallet' => 'required_unless:currency_type,fiat|string|nullable',
		]);
		DB::beginTransaction();
		try {
			$bankdetail = $bankdetail->update($validated);
			DB::commit();
			return Helper::validRequest(["success" => $bankdetail], 'BankDetail was updated successfully', 200);
		} catch (Exception $bug) {
			DB::rollback();
			return $this->exception($bug, 'unknown error', 500);
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\BankDetail  $bankDetail
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(BankDetail $bankdetail) {
		DB::beginTransaction();
		try {
			$bankdetail = $bankdetail->delete();
			DB::commit();
			return Helper::validRequest(["success" => $bankdetail], 'BankDetail was deleted successfully', 200);
		} catch (Exception $bug) {
			DB::rollback();
			return $this->exception($bug, 'unknown error', 500);
		}
	}
}
