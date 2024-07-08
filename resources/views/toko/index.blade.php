@extends('toko.layouts.main')
@section('container')
<div class="h-screen">
    <div class="flex items-center justify-center lg:justify-end font-[rubik]">
        <div class="flex gap-x-4 mb-4 mt-8 m-52 ">
        <a href="{{ url('toko/addcategory') }}" class="rounded bg-[#B3D4FF99] px-6  py-3 text-sm font-semibold text-[#0052CC] shadow-sm hover:bg-[#0052CC] hover:text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#0052CC] text-semibold"><span aria-hidden="true">+</span>Add Category</a>

        <a href="{{ url('toko/addproduct') }}" class="rounded bg-[#B3D4FF99] px-6  py-3 text-sm font-semibold text-[#0052CC] shadow-sm hover:bg-[#0052CC] hover:text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#0052CC] text-semibold"><span aria-hidden="true">+</span>Add Product</a>

        <a href="{{ url('toko/cart') }}" class="rounded bg-[#B3D4FF99] px-6  py-3 text-sm font-semibold text-[#0052CC] shadow-sm hover:bg-[#0052CC] hover:text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#0052CC] text-semibold">Cart</a>
        </div>
    </div>
        {{-- tabbar category --}}
        <div class="flex border-b-4  border-[#0052CC] dark:border-[#EBECF0] ml-48 mr-48 font-[rubik]">
            <ul class="flex flex-wrap -mb-1 text-sm font-medium text-center text-gray-500 ">
                @foreach ($cats as $cat)
                <li class="mr-2">
                    <a href="name" class="inline-flex p-4 hover:text-[#0052CC] border-b-4 hover:border-[#0052CC] rounded active:text-[#0052CC] active:border-[#0052CC]" aria-current="page">
                        {{ $cat->name }}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>

        {{-- card product --}}
        <div class="w-60 bg-white border border-gray-200 rounded-lg drop-shadow-xl mx-48 my-12 font-[rubik]">
            <a href="#">
                <img class="rounded-t-lg w-full m-auto" src="{{ asset('images/barang/Frame.png') }}" alt="" />
            </a>
            <div class="relative">
                <div class="flex justify-between" href="#">
                    <h5 class="flex justify-start items-start mt-2.5 ml-5 text-lg font-reguler tracking-tight text-black ">Rames</h5>
                    <a href="" class="bg-[#DE350B] hover:bg-[#b43211] px-1.5 py-1.5 mt-3 mr-5 font-reguler text-xs text-white rounded">Delete</a>
                </div>
                <p class="flex justify-start items-start font-semibold text-xl px-5 mt-1 text-black">Rp. 100.000</p>
                <a href="#" class="flex justify-center items-center mx-12 mt-6 px-1 py-2 text-md font-medium text-center bg-blue text-white bg-blue-700 rounded hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                    +Add to Cart
                </a>
            </div>
        </div>
        <div class="inset-x-44 h-16 flex justify-end fixed bottom-14 font-[rubik]">
            <form action="#" method="POST">
                @csrf
                <button class="py-5 px-5 mr-2 mb-2  text-sm font-medium text-white focus:outline-none bg-blue-700 rounded-xl border border-gray-200 hover:bg-blue-800 hover:text-white focus:z-10 focus:ring-4 focus:ring-gray-200">Total Bill : Rp. 60.000</button>
            </form>
        </div>

    <div class="inset-x-0 h-16 justify-start ml-40 fixed bottom-7 font-[rubik]">
        <form action="/logout" method="POST">
            @csrf
            <button class="py-3 px-10 mr-2 mb-2  text-sm font-medium text-white focus:outline-none bg-blue-700 rounded border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200">Logout</button>
        </form>
    </div>
</div>
@endsection
