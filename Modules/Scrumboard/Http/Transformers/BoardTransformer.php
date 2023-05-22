<?php

namespace Modules\Scrumboard\Http\Transformers;

use Modules\Scrumboard\Entities\Board;

/**
 * @OA\Schema(
 *  schema="Board",
 *  title="Board Schema",
 * 	@OA\Property(
 * 		property="id",
 * 		type="integer",
 *      example=1,
 * 	),
 * 	@OA\Property(
 * 		property="name",
 * 		type="string",
 *      example="Backlog",
 * 	),
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

class BoardTransformer {
    public $id, $name, $created_at, $updated_at;
    public function __construct(Board $board) {
        $this->id = $board->id;
        $this->name = $board->name;
        $this->created_at = $board->created_at;
        $this->updated_at = $board->updated_at;
    }

    public function data() {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}