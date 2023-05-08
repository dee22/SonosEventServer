<?php

app()->get("/", function () {
    response()->json(["message" => "Congrats!! You're on Leaf API"]);
});

app()->get("/test", function () {
    response()->json(["message" => "Test is working!"]);
});

app()->get("/routes", function () {
    response()->json(app()->routes());
});

/*
app()->get("/app", function () {
// app() returns $app
response()->json(["message" => "App Route is working!"]);
//response()->json(app()->routes());
});*/
