<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Models\ComunityPhoto as photo;

class ComunityPhotoTransformer extends TransformerAbstract
{
    public function transform(photo $photo)
    {
        return [
            'id'            => (int) $photo->id,
            'user'          => $photo->user_id,
            'url'           => (string) $photo->url,
            'upload_date'   => $photo->created_at->timestamp,
            
        ];
    }
}
