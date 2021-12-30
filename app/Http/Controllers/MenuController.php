<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuModel;

class MenuController extends Controller
{
    //
    public function create(){
        return view('addProd', [
            'title' => 'Thêm sản phẩm'
        ]);
    }
    public function add(Request $request){
        MenuModel::create([
            'name' => (string)$request->input('name'),
            'description' => (string)$request->input('description'),
            'file' => (binary)$request->input('inputFile')
        ]);
        return redirect()->route('menus');
    }
    public function index(){
        // dd(MenuModel::orderbyDesc('name')->paginate(10));
        return view('listProd',[
            'title' => 'Danh sách sản phẩm',
            'menus' => MenuModel::orderbyDesc('id')->paginate(10),
        ]);
    }
    public function destroy(Request $request): JsonResponse {
        echo "Hello world!<br>";
        $id = $request->input('id');
        $menu = MenuModel::where('id', $id)->first();
        if ($menu) {
            MenuModel::where('id', $id)->first()->delete();
            return response()->json([
                'error' => false,
                'message' => 'Xóa thành công danh mục'
            ]);
        }

        return response()->json([
            'error' => true,
            'message' => 'Xóa được cái đbrrr'
        ]);
    }

    public function show(MenuModel $menu){
        return view('editProd',[
            'title' => 'Chỉnh sửa sản phẩm',
            'menu' => $menu
        ]);
    }

    public function edit(MenuModel $menu, Request $request ){

        $menu->name = (string)$request->input('name');
        $menu->description = (string)$request->input('description');
        $menu->file = (binary)$request->input('inputFile');
        $menu->save();
        return redirect('/menus/list');
    }
}
