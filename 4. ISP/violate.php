<?php

interface ProductInterface {
  public function getDescription();

  public function getDeliveryTerms();

  public function getDownloads();
}

class RegularProduct implements ProductInterface {
  public function getDescription() {
    // return the deliverable product description
  }

  public function getDeliveryTerms() {
    // return the product delivery terms
  }

  public function getDownloads() {
    // return null, violating the ISP principle
  }
}

class DigitalProduct implements ProductInterface {
  public function getDescription() {
    // return the downloadable product description
  }

  public function getDeliveryTerms() {
    // return null
  }

  public function getDownloads() {
    // return the product downloads
  }
}
