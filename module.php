<?php

namespace Forge\Modules\SlotReservation;

use \Forge\Core\App\App;
use \Forge\Core\Abstracts\Module as AbstractModule;
use \Forge\Loader;


class Module extends AbstractModule {

    public function setup() {
        $this->version = '1.0.0';
        $this->id = "forge-slot-reservation";
        $this->name = i('Slot Reservation', 'forge-slots');
        $this->description = i('Configure and buy slots.', 'forge-slots');
        $this->image = $this->url().'/module-image.png';
    }

    public function start() {
    }

}

?>
