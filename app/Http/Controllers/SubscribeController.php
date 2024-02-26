<?php
// SubscribeController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller;
use Atymic\Twitter\Twitter;

class SubscribeController extends Controller
{
    private $twitter;

    public function __construct(Twitter $twitter)
    {
        $this->twitter = $twitter;
    }

    /**
     * @SWG\Post(
     *     path="/subscribe",
     *     summary="Subscribe users to a chat bot",
     *     @SWG\Parameter(
     *         name="user_id",
     *         in="header",
     *         type="integer",
     *         required=true,
     *         description="User ID"
     *     ),
     *     @SWG\Response(response=200, description="Successfully subscribed"),
     *     @SWG\Response(response=400, description="Bad request"),
     * )
     */
    public function subscribe(Request $request)
    {
        $userId = $request->header('user_id');

        // Your subscription logic here, e.g., save user subscription to the database

        // Example: Send a tweet using Twitter SDK
        $tweet = $this->twitter->tweet('Hello, new subscriber with ID ' . $userId);

        return response()->json(['message' => 'Successfully subscribed', 'tweet' => $tweet]);
    }
}
