<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
    {
        public function index(){
            $category = Category::orderBy('category_id','desc')->paginate(5);
            return view('backend.category.index',compact('category'));
        }

        public function create(){
            return view('backend.category.create');
    }

        public function insert(Request $request){
        // dd($request->name);

            //ทำการป้องกันการกรอกข้อมูลผ่านฟอร์ม
            $validated = $request->validate([
                'name' => 'required|unique:categories|max:255',

            ],
            [
                'name.required' =>'กรุณากรอกชื่อประเภทสินค้า',
                'name.unique' => 'ชื่อนี้มีอยู่ในฐานข้อมูลแล้ว',
                'name.max' => 'กรอกข้อมูลไม่เกิน 255 ตัวอักษร',
        ]);
            //การบันทึกข้อมูลลงในฐานข้อมูล
           $cat = new Category();
           $cat->name = $request->name;
           $cat->save();
           alert()->success('บันทึกข้อมูลสำเร็จ','ชื่อประเภทสินค้าชื่อนี้ถูกบันทึกลงในระบบฐานข้อมูลเรียบร้อยแล้ว');

         return redirect()->route('c.index');

        }
            public function edit($category_id){
                $cat = Category::find($category_id);
                return view('backend.category.edit',compact('cat'));

            }

            public function update(Request $request, $category_id){
                $category = Category::find($category_id);
                $category->name = $request->name;
                $category->update();
                alert()->success('อัพเดทข้อมูลสำเร็จ','ชื่อประเภทสินค้าชื่อนี้ถูกบันทึกลงในระบบฐานข้อมูลเรียบร้อยแล้ว');
                return redirect()->route('c.index');
            }

            public function delete($category_id){
                $category = Category::find($category_id);
                if($category->product->count()>0){
                    alert()->error('ไม่สามรถลบประเภทสินค้าได้','เนื่องจากมีสินอยู่ในประเภทนี้');
                    return redirect()->back();
                }
                $category->delete();
                alert()->success('ลบข้อมูลสำเร็จ','ข้อมูลนี้ลบเรียบร้อยเเล้ว');
                return redirect()->route('c.index');
            }
    }
