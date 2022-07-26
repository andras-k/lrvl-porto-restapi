<?php

namespace App\Containers\ExampleSection\Group\Models;

use App\Containers\ExampleSection\Group\Data\Factories\GroupFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    const ATTR_ID = 'id';
    const ATTR_TITLE = 'title';

    protected $fillable = [
        self::ATTR_TITLE,
    ];

    protected $hidden = [
        'pivot'
    ];

    protected static function newFactory(): GroupFactory
    {
        return GroupFactory::new();
    }


}
