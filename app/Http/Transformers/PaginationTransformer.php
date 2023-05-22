<?php

namespace App\Http\Transformers;

use Illuminate\Pagination\LengthAwarePaginator;

/**
 * @OA\Schema(
 *  schema="JsonBaseTransformer",
 *  title="Json Base Transformer",
 *  @OA\Property(
 *      property="success",
 *      type="boolean",
 *  ),
 * 	@OA\Property(
 * 		property="code",
 * 		type="integer",
 * 	),
 *  @OA\Property(
 *      property="http_code",
 *      type="integer",
 *  ),
 * 	@OA\Property(
 * 		property="locale",
 * 		type="string",
 * 	),
 *  @OA\Property(
 *      property="message",
 *      type="string",
 *  ),
 * 	@OA\Property(
 * 		property="additional",
 * 		type="string",
 * 	),
 *  @OA\Property(
 *      property="links",
 *      type="array",
 *      @OA\Items(
 *          @OA\Property(
 *              property="first",
 *              type="string",
 *          ),
 *          @OA\Property(
 *              property="last",
 *              type="string",
 *          ),
 *          @OA\Property(
 *              property="prev",
 *              type="string",
 *          ),
 *          @OA\Property(
 *              property="next",
 *              type="string",
 *          )
 *      ),
 *  ),
 *  @OA\Property(
 *      property="meta",
 *      type="array",
 *      @OA\Items(
 *          @OA\Property(
 *              property="current_page",
 *              type="integer",
 *          ),
 *          @OA\Property(
 *              property="from",
 *              type="integer",
 *          ),
 *          @OA\Property(
 *              property="last_page",
 *              type="string",
 *          ),
 *          @OA\Property(
 *              property="path",
 *              type="string",
 *          ),
 *          @OA\Property(
 *              property="per_page",
 *              type="string",
 *          ),
 *          @OA\Property(
 *              property="to",
 *              type="string",
 *          ),
 *          @OA\Property(
 *              property="total",
 *              type="integer",
 *          )
 *      ),
 *  ),
 *  @OA\Property(
 *      property="data",
 *      type="array",
 *      @OA\Items(),
 *      description="Array of returned data",
 *  ),
 * )

 * @OA\Schema(
 *  schema="JsonBaseSingleTransformer",
 *  title="Json Base Single Transformer",
 *  @OA\Property(
 *      property="success",
 *      type="boolean",
 *  ),
 *  @OA\Property(
 *    property="code",
 *    type="integer",
 *  ),
 *  @OA\Property(
 *      property="http_code",
 *      type="integer",
 *  ),
 *  @OA\Property(
 *    property="locale",
 *    type="string",
 *  ),
 *  @OA\Property(
 *      property="message",
 *      type="string",
 *  ),
 * 	@OA\Property(
 * 		property="additional",
 * 		type="string",
 * 	),
 *  @OA\Property(
 *      property="links",
 *      type="array",
 *      @OA\Items(),
 *  ),
 *  @OA\Property(
 *      property="meta",
 *      type="array",
 *      @OA\Items(),
 *  ),
 *  @OA\Property(
 *      property="data",
 *      description="Returned data",
 *  ),
 * )
*/
class PaginationTransformer {
    public $firstUrl, $lastUrl, $prevUrl, $nextUrl, $currentPage, $from, $path, $to, $total, $perPage;
    
    public function __construct(LengthAwarePaginator $pagination) {
        $this->firstUrl = $pagination->url(1);
        $this->lastUrl = $pagination->url($pagination->lastPage());
        $this->prevUrl = $pagination->previousPageUrl();
        $this->nextUrl = $pagination->nextPageUrl();
        $this->currentPage = $pagination->currentPage();
        $this->from = $pagination->firstItem();
        $this->path = $pagination->path();
        $this->perPage = $pagination->perPage();
        $this->to = $pagination->lastItem();
        $this->total = $pagination->total();
    }

    public function links() {
        return [
            'first' => $this->firstUrl,
            'last' => $this->lastUrl,
            'prev' => $this->prevUrl,
            'next' => $this->nextUrl,
        ];
    }

    public function meta() {
        return [
            'current_page' => $this->currentPage,
            'from' => $this->from,
            'last_page' => $this->lastUrl,
            'path' => $this->path,
            'per_page' => $this->perPage,
            'to' => $this->to,
            'total' => $this->total,
        ];
    }
}