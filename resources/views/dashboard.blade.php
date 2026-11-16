<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Petugas Kasir') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-gray-900 font-bold text-lg">
                    {{ __("Selamat datang, ") }} {{ Auth::user()->name }}! 🍿
                </div>
            </div>

            <!-- Menu Pintasan TixNow -->
            <div class="grid grid-cols-2 gap-4">
                <a href="{{ url('/movies') }}" class="block bg-blue-500 hover:bg-blue-700 text-white text-center font-bold py-4 rounded shadow">
                    🎬 Kelola Data Film
                </a>
                <a href="{{ url('/bookings') }}" class="block bg-green-500 hover:bg-green-700 text-white text-center font-bold py-4 rounded shadow">
                    🎫 Kelola Pemesanan Tiket
                </a>
            </div>
            
        </div>
    </div>
</x-app-layout>