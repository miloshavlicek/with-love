<?php

namespace App\Presenters;

use App\Model\Recommended;

class HomepagePresenter extends BasePresenter {

    public function renderDefault() {
        $this->template->recommended = $this->em->getRepository(Recommended::class)->findAll();
    }

}
