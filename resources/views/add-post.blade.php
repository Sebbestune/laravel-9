<html>

<head>
    <title>Form example</title>
    <meta name="csrf" content="{{ csrf_token() }}">
</head>

<body>
    @if(session('status'))
    {{ session('status') }}
    @endif

    <form method="post" action="{{url('store-post')}}">
        @csrf
        <label>Title</label><br>
        <input type="text" name="title" required=""><br>
        <label>Description</label><br>
        <textarea name="description" required=""></textarea><br>
        <button type="submit">Submit</button>
    </form>
</body>

</html>