<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    //
    public function brandList(Request $request){
        $keyword = empty($request->get('keyword')) ? '' : $request->input('keyword');
        if($keyword){
            //var_dump(User::where('name',$keyword)->toSql());
            $brandlist = Brand::where('brand_name','like','%'.$keyword.'%')->paginate(10);
        }else{
            $brandlist = Brand::paginate(10);
        }
        return view('brand/brandList',['brandlist'=>$brandlist,'breadcrumb'=>'分类管理','keyword'=>$keyword]);
    }

    public function addBrand(){
        $brands = $this->getBrands();
        return view('brand/brandAdd',['breadcrumb'=>'添加分类','brands'=>$brands]);
    }

    public function getBrands(){
        $brands = Brand::where('pid','=','0')->get()->toArray();
        return $brands;
    }

    public function doAddBrand(Request $request){
        $this->validate($request,[
            'brand_name' => 'required|unique:brand|max:50',
        ]);
        $data['brand_name'] = $request->input('brand_name');
        $data['pid'] = intval($request->input('pid'));
        $data['created_at'] = date('Y-m-d H:i:s');
        if(Brand::insert($data)){
            return redirect('/brand/brandList')->with('添加成功！');
        }
        return back()->withErrors('添加失败');
    }
}
