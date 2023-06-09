<div class="h-screen flex-grow-1 w-lg-full overflow-y-lg-auto">
    <!-- Header -->
    <header class="bg-surface-primary border-bottom pt-6">
        <div class="container-fluid">
            <div class="mb-npx">
                <div class="row align-items-center">
                    <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                        <!-- Title -->
                        <h1 class="h2 mb-0 ls-tight">Manage Reviews</h1>
                    </div>
                </div>
                <!-- Nav -->
                <ul class="nav nav-tabs mt-4 overflow-x border-0">
                    <li class="nav-item ">
                        <a href="#" class="nav-link active">All Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link font-regular">Good Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link font-regular">Bad Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link font-regular">Valgur Reviews</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <!-- Main -->
    <main class="py-6 bg-surface-secondary">
        <div class="container-fluid">
            <div class="card shadow border-0 mb-7">
                <div class="card-header">
                    <h5 class="mb-0">Reviewers</h5>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-nowrap">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Reviewer</th>
                                <th scope="col">Date</th>
                                <th scope="col">Company</th>
                                <th scope="col">Business Owner</th>
                                <th scope="col">Rating</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($all_reviews as $rev)
                            <tr>
                                <td>
                                    <img alt="..." src="https://images.unsplash.com/photo-1612422656768-d5e4ec31fac0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar avatar-sm rounded-circle me-2">
                                    <a class="text-heading font-semibold" href="#">
                                        {{ $rev->reviewer->fname.' '.$rev->reviewer->lname}}
                                    </a>
                                </td>
                                <td>
                                    {{ $rev->created_at->toFormattedDateString() }}
                                </td>
                                <td>
                                    <img alt="..." src="https://preview.webpixels.io/web/img/other/logos/logo-4.png" class="avatar avatar-xs rounded-circle me-2">
                                    <a class="text-heading font-semibold" href="#">
                                        {{ $rev->business->name }}
                                    </a>
                                </td>
                                <td>
                                    {{ $rev->business->owner->fname.' '.$rev->business->owner->lname }}
                                </td>
                                <td>
                                    <span class="badge badge-lg badge-dot">
                                        <i class="bg-dark"></i>{{ $rev->rating }}
                                    </span>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-neutral">View</a>
                                    <button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            @empty
                                
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="card-footer border-0 py-5">
                    <span class="text-muted text-sm">
                        {{ $all_reviews->links()}}
                    </span>
                </div>
            </div>
        </div>
    </main>
</div>