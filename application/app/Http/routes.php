<?php

\Route::group(['middleware' => 'auth'], function() {
    resource('user', 'UserController', ['only' => ['index', 'show']]);
});
