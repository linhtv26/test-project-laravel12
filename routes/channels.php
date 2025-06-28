<?php

use Illuminate\Support\Facades\Broadcast;


Broadcast::channel('admin-channel', function () {
    \Log::info('admin-chanel');
    return true;
});
