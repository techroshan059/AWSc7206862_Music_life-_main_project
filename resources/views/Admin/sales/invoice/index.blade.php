@extends('layouts.app')

@section('ktmspice-admin-content')


    <div class="page-header">
        <h3 class="page-title">
            Order Invoice
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('admin/sales')}}">Sales</a></li>
                <li class="breadcrumb-item" aria-current="page"><a href="#">Order</a></li>
                <li class="breadcrumb-item active" aria-current="page">#12012</li>
            </ol>
        </nav>
    </div>


    <div class="row">
        <div class="col-lg-12">
            <div class="card px-2">
                <div class="card-body">
                    <div class="container-fluid">
                        <h3 class="text-right">Invoice&nbsp;&nbsp;#INV-17</h3>
                        <hr>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-8">
                                <div style=" margin-bottom: 10px;" class="table-responsive">
                                    <table class="table table-bordered">

                                        <tbody>
                                        <tr>
                                            <td class="text-left">
                                                <h5> <i style="font-size: 14px" class="fa fa-car"></i>  DELIVERY</h5>
                                            </td>

                                        </tr>
                                        <tr >
                                            <td class="text-left">
                                                <p>Deliver at <b>Oct 5, 2018, 5:18PM</b></p>
                                            </td>

                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <div class="table-responsive ">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Qty</th>
                                            <th>Description</th>

                                            <th class="text-right">Total</th>
                                        </tr>
                                        </thead>
                                        <tbody style="text-align: center">

                                        <tr class="text-right">
                                            <td class="text-left" style="width: 1%;"><span style="padding: 1px 6px 1px 6px; border: 1px solid;">100</span></td>
                                            <td class="text-left">Brochure Design</td>

                                            <td style="width: 10%">$40</td>
                                        </tr>
                                        <tr class="text-right">
                                            <td class="text-left">1</td>
                                            <td class="text-left">Brochure Design</td>

                                            <td>$40</td>
                                        </tr>
                                        <tr class="text-right">
                                            <td class="text-left">1</td>
                                            <td class="text-left">Brochure Design</td>

                                            <td>$40</td>
                                        </tr>
                                        <tr class="text-right">
                                            <td class="text-left">1</td>
                                            <td class="text-left">Brochure Design</td>

                                            <td>$40</td>
                                        </tr>
                                        <tr>
                                            <td  class="text-right" colspan="2">

                                                <p> Subtotal:</p>
                                                <p> Subtotal:</p>
                                                <p> Subtotal:</p>
                                                <p> Subtotal:</p>

                                            </td>
                                            <td class="text-right">
                                                <p>$40.75</p>
                                                <p>$3.00</p>
                                                <p>$3.75</p>
                                                <p>$7.75</p>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td  class="text-right" colspan="2">Total:</td>
                                            <td class="text-right">$54.10</td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>

                                <div style=" margin-top: 20px;" class="table-responsive">
                                    <table class="table table-bordered">

                                        <tbody>
                                        <tr>
                                            <td class="text-left">
                                                <h5>PREPAID</h5>
                                                <span>DO NOT CHARGE</span>
                                            </td>

                                        </tr>


                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <div class="col-lg-4">
                                <div style=" margin-bottom: 14px;" class="table-responsive table table-bordered">
                                    <table class="table">

                                        <tbody>
                                        <tr>
                                            <td colspan="2" class="text-left">
                                                <p style="font-size: 14px;font-weight: 800;margin-bottom: 5px;">Delivery To</p>
                                                <p style="margin-bottom: 3px;">Anthony R</p>
                                                <p style="margin-bottom: 6px;">131 Eastern Ave 204 Mancheaster, NH 03104</p>
                                                <p style="font-size: 15px;margin-bottom: 3px;">(860) 287-2703</p>


                                            </td>

                                        </tr>
                                        <tr >
                                            <td>
                                                <i class="fa fa-car"></i>
                                            </td>
                                            <td class="text-left">
                                                <span style="font-size: 15px; font-weight: 700;">Delivery Instructions: </span> buzz with the intercom and we'll let you go.
                                            </td>

                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <span style="font-style: italic;margin-top: 17px; font-size: 16px;">
                                QUESTIONS? Customers Service is available at (877) 858-1085
                            </span>
                            </div>
                        </div>

                    </div>

                    <div class="container-fluid w-100">
                        <a href="#" class="btn btn-primary float-right mt-4 ml-2"><i class="fa fa-print mr-1"></i>Print</a>
                        <a href="#" class="btn btn-primary float-right mt-4 ml-2"><i class="fa fa-print mr-1"></i>Print</a>
                        <a href="#" class="btn btn-success float-right mt-4"><i class="fa fa-share mr-1"></i>Send Invoice</a>
                    </div>

                </div>
            </div>
        </div>
    </div>



@stop()
