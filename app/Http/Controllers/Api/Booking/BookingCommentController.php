<?php
namespace vengine\Http\Controllers\Api\Booking;

class BookingCommentController extends \vengine\Http\Controllers\Api\BaseController{
    public function __construct(
    \vengine\Repositories\Booking\BookingCommentRepository $repository
            ) {
        $this->repository = $repository;
    }
}
