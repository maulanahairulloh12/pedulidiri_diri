@extends('layout.master')
@section('content')

<div class="col">
<div class="card bg-default shadow">
            <div class="card-header bg-transparent border-0">
              <h1 class="text-white mb-0">Table Perjalanan</h1>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-dark table-flush">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Tanggal Perjalanan</th>
                    <th scope="col">Jam</th>
                    <th scope="col">Suhu</th>
                    <th scope="col">Lokasi</th>
                    <th>Aksi</th>
                  </tr>
                  @foreach($perjalans as $perjalan => $p)
                  <tr>
                    <th scope="col">{{$perjalan+1}}</th>
                    <th scope="col">{{$p->tanggal}}</th>
                    <th scope="col">{{$p->jam}}</th>
                    <th scope="col">{{$p->suhu}}°</th>
                    <th scope="col">{{$p->lokasi}}</th>
                    
                    <th><a href="/perjalananan/{{$p->id}}/delete" class="btn btn-danger btn-sm">delete</a></th>

                  </tr>
                  @endforeach
                </thead>
         
              </table>
            </div>
          </div>
          <!-- Button trigger modal -->
<button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-top:20px;" >
  Tambah
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
       
      <form action="/perjalanan/create" method="POST">
  @csrf
      <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Tanggal</label>
    <input name="tanggal" type="date" class="form-control" id="tanggal" aria-describedby="emailHelp">
    </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Jam</label>
    <input name="jam" type="time" class="form-control" id="jam" >
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Suhu</label>
      <input name="suhu" type="text" class="form-control" id="suhu" aria-describedby="emailHelp">
    
  </div> <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Lokasi</label>
    <input name="lokasi" type="text" class="form-control" id="lokasi" aria-describedby="emailHelp">  
  </div>
  <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save changes</button>
        <button type="" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
 </form>

      </div>
      
    </div>
  </div>
</div>
        </div>



@stop