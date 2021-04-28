@extends('template')

@section('content')

<div>
  <h2>Input Data</h2>
  <form action="{{ route('ujian.save') }}" method="post">
    @csrf
    <div class="form-group">
       <label>Nama Matakuliah</label>
       <input type="text" name="nama_mk" class="form-control">
    </div>
    <div class="form-group">
       <label>Dosen</label>
       <textarea name="dosen" class="form-control"></textarea>
    </div>
    <div class="form-group">
       <label>Jumlah Soal</label>
       <input type="number" name="jumlah_soal" class="form-control">
    </div>
    <div class="form-group">
       <label>Keterangan</label>
       <input type="text" name="keterangan" class="form-control">
    </div>
    <br>
    <input type="submit" name="submit" value="Save Data" class="btn btn-primary">
    <a href="{{ route('ujian.index') }}" class="btn btn-secondary">Cencel</a>
  </form>
</div>

@endsection

Route::get('/profile', function () {
    return view('profile');
})

//route untuk produk product
route::get('product', 'productContriller@index')->name('product.index');

//Route::resource('product', 'ProductControLLer');
route::get('product/add', 'productContriller@add')->name('product.add');
route::post('product/save', 'productContriller@save')->name('product.save');

//route untuk ujian
route::get('ujian', 'UjianContriller@index')->name('ujian.index');
route::get('ujian/add', 'UjianContriller@add')->name('ujian.add');
route::get('ujian/save', 'UjianContriller@save')->name('ujian.save');