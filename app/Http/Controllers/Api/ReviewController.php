<?php

namespace App\Http\Controllers\Api;

use App\Review;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\ReviewResource;

class ReviewController extends Controller
{
    public function show($id) {
        return new ReviewResource(Review::findOrFail($id));
    }

    public function store(Request $request) {
        $data = $request->validate([
            'id' => 'required|size:36',
            'content' => 'required|min:2',
            'rating' => 'required|in:1,2,3,4,5'
        ]);

        $booking = Booking::findByReviewKey($data['id']);

        if (null === $booking) {
            return abort(404);
        }

        $booking->review_key = '';
        $booking->save();

        $review = Review::make($data);
        $review->booking_id = $booking_id;
        $review->bookable_id->bookable_id;
        $review->save();

        return $review;

    }
}
