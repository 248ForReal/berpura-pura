<x-admin-layout>
    <h1>Daftar Mahasiswa</h1>

    <table>
        <tr>
            <th>Kampus</th>
            <th>Semester</th>
            <th>Nama Lengkap</th>
            <th>Email</th>
            <th>Nomor HP</th>
            <th>Nomor WA</th>
            <th>Hobi</th>
            <th>Tempat Nongkrong Favorit</th>

        </tr>
        @foreach ($daftarList as $daftar)
        <tr>
            <td>{{ $daftar->kampus->nama_sekolah }}</td>
            <td>{{ $daftar->semester }}</td>
            <td>{{ $daftar->nama_lengkap }}</td>
            <td>{{ $daftar->email }}</td>
            <td>{{ $daftar->nomor_hp }}</td>
            <td>{{ $daftar->nomor_wa }}</td>
            <td>{{ $daftar->hobi }}</td>
            <td>{{ $daftar->tempat_nongkrong_favorit }}</td>

        </tr>
        @endforeach
    </table>
</x-admin-layout>
