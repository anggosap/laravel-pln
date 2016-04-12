{!! Form::open(
    array('action' => 'SearchController@search')
    )
!!}
{!! csrf_field() !!}
    <div>
        Judul : 
        <input type="text" name="search" placeholder="Search..." value="">
        <select name="kategori">
            <option value='all'>All</option>
            @if (count($kategoris))
                @foreach($kategoris as $kategori)
                <option value='{{ $kategori->nama_kategori }}'>{{ $kategori->nama_kategori }}</option>
                @endforeach
            @endif
        </select>
        <button type="submit">Submit</button>
    </div>
{!! Form::close() !!}

@if (count($arsip))
    @foreach($arsip as $arsip)
    <br>
    kode = {{ $arsip->kode }} <br>
    judul = {{ $arsip->judul }} <br>
    tahun = {{ $arsip->tahun }} <br>
    kategori = {{ $arsip->kategori }} <br>
    rak buku = {{ $arsip->rakbuku }} <br>
    deskripsi = {{ $arsip->deskripsi }} <br> 
    @endforeach
@endif