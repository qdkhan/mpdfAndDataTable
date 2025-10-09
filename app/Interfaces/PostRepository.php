<?php

namespace App\Interfaces;
use App\Models\Post;

class PostRepository implements PostRepositoryInterface
{
    /**
     * Create a new class instance.
     */
    public function __construct(private Post $model)
    {
        //
    }

    public function create($data): Post {
        $result = $this->model->create($data);
        return $result;
    }
    public function getAll() {
        $result = $this->model->all();
        return $result;
    }
}
