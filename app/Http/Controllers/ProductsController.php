<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\ProductCategory;

class ProductsController extends Controller
{
    public function getProducts()
    {
        $lista=Products::join('product_categories', 'products.product_category_id', '=', 'product_categories.id')
                        ->select("products.*","product_categories.CategoryName")->get();


        for ($i=0; $i <count($lista) ; $i++) {
            $lista[$i]->Price="$".number_format($lista[$i]->Price);
            $lista[$i]->Weigt=number_format(($lista[$i]->Weigt)/1000)."Kg";
        }
      return view('CreateReadUpdateDelete_products',
       [
           'lista'=>$lista,
           'CategoriasDeProducto'=>ProductCategory::all()
       ]);
    }
    public function DeleteProducts($id)
    {
        try {
            //Registro a eliminar
            $DATO=Products::select("*")->where('id',$id)->first();
            //eliminar dato
            $DATO->delete();
            return back();
        } catch (\Throwable $th) {
            return  back()->with('error', 'no se encontro el registro a eliminar');
        }

    }
}
