<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\TestSeries;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\TestSeriesQuestion;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function studentDashboard() {
        return view('student.dashboard');
    }

    public function updateStudentProfile(Request $request) {
        $request->validate([
            'name' => 'required',
            'last_name' => 'required',
            'apply_for' => 'required',
            'course' => 'required',
            'college' => 'required',
            'contact' => 'required'
        ]);
        $data = User::where('id', Auth::user()->id)->first();
        $data->name = $request->name;
        $data->last_name = $request->last_name;
        if($request->password) {
            $data->password = Hash::make($request->password);
        }
        if ($request->image) {
            $image_path = public_path('upload/' . $data->image);
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $imageName = 'user-' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('upload'), $imageName);
            $data->image = $imageName;
        } 
        $data->apply_for = $request->apply_for;
        $data->course = $request->course;
        $data->college = $request->college;
        $data->contact = $request->contact;
        $data->save();

        return redirect()->route('student/dashboard')->with('success', 'Profile Updated Successfully.');
    }

    public function studentTestSeries() {
        $test = TestSeries::get();
        return view('student.test-list', compact('test'));
    }

    public function startStudentTestSeries($id) {
        $StudentQuestionData=TestSeriesQuestion::where('test_series_id', $id)->get();
        $question_array=[];
        $i=1;
        foreach($StudentQuestionData as $key=>$value){
            $question_array[$key]['id']             = $i;
            $question_array[$key]['question']       = $value->questions;
            $question_array[$key]['choices']        = [$value->option_1 , $value->option_2, $value->option_3 , $value->option_4] ;
            $question_array[$key]['correctAnswer']  = $value->answer;
            $question_array[$key]['answer']         = '';
            $i++;
        }
        return view('student.start-test-list', compact('question_array'));
    }
}
