<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Log;
use App\Models\Product;
use Illuminate\Support\Facades\Cookie;

class CartManagement {
  // Add Item to Cart
  static public function addItemToCart($product_id) {
    $cart_items = self::getCartItemsFromCookie();

    $existing_item = null;

    foreach ($cart_items as $key => $item) {
      if ($item['product_id'] == $product_id) {
        $existing_item = $key;
        break;
      }
    }

    if ($existing_item !== null) {
      $cart_items[$existing_item]['quantity']++;
      $cart_items[$existing_item]['total_amount'] = $cart_items[$existing_item]['quantity'] * $cart_items[$existing_item]['unit_amount'];
    } else {
      $product = Product::where('id', $product_id)->first(['id', 'name', 'price', 'images', 'description']);

      if ($product) {
      $cart_items[] = [
      'product_id' => $product_id,
      'name' => $product->name,
      'image' => $product->images[0],
      'description' => $product->description,
      'quantity' => 1,
      'unit_amount' => $product->price,
      'total_amount' => $product->price
      ];
    }
  }

    self::addCartItemsToCookie($cart_items);
    return count($cart_items);
  }


  // Remove Item from Cart
  static public function removeCartItem($product_id) {
    $cart_items = self::getCartItemsFromCookie();

    foreach($cart_items as $key => $item) {
      if ($item['product_id'] == $product_id) {
        unset($cart_items[$key]);
      }
    }

    self::addCartItemsToCookie($cart_items);

    return $cart_items;
  }

  // Add Cart Items to Cookie
  static public function addCartItemsToCookie($cart_items) {
    Cookie::queue('cart_items', json_encode($cart_items), 60 * 24 * 30);
  }


  // Clear Cart Items from Cookie
  static public function clearCartItems() {
    Cookie::queue(Cookie::forget('cart_items'));
  }

  // Get All Cart Items from Cookie
  static public function getCartItemsFromCookie() {
    $cart_items = json_decode(Cookie::get('cart_items'), true);
    if(!$cart_items) {
      $cart_items = [];
    }

    return $cart_items;
  }

  // Increment Item Quality
  static public function incremenetQuantityToCartItem($product_id) {
    $cart_items = self::getCartItemsFromCookie();

    foreach ($cart_items as $key => $item) {
      if ($item['product_id'] == $product_id) {
        $cart_items[$key]['quantity']++;
        $cart_items[$key]['total_amount'] = $cart_items[$key]['quantity'] * $cart_items[$key]['unit_amount'];
      }
    }

    self::addCartItemsToCookie($cart_items);
    return $cart_items;
  }

  
  // Decrement Item Quantity
  static public function decrementQuantityToCartItem($product_id) {
    $cart_items = self::getCartItemsFromCookie();

    foreach ($cart_items as $key => $item) {
      if ($item['product_id'] == $product_id) {
        if ($cart_items[$key]['quantity'] > 1) {
          $cart_items[$key]['quantity']--;
          $cart_items[$key]['total_amount'] = $cart_items[$key]['quantity'] * $cart_items[$key]['unit_amount'];
        }
      }
    }

    self::addCartItemsToCookie($cart_items);
    return $cart_items;
  }

  // Calculate Grand Total
  public static function calculateGrandTotal($items) {
    return array_sum(array_column($items, 'total_amount'));
  }
}