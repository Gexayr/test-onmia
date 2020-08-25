<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::latest()->paginate(20);
        return view('videos.index', compact('videos'))->with('1', (request()->input('page', 1) - 1) * 20);
    }


    public function search(Request $request)
    {
        $videos = Video::where('name', 'like', $request->name_starting . '%')
            ->orWhere('name', 'like', '%' . $request->name_ending)
            ->paginate(20);

        return view('videos.index', compact('videos'))->with('1', (request()->input('page', 1) - 1) * 20);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('videos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50',
            'description' => 'required',
            'tags' => 'required|regex:/^[a-zA-Z0-9,-]+$/'
        ]);

        $video = new Video();
        $video->name = $request->name;
        $video->description = $request->description;
        $video->tags = $request->tags;
        $video->save();

        return redirect()->route('videos.index')->with('success', "Video created");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
        return view('videos.edit', compact('video'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        $request->validate([
            'name' => 'required|max:100',
            'description' => 'required',
            'tags' => 'required|regex:/^[a-zA-Z0-9,-]+$/'
        ]);

        $video->update($request->except(["_token","_method"]));

        return redirect()->route('videos.index')->with('success', "Video updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        $video->delete();
        return redirect()->route('videos.index')->with('success', "Video deleted");
    }




}
