<?php

namespace Modules\Scrumboard\Http\Controllers\Api;

use Illuminate\Routing\Controller;
use Modules\Scrumboard\Entities\Board;
use Illuminate\Contracts\Support\Renderable;
use ArinaSystems\JsonResponse\Facades\JsonResponse;
use Modules\Scrumboard\Http\Transformers\BoardTransformer;

class BoardController extends Controller
{
    /**
     * @OA\Get(
     *      tags={"Boards"},
     *      summary="Get All Boards",
     *      path="/api/boards",
     *      @OA\Parameter(
     *         name="Accept",
     *         in="header",
     *         @OA\Examples(
     *              example="string",
     *              value="Application/json",
     *              summary="Set Parameter Application json"
     *         )   
     *     ),
     *     @OA\Response(
     *         response="200", 
     *         description="OK",
     *         @OA\JsonContent(
     *             oneOf={
     *                 @OA\Schema(ref="#/components/schemas/JsonBaseTransformer"),
     *                 @OA\Schema(ref="#/components/schemas/Board")
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
    public function index()
    {
        $board = Board::with(['cards'])->get();
        $data = $board->map(function (Board $board) {
            return (new BoardTransformer($board))->data();
        });

        return JsonResponse::json('ok', [
            'data' => $data->toArray()
        ]);
    }

/**
     * @OA\Get(
     *      path="/api/boards/{id}",
     *      tags={"Boards"},
     *      summary="Get Board by ID",
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
     *          @OA\Examples(example="int", value="1", summary="ID value")         
     *      ),
     *      @OA\Response(
     *          response="200",
     *          description="OK",
     *          @OA\JsonContent(
     *              oneOf={
     *                 @OA\Schema(ref="#/components/schemas/JsonBaseSingleTransformer"),
     *                 @OA\Schema(ref="#/components/schemas/Board")
     *             }
     *          )
     *     ),
     *     @OA\Response(
     *         response="422", 
     *         description="Error",
     *         @OA\JsonContent(ref="#/components/schemas/JsonBaseTransformer"),
     *     ),
     * )
    */
    public function show($id)
    {
        $board = Board::with(['cards'])->find($id);

        return JsonResponse::json('ok', [
            'data' => $board->toArray()
        ]);
    }
}
