<x-app-layout>

        <!-- Main content -->
        <div class="h-screen flex-grow-1 w-lg-full overflow-y-lg-auto">
            <!-- Header -->
            <header class="bg-surface-primary border-bottom pt-6">
                <div class="container-fluid">
                    <div class="mb-npx">
                        <div class="row align-items-center">
                            <div class="col-sm-6 col-12 mb-4 mb-sm-0 py-4">
                                <!-- Title -->
                                <h1 style="color: #41004a;
                                " class="h2 mb-0 ls-tight">Dashboard</h1>
                            </div>
                        </div>
                        <!-- Nav -->
                      
                    </div>
                </div>
            </header>
            <!-- Main -->
            <main class="py-6 bg-surface-secondary">
                <div class="container-fluid">
                    <!-- Card stats -->
                    <div class="row g-6 mb-6">
                        <div class="col-xl-3 col-sm-6 col-12">
                            <div class="card shadow border-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <span class="h6 font-semibold text-muted text-sm d-block mb-2">Total Reviews</span>
                                            <span class="h3 font-bold mb-0">{{ App\Models\BusinessReview::total()}}</span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="icon icon-shape bg-tertiary text-white text-lg rounded-circle">
                                                <i class="bi bi-credit-card"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-2 mb-0 text-sm">
                                        <span class="badge badge-pill bg-soft-success text-success me-2">
                                            <i class="bi bi-arrow-up me-1"></i>0%
                                        </span>
                                        <span class="text-nowrap text-xs text-muted">Since last month</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-12">
                            <div class="card shadow border-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <span class="h6 font-semibold text-muted text-sm d-block mb-2">Total Reviewers</span>
                                            <span class="h3 font-bold mb-0">{{ App\Models\User::totalReviewers()}}</span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="icon icon-shape bg-primary text-white text-lg rounded-circle">
                                                <i class="bi bi-people"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-2 mb-0 text-sm">
                                        <span class="badge badge-pill bg-soft-success text-success me-2">
                                            <i class="bi bi-arrow-up me-1"></i>0%
                                        </span>
                                        <span class="text-nowrap text-xs text-muted">Since last month</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-12">
                            <div class="card shadow border-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <span class="h6 font-semibold text-muted text-sm d-block mb-2">Total Businesses</span>
                                            <span class="h3 font-bold mb-0">{{ App\Models\Business::total()}}</span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="icon icon-shape bg-info text-white text-lg rounded-circle">
                                                <i class="bi bi-clock-history"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-2 mb-0 text-sm">
                                        <span class="badge badge-pill bg-soft-danger text-danger me-2">
                                            <i class="bi bi-arrow-down me-1"></i>-5%
                                        </span>
                                        <span class="text-nowrap text-xs text-muted">Since last month</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-12">
                            <div class="card shadow border-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <span class="h6 font-semibold text-muted text-sm d-block mb-2">Total Subscribers</span>
                                            <span class="h3 font-bold mb-0">{{ $top_subscribers->count() }}</span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="icon icon-shape bg-warning text-white text-lg rounded-circle">
                                                <i class="bi bi-minecart-loaded"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-2 mb-0 text-sm">
                                        <span class="badge badge-pill bg-soft-success text-success me-2">
                                            <i class="bi bi-arrow-up me-1"></i>10%
                                        </span>
                                        <span class="text-nowrap text-xs text-muted">Since last month</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    @if(auth()->user()->type == 'admin')
                    <div class="card shadow border-0 mb-7">
                        <div class="card-header">
                            <h5 class="mb-0">Top Subscribers</h5>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-nowrap">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Company</th>
                                        <th scope="col">Payment</th>
                                        <th scope="col">Address</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($top_subscribers as $user)
                                    <tr>
                                        <td>
                                            
                                            @if ($user->owner->profile_photo_path !== null)
                                            <img id="prof-preview-image-before-upload-create" class="avatar avatar-sm rounded-circle me-2" src="{{ asset('storage/app/public/'.$user->owner->profile_photo_path) }}" alt="girl-avatar" />
                                            @else
                                            <img id="prof-preview-image-before-upload-create" class="avatar avatar-sm rounded-circle me-2" src="https://img.freepik.com/free-vector/illustration-user-avatar-icon_53876-5907.jpg?w=2000" alt="girl-avatar" />
                                            @endif 
                                            <a class="text-heading font-semibold" href="#">
                                                {{ $user->owner->fname.' '.$user->owner->lname }}
                                            </a>
                                        </td>
                                        <td>
                                            {{ $user->created_at->toFormattedDateString() }}
                                            <small>beta</small>
                                        </td>
                                        <td>
                                            <img alt="..." src="data:image/png;base64,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" class="avatar avatar-xs rounded-circle me-2">
                                            <a class="text-heading font-semibold" href="#">
                                                {{ $user->name }}
                                            </a>
                                        </td>
                                        <td>
                                            K0.00
                                        </td>
                                        <td>
                                            {{ $user->address ?? '' }}<br>
                                            {{ $user->phone1 ?? '' }}<br>
                                            {{ $user->email ?? '' }}
                                        </td>
                                    </tr>                                        
                                    @empty
                                        
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer border-0 py-5">
                            <button class="text-muted text-sm">View more</button>
                        </div>
                    </div>
                    @endif
                </div>
            </main>
        </div>
    </x-app-layout>
    