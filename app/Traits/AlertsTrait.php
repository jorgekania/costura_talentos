<?php

namespace App\Traits;

trait AlertsTrait
{
    public function showAlert($type, $title, $text, $position = 'top-end', $timer = 5000)
    {
        $this->dispatch(
            "alert",
            type: $type,
            title: $title,
            text: $text,
            position: $position,
            timer: $timer
        );
    }
}
