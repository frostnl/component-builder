@extends('layouts.default')

{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--<meta charset="UTF-8">--}}
{{--<title>Document</title>--}}
    {{--<link href="{{ asset('/css/app.css') }}" rel="stylesheet">--}}
    {{--<link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet">--}}
{{--</head>--}}
{{--<body>--}}
    @section('content')
    <?php

        $componentName = $_POST["ComponentName"];
        var_dump($componentName);

    ?>
    @stop
{{--</body>--}}
{{--</html>--}}