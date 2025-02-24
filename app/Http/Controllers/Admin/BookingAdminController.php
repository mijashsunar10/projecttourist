<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Mountain;
use App\Models\Tourtrips;
use App\Models\Trip;
use Illuminate\Http\Request;
class BookingAdminController extends Controller
{
    /**
     * Display a listing of the contact messages.
     */
    public function index()
    {
        // Retrieve contacts in descending order, paginated
        $bookings = Booking::orderBy('created_at', 'desc')->paginate(10);
        // Count unread messages
        $unreadCount = Booking::where('is_read', false)->count();
        // Return the admin view with the contacts data and unread count
        return view('admin.booking.index', compact('bookings', 'unreadCount'));
    }
    /**
     * Display the specified contact.
     */
        public function show(Booking $booking)
    {
        // Mark as read if it is not already
        if (!$booking->is_read) {
            $booking->update(['is_read' => true]);
        }

        // Fetch related entity based on entity_type
        $entity = null;
        switch ($booking->entity_type) {
            case 'trip':
                $entity = Trip::find($booking->entity_id);
                break;
            case 'tourtrip':
                $entity = Tourtrips::find($booking->entity_id);
                break;
            case 'mountain':
                $entity = Mountain::find($booking->entity_id);
                break;
        }

        return view('admin.booking.show', compact('booking', 'entity'));
    }
    /**
     * Remove the specified contact from storage.
     */
    public function destroy(Booking $booking)
    {
        $booking->delete();
        return redirect()
            ->route('admin.booking.index')
            ->with('success', 'Booking deleted successfully.');
    }
    
}