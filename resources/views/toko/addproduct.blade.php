@extends('toko.layouts.main')
@section('container')
<div class="h-screen">
    <div class=" font-[rubik] flex justify-center items-center">
        <!-- Card or contents that should be centered vertically -->
        <div class="bg-[#FFFFFF] py-5 rounded-sm w-[55vw] h-full mt-20">
            <div class="border-b-2 border-[#D9D9D9] py-1">
                <h2 class="text-gray-900 text-xl mb-4 ml-10 text-start font-semibold leading-snug">
                    Add Category
                </h2>
            </div>

        <div class="mt-10 mr-20 flex items-end justify-end gap-x-2 lg:justify-end font-[rubik]">
            <label for="dropzone-file" class="flex flex-col items-center justify-start mb-24 w-full h-full ml-20 mr-28 border-gray-300 rounded-md cursor-pointer bg-[#B3D4FF99] dark:hover:bg-bray-800 dark:bg-[#B3D4FF99] hover:bg-[#4d83cb99]">
                <div class="flex my-6 flex-col items-center justify-center pt-10 pb-10">
                    <img aria-hidden="true" class="w-10 h-full mb-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" src="{{ asset('images/cloud_up.png') }}"></img>
                    <p class="mb-2 text-sm text-gray-500 dark:text-[#0052CC] text-reguler ">Uploud Image</p>
                </div>
                <input id="dropzone-file" type="file" class="hidden" />
            </label>

            <form action="/" method="POST">
                @csrf
                <div class="login-form">
                    <label for="produkn" class="block mb-1 text-slate-700 font-reguler text-sm">Product Name</label>
                    <input type="text" id="produkn" placeholder="Input Product" class="px-2 py-3 border shadow rounded w-[22vw] block text-sm focus:outline-none focus:ring-1 focus:ring-sky-500 peer" name="name" value="{{ old('name') }}" autofocus>
                    <p class="text-sm m-1 text-red-700 invisible peer-invalid:visible">Username tidak valid</p>
                </div>

                <div class="login-form">
                    <label for="price" class="block mb-1 text-slate-700 font-reguler text-sm">Price</label>
                    <input type="text" id="price" placeholder="Input Price" class="px-2 py-3 border shadow rounded w-[22vw] block text-sm focus:outline-none focus:ring-1 focus:ring-sky-500 peer" name="name" value="{{ old('name') }}" autofocus>
                    <p class="text-sm m-1 text-red-700 invisible peer-invalid:visible">Username tidak valid</p>
                </div>

                <div class="login-form">
                    <label for="selectc" class="block mb-1 text-slate-700 font-reguler text-sm">Select Category</label>
                    <select type="text" id="selectc" class="px-2 py-3 border shadow rounded w-[22vw] block text-sm focus:outline-none focus:ring-1 focus:ring-sky-500 peer text-[#7A869A]" name="name" value="{{ old('name') }}" autofocus>
                        <option selected>Choose a category</option>
                        <option value="US">United States</option>
                        <option value="CA">Canada</option>
                        <option value="FR">France</option>
                        <option value="DE">Germany</option>
                        </select>
                    <p class="text-sm m-1 text-red-700 invisible peer-invalid:visible">Username tidak valid</p>
                </div>
            </form>

        </div>
        <div class="mt-32 mr-20 flex items-end justify-end gap-x-2 lg:justify-end font-[rubik]">
            <button type="button" class="text-[#0052CC] hover:text-white border border-[#0052CC] hover:bg-[#0052CC] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded text-medium px-7 py-2 text-center dark:border-[#0052CC] dark:text-blue-700 dark:hover:text-white dark:hover:bg-blue-700 dark:focus:ring-blue-700">Cancel</button>

            <button type="button" class="text-white bg-[#0052CC] border border-[#0052CC] hover:bg-[#0052CC] focus:ring-4 focus:ring-blue-300 font-medium rounded text-medium px-7 py-2 dark:bg-[#0052CC] dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-700">Confirm</button>
        </div>
        </div>
    </div>
</div>
@endsection
