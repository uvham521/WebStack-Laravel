<?php

namespace App\Models;

use Dcat\Admin\Traits\ModelTree;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use ModelTree;

    public function children()
    {
        return $this->hasMany(static::class, 'parent_id');
    }

    public function sites()
    {
        return $this->hasMany(Site::class);
    }
}
