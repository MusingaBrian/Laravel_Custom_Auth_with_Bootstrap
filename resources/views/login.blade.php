@extends('layout.layout')
@section('title', 'Login | ' . config('app.name'))

@section('content')
    <section class="mt-4">
        <div class="container" style="width: 500px;">
            <form class="ms-auto me-auto mt-auto" method="POST" action="{{ route('login.post') }}">
              @csrf
              @method('POST')
                <div class="mb-3">
                  <label class="form-label">Email address</label>
                  <input type="email" class="form-control"  name="email">
                </div>
                <div class="mb-3">
                  <label class="form-label">Password</label>
                  <input type="password" class="form-control" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
              <div class="ms-auto me-auto mt-auto pt-4">

                @if ($errors->any())
        
                  @foreach ($errors->all() as $error)
        
                    <div class="alert alert-danger">{{ $error }}</div>
        
                  @endforeach
        
                @endif
        
                @if (session()->has('error'))
        
                  <div class="alert alert-danger">{{ session('error') }}</div>
        
                @endif
                
                @if (session()->has('success'))
        
                  <div class="alert alert-danger">{{ session('success') }}</div>
        
                @endif
        
              </div>
        </div>
    </section>
@endsection

