<x-app-layout>
    @push('css')
        <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    @endpush
    @section('title', 'Budget')

    <x-slot name="header">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="fas fa-compass"></i>
                </div>
                <div>
                    <h4>List of Book Categories</h4>
                </div>
            </div>
            <div class="page-title-actions">

                <a href="{{ route('budget.create') }}" type="button" class="btn btn-sm btn-info">
                    <i class="fas fa-plus mr-1"></i>
                    Create
                </a>


            </div>
        </div>
    </x-slot>

    <!-- Main Content -->
    <div class="container-fluid">
        <div class="page-header">
            <div class="d-inline">
                @if (Session::has('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{Session::get('message')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

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
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <table id="example" class="table table-hover table-bordered ">
                        <thead class="dataTableHeader">
                        <tr>
                            <th>SN</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($budgets as $key => $budget)
                            <tr class="dataTableHeader">
                                <td>{{$key+1}}</td>
                                <td>{{$budget->acc_code}}</td>
                                <td>{{$budget->amount}}</td>
                                <td>{{$budget->financial_year}}</td>
                                <td>{{$budget->description}}</td>
                                <td>
                                    <div class="btn btn-group">
                                        <a href="{{route('budget.edit', $budget->id)}} "
                                           class="btn btn-sm btn-info" title="Edit"><i class="fa fa-edit"></i></a>
                                        <form action="{{route('budget.destroy',$budget->id)}}"
                                              method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button id="cat-delete"
                                                    class="btn btn-sm btn-danger btn-delete" title="Delete"><i
                                                    class="fa fa-trash-alt"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @push('js')
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
        <script>

            $(document).ready(function () {
                $('#example').DataTable();
            });

            // start delete function
            $('.btn-delete').on('click', function () {
                if (confirm('are you sure, want to delete this?')) {
                    return true;
                } else {
                    return false;
                }
            })
            // end delete function
        </script>

    @endpush
</x-app-layout>
