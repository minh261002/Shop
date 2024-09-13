<?php

namespace App\Services\Interfaces;

interface BaseServiceInterface
{
    public function updateStatus($post = []);

    public function updateStatusAll($post);
}