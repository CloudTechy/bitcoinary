<?php

namespace App\Http\Controllers;

use App\News;
use App\Helper;
use Illuminate\Http\Request;
use App\Http\Requests\ValidateNewsRequest;
use App\Http\Resources\NewsResource;
use \DB;
use \Exception;

class NewsController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        try {
            $page = request()->query('page', 1);

            $pageSize = request()->query('pageSize', 10000000);

            $news = News::filter(request()->all())
                ->latest()
                ->paginate($pageSize);

            $total = $news->total();
            $data = NewsResource::collection($news);

            $data = Helper::buildData($data, $total);

        } catch (Exception $bug) {

            return $this->exception($bug, 'unknown error', 500);
        }
        return Helper::validRequest($data, 'Newss fetched successfully', 200);
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
    public function store(ValidateNewsRequest $request) {
        $validated = $request->validated();
        DB::beginTransaction();
        $validated['image'] = Helper::uploadImage($request, 'image', 'images/news');
        try
        {
            $news = News::create($validated);

            DB::commit();

        } catch (Exception $bug) {
            DB::rollback();
            return $this->exception($bug, 'unknown error', 500);
        }

        return Helper::validRequest(new NewsResource($news), 'News was sent successfully', 200);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news) {
        try {
            
            return Helper::validRequest(new NewsResource($news), 'specified News was fetched successfully', 200);

        } catch (Exception $bug) {

            return $this->exception($bug, 'unknown error', 500);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news) {
        $validated = $request->validate([
            'author' => 'min:2|string|max:255',
            'title' => 'min:2|string',
            'intro' => 'min:2|string',
            'article' => 'min:2|string',
            'votes' => 'numeric',
            'comment_disabled' => 'boolean',
            'image' => 'mimes:jpeg,jpg,png,bmp,gif,svg,tiff|max:2048',
        ]);
        DB::beginTransaction();
        $validated['image'] = $request->hasFile('image') ? Helper::uploadImage($request, 'image', 'images/news') : $news->image;
        try {
            $news = $news->update($validated);
            DB::commit();
            return Helper::validRequest(["success" => $news], 'News was updated successfully', 200);
        } catch (Exception $bug) {
            DB::rollback();
            return $this->exception($bug, 'unknown error', 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news) {
        DB::beginTransaction();
        try {
            $news = $news->delete();
            DB::commit();
            return Helper::validRequest(["success" => $news], 'News was deleted successfully', 200);
        } catch (Exception $bug) {
            DB::rollback();
            return $this->exception($bug, 'unknown error', 500);
        }
    }
}
