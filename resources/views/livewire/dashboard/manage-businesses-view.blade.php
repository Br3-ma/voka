
<div class="col-12">
    <header class="bg-surface-primary border-bottom pt-6">
        <div class="container-fluid">
            <div class="mb-npx">
                <div class="row align-items-center">
                    <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                        <!-- Title -->
                        <h1 style="color:#41004a" class="h2 mb-0 ls-tight items-center d-flex gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" style="width: 5%" fill="currentColor" class="bi bi-shop-window ml-2" viewBox="0 0 16 16">
                                <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h12V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zm2 .5a.5.5 0 0 1 .5.5V13h8V9.5a.5.5 0 0 1 1 0V13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V9.5a.5.5 0 0 1 .5-.5z"/>
                            </svg>
                            <span>Manage Businesses & Companies</span>
                        </h1>                    
                    </div>
                    <div class="col-sm-6 col-12 text-sm-end">
                        <div class="mx-n1">
                            <a href="{{ route('create-business') }}" style="background: #41004a" class="btn d-inline-flex btn-sm btn-warning mx-1">
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
                    
                    @if ($all_businesses == null)
                    <div class="item-center justify-content-center text-center">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTjK-I5If8VjGFLAzcTrU9S0BL_zXgYxjMiZA&usqp=CAU">
                        <p>Nothing Found.</p>
                        <a href="{{ route('create-business') }}" style="background: #41004a" class="btn d-inline-flex btn-sm btn-warning mx-1">
                            <span class=" pe-2">
                                <i class="bi bi-plus"></i>
                            </span>
                            <span>Add a Business</span>
                        </a>
                    </div>
                    @endif
                </div>
                <div class="card-footer border-0 py-5">
                    <span class="text-muted text-sm">
                        {{ $all_businesses->links() }}
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
