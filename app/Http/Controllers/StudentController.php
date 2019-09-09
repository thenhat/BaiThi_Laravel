<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
class StudentController extends Controller
{
    public function getList()
    {
        $students = Student::all();
        return view("student.student-table.list",compact("students"));
    }

    public function getAdd()
    {
        return view('student.student-table.add');

    }

    public function postAdd(Request $request){
        $messages = [
            "required" => "Bắt buộc phải nhập thông tin",
            "string"    => "Phải nhập vào 1 chuỗi",
            "numeric"   => "Phải nhập vào 1 số",
            "min"   => "Giá trị tối thiểu 0 hoặc 6 ký tự",
            "max"   => "Tối đa 255 ký tự",
            "unique" => "Đã tồn tại giá trị này"
        ];
        $rules = [
            "name" => "required|string|max:255|unique:student",
            "age"   => "required",
            "address"   => "required",
            "telephone"=> "required",
        ];
        $this->validate($request,$rules,$messages);
        try{
            KhachHang::create([
                "name"=> $request->get("name"),
                "age"=> $request->get("age"),
                "address"=> $request->get("address"),
                "telephone"=> $request->get("telephone"),
            ])->save();
        }catch (\Exception $e){
            die($e->getMessage());
        }
        return redirect("student.student-table.add");
    }

}

