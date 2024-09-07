<?php

use Illuminate\Support\Facades\Route;





































use App\Http\Livewire\HrDashboard\Index;


use App\Http\Livewire\Admin\AdminApi;
use App\Http\Livewire\Admin\AdminGeneral;
use App\Http\Livewire\Admin\AdminRole;






use App\Http\Livewire\Cart;


use App\Http\Livewire\Chat;

use App\Http\Livewire\ChatLivechat;
use App\Http\Livewire\ClientDashboard\ClientList;
use App\Http\Livewire\ClientDashboard\ClientNew;
use App\Http\Livewire\ClientDashboard\ClientProfile;
use App\Http\Livewire\ClientDashboard\ClientView;
use App\Http\Livewire\Coming;
use App\Http\Livewire\Construction;
use App\Http\Livewire\ContactList;
use App\Http\Livewire\ContactList2;
use App\Http\Livewire\Cookies;
use App\Http\Livewire\Counters;
use App\Http\Livewire\Datatable;
use App\Http\Livewire\Dragula;
use App\Http\Livewire\Dropdown;
use App\Http\Livewire\Editprofile;
use App\Http\Livewire\ElementColors;
use App\Http\Livewire\ElementFlex;
use App\Http\Livewire\ElementHeight;
use App\Http\Livewire\ElementsBorder;
use App\Http\Livewire\ElementsDisplay;
use App\Http\Livewire\ElementsMargin;
use App\Http\Livewire\ElementsPadding;
use App\Http\Livewire\ElementTypography;
use App\Http\Livewire\ElementWidth;
use App\Http\Livewire\EmailCompose;
use App\Http\Livewire\EmailInbox;
use App\Http\Livewire\EmailRead;
use App\Http\Livewire\EmployeeDashboard\EmployeeAttendance;
use App\Http\Livewire\EmployeeDashboard\EmployeeExpenses;
use App\Http\Livewire\EmployeeDashboard\EmployeeLeaves;
use App\Http\Livewire\EmployeeDashboard\EmployeeMyleaves;
use App\Http\Livewire\EmployeeDashboard\EmployeePayslips;
use App\Http\Livewire\Emptypage;
use App\Http\Livewire\Error400;
use App\Http\Livewire\Error401;
use App\Http\Livewire\Error403;
use App\Http\Livewire\Error404;
use App\Http\Livewire\Error500;
use App\Http\Livewire\Error503;
use App\Http\Livewire\Faq;
use App\Http\Livewire\FileAttachments;
use App\Http\Livewire\FileDetails;
use App\Http\Livewire\FileManager;
use App\Http\Livewire\FileManagerList;
use App\Http\Livewire\Footers;
use App\Http\Livewire\ForgotPassword1;
use App\Http\Livewire\ForgotPassword2;
use App\Http\Livewire\ForgotPassword3;
use App\Http\Livewire\FormEditor;
use App\Http\Livewire\FormElements;
use App\Http\Livewire\FormSizes;
use App\Http\Livewire\FormTreeview;
use App\Http\Livewire\FormWizard;
use App\Http\Livewire\Gallery;
use App\Http\Livewire\Headers;
use App\Http\Livewire\HrDashboard\HrAddemployee;
use App\Http\Livewire\HrDashboard\HrAddpayroll;
use App\Http\Livewire\HrDashboard\HrAttlist;
use App\Http\Livewire\HrDashboard\HrAttmark;
use App\Http\Livewire\HrDashboard\HrAttuser;
use App\Http\Livewire\HrDashboard\HrAttview;
use App\Http\Livewire\HrDashboard\HrAward;
use App\Http\Livewire\HrDashboard\HrDepartment;
use App\Http\Livewire\HrDashboard\HrEditpayroll;
use App\Http\Livewire\HrDashboard\HrEmplist;
use App\Http\Livewire\HrDashboard\HrEmpsalary;
use App\Http\Livewire\HrDashboard\HrEmpview;
use App\Http\Livewire\HrDashboard\HrEvents;
use App\Http\Livewire\HrDashboard\HrExpenses;
use App\Http\Livewire\HrDashboard\HrHoliday;
use App\Http\Livewire\HrDashboard\HrLeaves;
use App\Http\Livewire\HrDashboard\HrLeavesapplication;
use App\Http\Livewire\HrDashboard\HrNotice;
use App\Http\Livewire\HrDashboard\HrOverviewcldr;
use App\Http\Livewire\HrDashboard\HrRecentleaves;
use App\Http\Livewire\HrDashboard\HrSettings;
use App\Http\Livewire\Icons;
use App\Http\Livewire\Icons2;
use App\Http\Livewire\Icons3;
use App\Http\Livewire\Icons4;
use App\Http\Livewire\Icons5;
use App\Http\Livewire\Icons6;
use App\Http\Livewire\Icons7;
use App\Http\Livewire\Icons8;
use App\Http\Livewire\Icons9;
use App\Http\Livewire\Icons10;
use App\Http\Livewire\Icons11;
use App\Http\Livewire\ImageComparison;

use App\Http\Livewire\EmployeeDashboard\Index2;
use App\Http\Livewire\TaskDashboard\Index3;
use App\Http\Livewire\ProjectDashboard\Index4;
use App\Http\Livewire\ClientDashboard\Index5;
use App\Http\Livewire\JobDashboard\Index6;
use App\Http\Livewire\SuperAdmin\Index7;
use App\Http\Livewire\Invoice1;
use App\Http\Livewire\Invoice2;
use App\Http\Livewire\Invoice3;
use App\Http\Livewire\InvoiceAdd;
use App\Http\Livewire\InvoiceEdit;
use App\Http\Livewire\InvoiceList;
use App\Http\Livewire\JobDashboard\JobApplication;
use App\Http\Livewire\JobDashboard\JobApply;
use App\Http\Livewire\JobDashboard\JobList;
use App\Http\Livewire\JobDashboard\JobNew;
use App\Http\Livewire\JobDashboard\JobUser;
use App\Http\Livewire\JobDashboard\JobView;
use App\Http\Livewire\ListListgroup;
use App\Http\Livewire\Loaders;
use App\Http\Livewire\Lockscreen1;
use App\Http\Livewire\Lockscreen2;
use App\Http\Livewire\Lockscreen3;
// use App\Http\Livewire\Login1;
// use App\Http\Livewire\Login2;
// use App\Http\Livewire\Login3;


use App\Http\Livewire\MessageDanger;
use App\Http\Livewire\MessageSuccess;
use App\Http\Livewire\MessageWarning;
use App\Http\Livewire\Modal;
use App\Http\Livewire\Navigation;
use App\Http\Livewire\NotificationList;
use App\Http\Livewire\Notify;
use App\Http\Livewire\PageSessiontimeout;
use App\Http\Livewire\Pagination;
use App\Http\Livewire\Panels;

use App\Http\Livewire\Pricing;

use App\Http\Livewire\ProductDetails;


use App\Http\Livewire\Profile2;

use App\Http\Livewire\Progress;
use App\Http\Livewire\ProjectDashboard\ProjectList;
use App\Http\Livewire\ProjectDashboard\ProjectNew;
use App\Http\Livewire\ProjectDashboard\ProjectOverclndr;
use App\Http\Livewire\ProjectDashboard\ProjectView;




use App\Http\Livewire\Register3;
use App\Http\Livewire\ResetPassword1;


use App\Http\Livewire\Settings;
use App\Http\Livewire\SuperAdmin\SuperadminAdmins;
use App\Http\Livewire\SuperAdmin\SuperadminCompany;
use App\Http\Livewire\SuperAdmin\SuperadminInvoices;
use App\Http\Livewire\SuperAdmin\SuperadminRole;
use App\Http\Livewire\SuperAdmin\SuperadminSettings;
use App\Http\Livewire\SuperAdmin\SuperadminSubscription;
use App\Http\Livewire\SupportSystem\SupportAdminarticles;
use App\Http\Livewire\SupportSystem\SupportAdmincategories;
use App\Http\Livewire\SupportSystem\SupportAdmincustomer;
use App\Http\Livewire\SupportSystem\SupportAdmincustomerview;
use App\Http\Livewire\SupportSystem\SupportAdmindash;
use App\Http\Livewire\SupportSystem\SupportAdmineditprofile;
use App\Http\Livewire\SupportSystem\SupportAdminticketactive;
use App\Http\Livewire\SupportSystem\SupportAdminticketclosed;
use App\Http\Livewire\SupportSystem\SupportAdminticketclosedview;
use App\Http\Livewire\SupportSystem\SupportAdminticketlist;
use App\Http\Livewire\SupportSystem\SupportAdminticketnew;
use App\Http\Livewire\SupportSystem\SupportAdminticketview;
use App\Http\Livewire\SupportSystem\SupportAgentassign;
use App\Http\Livewire\SupportSystem\SupportAgentdash;
use App\Http\Livewire\SupportSystem\SupportAgenteditprofile;
use App\Http\Livewire\SupportSystem\SupportAgentticketactive;
use App\Http\Livewire\SupportSystem\SupportAgentticketclosed;
use App\Http\Livewire\SupportSystem\SupportAgentticketclosedview;
use App\Http\Livewire\SupportSystem\SupportAgentticketlist;
use App\Http\Livewire\SupportSystem\SupportAgentticketview;
use App\Http\Livewire\SupportSystem\SupportContact;
use App\Http\Livewire\SupportSystem\SupportEditprofile;
use App\Http\Livewire\SupportSystem\SupportKnowledge;
use App\Http\Livewire\SupportSystem\SupportKnowledgeview;
use App\Http\Livewire\SupportSystem\SupportLanding;
use App\Http\Livewire\SupportSystem\SupportOpenticket;
use App\Http\Livewire\SupportSystem\SupportTicketactive;
use App\Http\Livewire\SupportSystem\SupportTicketclosed;
use App\Http\Livewire\SupportSystem\SupportTicketclosedview;
use App\Http\Livewire\SupportSystem\SupportTicketcreate;
use App\Http\Livewire\SupportSystem\SupportTicketlist;
use App\Http\Livewire\SupportSystem\SupportTicketview;
use App\Http\Livewire\SupportSystem\SupportUserdash;

use App\Http\Livewire\Tables;


use App\Http\Livewire\TaskDashboard\TaskBoard;
use App\Http\Livewire\TaskDashboard\TaskComplete;
use App\Http\Livewire\TaskDashboard\TaskHold;
use App\Http\Livewire\TaskDashboard\TaskList;
use App\Http\Livewire\TaskDashboard\TaskNew;
use App\Http\Livewire\TaskDashboard\TaskOverclndr;
use App\Http\Livewire\TaskDashboard\TaskProfile;
use App\Http\Livewire\TaskDashboard\TaskRunning;
use App\Http\Livewire\TaskDashboard\TaskView;



use App\Http\Livewire\TodoList;

use App\Http\Livewire\Tooltip;
use App\Http\Livewire\UserList1;
use App\Http\Livewire\UserList2;
use App\Http\Livewire\UserList3;
use App\Http\Livewire\UserList4;
use App\Http\Livewire\Widgets1;

use GuzzleHttp\Psr7\Header;
use App\Http\Controllers\Controller;
use App\Http\Livewire\Products;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', Index::class);


Route::get('index', Index::class);


Route::get('admin-api', AdminApi::class);
Route::get('admin-general', AdminGeneral::class);
Route::get('admin-role', AdminRole::class);








Route::get('cart', Cart::class);


Route::get('chat', Chat::class);

Route::get('chat-livechat', ChatLivechat::class);
Route::get('client-list', ClientList::class);
Route::get('client-new', ClientNew::class);
Route::get('client-profile', ClientProfile::class);
Route::get('client-view', ClientView::class);
Route::get('coming', Coming::class);
Route::get('construction', Construction::class);
Route::get('contact-list', ContactList::class);
Route::get('contact-list2', ContactList2::class);
Route::get('cookies', Cookies::class);
Route::get('counters', Counters::class);
Route::get('datatable', Datatable::class);
Route::get('dragula', Dragula::class);
Route::get('dropdown', Dropdown::class);
Route::get('editprofile', Editprofile::class);
Route::get('element-colors', ElementColors::class);
Route::get('element-flex', ElementFlex::class);
Route::get('element-height', ElementHeight::class);
Route::get('elements-border', ElementsBorder::class);
Route::get('elements-display', ElementsDisplay::class);
Route::get('elements-margin', ElementsMargin::class);
Route::get('elements-paddning', ElementsPadding::class);
Route::get('element-typography', ElementTypography::class);
Route::get('element-width', ElementWidth::class);
Route::get('email-compose', EmailCompose::class);
Route::get('email-inbox', EmailInbox::class);
Route::get('email-read', EmailRead::class);
Route::get('employee-attendance', EmployeeAttendance::class);
Route::get('employee-expenses', EmployeeExpenses::class);
Route::get('employee-leaves', EmployeeLeaves::class);
Route::get('employee-myleaves', EmployeeMyleaves::class);
Route::get('employee-payslips', EmployeePayslips::class);
Route::get('emptypage', Emptypage::class);
Route::get('error400', Error400::class);
Route::get('error401', Error401::class);
Route::get('error403', Error403::class);
Route::get('error404', Error404::class);
Route::get('error500', Error500::class);
Route::get('error503', Error503::class);
Route::get('faq', Faq::class);
Route::get('file-attachments', FileAttachments::class);
Route::get('file-details', FileDetails::class);
Route::get('file-manager', FileManager::class);
Route::get('file-manager-list', FileManagerList::class);
Route::get('footers', Footers::class);
Route::get('forgot-password1', ForgotPassword1::class);
Route::get('forgot-password2', ForgotPassword2::class);
Route::get('forgot-password3', ForgotPassword3::class);
Route::get('form-editor', FormEditor::class);
Route::get('form-elements', FormElements::class);
Route::get('form-sizes', FormSizes::class);
Route::get('form-treeview', FormTreeview::class);
Route::get('form-wizard', FormWizard::class);
Route::get('gallery', Gallery::class);
Route::get('headers', Headers::class);
Route::get('hr-addemployee', HrAddemployee::class);
Route::get('hr-addpayroll', HrAddpayroll::class);
Route::get('hr-attlist', HrAttlist::class);
Route::get('hr-attmark', HrAttmark::class);
Route::get('hr-attuser', HrAttuser::class);
Route::get('hr-attview', HrAttview::class);
Route::get('hr-award', HrAward::class);
Route::get('hr-department', HrDepartment::class);
Route::get('hr-editpayroll', HrEditpayroll::class);
Route::get('hr-emplist', HrEmplist::class);
Route::get('hr-empsalary', HrEmpsalary::class);
Route::get('hr-empview', HrEmpview::class);
Route::get('hr-events', HrEvents::class);
Route::get('hr-expenses', HrExpenses::class);
Route::get('hr-holiday', HrHoliday::class);
Route::get('hr-leaves', HrLeaves::class);
Route::get('hr-leavesapplication', HrLeavesapplication::class);
Route::get('hr-notice', HrNotice::class);
Route::get('hr-overviewcldr', HrOverviewcldr::class);
Route::get('hr-recentleaves', HrRecentleaves::class);
Route::get('hr-settings', HrSettings::class);
Route::get('icons', Icons::class);
Route::get('icons2', Icons2::class);
Route::get('icons3', Icons3::class);
Route::get('icons4', Icons4::class);
Route::get('icons5', Icons5::class);
Route::get('icons6', Icons6::class);
Route::get('icons7', Icons7::class);
Route::get('icons8', Icons8::class);
Route::get('icons9', Icons9::class);
Route::get('icons10', Icons10::class);
Route::get('icons11', Icons11::class);
Route::get('image-comparison', ImageComparison::class);
Route::get('index2', Index2::class);
Route::get('index3', Index3::class);
Route::get('index4', Index4::class);
Route::get('index5', Index5::class);
Route::get('index6', Index6::class);
Route::get('index7', Index7::class);
Route::get('invoice1', Invoice1::class);
Route::get('invoice2', Invoice2::class);
Route::get('invoice3', Invoice3::class);
Route::get('invoice-add', InvoiceAdd::class);
Route::get('invoice-edit', InvoiceEdit::class);
Route::get('invoice-list', InvoiceList::class);
Route::get('job-applictaion', JobApplication::class);
Route::get('job-apply', JobApply::class);
Route::get('job-list', JobList::class);
Route::get('job-new', JobNew::class);
Route::get('job-user', JobUser::class);
Route::get('job-view', JobView::class);

Route::get('loaders', Loaders::class);
Route::get('lockscreen1', Lockscreen1::class);
Route::get('lockscreen2', Lockscreen2::class);
Route::get('lockscreen3', Lockscreen3::class);
// Route::get('login1', Login1::class);
// Route::get('login2', Login2::class);
// Route::get('login3', Login3::class);


Route::get('message-danger', MessageDanger::class);
Route::get('message-success', MessageSuccess::class);
Route::get('message-warning', MessageWarning::class);
Route::get('modal', Modal::class);
Route::get('navigation', Navigation::class);
Route::get('notification-list', NotificationList::class);
Route::get('notify', Notify::class);
Route::get('page-sessiontimeout', PageSessiontimeout::class);
Route::get('pagination', Pagination::class);
Route::get('panels', Panels::class);

Route::get('pricing', Pricing::class);

Route::get('product-details', ProductDetails::class);


Route::get('profile2', Profile2::class);
Route::get('progress', Progress::class);
Route::get('project-list', ProjectList::class);
Route::get('project-new', ProjectNew::class);
Route::get('project-overclndr', ProjectOverclndr::class);
Route::get('project-view', ProjectView::class);




Route::get('register3', Register3::class);
Route::get('reset-password1', ResetPassword1::class);


Route::get('settings', Settings::class);
Route::get('superadmin-admins', SuperadminAdmins::class);
Route::get('superadmin-company', SuperadminCompany::class);
Route::get('superadmin-invoices', SuperadminInvoices::class);
Route::get('superadmin-role', SuperadminRole::class);
Route::get('superadmin-settings', SuperadminSettings::class);
Route::get('superadmin-subscription', SuperadminSubscription::class);
Route::get('support-adminarticles', SupportAdminarticles::class);
Route::get('support-admincategories', SupportAdmincategories::class);
Route::get('support-admincustomer', SupportAdmincustomer::class);
Route::get('support-admincustomerview', SupportAdmincustomerview::class);
Route::get('support-admindash', SupportAdmindash::class);
Route::get('support-admineditprofile', SupportAdmineditprofile::class);
Route::get('support-adminticketactive', SupportAdminticketactive::class);
Route::get('support-adminticketclosed', SupportAdminticketclosed::class);
Route::get('support-adminticketclosedview', SupportAdminticketclosedview::class);
Route::get('support-adminticketlist', SupportAdminticketlist::class);
Route::get('support-adminticketnew', SupportAdminticketnew::class);
Route::get('support-adminticketview', SupportAdminticketview::class);
Route::get('support-agentassign', SupportAgentassign::class);
Route::get('support-agentdash', SupportAgentdash::class);
Route::get('support-agenteditprofile', SupportAgenteditprofile::class);
Route::get('support-agentticketactive', SupportAgentticketactive::class);
Route::get('support-agentticketclosed', SupportAgentticketclosed::class);
Route::get('support-agentticketclosedview', SupportAgentticketclosedview::class);
Route::get('support-agentticketlist', SupportAgentticketlist::class);
Route::get('support-agentticketview', SupportAgentticketview::class);
Route::get('support-contact', SupportContact::class);
Route::get('support-editprofile', SupportEditprofile::class);
Route::get('support-knowledge', SupportKnowledge::class);
Route::get('support-knowledgeview', SupportKnowledgeview::class);
Route::get('support-landing', SupportLanding::class);
Route::get('support-openticket', SupportOpenticket::class);
Route::get('support-ticketactive', SupportTicketactive::class);
Route::get('support-ticketclosed', SupportTicketclosed::class);
Route::get('support-ticketclosedview', SupportTicketclosedview::class);
Route::get('support-ticketcreate', SupportTicketcreate::class);
Route::get('support-ticketlist', SupportTicketlist::class);
Route::get('support-ticketview', SupportTicketview::class);
Route::get('support-userdash', SupportUserdash::class);

Route::get('tables', Tables::class);


Route::get('task-board', TaskBoard::class);
Route::get('task-complete', TaskComplete::class);
Route::get('task-hold', TaskHold::class);
Route::get('task-list', TaskList::class);
Route::get('task-new', TaskNew::class);
Route::get('task-overclndr', TaskOverclndr::class);
Route::get('task-profile', TaskProfile::class);
Route::get('task-running', TaskRunning::class);
Route::get('task-view', TaskView::class);


Route::get('products', Products::class);


Route::get('todo-list', TodoList::class);

Route::get('tooltip', Tooltip::class);
Route::get('user-list1', UserList1::class);

Route::get('widgets1', Widgets1::class);

