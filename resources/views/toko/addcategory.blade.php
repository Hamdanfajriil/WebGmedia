@extends('toko.layouts.main')
@section('container')

<div class="h-screen">
    <div class="font-[rubik] flex justify-center items-center">
        <!-- Card or contents that should be centered vertically -->
        <div class="bg-[#FFFFFF] py-5 rounded-sm w-[35vw] h-full mt-36">

            <div class="border-b-2 border-[#D9D9D9] py-1">
                <h2 class="text-gray-900 text-md mb-2 text-center font-semibold leading-snug text-xl">
                    Add Category
                </h2>
            </div>
        <div class="mx-20 mt-10 items-center justify-center">
            <form action="/toko/addcategory" method="POST">
                @csrf
                <div class="login-form">
                    <label for="username" class="block mb-1 text-slate-700 font-reguler text-sm">Add Category</label>
                    <input type="text" id="name" placeholder="Masukan Category" class="px-2 py-3 border shadow rounded w-full block text-sm focus:outline-none focus:ring-1 focus:ring-sky-500 peer" name="name" value="{{ old('name') }}" autofocus>
                    <p class="text-sm m-1 text-red-700 invisible peer-invalid:visible">Username tidak valid</p>
                </div>
                <div class="mt-5 flex items-center justify-center gap-x-2 lg:justify-center font-[rubik]">
                    <button type="button" class="text-[#0052CC] hover:text-white border border-[#0052CC] hover:bg-[#0052CC] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded text-medium px-7 py-2 text-center ">Default</button>

                    <button type="submit" class="text-white bg-[#0052CC] border border-[#0052CC] hover:bg-[#0052CC] focus:ring-4 focus:ring-blue-300 font-medium rounded text-medium px-7 py-2 ">Confirm</button>
                </div>
            </form>

        </div>
        </div>
    </div>
</div>
@endsection
