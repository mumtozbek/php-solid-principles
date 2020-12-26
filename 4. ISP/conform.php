<?php

interface ProductInterface {
  public function getDescription();
}

interface DeliverableProductInterface {
  public function getDeliveryTerms();
}

interface DownloadableProductInterface {
  public function getDownloads();
}

class DeliverableProduct implements ProductInterface, DeliverableProductInterface {
  public function getDescription() {
    // return the deliverable product description
  }

  public function getDeliveryTerms() {
    // return the product delivery terms
  }
}

class DownloadableProduct implements ProductInterface, DownloadableProductInterface {
  public function getDescription() {
    // return the downloadable product description
  }

  public function getDownloads() {
    // return the product downloads
  }
}
