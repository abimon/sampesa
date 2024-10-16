<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\DepMessageController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\InterviewController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\LoanApplicationController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\MeetingController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VacanciesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Admin as AdminMiddleware;
use App\Models\depMessage;

Route::get('/', function () {
    $data = [
        [
            "Feasibility Studies",
            "Our journey begins with a meticulous feasibility study to assess the potential of a project. This study delves into various aspects, including market demand, financial projections, and regulatory considerations."
        ],
        [
            "Presentation of Findings",
            "Once the feasibility study is complete, we present our findings to the land or project owner. This presentation outlines the type of project that can be undertaken, the required investment, the projected timeline for returns, and the profit-sharing structure."
        ],
        [
            "Investment Options",
            "Our joint ventures typically rely on prime land owned by our partners. We invest in income-generating projects such as rentals, hotels, hostels, and commercial properties. We offer full financing for the project, including consultancy fees, which are often 10% of the total project value"
        ],
        [
            "Consultancy Fees",
            "In cases where the client is unable to cover the consultancy fees upfront, we share the cost, with the client responsible for 30% and SAMPESA GROUP LIMITED covering the remaining 70%."
        ],
        [
            "Facilitating Approvals",
            "We assist our clients in obtaining necessary government approvals, including architectural, structural, mechanical, electrical, and quantity surveying drawings. Our team of professionals ensures compliance with all regulatory requirements."
        ],
        [
            "Seeking Funding",
            "We leverage our network to help clients secure funding from local and international investors who share our vision for sustainable property development. Clients and investors can choose to finance the project partially or in full."
        ],
        [
            "Vetting Process",
            "Before finalizing any joint venture agreement, we conduct thorough due diligence on both the client and potential investors to ensure transparency and alignment of interests. "
        ],
        [
            "Transparent Transactions",
            "All payments and transactions related to the joint venture are facilitated through our office, ensuring transparency and accountability at every stage. "
        ],
        [
            "Long-Term Lease Agreements",
            "Our joint venture model prioritizes long-term lease agreements of 15 years or more to ensure sufficient time for our investment to yield returns."
        ],
        [
            "Legal Representation",
            "Each joint venture team includes legal representatives to provide guidance, advice, and ensure proper documentation of agreement"
        ]
    ];
    $tests = [
        [
            "Sampesa Group made our property investment journey seamless and profitable. Their team’s in-depth knowledge, attention to detail, and unwavering support turned our vision into a successful reality.",
            "James Njuguna",
            "images/testimonial/use1.jpg"
        ],
        [
            "Working with Sampesa Group was a game-changer for us. They offered personalized solutions, expert advice, and ensured we were always informed. Their dedication truly made a difference.",
            "Brian Omondi",
            "images/testimonial/use2.jpg"
        ],
        [
            "Sampesa Group delivered exceptional service from beginning to end. Their professionalism, reliability, and commitment to quality gave us complete peace of mind throughout the entire process.",
            "Kevin Maina",
            "images/testimonial/use3.jpg"
        ]
    ];
    return view('front.home', compact('data', "tests"));
});
Route::get('/contact', function () {
    return view('front.contact');
});
Route::get('/projects', function () {
    return view('front.projects');
});
Route::get('/services', function () {
    $services = [
        [
            "s1.jpg",
            "Property Development / Joint Venture",
            "Our property development services encompass the entire lifecycle of projects, from conceptualization to delivery, ensuring exceptional results and transformative spaces that inspire",
            "property-development"
        ],
        [
            "s2.jpg",
            "Drawings And Designs",
            "Our drawings and designs combine innovative concepts,aesthetic appeal, and functional efficiency, creating spaces that harmonize with the environment, elevate experiences, and inspire the imagination.",
            "drawing"
        ],
        [
            "s3.jpeg",
            "Credit Services/ Loans",
            "we provide comprehensive credit services to help you navigate the complexities of credit and achieve your financial goals",
            "credit"
        ],
        [
            "s4.jpg",
            "Court Bails including Sureties",
            "We offer comprehensive services for court bail arrangements, including the provision of sureties and collateral. Our team ensures a smooth process, guiding you through each step to secure the necessary guarantees for bail.",
            "court"
        ],
        [
            "s5.jpg",
            "Collateral Guarantee",
            "Our collateral guarantee service ensures that your assets are fully protected, providing you with peace of mind. We offer comprehensive support to secure your investments, backed by our financial solutions.",
            "collateral"
        ],
        [
            "s6.jpg",
            "Property Management",
            "Our property management services streamline operations, enhance asset performance, and provide peace of mind, allowing you to focus on your core business while we expertly handle the day-to-day management of your properties.",
            "property-management"
        ],
        [
            "s7.jpg",
            "Property Value Addition",
            "Through strategic enhancements and innovative solutions, our property value addition services unlock the full potential of your real estate investments, maximizing their market value and ensuring a strong return on investment.",
            "value-addition"
        ],
        [
            "s8.jpg",
            "Biogas & Borehole Services",
            "Our biogas installation services provide sustainable and cost-effective solutions, harnessing organic waste to produce clean energy and contributing to a greener future for both residential and commercial applications. We provide borehole drilling services.",
            "biogas"
        ],
        [
            "s9.jpg",
            "Asset Valuation",
            "Our asset valuation services offer accurate and insightful assessments,providing you with a clear understanding of the true value of your assets for informed decision-making and maximizing your investment potential.",
            "valuation"
        ]
    ];
    return view('front.services',compact('services'));
});
Route::get('/about', function () {
    return view('front.about');
});
Route::get('/blog', function () {
    return view('front.blog');
});
Route::controller(HomeController::class)->group(function () {
    Route::get('/career', 'career');
    Route::get('/application/{id}', 'apply');
    Route::get('/services/{service}','services');
    Route::get('/loans/{loan}','loan');
});
Route::post('/apply', [ApplicationController::class,'store'])->name('');

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});
Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        if (Auth()->user()->role->department->title!='Administration') {
            if(Auth()->user()->fname == null){
                return view('auth.step-two');
            }
            if(Auth()->user()->pp_path == null){
                return view('auth.step-three');
            }
            return view('dashboard.index');
        } else {
            return view('dashboard.index');
        }
    });
    Route::resources([
        'user' => UserController::class,
        'chat' => MessageController::class,
        'roles'=> RolesController::class,
        'meeting'=>MeetingController::class,
        'task'=>TaskController::class,
        'report'=>ReportController  ::class,
        'message'=>DepMessageController::class,
        'project'=>ProjectController::class,
        'department'=>DepartmentsController::class,
        'leave'=>LeaveController::class,
        'vacancy'=>VacanciesController::class,
        'applications'=>ApplicationController::class,
        'interviews'=>InterviewController::class,
        'salary'=>SalaryController::class,
        'income'=>IncomeController::class,
        'expense'=>ExpenseController::class,
        'loan'=>LoanController::class,
        'loan_application'=>LoanApplicationController::class,
    ]);
    Route::middleware(AdminMiddleware::class)->group(function () {
        Route::resources([
            'clients'=>ClientController::class,
            'staff'=>StaffController::class,
        ]);
    });
    Route::get('/profile', function () {
        return view('dashboard.user.profile');
    });
    Route::get('update_docs', function () {
        return view('auth.step-three');
    });
});
Route::get('/log', function () {
    return url()->previous();
});
