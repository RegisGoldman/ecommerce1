<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Admin\Category;
use DB;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function category(){
        $category = Category::all();
        return view ('admin.category.category',compact('category'));
    }

    public function storecategory(Request $request){
        $validateData = $request->validate([
            'category_name' => 'required|unique:categories|max:255'],
            ['category_name.required' => 'veuillez préciser le nom de la catégorie.',
            'category_name.unique' => 'ce nom est déjà pris.'
            ]);

        // $data=array();
        // $data['category_name']=$request->category_name;
        // DB::table('categories')->insert($data);

        $category = new Category();
        $category->category_name =$request->category_name;
        $category->save();

    $notification=array(
        'messege'=>'Catégorie ajoutée avec succès',
        'alert-type'=>'success'
            );
        return Redirect()->back()->with($notification);
    }

    public function Deletecategory($id){
        DB::table('categories')->where('id',$id)->delete();
            $notification=array(
                'messege'=>'Catégorie supprimée avec succès',
                'alert-type'=>'success'
                );
                return Redirect()->back()->with($notification);
    }

    public function Editcategory($id){
        $category = DB::table('categories')->where('id',$id)->first();
        return view('admin.category.edit_category',compact('category'));
    }

public function Updatecategory(Request $request, $id){
    $validateData = $request->validate([
    'category_name' => 'required|max:255'],
    ['category_name.required' => 'veuillez préciser le nom de la catégorie.'
        ]);
    
    $data=array();
    $data['category_name']=$request->category_name;
    $update=DB::table('categories')->where('id',$id)->update($data);
    if ($update) {
            $notification=array(
                'messege'=>'Catégorie mise à jour avec succès',
                'alert-type'=>'success'
                );
            return Redirect()->route('categories')->with($notification);
    }else{
        $notification=array(
                'messege'=>'Rien à actualiser',
                'alert-type'=>'error'
                );
            return Redirect()->route('categories')->with($notification);
    }
    
    
        }
}
