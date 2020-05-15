@extends('layouts.app')

@section('content')

<div class="container">

    <h1>Criar Produto</h1>
    <form action="{{route('admin.products.store')}}" method="POST">
      @csrf
        

<div class="form-group">
    <label>Nome do produto </label>
    <input type="text" name="name" class="form-control">
</div>

<div class="form-group">
    <label>Descrição </label>
    <input type="text" name="description" class="form-control" >
</div>


<div class="form-group">
    <label>Conteúdo</label>
    <textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>
</div>

<div class="form-group">
    <label>Preço</label>
    <input type="text" name="price" class="form-control">
</div>



<div class="form-group">
    <label>Slug</label>
    <input type="text" name="slug" class="form-control">
</div>  

<div class="form-group">
    <label>Lojas</label>
    <select  name="store" class="form-control">
        @foreach($stores as $store)
        
        <option value="{{$store->id}}"> {{$store->name}}</option>

        @endforeach
        
    </select>
</div>

<div class="form-group">
    <button type="submit" class="btn btn-success btn-lg">criar produto</button>
</div>
</form>

</div>

@endsection
