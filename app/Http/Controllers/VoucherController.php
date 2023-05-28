<?php

namespace App\Http\Controllers;

use App\Models\EconomicAccount;
use App\Models\Voucher;
use Carbon\Carbon;
use Illuminate\Http\Request;

class VoucherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vouchers = Voucher::with('account')->get();
        return view('admin.voucher.index', compact('vouchers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $accountL1 = EconomicAccount::where('parent_code',0)->pluck('acc_code');
        $accountL2 = EconomicAccount::whereIn('parent_code', $accountL1)->pluck('acc_code');
        $accounts = EconomicAccount::whereIn('parent_code', $accountL2)->get();
        return view('admin.voucher.create', compact('accounts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $count = count($request->acc_code);

        for ($i=0; $i<$count; $i++){
            $data = new Voucher();
            $data->voucher_date = $request->voucher_date;
            $data->voucher_no = $request->voucher_no;
            $data->acc_code = $request->acc_code[$i];
            $data->amount = $request->amount[$i];
            $data->status = 1;
            $data->narration = $request->narration;
            $data->entry_date = Carbon::now()->toDateString();

            $data->save();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Voucher  $voucher
     * @return \Illuminate\Http\Response
     */
    public function show(Voucher $voucher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Voucher  $voucher
     * @return \Illuminate\Http\Response
     */
    public function edit(Voucher $voucher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Voucher  $voucher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Voucher $voucher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Voucher  $voucher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Voucher $voucher)
    {
        //
    }
}
