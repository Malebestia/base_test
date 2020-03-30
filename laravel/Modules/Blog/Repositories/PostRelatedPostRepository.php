<?php

namespace Modules\Blog\Repositories;

//---base
use Modules\Xot\Repositories\XotBaseRepository;

class PostRelatedPostRepository extends XotBaseRepository {
    /**
     * Specify Model class name.
     *
     * @return string
     */
    protected $model = 'Modules\Blog\Models\PostRelatedPost';
}
