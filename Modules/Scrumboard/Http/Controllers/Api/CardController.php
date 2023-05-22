<?php

namespace Modules\Scrumboard\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Scrumboard\Entities\Card;
use App\Http\Transformers\PaginationTransformer;
use ArinaSystems\JsonResponse\Facades\JsonResponse;
use Modules\Scrumboard\Http\Requests\CardEditRequest;
use Modules\Scrumboard\Http\Requests\CardStoreRequest;
use Modules\Scrumboard\Http\Transformers\CardTransformer;

class CardController extends Controller
{
    /**
     * @OA\Get(
     *      path="/api/cards",
     *      tags={"Cards"},
     *      summary="Get Cards",
     *      @OA\Parameter(
     *         name="Accept",
     *         in="header",
     *         @OA\Examples(
     *              example="string",
     *              value="Application/json",
     *              summary="Set Parameter Application json"
     *         )   
     *     ),
     *      @OA\Parameter(
     *          in="query",
     *          name="title",
     *          required=false,
     *      ),
     *      @OA\Parameter(
     *         in="query",
     *         name="board_id",
     *         required=false,
     *      ),
     *      @OA\Parameter(
     *         in="query",
     *         name="page",
     *         required=false,
     *      ),
     *      @OA\Response(
     *          response="200", 
     *          description="OK",
     *          @OA\JsonContent(
     *              oneOf={
     *                  @OA\Schema(ref="#/components/schemas/JsonBaseTransformer"),
     *                  @OA\Schema(ref="#/components/schemas/Card")
     *              }
     *          ),
     *      ),
     *     @OA\Response(
     *         response="422", 
     *         description="Error",
     *         @OA\JsonContent(ref="#/components/schemas/JsonBaseTransformer"),
     *     ),
     * )
    */
    public function index(Request $request)
    {
        $title = $request->query('title');
        $board_id = $request->query('board_id');

        $card = Card::query();
        $card = $card->when($title, function($q, $title) {
            return $q->where('title', 'like', "%$title%");
        });
        $card = $card->when($board_id, function($q, $board_id) {
            return $q->where('board_id', $board_id);
        });
        $card = $card->paginate(4);
        $pagination = new PaginationTransformer($card);

        $data = collect($card->items())->map(function(Card $card) {
            return (new CardTransformer($card))->data();
        });

        return JsonResponse::json('ok', [
            'data' => $data->toArray(),
            'links' => $pagination->links(),
            'meta' => $pagination->meta(),
        ]);
    }

    /**
     * @OA\Get(
     *      path="/api/cards/{id}",
     *      tags={"Cards"},
     *      summary="Get Card by ID",
     *      @OA\Parameter(
     *         name="Accept",
     *         in="header",
     *         @OA\Examples(
     *              example="string",
     *              value="Application/json",
     *              summary="Set Parameter Application json"
     *         )   
     *     ),
     *      @OA\Parameter(
     *          in="path",
     *          name="id",
     *          required=true,
     *          @OA\Examples(example="int", value="1", summary="Card ID value")         
     *      ),
     *      @OA\Response(
     *          response="200", 
     *          description="OK",
     *          @OA\JsonContent(
     *              oneOf={
     *                  @OA\Schema(ref="#/components/schemas/JsonBaseSingleTransformer"),
     *                  @OA\Schema(ref="#/components/schemas/Card")
     *              }
     *          ),
     *      ),
     *     @OA\Response(
     *         response="422", 
     *         description="Error",
     *         @OA\JsonContent(ref="#/components/schemas/JsonBaseTransformer"),
     *     ),
     * )
    */
    public function show($id)
    {
        $card = Card::findOrFail($id);
        $data = (new CardTransformer($card))->data();

        return JsonResponse::json('ok', [
            'data' => $data
        ]);
    }

    /**
     * @OA\Post(
     *      path="/api/cards",
     *      tags={"Cards"},
     *      summary="Create Card",
     *      @OA\Parameter(
     *         name="Accept",
     *         in="header",
     *         @OA\Examples(
     *              example="string",
     *              value="Application/json",
     *              summary="Set Parameter Application json"
     *         )   
     *     ),
     *      @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(ref="#/components/schemas/CardStoreRequest")
     *         )
     *     ),
     *     @OA\Response(
     *         response="201", 
     *         description="OK",
     *         @OA\JsonContent(
     *             oneOf={
     *                 @OA\Schema(ref="#/components/schemas/JsonBaseSingleTransformer"),
     *                 @OA\Schema(ref="#/components/schemas/Card")
     *             }
     *         ),
     *     ),
     *     @OA\Response(
     *         response="422", 
     *         description="Error",
     *         @OA\JsonContent(ref="#/components/schemas/JsonBaseTransformer"),
     *     ),
     * )
    */
    public function store(CardStoreRequest $request)
    {
        $input = $request->data();
        $card = Card::create($input);
        $data = (new CardTransformer($card))->data();

        return JsonResponse::json('ok', [
            'code' => 201,
            'http_code' => 201,
            'data' => $data
        ]);
    }
    /**
     * @OA\Delete(
     *      path="/api/cards/{id}",
     *      tags={"Cards"},
     *      summary="Delete Card by ID",
     *      @OA\Parameter(
     *         name="Accept",
     *         in="header",
     *         @OA\Examples(
     *              example="string",
     *              value="Application/json",
     *              summary="Set Parameter Application json"
     *         )   
     *     ),
     *      @OA\Parameter(
     *          in="path",
     *          name="id",
     *          required=true,
     *          @OA\Examples(example="int", value="1", summary="Card ID value")         
     *      ),
     *      @OA\Response(
     *          response="200", 
     *          description="OK",
     *          @OA\JsonContent(
     *              oneOf={
     *                  @OA\Schema(ref="#/components/schemas/JsonBaseSingleTransformer"),
     *                  @OA\Schema(ref="#/components/schemas/Card")
     *              }
     *          ),
     *      ),
     *     @OA\Response(
     *         response="422", 
     *         description="Error",
     *         @OA\JsonContent(ref="#/components/schemas/JsonBaseTransformer"),
     *     ),
     * )
    */
    public function delete($id)
    {
        $card = Card::find($id);
        $data = (new CardTransformer($card))->data();
        $card->delete();

        return JsonResponse::json('ok', [
            'code' => 200,
            'http_code' => 200,
            'data' => $data,
        ]);
    }

    /**
     * @OA\Put(
     *      path="/api/cards/{id}",
     *      tags={"Cards"},
     *      summary="Create Card",
     *      @OA\Parameter(
     *         name="Accept",
     *         in="header",
     *         @OA\Examples(
     *              example="string",
     *              value="Application/json",
     *              summary="Set Parameter Application json"
     *         )   
     *     ),
     *      @OA\Parameter(
     *          in="path",
     *          name="id",
     *          required=true,
     *          @OA\Examples(example="int", value="1", summary="Card ID value")         
     *      ),
     *      @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(ref="#/components/schemas/CardEditRequest")
     *         )
     *     ),
     *      @OA\Response(
     *          response="201", 
     *          description="OK",
     *          @OA\JsonContent(
     *              oneOf={
     *                  @OA\Schema(ref="#/components/schemas/JsonBaseSingleTransformer"),
     *                  @OA\Schema(ref="#/components/schemas/Card")
     *              }
     *          ),
     *      ),
     *     @OA\Response(
     *         response="422", 
     *         description="Error",
     *         @OA\JsonContent(ref="#/components/schemas/JsonBaseTransformer"),
     *     ),
     * )
    */
    public function edit(CardEditRequest $request, $id)
    {
        $input = $request->data();
        $card = Card::find($id);
        $card->update($input);
        $data = (new CardTransformer($card))->data();

        return JsonResponse::json('ok', [
            'code' => 201,
            'http_code' => 201,
            'data' => $data
        ]);
    }
}
