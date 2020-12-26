<?php
declare(strict_types=1);

class View {
  public static function make(string $template, array $data): string
  {
    // Template rendering logic
  }
}

class PriceFormatter {
  public static function format(float $price): string
  {
    // Price formatting logic
  }
}

class ProductController {
  public function show($product) {
    // Format the product price
    $product['price'] = PriceFormatter::format($product['price']);

    // Render and return the view
    return View::make('products.show', ['product' => $product]);
  }
}