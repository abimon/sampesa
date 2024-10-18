@extends('layouts.app',['title'=>'Personal Deposit Loan'])
@section('content')
<div class="main-page" style=" padding-top:130px ;">
    <div class="thumbnail" style='border: 1px solid black; border-radius: 20px; padding: 20px; padding-top: 20px ;'>
        <div class="container" style="padding-top:30px;padding-bottom:2em;">
            <div class="col-md-8" style="margin:0px;padding:0px;">
                <a href="index.php" style="text-decoration: none; padding-bottom: 10px; padding-top: 10px;">
                    <div> <img src="https://img.icons8.com/?size=100&id=98961&format=png&color=000000" class="size"> </div>
                </a>
                <hr>
                <h4 style="font-weight: bold; font-family: sans-serif; color: blue; font-size: 30px ; padding-top: 20px; padding-bottom:10px ;">
                    <img src='https://img.icons8.com/?size=100&id=yfL0AXCknXk0&format=png&color=000000' style='height: 40px; width: 40px;'>
                    Personal Deposit Loan.
                </h4>
                <hr>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="container">
            <p>A personal deposit loan is a type of loan where you can use your own funds held in a deposit account as collateral. We are excited to offer you this opportunity with our personal deposit loan product.
            </p>
            <p class="">
                Use your own funds as collateral and qualify for up to 5 times your initial shares. For example, with a deposit of 10,000 KES, you can qualify for a loan amount of up to 50,000 KES. Leverage your savings for competitive interest rates and flexible repayment options. Fill out the form below to explore this opportunity and our team will assist you in processing your loan application. Achieve your financial goals with our personal deposit loan.
            </p>
            <h4 style="margin:1.5em 1px;opacity:0.6;">Please take the below steps to proceed</h4>

            <h3>Your Account Balance is <b style="font-size:100%;" class="badge badge-primary"></b> Ksh <a href="#" data-toggle="modal" data-target="#deposit-modal" class="btn btn-success pull-right"><b class="fa fa-cloud-upload"></b> Make a Deposit </a></h3>
            <hr>
            <div style="margin:1.5em 1px;">
                <div class="col-md-6">
                    <h4 style="opacity:0.7;">You Qualify for upto <u> Kshs </u> payable within 24 months at a flat interest rate of <u>5% per month</u> </h4>
                </div>
                <div class="col-md-6">
                    <a href="loan-processing.php" class="btn btn-primary" style="font-weight:bold;">Apply Loan Now <b class="fa fa-angle-right"></b> </a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="modal fade" id="deposit-modal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <button class="close" data-dismiss="modal">&times;</button>
                            <h3>Make A Deposit To Your Account To Proceed</h3>
                        </div>
                        <div class="modal-body" style="padding:20px;">
                            <div id="mpesa_phone_number" style="display:none;">
                                <form action="/pesapal-iframe" method="post">
                                    <label>Enter Amount You Want To Deposit</label>

                                    <input type="number" class="form-control" name="amount" placeholder="Enter Amount" value="" />
                                    <input type="hidden" name="type" value="MERCHANT" readonly="readonly" />
                                    <input type="hidden" name="description" value="Personal Deposit Loan Collateral" />
                                    <input type="hidden" name="reference" value="1" />
                                    <input type="hidden" name="first_name" value="1" />
                                    <input type="hidden" name="last_name" value="1" />
                                    <input type="hidden" name="email" value="email@email.com" />

                                    <br><br>
                                    <button type="submit" class="btn-blink">PAY INVOICE NOW</button>
                                </form>
                            </div>
                            <script>
                                function show_mpesa_number() {
                                    document.getElementById("mpesa_phone_number").style.display = "block";
                                }

                                function show_account_info() {
                                    document.getElementById("mpesa_phone_number").style.display = "none";
                                }
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection