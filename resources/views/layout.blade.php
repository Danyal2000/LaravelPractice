<!DOCTYPE html>
<html lang="{{ str_replace('_','-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- csrf token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name','AWE Example') }}</title>

<!-- scripts -->
<script src="{{ asset('js/my.js') }}"></script>

<!-- fonts -->

<!-- styles -->

</head>
<body>

<h1>Basic Example</h1>
<div class="product-list">
  @yield('content')
</div>

</body>
</html>