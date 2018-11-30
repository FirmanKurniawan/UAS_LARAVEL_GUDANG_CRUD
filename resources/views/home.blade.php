@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" style="margin-top: 30px;">
  <div class="col-2">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home"><i class="fas fa-home"></i> Home</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile"><i class="fas fa-warehouse"></i> Gudang</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages"><i class="fas fa-clipboard-list"></i> Barang</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings"><i class="fas fa-cog"></i> Settings</a>
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
                      @foreach($gudangs as $gudang)
                      <span class="badge badge-light">
                          {{$gudang->id}}
                      </span>
                      @endforeach
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
                      Jumlah Barang <span class="badge badge-light">20</span>
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
      <td><a href="">Ubah</a></td>
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
    </tr>
  </thead>
    <tbody>
    <tr>
      <th scope="row">1</th>
      <td>1</td>
      <td>Firman</td>
      <td>122523</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>2</td>
      <td>Rirman</td>
      <td>1523</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>3</td>
      <td>Qirman</td>
      <td>125223</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>4</td>
      <td>Wirman</td>
      <td>123523</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>5</td>
      <td>Cirman</td>
      <td>125223</td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>1</td>
      <td>Birman</td>
      <td>15223</td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>2</td>
      <td>Nirman</td>
      <td>12523</td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td>3</td>
      <td>Mirman</td>
      <td>125233</td>
    </tr>
    <tr>
      <th scope="row">9</th>
      <td>4</td>
      <td>Lirman</td>
      <td>2123</td>
    </tr>
    <tr>
      <th scope="row">10</th>
      <td>5</td>
      <td>Pirman</td>
      <td>12323</td>
    </tr>
    <tr>
      <th scope="row">11</th>
      <td>3</td>
      <td>Jirman</td>
      <td>12353</td>
    </tr>
    <tr>
      <th scope="row">12</th>
      <td>1</td>
      <td>Kirman</td>
      <td>123</td>
    </tr>
    <tr>
      <th scope="row">13</th>
      <td>2</td>
      <td>Lirman</td>
      <td>12523</td>
    </tr>
    <tr>
      <th scope="row">14</th>
      <td>5</td>
      <td>Sirman</td>
      <td>15232323</td>
    </tr>
    <tr>
      <th scope="row">15</th>
      <td>2</td>
      <td>Virman</td>
      <td>125233</td>
    </tr>
    <tr>
      <th scope="row">16</th>
      <td>1</td>
      <td>Cirman</td>
      <td>152323</td>
    </tr>
    <tr>
      <th scope="row">17</th>
      <td>1</td>
      <td>Nirman</td>
      <td>1523223</td>
    </tr>
    <tr>
      <th scope="row">18</th>
      <td>2</td>
      <td>Tirman</td>
      <td>15223</td>
    </tr>
    <tr>
      <th scope="row">19</th>
      <td>3</td>
      <td>Yirman</td>
      <td>12523</td>
    </tr>
    <tr>
      <th scope="row">20</th>
      <td>5</td>
      <td>Hirman</td>
      <td>15322</td>
    </tr>
  </tbody>
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
                  Form Gudang <i class="fas fa-angle-down"></i>
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
                  Form Barang <i class="fas fa-angle-down"></i>
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
      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
        <div class="accordion" id="accordionExample"></div>
          <div class="card">
            <div class="card-header bg-primary" id="headingThree">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed text-white" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Settings <i class="fas fa-angle-down"></i>
                </button>
              </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="col-6">
                    <label>Nama</label>
                    <label class="sr-only" for="inlineFormInputGroup">Nama</label>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-user-tie"></i></div>
                      </div>  
                      <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Nama" name="ubah_nama">
                    </div>
                </div>
                <div class="col-6">
                    <label>Email</label>
                    <label class="sr-only" for="inlineFormInputGroup">Email</label>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-at"></i></div>
                      </div>  
                      <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Email" name="ubah_email">
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
          </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
