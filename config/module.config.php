<?php
namespace Phpfox\Mvc;

return [
    'services' => [
        'responder' => [null, Responder::class,],
        'requester' => [null, Requester::class,],
        'app'       => [null, Application::class],
    ],
];