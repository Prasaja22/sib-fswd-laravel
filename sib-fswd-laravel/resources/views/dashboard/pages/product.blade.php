@extends('dashboard.layouts')

@section('side')

<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="#" target="_blank">
        <img src="../assets/img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">Dashboard</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="#">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Produk</span>
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="#">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">

              </div>
              <span class="nav-link-text ms-1">Kategori</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="{{ '/products' }}">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">

              </div>
              <span class="nav-link-text ms-1">Daftar Produk</span>
            </a>
          </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">

            </div>
            <span class="nav-link-text ms-1">Grup Pengguna</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{ '/customer' }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">

            </div>
            <span class="nav-link-text ms-1"> User </span>
          </a>
        </li>
      </ul>
    </div>
  </aside>

@endsection

@section('table')

<div class="row mt-4">
    <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h6>Product Table</h6>
<!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Tambah Produk
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="post" action="{{ '/add-product' }}" >
                @csrf
                <div class="form-group">
                  <label for="exampleFormControlInput1">Name</label>
                  <input name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama Produk">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Type</label>
                    <input name="type" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Type Produk">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Jenis</label>
                    <input name="jenis" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Jenis">
                  </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
              </form>
        </div>
      </div>
    </div>
  </div>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">No</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Product</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Type</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                    <th class="text-secondary opacity-7"></th>
                  </tr>
                </thead>
                <tbody>

                    @forelse ($car as $item)
                    <tr>
                        <td>
                            <p class="text-xs font-weight-bold mb-0">{{ $loop->iteration }}</p>
                        </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{ $item->name }}</h6>
                            <p class="text-xs text-secondary mb-0">{{ $item->type }}</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $item->jenis }}</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">Active</span>
                      </td>
                      <td class="align-middle">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $item->id }}">
                            Edit
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Produk</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="{{ '/edit-product' }}" >
                                        @method('put')
                                        @csrf
                                        <div class="form-group">
                                        <label for="exampleFormControlInput1">Name</label>
                                        <input name="id" type="hidden" class="form-control" id="exampleFormControlInput1" placeholder="Nama Produk" value=" {{ $item->id }} ">
                                        <input name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama Produk" value=" {{ $item->name }} ">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Type</label>
                                            <input name="type" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Type Produk" value=" {{ $item->type }} " >
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Jenis</label>
                                            <input name="jenis" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Jenis" value=" {{ $item->jenis }} ">
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success">Save changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            </div>
                        </div>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#editmodal{{ $item->id }}">
                        Hapus
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="editmodal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Peringatan!</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <p>Apakah anda yakin ingin menghapus produk?</p>
                                </div>
                                <div class="modal-footer">
                                    <form action="/hapus-product" method="post">
                                        @csrf
                                        @method('delete')
                                        <input name="id" type="hidden" class="form-control" id="exampleFormControlInput1" placeholder="Nama Produk" value=" {{ $item->id }} ">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success">Save changes</button>
                                    </form>
                                </div>
                            </div>
                            </div>
                        </div>
                      </td>
                    </tr>

                    @empty

                    @endforelse

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

          <button class="carousel-control-prev w-5 me-3" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next w-5 me-3" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </div>

@endsection


