
    @extends('layouts.app')

    @section('content')

        @section('title')
        User Info
    @endsection

    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
          <div class="card shadow-sm border-0">
            <div class="card-body p-4">
              <h2 class="text-center mb-4 fw-bold text-primary">Update Info</h2>
              <form method="POST" action="{{ route('users.update', 1) }}">
                @csrf
                @method('PUT')
                <div class="mb-3">
                  <label for="firstName" class="form-label fw-semibold">First Name</label>
                  <input type="text" name="firstName" class="form-control" id="firstName" placeholder="Enter first name">
                </div>
                <div class="mb-3">
                  <label for="lastName" class="form-label fw-semibold">Last Name</label>
                  <input type="text" name="lastName" class="form-control" id="lastName" placeholder="Enter last name">
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label fw-semibold">Email</label>
                  <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
                </div>
                <div class="d-grid">
                  <button type="submit" name="submit" class="btn btn-primary btn-lg rounded-pill shadow-sm">
                    Update
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection
