<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller;

class MessageController extends Controller
{
    /**
     * @SWG\Post(
     *     path="/send-message",
     *     summary="Send a message to subscribers",
     *     @SWG\Parameter(
     *         name="user_id",
     *         in="header",
     *         type="integer",
     *         required=true,
     *         description="User ID"
     *     ),
     *     @SWG\Parameter(
     *         name="message",
     *         in="query",
     *         type="string",
     *         required=true,
     *         description="Message content"
     *     ),
     *     @SWG\Response(response=200, description="Message sent successfully"),
     *     @SWG\Response(response=400, description="Bad request"),
     * )
     */
    public function sendMessage(Request $request)
    {
        $userId = $request->header('user_id');
        $message = $request->input('message');

        // Add your message sending logic here, e.g., use Twitter SDK to send messages

        return response()->json(['message' => 'Message sent successfully']);
    }
}
