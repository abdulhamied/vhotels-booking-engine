<?php
namespace vengine\Repositories\Booking;


class BookingCommentRepository extends \vengine\Repositories\BaseRepository{
    public function __construct(
    \vengine\Models\BookingComment $model
            ) {
        $this->model = $model;
        $this->rules = \vengine\Models\BookingComment::$rules;
        $this->with([]);
    }
}
