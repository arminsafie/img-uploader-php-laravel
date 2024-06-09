<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Image</title>
 <style>
    body{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .btn{
        background: lightblue;
        padding: .5rem 1rem;
        border: none;
        border-radius: 6px;
    }
    .inputbox{
        background: #ddd;
        padding: .5rem 1rem;
        border: none;
        border-radius: 6px;
    }
 </style>
</head>
<body>
    @if (session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('image.upload') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" class="inputbox" name="image" required>
        <button type="submit" class="btn">Upload Image</button>
    </form>
</body>
</html>
