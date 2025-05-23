<?php

namespace App\Domain\Documents\Actions;

use App\Domain\Documents\DTO\StoreDocumentDTO;
use App\Domain\Documents\Models\Document;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StoreDocumentAction
{
    public function execute(StoreDocumentDTO $dto)
    {
        DB::beginTransaction();
        try {
            $document = new Document();
            $document->user_id = Auth::id();
            $document->subject = $dto->getSubject();
            $document->type = $dto->getType();
            $document->year = $dto->getYear();
            $document->page = $dto->getPage();
            $document->lang = $dto->getLang();
            $document->description = $dto->getDescription();
            $document->save();

            if ($dto->getFile()) {
                $filename = Str::random(6) . '_' . time() . '.' . $dto->getFile()->getClientOriginalExtension();
                $dto->getFile()->storeAs('public/files/documents/', $filename);
                $document->files()->create([
                    'filename' => $filename,
                    'path' => url('storage/files/documents/' . $filename),
                ]);
            }

        } catch (Exception $exception) {
            DB::rollBack();
            throw $exception;
        }
        DB::commit();
        return $document;
    }
}
