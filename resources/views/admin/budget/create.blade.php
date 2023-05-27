<x-app-layout>

    @section('title', 'Budget')

    <x-slot name="header">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="fas fa-compass"></i>
                </div>
                <div>
                    <h4>Budget</h4>
                </div>
            </div>
            <div class="page-title-actions">
                <a href="{{ route('budget.index') }}" type="button" class="btn btn-sm btn-dark">
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
                        <form action="{{ route('budget.store') }}" method="POST">
                            @csrf
                            <div class="row">

                                <div class="form-group col-md-6">
                                    <label for="name">Account<span class="text-red">*</span></label>
                                    <select name="acc_code" id="" class="form-control">
                                        <option value="">Select Account</option>
                                        @foreach($accounts as $account)
                                            <option value="{{$account->acc_code}}">({{$account->acc_code}}) {{$account->acc_name}}</option>
                                        @endforeach
                                    </select>

                                    @error('acc_code')
                                    <span class="text-danger" role="alert">
                                            <p>{{ $message }}</p>
                                        </span>
                                    @enderror

                                </div>

                                <div class="form-group col-md-6">
                                    <label for="name">Amount<span class="text-red">*</span></label>
                                    <input type="number" name="amount" class="form-control">

                                    @error('amount')
                                    <span class="text-danger" role="alert">
                                            <p>{{ $message }}</p>
                                        </span>
                                    @enderror

                                </div>

                                <div class="form-group col-md-12">
                                    <label  for="name">Financial year<span class="text-red">*</span></label>
                                    <select class="form-control" name="financial_year" id="">
                                        <option value="2021-2022">2021-2022</option>
                                        <option value="2022-2023">2022-2023</option>
                                        <option value="2023-2024">2023-2024</option>
                                        <option value="2024-2025">2024-2025</option>
                                        <option value="2025-2026">2025-2026</option>
                                        <option value="2026-2027">2026-2027</option>
                                    </select>
                                    @error('financial_year')
                                    <span class="text-danger" role="alert">
                                            <p>{{ $message }}</p>
                                        </span>
                                    @enderror

                                </div>

                                <div class="form-group col-md-12">
                                    <label for="description"> Narration </label>
                                    <textarea name="description"
                                              rows="3" id="description" class="form-control"
                                              placeholder="Describe here...">{!! old('description') !!}</textarea>
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
