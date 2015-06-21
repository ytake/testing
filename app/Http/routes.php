<?php

\Route::group(['middleware' => 'auth'], function() {
    resource('user', 'UserController', ['only' => ['index', 'store']]);
});

\Route::controller('tester', 'TesterController',
    [
        'getIndex' => 'tester.index',
        'getFunctional' => 'tester.functional'
    ]
);
