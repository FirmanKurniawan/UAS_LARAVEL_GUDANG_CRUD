@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" style="margin-top: 30px;">
  <div class="col-2">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home"><i class="fas fa-home"></i> Home</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile"><i class="fas fa-warehouse"></i> Gudang</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages"><i class="fas fa-clipboard-list"></i> Barang</a>
    </div>
  </div>
  <div class="col-9">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
        <div class="accordion" id="accordionExample"></div>
        <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header bg-primary" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link text-white" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Jumlah Gudang dan Barang
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
                <form>
                  <div class="col-6">
                    <label>Jumlah Gudang</label>
                    <label class="sr-only" for="inlineFormInputGroup">Jumlah Gudang</label>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-sort-numeric-up"></i></div>
                      </div>  
                      <button type="button" class="btn btn-primary">
                      Jumlah Gudang
                      <span class="badge badge-light">
                          {{$gudangs1}}
                      </span>
                      </button>
                    </div>
                  </div>
                  <div class="col-6">
                    <label>Jumlah Barang</label>
                    <label class="sr-only" for="inlineFormInputGroup">Jumlah Barang</label>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-sort-numeric-up"></i></div>
                      </div>  
                      <button type="button" class="btn btn-primary">
                      Jumlah Barang
                      <span class="badge badge-light">{{$barangs1}}</span>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header bg-primary" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed text-white" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Daftar Gudang
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Alamat</th>
      <th scope="col">Kapasitas</th>
      <th scope="col">Picture</th>
      <th colspan="2" style="justify-content: center;">Edit</th>
    </tr>
  </thead>
  @foreach ($gudangs as $gudang)
   <tbody>
    <tr>
      <th scope="row">{{$gudang->id}}</th>
      <td>{{$gudang->alamat}}</td>
      <td>{{$gudang->kapasitas}}</td>
      <td><img src="{{url('/picture/',$gudang->pict)}}" style="width: 5%;height: 5%;"> {{$gudang->pict}}</td>
      <td><a href="{{url('gudang/edit',$gudang->id)}}">Ubah</a></td>
      <td><a href="{{url('gudang/delete',$gudang->id)}}">Hapus</a></td> 
    </tr>
  </tbody>
  @endforeach
</table>
    </div>
  </div>
  <div class="card">
    <div class="card-header bg-primary" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed text-white" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Daftar Barang
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Gudang ID</th>
      <th scope="col">Nama</th>
      <th scope="col">Berat</th>
      <th colspan="2">Edit</th>
    </tr>
  </thead>
    
    @foreach ($barangs as $key)
    <tbody>
    <tr>
      <th scope="row">{{$key->id}}</th>
      <td>{{$key->gudang_id}}</td>
      <td>{{$key->nama}}</td>
      <td>{{$key->berat}}</td>
      <td><a href="{{url('barang/edit',$key->id)}}">Ubah</a></td>
      <td><a href="{{url('barang/delete',$key->id)}}">Hapus</a></td>
    </tr>
  </tbody>
    @endforeach
    
</table>
    </div>
  </div>
</div>
      </div>
      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
        <div class="accordion" id="accordionExample"></div>
          <div class="card">
            <div class="card-header bg-primary" id="headingThree">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed text-white" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Tambah Gudang <i class="fas fa-angle-down"></i>
                </button>
              </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body">
                <form action="{{url('gudang/save')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                  <div class="form-row">
                    <div class="col-12">
                    <label>Alamat</label>
                    <label class="sr-only" for="inlineFormInputGroup">Alamat</label>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-map-marker-alt"></i></div>
                      </div>
                      <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Alamat" name="alamat">
                    </div>
                  </div>
                  <div class="col-6">
                    <label>Kapasitas</label>
                    <label class="sr-only" for="inlineFormInputGroup">Kapasitas</label>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-sort-numeric-up"></i></div>
                      </div>  
                      <input type="number" class="form-control" id="inlineFormInputGroup" placeholder="Kapasitas" name="kapasitas">
                    </div>
                  </div>
                  <div class="col-6">
                    <label>Picture</label>
                    <label class="sr-only" for="inlineFormInputGroup">Name</label>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-user-shield"></i></div>
                      </div>
                      <input type="file" id="inlineFormInputGroup" placeholder="Picture" name="gambar">
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="input-group mb-2">
                      <button type="submit" class="form-control" id="inlineFormInputGroup"><a href="" class="">
                        <i class="fa fa-paper-plane"></i>
                        Submit
                      </a></button>
                    </div>
                  </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
      </div>
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
        <div class="accordion" id="accordionExample"></div>
          <div class="card">
            <div class="card-header bg-primary" id="headingThree">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed text-white" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Tambah Barang <i class="fas fa-angle-down"></i>
                </button>
              </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body">
                <form action="{{url('barang/save')}}" method="POST">
                    @csrf
                  <div class="form-row">
                    <div class="col-6">
                    <label>Nama</label>
                    <label class="sr-only" for="inlineFormInputGroup">Nama</label>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-user-tie"></i></div>
                      </div>
                      <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Nama" name="nama">
                    </div>
                  </div>
                  <div class="col-6">
                    <label>Berat</label>
                    <label class="sr-only" for="inlineFormInputGroup">Berat</label>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-balance-scale"></i></div>
                      </div>  
                      <input type="number" class="form-control" id="inlineFormInputGroup" placeholder="Berat" name="berat">
                    </div>
                  </div>
                  <div class="col-12">
                    <label>ID Gudang</label>
                    <label class="sr-only" for="inlineFormInputGroup">ID Gudang</label>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-id-card-alt"></i></i></div>
                      </div>
                      <select name="gudang_id">
                          <option>Pilih ID Gudang</option>
                          @foreach($gudangs as $gudang)
                            <option value="{{$gudang->id}}">{{$gudang->id}}</option>
                          @endforeach
                      </select> 
                      <!-- <input type="" class="form-control" id="inlineFormInputGroup" placeholder="Id Gudang" name="berat"> -->
                    </div>
                  </div>
                  <div class="col-2">
                    <div class="input-group mb-2">
                      <button type="submit" class="form-control" id="inlineFormInputGroup"><a href="" class="">
                        <i class="fa fa-paper-plane"></i>
                        Submit
                      </a></button>
                    </div>
                  </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
