<?php

namespace App\Models;

use CodeIgniter\Model;

class Posts extends Model {

    protected $table = 'posts';
    protected $allowedFields = ['post_title', 'post', 'author'];

}
