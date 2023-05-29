<x-app-layout>

    @section('title', 'Report')

    @push('css')
        <style>
            table {
                border-collapse: collapse;
                width: 100%;
                font-family: "Arial Narrow";
            }

            td, th {
                border: 1px solid;
                padding: 2px;
                font-size: 13.5px;
                text-align: center;
            }

            th {
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
    <div class="container-fluid" style="font-family: "Arial Narrow";">
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
            <div class="card-body" id="printableArea">
                <div>
                    <div>
                        <center style="margin-bottom: 20px; font-family: 'Arial Narrow'">
                            <h4 style="color: blueviolet; ">
                                Statement of Expenditure for Category-1
                            </h4>
                            <h5>
                                Accelerating Strengthening Skills for Economic Transformation (ASSET) Project P 154577,
                                Credit No. 6874-BD
                            </h5>
                        </center>
                        <div style="display: flex; margin-bottom: 5px;">
                            <div style=" width: 50%">
                                    <table style="margin-bottom: 20px">
                                        <tbody>
                                        <tr>
                                            <td style="border: none;width: 35%; text-align: left">Payment made during the period</td>
                                            <td style="border: none; width: 20%"></td>
                                            <td style="width: 15%; text-align: left">From: </td>
                                            <td style="width: 10%"> </td>
                                            <td style="width: 10%"> </td>
                                            <td style="width: 10%"> </td>
                                        </tr>
                                        </tbody>
                                    </table>


                                <table>
                                    <tbody>
                                    <tr>
                                        <td style="text-align: left">
                                            The Following Expenditure have been incurred during before the closing
                                            date of the
                                        </td>
                                        <td>Yes</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left">
                                            The Following Expenditure have been incurred during the retroactive
                                            period
                                        </td>
                                        <td>-</td>
                                        <td>No</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div style="width: 30%">

                            </div>
                            <div style="width: 20%">
                                <table>
                                    <tbody>
                                    <tr>
                                        <td>Credit #</td>
                                        <td> 6874-BD</td>
                                    </tr>
                                    <tr>
                                        <td>Application #</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Category #</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>Page #</td>
                                        <td></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <table>
                        <thead>
                        <tr>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>
                            <th>6</th>
                            <th>7</th>
                            <th>8</th>
                            <th>9</th>
                            <th>10</th>
                            <th>11</th>
                            <th>12</th>
                            <th>13</th>
                            <th>14</th>
                        </tr>
                        <tr>
                            <th>Item No</th>
                            <th>Service Provider/Supplier/Payee's Name</th>
                            <th>Brief Description of the Expenditure</th>
                            <th>Prior Review Contract? (Yes or No)</th>
                            <th>Contract# (client Connection # for prior review contracts)</th>
                            <th>Contract Currency and Amount (Original + Amendment (BDT)</th>
                            <th>Invoice Number</th>
                            <th>Date of Payment</th>
                            <th>Total Amount of invoice covered by the application (net of Retention)</th>
                            <th>% Financed by the Bank</th>
                            <th>Expenditure amount Eligible for Financing and paid through Banking System (Except petty cash payment)</th>
                            <th>Amount other than petty cash system and not paid using banking system </th>
                            <th>Date of withdrawal from the designate account </th>
                            <th>Amount paid from Designate Account as applicable (which should be equal to #11)</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>100%</td>
                            <td>-</td>
                            <td>-</td>
                            <td></td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>100%</td>
                            <td>-</td>
                            <td>-</td>
                            <td></td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>100%</td>
                            <td>-</td>
                            <td>-</td>
                            <td></td>
                            <td>-</td>
                        </tr>

                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>100%</td>
                            <td>-</td>
                            <td>-</td>
                            <td></td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>100%</td>
                            <td>-</td>
                            <td>-</td>
                            <td></td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>100%</td>
                            <td>-</td>
                            <td>-</td>
                            <td></td>
                            <td>-</td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <td style="border: none; font-size: 12px; text-align: left" colspan="12">
                                    Supporting documents for this SOE retained at: PMU, ASSET Project. Directorate of Technical Education, F-4/B, Agargaon A/A, Sher-e-Bangla Nagar, Dhaka
                            </td>

                        </tr>


                        <tr >
                            <td style="border: none; text-align: center; padding-top: 30px" colspan="7">
                                <b>Prepared by</b>
                            </td>
                            <td style="border: none; text-align: center; padding-top: 30px" colspan="7">
                                <b>Authorised Representative</b>
                            </td>
                        </tr>
                        </tfoot>
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
