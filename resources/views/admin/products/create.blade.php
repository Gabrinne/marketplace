@extends('layouts.app')

@section('content')

<div class="container">

    <h1>Criar Produto</h1>
    <form action="{{route('admin.products.store')}}" method="POST">
      @csrf
        

<div class="form-group">
    <label>Nome do produto </label>
    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}">

    @error('name')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror
</div>

<div class="form-group">
    <label>Descrição </label>
    <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" value="{{old('description')}}">
    @error('description')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror
</div>


<div class="form-group">
    <label>Conteúdo</label>
    <textarea name="body" id="" cols="30" rows="10" class="form-control @error('body') is-invalid @enderror" value="{{old('body')}}"></textarea>
    @error('body')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror
</div>

<div class="form-group">
    <label>Preço</label>
    <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" value="{{old('price')}}">

    @error('price')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror
</div>



<div class="form-group">
    <label>Slug</label>
    <input type="text" name="slug" class="form-control">
</div>  


<div class="form-group">
    <button type="submit" class="btn btn-success btn-lg">criar produto</button>
</div>
</form>

</div>

@endsection
