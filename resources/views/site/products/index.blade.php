
@extends('layouts.site')
@section('content')
    <div class="mx-auto grid max-w-2xl auto-rows-fr grid-cols-1 gap-8 sm:mt-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
 @foreach($products as $product)
     <div class="bg-white flex flex-row">
         <div class="mx-auto max-w-2xl px-4 sm:px-6 sm:py-14 lg:max-w-7xl lg:px-8">
             <h2 class="text-3xl font-bold tracking-tight text-gray-900 text-center mb-5"> {!! $product->name  !!}</h2>

             <div class="">
                 <div class="group relative">
                     <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                         <img src="https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-02.jpg" alt="Front of plain black t-shirt." class="h-full w-full object-cover object-center sm:h-full sm:w-full">
                     </div>
                     <div class="mt-4 flex justify-between">
                         <div >
                             <h3 class="text-sm text-gray-700">
                                 <a href="#">
                                     <span aria-hidden="true" class="absolute inset-0"></span>
                                     {!! $product->name  !!} </a>
                             </h3>
                             <p class="mt-1 text-sm text-gray-500">Black</p>
                         </div>
                         <p class="text-sm font-medium text-gray-900">$ {{  $product->price  }}</p>
                     </div>
                 </div>
             </div>
         </div>
     </div>

 @endforeach
@endsection
    </div>
