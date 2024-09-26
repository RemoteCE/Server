<?php
declare(strict_types=1);

use App\Shared\Application\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/test', [TestController::class, 'test']);
