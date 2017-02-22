<?php

namespace Devio\Pipedrive\Resources;

use Devio\Pipedrive\Resources\Basics\Resource;
use Devio\Pipedrive\Resources\Traits\ListsDeals;

class Pipelines extends Resource
{
    use ListsDeals;

    /**
     * Disabled abstract methods.
     *
     * @var array
     */
    protected $disabled = ['deleteBulk'];

    public function movement_statistics($id, $start_date, $end_date, $user_id)
    {
        return $this->request->get(':id/movement_statistics', compact(
            'id', 'start_date', 'end_date', 'user_id'
        ));
    }
}
