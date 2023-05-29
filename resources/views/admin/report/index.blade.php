<x-app-layout>

    @section('title', 'Report')

    @push('css')
        <style>
            table{
                border-collapse: collapse;
                width: 100%;
                font-family: "Arial Narrow";
            }
            td,th{
                border: 1px solid;
                padding: 2px;
                font-size: 13.5px;
            }
            th{
                text-align: center;
            }

            @media print{@page {size: landscape}}
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
                <button onclick="printDiv('printableArea')" type="button" class="btn btn-sm btn-dark">
                    <i class="fas fa-print mr-1"></i>
                    Print
                </button>
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
            <div class="card-body" id="printableArea" >
                <div style="font-family: Arial Narrow">
                    <div>
                        <center st>
                            <h4>
                                Utilization of Fund by Sub-Project Activities
                            </h4>
                            <h5 style="font-weight: bold">
                                For the Quarter: .......................................
                            </h5>
                        </center>
                        <div style="font-weight: bold">
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
                        <tr style="background-color: yellow">
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>
                            <th>6</th>
                            <th>7 (6-5)</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td colspan="2"><b>Revenue Expenditure</b></td>
                            <td style="background-color: lightgray"></td>
                            <td style="background-color: lightgray"></td>
                            <td style="background-color: lightgray"></td>
                            <td style="background-color: lightgray"></td>
                            <td style="background-color: lightgray"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Pay of Officer</td>
                            <td style="text-align: center"> Q4 </td>
                            <td style="text-align: center">15</td>
                            <td style="text-align: center">15</td>
                            <td style="text-align: center">50</td>
                            <td style="text-align: center">35</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Pay of Staff</td>
                            <td style="text-align: center"> Q4 </td>
                            <td style="text-align: center">20</td>
                            <td style="text-align: center">35</td>
                            <td style="text-align: center">70</td>
                            <td style="text-align: center">35</td>
                        </tr>
                        <tr >
                            <td></td>
                            <td><b>Supplier & Services: </b></td>
                            <td style="background-color: lightgray"></td>
                            <td style="background-color: lightgray"></td>
                            <td style="background-color: lightgray"></td>
                            <td style="background-color: lightgray"></td>
                            <td style="background-color: lightgray"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Travel Expenses</td>
                            <td style="text-align: center"> Q4 </td>
                            <td style="text-align: center">20</td>
                            <td style="text-align: center">55</td>
                            <td style="text-align: center">100</td>
                            <td style="text-align: center">45</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Development & maintenance of Website</td>
                            <td style="text-align: center"> Q4 </td>
                            <td style="text-align: center"> 30</td>
                            <td style="text-align: center">85</td>
                            <td style="text-align: center">200</td>
                            <td style="text-align: center">115</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Printing & Stationary</td>
                            <td style="text-align: center"> Q4 </td>
                            <td style="text-align: center">15</td>
                            <td style="text-align: center">100</td>
                            <td style="text-align: center">400</td>
                            <td style="text-align: center">300</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Financial Support & Allowances</td>
                            <td style="text-align: center"> Q4 </td>
                            <td style="text-align: center">20</td>
                            <td style="text-align: center">120</td>
                            <td style="text-align: center">520</td>
                            <td style="text-align: center">400</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Books and Journals for library</td>
                            <td style="text-align: center"> Q4 </td>
                            <td style="text-align: center">30</td>
                            <td style="text-align: center">150</td>
                            <td style="text-align: center">600</td>
                            <td style="text-align: center">450</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Training & Study Tour</td>
                            <td style="text-align: center"> Q4 </td>
                            <td style="text-align: center">20</td>
                            <td style="text-align: center">170</td>
                            <td style="text-align: center">200</td>
                            <td style="text-align: center">30</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Conference/Seminar/Workshop</td>
                            <td style="text-align: center"> Q4 </td>
                            <td style="text-align: center">30</td>
                            <td style="text-align: center">200</td>
                            <td style="text-align: center">500</td>
                            <td style="text-align: center">300</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Chemical/Reagent etc</td>
                            <td style="text-align: center"> Q4 </td>
                            <td style="text-align: center">50</td>
                            <td style="text-align: center">250</td>
                            <td style="text-align: center">750</td>
                            <td style="text-align: center">500</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Consulting Services</td>
                            <td style="text-align: center"> Q4 </td>
                            <td style="text-align: center">60</td>
                            <td style="text-align: center">260</td>
                            <td style="text-align: center">800</td>
                            <td style="text-align: center">540</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Survey</td>
                            <td style="text-align: center"> Q4 </td>
                            <td style="text-align: center">40</td>
                            <td style="text-align: center">300</td>
                            <td style="text-align: center">500</td>
                            <td style="text-align: center">200</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Other Expenses</td>
                            <td style="text-align: center"> Q4 </td>
                            <td style="text-align: center">50</td>
                            <td style="text-align: center">350</td>
                            <td style="text-align: center">500</td>
                            <td style="text-align: center">150</td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align: center">
                                <i>Total Supply & Services (4800)</i>
                            </td>
                            <td style="text-align: center"> Q4 </td>
                            <td style="text-align: center">350</td>
                            <td style="text-align: center">350</td>
                            <td style="text-align: center">3200</td>
                            <td style="text-align: center">1800</td>
                        </tr>
                        <tr>
                            <td ></td>
                            <td>R/M: Refurbishion /Renovation</td>
                            <td style="text-align: center"> Q4 </td>
                            <td style="text-align: center">200</td>
                            <td style="text-align: center">550</td>
                            <td style="text-align: center">2600</td>
                            <td style="text-align: center">2100</td>
                        </tr>
                        <tr>
                            <td colspan="2"><b>(a) Total Revenue Expenditure</b></td>
                            <td style="text-align: center"></td>
                            <td style="text-align: center">950</td>
                            <td style="text-align: center">550</td>
                            <td style="text-align: center">10990</td>
                            <td style="text-align: center">10440</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    @push('js')
        <script>
            function printDiv(divName) {
                var printContents = document.getElementById(divName).innerHTML;
                var originalContents = document.body.innerHTML;

                document.body.innerHTML = printContents;

                window.print();

                document.body.innerHTML = originalContents;
            }
        </script>
    @endpush
</x-app-layout>
