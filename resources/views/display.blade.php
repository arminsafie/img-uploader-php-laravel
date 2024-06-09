<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Images</title>
</head>
<body>
    @if (session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif

    @if (isset($image))
        <div>
            <img src="{{ asset($image) }}" alt="Uploaded Image">
        </div>
    @endif
</body>
</html>
