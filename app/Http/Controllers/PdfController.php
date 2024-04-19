<?php

namespace App\Http\Controllers;

use App\Models\Document\Document;
use Barryvdh\DomPDF\Facade\Pdf;
use Gate;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function document(Document $document)
    {
        Gate::authorize('view', $document);

        return Pdf::loadView('pdf', [
            'document' => $document,
            'establishment' => $document->establishment
        ])
            ->stream('download.pdf');
    }
}
