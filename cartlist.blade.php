<<<<<<< HEAD
@extends('master')
@section('content')
<div class="custom-product">
<div class="col-sm-10">
<div class="trending-wrapper">
  <h1>Cart List</h1>
      @foreach($item as $product)
     <div class="row search-item cart-list-divider">
      <div class="col-sm-4">
       <a href="detail/{{ $product->id }}">
        <img class="trending-img" src="{{ $product->gallery }}">
       </a>
      </div>
   <div class="col-sm-4">
    <div class="">
      <h3>{{ $product->name }}</h3>
      <h3>{{ $product->description }}</h3>
    </div> 
    </div> 
    <div class="col-sm-4">

      <a href="/removecart/{{ $product->id  }}" onclick="return confirm('Are you sure you want to remove this item from cart?');" class="btn btn-danger">Remove to cart</a>
    
   </div>
 </div>
 <br>
@endforeach

</div>
</div>
</div>
@endsection   
=======
@extends('master')
@section('content')
<div class="custom-product">
<div class="col-sm-10">
<div class="trending-wrapper">
  <h1>Result for products</h1>
      @foreach($item as $product)
     <div class="row search-item cart-list-divider">
      <div class="col-sm-4">
       <a href="detail/{{ $product->id }}">
        <img class="trending-img" src="{{ $product->gallery }}">
       </a>
      </div>
   <div class="col-sm-4">
    <div class="">
      <h3>{{ $product->name }}</h3>
      <h3>{{ $product->description }}</h3>
    </div> 
    </div> 
    <div class="col-sm-4">

      <button class="btn btn-danger">Remove to cart</button>
    
   </div>
 </div>
 <br>
@endforeach

</div>
</div>
</div>
@endsection
>>>>>>> 3eaefbc2c1716d213e0f74bcbdf97b237bd151a4
