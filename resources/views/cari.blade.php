@extends('layouts.layout')

@section('content')
    <form class="d-flex" action="cari" method="GET">
            <input class="form-control me-2" type="text" name="cari" placeholder="Search" value="{{ old('cari') }}" aria-label="Search">
            <button class="btn btn-primary" type="submit">Search</button>
    </form>
<br>
<br>
<br>
<div class="produk">
            <div class="row row-cols-1 row-cols-md-3 g-4">    
@foreach($temp as $temps)
                <div class="col" style="margin-bottom: 20px;">
                    <div class="card h-100">
                        <img src="{{url('img')}}/{{($temps->picture)}}" class="card-img-top" width="200px" alt="...">


                        <div class="card-body">
                        <h4 class="card-title">{{ $temps->nama_product }}</h4>
                        <p class="card-text">
                            <strong><h5>Price :</strong> Rp. {{ number_format($temps->harga)}} </h5>
                            <hr>
                        </p>
                        <a href="{{ url('order ') }}/{{ $temps->id }}" class="btn btn-success"> Detail </a>
                        </div>
                    </div>
                </div>
            
@endforeach
    </div>
</div>

@endsection