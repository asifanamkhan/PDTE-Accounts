<x-app-layout>

    @section('title', 'Report')

    @push('css')
        <style>
            table{
                border-collapse: collapse;
            }
            td,th{
                border: 1px solid;
                padding: 2px;
                font-size: 13.5px;
            }
            th{
                text-align: center;
            }
        </style>
    @endpush

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
                <div>
                    <div>
                        <center>
                            <h4>
                                Utilization of Fund by Sub-Project Activities
                            </h4>
                            <h5>
                                For the Quarter: ........
                            </h5>
                        </center>
                        <div>
                            <div>Sub-Project Title: </div>
                            <div>Name of Institution: </div>
                            <div>IDP No: </div>
                        </div>
                    </div>
                    <table>
                        <thead>
                        <tr>
                            <th rowspan="2">Economic Code(As Per IBAS++)</th>
                            <th rowspan="2">Item Of Expenditure/Activities</th>
                            <th colspan="3">Actual Expenditure</th>
                            <th rowspan="2">Approved Budget (Sub-project life)</th>
                            <th rowspan="2">Budget Balance</th>
                        </tr>
                        <tr>
                            <th >Current Quarter</th>
                            <th>Financial Year To Date</th>
                            <th>Cumulative To Date</th>
                        </tr>
                        </thead>
                    </table>
                </div>

            </div>
        </div>

    </div>
    @push('js')

    @endpush
</x-app-layout>
