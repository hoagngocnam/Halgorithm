<?php

use Illuminate\Support\Facades\Log;

if (!function_exists('notification_message_settings')) {
    function notification_message_settings($status, $title, $message = ''): void
    {
        session()->flash('notification', [
            'status' => $status,
            'title' => $title,
            'message' => $message
        ]);
    }
}

if (!function_exists('load_image')) {
    function load_image(string $path = ''): string
    {
        return file_exists($path) ? asset($path) : asset(DEFAULT_IMAGE);
    }
}

if (!function_exists('numeral')) {
    function numeral($page, $position, $num_record): int
    {
        return ($page - 1) * $num_record + $position + 1;
    }
}

if (!function_exists('error_logging')) {
    function error_logging(string $file, string $line, string $message): void
    {
        Log::error(
            PHP_EOL .
                'File    : ' . $file . PHP_EOL .
                'Line    : ' . $line . PHP_EOL .
                'Message : ' . $message
        );
    }
}
