@extends('layouts.app')

@section('content')

<div class="container">

    <h1>Criar loja</h1>
    <form action="{{route('admin.stores.store')}}" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        
        
        <div class="form-group">
            <label>Nome loja</label>
            <input type="text" name="name" class="form-control">
        </div>

        <div class="form-group">
            <label>Descrição</label>
    <input type="text" name="description" class="form-control">
</div>

<div class="form-group">
    <label>Telefone</label>
    <input type="text" name="phone" class="form-control">
</div>

<div class="form-group">
    <label>Celular</label>
    <input type="text" name="mobile_phone" class="form-control">
</div>

<div class="form-group">
    <label>Slug</label>
    <input type="text" name="slug" class="form-control">
</div>  

<div class="form-group">
    <label>Usuario</label>
    <select  name="user" class="form-control">
        @foreach($users as $user)
        
        <option value="{{$user->id}}"> {{$user->name}}</option>

        @endforeach
        
    </select>
</div>

<div class="form-group">
    <button type="submit" class="btn btn-success btn-lg">criar loja</button>
</div>
</form>

</div>

@endsection
