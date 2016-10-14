<?php

namespace App;

use Nette;
use Nette\Application\Routers\RouteList;
use Nette\Application\Routers\Route;

class RouterFactory {

    use Nette\StaticClass;

    /**
     * @return Nette\Application\IRouter
     */
    public static function createRouter() {
        $router = new RouteList;

        $ssl = in_array($_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1']) ? Route::SECURED : FALSE;

        $router[] = new Route('[<locale=cz cz>/]o-nas', 'About:default', $ssl);
        $router[] = new Route('[<locale=en>/]about-us', 'About:default', $ssl);

        $router[] = new Route('[<locale=cz cz>/]spolecnosti', 'Company:list', $ssl);
        $router[] = new Route('[<locale=en>/]companies', 'Company:list', $ssl);

        $router[] = new Route('[<locale=cz cz>/]spolecnosti/<id>', 'Company:detail', $ssl);
        $router[] = new Route('[<locale=en>/]companies/<id>', 'Company:detail', $ssl);

        $router[] = new Route('[<locale=cz cz>/]kontakty', 'Contacts:default', $ssl);
        $router[] = new Route('[<locale=en>/]contacts', 'Contacts:default', $ssl);

        $router[] = new Route('[<locale=cz cz>/]kriteria', 'Criteria:default', $ssl);
        $router[] = new Route('[<locale=en>/]criteria', 'Criteria:default', $ssl);

        $router[] = new Route('[<locale=cz cz|en>/]<presenter>/<action>[/<id>]', 'Homepage:default', $ssl);
        return $router;
    }

}
