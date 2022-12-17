<?php

namespace App\Http\Controllers;

use App\Team;
use App\Helper;
use Illuminate\Http\Request;
use App\Http\Requests\ValidateTeamRequest;
use App\Http\Resources\TeamResource;
use \DB;
use \Exception;

class TeamController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        try {
            $page = request()->query('page', 1);

            $pageSize = request()->query('pageSize', 10000000);

            $team = Team::filter(request()->all())
                ->orderBy('rank' , 'desc')
                ->paginate($pageSize);
            $data = TeamResource::collection($team);
            $data = Helper::buildData($data);
            return Helper::validRequest($data, 'Teams fetched successfully', 200);
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
    public function store(ValidateTeamRequest $request) {
        $validated = $request->validated();
        DB::beginTransaction();
        $validated['image'] = Helper::uploadImage($request, 'image', 'images/team');
        try
        {
            $team = Team::create($validated);

            DB::commit();

        } catch (Exception $bug) {
            DB::rollback();
            return $this->exception($bug, 'unknown error', 500);
        }

        return Helper::validRequest(new TeamResource($team), 'Team was sent successfully', 200);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team) {
        try {
            
            return Helper::validRequest(new TeamResource($team), 'specified Team was fetched successfully', 200);

        } catch (Exception $bug) {

            return $this->exception($bug, 'unknown error', 500);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team) {
        $validated = $request->validate([
             'name' => 'min:2|string|max:255',
            'designation' => 'string|max:255',
            'intro' => 'nullable|string',
            'image' => 'mimes:jpeg,jpg,png,bmp,gif,svg,tiff|max:2048',
            'rank' => 'numeric',
        ]);
        $validated['image'] = $request->hasFile('image') ? Helper::uploadImage($request, 'image', 'images/team') : $team->image;
        DB::beginTransaction();
        try {
            $team = $team->update($validated);
            DB::commit();
            return Helper::validRequest(["success" => $team], 'Team was updated successfully', 200);
        } catch (Exception $bug) {
            DB::rollback();
            return $this->exception($bug, 'unknown error', 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team) {
        DB::beginTransaction();
        try {
            $team = $team->delete();
            DB::commit();
            return Helper::validRequest(["success" => $team], 'Team was deleted successfully', 200);
        } catch (Exception $bug) {
            DB::rollback();
            return $this->exception($bug, 'unknown error', 500);
        }
    }
}
