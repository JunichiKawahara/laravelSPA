<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>TEST PAGE</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<div id="app">
<h1>TEST PAGE</h1>

<example-component></example-component>

</div>{{-- /#app --}}
</body>
    <script src="{{ mix('js/app.js') }}"></script>
</html>
