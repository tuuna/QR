<?php
namespace App\Repositories;

use App\Upload;

class uploadRepository
{
    public function create(array $attributes)
    {
        return Upload::create($attributes);
    }
}
