<?php

class CashPaymentMethod {
  public function makeBill()
  {
    // Some logic
  }
}

class CardPaymentMethod {
  public function redirectToBilling()
  {
    // Some logic
  }
}

class PaymentController {
  public function pay($paymentMethod) {
    if ($paymentMethod instanceof CashPaymentMethod) {
      $paymentMethod->makeBill();
    } elseif ($paymentMethod instanceof CardPaymentMethod) {
      $paymentMethod->redirectToBilling();
    }
  }
}
