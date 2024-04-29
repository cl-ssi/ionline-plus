<?php

namespace App\Filament\Widgets;

use App\Models\News;
use Filament\Widgets\Widget;
use Illuminate\Support\Facades\Storage;

class NewsWidget extends Widget
{
    protected static string $view = 'filament.widgets.news-widget';

    protected int | string | array $columnSpan = 2;

    public $newsItems;

    public function mount(): void
    {
        $this->newsItems = News::orderBy('id','asc')->get()->map(function ($news) {
            return [
                'url' => Storage::disk('gcs')->url($news->image)
            ];
        });
    }
}
