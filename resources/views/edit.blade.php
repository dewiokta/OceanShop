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
    <title>Edit Profile</title>
</head>
<body>

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
            <div class="col-md-12 mt-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('akun')}}">Profile</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
                    </ol>
                </nav>
            </div>
                <div class="card">
                        <div class="p-2 py-5" style="margin-left: 150px;">
                        <h4 style="position: center;">EDIT PROFILE</h4> <br>
                        <h4><span class="font-weight-bold">{{ Auth::user()->name }}</span></h4>
                            <form action="/update" method="POST">
                                @csrf
                                <div class="row mt-2">
                                    <div class="col-md-8"><label class="labels">Name</label><input type="text" class="form-control @error('name') is-invaled @enderror " value="{{ Auth::user()->name }}" name="name"></div>

                                </div>
                                <div class="row mt-3">
                                    <input type="hidden" value="{{ Auth::id() }}" name="id">
                                    <div class="col-md-8"><label class="labels">Phone Number</label><input type="text" class="form-control @error('no_telp') is-invaled @enderror " value="{{ Auth::user()->no_telp }}" name="no_telp"></div>
                                    <div class="col-md-8"><label class="labels">Address</label><input type="text" class="form-control @error('alamat') is-invaled @enderror " value="{{ Auth::user()->alamat }}" name="alamat"></div>
                                    <div class="col-md-8"><label class="labels">Email</label><input type="text" class="form-control @error('email') is-invaled @enderror " value="{{ Auth::user()->email }}" name="email"></div>
                                    <!-- <div class="col-md-12"><label class="labels">Password</label><input type="text" class="form-control @error('password') is-invaled @enderror " value="{{ Auth::user()->password }}"  ></div> -->
                                </div>
                                <table>
                                    <tr>

                                        <th>
                                            <div>
                                                <button class="btn btn-primary profile-button" type="submit">Save</button>
                                            </div>
                                        </th>
                            </form>
                                        <th>
                                            <div>
                                            </div>
                                        </th>
                                    </tr>
                                </table>
                                
                        </div>
                </div>
            </div>
            
        </div>
    </div>
</body>
</html>
@endsection