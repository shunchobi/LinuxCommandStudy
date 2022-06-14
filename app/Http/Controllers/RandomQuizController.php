<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\All_Command_List;
use App\Models\Review_Command_List;

class RandomQuizController extends Controller
{
    public function index(Request $request){
        $all_or_review = $request->query("all_or_review");
        $all_commandList = All_Command_List::get();
        $command_info = [];

        if ($all_or_review === 'all'){
            $randomId = random_int(0, count($all_commandList) - 1);
            $command_info = $all_commandList[$randomId];
        }
        elseif ($all_or_review === 'review'){
            $review_commandList = Review_Command_List::get();
            $count_review_commandList = count($review_commandList);
            if ($count_review_commandList == 0){
                return view('quiz_page', ['command_info' => $command_info, 'all_or_review' => "empty"]);
            }
            $randomNum = random_int(0, $count_review_commandList - 1);
            $targetId = $review_commandList[$randomNum]['id_review'];
            $command_info = $all_commandList[$targetId-1];
        }

        return view('quiz_page', ['command_info' => $command_info, 'all_or_review' => $all_or_review]);
    }
}
