<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        #backgroundImage {
            position: fixed;
            width:100%;
            height: 100%;
            z-index: -1;
            background-image: url("{{ url('img/revenge.jpg') }}");
            background-position: top;
            /* text-align: center; */
        }

        @media screen and (max-width: 600px) {
            #backgroundImage {
                background-size: cover;
                /* background-repeat: no-repeat; */
                background-color: rgba(129, 120, 103, 1);
            }
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-full">
  <div id="backgroundImage"></div>
  <div class="min-h-full">
    <x-nav-bar/>
    <x-header :header=$header/>
    <main>
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 text-white">
        {{ $slot }}
      </div>
    </main>
  </div>
</body>
</html>