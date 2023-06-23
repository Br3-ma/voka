
<div class="">

    <!-- Header -->
    <header class="bg-surface-primary border-bottom py-6">
        <div class="container-fluid">
            <div class="mb-npx">
                <div class="row align-items-center">
                    <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                        <!-- Title -->
                        <h1 style="color:#41004a" class="h2 mb-0 ls-tight items-center d-flex gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" style="width: 5%" fill="currentColor" class="bi bi-bookmark" viewBox="0 0 16 16">
                                <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
                            </svg>
                            <span>Manage Categories</span>
                        </h1>
                    </div>
                    <div class="col-sm-6 col-12 text-sm-end">
                        <div class="mx-n1">
                            <a href="{{ route('create-category') }}" style="background: #41004a" class="btn d-inline-flex btn-sm btn-warning mx-1">
                                <span class=" pe-2">
                                    <i class="bi bi-plus"></i>
                                </span>
                                <span>Create Category</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main -->
    <div class="py-6 bg-surface-secondary">
        <div class="container-fluid">
            <!-- Card stats -->
            
            <div class="card shadow border-0 mb-7">
                <div class="card-header justify-content-between d-flex w-full">
                    <h5 class="mb-0">All Categories</h5>
                    @if (!empty($selectedItems))
                        <button wire:click="deleteBulk" class="btn btn-sm btn-square btn-danger text-danger-hover" 
                            onclick="return confirm('Are you sure you want to delete the selected items?');">
                            <i class="bi bi-trash"></i>
                        </button>
                    @endif
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-nowrap">
                        <thead class="thead-light">
                            <tr>
                                <th></th>
                                <th scope="col">Category Name</th>
                                <th scope="col">Added By</th>
                                <th scope="col">Date Created</th>
                                <th scope="col">Date Modified</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($all_categories as $cat)
                                <tr>
                                    <td>
                                        <input type="checkbox" id="cat{{ $cat->id }}" wire:model="selectedItems" value="{{ $cat->id }}">
                                    </td>
                                    <td>
                                        <img alt="..." src="https://preview.webpixels.io/web/img/other/logos/logo-5.png" class="avatar avatar-xs rounded-circle me-2">
                                        <a class="text-heading font-semibold" href="#">
                                            {{ $cat->name }}
                                        </a>
                                    </td>
                                    <td>
                                        <span class="badge badge-lg badge-dot">
                                            
                                            <i class="bg-danger"></i> 
                                            @if ($cat->added_by !== null)
                                                {{ $cat->added_by->fname.' '.$cat->added_by->lname }}
                                            @else
                                                System
                                            @endif
                                        </span>
                                    </td>
                                    <td>
                                        {{ $cat->created_at->toFormattedDateString() }}
                                    </td>
                                    <td>
                                        {{ $cat->updated_at->toFormattedDateString() }}
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-neutral">View</a>
                                        <button wire:click="delete({{ $cat->id }})" type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover">
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
