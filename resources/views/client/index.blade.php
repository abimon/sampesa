@if(Auth()->user()->role=='Client')
@extends('layouts.client')
@section('client')
<div class="row">
    <div class="col-md-3 col-xs-6">
        <a href="client-full-profile.php" class="thumbnail">
            <div class=" bg-warning" style="text-align:center;background: rgba(0,0,0,0.02);padding-top:1em;padding-bottom:1em;margin:0px;">
                <h1 class="fa fa-user fa-4x text-success" style="color:white;"></h1>
                <hr>
                <h4 style="font-weight: bold;text-transform:uppercase;">My Profile</h4>
            </div>
        </a>
    </div>

    <div class="col-md-3 col-xs-6">
        <a href="client-ongoing-projects.php" class="thumbnail">
            <div class=" bg-success" style="text-align:center;background: navy!important;padding-top:1em;padding-bottom:1em;margin:0px;">
                <h1 class="fa fa-briefcase fa-4x text-success" style="color:white;"></h1>
                <hr>
                <h4 style="font-weight: bold;text-transform:uppercase;">View Services</h4>
            </div>
        </a>
    </div>

    <div class="col-md-3 col-xs-6">
        <a href="my-payments-projects.php" class="thumbnail">
            <div class=" bg-info" style="text-align:center;background: rgba(0,0,0,0.02);padding-top:1em;padding-bottom:1em;margin:0px;">
                <h1 class="fa fa-money fa-4x text-success" style="color:white;"></h1>
                <hr>
                <h4 style="font-weight: bold;text-transform:uppercase;color:white;">My Payments</h4>
            </div>
        </a>
    </div>

    <div class="col-md-3 col-xs-6">
        <a href="my-invoices-projects.php" class="thumbnail">
            <div class=" bg-primary" style="text-align:center;background: rgba(0,0,0,0.02);padding-top:1em;padding-bottom:1em;margin:0px;">
                <h1 class="fa fa-credit-card fa-4x text-success" style="color:white;"></h1>
                <hr>
                <h4 style="font-weight: bold;text-transform:uppercase;color:white;">My Invoices</h4>
            </div>
        </a>
    </div>

    <div class="col-md-3 col-xs-6">
        <a href="../front-office/client-documents.php?token={{(Auth()->user()->id) * 289993456}}" class="thumbnail">
            <div class=" bg-primary" style="text-align:center;background: rgba(0,0,0,0.02);padding-top:1em;padding-bottom:1em;margin:0px;">
                <h1 class="fa fa-file-pdf-o fa-4x text-success" style="color:white;"></h1>
                <hr>
                <h4 style="font-weight: bold;text-transform:uppercase;color:white;">My Documents </h4>
            </div>
        </a>
    </div>
    <div class="col-md-3 col-xs-6">
        <a href="messages.php" class="thumbnail">
            <div class=" bg-info" style="text-align:center;background: rgba(0,0,0,0.02);padding-top:1em;padding-bottom:1em;margin:0px;">
                <h1 class="fa fa-comments fa-4x text-success" style="color:white;"></h1>
                <hr>
                <h4 style="font-weight: bold;text-transform:uppercase;color:white;">messages</h4>
            </div>
        </a>
    </div>

    <div class="col-md-3 col-xs-6">
        <a href="#" data-target="#change-pass" data-toggle="modal" class="thumbnail">
            <div class="thumbnail bg-danger" style="text-align:center;background: rgba(0,0,0,0.02);padding-top:1em;padding-bottom:1em;margin:0px;">
                <h1 class="fa fa-cogs fa-4x text-success" style="color:white;"></h1>
                <hr>
                <h4 style="font-weight: bold;text-transform:uppercase;">Settings</h4>
            </div>
        </a>
    </div>
    <div class="modal fade" id="change-pass">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <button class="close" data-dismiss="modal">&times;</button>
                    <h3 class="pull-left" style="color:white;"><b class="fa fa-key"></b> Set a New Account Password</h3>
                    <div class="clearfix"></div>
                </div>
                <div class="modal-body" style="padding:10px;">
                    <form action="controls.php" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="id_number" placeholder="Enter Your ID Number">
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control" min-length="8" name="new_password" placeholder="Type a New Password">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" name="update_password" type="submit">Update Password <b class="fa fa-check-circle"></b></button>
                            <a href="/logout" class="btn btn-default pull-right"><b class="fa fa-sign-out"></b> Logout </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
@endsection
@endif