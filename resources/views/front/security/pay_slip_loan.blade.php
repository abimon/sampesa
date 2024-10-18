@extends('layouts.app',['title'=>'Pay Slip Loan'])
@section('content')
<div id="page-wrapper">
    <div class="container" style="padding-top:100px;">
        <div class="thumnail" style="margin:1em 1px;">
            <a href="index.php" style="text-decoration: none; padding-bottom: 10px; padding-top: 150px;">
                <div> <img src="https://img.icons8.com/?size=100&id=98961&format=png&color=000000" class="size"> </div>
            </a>
            <hr>
            <h4 style="font-weight: bold; font-family: sans-serif; color: blue; font-size: 30px; padding-top:20px; padding-bottom:20px ;">
                <img src='https://img.icons8.com/?size=100&id=xgzck7TcTBcj&format=png&color=000000' style='height: 40px; width: 40px;'>
                Payslip(Salary) Loans.
            </h4>
            <div class="col-md-5 textright">
            </div>
            <div class="clearfix"></div>
            <hr>
            <div class="bs-examplwidget-shadow" style="padding-top:1px;">
                <div class="row" style="border:1px solid gray; border-radius: 20px; padding: 20px;">
                    <form action="" method="POST" enctype="multipart/form-data" style='padding-left: 50px; text-align: center;'>
                        <input type="hidden" name="loan_id" class="form-control" value="Pay Slip">
                        <input type="hidden" name="client" class="form-control" value="{{Auth()->user()->id}}">
                        <div style=' padding: 15px'>
                            <div style='padding-bottom: 10px; font-weight: bold; font-size: 25px;'>
                                <h3> Employee's Details.</h3>
                            </div>
                            <hr>
                            <div class="form-group" style="padding-top:1em; ">
                                <label for="type_of_employment">Type of Employment:</label>
                                <select class="form-control" id="type_of_employment" name="type_of_employment" required>
                                    <option value="">Category</option>
                                    <option value="Permanent">Permanent</option>
                                    <option value="Contract">Contract</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="form-group ">
                                <label for="employer">Employer:</label>
                                <input type="text" class="form-control" name="employer" placeholder="Employer Name">
                            </div>
                            <div class="form-group ">
                                <label for="job_title">Job Title:</label>
                                <input type="text" class="form-control" name="job_title" placeholder="Job Title">
                            </div>
                            <div class="form-group ">
                                <label for="monthly_salary">Monthly Salary:</label>
                                <input type="number" class="form-control" name="monthly_salary" placeholder="E.g. 50000">
                            </div>
                            <div class="form-group ">
                                <label for="files">Bank statements(3-6 months):</label>
                                <input type="file" class="form-control" name="files[]" multiple>
                            </div>
                            <div class="form-group ">
                                <label for="amount">Amount:</label>
                                <input type="number" class="form-control" name="amount" placeholder="E.g. 100000">
                            </div>
                        </div>
                        <div class="form-row" style='padding-top: 20;'>
                            <button type="submit" name="submit_capital_loan" value="submit_capital_loan" class="btn btn-primary">Submit and Proceed <b class="fa fa-angle-right"></b></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection