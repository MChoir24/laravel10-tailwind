@extends('templates.main')

@section('content')
  <div class="container">
    <div class="w-2/5 shadow-lg shadow-slate-500 mx-auto my-5 rounded-md p-4 bg-slate-100">
      <form action="{{ route('store-register') }}" method="POST">
        @csrf
        <h2 class="text-center text-slate-700 font-bold text-2xl mb-5">Register</h2>
        <div class="mb-4">
          <input type="text" name="email" placeholder="e-mail" value="{{ old('email') }}" required class="rounded-md bg-transparent border @error('email') border-red-600 @else border-blue-600 @enderror w-full h-9 p-3">
          @error('email')
            <small class="text-red-600">{{ $message }}</small>
          @enderror
        </div>

        <div class="mb-4">
          <input type="text" name="name" placeholder="Name" value="{{ old('name') }}" required class="rounded-md bg-transparent border @error('name') border-red-600 @else border-blue-600 @enderror w-full h-9 p-3">
          @error('name')
            <small class="text-red-600">{{ $message }}</small>
          @enderror
        </div>

        <div class="mb-4">
          <input type="password" name="password" placeholder="Password" value="{{ old('password') }}" required class="rounded-md bg-transparent border @error('password') border-red-600 @else border-blue-600 @enderror w-full h-9 p-3">
          @error('password')
            <small class="text-red-600 block">{{ $message }}</small>
          @enderror
          <input type="checkbox" name="" id="password-toogle1">
          <label for="password-toogle1" class="text-xs text-slate-700">Display password</label>
        </div>
        <div class="mb-4">
          <input type="password" name="password_confirmation" placeholder="Confirm Password" required class="rounded-md bg-transparent border @error('password_confirmation') border-red-600 @else border-blue-600 @enderror w-full h-9 p-3">
          @error('name')
            <small class="text-red-600">{{ $message }}</small>
          @enderror
        </div>
        <button type="submit" class="rounded-md w-full bg-blue-600 text-slate-100 p-2" >Register</button>
      </form>

    </div>
  </div>
@endsection