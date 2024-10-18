@extends('layouts.app',['title'=>'Property Loan'])
@section('content')
<section class="portfolio-item-info" style="padding-top: 2em;">
    <div class="container">
        <!-- Portfolio Item Row -->
        <div class="row">
            <div class="col-md-4">
                <div class="image-container" style="position: relative;">
                    <img class="img-responsive" src="{{asset('storage/front/loans/proploan.jpg')}}" alt="" style="height: auto; max-width: 100%; object-fit: cover;">
                </div>
            </div>

            <div class="col-md-8">
                <h3 class="head1" style="text-align: center; text-transform: uppercase;">
                    <strong style="font-weight: bold; color: #528ac5;">Property Loan</strong>
                </h3>
                <p style="line-height: 1.5;">
                    Sampesa Group Limited specializes in property loans, offering individuals and businesses a variety of flexible financing options. Our competitive rates and customer-centric approach make it easier for you to purchase or refinance residential homes, apartments, commercial buildings, and vacant land. Choose Sampesa Group Limited to secure the right property loan that aligns with your real estate objectives.<br>
                </p>

            </div>
        </div>
        <div class="row mb-2 mt-2">
            <div class="col-md-8">
                <h3>To apply for a property loan with Sampesa Group Limited, follow these simple steps:</h3>
                <p>1. Contact Us: Reach out via website, hotline, or branch to express interest in a property loan.</p>
                <p>2. Consultation & Pre-Approval: Schedule with a loan officer for financial assessment and pre-approval.</p>
                <p>3. Gather Documents: Collect IDs, income proof, bank statements, and property details.</p>
                <p>4. Complete Application: Fill the loan form with accurate details.</p>
                <p>5. Property Valuation: Arrange for property valuation.</p>
                <p>6. Credit Check: Ensure good credit history.</p>
                <p>7. Loan Approval: Receive formal approval.</p>
                <p>8. Loan Agreement: Carefully review and sign.</p>
                <p>9. Property Insurance: Secure as required.</p>
                <p>10. Closing & Disbursement: Coordinate loan funds disbursement.</p>
                <p>11. Monthly Payments: Start regular payments.</p>
                12. Customer Support: Get assistance as needed.
                </p>
            </div>
            <div class="col-md-4">
                <div class="mb-2">
                    <a href="" target="_top" class="btn btn-danger btn-blink">Land Purchase Loan</a>
                </div>
                <div class="mb-2">
                    <a href="" target="_top" class="btn btn-danger btn-blink">Home Purchase Loan</a>
                </div>
                <div class="mb-2">
                    <a href="" target="_top" class="btn btn-danger btn-blink">Home Construction Loan</a>
                </div>
                <div class="mb-2">
                    <a href="" target="_top" class="btn btn-danger btn-blink">Home Improvement Loan</a>
                </div>
                <div class="mb-2">
                    <a href="" target="_top" class="btn btn-danger btn-blink">Commercial Property Loan</a>
                </div>
                <div class="mb-2">
                    <a href="" target="_top" class="btn btn-danger btn-blink">Real Estate Investment Loan</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
    </div>
</section>
@endsection