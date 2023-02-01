<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Form example</title>
    <meta name="csrf" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>

    <div class="py-8 px-8 max-w-sm mx-auto bg-white rounded-xl shadow-lg space-y-2 sm:py-4 flex flex-col sm:space-y-0 sm:space-x-6">

        <h1 class="text-3xl py-8 px-8">
            Add a post!
        </h1>
        @if(session('status'))
        <p class="text-lg text-black font-semibold">
            {{ session('status') }}
        </p>
        @endif

        <form class="flex flex-col text-center space-y-2 sm:text-left" method="post" action="{{ route('store.post') }}">
            @csrf
            <label class="text-slate-500 font-medium">Title</label>
            <input type="text" name="title" required="">
            <label class="text-slate-500 font-medium">Description</label>
            <textarea name="description" required=""></textarea>
            <button class="px-4 py-1 text-sm text-blue-600 font-semibold rounded-full border border-blue-200 hover:text-white hover:bg-blue-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2" type="submit">Submit</button>
        </form>
    </div>

</body>

</html>