<?php

namespace App\Http\Controllers;

use App\Testimonial;
use App\Helper;
use Illuminate\Http\Request;
use App\Http\Resources\TestimonialResource;
use App\Http\Requests\ValidateTestimonialRequest;
use \DB;
use \Exception;

class TestimonialController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        try {
            $page = request()->query('page', 1);

            $pageSize = request()->query('pageSize', 10000000);

            $testimonial = Testimonial::filter(request()->all())
                ->orderBy('rank' , 'desc')
                ->paginate($pageSize);

            $total = $testimonial->total();
            $data = TestimonialResource::collection($testimonial);

            $data = Helper::buildData($data);
            return Helper::validRequest($data, 'Testimonials fetched successfully', 200);
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
    public function store(ValidateTestimonialRequest $request) {
        $validated = $request->validated();
        DB::beginTransaction();
        $validated['image'] = Helper::uploadImage($request, 'image', 'images/testimonial');
        try
        {
            $testimonial = Testimonial::create($validated);

            DB::commit();

        } catch (Exception $bug) {
            DB::rollback();
            return $this->exception($bug, 'unknown error', 500);
        }

        return Helper::validRequest(new TestimonialResource($testimonial), 'Testimonial was sent successfully', 200);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial) {
        try {
            
            return Helper::validRequest(new TestimonialResource($testimonial), 'specified Testimonial was fetched successfully', 200);

        } catch (Exception $bug) {

            return $this->exception($bug, 'unknown error', 500);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial) {
        $validated = $request->validate([
            'name' => 'min:2|string|max:255',
            'content' =>  'min:2|string',
            'heading' =>  'string',
            'image' =>  'mimes:jpeg,jpg,png,bmp,gif,svg,tiff|max:2048',
            'designation' => 'string|max:255',
            'company' =>  'string|max:255',
            'country' =>  'string|max:255',
            'rating' =>  'numeric|min:1|max:5',
            'rank' => 'numeric',
        ]);
        DB::beginTransaction();
        $validated['image'] = $request->hasFile('image') ? Helper::uploadImage($request, 'image', 'images/testimonial') : $testimonial->image;
        try {
            $testimonial = $testimonial->update($validated);
            DB::commit();
            return Helper::validRequest(["success" => $testimonial], 'Testimonial was updated successfully', 200);
        } catch (Exception $bug) {
            DB::rollback();
            return $this->exception($bug, 'unknown error', 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial) {
        DB::beginTransaction();
        try {
            $testimonial = $testimonial->delete();
            DB::commit();
            return Helper::validRequest(["success" => $testimonial], 'Testimonial was deleted successfully', 200);
        } catch (Exception $bug) {
            DB::rollback();
            return $this->exception($bug, 'unknown error', 500);
        }
    }
}
