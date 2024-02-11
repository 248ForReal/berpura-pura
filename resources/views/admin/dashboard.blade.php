<x-admin-layout>

    <h1>Daftar Mahasiswa</h1>

    <table>
        <tr>
            <th>Nama Lengkap</th>
            <th>Email</th>
            <th>Nomor HP</th>
            <!-- Tambahkan kolom lainnya sesuai kebutuhan -->
        </tr>
        @foreach ($daftarList as $daftar)
        <tr>
            <td>{{ $daftar->nama_lengkap }}</td>
            <td>{{ $daftar->email }}</td>
            <td>{{ $daftar->nomor_hp }}</td>
            <!-- Tambahkan kolom lainnya sesuai kebutuhan -->
        </tr>
        @endforeach
    </table>
</x-admin-layout>
