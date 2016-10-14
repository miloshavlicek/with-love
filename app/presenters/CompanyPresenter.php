<?php

namespace App\Presenters;

use App\Model\Company;

class CompanyPresenter extends BasePresenter {

    public function renderList() {
        $this->template->companies = $this->em->getRepository(Company::class)->findBy([], ['name' => 'ASC']);
    }

    public function renderDetail($id) {
        $this->template->company = $this->em->getRepository(Company::class)->find($id);
    }

}
