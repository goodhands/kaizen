<?php

namespace App\Http\Controllers;

use App\User;
use App\Photo;
use App\Token;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\Photo as PhotoResource;

class PhotoController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        if(request('json')){
            return new PhotoResource($photo);
        }else{
            return view('photo/index', [
                "photo" => $photo
            ]);
        }
    }

    /**
     * Helper class to return the comments of this resource.
     * I don't understand this shit but it works!!!
     * 
     * TODO:
     * 
     * Okay, I think I figured it out! Calling the commentator method before returning the comments 
     * object adds the commentator to the object out-of-the-box! It's magic!
     */
    public function comments(Photo $photo){
        $comments = $photo->comments;

        //Group-in the user info to the comment array
        foreach($comments as $comment){
            $comment->commentator;
        }

        return $photo->comments;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Resolve an API request with the use of the Photo Resources class
     */
    public function resolveApi(){
        return Photo::with('user')->get();
    }

    /**
     * Similar images may be filtered at the endpoint. We could filter based on the user or the color, etc
     * @param string terms: tells me the selection criteria only
     * @param string termID: tells me the particular selection id (userid, categoryid, etc)
     * @param string photo: tells me the photo to exclude
     */
    public function similar(Request $request){
        if($request->query('terms') == "user"){
            $photo = Photo::whereNotIn('slug', [$request->query('except')])->whereUserId($request->query('termID'))->with('user')->get();

            return$photo;
        }

    }
}
