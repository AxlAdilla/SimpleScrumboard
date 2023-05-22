<?php

namespace Modules\Scrumboard\Http\Requests;

use Modules\Scrumboard\Entities\Board;
use Illuminate\Foundation\Http\FormRequest;

/** 
 *   @OA\Schema(
 *      schema="CardStoreRequest",
 *      title="Card Store Request Schema",
 *      @OA\Property(
 *          property="title",
 *          type="string",
 *          example="Do Task A",
 *      ),
 *      @OA\Property(
 *          property="description",
 *          type="string",
 *          example="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent varius velit dolor, eu tempor odio rhoncus volutpat. Nam iaculis, sapien eu mollis luctus, tortor nisl fermentum sapien, eget scelerisque purus lorem ut mauris. Aenean porta nunc et nisl cursus volutpat. Suspendisse urna augue, fringilla ut faucibus nec, luctus vitae mi. Praesent non fringilla arcu. Vivamus sit amet pharetra urna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus semper tincidunt ex, id varius ex luctus vitae.",
 *      ),
 *      @OA\Property(
 *          property="color",
 *          type="string",
 *          example="#ecdc31",
 *      ),
 *      @OA\Property(
 *          property="board_id",
 *          type="integer",
 *          example=1,
 *      ),
 *   )
*/

class CardStoreRequest extends FormRequest
{
    public function rules()
    {
        return [
            'title' => 'required',
            'board_id' => 'required|exists:boards,id',
        ];
    }

    public function data() {
        return [
            'title' => $this->input('title'),
            'description' => $this->input('description', ''),
            'color' => $this->input('color', sprintf("#%06x",rand(0,16777215))),
            'board_id' => $this->input('board_id', Board::first('name', 'backlog')->id)
        ];
    }

    public function authorize()
    {
        return true;
    }
}
