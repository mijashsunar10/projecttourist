<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customize;
use Illuminate\Http\Request;

class CustomizeAdminController extends Controller
{
    /**
     * Display a listing of the contact messages.
     */
    public function index()
    {
        // Retrieve contacts in descending order, paginated
        $customizes = Customize::orderBy('created_at', 'desc')->paginate(10);

        // Count unread messages
        $unreadCount = Customize::where('is_read', false)->count();

        // Return the admin view with the contacts data and unread count
        return view('admin.customizes.index', compact('customizes', 'unreadCount'));
    }

    /**
     * Display the specified contact.
     */
    public function show(Customize $customize)
    {
        // Mark as read if it is not already
        if (!$customize->is_read) {
            $customize->update(['is_read' => true]);
        }

        return view('admin.customizes.show', compact('customize'));
    }

    /**
     * Remove the specified contact from storage.
     */
    public function destroy(Customize $customize)
    {
        $customize->delete();

        return redirect()
            ->route('admin.customizes.index')
            ->with('success', 'Customize deleted successfully.');
    }
}