@extends('layouts.dashboard')

@section('content')
<div class="container-fluid h-100 bg-light text-dark">
    <div class="row justify-content-center align-items-center">
        <h4>Categorie's table</h4>
    </div>
    <hr>
    @if (count($categories))
     <table class="table table-hover table-sm" style="color:#333">
        <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Name Categorie</th>
              <th scope="col">Edit Categorie</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($categories as $categorie)
                  <tr>
                      <th scope="row">{{$i++}}</th>
                      <td>{{$categorie->name_categorie}}</td>
                      <td>
                          <button class="btn btn-sm btn-outline-info" name="edit_categorie" data-toggle="modal" data-target="#exampleModal">Edit</button>
                          <button class="btn btn-sm btn-outline-danger" name="delete_categorie">delete</button>
                      </td>
                  </tr>
              @endforeach
          </tbody>
     </table>
     @else
     <div class="row justify-content-center align-items-center">
            <h5>Categorie's table is Empty</h5>
     </div>
     @endif
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="">
              @csrf
              <div class="form-group">
                  <label for="name_categorie">Name categorie</label>
                  <input type="text" class="form-control" id="name_categorie">
              </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" name="submit">Save changes</button>
        </div>
      </div>
    </div>
  </div>
@endsection
