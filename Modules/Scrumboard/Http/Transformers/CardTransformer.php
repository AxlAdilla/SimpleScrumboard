<?php

namespace Modules\Scrumboard\Http\Transformers;

use Modules\Scrumboard\Entities\Card;

/**
 * @OA\Schema(
 *  schema="Card",
 *  title="Card Schema",
 * 	@OA\Property(
 * 		property="id",
 * 		type="integer",
 *      example=1,
 * 	),
 *  @OA\Property(
 *      property="title",
 *      type="string",
 *      example="Do Task A",
 *  ),
 *  @OA\Property(
 *      property="description",
 *      type="string",
 *      example="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent varius velit dolor, eu tempor odio rhoncus volutpat. Nam iaculis, sapien eu mollis luctus, tortor nisl fermentum sapien, eget scelerisque purus lorem ut mauris. Aenean porta nunc et nisl cursus volutpat. Suspendisse urna augue, fringilla ut faucibus nec, luctus vitae mi. Praesent non fringilla arcu. Vivamus sit amet pharetra urna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus semper tincidunt ex, id varius ex luctus vitae.",
 *  ),
 *  @OA\Property(
 *      property="color",
 *      type="string",
 *      example="#ecdc31",
 *  ),
 *  @OA\Property(
 *      property="board_id",
 *      type="integer",
 *      example=1,
 *  ),
 * 	@OA\Property(
 * 		property="created_at",
 * 		type="string",
 *      example="2023-05-20T15:47:19.000000Z",
 * 	),
 * 	@OA\Property(
 * 		property="updated_at",
 * 		type="string",
 *      example="2023-05-20T15:47:19.000000Z",
 * 	)
 * )
*/

class CardTransformer {
    public $id, $title, $description, $color, $board_id, $created_at, $updated_at;
    public function __construct(Card $card) {
        $this->id = $card->id;
        $this->title = $card->title;
        $this->description = $card->description;
        $this->color = $card->color;
        $this->board_id = $card->board_id;
        $this->created_at = $card->created_at;
        $this->updated_at = $card->updated_at;
    }

    public function data() {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'color' => $this->color,
            'board_id' => $this->board_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

