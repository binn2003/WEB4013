<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\Categories as CategoriesResource;
use App\Models\Categories;
use Illuminate\Support\Facades\Validator;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Categories::all();
        $arr = [
            'anHien' => true,
            'message' => "Danh sách loại sản phẩm",
            'data' => CategoriesResource::collection($categories)
        ];
        return response()->json($arr, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, ['tenLoai' => 'required', 'thuTu' => 'required']);
        if ($validator->fails()) {
            $arr = [
                'success' => false,
                'message' => 'Lỗi kiểm tra dữ liệu',
                'data' => $validator->errors()
            ];
            return response()->json($arr, 200);
        }
        $categories = Categories::create($input);
        $arr = [
            'anHien' => true,
            'message' => "Loại sản phẩm đã được lưu thành công",
            'data' => new CategoriesResource($categories)
        ];
        return response()->json($arr, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categories = Categories::find($id);
        if (is_null($categories)) {
            $arr = [
                'success' => false,
                'message' => 'Không có loại sản phẩm này',
                'dara' => []
            ];
            return response()->json($arr, 200);
        }
        $arr = [
            'anHien' => true,
            'message' => "Chi tiết loại sản phẩm ",
            'data' => new CategoriesResource($categories)
        ];
        return response()->json($arr, 201);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categories $categories)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'tenLoai' => 'required',
            'thuTu' => 'required'
        ]);
        if ($validator->fails()) {
            $arr = [
                'success' => false,
                'message' => 'Lỗi kiểm tra dữ liệu',
                'data' => $validator->errors()
            ];
            return response()->json($arr, 200);
        }
        $categories->tenLoai = $input['tenLoai'];
        $categories->thuTu = $input['thuTu'];
        $categories->save();
        $arr = [
            'anHien' => true,
            'message' => 'Loại sản phẩm cập nhật thành công',
            'data' => new CategoriesResource($categories)
        ];
        return response()->json($arr, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categories $categories)
    {
        $categories->delete();
        $arr = [
            'anHien' => true,
            'message' => 'Loại sản phẩm đã được xóa',
            'data' => [],
        ];
        return response()->json($arr, 200);
    }
}
