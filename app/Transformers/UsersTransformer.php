<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\User;


class UsersTransformer extends TransformerAbstract
{
    public function transform(User $User)
    {
        return [    
            'id' => (int)$User->id,
            'email' => (string)$User->email,


        ];
    }
}
