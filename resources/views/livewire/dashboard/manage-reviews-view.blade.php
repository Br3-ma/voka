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
                <div class="card-header justify-content-between d-flex w-full">
                    <h5 class="mb-0">Reviewers</h5>
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
                                    <input type="checkbox" id="rev{{ $rev->id }}" wire:model.debounce="selectedItems" value="{{ $rev->id }}">
                                </td>
                                <td>
                                    @if ($rev->reviewer->profile_photo_path !== null)
                                    <img alt="..." src="{{ asset('public/storage/'.$rev->reviewer->profile_photo_path) }}" class="avatar avatar-sm rounded-circle me-2">
                                    @else
                                    <img alt="..." src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMoAAAD5CAMAAABRVVqZAAAAYFBMVEXu7u7///+fn5/MzMzx8fF2dnb19fXt7e2ioqKkpKRycnJubm7CwsLJycmZmZmzs7Nra2vV1dWrq6u3t7fb29u8vLzDw8Pi4uLf39+FhYXR0dGVlZVnZ2d/f3+MjIyAgIALUUx6AAAPeElEQVR4nO2dibaiTK+GGYpCmWfYOPT93+WfNwUKgtuWQpvzHbJ6dbMRMY9JZSq3bZimNP7vi5CmaZiG+6/1WENcYRryP0FCLP8F5+pE/GsF1pMdZYuyo2xRdpQtyo6yRdlRtig7yhZlR9mi7ChblB1li7KjbFF2lC3KjrJF2VG2KDvKFmVH2aLsKFuUHeWVuPTn23ucH0FxpUki5XdxPoGiSFik+B7NR6xiDgU0X8H5AAobJbVrOcD5hqt9AgW6l0FQhoUwv+hqH0JpApYySN0BzWeN8wEUmCIMblKGjfyKcdZH4aVSKpsEs8b5UBz4AAppW4MidNuyvBvn43FgfRT4V4tVX9OBKKo7TlkVxgddbXUU5V9A6VWuB8Ypg7b+VBxYH4VUNEqSapAm3SIY4HwoDqzvYKReAZRilPNN2YTlszggV4kDq6PgDScTlLkwJ+KmwQfjwNooWCoyh1WmJBAxMs6qcWB1FIRioLTzKJBRHCiHcUDLOGujcKqHf9XPQFiMUZAOm3GxtvCl1yXhUAyj5L+SsMq1/TQOLIJZG4UUcQklr54iDOVZHFjEsraDkR5pTtL8FYr5LA4seemVUTjVE0ksfwcYSz0q1lJz2Wfr10XhriuGVd4hYTPc4wDC+BIPWx+lAMovofipIA4AJaTjJWqti4KYWsG/3KmmojV/D9Cm6qMDLLN/vuw5FMMo8VTLOmzN8tUKclFRy02gQGWgjEMxr6DQLsw8fIGSwirmJoIxaWETSjwIxaIIQ7OVph02Zpy9cLGyC2CLXnxNFOVf8TAU13Zo26kZkMeFtZnFM543EAEUd6F/rYsCbWKSPhRLgNg2mSMuqbaShFLx2ndnwoKp+px8qX+tjpICJVWauQxihwYYaDW7eCyrQFjMolBqKZeG4lVRBKd6aKve80KR2CGlGpxt7M5iNnxuTlCHLg3F66EI6dpwnQxKswOlHQkiV9xJFgdMYttzOQZ9Ti6X+tcqKELIOsyiE2nRAKUy2zBsa7fpUXqQCim0s1Q6zTF213wu/P0zbRQhjLS0IsuyMtIiZE8yYZCQMkna3lGyUJqy6WwVyjqbRDMYZXEo1kSBOew4AodlRfbdv3rf6qxSF3YAEEox3blQiCx7sAv3OYtDsQ6KEKIIjh0HUEgLN+OFXdgjEWo/Lx0Ahi5RP/Q0aa4Tihej0Cpv8zsGC2nREkqWmuEYpSrkGIRQkC8fOk30OctD8UIUXuVjDstC7RQDxZBjFCr4RfpAF0rjMfVzn1Mv968lKKLOHjHgX+QuMoNQETxGMdoHEARj5NKRhzVd87n4F4EXoNQzIIRC2hQgoeLxQe0pSJ9rhighoWiE4iUoMp4jsaBWCZT6canMSOiilrlVOCwoQ1MN/1qA4s4bBS3wkUiOD6F4HsVsVK4ZhGKgGN9FaeZRKJHXQMnN9CUJRQI7U2nzhtLGqvlc/jvz76PML5UDvB3+NQnFs1YRZlqTNPcKOY/z2F6e6hehiNmlghwBkqMQcyhUk6Vp2+KAJB21K1J2oTjWCcWLUPI5/yItxJFDcTODEs41wjXDSbMKqTkrupWj8Z0MC1DSuayCwoNQjqE5vzam0sXoFuwp9zmlRqpfhDIbwlA75fCv+VB8Q5GSSjdhuG5xKywNM+SKLI4LLf9agiKzqVGQEA6EcnhM9Z2+XRHsVmEngwfNmhp+VDzi6yginKKg64J/PQvFfS4spqBkkpb7HL1QvKycnIbjI2kRHEmKJ6E47GPWY13JZlF9jl4oXoYiD49GQaYDiSXd3nfCodj38DvDknKfk+mF4mUoonxEQddlEUpmTjr2yYnHYhNlDPc5mv61DOUxHCMU2wdCsWeC7kQmZinQ52SBXihe2kU+oCAhZPCv+aHjC7OokV+mGYoXoohxnR+RFhL+dQz+gmVSOFOZjDJBp+vSQLFHZuGui1EoHpTPN1SlNOpi2oilZkAkHIp1SBY62DgcY8GWWCodTdzePu4ha56FDWLZdNHX3OegINAiWYgij0OjYLFbPYrCOVaqgJxV/gFFukDRGIBpoYhgiEI2qK0DyYjGyjFLlXX7iobaMDSfuktlKUox9DC8+4wyock4y1Pt+AtOw32OdihePtIboECLY48yxeHPuD03TigkirflexHaKPf+C12XBNnhKU3GccBNZ1e96nO0Q/FylPY+KyYt+/T/hOYWB0RjP+Kk3OfE+v61ePx977+gxSBlPqfp48DIOLSYqM85tvr+tRjl1n9x1zUuZJ7REE7GXf4gDoQ8cjrqh+LlKLf+C6F4ZjT2i3HKYhCkW7M6rhKKNfZXevUxyytOE5QXxrHdLg7U3OdU2qleB6Ufh2GCT935YbJJ8YLmEMDVDGlQ8XZYIRTroPT9Vzf3FW38Lo0VUxyw6dBaw780UPoAHN0/UdyU1hzO4RecI06sEYq1tlV7paPDvRI2XTs7vWUcAGntRayAMhiHkSmq+yhVFo+7lC9oLM0BmDaKCMf9VxQPPlVQh8dXrjZg0e66NFGm47AoOob3jlims3FgSnMI1wjFWiiTcRjTRMPf9miCl3GA/Et3AKaPMuq/RjjZOA68oFknFOuhFLP7X4rGCl7GgZ4kXyUU633GRTxFUTiv4wCjrBOKNVHmt72HNMfBftd8HDhEK3Rd+ijtr2bpcfJiYJxpHFgpFGt+iGp+C38CczoOP8dmtOM4sFIo1kQZjcOecFDv6PJvcckBTlFGPU60RteljyKqF76VVQ22HpW4rhjQuF0ciFYKxbofOJz/ZEXHEbdkjvH1MM6dBnHgpLktPBC9u8x/HIEwDkFxN8dI3LFxOMCt8+uqmigzH0cgtwprOc/RyZhmJf/SRZnsf1llOnGrORnEgbX+UwvdOe3zVf5aYBy5+Ncgp7poPv02eJlb5a9lze9D0J5u1pTwouPTVf5F0X996TYvVvmXZAMqrCU7yhZlR9mi7ChblB1li7KjbFF2lC3KjrJF2VG2KDvKFmVH2aLsKFuUHWWLsqNsUXaULcqOskV5F0WSqCfKfo8Lu3DycYdFqoelHF82uMvgenUHdaY7Hl/wCRRxiqJTjYM8imJ+srStP57zkzXDD6o0p+jUCkNG2BLjB+QRx+oaF3ep+pcWbn660B2sysVG7SlScgrf1e29y+XZ83yLFJKW70Mx4f4knuPRn+R4ZxFF4iUBoXgk50Zg0/KMY75EVAkdXrrLZZng6SS+Iw0R4jFIUn4YJXEcJyHdpOV5/B47pIYTXX3HYcQexXd8etslXe14YJQHD8fKQFccJoUyaka39J1T9OP7RCds3CkhOedfQPGuskeRRw+qSun+IeXam88MUZwE/xtL4txQaj72MvwgUvrBs3kdVVeF4rfYOX5773gJCnTurUI//2GVSD/v1JtliHLyvFyI2PNOHQodO5eA3gKOCyfPSdI+khgKJVVfMPBxFC/2nR+pUETrO57yaXiNP2MVr7oQgXCcS+UpFHkhi5CVfBtriN6LHwZU2gPFqwqS9PNW8duD54cdSunRz53P09tbz6GUdHnoe2WHApdKCnlVVm0S5Wn8/QhVrdaK55Ocv4ASwu8HKKnKB0BpZlAC4TvXK1ksUChYXhcpAh9rCBd6FNRFcYb2oVAoHPi+gUIG8IMjo5BC7CdKw1mrBLAX3voORdAqySkBKtfEEqMIRygIZArFO/I373wDRbiklLJKijdVRdgf0ndm2RMKIlZSdygipLed0qDl8CKR9BNnGKFu/dVlj9fLfaQT8nWBbIFXlbQCPGsWRciT759k52AIWexBKkGRozp+IO+3ZhQhFrAsQjEEJwagAOpaS9l2qXMOhYqRE2mnULDQunzOC55NFruUVm4oXpBCio+nSEapfIVCMZiOyCD4O5/L9oSiSk+FInIsKWREM1IOV53pIvDQn37ZI4IlJ/mbJvooZy9BmSf/+J7PryWOqmjyvWpYg51VDebfSylBtZYv5cX3f1QlZifemUIGGdRXd0iuzaAG8z+MIuI8LljXOM9VbSvr0jqdjtXoVjWuI0vgm9h6lJSeIvCNZn19Q4ecJWWbRacoC2rozl8dzvLhytjoV+NwXYqZ7qJ7eLh6u3Q+eN79ZsO+5ibvqvbm9RuWHWWLsqNsUXaULcqCvHJLLINz48dGp+affssfjzcZPvZeankTxUWdh0aioX+7c/XgVJfaBapB+re4nVHS3KtE0aqasVapETduhpcpeadneQ9F5NTsnUvUk2f/3HXCUeInXJYlty5W0inMY+ih86CSks7gErSNqBodngy6dL+sz/fHRD3mn9+pjt9DkX8c1TFxL9i1J77qAxueK6nhlVSPohnxBkUmBkXUnahLUOwnCSpqzMnchBtjdV3m9U3xx1BEoWZHGOlR/+vzOar3MZ1D2+t1k6QnKDw0c5yr7FC8g1unF7qfMUXxuKKM60cV1kKButcrd0ygQkdCDYvHHS1aE7T3/D4+sQrZ79BPAKRq6mWuTjyiJPKzyx5eVZbd4OSiRniYM5BXYSKWuD/dzHEWBV19Qv2nUlny1AjzNAcrbYoiB5P/1VHQ4SV1nfDoi9tBV/1TG6z1FW+x99Qq1NUTfNYP9jDLsyyyqV/OoJD1Sd7qvt5BkRHUlT9qwcMcpcBPcH4XsyDMVniWNIuCgWQlyTETBGge2fo+XXASxgwKTw8un0LBywVSlmrBY5H8yKZr9nlCx2Dc8c+gwH4+NVnkmAepUP6cTlfMbtwZFJ7mOx9C4VGknabk8gio7Pp17PGkGBPjH0qIGXvdLAoC+bVIi0P3jG6tYKBBDN9dKxjaOUhcjgqoCEh59x7Xyl18vJ2lmENRgby7BMOYpNt4UeFjgvJ+cfj3z+AcqJKwo1a62v2B52OfQT3mqZnjAMVUG4ucd7pLeIOGrSIkMmykUPLOEgOrvBWV/v5KegFffeNiN7JOb9s/2Ee58kM8BBcDFOcHcglx6sSXqOEy1sq1LOOLsiMmfRd1qeS1wsd/go9ke+TAEycunpV2ADcoP+TH8O5mIxS18RW22M3iS1Qm4sLFxwQsuYrbrhiKGXmLYCpOr44ibBWrjK5WYbfqXc3yPL8DpuThCGynjlB8O+o3VRH6KMrKTvdLxKPAMYr/URSedonx4W0r/mFL/nbitgcvH3ftB4+J28k+ai3bu/9/3EVuWHaULcqOskXZUbYoO8oWZUfZouwoW5QdZYuyo2xRdpQtyo6yRdlRtig7yhZlR9mi7ChblB1li7KjbFF2lC3KjrJF2VG2KDvKFuU/hbLW19T/a3GlYRr/CRZXmMZK/5HLPxb8zw7/A1rBDL7QoqmFAAAAAElFTkSuQmCC" class="avatar avatar-sm rounded-circle me-2">
                                    @endif
                                    <a class="text-heading font-semibold" href="#">
                                        {{ $rev->reviewer->fname.' '.$rev->reviewer->lname}}
                                    </a>
                                </td>
                                <td>
                                    {{ $rev->created_at->toFormattedDateString() }}
                                </td>
                                <td>
                                    @if ($rev->business !== null && $rev->business->cover !== null)
                                    <img alt="..." src="{{ asset('public/storage/'.$rev->business->cover) }}" class="avatar avatar-xs rounded-circle me-2">
                                    @else
                                    <img alt="..." src="data:image/png;base64,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" class="avatar avatar-xs rounded-circle me-2">
                                    @endif
                                    <a class="text-heading font-semibold" href="#">
                                        @if ($rev->business !== null && $rev->business->cover !== null)
                                        {{ $rev->business->name }}
                                        @else
                                            <small title="Invalid record" class="text-danger">Removed</small>
                                        @endif
                                    </a>
                                </td>
                                <td>
                                    @if ($rev->business !== null && $rev->business->cover !== null)
                                    {{ $rev->business->owner->fname.' '.$rev->business->owner->lname }}
                                    @else
                                    <small title="Invalid record" class="text-danger">Removed </small>
                                    @endif
                                </td>
                                <td>
                                    <div class="flex items-center">
                                        @for($i = 1; $i <= 5; $i++)
                                            @if($rev->rating >= $i) 
                                                <svg aria-hidden="true" style="color:#FFB20E" class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Fourth star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                            @else
                                                <svg aria-hidden="true" class="w-5 h-5 text-gray-300 dark:text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Fifth star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                            @endif
                                        @endfor
                                        <p class="ml-2 text-sm font-medium text-gray-500 dark:text-gray-400">{{ $rev->rating }} out of 5</p>
                                    </div>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-neutral">View</a>
                                    <button wire:click="delete({{ $rev->id }})" type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            @empty
                                
                            @endforelse
                        </tbody>
                    </table>                    
                    @if ($all_reviews->count() < 1)
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