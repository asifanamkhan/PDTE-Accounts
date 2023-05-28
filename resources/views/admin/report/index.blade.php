<x-app-layout>

    @section('title', 'Report')

    <x-slot name="header">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="fas fa-compass"></i>
                </div>
                <div>
                    <h4>Report</h4>
                </div>
            </div>
            <div class="page-title-actions">
                <a href="{{ route('report.index') }}" type="button" class="btn btn-sm btn-dark">
                    <i class="fas fa-arrow-left mr-1"></i>
                    Back
                </a>
            </div>
        </div>
    </x-slot>

    <!-- Main Content -->
    <div class="container-fluid">
        <div class="page-header">
            <div class="d-inline">
                @if (Session::has('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{Session::get('error')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{route('report.store')}}" method="post">
                            @csrf
                            <div class="row">

                                <div class="form-group col-md-6">
                                    <label for="name">From Date<span class="text-red">*</span></label>
                                    <input type="date" name="from_date" class="form-control">
                                    @error('Report_date')
                                    <span class="text-danger" role="alert">
                                            <p>{{ $message }}</p>
                                        </span>
                                    @enderror

                                </div>

                                <div class="form-group col-md-6">
                                    <label for="name">To Date<span class="text-red">*</span></label>
                                    <input type="date" name="to_date" class="form-control">
                                    @error('Report_date')
                                    <span class="text-danger" role="alert">
                                            <p>{{ $message }}</p>
                                        </span>
                                    @enderror

                                </div>

                            </div>
                            <div class="row mt-30">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @push('js')

    @endpush
</x-app-layout>
