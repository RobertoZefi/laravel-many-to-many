@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2 class="mb-5">Aggiungi progetto</h2>
        <form action="{{ route('projects.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Titolo</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="exampleFormControlInput1" name="title">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Cliente</label>
                <input type="text" class="form-control @error('client') is-invalid @enderror" id="exampleFormControlInput1" name="client">
                @error('client')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Descrizione</label>
                <input type="text" class="form-control @error('description') is-invalid @enderror" id="exampleFormControlInput1" name="description">
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="type" id="type" class="form-label">Tipo</label>
                <select class="form-select" id="type" aria-label="Default select example" name="type_id">
                    <option value="" selected>Segli il tipo</option>
                    @foreach($types as $type)
    
                    <option @selected(old('type_id') ==  $type->id) value="{{ $type->id }}">{{ $type->type }}</option>
                    
                    @endforeach
                </select>
            </div>
            <div class="d-flex mb-3 gap-3">
                @foreach($technologies as $technology)
                <div class="form-check">
                    
                    <input name="technologies[]" @checked(in_array($technology->id, old('technologies',[]))) class="form-check-input" type="checkbox" value="{{$technology->id}}" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      {{$technology->name}}
                    </label>
                    
                </div>
                @endforeach              
            </div>
            <input type="submit" class="btn btn-primary" value="Crea">
        </form>
    </div>
@endsection