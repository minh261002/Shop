<?php

namespace App\Repositories\Interfaces;

interface DistrictRepositoryInterface
{
    public function findDistrictByProvinceId(int $province_id);
}