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
        
        $router[] = new Route('[<locale=cz cz>/]o-nas', 'About:default');
        $router[] = new Route('[<locale=en>/]about-us', 'About:default');
        
        $router[] = new Route('[<locale=cz cz>/]spolecnosti', 'Company:list');
        $router[] = new Route('[<locale=en>/]companies', 'Company:list');
        
        $router[] = new Route('[<locale=cz cz>/]spolecnosti/<id>', 'Company:detail');
        $router[] = new Route('[<locale=en>/]companies/<id>', 'Company:detail');
        
        $router[] = new Route('[<locale=cz cz>/]kontakty', 'Contacts:default');
        $router[] = new Route('[<locale=en>/]contacts', 'Contacts:default');
        
        $router[] = new Route('[<locale=cz cz>/]kriteria', 'Criteria:default');
        $router[] = new Route('[<locale=en>/]criteria', 'Criteria:default');
        
        $router[] = new Route('[<locale=cz cz|en>/]<presenter>/<action>[/<id>]', 'Homepage:default');
        return $router;
    }

}
