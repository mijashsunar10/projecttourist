<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Enquiry;
use Illuminate\Http\Request;

class EnquiryAdminController extends Controller
{
    public function index()
    {
        $enquiries = Enquiry::orderBy('created_at', 'desc')->paginate(10);
        $unreadCount = Enquiry::where('is_read', false)->count();
        return view('admin.enquiry.index', compact('enquiries', 'unreadCount'));
    }
    
    public function show(Enquiry $enquiry)
    {
        if (!$enquiry->is_read) {
            $enquiry->update(['is_read' => true]);
        }
        return view('admin.enquiry.show', compact('enquiry'));
    }
    
    public function destroy(Enquiry $enquiry)
    {
        $enquiry->delete();
        return redirect()
            ->route('admin.enquiry.index')
            ->with('success', 'Enquiry deleted successfully.');
    }
}