@extends('toko.layouts.main')
@section('container')

<div class="h-screen">
    <div class="font-[rubik] flex justify-center items-center">
        <!-- Card or contents that should be centered vertically -->
        <div class="bg-[#FFFFFF] py-5 rounded-sm w-[26vw] h-full mt-44">

            <div class="border-[#D9D9D9] py-1">
                <h2 class="text-gray-900 text-md mb-2 text-center font-semibold leading-snug text-xl">
                    Payment Successful
                </h2>
            </div>
        <div class="mx-20 mt-4 flex items-center justify-center">
            <div class="rounded-full bg-[#36B37E] py-6 px-6">
                <svg class="h-12 w-12 text-white"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round-none" stroke-linejoin="rouded-none" stroke-width="2" d="M5 13l4 4L19 7"/>
                  </svg>
            </div>
        </div>
            <div class="relative mt-7 justify-center items-center">
                <h2 class="text-gray-900 text-md mb-2 text-center font-semibold leading-snug text-xl">
                    Rp. 60,000
                </h2>
                <div class="mt-8 mb-5 justify-center items-center flex font-[rubik]">
                    <button href="{{ url('toko/index') }}" type="button" class="text-[#0052CC] hover:text-white border border-[#0052CC] hover:bg-[#0052CC] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded text-medium px-7 py-3 text-center dark:border-[#0052CC] dark:text-blue-700 dark:hover:text-white dark:hover:bg-blue-700 dark:focus:ring-blue-700">Back to Home</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
