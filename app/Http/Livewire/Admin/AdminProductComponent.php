<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithPagination;


class AdminProductComponent extends Component
{
    use WithPagination;
    public function destroyProduct($id)
    {

        $product = Product::find($id);
        if($product->image)
        {
            $destinationPath = 'assets/images/products';
            File::delete($destinationPath.'/'.$product->image);
            if($product->images)
            {
                $g_images = explode(",",$product->images);
                foreach($g_images as $g_image)
                {
                    File::delete($destinationPath.'/'.$g_image);
                }
            }
        }
        $product->delete();
        session()->flash('message',' Product has been Deleted Successfully !! ');
    }
    public function render()
    {
        $products = Product::paginate(10);
        return view('livewire.admin.admin-product-component',['products'=>$products])->layout('layouts.base');
    }
}
