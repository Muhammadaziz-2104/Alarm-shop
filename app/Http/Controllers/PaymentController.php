<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class PaymentController extends Controller
{
    public function showPaymentForm()
    {
        return view('payment-form');
    }

    public function initiatePayment(Request $request)
    {
        $amount = $request->input('amount');
        $client = new Client();

        $response = $client->post(config('app.payme_api_url'), [
            'json' => [
                'method' => 'CreateTransaction',
                'params' => [
                    'merchant' => config('app.payme_merchant_id'),
                    'amount' => $amount * 100, // Payme works with "tiyin" (cents) so multiply by 100
                    'account' => [
                        'order_id' => 123 // Replace with your logic for generating order IDs
                    ]
                ]
            ],
            'headers' => [
                'Authorization' => 'Bearer ' . config('app.payme_secret_key')
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        if (isset($result['result']['receipt_url'])) {
            return redirect($result['result']['receipt_url']);
        } else {
            return redirect()->back()->withErrors('Unable to initiate payment. Please try again.');
        }
    }

    // app/Http/Controllers/PaymentController.php

    public function handleCallback(Request $request)
    {
        // Parse the callback data
        $data = $request->all();

        // Verify the callback authenticity (optional, depending on Payme's documentation)

        // Update order status in the database based on callback data
        // Assume 'order_id' and 'status' are sent in the callback data
        $orderId = $data['order_id'];
        $status = $data['status']; // Assuming status indicates success or failure

        // Update your order status here, for example:
        $order = Order::find($orderId);
        if ($order) {
            $order->status = $status; // Update status based on Payme's callback data
            $order->save();
        }

        return response()->json(['success' => true]);
    }

}
