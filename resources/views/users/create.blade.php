
    @extends('layouts.app')

    @section('content')

        @section('title')
        User Info
    @endsection

    <div class="container d-flex justify-content-center align-items-center" style="min-height: 90vh;">
      <div class="card shadow-lg p-5" style="max-width: 600px; width: 100%;">
        <h2 class="text-center mb-4 text-primary fw-bold">Add User</h2>
        <form method="POST" action="{{ route('users.store') }}">
          @csrf
          <div class="row mb-3">
            <div class="col-md-6 mb-3 mb-md-0">
              <label for="firstName" class="form-label fw-semibold">First Name</label>
              <input type="text" name="firstName" class="form-control form-control-lg" id="firstName" placeholder="Enter first name" required>
            </div>
            <div class="col-md-6">
              <label for="lastName" class="form-label fw-semibold">Last Name</label>
              <input type="text" name="lastName" class="form-control form-control-lg" id="lastName" placeholder="Enter last name" required>
            </div>
          </div>
          <div class="mb-4">
            <label for="email" class="form-label fw-semibold">Email</label>
            <input type="email" name="email" class="form-control form-control-lg" id="email" placeholder="Enter email address" required>
          </div>
          <button type="submit" name="submit" class="btn btn-primary w-100 fw-bold py-2 fs-5">Submit</button>
        </form>
      </div>
    </div>

@endsection
