<?php
/**
 * Created by PhpStorm.
 * User: ContractZero
 * Date: 10/9/2018
 * Time: 10:17 AM
 */

namespace App\Repositories;

use App\Post;

use App\Redis;

class Posts
{
    protected $redis;

    public function __construct(Redis $redis)
    {
        $this->redis = $redis;
    }
}