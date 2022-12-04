<?php

namespace App\Http\Controllers;

use App\KYC;
use App\Http\Requests\StoreKYCRequest;
use App\Http\Requests\UpdateKYCRequest;
use App\Helper;
use App\Http\Resources\KYCResource;
use \Exception;
use App\Notifications\KYCApproved;
use App\Notifications\KYCRequest;
use \DB;

class KYCController extends Controller
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
			$data = KYC::filter(request()->all())
				->latest()
				->paginate($pageSize);
				$pagination = [
					'total' => $data->total(),
					'count' => $data->count(),
					'per_page' => $data->perPage(),
					'current_page' => $data->currentPage(),
					'total_pages' => $data->lastPage()
				];
			$data = KYCResource::collection($data);
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreKYCRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKYCRequest $request)
    {
        try
        {
            // Implement kyc request logic here...\
            DB::beginTransaction();
            $validated = $request->validated();
            $validated['file'] = Helper::uploadImage($request, 'file', 'images/kyc');
            if(auth()->user()->kyc->count() > 0){
                $data = auth()->user()->kyc->first()->update($validated);
                DB::commit();
                Helper::adminsNotificationRequest(new KYCRequest($data));
                return Helper::validRequest(["success" => $data], 'KYC application has been updated successfully.', 200);
            }
            else{
                $data = KYC::create($validated);
                DB::commit();
                Helper::adminsNotificationRequest(new KYCRequest($data));
                $data = new KYCResource($data);
                return Helper::validRequest($data, 'Your KYC application request is being processed.', 200);
            }
            
			
			

        } catch (Exception $bug) {
            DB::rollback();
            return $this->exception($bug, 'unknown error', 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\KYC  $kYC
     * @return \Illuminate\Http\Response
     */
    public function show(KYC $kYC)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\KYC  $kYC
     * @return \Illuminate\Http\Response
     */
    public function edit(KYC $kYC)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKYCRequest  $request
     * @param  \App\KYC  $kYC
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKYCRequest $request, KYC $kYC)
    {
          try
        {
            // Implement kyc update request logic here...\
            DB::beginTransaction();
            $validated = $request->validated();
            $file = Helper::uploadImage($request, 'file', 'images/kyc');
            $validated['file'] = $file != null ? $file : $kyc->file;
            if($validated['approved'] && !$kYC->user->hasVerifiedId() ){
                $data = $kYC->update($validated);
                $kYC->user->markIdAsVerified();
                DB::commit();
                $kYC->user->notify(new KYCApproved($kyc));
                return Helper::validRequest($data, 'KYC application has been approved successfully.', 200);
            }
            
            $data = $kYC->update($validated);
            DB::commit();
			return Helper::validRequest(["success" => $data], 'KYC application updated successfully.', 200);

        } catch (Exception $bug) {
            DB::rollback();
            return $this->exception($bug, 'unknown error', 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\KYC  $kYC
     * @return \Illuminate\Http\Response
     */
    public function destroy(KYC $kYC)
    {
       
        try {
            if(!auth()->user()->isAdmin()){
                return Helper::inValidRequest('You are not unauthorized to perform this operation.', 'Unauthorized Access!', 400);
            }
            DB::beginTransaction();
            $data = $kYC->delete();
            DB::commit();
            return Helper::validRequest(["success" => $data], 'Delete request was successful', 200);
        } catch (Exception $bug) {
            DB::rollback();
            return $this->exception($bug, 'unknown error', 500);
        }
    }
}
