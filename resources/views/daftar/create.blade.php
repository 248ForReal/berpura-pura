<x-admin-layout>

    <h1>Input Data Daftar</h1>

    <form method="post" action="/daftar">
        @csrf

        <label for="kampus_id">Kampus ID:</label><br>
        <input type="text" id="kampus_id" name="kampus_id"><br>

        <button type="button" onclick="openModal()">Cari Kampus</button><br><br>

        <div id="myModal" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeModal()">&times;</span>
                <input type="text" id="searchInput" placeholder="Cari nama kampus...">
                <div id="kampusList" style="max-height: 200px; overflow-y: auto;">
                    @foreach($kampusList as $index => $kampus)
                    <p onclick="selectKampus('{{ $kampus->npsn }}')" style="@if($index >= 10) display: none; @endif">{{
                        $kampus->nama_sekolah }}</p>
                    @endforeach
                </div>

            </div>
        </div>

        <label for="semester">Semester:</label><br>
        <select id="semester" name="semester">
            @for ($i = 1; $i <= 14; $i++) <option value="{{ $i }}">{{ $i }}</option>
                @endfor
        </select><br>

        <label for="nama_lengkap">Nama Lengkap:</label><br>
        <input type="text" id="nama_lengkap" name="nama_lengkap"><br>

        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email"><br>

        <label for="nomor_hp">Nomor HP:</label><br>
        <input type="text" id="nomor_hp" name="nomor_hp"><br>

        <label for="nomor_wa">Nomor WA:</label><br>
        <input type="text" id="nomor_wa" name="nomor_wa"><br>

        <label for="hobi">Hobi:</label><br>
        <select id="hobi" name="hobi">
            <option value="musik">Musik</option>
            <option value="games">Games</option>
            <option value="video">Video</option>
            <option value="bisnis">Bisnis</option>
        </select><br>


        <label for="tempat_nongkrong_favorit">Tempat Nongkrong Favorit:</label><br>
        <input type="text" id="tempat_nongkrong_favorit" name="tempat_nongkrong_favorit"><br>

        <button type="submit">Simpan</button>
    </form>

    <script>
        function openModal() {
            document.getElementById("myModal").style.display = "block";
        }
        function closeModal() {
        document.getElementById("myModal").style.display = "none";
    }
        function selectKampus(npsn) {
            document.getElementById("kampus_id").value = npsn;
            document.getElementById("myModal").style.display = "none";
        }

        document.getElementById("searchInput").addEventListener("input", function() {
            var input, filter, kampusList, p, i, txtValue;
            input = document.getElementById('searchInput');
            filter = input.value.toUpperCase();
            kampusList = document.getElementById("kampusList");
            p = kampusList.getElementsByTagName('p');

            for (i = 0; i < p.length; i++) {
                txtValue = p[i].textContent || p[i].innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    p[i].style.display = "";
                } else {
                    p[i].style.display = "none";
                }
            }
        });
    </script>
</x-admin-layout>
