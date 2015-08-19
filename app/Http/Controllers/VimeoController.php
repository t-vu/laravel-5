<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Vinkla\Vimeo\Facades\Vimeo;

class VimeoController extends Controller
{
   public function index(){
  	echo "<pre>";
   	print_r(Vimeo::request('/channels/everythinganimated/videos', ['per_page' => 10], 'GET'));
   	// We're done here - how easy was that, it just works!
   	echo "</pre>";
   	//Vimeo::upload('/bar.mp4', false);
   	// This example is simple and there are far more methods available.
   	return "done !";
   }
}
