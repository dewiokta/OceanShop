@extends('layouts.layout')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="style.css">
    <title>Profile</title>
</head>
<body>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-body">
                        <div class="wrapper">

                            <div class="container">
                                <div class="photo-container" text-align:center>

                                    <h3 class="title">{{ Auth::user()->name }}</h3>
                                    <p class="category">{{ Auth::user()->email }}</p>
                                </div>
                                <table class="table table-dark">
                                    <thead>

                                    </thead>
                                    <tbody>
                                        <tr class="table-active">

                                        </tr>

                                        <tr>

                                            <td colspan="2" class="table-active">Name </td>
                                            <td> {{ Auth::user()->name }}</td>
                                        </tr>
                                        <tr>

                                            <td colspan="2" class="table-active">Email </td>
                                            <td> {{ Auth::user()->email }}</td>
                                        </tr>
                                        <tr>

                                            <td colspan="2" class="table-active">Address </td>
                                            <td> {{ Auth::user()->alamat }}</td>
                                        </tr>
                                        <tr>

                                            <td colspan="2" class="table-active">Phone Number </td>
                                            <td> {{ Auth::user()->no_telp }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <button type="button" class="btn btn-danger"><a href="{{ __('edit') }}">Edit Profile</a></button>
                            </div>
                        </div>
                    </div>
                </div>
</body>
</html>
@endsection