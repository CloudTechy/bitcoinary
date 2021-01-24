<?php

namespace App\Http\Controllers;

use App\Investor;
use App\Helper;
use Illuminate\Http\Request;
use App\Http\Requests\ValidateInvestorRequest;
use App\Http\Resources\InvestorResource;
use \DB;
use \Exception;

class InvestorController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        try {
            $page = request()->query('page', 1);

            $pageSize = request()->query('pageSize', 10000000);

            $investor = Investor::filter(request()->all())
                ->latest()
                ->paginate($pageSize);

            $total = $investor->total();
            $data = InvestorResource::collection($investor);

            $data = Helper::buildData($data, $total);

        } catch (Exception $bug) {

            return $this->exception($bug, 'unknown error', 500);
        }
        return Helper::validRequest($data, 'Investors fetched successfully', 200);
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
    public function store(ValidateInvestorRequest $request) {
        $validated = $request->validated();
        DB::beginTransaction();
        $validated['image'] = Helper::uploadImage($request, 'image', 'images/investor');
        try
        {
            $investor = Investor::create($validated);

            DB::commit();

        } catch (Exception $bug) {
            DB::rollback();
            return $this->exception($bug, 'unknown error', 500);
        }

        return Helper::validRequest(new InvestorResource($investor), 'Investor was sent successfully', 200);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Investor  $investor
     * @return \Illuminate\Http\Response
     */
    public function show(Investor $investor) {
        try {
            
            return Helper::validRequest(new InvestorResource($investor), 'specified Investor was fetched successfully', 200);

        } catch (Exception $bug) {

            return $this->exception($bug, 'unknown error', 500);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Investor  $investor
     * @return \Illuminate\Http\Response
     */
    public function edit(Investor $investor) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Investor  $investor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Investor $investor) {
        $validated = $request->validate([
            'name' => 'min:2|string|max:255',
            'investment' => 'numeric',
            'image' => 'mimes:jpeg,jpg,png,bmp,gif,svg,tiff|max:2048',
        ]);
        $validated['image'] = $request->hasFile('image') ? Helper::uploadImage($request, 'image', 'images/investor') : $investor->image;
        DB::beginTransaction();
        try {
            $investor = $investor->update($validated);
            DB::commit();
            return Helper::validRequest(["success" => $investor], 'Investor was updated successfully', 200);
        } catch (Exception $bug) {
            DB::rollback();
            return $this->exception($bug, 'unknown error', 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Investor  $investor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Investor $investor) {
        DB::beginTransaction();
        try {
            $investor = $investor->delete();
            DB::commit();
            return Helper::validRequest(["success" => $investor], 'Investor was deleted successfully', 200);
        } catch (Exception $bug) {
            DB::rollback();
            return $this->exception($bug, 'unknown error', 500);
        }
    }
}
