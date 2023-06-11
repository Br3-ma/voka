<div class="h-screen flex-grow-1 w-lg-full overflow-y-lg-auto">
    <!-- Header -->
    <header class="bg-surface-primary border-bottom pt-6">
        <div class="container-fluid">
            <div class="mb-npx">
                <div class="row align-items-center">
                    <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                        <!-- Title -->
                        <h1 style="color:#41004a" class="h2 mb-0 ls-tight items-center d-flex gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" style="width: 5%" fill="currentColor" class="bi bi-stars" viewBox="0 0 16 16">
                                <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828l.645-1.937zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.734 1.734 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.734 1.734 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.734 1.734 0 0 0 3.407 2.31l.387-1.162zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L10.863.1z"/>
                            </svg>
                            <span>Manage Customer Reviews</span>
                        </h1>  
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
                    @if ($all_reviews == null)
                    <div class="item-center justify-content-center text-center">
                        <img style="width: 50%" src="https://static.vecteezy.com/system/resources/previews/002/423/039/original/feedback-and-giving-rating-design-concept-for-customer-satisfaction-illustration-vector.jpg">
                        <p>No Reviews Found.</p>
                    </div>
                    @endif
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