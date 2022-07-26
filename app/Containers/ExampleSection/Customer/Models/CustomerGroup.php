<?php

namespace App\Containers\ExampleSection\Customer\Models;

use App\Containers\ExampleSection\Customer\Data\Factories\CustomerGroupFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerGroup extends Model
{
    use HasFactory;

    protected $table = 'customers_groups';

    const ATTR_CUSTOMER_ID = 'customer_id';
    const ATTR_GROUP_ID = 'group_id';

    protected $fillable = [
        self::ATTR_CUSTOMER_ID,
        self::ATTR_GROUP_ID,
    ];

    protected static function newFactory(): CustomerGroupFactory
    {
        return CustomerGroupFactory::new();
    }
}
