<div class="">
    <!-- Header -->
    <header class="bg-surface-primary border-bottom pt-6">
        <div class="container-fluid flex">
            <div class="mb-npx d-flex">
                <div class="row align-items-center">
                    <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                        <!-- Title -->
                        <h1 class="h2 mb-0 ls-tight">Manage Subscriptions</h1>
                    </div>
                </div>
                <div class="col-sm-6 col-12 text-sm-end">
                    <div class="mx-n1">
                        <a href="{{ route('create-subscription') }}" class="btn d-inline-flex btn-sm btn-primary mx-1">
                            <span class=" pe-2">
                                <i class="bi bi-plus"></i>
                            </span>
                            <span>Add Subscription</span>
                        </a>
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
                    <h5 class="mb-0">Packages</h5>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-nowrap">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Package Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Total Costs</th>
                                <th scope="col">Number of Features</th>
                                <th scope="col">Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                </div>
                <div class="card-footer border-0 py-5">
                    <span class="text-muted text-sm">
                        
                    </span>
                </div>
            </div>
        </div>
    </main>
</div>