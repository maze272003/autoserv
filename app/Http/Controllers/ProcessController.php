<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Process;
use Illuminate\Http\Request;

class ProcessController extends Controller
{
    public function index()
    {
        // Fetch all bookings along with user information
        $bookings = Booking::with('user')->get(); // Ensure this fetches bookings

        // Pass the bookings variable to the view
        return view('admin.bookings.index', compact('bookings')); // Use 'compact' to pass the correct variable
    }
    public function process($id)
    {
        // Find the booking by ID
        $booking = Booking::findOrFail($id);

        // Create a new process record
        Process::create([
            'carModel' => $booking->carModel,
            'serviceType' => $booking->serviceType,
            'carIssue' => $booking->carIssue,
            'appointmentDate' => $booking->appointmentDate,
            'appointmentTime' => $booking->appointmentTime,
            'plateNumber' => $booking->plateNumber,
            'additionalNotes' => $booking->additionalNotes,
            'user_id' => $booking->user_id,
        ]);

        // Delete the booking record
        $booking->delete();

        return redirect()->route('admin.bookings.index')->with('success', 'Booking processed successfully.');
    }
}
