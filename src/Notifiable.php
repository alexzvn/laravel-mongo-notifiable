<?php

namespace Alexzvn\LaravelMongoNotifiable;

use Illuminate\Notifications\RoutesNotifications;
use Alexzvn\LaravelMongoNotifiable\HasDatabaseNotifications;

trait Notifiable {
    use HasDatabaseNotifications, RoutesNotifications;
}
