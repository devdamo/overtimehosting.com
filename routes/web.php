<?php

use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\CloudronController;
use App\Http\Controllers\Admin\JobAdminController;
use App\Http\Controllers\Admin\JobCategoryController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\AdminAdvertisementController;
use App\Http\Controllers\AdminCompanyController;
use App\Http\Controllers\AdminPagesController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\MattermostController;
use App\Http\Controllers\MOTDController;
use App\Http\Controllers\NewsAdminController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PermissionsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductReviewController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PterodactylController;
use App\Http\Controllers\RoadmapController;
use App\Http\Controllers\ServiceMaintenanceController;
use App\Http\Controllers\WebhookController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('index');

use App\Http\Controllers\LegalPageController;

Route::prefix('legal')->group(function () {
    Route::get('{type}', [LegalPageController::class, 'index'])->name('legal.index');
    Route::get('{type}/latest', [LegalPageController::class, 'latest'])->name('legal.latest');
    Route::get('{type}/{day}-{month}', [LegalPageController::class, 'showByDate'])->name('legal.showByDate');
});



use App\Http\Controllers\AdminLegalPageController;

// Admin routes for legal pages
Route::middleware(['auth', 'role:admin'])->prefix('dashboard')->group(function () {
    Route::get('/legal', [AdminLegalPageController::class, 'index'])->name('admin.legal.index');
    Route::get('/legal/create', [AdminLegalPageController::class, 'create'])->name('admin.legal.create');
    Route::get('/legal/{id}/edit', [AdminLegalPageController::class, 'edit'])->name('admin.legal.edit');
    Route::post('/legal', [AdminLegalPageController::class, 'store'])->name('admin.legal.store');
    Route::put('/legal/{id}', [AdminLegalPageController::class, 'update'])->name('admin.legal.update');
    Route::delete('/legal/{id}', [AdminLegalPageController::class, 'destroy'])->name('admin.legal.destroy');
});




Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [ContactController::class, 'getContactsForDashboard'])->name('dashboard');
});


Route::prefix('dashboard')->middleware(['auth', 'verified'])->group(function () {
    // Roadmap
    Route::get('roadmap', [RoadmapController::class, 'index'])->name('roadmap.index');
    Route::post('roadmap', [RoadmapController::class, 'store'])->name('roadmap.store');
    Route::put('roadmap/{roadmap}', [RoadmapController::class, 'update'])->name('roadmap.update');
    Route::delete('roadmap/{roadmap}', [RoadmapController::class, 'destroy'])->name('roadmap.destroy');

    // Comments
    Route::post('comments', [CommentController::class, 'store'])->name('comments.store');

    // Permissions for admin only
    Route::get('permissions', [PermissionsController::class, 'index'])->name('permissions.index')->middleware('role:admin');
    Route::post('permissions', [PermissionsController::class, 'store'])->name('permissions.store')->middleware('role:admin');


    Route::middleware(['auth', 'role:admin'])->prefix('/pages')->group(function () {
        Route::get('/', [AdminPagesController::class, 'index'])->name('admin.pages.index');
        Route::get('/create', [AdminPagesController::class, 'create'])->name('admin.pages.create');
        Route::post('/store', [AdminPagesController::class, 'store'])->name('admin.pages.store');
        Route::get('/{page}/edit', [AdminPagesController::class, 'edit'])->name('admin.pages.edit');
        Route::put('/{page}', [AdminPagesController::class, 'update'])->name('admin.pages.update');
        Route::delete('/{page}', [AdminPagesController::class, 'destroy'])->name('admin.pages.destroy');
    });

    Route::resource('maintenance', ServiceMaintenanceController::class)->names([
            'index' => 'admin.maintenance.index',
            'create' => 'admin.maintenance.create',
            'store' => 'admin.maintenance.store',
            'edit' => 'admin.maintenance.edit',
            'update' => 'admin.maintenance.update',
            'destroy' => 'admin.maintenance.destroy',
    ])->middleware('role:admin');


    Route::prefix('admin')->name('admin.')->middleware('role:admin')->group(function () {
        Route::resource('categories', AdminCategoryController::class);
    });

    Route::prefix('/mattermost')->name('admin.mattermost.')->middleware(['auth', 'role:admin'])->group(function () {
        Route::get('/', [MattermostController::class, 'index'])->name('index');
        Route::get('/channels', [MattermostController::class, 'getChannels'])->name('channels');
        Route::post('/send-message', [MattermostController::class, 'sendMessage'])->name('send');
        Route::get('/playbooks', [MattermostController::class, 'listPlaybookRuns'])->name('playbooks');
    });

    Route::prefix('cloudron')->name('admin.')->middleware(['auth', 'role:admin'])->group(function () {
        // Other admin routes...

        // Cloudron routes
        Route::get('/', [CloudronController::class, 'showInstalledApps'])->name('cloudron.page');
    });

    Route::prefix('dashboard/pterodactyl')->name('admin.pterodactyl.')->middleware(['auth', 'role:admin'])->group(function () {
        Route::get('/', [PterodactylController::class, 'index'])->name('index');
        Route::get('/create', [PterodactylController::class, 'create'])->name('create');
        Route::post('/store', [PterodactylController::class, 'store'])->name('store');
    });

    Route::prefix('webhooks')->middleware('role:admin')->group(function () {
        Route::get('/', [WebhookController::class, 'edit'])->name('admin.webhooks.edit');
        Route::post('/', [WebhookController::class, 'update'])->name('admin.webhooks.update');
    });

    // Admin Product Management (with role:admin)
    Route::prefix('/products')->name('dashboard.products.')->middleware('role:admin')->group(function () {
        Route::resource('/', AdminProductController::class, [
            'parameters' => ['' => 'product'],
            'names' => [
                'index' => 'index',
                'create' => 'create',
                'store' => 'store',
                'show' => 'show',
                'edit' => 'edit',
                'update' => 'update',
                'destroy' => 'destroy',
            ],
        ]);
    });

    Route::prefix('/')->middleware(['auth', 'role:admin'])->group(function () {
        Route::resource('categories', AdminCategoryController::class);
    });



    // Admin Company Management (with role:admin)
    Route::resource('companies', AdminCompanyController::class)->middleware('role:admin');

    // Admin News Management (with role:admin)
    Route::resource('news', NewsAdminController::class)->names([
        'index' => 'dashboard.news.index',
        'create' => 'dashboard.news.create',
        'store' => 'dashboard.news.store',
        'edit' => 'dashboard.news.edit',
        'update' => 'dashboard.news.update',
        'destroy' => 'dashboard.news.destroy',
    ])->middleware('role:admin');
});

use App\Http\Controllers\AdminGeneralArticleController;
use App\Http\Controllers\AdminGameArticleController;
use App\Http\Controllers\AdminVideoArticleController;
use App\Http\Controllers\AdminFAQController;
use App\Http\Controllers\GeneralArticleController;

// Admin routes with 'auth' middleware to ensure only authenticated users can access
Route::middleware(['auth', 'role:admin'])->prefix('dashboard/')->group(function () {

    // General Articles Routes
    Route::get('general-articles', [AdminGeneralArticleController::class, 'index'])->name('admin.general-articles.index');
    Route::get('general-articles/create', [AdminGeneralArticleController::class, 'create'])->name('admin.general-articles.create');
    Route::post('general-articles', [AdminGeneralArticleController::class, 'store'])->name('admin.general-articles.store');
    Route::get('general-articles/{id}/edit', [AdminGeneralArticleController::class, 'edit'])->name('admin.general-articles.edit');
    Route::put('general-articles/{id}', [AdminGeneralArticleController::class, 'update'])->name('admin.general-articles.update');
    Route::delete('general-articles/{id}', [AdminGeneralArticleController::class, 'destroy'])->name('admin.general-articles.destroy');

    // Game Articles Routes
    Route::get('game-articles', [AdminGameArticleController::class, 'index'])->name('admin.game-articles.index');
    Route::get('game-articles/create', [AdminGameArticleController::class, 'create'])->name('admin.game-articles.create');
    Route::post('game-articles', [AdminGameArticleController::class, 'store'])->name('admin.game-articles.store');
    Route::get('game-articles/{id}/edit', [AdminGameArticleController::class, 'edit'])->name('admin.game-articles.edit');
    Route::put('game-articles/{id}', [AdminGameArticleController::class, 'update'])->name('admin.game-articles.update');
    Route::delete('game-articles/{id}', [AdminGameArticleController::class, 'destroy'])->name('admin.game-articles.destroy');

    // Video Articles Routes
    Route::get('video-articles', [AdminVideoArticleController::class, 'index'])->name('admin.video-articles.index');
    Route::get('video-articles/create', [AdminVideoArticleController::class, 'create'])->name('admin.video-articles.create');
    Route::post('video-articles', [AdminVideoArticleController::class, 'store'])->name('admin.video-articles.store');
    Route::get('video-articles/{id}/edit', [AdminVideoArticleController::class, 'edit'])->name('admin.video-articles.edit');
    Route::put('video-articles/{id}', [AdminVideoArticleController::class, 'update'])->name('admin.video-articles.update');
    Route::delete('video-articles/{id}', [AdminVideoArticleController::class, 'destroy'])->name('admin.video-articles.destroy');

    // FAQ Routes
    Route::get('faqs', [AdminFAQController::class, 'index'])->name('admin.faqs.index');
    Route::get('faqs/create', [AdminFAQController::class, 'create'])->name('admin.faqs.create');
    Route::post('faqs', [AdminFAQController::class, 'store'])->name('admin.faqs.store');
    Route::get('faqs/{id}/edit', [AdminFAQController::class, 'edit'])->name('admin.faqs.edit');
    Route::put('faqs/{id}', [AdminFAQController::class, 'update'])->name('admin.faqs.update');
    Route::delete('faqs/{id}', [AdminFAQController::class, 'destroy'])->name('admin.faqs.destroy');
});

// Public routes for documentation
Route::prefix('documentation')->group(function () {
    Route::get('general/{slug}', [GeneralArticleController::class, 'show'])->name('documentation.general.show');
    Route::get('general', [GeneralArticleController::class, 'index'])->name('documentation.general.index');
    // Similarly, add routes for games, videos, and FAQs if needed
});

// web.php

// Admin routes for managing advertisements
Route::middleware(['auth', 'role:admin'])->prefix('dashboard')->group(function () {
    Route::resource('advertisements', AdminAdvertisementController::class)->names([
        'index' => 'admin.advertisements.index',
        'create' => 'admin.advertisements.create',
        'store' => 'admin.advertisements.store',
        'edit' => 'admin.advertisements.edit',
        'update' => 'admin.advertisements.update',
        'destroy' => 'admin.advertisements.destroy',
    ]);
});



Route::prefix('dashboard/job_categories')->name('admin.job_categories.')->middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/', [JobCategoryController::class, 'index'])->name('index');
    Route::get('/create', [JobCategoryController::class, 'create'])->name('create');
    Route::post('/store', [JobCategoryController::class, 'store'])->name('store');
    Route::get('/{job_category}/edit', [JobCategoryController::class, 'edit'])->name('edit');
    Route::put('/{job_category}', [JobCategoryController::class, 'update'])->name('update');
    Route::delete('/{job_category}', [JobCategoryController::class, 'destroy'])->name('destroy');
});

Route::prefix('dashboard/jobs')->name('admin.jobs.')->middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/', [JobAdminController::class, 'index'])->name('index');
    Route::get('/create', [JobAdminController::class, 'create'])->name('create');
    Route::post('/store', [JobAdminController::class, 'store'])->name('store');
    Route::get('/{job}/edit', [JobAdminController::class, 'edit'])->name('edit');
    Route::put('/{job}', [JobAdminController::class, 'update'])->name('update');
    Route::delete('/{job}', [JobAdminController::class, 'destroy'])->name('destroy');
});


Route::get('/jobs/{id}/apply', [JobApplicationController::class, 'showApplicationForm'])->name('jobs.apply');
Route::post('/jobs/{id}/apply', [JobApplicationController::class, 'store'])->name('jobs.apply.store');
Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');
Route::get('/jobs/{id}', [JobController::class, 'show'])->name('jobs.show');

// Admin routes to view applications
Route::middleware(['auth', 'role:admin'])->prefix('dashboard/')->name('admin.')->group(function () {
    Route::get('job-applications', [JobApplicationController::class, 'showApplications'])->name('job-applications.index');
    Route::get('/applications/{id}', [JobApplicationController::class, 'show'])->name('applications.show');
});




use App\Http\Controllers\GameArticleController;
use App\Http\Controllers\VideoArticleController;
use App\Http\Controllers\FaqArticleController;

Route::get('/documentation', function () {
    return view('documentation.index');
})->name('documentation.index');

// General Articles Routes
Route::get('/documentation/general', [GeneralArticleController::class, 'index'])->name('documentation.general.index');
Route::get('/documentation/general/{slug}', [GeneralArticleController::class, 'show'])->name('documentation.general.show');

// Games Articles Routes
Route::prefix('documentation/games')->group(function () {
    Route::get('/', [GameArticleController::class, 'index'])->name('documentation.games');
    Route::get('/{category}', [GameArticleController::class, 'category'])->name('documentation.games.category');
    Route::get('/{category}/{slug}', [GameArticleController::class, 'show'])->name('documentation.games.show');
});

// Video Articles Routes
Route::prefix('documentation/videos')->group(function () {
    Route::get('/', [VideoArticleController::class, 'index'])->name('documentation.videos');
    Route::get('/{slug}', [VideoArticleController::class, 'show'])->name('documentation.videos.show');
});

// FAQ Routes
Route::get('/documentation/faq', [FaqArticleController::class, 'index'])->name('documentation.faq');

// Search Route
Route::get('/documentation/search', [GeneralArticleController::class, 'search'])->name('documentation.search');



// routes/web.php
use App\Http\Controllers\TeamMemberController;

Route::middleware(['auth', 'role:admin'])->prefix('dashboard/')->name('admin.')->group(function () {
    Route::get('/team', [TeamMemberController::class, 'manage'])->name('team.index');
    Route::get('/team/create', [TeamMemberController::class, 'create'])->name('team.create');
    Route::post('/team', [TeamMemberController::class, 'store'])->name('team.store');
    Route::get('/team/{teamMember}/edit', [TeamMemberController::class, 'edit'])->name('team.edit');
    Route::put('/team/{teamMember}', [TeamMemberController::class, 'update'])->name('team.update');
    Route::delete('/team/{teamMember}', [TeamMemberController::class, 'destroy'])->name('team.destroy');
});

// Public routes
Route::get('/team', [TeamMemberController::class, 'index'])->name('team.index');
Route::get('/team/{slug}', [TeamMemberController::class, 'show'])->name('team.show');

Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::post('/uploadFile', [FileUploadController::class, 'upload'])->name('upload.file');


Route::post('/submit-rating', [ProductController::class, 'submitRating'])->name('submit.rating');

Route::post('/upload/image', [ImageUploadController::class, 'uploadImage'])->name('upload.image');
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{category}', [CategoryController::class, 'showCategoryProducts'])->name('categories.products');
// Public Products
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
Route::post('/products/{product}/reviews', [ProductReviewController::class, 'store'])->name('productReviews.store')->middleware('auth');
Route::get('/checkout/{product}', [CheckoutController::class, 'index'])->name('checkout');

// Public route to show all maintenance data
Route::get('/maintenance', [ServiceMaintenanceController::class, 'publicIndex'])->name('maintenance.index');

// Public Pages
Route::get('/p/{slug}', [PagesController::class, 'show'])->name('pages.show');


// Public Projects Page
Route::get('/projects', [CompanyController::class, 'index'])->name('projects.index');

// Public Roadmap Page
Route::get('/roadmap', [RoadmapController::class, 'show'])->name('roadmap.show');

// Profile and Account Settings (for authenticated users)
Route::middleware('auth')->group(function () {
    Route::get('/account-settings', [ProfileController::class, 'edit'])->name('account.edit');
    Route::patch('/account-settings', [ProfileController::class, 'update'])->name('account.update');
    Route::delete('/account-settings', [ProfileController::class, 'destroy'])->name('account.destroy');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('/profile/avatar', [ProfileController::class, 'updateAvatar'])->name('profile.updateAvatar');
    Route::delete('/profile/avatar', [ProfileController::class, 'deleteAvatar'])->name('profile.deleteAvatar');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Public Pages
Route::get('/qna', [HomeController::class, 'qna'])->name('qna');
Route::get('/terms-of-service', [PageController::class, 'termsOfService'])->name('terms-of-service');
Route::get('/privacy-policy', [PageController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/cookie-notice', [PageController::class, 'cookieNotice'])->name('cookie-notice');
Route::get('/features', [PageController::class, 'features'])->name('features');
Route::get('/card-payments', [PageController::class, 'cardpayments'])->name('cardpayments');

// News for Public
Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.show');
Route::post('/news/{id}/comment', [NewsController::class, 'storeComment'])->name('news.comment.store');
Route::post('/news/{id}/rate', [NewsController::class, 'storeRating']);

// Message of the Day (MOTD)
Route::get('/motd', [MOTDController::class, 'index'])->name('motd.index');
Route::post('/motd', [MOTDController::class, 'store'])->name('motd.store');


require __DIR__.'/auth.php';
