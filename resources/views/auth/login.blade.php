@extends('layouts.app')
@section('container')
{{-- <div class="lg:relative">
    <div class="lg:h-1/2 xl:max-h-screen-sm">
        <div class="flex bg-[#0052CC] py-8">
            <a class="text-3xl text-white tracking-wide ml-20 font-semibold font-[rubik]">MAS POS</a>
            <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                <a href="#" class="text-18 font-reguler leading-6 mr-24 text-white font-[rubik]">Call Us  +62 817-1902-092</a>
            </div>
        </div>
            <div class="py-36 bg-[#0052CC] lg:bg-[#0052CC] flex justify-center lg:justify-start lg:px-20">
            </div>
        <div class="hidden lg:flex items-center justify-center bg-white flex-1 h-full">
        </div>
    </div>
</div> --}}
<div class="relative">
    <div class="flex bg-[#0052CC] py-1">
        <a class="text-3xl text-white tracking-wide ml-20 font-semibold font-[rubik] mt-6">MAS POS</a>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            <a href="#" class="text-18 font-reguler leading-6 mr-24 text-white font-[rubik] mt-8">Call Us  +62 817-1902-092</a>
        </div>
    </div>
    <div class="bg-[#0052CC] h-80 flex">
        <div class="flex justify-between w-full">
            {{-- <div class="flex">
                <h1 class="uppercase font-bold text-white text-3xl font-[rubik] px-20 py-10 ">mas pos</h1>
            </div>
            <div class="flex">
                <h4 class="text-white px-20 py-10 font-rubik">Call Us  +62 817-1902-092</h4>
            </div> --}}
        </div>
    </div>
    <div class="bg-white h-96  flex"></div>
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
        <div class="max-w-lg border border-slate-200 rounded-lg mx-auto shadow-md font-[rubik] p-8  bg-white w-[35vw] h-[50vh]">
            <h4 class="text-center mb-5 text-xl font-semibold">Login</h4>
            <form action="/" method="POST">
                @csrf
                <div class="login-form mx-5">
                    <label for="username" class="block mb-1 text-slate-700 font-reguler">Username</label>
                    <input type="text" id="name" placeholder="Masukan Username" class="px-2 py-3 border shadow rounded w-full block text-sm focus:outline-none focus:ring-1 focus:ring-sky-500 peer" name="name" value="{{ old('name') }}" autofocus>
                    <p class="text-sm m-1 text-red-700 invisible peer-invalid:visible">Username tidak valid</p>
                </div>
                <div class="login-form mx-5">
                    <label for="password" class="block mb-1 text-slate-700 font-reguler">Password</label>
                    <input type="password" id="password" placeholder="Masukan Password" class="px-2 py-3 border shadow rounded w-full block text-sm focus:outline-none focus:ring-1 focus:ring-sky-500 peer" name="password" value="{{ old('password') }}">
                    <p class="text-sm m-1 text-red-700 invisible peer-invalid:visible">Password tidak valid</p>
                </div>
                <div class="flex justify-center">
                    <button class="border rounded-md bg-[#0052CC] px-10 py-2 m-auto mt-4 text-white hover:bg-sky-600 active:bg-sky-700" type="submit">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
