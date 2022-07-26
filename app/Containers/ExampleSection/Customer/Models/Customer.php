<?php

namespace App\Containers\ExampleSection\Customer\Models;

use App\Containers\ExampleSection\Customer\Data\Factories\CustomerFactory;
use App\Containers\ExampleSection\Group\Models\Group;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';

    const ATTR_ID = 'id';
    const ATTR_FIRSTNAME = 'firstname';
    const ATTR_LASTNAME = 'lastname';
    const ATTR_EMAIL = 'email';
    const ATTR_IS_VERIFIED = 'is_verified';

    const RELATION_GROUPS = 'groups';
    const RELATION_CUSTOMER_GROUPS = 'customers_groups';

    protected $fillable = [
        self::ATTR_FIRSTNAME,
        self::ATTR_LASTNAME,
        self::ATTR_EMAIL,
        self::ATTR_IS_VERIFIED,
    ];

    protected static function newFactory(): CustomerFactory
    {
        return CustomerFactory::new();
    }

    public function groups(): BelongsToMany
    {
        return $this->belongsToMany(Group::class, self::RELATION_CUSTOMER_GROUPS);
    }

}
