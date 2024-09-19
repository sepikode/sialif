<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

class LogController extends Controller
{
    public function showLogs()
    {
        $logFilePath = storage_path('logs/laravel.log');

        if (!File::exists($logFilePath)) {
            Log::error('Log file does not exist.');
            return view('logs.show', [
                'logs' => 'Log file does not exist.',
                'title' => 'Log',
            ]);
        }

        try {
            $logs = File::get($logFilePath);
            return view('logs.show', [
                'logs' => nl2br(e($logs)),
                'title' => 'Log',
            ]);
        } catch (\Exception $e) {
            Log::error('Error reading log file: ' . $e->getMessage());
            return view('logs.show', ['logs' => 'Unable to read log file.']);
        }
    }

    public function clearLogs()
    {
        $logFilePath = storage_path('logs/laravel.log');

        if (File::exists($logFilePath)) {
            File::put($logFilePath, ''); // Clear the log file
            Log::info('Log file cleared successfully.');
            return redirect()->back()->with('status', 'Log file cleared successfully.');
        }

        Log::warning('Attempted to clear log file, but it does not exist.');
        return redirect()->back()->with('status', 'Log file does not exist.');
    }

}
