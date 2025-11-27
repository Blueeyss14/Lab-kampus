@extends('layouts.app')

@section('content')
<div class="card">
  <header>
    <h1>Daftar Barang</h1>
  </header>

  @if(session('success'))
    <div class="msg success">{{ session('success') }}</div>
  @endif
  @if(session('error'))
    <div class="msg error">{{ session('error') }}</div>
  @endif

  <form action="{{ route('items.store') }}" method="post" class="form-row" style="margin-bottom:12px">
    @csrf
    <input type="text" name="name" placeholder="Nama barang" value="{{ old('name') }}">
    <button class="btn-primary" type="submit">Tambah</button>
    <a class="btn-ghost" href="{{ route('items.index') }}">Reset</a>
  </form>

  @error('name')
    <div class="msg error">{{ $message }}</div>
  @enderror

  <table class="list" role="table" aria-label="Daftar barang">
    <thead>
      <tr>
        <th>#</th>
        <th>Nama Barang</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      @forelse($items as $item)
        <tr>
          <td>{{ $item['id'] }}</td>
          <td>{{ $item['name'] }}</td>
          <td class="actions">
            <a class="link" href="{{ route('items.edit', $item['id']) }}">Edit</a>

            <form action="{{ route('items.destroy', $item['id']) }}" method="post" style="display:inline">
              @csrf
              @method('DELETE')
              <button type="submit" style="background:transparent;border:0;color:var(--danger);font-weight:600;cursor:pointer">Hapus</button>
            </form>
          </td>
        </tr>
      @empty
        <tr>
          <td colspan="3" style="color:var(--muted)">Belum ada barang.</td>
        </tr>
      @endforelse
    </tbody>
  </table>
</div>
@endsection
