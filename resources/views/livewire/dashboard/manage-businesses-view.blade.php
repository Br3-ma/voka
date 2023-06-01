
<div class="">
    <header class="bg-surface-primary border-bottom pt-6">
        <div class="container-fluid">
            <div class="mb-npx">
                <div class="row align-items-center">
                    <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                        <!-- Title -->
                        <h1 class="h2 mb-0 ls-tight">Manage Businesses & Companies</h1>
                    </div>
                    <div class="col-sm-6 col-12 text-sm-end">
                        <div class="mx-n1">
                            <a href="{{ route('create-business') }}" class="btn d-inline-flex btn-sm btn-primary mx-1">
                                <span class=" pe-2">
                                    <i class="bi bi-plus"></i>
                                </span>
                                <span>Add a Business</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Nav -->
                <ul class="nav nav-tabs mt-4 overflow-x border-0">
                    <li class="nav-item ">
                        <a href="#" class="nav-link active">All</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link font-regular">Agriculture</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link font-regular">Engineering</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link font-regular">Clothing</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link font-regular">Finance</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link font-regular">Technology</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link font-regular">Food</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <!-- Main -->
    <div class="py-6 bg-surface-secondary">
        <div class="container-fluid">
            <!-- Card stats -->
            
            <div class="card shadow border-0 mb-7">
                <div class="card-header">
                    <h5 class="mb-0">Business & Companies</h5>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-nowrap">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Company</th>
                                <th scope="col">Date</th>
                                <th scope="col">Rating</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($all_businesses as $biz)
                                <tr>
                                    <td>
                                        <img alt="..." src="https://preview.webpixels.io/web/img/other/logos/logo-5.png" class="avatar avatar-xs rounded-circle me-2">
                                        <a class="text-heading font-semibold" href="#">
                                            {{ $biz->name }}
                                        </a>
                                    </td>
                                    <td>
                                        {{ $biz->created_at }}
                                    </td>
                                    <td>
                                        <span class="badge badge-lg badge-dot">
                                            <i class="bg-danger"></i>3.4
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
                    <span class="text-muted text-sm">Showing 10 items out of 250 results found</span>
                </div>
            </div>
        </div>
    </div>
</div>
