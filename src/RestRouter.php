<?php
/**
 * Part of the ETD Framework Router Package
 *
 * @copyright   Copyright (C) 2016 ETD Solutions, SARL Etudoo. Tous droits réservés.
 * @license     Apache License 2.0; see LICENSE
 * @author      ETD Solutions http://etd-solutions.com
 */

namespace EtdSolutions\Router;

use \Joomla\Router\RestRouter as JoomlaRouter;

class RestRouter extends JoomlaRouter {

    public function getMaps() {

        return $this->maps;

    }

    public function setMaps(array $maps) {

        $this->maps = $maps;

        return $this;
    }

}