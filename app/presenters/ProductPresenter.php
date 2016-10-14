<?php

namespace App\Presenters;

use App\Model\Product;

class ProductPresenter extends BasePresenter {

    public function renderList() {
        $this->template->products = $this->em->getRepository(Product::class)->findBy([], ['name' => 'ASC']);
    }

    public function renderDetail($id) {
        $this->template->product = $this->em->getRepository(Product::class)->find($id);
    }

}
