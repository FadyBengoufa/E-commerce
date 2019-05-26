@extends('layouts.dashboard')

@section('content')
<div class="container-fluid h-100 text-dark">
    <div class="row justify-content-center align-items-center">
        <h4>Categorie's table</h4>
    </div>
    <hr>
    @if(session('catgorie_edited'))
        <div class="alert alert-primary" role="alert">
                {{session('catgorie_edited')}}
        </div>
    @endif
    @if(session('catgorie_deleted'))
        <div class="alert alert-danger" role="alert">
                {{session('catgorie_deleted')}}
        </div>
    @endif
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
                          <a class="btn btn-outline-info btn-sm" href="{{route('categorie.edit',$categorie->id_categorie)}}">Edit</a>
                      </td>
                      <td>
                          <form action="{{route('categorie.destroy',$categorie->id_categorie)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-outline-danger btn-sm">Delete</button>
                          </form>
                      </td>
                  </tr>
              @endforeach
          </tbody>
     </table>
     {{$categories->links()}}
     @else
     <div class="row justify-content-center align-items-center">
            <h5>Categorie's table is Empty</h5>
     </div>
     @endif
</div>
@endsection
