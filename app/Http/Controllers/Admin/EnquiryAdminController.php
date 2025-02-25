<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Enquiry;
use App\Models\Mountain;
use App\Models\Tourtrips;
use App\Models\Trip;
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
        $entity = null;
        switch ($enquiry->entity_type) {
            case 'trip':
                $entity = Trip::find($enquiry->entity_id);
                break;
            case 'tourtrip':
                $entity = Tourtrips::find($enquiry->entity_id);
                break;
            case 'mountain':
                $entity = Mountain::find($enquiry->entity_id);
                break;
        }
        return view('admin.enquiry.show', compact('enquiry','entity'));
    }
    
    public function destroy(Enquiry $enquiry)
    {
        $enquiry->delete();
        return redirect()
            ->route('admin.enquiry.index')
            ->with('success', 'Enquiry deleted successfully.');
    }
}