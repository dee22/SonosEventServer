<?php

require __DIR__ . '/vendor/autoload.php';

app()->get('/', function () {
	response()->page('./welcome.html');
});

app()->get('api/v1', function () {
	response()->json(['message' => "Congrats!! You're on Leaf API"]);
});

app()->run();