<?php

interface PaymentMethodInterface {
  public function process();
}

class CashPaymentMethod implements PaymentMethodInterface {
  public function makeBill()
  {
    // Some logic
  }

  public function process()
  {
    $this->makeBill();
  }
}

class CardPaymentMethod implements PaymentMethodInterface {
  public function redirectToBilling()
  {
    // Some logic
  }

  public function process()
  {
    $this->redirectToBilling();
  }
}

class PaymentController {
  public function pay(PaymentMethodInterface $paymentMethod) {
    $paymentMethod->process();
  }
}
