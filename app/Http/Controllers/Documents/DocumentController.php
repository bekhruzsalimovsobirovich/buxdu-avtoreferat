<?php

namespace App\Http\Controllers\Documents;

use App\Domain\Documents\Actions\StoreDocumentAction;
use App\Domain\Documents\DTO\StoreDocumentDTO;
use App\Domain\Documents\Models\Document;
use App\Domain\Documents\Repositories\DocumentRepository;
use App\Domain\Documents\Requests\StoreDocumentRequest;
use App\Domain\Documents\Resources\DocumentResource;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Support\Facades\Auth;

class DocumentController extends Controller
{
    /**
     * @var mixed|DocumentRepository
     */
    public mixed $documents;

    /**
     * @param DocumentRepository $documentRepository
     */
    public function __construct(DocumentRepository $documentRepository)
    {
        $this->documents = $documentRepository;
    }

    /**
     * @return AnonymousResourceCollection
     */
    public function index()
    {
        return DocumentResource::collection($this->documents->paginate(\request()->query('pagination', 20)));
    }

    /**
     * @param StoreDocumentRequest $request
     * @param StoreDocumentAction $action
     * @return JsonResponse
     */
    public function store(StoreDocumentRequest $request, StoreDocumentAction $action)
    {
        try {
            $dto = StoreDocumentDTO::fromArray($request->validated());
            $response = $action->execute($dto);

            return $this->successResponse('Document created successfully', new DocumentResource($response));
        } catch (Exception $exception) {
            return $this->errorResponse($exception->getMessage());
        }
    }

//    check document
    public function checkDocument(Request $request, Document $document)
    {
        if (Auth::check() && Auth::user()->hasRole('admin')) {
            $request->validate([
                'status' => 'required|in:approved,rejected',
                'description' => 'nullable|string',
            ]);

            $document->update([
                'status' => $request->status,
            ]);

            $document->histories()->create([
                'user_id' => Auth::id(),
                'status' => $request->status,
                'description' => $request->description,
                'checked_at' => now(),
            ]);

            return $this->successResponse('Document status updated successfully', new DocumentResource($document));
        }else{
            return $this->errorResponse('Bu amalni bajarishga ruxsatingiz yo‘q');
        }
    }
}
