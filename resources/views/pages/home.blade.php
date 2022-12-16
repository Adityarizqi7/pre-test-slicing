@extends('layouts/test')

@section('title', 'Konsultasi Web - Pre Test Slicing')

@section('meta')
    <meta name="description" content="Konsultas Web.">
    <meta name="keyword" content="konsultasi">
@endsection

@push('styles')
    @vite(['resources/scss/_home.scss'])
@endpush

@section('content')
    <section class="home-component">
        <form id="container_home">
            <div class="headline text-center jost space-y-4 mb-10">
                <h1 class="font-semibold text-3xl text-gray-600">Konsultasi Taman</h1>
                <p>Klik dibawah ini untuk memilih tangal & waktu yang tersedia untuk memanggil konsultan kami</p>
            </div>
            
            <div class="date-clock-picker jost mb-10">
                <div class="flex items-center justify-center gap-6">
                    @include('/components/date')
                    <div class="clock-picker max-w-lg w-full shadow-own">
                        <div class="md:p-8 p-5 bg-white rounded-lg space-y-8">
                            <div class="space-y-1">
                                <h2 class="text-base text-center font-bold text-gray-600">Thursday</h2>
                                <h2 class="text-base text-center font-normal text-gray-600">October 8, 2022</h2>
                            </div>
                            <div class="list-item">
                                <h2 class="text-base font-bold text-gray-600">Pilih Waktu</h2>
                                <h2 class="text-base text-gray-600">Durasi Konsultasi 30 Menit</h2>
                                <div class="item-list-wrapper grid grid-cols-2 gap-4 mt-3">
                                    <div class="item-wrapper text-center py-2 border border-gray-500 rounded-md">
                                        <h2 class="text-blue-600 font-semibold">09.00</h2>
                                    </div>
                                    <div class="item-wrapper text-center py-2 border border-gray-500 rounded-md">
                                        <h2 class="text-blue-600 font-semibold">13.00</h2>
                                    </div>
                                    <div class="item-wrapper text-center py-2 border border-gray-500 rounded-md">
                                        <h2 class="text-blue-600 font-semibold">10.00</h2>
                                    </div>
                                    <div class="item-wrapper text-center py-2 border border-gray-500 rounded-md">
                                        <h2 class="text-blue-600 font-semibold">14.00</h2>
                                    </div>
                                    <div class="item-wrapper text-center py-2 border border-gray-500 rounded-md">
                                        <h2 class="text-blue-600 font-semibold">11.00</h2>
                                    </div>
                                    <div class="item-wrapper text-center py-2 border border-gray-500 rounded-md">
                                        <h2 class="text-blue-600 font-semibold">15.00</h2>
                                    </div>
                                    <div class="item-wrapper text-center py-2 border border-gray-500 rounded-md">
                                        <h2 class="text-blue-600 font-semibold">12.00</h2>
                                    </div>
                                    <div class="item-wrapper text-center py-2 border border-gray-500 rounded-md">
                                        <h2 class="text-blue-600 font-semibold">16.00</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="data-diri-garden shadow-own montserrat">
                <div class="bg-white rounded-lg">
                    {{-- Form Data Diri User --}}
                    <div class="md:p-8 p-5 mb-16">
                        <h2 class="text-lg font-bold text-gray-600">Informasi Data Diri</h2>
                        <div class="flex gap-4 w-full mt-7">
                            <div class="w-full">
                                <label for="name" class="block mb-2 text-sm font-bold text-gray-600">Nama Lengkap</label>
                                <input type="name" id="name" class="shadow-sm border bg-gray-200 border-gray-300 font-semibold text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Yudha Wahyu" required>
                            </div>    
                            <div class="w-full">
                                <label for="phone" class="block mb-2 text-sm font-bold text-gray-600">No HP</label>
                                <input type="phone" id="phone" class="shadow-sm border bg-gray-200 border-gray-300 font-semibold text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="+62 852 2324 4747" required>
                            </div>    
                        </div>
                        <div class="w-full flex gap-4 mt-10">
                            <label for="address" class="block mb-2 text-sm font-bold text-gray-600">Alamat</label>
                            <textarea type="address" id="address" class="shadow-sm border border-green-600 h-36 font-semibold text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 text-left p-8 w-full" placeholder="Jln ..." required>Jl. Lettu. H. Abdul Karim No.73, Bedahan, Kec. Sawangan, Kota Depok, Jawa Barat 16519
                            </textarea>
                        </div>
                    </div>

                    <hr />

                    {{-- Form Konsultasi Taman --}}
                    <div class="md:p-8 p-5">
                        <h2 class="text-lg font-bold text-gray-600">Informasi Konsultasi Taman</h2>
                        <div class="mt-7 w-full space-y-10">
                            <div>
                                <div>
                                    <h3 for="name" class="block mb-2 text-md font-bold text-gray-600">Lahan Taman</h3>
                                    <h3 for="name" class="block mb-2 text-sm font-normal text-gray-600">Pilih jumlah lahan taman yang akan dibuat</h3>
                                    <div class="flex flex-wrap gap-6 mt-3">
                                        <div class="item-wrapper text-center py-2 px-4 border border-green-600 rounded-md">
                                            <h2 class="text-green-600 font-semibold">1 Lahan Taman</h2>
                                        </div>
                                        <div class="item-wrapper text-center py-2 px-4 border border-green-600 rounded-md">
                                            <h2 class="text-green-600 font-semibold">2 Lahan Taman</h2>
                                        </div>
                                        <div class="item-wrapper text-center py-2 px-4 border border-green-600 rounded-md">
                                            <h2 class="text-green-600 font-semibold">Lebih dari 2 Lahan Taman</h2>
                                        </div>
                                    </div>
                                </div>   
                            </div>    
                            <div class="w-full">
                                <h3 for="name" class="mb-2 text-md font-bold text-gray-600">Lahan Taman</h3>
                                <h3 for="name" class="mb-2 text-sm font-normal text-gray-600">Pilih tema taman yang akan dibuat</h3>
                                <div class="p-4 mb-4 text-sm bg-yellow-100 rounded-lg mt-5 text-gray-800" role="alert">
                                    <span class="font-bold">Catatan :</span> <span class="font-medium">Jika anda belum memiliki inspirasi tema taman maka anda bsia melewati tahapan ini, konsultan kami akan memberikan rekomendasi terbaik untuk taman anda.</span>
                                </div>
                                <div class="grid md:grid-cols-3 sm:grid-cols-2 grid-cols-1 mt-12 gap-8 montserrat">
                                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md">
                                        <img class="rounded-t-lg object-cover w-full h-60" src="https://new-okegarden-sgp.s3.ap-southeast-3.amazonaws.com/laravel/design/_ImageF_611e1a1f5b0f4081501f5d7efa7d565d.jpg" alt="Taman Minimalis" />
                                        <div class="p-5 relative">
                                            <h5 class="mb-2 text-md font-bold text-gray-600">Taman Minimalis</h5>
                                            <p class="mb-14 font-normal text-md text-gray-600">Taman yang indah dilahan yang sempit</p>
                                            <div class="flex">
                                                <a href="https://okegarden.com/ensiklopedia-design/show/87" class="text-sm ml-auto font-medium text-center text-green-600 underline underline-offset-4">
                                                    Pilih
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md">
                                        <img class="rounded-t-lg object-cover w-full h-60" src="https://new-okegarden-sgp.s3.ap-southeast-3.amazonaws.com/laravel/design/_ImageF_7e49c005bde77099bbdf4ed616a5acb7.jpg" alt="Taman Kering" />
                                        <div class="p-5 relative">
                                            <h5 class="mb-2 text-md font-bold text-gray-600">Taman Kering</h5>
                                            <p class="mb-14 font-normal text-md text-gray-600 line-clamp-2">Taman yang dirancang untuk menghasilkan suasana alam didalam dan dilaur rumah</p>
                                            <div class="flex">
                                                <a href="https://okegarden.com/ensiklopedia-design/show/90" class="text-sm ml-auto font-medium text-center text-green-600 underline underline-offset-4">
                                                    Pilih
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md">
                                        <img class="rounded-t-lg object-cover w-full h-60" src="https://new-okegarden-sgp.s3.ap-southeast-3.amazonaws.com/laravel/design/_ImageF_493f4beb6988ff73faeebcd9ea1bc52f.jpg" alt="Taman Tropis" />
                                        <div class="p-5 relative">
                                            <h5 class="mb-2 text-md font-bold text-gray-600">Taman Tropis</h5>
                                            <p class="mb-14 font-normal text-md text-gray-600">Taman yang paling sesuai dengan iklim di Indonesia</p>
                                            <div class="flex">
                                                <a href="https://okegarden.com/ensiklopedia-design/show/101" class="text-sm ml-auto font-medium text-center text-green-600 underline underline-offset-4">
                                                    Pilih
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                            <div class="w-full">
                                <h3 for="name" class="mb-2 text-md font-bold text-gray-600">Estimasi Ukuran Taman</h3>
                                <div class="flex flex-wrap gap-6 mt-3">
                                    <div class="item-wrapper text-center py-1 px-2 border border-green-600 rounded-md">
                                        <h2 class="text-green-600 font-semibold"> 10m2 </h2>
                                    </div>
                                    <div class="item-wrapper text-center py-1 px-2 border border-green-600 rounded-md">
                                        <h2 class="text-green-600 font-semibold"> 11-20m2 </h2>
                                    </div>
                                    <div class="item-wrapper text-center py-1 px-2 border border-green-600 rounded-md">
                                        <h2 class="text-green-600 font-semibold"> 21-30m2 </h2>
                                    </div>
                                    <div class="item-wrapper text-center py-1 px-2 border border-green-600 rounded-md">
                                        <h2 class="text-green-600 font-semibold"> 31-40m2 </h2>
                                    </div>
                                    <div class="item-wrapper text-center py-1 px-2 border border-green-600 rounded-md">
                                        <h2 class="text-green-600 font-semibold"> 41-50m2 </h2>
                                    </div>
                                    <div class="item-wrapper text-center py-1 px-2 border border-green-600 rounded-md">
                                        <h2 class="text-green-600 font-semibold"> 51-60m2 </h2>
                                    </div>
                                    <div class="item-wrapper text-center py-1 px-2 border border-green-600 rounded-md">
                                        <h2 class="text-green-600 font-semibold"> >100m2 </h2>
                                    </div>
                                </div>
                            </div>

                            <div class="w-full flex ml-auto mt-10">
                                <div class="ml-auto flex gap-3 mt-8">
                                    <div class="item-wrapper text-center py-1 px-2 bg-gray-200 rounded-md">
                                        <h2 class="text-green-600 font-semibold"> Batal </h2>
                                    </div>
                                    <div class="item-wrapper text-center py-1 px-2 bg-green-600 rounded-md">
                                        <h2 class="text-white font-semibold"> Oke </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection