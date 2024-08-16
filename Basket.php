<?php

class Basket {
    private $items = [];

    public function addItem(Product $product, $quantity = 1) {
        $productId = $product->getId();
        if (isset($this->items[$productId])) {
            $this->items[$productId]->setQuantity($this->items[$productId]->getQuantity() + $quantity);
        } else {
            $this->items[$productId] = new BasketItem($product, $quantity);
        }
    }

    public function removeItem($productId) {
        if (isset($this->items[$productId])) {
            unset($this->items[$productId]);
        }
    }

    public function getItems() {
        return $this->items;
    }

    public function getTotal() {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item->getTotalPrice();
        }
        return $total;
    }
}