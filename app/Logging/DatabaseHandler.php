<?php

namespace App\Logging;

use App\Models\Parameter\Log;
use Exception;
use Illuminate\Support\Facades\Log as LogFacades;
use Monolog\Handler\AbstractProcessingHandler;
use Throwable;

class DatabaseHandler extends AbstractProcessingHandler
{
    /**
     * @inheritDoc
     */
    protected function write($record): void
    {
        $record = is_array($record) ? $record : $record->toArray();

        $exception = $record['context']['exception'] ?? null;

        if ($exception instanceof Throwable) {
            $record['context']['exception'] = (string) $exception;
        }
        try {
            // if($_SERVER['REQUEST_URI'] != '/livewire/update') {
                Log::create([
                    'user_id'       => auth()->user()->id ?? null,
                    'message'       => $record['message'],
                    'uri'           => $_SERVER['REQUEST_URI'] ?? '',
                    'formatted'     => $record['formatted'] ?? '',
        
                    'context'       => json_encode($record['context']),
                    'level'         => $record['level'],
                    'level_name'    => $record['level_name'],
                    'channel'       => $record['channel'],
                    
                    'extra'         => json_encode($record['extra']),
                    'remote_addr'   => $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'] ?? null,
                    'user_agent'    => $_SERVER['HTTP_USER_AGENT'] ?? '',
                    'record_datetime' => $record['datetime']->format('Y-m-d H:i:s'),
                    'created_at'    => date("Y-m-d H:i:s"),
                ]);
            // }
        } catch (Exception $e) {
            dd($e);
            $fallbackChannels = ['single'];

            LogFacades::stack($fallbackChannels)->debug($record['formatted'] ?? $record['message']);

            LogFacades::stack($fallbackChannels)->debug('Could not log to the database.', [
                'exception' => $e,
            ]);
        }
    }
}