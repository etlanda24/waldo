<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Models\PlaceComment;

class PlaceCommentTransformer extends TransformerAbstract
{
	protected $user;

	protected $availableIncludes = [
        'user'
    ];

	function __construct($user = null)
    {
        $this->user = $user;
    }

    public function transform(PlaceComment $comment)
    {
        return [
            'id'        	=> (int) $comment->id,
			'date' 			=> $comment->created_at->timestamp,
			'like_count' 	=> (int) count($comment->Likes),
			'user_rating' 	=> $comment->avg(),
			'comment_text'	=> $comment->comment

        ];
    }

    public function includeUser(PlaceComment $comment)
    {
        if(isset($comment->user)) {
        	return $this->item($comment->user, new UserTransformer);	
        }
        
    }
}
