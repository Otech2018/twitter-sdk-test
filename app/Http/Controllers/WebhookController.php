<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller;

class WebhookController extends Controller
{
    /**
     * @SWG\Post(
     *     path="/webhook",
     *     summary="Handle responses from messenger API",
     *     @SWG\Parameter(
     *         name="user_id",
     *         in="header",
     *         type="integer",
     *         required=true,
     *         description="User ID"
     *     ),
     *     @SWG\Parameter(
     *         name="response",
     *         in="query",
     *         type="string",
     *         required=true,
     *         description="API response content"
     *     ),
     *     @SWG\Response(response=200, description="Webhook response handled successfully"),
     *     @SWG\Response(response=400, description="Bad request"),
     * )
     */
    public function handleWebhook(Request $request)
    {
        $userId = $request->header('user_id');
        $responseContent = $request->input('response');

        // Add your webhook handling logic here, e.g., process the response from the messenger API

        return response()->json(['message' => 'Webhook response handled successfully']);
    }
}
