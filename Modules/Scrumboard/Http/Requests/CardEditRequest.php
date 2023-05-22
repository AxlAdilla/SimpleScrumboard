<?php

namespace Modules\Scrumboard\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 *  @OA\Schema(
 *      schema="CardEditRequest",
 *      title="Card Edit Request Schema",
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
 *  )
 */
class CardEditRequest extends FormRequest
{
    public function rules()
    {
        return [
            'title' => 'required',
            'board_id' => 'required|exists:boards,id',
            'color' => 'required',
        ];
    }

    public function data() {
        return $this->only([
            'title',
            'description',
            'board_id',
            'color',
        ]);
    }

    public function authorize()
    {
        return true;
    }
}
