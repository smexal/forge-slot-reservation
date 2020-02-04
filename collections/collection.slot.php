<?php

namespace Forge\Modules\SlotReservation;

use \Forge\Core\Abstracts\DataCollection;
use \Forge\Core\Classes\CollectionItem;



class SlotCollection extends DataCollection {
    public $permission = "manage.collection.slots";

    protected function setup() {
        $this->preferences['name'] = 'forge-slots';
        $this->preferences['title'] = i('Reservation Slots', 'forge-slots');
        $this->preferences['all-title'] = i('Manage Reservation Slots', 'forge-slots');
        $this->preferences['add-label'] = i('Add slots', 'forge-slots');
        $this->preferences['single-item'] = i('Slot', 'forge-slots');
    }

    /**
     * no detail
     * @return false
     */
    public function render($item) {
        return;
    }
}