<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>

//navbar
<body>
    <nav class="bg-[#0052CC] px-10 sm:px-4 py-5 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
        <div class="container flex flex-wrap items-center justify-between mx-auto">
        <a class="text-2xl text-white tracking-wide font-semibold font-[rubik] ml-40">MAS POS</a>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end text-lg">
            <a href="#" class="font-reguler leading-6 mr-3 text-white font-[rubik] mt-3">{{ auth()->user()->name }}</a>

            <div class="hs-tooltip inline-block">
                <a class="hs-tooltip-toggle relative inline-block mr-40" href="#">
                  <img class="inline-block h-[2.775rem] w-[2.775rem] rounded-full " src="{{ asset('images/ok.jpg') }}" alt="Image Description">
                  <span class="absolute bottom-0 right-0 block h-3 w-3 rounded-full ring-2 ring-white bg-green-400"></span>
                </a>
              </div>
        </div>
        </div>
    </nav>

    <div class="bg-[#FAFAFA] mt-20">
        @yield('container')
    </div>
  </div>
</div>
</body>
</html>
