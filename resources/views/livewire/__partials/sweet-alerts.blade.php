@if (session()->has('success'))
<div wire:ignore id="myToast" class="relative sticky top-0 px-5 py-4 border-r-8 border-blue-500 bg-white drop-shadow-lg">
    <p class="text-sm">
        <!-- Polish the toast with an circle blue "i" (stands for information) -->
        <span class="mr-2 inline-block px-3 py-1 rounded-full bg-purple-700 text-white font-extrabold">i</span>
        {{ session('success') }}
    </p>
</div>
@endif

@if (session()->has('error'))
<div wire:ignore id="myToast" class="relative sticky top-0 px-5 py-4 border-r-8 border-blue-500 bg-white drop-shadow-lg">
    <p class="text-sm">
        <!-- Polish the toast with an circle blue "i" (stands for information) -->
        <span class="mr-2 inline-block px-3 py-1 rounded-full bg-red-500 text-white font-extrabold">X</span>
        {{ session('error') }}
    </p>
</div>
@endif

@if (session()->has('warning'))
<div wire:ignore id="myToast" class="relative sticky top-0 px-5 py-4 border-r-8 border-orange-500 bg-white drop-shadow-lg">
    <p class="text-sm">
        <!-- Polish the toast with an circle blue "i" (stands for information) -->
        <span class="mr-2 inline-block px-3 py-1 rounded-full bg-blue-500 text-white font-extrabold">?</span>
        {{ session('warning') }}
    </p>
</div>
@endif

@if (session()->has('info'))
<div wire:ignore id="myToast" class="relative sticky top-0 px-5 py-4 border-r-8 border-blue-500 bg-white drop-shadow-lg">
    <p class="text-sm">
        <!-- Polish the toast with an circle blue "i" (stands for information) -->
        <span class="mr-2 inline-block px-3 py-1 rounded-full bg-blue-200 text-white font-extrabold">i</span>
        {{ session('info') }}
    </p>
</div>
@endif