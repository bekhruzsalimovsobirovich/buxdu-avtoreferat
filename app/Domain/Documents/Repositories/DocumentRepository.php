<?php

namespace App\Domain\Documents\Repositories;

use App\Domain\Documents\Models\Document;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;

class DocumentRepository
{
    /**
     * @param $pagination
     * @return LengthAwarePaginator
     */
    public function paginate($pagination): LengthAwarePaginator
    {
        $query = Document::query();

        if (Auth::user()->hasRole('teacher')) {
            $query->where('user_id', Auth::id());
        }

        return $query->orderBy('created_at', 'desc')
            ->paginate($pagination);
    }
}
