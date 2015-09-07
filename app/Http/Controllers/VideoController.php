<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Video;
use Carbon\Carbon;
use App\Http\Requests\VideoRequest;
use ReflectionClass;
use Illuminate\Routing\Router;

class VideoController extends Controller {
	function __construct(Router $route) {
		// do stuff
	}
	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() {
		$videos = Video::latest ( "published_at" )->published ()->get ();
		// return $videos;
		return view ( "video.index", compact ( "videos" ) );
	}
	public function unpublished() {
		$videos = Video::latest ( "published_at" )->unpublished ()->get ();
		// return $videos;
		return view ( "video.index", compact ( "videos" ) );
	}
	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create() {
		return view ( "video.create" );
	}
	
	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request        	
	 * @return Response
	 */
	public function store(VideoRequest $request) {
		// $name = $request->get("name");
		// $description = $request->get("description");
		// $view = $request->get("view");
		// $video = Video::create();
		// $video->name = $name;
		// $video->description = $description;
		// $video->view = $view;
		// $video->published_at = $request->get("published_at");
		// $video->save();
		
		// $request["published_at"] = Carbon::createFromFormat("Y-m-d", $request["published_at"]);
		$video = Video::create ( $request->all () );
		$video->save ();
		return redirect ( "video" );
	}
	
	/**
	 * Display the specified resource.
	 *
	 * @param int $id        	
	 * @return Response
	 */
	public function show($id) {
		$video = Video::findorFail ( $id );

		// dd($video->published_at);
		
		return view ( "video.show", compact ( "video" ) );
	}
	
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param int $id        	
	 * @return Response
	 */
	public function edit($id) {
		$video = Video::findorFail ( $id );
		print_r($video->user);
		return view ( "video.edit", compact ( "video" ) );
	}
	
	/**
	 * Update the specified resource in storage.
	 *
	 * @param Request $request        	
	 * @param int $id        	
	 * @return Response
	 */
	public function update(VideoRequest $request, $id) {
		$video = Video::findorFail ( $id );
		$video->update ( $request->all () );
		return redirect ( "video" );
	}
	
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param int $id        	
	 * @return Response
	 */
	public function destroy($id) {
		//
	}
}
