<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ResultTableController extends Controller
{
    public function SurveyResultTable()
    {
        $tableForScores = DB::table('tests')->get(['result', 'user_id']);
        $tableDate = DB::select('SELECT (DATE_FORMAT(created_at,"%m-%d-%Y")) as dateTaken FROM `test_answers`WHERE question_id in (1,2,3,4) AND correct = 1 GROUP BY (created_at) ORDER BY (created_at)');
        $tableSection1 = DB::select('SELECT COUNT(id) as result, (created_at) as dateTaken FROM `test_answers`WHERE question_id in (1,2,3,4) AND correct = 1 GROUP BY (created_at) ORDER BY (created_at) ');
        $tableSection2 = DB::select('SELECT COUNT(id) as result, (created_at) as dateTaken FROM `test_answers`WHERE question_id in (5,6,7,8) AND correct = 1 GROUP BY (created_at) ORDER BY (created_at) ');
        $tableSection3 = DB::select('SELECT COUNT(id) as result, (created_at) as dateTaken FROM `test_answers`WHERE question_id in (9,10,11,12) AND correct = 1 GROUP BY (created_at) ORDER BY (created_at) ');
        return \View::make('ResultTable')->with('tableDate', $tableDate)->with('tableForScores', $tableForScores)->with('tableSection1', $tableSection1)->with('tableSection2', $tableSection2)->with('tableSection3', $tableSection3);
    }
}
