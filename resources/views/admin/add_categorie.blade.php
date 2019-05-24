@extends('layouts.dashboard')

@section('content')
<div class="container-fluid h-100 bg-light text-dark">
     <div class="row justify-content-center align-items-center">
         <h4>Add Categorie</h4>
     </div>
    <hr/>
    <div class="row justify-content-center align-items-center h-100">
        <div class="col col-xm-8 col-sm-8 col-md-6 col-lg-6 col-xl-6">
            <form method="POST" action="{{route('categorie.store')}}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="categorie">Name Categorie</label>
                    <input name="name_categorie" type="text" class="form-control" id="categorie" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
