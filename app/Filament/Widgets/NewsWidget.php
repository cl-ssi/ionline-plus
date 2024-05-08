<?php

namespace App\Filament\Widgets;

use App\Models\News;
use Filament\Widgets\Widget;

class NewsWidget extends Widget
{
    protected static string $view = 'filament.widgets.news-widget';

    protected int | string | array $columnSpan = 2;

    public $news;
    public $currentIndex = 0;

    public function mount(): void
    {
        // Obtén solo las noticias cuya fecha "until_at" aún no ha pasado
        $this->news = News::where('until_at', '>', now())
                          ->orderBy('id', 'desc')
                          ->get();
    }

    public function next()
    {
        if ($this->currentIndex < $this->news->count() - 1) {
            $this->currentIndex++;
        }
    }

    public function prev()
    {
        if ($this->currentIndex > 0) {
            $this->currentIndex--;
        }
    }

    public function getCurrentNews()
    {
        return $this->news[$this->currentIndex];
    }
}