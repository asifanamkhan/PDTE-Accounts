<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use App\Models\EconomicAccount;
use Illuminate\Http\Request;

class BudgetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $budgets = Budget::all();
        return view('admin.budget.index', compact('budgets'));
    }

    public function budgetStatusChange(Request  $request){
        try {
            $budget = Budget::findOrFail($request->id);
//            return $request->type;
            $budget->status = $request->type == 1 ? 0 : 1;
            $budget->save();
            return true;
        }catch (\Exception $excepton){
            return $excepton->getMessage();
        }


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

        return view('admin.budget.create', compact('accounts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Budget();
        $data->acc_code = $request->acc_code;
        $data->amount = $request->amount;
        $data->financial_year = $request->financial_year;
        $data->description = $request->description;
        $data->status = 0;

        $data->save();

        return redirect()->route('budget.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Budget  $budget
     * @return \Illuminate\Http\Response
     */
    public function show(Budget $budget)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Budget  $budget
     * @return \Illuminate\Http\Response
     */
    public function edit(Budget $budget)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Budget  $budget
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Budget $budget)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Budget  $budget
     * @return \Illuminate\Http\Response
     */
    public function destroy(Budget $budget)
    {
        //
    }
}
