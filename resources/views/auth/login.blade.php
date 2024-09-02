@extends('templates.main')

@section('content')
  <div class="container">
    <div class="w-2/5 shadow-lg shadow-slate-500 mx-auto my-5 rounded-md p-4 bg-slate-100">
      <form action="">
        <h2 class="text-center text-slate-700 font-bold text-2xl mb-5">Login</h2>
        <input type="email" placeholder="e-mail" class="rounded-md bg-transparent border border-blue-600 w-full h-9 p-3 mb-4">
        <div class="mb-4">
          <input type="password" placeholder="Password" class="rounded-md bg-transparent border border-blue-600 w-full h-9 p-3">
          <input type="checkbox" name="" id="password-toogle1">
          <label for="password-toogle1" class="text-xs text-slate-700">Display password</label>
        </div>
        <button type="submit" class="rounded-md w-full bg-blue-600 text-slate-100 p-2" >Login</button>
        <a href="{{ route('register') }}" class="rounded-md w-full text-center block text-blue-600 p-2" >Register</a>
      </form>

    </div>
  </div>
@endsection