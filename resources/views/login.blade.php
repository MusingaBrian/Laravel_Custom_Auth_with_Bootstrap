@extends('layout.layout')
@section('title', 'Login | ' . config('app.name'))

@section('content')
    <section class="mt-4">
        <div class="container">
            <form style="width: 500px;" class="ms-auto me-auto mt-auto" method="POST" action="{{ route('login.post') }}">
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
        </div>
    </section>
@endsection

