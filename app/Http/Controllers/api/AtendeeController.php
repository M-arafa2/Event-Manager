<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AtendeeResource;
use App\Models\Event;
use App\Models\Atendee;
use Illuminate\Http\Request;

class AtendeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Event $event)
    {
        $attendees = $event->attendees()->latest();
        return AtendeeResource::collection(
            $attendees->paginate()
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Event $event)
    {
        $attendee = $event->attendees()->create([
            'user_id'=> 1
        ]);
        return new AtendeeResource($attendee);
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event, Atendee $attendee)
    {
        return new AtendeeResource($attendee);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $event, Atendee $attendee)
    {
        $attendee->delete();
        return response(status:204);
    }
}
