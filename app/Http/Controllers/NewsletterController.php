<?php

namespace App\Http\Controllers;

use App\Newsletter;
use App\Helper;
use Illuminate\Http\Request;
use App\Http\Requests\ValidateNewsletterRequest;
use App\Http\Resources\NewsletterResource;
use \DB;
use \Exception;

class NewsletterController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        try {
            $page = request()->query('page', 1);

            $pageSize = request()->query('pageSize', 10000000);

            $newsletter = Newsletter::filter(request()->all())
                ->latest()
                ->paginate($pageSize);
            $data = NewsletterResource::collection($newsletter);
            $data = Helper::buildData($data);
            return Helper::validRequest($data, 'Newsletters fetched successfully', 200);
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
    public function store(ValidateNewsletterRequest $request) {
        $validated = $request->validated();
        DB::beginTransaction();

        try
        {
            $newsletter = Newsletter::create($validated);

            DB::commit();

        } catch (Exception $bug) {
            DB::rollback();
            return $this->exception($bug, 'unknown error', 500);
        }

        return Helper::validRequest(new NewsletterResource($newsletter), 'Newsletter was sent successfully', 200);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function show(Newsletter $newsletter) {
        try {
            
            return Helper::validRequest(new NewsletterResource($newsletter), 'specified Newsletter was fetched successfully', 200);

        } catch (Exception $bug) {

            return $this->exception($bug, 'unknown error', 500);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function edit(Newsletter $newsletter) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Newsletter $newsletter) {
        $validated = $request->validate([
             "email" => "email|unique:newsletters,email",
        ]);
        DB::beginTransaction();
        try {
            $newsletter = $newsletter->update($validated);
            DB::commit();
            return Helper::validRequest(["success" => $newsletter], 'Newsletter was updated successfully', 200);
        } catch (Exception $bug) {
            DB::rollback();
            return $this->exception($bug, 'unknown error', 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Newsletter $newsletter) {
        DB::beginTransaction();
        try {
            $newsletter = $newsletter->delete();
            DB::commit();
            return Helper::validRequest(["success" => $newsletter], 'Newsletter was deleted successfully', 200);
        } catch (Exception $bug) {
            DB::rollback();
            return $this->exception($bug, 'unknown error', 500);
        }
    }
}
