<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Messages;
use Illuminate\Validation\Rules\Email;
use App\Http\Requests\StoreMessagesRequest;
use App\Http\Requests\UpdateMessagesRequest;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request, $id)
    {
        $incomingMessage = $request->validate([
            'message' => 'required',
        ]);
        Messages::create([
            'message' => $incomingMessage['message'],
            'user_id' => $id,
        ]);
        return redirect('/');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMessagesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        
        $userinfo = User::where('id', $id)->firstOrFail();
        $messageinfo = Messages::where('user_id', $id)->firstOrFail();
        
        return view('createmessage', compact('userinfo', 'messageinfo', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Messages $messages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMessagesRequest $request, Messages $messages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Messages $messages)
    {
        //
    }
    public function dashboardview()
    {
        if (!auth()->check()) {
            return redirect('/login');
        }
        $name = auth()->user()->name ?? 'Guest';
        $email = auth()->user()->email ?? '';
        $id = auth()->user()->id;
        return view('dashboard', compact('name', 'email', 'id'));
    }

    public function displayMessages()
    {

        
        $messages = Messages::where('user_id', auth()->user()->id)->get();

        return view('messages', compact('messages'));
    }
}
