@extends('layouts.app')
@section('content')


<div class="row">
    <div class="col-6">

    @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
              </ul>
            </div>
            @endif
        <form method="POST" action="{{route('employes.store')}}" >
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nom</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nom">
              
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Prenom</label>
              <input type="text" class="form-control" id="exampleInputPassword1" name="prenom">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Telephone</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="telephone">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Fonction</label>
                <input type="number" class="form-control" id="exampleInputPassword1" name="fonction">
              </div>
              
             
            <button type="submit" class="btn btn-success">Enregistrer </button>
          </form>
    </div>
  </div>
@endsection