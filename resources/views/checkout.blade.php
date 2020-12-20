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
            <div class="col-md-12 mt-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('produk')}}">Product</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h3>Checkout</h3>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Num</th>
                                    <th>Product</th>
                                    <th>Amount</th>
                                    <th>Price</th>
                                    <th>Total Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="{{ url('payment') }}" class="btn btn-success me-md-2"></i> Checkout </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>

@endsection