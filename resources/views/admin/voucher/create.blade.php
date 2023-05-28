<x-app-layout>

    @section('title', 'Voucher')

    <x-slot name="header">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="fas fa-compass"></i>
                </div>
                <div>
                    <h4>Voucher</h4>
                </div>
            </div>
            <div class="page-title-actions">
                <a href="{{ route('voucher.index') }}" type="button" class="btn btn-sm btn-dark">
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
                        <form action="{{ route('voucher.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Voucher No<span class="text-red">*</span></label>
                                    <input type="text" name="voucher_no" class="form-control">
                                    @error('voucher_no')
                                    <span class="text-danger" role="alert">
                                            <p>{{ $message }}</p>
                                        </span>
                                    @enderror

                                </div>

                                <div class="form-group col-md-6">
                                    <label for="name">Voucher Date<span class="text-red">*</span></label>
                                    <input type="date" name="voucher_date" class="form-control">
                                    @error('voucher_date')
                                    <span class="text-danger" role="alert">
                                            <p>{{ $message }}</p>
                                        </span>
                                    @enderror

                                </div>

                                <div class="form-group col-md-12">
                                    <label for="description"> Narration </label>
                                    <textarea name="narration"
                                              rows="2" id="description" class="form-control"
                                              placeholder="Describe here...">{!! old('description') !!}</textarea>
                                </div>
                            </div>


                            <div class="row" id="append-area">
                                <div class="form-group col-md-6">
                                    <label for="name">Account<span class="text-red">*</span></label>
                                    <select name="acc_code[]" required id="" class="form-control">
                                        <option value="">Select Account</option>
                                        @foreach($accounts as $account)
                                            <option value="{{$account->acc_code}}">({{$account->acc_code}}
                                                ) {{$account->acc_name}}</option>
                                        @endforeach
                                    </select>

                                    @error('acc_code')
                                    <span class="text-danger" role="alert">
                                            <p>{{ $message }}</p>
                                        </span>
                                    @enderror

                                </div>

                                <div class="form-group col-md-5">
                                    <label for="name">Amount<span class="text-red">*</span></label>
                                    <input type="number" name="amount[]" required class="form-control">

                                    @error('amount')
                                    <span class="text-danger" role="alert">
                                            <p>{{ $message }}</p>
                                        </span>
                                    @enderror

                                </div>

                                <div class="form-group col-md-1">
                                    <label for="name">.</label>
                                    <input type="button" value="+" id="add-btn" class="form-control btn btn-success">
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
        <script>
            $('#add-btn').on('click', function () {
                $('#append-area').append(`
                <div class="form-group col-md-6">
                                    <select required name="acc_code[]" id="" class="form-control">
                                        <option value="">Select Account</option>
                                                                                @foreach($accounts as $account)
                <option value="{{$account->acc_code}}">({{$account->acc_code}}) {{$account->acc_name}}</option>
                                                                                @endforeach
                </select>



                </div>

                <div class="form-group col-md-5">
                    <input type="number" name="amount[]" required class="form-control">

                </div>


`)
            })
        </script>
    @endpush
</x-app-layout>
