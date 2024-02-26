<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Validator;
class LoginController extends Controller
{
    public function adminLogin() {
        return view('admin.login');
    }

    public function adminAuthentication(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $data = User::where('email', $request->email)->where('status',1)->first();
        if(!empty($data)){
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                $request->session()->regenerate();
                return redirect()->route('admin/dashboard');
            }
        }
        return redirect()->back()->with('username','The provided credentials do not match our records.');

    }

    public function adminDashboard() {
        return view('admin.dashboard');
    }

    public function studentList() {

        $student = User::where('status',0)->get();
        return view('admin.student-list', compact('student'));
    }

    public function adminAddStudent() {
        return view('admin.add-student');
    }

    public function adminSaveAddStudent(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'last_name' => 'required',
            'apply_for' => 'required',
            'course' => 'required',
            'college' => 'required',
            'contact' => 'required',
            'password' => 'required',
            'fee' => 'required'
        ]);
        $data = new User();
        $data->name = $request->name;
        $data->fee = $request->fee;
        $data->email = $request->email;
        $data->last_name = $request->last_name;
        $data->password = Hash::make($request->password);
        $data->show_password = $request->password;
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

        return redirect()->route('admin/add-student')->with('success', 'Student Added Successfully.');
    }

    public function editStudent(Request $request, $id) {
        $student = User::where('id', $id)->first();
        return view('admin/edit-student', compact('student'));
    }

    public function updateStudentData(Request $request) {
        if($request->id) {
            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'last_name' => 'required',
                'apply_for' => 'required',
                'course' => 'required',
                'college' => 'required',
                'contact' => 'required',
                'fee' => 'required'
            ]);
            $data = User::where('id', $request->id)->first();
            $data->name = $request->name;
            $data->fee = $request->fee;
            $data->email = $request->email;
            $data->last_name = $request->last_name;
            if($request->password) {
                $data->password = Hash::make($request->password);
                $data->show_password = $request->password;
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

            return redirect()->back()->with('success', 'Student Updated Successfully.');
        } else {
            return redirect()->back()->with('error', 'Something went wroung.');
        }
    }
}
