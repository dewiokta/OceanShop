@extends('layouts.layout')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="style.css">
    <title>Checkout</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{url('produk')}}" class ="btn btn-primary">Back</a>
            </div>
            <div class="col-md-12 mt-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{url('img')}}/{{$product->picture}}" class="rounded mx-auto d-block" 
                                width="80%" alt="">
                            </div>
                            <div class="col-md-6">
                                <h3>{{ $product->nama_product}}</h3>
                                <table class="table table-border">
                                    <tbody>
                                        <tr>
                                            <td>Description</td>
                                            <td> : </td>
                                            <td>{{ $product->deskripsi }}</td>
                                        </tr>
                                        <tr>
                                            <td>Price</td>
                                            <td> : </td>
                                            <td>Rp.{{number_format($product->harga)}}</td>
                                        </tr>
                                        <tr>
                                            <td>Stok</td>
                                            <td> : </td>
                                            <td>{{ $product->stok }}</td>
                                        </tr>
                                        <tr>
                                            <td>Amount</td>
                                            <td> : </td>
                                            <td>
                                                <form action="{{ url('checkout')}}/{{ $product->id }}" method="POST">
                                                @csrf
                                                    <input type="text" name="jml_pesan" class="form-control"
                                                    required="">
                                                    <button type="submit" class ="btn btn-success mt-3">Buy</button>
                                                </form>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>

@endsection