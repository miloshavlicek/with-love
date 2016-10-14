<?php

namespace App\Presenters;

use Nette;
use Cothema\EuCookies\Bar as EuCookiesBar;

/**
 * Base presenter for all application presenters.
 */
abstract class BasePresenter extends Nette\Application\UI\Presenter {

    protected $em;

    /** @persistent */
    public $locale;

    /** @var \Kdyby\Translation\Translator @inject */
    public $translator;

    public function __construct(\Kdyby\Doctrine\EntityManager $em) {
        parent::__construct();
        $this->em = $em;
    }

    protected function createComponentEuCookiesBar() {
        return (new EuCookiesBar);
    }

}
