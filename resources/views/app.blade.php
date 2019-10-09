<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>USCIS Case Tracker</title>
    @include('favicon')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script>
    window.App = {!! collect(compact('case_ids'))->toJson() !!};
    </script>
</head>
<body>
    <div id="app" class="mt-4 mt-md-5">
        <div class="container">
            <case-list />
        </div>
    </div>

    @if (app()->isLocal())
        <script src="http://localhost:8080/js/app.js"></script>
    @else
        <script src="{{ asset('js/app.js') }}"></script>
    @endif
</body>
</html>
