<?php

namespace App\Interfaces;

use App\Models\Post;

interface PostRepositoryInterface
{
    public function create(array $data): Post;
    // public function update();
    // public function delete();
    public function getAll();
}
