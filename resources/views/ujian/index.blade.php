<h2>Data Ujian</h2>
<br>
    <a href="{{ route('ujian.add')}}" class="btn btn-primary">Tambah Data</a>
<div class="col">
   <table class="table table-striped">
      <thead>
         <tr>
            <th>No</th>
            <th>Nama Matakuliah</th>
            <th>Dosen</th>
            <th>Jumlah Soal</th>
            <th>Keterangan</th>
            <th>Aksi</th>
         </tr>
      </thead>
      <tbody>
         @foreach ($ujians as $ujian)
         <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $ujian->nama_mk }}</td>
            <td>{{ $ujian->dosen }}</td>
            <td>{{ $ujian->jumlah_soal }}</td>
            <td>{{ $ujian->keterangan }}</td>
            <td>Hapus</td>
         </tr>
         @endforeach
      </tbody>
   </table>
</div>