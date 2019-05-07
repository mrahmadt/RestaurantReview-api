<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Queue;
use Illuminate\Support\Facades\Redis;
use App\Models\Restaurant;

class RestaurantController extends Controller {
    public function getData(Request $request){
        $restaurants = Restaurant::orderBy('votes','desc')->get();
		return response()->json(['restaurants'=>$restaurants,'app'=>['ip'=>$_SERVER['SERVER_ADDR'],'version'=>ENV('APP_VERSION')]]);
    }

    public function upvote(Request $request){
        Restaurant::find($request->restaurant_id)->increment('votes');
        return response()->json(['status'=>1],200);
    }
    public function downvote(Request $request){
        try{
            Restaurant::find($request->restaurant_id)->decrement('votes');
        }catch (Throwable $t)
        {
           // Executed only in PHP 7, will not match in PHP 5
        }
        catch (Exception $e)
        {
           // Executed only in PHP 5, will not be reached in PHP 7
        }
        return response()->json(['status'=>1],200);
    }
}
