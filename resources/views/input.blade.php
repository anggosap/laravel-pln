@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

<!-- ------------------------------------------------------------------------------------ -->

<h1>INSERT BUKU</h1>
{!! Form::open(
    array('action' => 'InputController@storebuku')
    )
!!}
    {!! csrf_field() !!}
    <div>
        Kode
        <input type="text" name="kode" value="">
    </div>
    <div>
        Judul
        <input type="text" name="judul" value="">
    </div>
    <div>
        Tahun
        <input type="text" name="tahun" value="">
    </div>
    <div>
        Kategori
        <select name="kategori">
            @if (count($kategoris))
                @foreach($kategoris as $kategori)
                <option value="{{ $kategori->nama_kategori }}">{{ $kategori->nama_kategori }}</option>
                @endforeach
            @endif
        </select>
    </div>
    <div>
        Rak Buku
        <input type="text" name="rakbuku" value="">
    </div>
    <div>
        Deskripsi
        <input type="text" name="deskripsi" value="">
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>
{!! Form::close() !!}

<!-- ------------------------------------------------------------------------------------ -->

<h1>INSERT KATEGORI</h1>
{!! Form::open(
    array('action' => 'InputController@storekategori')
    )
!!}
    {!! csrf_field() !!}
    <div>
        Kategori
        <input type="text" name="nama_kategori" value="">
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>
{!! Form::close() !!}

<!-- ------------------------------------------------------------------------------------ -->

<h1>DELETE BUKU</h1>
{!! Form::open(
    array('action' => 'InputController@deletebuku')
    )
!!}
    <select name="kode">
        @if (count($arsips))
            @foreach($arsips as $arsip)
            <option value='{{ $arsip->kode }}'>{{ $arsip->judul }}</option>
            @endforeach
        @endif
    </select>
    <button type="submit">Delete</button>
{!! Form::close() !!}

<!-- ------------------------------------------------------------------------------------ -->

<h1>DELETE KATEGORI</h1>
{!! Form::open(
    array('action' => 'InputController@deletekategori')
    )
!!}
    <select name="nama_kategori">
        @if (count($kategoris))
            @foreach($kategoris as $kategori)
            <option value="{{ $kategori->nama_kategori }}">{{ $kategori->nama_kategori }}</option>
            @endforeach
        @endif
    </select>
    <button type="submit">Delete</button>
{!! Form::close() !!}