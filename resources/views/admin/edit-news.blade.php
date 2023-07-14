@extends('admin.main')
@include('admin.navbar')
@include('admin.sidebar')
@section('main-admin')
<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="form-step form-step-active">
            <!-- Tahap 1 Biodata -->
                <div class="row" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); padding: 20px; margin-top: 100px; margin-bottom: 100px; border-radius: 5px; background-color:white;">
                <h6>Edit Berita</h6>
                <div class="col-lg-12">
                    <div class="row">
                      <form action="{{url('update-news', $ingfo->id)}}" method="post" enctype="multipart/form-data">
                        {{@csrf_field()}}
                          <div class="input-group">
                            <label for="judul">Judul Berita</label>
                            <input type="text" name="judul" id="judul" value="{{ $ingfo->judul }}">
                          </div>
                          <div class="mb-3">
                            <label for="gambar" class="form-label">Input Gambar</label>
                            <input class="form-control" type="file" id="gambar" name="gambar" value="{{ $ingfo->gambar }}">
                          </div>
                          <div class="mb-3">
                            <img src="{{asset('images/'. $ingfo->gambar)}}" class="my-2" wiingfoh="80%" height="60px" style="border-radius:5px">
                          </div>
                          <div class="mb-3">
                            <label for="caption" class="form-label">caption</label>
                            <textarea class="form-control" id="caption" name="caption" rows="3">{{ $ingfo->caption }}</textarea>
                          </div>
                          <div class="input-group">
                            <label for="tanggal">Tanggal/Bulan/Tahun</label>
                            <input type="date" name="tanggal" id="tanggal" value="{{$ingfo->tanggal}}">
                          </div>
                          <div class="input-group">
                            <button class="btn btn-success" type="submit">Ubah Data</button>
                          </div>
                      </form>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </section>
</div>  

@endsection