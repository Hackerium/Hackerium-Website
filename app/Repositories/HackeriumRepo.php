<?php

namespace App\Repositories;

use App\Hackerium;
use Carbon\Carbon;

class HackeriumRepo
{
    /**
     * @param integer $limit
     * @return mixed
     */
    public function getOpenHackeria($limit = null)
    {
        return $this->fetchOpenHackeria($limit)
            ->get();
    }

    /**
     * @param integer $limit
     * @return mixed
     */
    public function getClosedHackeria($limit = null)
    {
        return $this->fetchClosedHackeria($limit)
            ->get();
    }

    /**
     * @param null $limit
     * @return $this
     */
    public function fetchOpenHackeria($limit = null)
    {
        return Hackerium::where(
            'ends_by', '>' , Carbon::now()
        )->limit($limit);
    }

    /**
     * @param null $limit
     * @return $this
     */
    public function fetchClosedHackeria($limit = null)
    {
        return Hackerium::where(
            'ends_by', '<', Carbon::now()
        )->limit($limit);
    }
}
