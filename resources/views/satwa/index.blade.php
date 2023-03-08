<h1>Data Satwa Masuk</h1>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Satwa</th>
            <th>Kategori</th>
            <th>Tanggal Masuk</th>
            <th>Foto</th>
            <th>Keterangan</th>
        </tr>
    </thead>
    <tbody>
        @foreach($satwa_masuk as $satwa)
        <tr>
            <td>{{ $satwa->id }}</td>
            <td>{{ $satwa->nama_satwa }}</td>
            <td>{{ $satwa->kategori }}</td>
            <td>{{ $satwa->tgl_masuk }}</td>
            <td><img src="{{ asset('storage/'.$satwa->foto) }}" alt="{{ $satwa->nama_satwa }}" width="100"></td>
            <td>{{ $satwa->keterangan }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<h1>Data Satwa Keluar</h1>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Satwa</th>
            <th>Kategori</th>
            <th>Tanggal Keluar</th>
            <th>Foto</th>
            <th>Keterangan</th>
        </tr>
    </thead>
    <tbody>
        @foreach($satwa_keluar as $satwa)
        <tr>
            <td>{{ $satwa->id }}</td>
            <td>{{ $satwa->nama_satwa }}</td>
            <td>{{ $satwa->kategori }}</td>
            <td>{{ $satwa->tgl_keluar }}</td>
            <td><img src="{{ asset('storage/'.$satwa->foto) }}" alt="{{ $satwa->nama_satwa }}" width="100"></td>
            <td>{{ $satwa->keterangan }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

