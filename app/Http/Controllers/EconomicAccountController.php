<?php

namespace App\Http\Controllers;

use App\Models\EconomicAccount;
use Illuminate\Http\Request;

class EconomicAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.economic-account.create');
    }

    public function getEcoAccountDataAsParent(Request  $request){
        $accounts = EconomicAccount::where('parent_code', $request->code)
                    ->get();

        if($request->type == 1){
            $parent = EconomicAccount::where('acc_code', $request->code)
                ->first();

            $level = '('.$parent->acc_code.') ' .$parent->acc_name;
        }elseif ($request->type == 2){
            $child = EconomicAccount::where('acc_code', $request->code)
                ->first();
            $parent = EconomicAccount::where('acc_code', $child->parent_code)
                ->first();

            $level = '('.$child->acc_code.')' .$child->acc_name.' => '.
                    '('.$parent->acc_code.') => ' .$parent->acc_name;

        }

        $parent_code = $request->code;
        $html = view('admin.economic-account.render-accounts', compact('accounts','parent_code','level'))->render();
        return response()->json([
             $html,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $accCheck = EconomicAccount::where('parent_code', $request->parent_code)
            ->count();

        $data = new EconomicAccount();
        $data->parent_code = $request->parent_code;
        $data->acc_code = $request->acc_code;
        $data->acc_name = $request->acc_name;

        $data->save();

        return $accCheck;
    }

    public function getEcoAccountTreeList(){
        $accounts = EconomicAccount::where('parent_code', 0)->get();
        $html = view('admin.economic-account.account-tree-list-render', compact('accounts'))->render();
        return response()->json([
            $html,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EconomicAccount  $economicAccount
     * @return \Illuminate\Http\Response
     */
    public function show(EconomicAccount $economicAccount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EconomicAccount  $economicAccount
     * @return \Illuminate\Http\Response
     */
    public function edit(EconomicAccount $economicAccount)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EconomicAccount  $economicAccount
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EconomicAccount $economicAccount)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EconomicAccount  $economicAccount
     * @return \Illuminate\Http\Response
     */
    public function destroy(EconomicAccount $economicAccount)
    {
        //
    }
}
