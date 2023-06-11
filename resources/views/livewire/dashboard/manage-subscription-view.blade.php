<div class="">
    <!-- Header -->
    <header class="bg-surface-primary border-bottom py-6">
        <div class="container-fluid">
            <div class="mb-npx">
                <div class="row align-items-center">
                    <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                        <!-- Title -->
                        <h1 style="color:#41004a" class="h2 mb-0 ls-tight items-center d-flex gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" style="width: 5%" fill="currentColor" class="bi bi-subtract" viewBox="0 0 16 16">
                                <path d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2z"/>
                            </svg>
                            <span>Manage Subscription Plans</span>
                        </h1>
                    </div>
                    <div class="col-sm-6 col-12 text-sm-end">
                        <div class="mx-n1">
                            <a href="{{ route('create-subscription') }}" style="background: #41004a" class="btn d-inline-flex btn-sm btn-warning mx-1">
                                <span class=" pe-2">
                                    <i class="bi bi-plus"></i>
                                </span>
                                <span>Create Subscription Plan</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main -->
    <main class="py-6 bg-surface-secondary">
        <div class="container-fluid">
            <div class="card shadow border-0 mb-7">
                <div class="card-header">
                    <h5 class="mb-0">Subscription Packages</h5>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-nowrap">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Package Name</th>
                                {{-- <th scope="col">Description</th> --}}
                                <th scope="col">Total Costs</th>
                                <th scope="col">Number of Features</th>
                                <th scope="col">Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        @forelse ($subscriptions as $sub)
                            <td class="">{{ $sub->name }}</td>
                            {{-- <td class="">{{ $sub->description }}</td> --}}
                            <td class="">{{ $sub->price }}</td>
                            <td class="">
                                <a class="text-heading font-semibold" href="#">
                                    {{ $sub->feature->count() }}
                                </a>
                            </td>
                            <td class="">
                                <span class="bg-info font-extrabold p-2 text-yellow-700 rounded-full">
                                    Active
                                </span>
                                </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-neutral">View</a>
                                <button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </td>
                        @empty
                                
                        @endforelse
                        </tbody>
                    </table>
                    
                    @if ($subscriptions == null)
                    <div class="item-center justify-content-center text-center">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTc9myXD7uZNAxE7tLQGVcUB91MlGVjmn_nAVbig4cP2Q0UzsjzEMtI8oRWGzGBPD11wdc&usqp=CAU">
                        <p>No Subscriptions Found.</p>
                        <a href="{{ route('create-subscription') }}" style="background: #41004a" class="btn d-inline-flex btn-sm btn-warning mx-1">
                            <span class=" pe-2">
                                <i class="bi bi-plus"></i>
                            </span>
                            <span>Create Subscription Plan</span>
                        </a>
                    </div>
                    @endif
                </div>
                <div class="card-footer border-0 py-5">
                    <span class="text-muted text-sm">
                        {{ $subscriptions->links() }}
                    </span>
                </div>
            </div>
        </div>
    </main>
</div>