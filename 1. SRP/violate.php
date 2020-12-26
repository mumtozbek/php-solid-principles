<?php

class ProductController {
  public function show($product) {
    // Format product price
    $product['price'] = $this->formatPrice($product['price']);

    // Render and return the view
    return $this->renderView('products.show.php', ['product' => $product]);
  }

  protected function formatPrice($price) {
    // Price formatting logic
  }

  protected function renderView($template, $data) {
    // Template rendering logic
  }
}