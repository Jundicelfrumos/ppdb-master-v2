@extends('admin.main-news')
@include('admin.navbar')
@include('admin.sidebar')
@section('main-admin')
<div class="main-content">
        <section class="section">
          <div class="section-body">
                <div class="card">
                  <div class="card-header">
                    <h4>Jurnal</h4>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <a class="add-link" href="{{route('create-news')}}">
                          <button class="btn btn-primary mb-3"><i class="fa-solid fa-plus clop mr-2"></i>Tambah</button>
                        </a>
                      </div>
                    </div>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Caption</th>
                            <th scope="col">Tanggal/Bulan/Tahun</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($berita as $item)
                          <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><img src="{{$item->gambar}}" class="my-2" width="100%" height="60px" style="border-radius:5px"></td>
                            <td>{{$item->judul}}</td>
                            <td><span class="text-limit">{!! $item->caption !!}</span></td>
                            <td>{{$item->tanggal}}</td>
                            <td>
                              <a href="{{url('edit-news',$item->id)}}" class="p-3 my-1 btn btn-success edit-button">
                                <i class="fa-solid fa-pen-to-square"></i>
                              </a>
                              <a href="{{url('delete-news',$item->id)}}" class="p-3 my-1 btn btn-danger delete-button">
                                <i class="fa-solid fa-trash"></i>
                              </a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                    </table>
                  </div>
                </div>
        </section>
      </div> 

@endsection