@extends('toko.layouts.main')
@section('container')
    <div class="h-screen font-[rubik]">
        <div class="flex mx-40">
        <table class="w-full text-sm text-center text-black mt-4">
            <thead class="text-md  text-black uppercase">
                <tr class="border-b-2 border-[#D9D9D9]">
                    <th scope="col" class="px-6 py-10">
                        <span class="sr-only">ID</span>
                    </th>
                    <th scope="col" class="px-4 py-3">
                        Product
                    </th>
                    <th scope="col" class="py-3">
                        <span class="sr-only">image</span>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Qty
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Price
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody class="border-b-2">
                <tr class="border-b  hover:bg-gray-50 mt-20">
                    <td class="px-6 py-4 text-gray-90">
                        1
                    </td>
                    <td class="w-64 p-7">
                        <img src="{{ asset('images/barang/terasering.png') }}" alt="Apple Watch" class="rounded-lg">
                    </td>
                    <td class="px-1 py-4 font-semibold text-gray-900 text-left">
                        Apple Watch
                        <p href="#">RPP</p>
                    </td>
                    <td class="pl-36 py-4">
                        <div class="flex items-center space-x-3">
                            <button class="inline-flex items-center -p-2 text-sm font-medium text-gray-500 bg-[#0052CC] border border-gray-300 rounded-full focus:outline-none hover:bg-[#277af7] focus:ring-4 focus:ring-gray-200" type="button">
                                <svg class="h-6 w-6 text-white"  width="2" height="2" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/> <line x1="9" y1="12" x2="15" y2="12" /></svg>

                            </button>
                            <div>
                                <input type="number" id="first_product" class="bg-gray-50 w-14  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block px-2.5 py-1 " placeholder="1" required>
                            </div>
                            <button class="inline-flex items-center -p-2 text-sm font-medium text-gray-500 bg-[#0052CC] border border-gray-300 rounded-full focus:outline-none hover:bg-[#277af7] focus:ring-4 focus:ring-gray-200 " type="button">
                                <svg class="h-6 w-6 text-white"  width="2" height="2" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/> <line x1="9" y1="12" x2="15" y2="12" />  <line x1="12" y1="9" x2="12" y2="15" /></svg>
                            </button>
                        </div>
                    </td>
                    <td class="px-6 py-4 font-semibold text-gray-900">
                        $599
                    </td>
                    <td class="px-6 py-4">
                        <button type="button" class="text-white text-md bg-[#DE350B] border hover:bg-[#b72f0d] focus:ring-4 focus:ring-blue-300 font-medium rounded-md text-medium px-6 py-2 focus:outline-none ">Remove Item</button>
                    </td>
                </tr>
            </tbody>
        </table>
        </div>
    </div>
@endsection
