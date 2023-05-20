<?php

namespace App\GraphQL\Queries;
use App\Models\Post;

final class PostResolver
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
         $where = $args['where'] ?? [];
        return Post::where($where)->get();
    }
}
