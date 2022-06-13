<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\All_Command_List;
use App\Models\Review_Command_List;

class RandomQuizController extends Controller
{

    public function index(Request $request){
        $all_or_review = $request->query("all_or_review");
        $command_info = [
            'process' => "123123",
        ];

        if ($all_or_review === 'all'){
            $all_commandList = All_Command_List::get();
            
        }
        elseif ($all_or_review === 'review'){

            // List review command


            $review_commandList = Review_Command_List::get();
        }

        return view('quiz_page', ['command_info' => $command_info, 'all_or_review' => $all_or_review]);
    }
}
