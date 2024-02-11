<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @isset($daftarEntries)
                    @if($daftarEntries->isEmpty())
                        <p>Daftar Entries tidak tersedia.</p>
                    @else
                        <h3 class="text-lg font-semibold mb-4">Daftar Entries</h3>
                        <ul>
                            @foreach ($daftarEntries as $daftar)
                                <li>{{ $daftar->nama_lengkap }}</li>
                            @endforeach
                        </ul>
                        {{ $daftarEntries->links() }} <!-- Menampilkan pagination jika diperlukan -->
                    @endif
                @else
                    <p>Daftar Entries tidak tersedia.</p>
                @endisset
            </div>
        </div>
    </div>
</x-admin-layout>
