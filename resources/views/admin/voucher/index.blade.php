<x-app-layout>
    @push('css')
        <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
        <style>
            .customers {
                font-family: Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            .customers td, #customers th {
                border: 1px solid #ddd;
                padding: 4px;
            }

            .customers tr:nth-child(even) {
                background-color: #f2f2f2;
            }

            .customers tr:hover {
                background-color: #ddd;
            }

            .customers th {
                padding-top: 4px;
                padding-bottom: 4px;
                text-align: left;
                background-color: #04AA6D;
                color: white;
            }
        </style>
    @endpush
    @section('title', 'Voucher')

    <x-slot name="header">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="fas fa-compass"></i>
                </div>
                <div>
                    <h4>List of Voucher</h4>
                </div>
            </div>
            <div class="page-title-actions">

                <a href="{{ route('voucher.create') }}" type="button" class="btn btn-sm btn-info">
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
                    <table id="example" class="table customers">
                        <thead class="dataTableHeader">
                        <tr>
                            <th>SN</th>
                            <th>V.no</th>
                            <th>V.Date</th>
                            <th>Account</th>
                            <th>Amount</th>
                            <th>Narration</th>
{{--                            <th>Status</th>--}}
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($vouchers as $key => $voucher)
                            <tr class="dataTableHeader">
                                <td>{{$key+1}}</td>
                                <td>{{$voucher->voucher_no}}</td>
                                <td>{{$voucher->voucher_date}}</td>
                                <td>{{$voucher->account->acc_name}}</td>
                                <td>{{$voucher->amount}}</td>
                                <td>{{$voucher->narration}}</td>
{{--                                <td>--}}
{{--                                    @if($Voucher->status  == 1)--}}
{{--                                        <button onclick="changeStatus(1,{{$Voucher->id}})" class="btn btn-sm btn-success">Active</button>--}}
{{--                                    @else--}}
{{--                                        <button onclick="changeStatus(0,{{$Voucher->id}})" class="btn btn-sm btn-danger">In Active</button>--}}
{{--                                    @endif--}}
{{--                                </td>--}}

                                <td>
                                    <div class="btn btn-group">
                                        <a href="{{route('voucher.edit', $voucher->id)}} "
                                           class="btn btn-sm btn-info" title="Edit"><i class="fa fa-edit"></i></a>
                                        <form action="{{route('voucher.destroy',$voucher->id)}}"
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

            function changeStatus(type, id){
                if (confirm('are you sure, want to change status?')) {
                    $.ajax({
                        type:'POST',
                        data:{
                            "_token": "{{ csrf_token() }}",
                            type: type,
                            id: id
                        },
                        url:"",
                        success:function(data){
                            window.location.href = "{{route('voucher.index')}}";
                            // $('#account-add-area').html(data)
                        }
                    });
                } else {
                    return false;
                }
            }
            // end delete function
        </script>

    @endpush
</x-app-layout>
