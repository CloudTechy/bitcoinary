<?php

namespace App\Http\Controllers;

use App\Helper;
use App\Http\Requests\ValidatePackageRequest;
use App\Http\Resources\PackageResource;
use App\Package;
use Illuminate\Http\Request;
use \DB;
use \Exception;

class PackageController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		try {
			$page = request()->query('page', 1);
			$pageSize = request()->query('pageSize', 10000000);
			$data = Package::filter(request()->all())
				->orderBy('rank', 'asc')
				->paginate($pageSize);
				$pagination = [
					'total' => $data->total(),
					'count' => $data->count(),
					'per_page' => $data->perPage(),
					'current_page' => $data->currentPage(),
					'total_pages' => $data->lastPage()
				];
			$data = PackageResource::collection($data);
			$builtData = Helper::buildData($data, $pagination);
			return Helper::validRequest($builtData, 'data was fetched successfully', 200);
		} catch (Exception $bug) {
			return $this->exception($bug, 'unknown error', 500);
		}
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
	public function store(ValidatePackageRequest $request) {
		$validated = $request->validated();
		DB::beginTransaction();
		try
		{
			$data = Package::create($validated);
			DB::commit();
			return Helper::validRequest($data, 'data was sent successfully', 200);
		} catch (Exception $bug) {
			DB::rollback();
			return $this->exception($bug, 'unknown error', 500);
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Package  $package
	 * @return \Illuminate\Http\Response
	 */
	public function show(Package $package) {
		try {
			$package = new PackageResource($package);
			return Helper::validRequest($package, 'specified Package was fetched successfully', 200);
		} catch (Exception $bug) {
			return $this->exception($bug, 'unknown error', 500);
		}
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Package  $package
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Package $package) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Package  $package
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Package $package) {
		DB::beginTransaction();
		$validated = $request->validate([
			'min_deposit' => 'numeric',
			'max_deposit' => 'numeric',
			'amount' => 'numeric',
			'roi' => 'numeric',
			'turnover' => 'numeric',
			'status' => 'boolean',
			'capital_back' => 'boolean',
			'loop_termination' => 'required|numeric',
			'return_for' => 'string|in:period,lifetime',
			'amount_type' => 'string|in:fixed,range',
			'name' => 'string|min:2|max:255',
			'first_level_ref_commission' => 'numeric',
			'second_level_ref_commission' => 'numeric',
		]);
		try {
			$data = $package->update($validated);
			DB::commit();
			return Helper::validRequest(["success" => $data], 'Updated successfully', 200);
		} catch (Exception $bug) {
			DB::rollback();
			return $this->exception($bug, 'unknown error', 500);
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Package  $package
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Package $package) {
		DB::beginTransaction();
		try {
			if(!auth()->user()->isAdmin()){
                return Helper::inValidRequest('You are not unauthorized to perform this operation.', 'Unauthorized Access!', 400);
            }
			$data = $package->delete();
			DB::commit();
			return Helper::validRequest(["success" => $data], 'Item deleted successfully', 200);
		} catch (Exception $bug) {
			DB::rollback();
			return $this->exception($bug, 'unknown error', 500);
		}
	}
}
