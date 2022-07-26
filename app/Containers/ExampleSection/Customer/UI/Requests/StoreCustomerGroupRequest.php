<?php

namespace App\Containers\ExampleSection\Customer\UI\Requests;

use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

class StoreCustomerGroupRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape(['groupId' => "string"])]
    public function rules(): array
    {
        return [
            'groupId' => 'required',
        ];
    }
}
