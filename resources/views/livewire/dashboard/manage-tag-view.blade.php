
<div class="">
    <!-- Header -->
    <header class="bg-surface-primary border-bottom py-6">
        <div class="container-fluid">
            <div class="mb-npx">
                <div class="row align-items-center">
                    <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                        <!-- Title -->
                        <h1 style="color:#41004a" class="h2 mb-0 ls-tight items-center d-flex gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" style="width: 5%" fill="currentColor" class="bi bi-tags" viewBox="0 0 16 16">
                                <path d="M3 2v4.586l7 7L14.586 9l-7-7H3zM2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586V2z"/>
                                <path d="M5.5 5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm0 1a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zM1 7.086a1 1 0 0 0 .293.707L8.75 15.25l-.043.043a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 0 7.586V3a1 1 0 0 1 1-1v5.086z"/>
                            </svg>
                            <span>Manage Tags</span>
                        </h1>
                    </div>
                    <div class="col-sm-6 col-12 text-sm-end">
                        <div class="mx-n1">
                            <a href="{{ route('create-tag') }}" style="background: #41004a" class="btn d-inline-flex btn-sm btn-warning mx-1">
                                <span class=" pe-2">
                                    <i class="bi bi-plus"></i>
                                </span>
                                <span>Create Tag</span>
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
                    <h5 class="mb-0">All Tags</h5>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-nowrap">
                        <thead class="thead-light">
                            <tr>
                                <th></th>
                                <th scope="col">Tag Name</th>
                                <th scope="col">Added By</th>
                                <th scope="col">Date Created</th>
                                <th scope="col">Date Modified</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($all_tags as $tag)
                                <tr>
                                    <td>
                                        <input type="checkbox" id="tag{{ $tag->id }}" wire:model="selectedItems" value="{{ $tag->id }}">
                                    </td>
                                    <td>
                                        <img alt="..." src="https://preview.webpixels.io/web/img/other/logos/logo-5.png" class="avatar avatar-xs rounded-circle me-2">
                                        <a class="text-heading font-semibold" href="#">
                                            {{ $tag->name }}
                                        </a>
                                    </td>
                                    <td>
                                        <span class="badge badge-lg badge-dot">
                                            
                                            <i class="bg-danger"></i> 
                                            @if ($tag->added_by !== null)
                                                {{ $tag->added_by->fname.' '.$tag->added_by->lname }}
                                            @else
                                                System
                                            @endif
                                        </span>
                                    </td>
                                    <td>
                                        {{ $tag->created_at->toFormattedDateString() }}
                                    </td>
                                    <td>
                                        {{ $tag->updated_at->toFormattedDateString() }}
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
                        {{ $all_tags->links() }}
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
