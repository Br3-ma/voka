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
                                            <img alt="..." src="https://images.unsplash.com/photo-1612422656768-d5e4ec31fac0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar avatar-sm rounded-circle me-2">
                                            <a class="text-heading font-semibold" href="#">
                                                {{ $user->owner->fname.' '.$user->owner->lname }}
                                            </a>
                                        </td>
                                        <td>
                                            {{ $user->created_at->toFormattedDateString() }}
                                            <small>beta</small>
                                        </td>
                                        <td>
                                            <img alt="..." src="https://preview.webpixels.io/web/img/other/logos/logo-4.png" class="avatar avatar-xs rounded-circle me-2">
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
    