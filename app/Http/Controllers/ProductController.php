<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    //CRUD


    //them - Create - C
    public function addproduct()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        $product = new product;
        $product->tensp = $request->input('tensp');
        $product->gia = $request->input('gia');
        $product->giasale = $request->input('giasale');
        $product->mota = $request->input('mota');
        $product->chitiet = $request->input('chitiet');
        if ($request->hasFile('anhsp')) {
            $file = $request->file('anhsp');
            $extension = $file->getClientOriginalExtension(); //lay ten mo rong .jpg, .png,....
            $filename = time() . '.' . $extension;
            $file->move('uploads/products/', $filename);  //upload len thu muc uploads/products
            $product->anhsp = $filename;
        }
        $product->save();
        return redirect()->back()->with('status', 'Them san pham thanh cong');
    }
    //liet ke - React - R
    public function index()
    {
        $products = product::all();  //lay tat ca du lieu trong bang product
        return view('product.index', compact('products')); //tim den file index.blade.php trong thu muc views/product
    }

    //cap nhat - Update - U
    public function edit($id)
    {
        //tim product theo id
        $product = product::find($id);
        return view('product.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        //tim sp theo id
        $product = product::find($id);
        $product->tensp = $request->input('tensp');
        $product->gia = $request->input('gia');
        $product->giasale = $request->input('giasale');
        $product->mota = $request->input('mota');
        $product->chitiet = $request->input('chitiet');

        if ($request->hasFile('anhsp')) {
            //co file dinh kem trong form update thi tim file cu va xoa di
            //neu truoc do ko co anh cu thi ko xoa
            $anhcu = 'uploads/products/' . $product->anhsp;
            if (File::exists($anhcu)) {
                File::delete($anhcu);
            }
            $file = $request->file('anhsp');
            $extension = $file->getClientOriginalExtension(); //lay ten mo rong .jpg, .png,....
            $filename = time() . '.' . $extension;
            $file->move('uploads/products/', $filename);  //upload len thu muc uploads/products
            $product->anhsp = $filename;
        }
        $product->update();
        return redirect()->back()->with('status', 'Cập nhật thành công');
    }
    //xoa - Delete - D
    public function delete($id)
    {
        $product = product::find($id);
        $anhsp = 'uploads/products/' . $product->anhsp;
        if (File::exists($anhsp)) {
            File::delete($anhsp);
        }
        $product->delete();
        return redirect()->back()->with('status', 'Xóa sản phẩm thành công');
    }
}
