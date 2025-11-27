@extends('layouts.app')

@section('content')
<div class="card">
  <header>
    <h1>Edit Barang</h1>
    <a href="{{ route('items.index') }}" class="link">Kembali</a>
  </header>

  @if(session('error'))
    <div class="msg error">{{ session('error') }}</div>
  @endif

  <form action="{{ route('items.update', $item['id']) }}" method="post" class="form-row">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ old('name', $item['name']) }}">
    <button class="btn-primary" type="submit">Simpan</button>
    <a class="btn-ghost" href="{{ route('items.index') }}">Batal</a>
  </form>

  @error('name')
    <div class="msg error">{{ $message }}</div>
  @enderror
</div>
@endsection
