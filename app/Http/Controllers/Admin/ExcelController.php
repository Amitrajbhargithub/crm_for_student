<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TestSeries;
use App\Models\TestSeriesQuestion;
class ExcelController extends Controller
{
    public function testSeriesList() {
        $test = TestSeries::get();
        return view('admin.test-list', compact('test'));
    }

    public function addTest() {
        return view('admin.add-test');
    }

    public function saveTestSeries(Request $request) {
        $request->validate([
            'language' => 'required'
        ]);

        $testData = new TestSeries();
        $testData->language = $request->language;
        $testData->save();
        if(!empty($request->questions)) {
            foreach($request->questions as $key=>$val){
                if($val==''){ continue; }
                $tests = new TestSeriesQuestion();
                $tests->language = $request->language;
                $tests->questions = $val;
                $tests->test_series_id = $testData->id;
                $tests->option_1 = $request->option_1[$key];
                $tests->option_2 = $request->option_2[$key];
                $tests->option_3 = $request->option_3[$key];
                $tests->option_4 = $request->option_4[$key];
                $tests->answer = $request->right_answer[$key];
                $tests->save();
            }
        }

        
        return redirect()->route('admin/test-series-list')->with('success', 'test added Successfully.');
                
    }
}
