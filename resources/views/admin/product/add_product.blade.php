@extends('layouts.dashboard')

@section('content')
<div class="container-fluid h-100 text-dark">
    <div class="row justify-content-center align-items-center">
        <h4>Add Product</h4>
    </div>
   <hr/>
   @if(session('product_created'))
       <div class="alert alert-success" role="alert">
               {{session('product_created')}}
       </div>
   @endif
   <div class="row justify-content-center align-items-center h-100">
       <div class="col col-xm-8 col-sm-8 col-md-6 col-lg-6 col-xl-6">
           <form method="POST" action="{{route('product.store')}}">
               @csrf
               <div class="form-group">
                <label for="categorie">Name Categorie</label>
                <select class="form-control" name="name_categorie" id="categorie">
                    @if(count($categories))
                      @foreach ($categories as $categorie)
                        <option>{{$categorie->name_categorie}}</option>
                      @endforeach
                    @else
                        <option disabled>No categories available</option>
                    @endif
                </select>
            </div>
               <div class="form-group">
                   <label for="product">Name Product</label>
                   <input name="name_product" type="text" class="form-control" id="product" required>
               </div>
               <div class="form-group">
                    <label for="description">Description</label>
                   <textarea class="form-control" name="description" id="description" cols="30" rows="5"></textarea>
               </div>
               <div class="form-group">
                <label for="price">Price Range</label>
                <input name="price" type="text" id="price" style="border:0; color:#f6931f; font-weight:bold;" required>
                <div id="price_slider"></div>
               </div>
                <!--form>
                    <div class="form-group">
                        <label for="product_image">Product image</label>
                        <input type="file" name="product_image" class="form-control-file" id="product_image">
                    </div>
                </form-->
               <button type="submit" class="btn btn-primary">Submit</button>
           </form>
       </div>
   </div>
</div>
@endsection
