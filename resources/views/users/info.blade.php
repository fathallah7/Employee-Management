
    @extends('layouts.app')

    @section('content')

        @section('title')
        User Info
    @endsection

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-primary text-white text-center">
                    <h3 class="mb-0">
                        <i class="bi bi-person-circle me-2"></i>
                        User Information
                    </h3>
                </div>
                <div class="card-body">
                    <div class="d-flex align-items-center mb-4">
                        <div class="flex-shrink-0">
                            <span class="avatar rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center" style="width:60px; height:60px; font-size:2rem;">
                                {{ strtoupper(substr($info->first_name,0,1)) }}{{ strtoupper(substr($info->last_name,0,1)) }}
                            </span>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h4 class="mb-1">{{ $info->first_name }} {{ $info->last_name }}</h4>
                            <span class="badge bg-info text-dark">Active User</span>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush mb-3">
                        <li class="list-group-item">
                            <strong>Email:</strong>
                            <span class="ms-2">{{ $info->email }}</span>
                        </li>
                        <!-- Add more fields here if needed -->
                    </ul>
                    <div class="text-end">
                        <a href="{{ route('users.edit', $info->id) }}" class="btn btn-outline-primary">
                            <i class="bi bi-pencil-square me-1"></i> Edit Profile
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
