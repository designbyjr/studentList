<?php

namespace App\Services;

use App\Services\Client\Wonde;
use Wonde\Endpoints\Schools;

class SchoolService extends Wonde
{
    /**
     * @param $id
     * @return Schools
     */
    public function getSchool($id): Schools
    {
        return $this->school($id);
    }
}
