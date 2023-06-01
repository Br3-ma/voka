
<div class="w-full">
    <div class="p-4">
        <div class="mb-npx">
            <div class="row align-items-center ">
                <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                    <h1 class="h2 mb-0 ls-tight">All Categories</h1>
                </div>
                <!-- Actions -->
                <div class="col-sm-6 col-12 text-sm-end">
                    <div class="mx-n1">
                        <a href="{{ route('create-category') }}" class="btn d-inline-flex btn-sm btn-primary mx-1">
                            <span class=" pe-2">
                                <i class="bi bi-plus"></i>
                            </span>
                            <span>Add Category</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main -->
    <div class="py-6 bg-surface-secondary">
        <div class="container-fluid">
            <!-- Card stats -->
            
            <div class="card shadow border-0 mb-7">
                <div class="card-header">
                    <h5 class="mb-0">All Categories</h5>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-nowrap">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Category Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Added By</th>
                                <th scope="col">Date Created</th>
                                <th scope="col">Date Modified</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @forelse ($all_businesses as $biz) --}}
                                <tr>
                                    <td>
                                        <img alt="..." src="https://preview.webpixels.io/web/img/other/logos/logo-5.png" class="avatar avatar-xs rounded-circle me-2">
                                        <a class="text-heading font-semibold" href="#">
                                            
                                        </a>
                                    </td>
                                    <td>
                                        
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
                            {{-- @empty --}}
                                
                            {{-- @endforelse --}}
                            
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
