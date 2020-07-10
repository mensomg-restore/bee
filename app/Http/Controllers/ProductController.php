<?php

namespace App\Http\Controllers;

use App\Product;

class ProductController extends Controller
{
    public function show($name)
    {
        $product = Product::with('category')->with('productAttributeValues')->with('productAttributeValues.productAttribute')->where('friendly_url_name', $name)->firstOrFail();
        $attributes = [];
        foreach ($product->productAttributeValues as $attributeValue){
            $attributes[] = [
                'name' => $attributeValue->productAttribute->name,
                'value' => $attributeValue->value,
            ];
        }
        $storeName = $product->getStoreName();
        $storeLink = $product->getStoreProductLink();
        $cart = app('Cart');
        $cartContent = $cart->content;
        if (isset($cartContent[$product->id])) {
            $inCartQuantity = $cartContent[$product->id];
        } else {
            $inCartQuantity = 0;
        }
        $favoritesList = app('FavoriteList');
        $favoritesListContent = $favoritesList->content;
        if (in_array($product->id, $favoritesListContent)) {
            $inFavoritesList = true;
        } else {
            $inFavoritesList = false;
        }
        return view('pages.product', ['product' => $product, 'inCartQuantity' => $inCartQuantity, 'inFavoritesList' => $inFavoritesList, 'attributes' => $attributes, 'storeName' => $storeName, 'storeLink' => $storeLink]);
    }

    /**
     * Контроллер вывода товаров в админке
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $products = Product::paginate(20);
        $cart = app('Cart');
        $cartContent = $cart->content;
        $favoritesList = app('FavoriteList');
        $favoritesListContent = $favoritesList->content;
        return view('pages.admin.products', ['products' => $products, 'cartContent' => $cartContent, 'favoritesListContent' => $favoritesListContent]);
    }
}
