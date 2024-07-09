<?php

namespace App\Http\Controllers;

use Exception;
use Carbon\Carbon;
use App\Models\Chat;

use App\Models\User;
use App\Models\Prompt;

use Infobip\Api\SmsApi;

use App\Mail\VerifyMail;
use Infobip\ApiException;
use Infobip\Configuration;
use App\Models\Organisation;
use Illuminate\Http\Request;


use Illuminate\Validation\Rule;
use Infobip\Model\SmsDestination;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Infobip\Model\SmsTextualMessage;
use Infobip\Model\SmsAdvancedTextualRequest;
use Illuminate\Validation\ValidationException;
use KingFlamez\Rave\Facades\Rave as Flutterwave;


class UserController extends Controller
{
    //

    //
    public function _construct()
    {
        $this->middleware('auth:user-api', ['except' => ['loginUser', 'registerUser']]);
    }
    // public function registerUser(Request $request)
    // {
    //     $user = User::create([
    //         'name' => $request->name,
    //         'username' => $request->username,
    //         'email' => $request->email,
    //         'phone' => $request->phone,
    //         'password' => Hash::make($request->password),
    //     ]);

    //     if ($user) {
    //         return response()->json([$user, 'status' => true], 200);
    //     } else {
    //         return response()->json(['status' => false], 200);
    //     }
    // }

    // public function loginUser(Request $request)
    // {
    //     $credentials = request(['email', 'password']);
    //     $accessTokenExpiration = now()->addMinutes(1)->timestamp;

    //     if (!$token = auth()->guard('user-api')->claims(['exp' => $accessTokenExpiration])->attempt($credentials)) {
    //         return response()->json(['error' => 'Unauthorized User'], 401);
    //     }


    //     // Set the expiration time for the access token to 1 minute

    //     // Set the expiration time for the refresh token to 2 minutes
    //     $refreshTokenExpiration = now()->addMinutes(2)->timestamp;

    //     // Generate the refresh token with the calculated expiration time
    //     $newRefreshToken = auth()->guard('user-api')->claims(['exp' => $refreshTokenExpiration])->fromUser(auth()->guard('user-api')->user());

    //     //         return $this->respondWithToken($token, $refreshToken);
    //     return $this->respondWithToken($token, $newRefreshToken, $accessTokenExpiration, $refreshTokenExpiration);
    // }


    // protected function respondWithToken($token, $refreshToken=null )
    // {
    //     return response()->json([
    //         'access_token' => $token,
    //         'refresh_token' => $refreshToken,
    //         'token_type' => 'bearer',
    //         'expires_in' => Auth::guard('user-api')->factory()->getTTL()*1

    //     ]);
    // }

    // protected function respondWithToken($token, $refreshToken = null, $accessTokenExpiration, $refreshTokenExpiration)
    // {
    //     return response()->json([
    //         'access_token' => $token,
    //         'refresh_token' => $refreshToken,
    //         'token_type' => 'bearer',
    //         'access_token_expires_in' => $accessTokenExpiration - time(),
    //         'refresh_token_expires_in' => $refreshTokenExpiration - time()
    //     ]);
    // }


    // // refresh token
    // public function refreshUser()
    // {
    //     try {
    //         return $this->respondWithToken(Auth::guard('user-api')->refresh());
    //     } catch (Exception $e) {
    //         return response()->json([
    //             'error' => 'Validation failed',
    //             'errors' => $e->getMessage(),
    //         ]);
    //     }
    // }

    // public function refreshUser()
    // {
    //     try {
    //         $user = auth()->guard('user-api')->user();
    //         if (!$user) {
    //             return response()->json(['error' => 'Unauthenticated'], 401);
    //         }
    //         // Refresh the access token
    //         if (!$newToken = auth()->guard('user-api')->refresh()) {
    //             return response()->json(['error' => 'Could not refresh token'], 401);
    //         }

    //         // Generate a new refresh token
    //         $newRefreshToken = auth()->guard('user-api')->claims(['exp' => now()->addDays(7)->timestamp])->fromUser(auth()->guard('user-api')->user());

    //         return $this->respondWithToken($newToken, $newRefreshToken);
    //     } catch (Exception $e) {
    //         return response()->json([
    //             'error' => 'Validation failed',
    //             'errors' => $e->getMessage(),
    //         ]);
    //     }
    // }



    public function loginUser(Request $request)
    {
        $credentials = request(['email', 'password']);
        if (!$token = auth()->guard('user-api')->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized User'], 401);
        }
        return $this->respondWithToken($token);
    }


    protected function respondWithToken($token)
    {
        // $user = auth()->guard('user-api')->user();
        $user = auth()->guard('user-api')->user();
        $userData = $user->only('email', 'username', 'phone', 'name');

        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => Auth::guard('user-api')->factory()->getTTL() * 60,
            'user' => $userData


        ]);
    }


    // // refresh token
    public function refreshUser()
    {
        try {
            return $this->respondWithToken(Auth::guard('user-api')->refresh());
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Validation failed',
                'errors' => $e->getMessage(),
            ]);
        }
    }



    public function profileUser()
    {
        return response()->json(auth()->guard('user-api')->user());
    }

    public function logoutUser()
    {
        auth()->guard('user-api')->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }


    public function usersshow()
    {
        try {

            $authenticatedUser = Auth::guard('user-api')->user();
            if (!$authenticatedUser) {
                return response()->json([]);
            }
            $users = User::all();
            return response()->json([
                // 'results' => $users
                'results' => $users
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Failed to fetch users',
                'message' => $e->getMessage(),
            ], 500);
        }
    }


    public function usersshowId($id)
    {
        try {
            // user details
            $authenticatedUser = Auth::guard('user-api')->user();
            if (!$authenticatedUser) {
                return response()->json([]);
            }
            $users = User::find($id);
            if (!$users) {
                return response()->json([
                    'message' => "User Not Found"
                ], 404);
            }

            return response()->json([
                'users' => $users
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Failed to fetch users',
                'message' => $e->getMessage(),
            ], 500);
        }
    }


    public function updating(Request $request, $id)
    {
        try {

            $authenticatedUser = Auth::guard('user-api')->user();
            if (!$authenticatedUser) {
                return response()->json([]);
            }
            // user details
            $users = User::find($id);
            if (!$users) {
                return response()->json([
                    'message' => "User Not Found"
                ], 404);
            }

            // $data = $request->all();

            // return response()->json($data);
            $formAddUpdate = $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                // 'password' => 'required|min:6',
            ]);

            // Hash the password before updating
            // $formAddUpdate['password'] = bcrypt($formAddUpdate['password']);

            // Use Eloquent to update the user
            User::where('id', $id)->update($formAddUpdate);

            return response()->json([
                'message' => 'User updated successfully',
            ], 200);
        } catch (ValidationException $e) {
            return response()->json([
                'error' => 'Validation failed',
                'errors' => $e->errors(),
            ], 422);
        }
    }

    public function userdelete($id)
    {
        try {
            $authenticatedUser = Auth::guard('user-api')->user();
            if (!$authenticatedUser) {
                return response()->json([]);
            }
            // user details
            $users = User::find($id);
            if (!$users) {
                return response()->json([
                    'message' => "User Not Found"
                ], 404);
            }

            $users->delete();

            return response()->json([
                'message' => 'User deleted successfully',
            ], 200);
        } catch (ValidationException $e) {
            return response()->json([
                'error' => 'Validation failed',
                'errors' => $e->errors(),
            ], 422);
        }
    }


    public function initialize(Request $request)

    {
        try {
            // return response()->json('hello');
            //This generates a payment reference
            $userPayment = $request->validate([
                'name' => 'string',
                'email' => 'required|email',
                'phone' => 'string',
                'username' => 'string',
                'organisation_website' => 'string',
                'organisation_name' => 'string',
                'country' => 'string',
                'state' => 'string',
                'zip' => 'string',
                'admin_mobile_application' => 'string',
                'external_advertising' => 'string',
                'social_Profiles' => 'string',
                'subscription_period' => 'string',
                'business_type' => 'required | string'


                // 'password' => 'required|min:6',
            ]);

            // return response()->json($userPayment);
            $name = $request->input('name');

            $email = $request->input('email');
            $phone = $request->input('phone');
            $amount = $request->input('subscription_period');

            $organisation_name = $request->input('organisation_name');
            $organisation_website = $request->input('organisation_website');
            $country = $request->input('country');
            $state = $request->input('state');
            $zip = $request->input('zip');
            $admin_mobile_application = $request->input('admin_mobile_application');
            $external_advertising = $request->input('external_advertising');
            $subscription_period = $request->input('subscription_period');
            $social_profile = $request->input('social_profile');
            $business_type = $request->input('business_type');





            $amonut = ($amount * 10000) + $social_profile + $external_advertising + $admin_mobile_application;
            //   return response()->json($amonut);






            $reference = Flutterwave::generateReference();

            $url = "https://api.cognospheredynamics.com/api/auth/rave/callback";
            // Enter the details of the payment
            $data = [
                'payment_options' => 'card,banktransfer',
                'amount' => $amonut,
                'phone_number' => $phone,
                'phone' => $phone,
                'tx_ref' => $reference,

                'currency' => "UGX",
                'redirect_url' => $url,
                'customer' => [
                    "phone_number" => $phone,
                    "name" => $name,
                    "email" => $email,
                    "phone" => $phone,
                    "organisation_name" => $organisation_name,
                    "organisation_website" => $organisation_website,
                    "country" => $country,
                    "state" => $state,
                    "zip" => $zip,
                    "admin_mobile_application" => $admin_mobile_application,
                    "external_advertising" => $external_advertising,
                    "subscription_period" => $subscription_period,
                    "business_type" => $business_type,

                ],

                "customizations" => [
                    "title" => 'Payments at Cognosphere',
                    "description" => " This is the payment "
                ]
            ];

            //   return response()->json($data);

            $payment = Flutterwave::initializePayment($data);

            if ($payment['status'] !== 'success') {
                // notify something went wrong
                return redirect()->json('something went wrong');
                return;
            }

            $paymentLink = $payment['data']['link'];


            return response()->json(['paymentLink' => $paymentLink]);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Failed to fetch users',
                'message' => $e->getMessage(),
            ], 500);
        }
    }







    public function sendMailForVerification(Request $request)
    {

        try {
            // Validate the input data
            $userInsert = $request->validate([
                'name' => 'string|required',
                'username' => 'string',
                'email' => ['required', 'email', Rule::unique('users', 'email')],
                'phone' => 'string',
                'phone1' => 'string',
                'gender' => 'string',
                'age' => 'string',
                'password' => 'string|required',

                'institution' => 'string',
                'level_of_education' => 'string',
                'semester' => 'string',
                'year' => 'string',
                'organisation_value' => 'string|nullable',
                'organisation_email' => 'string|nullable',
                'organisation_website' => 'string|nullable',
                'organisation_name' => ['string', 'nullable', Rule::unique('organisations', 'organisation_name')],
                'country' => 'string|nullable',
                'state' => 'string|nullable',
                'zip' => 'string|nullable',
            ]);

            // return $userInsert;

            // Extract user data from the request
            $name = $request->input('name');
            $username = $request->input('username');
            $email = $request->input('email');
            $phone = $request->input('phone');
            $phone1 = $request->input('phone1');
            $gender = $request->input('gender');
            $age = $request->input('age');
            $password = bcrypt($request->input('password'));
            $institution = $request->input('institution');
            $level_of_education = $request->input('level_of_education');
            $semester = $request->input('semester');
            $year = $request->input('year');
            $organisation_value = $request->input('organisation_value');



            // Extract organisation data from the request
            $organisation_email = $request->input('organisation_email');
            $organisation_website = $request->input('organisation_website');
            $organisation_name = $request->input('organisation_name');
            $country = $request->input('country');
            $state = $request->input('state');
            $zip = $request->input('zip');

            // Generate random verification code
            $randomCode = '';
            for ($i = 0; $i < 6; $i++) {
                $randomCode .= mt_rand(0, 9); // Append a random digit (0-9) to the code
            }

            DB::beginTransaction(); // Start the transaction

            try {
                // Initialise organisation ID as null
                $organisationId = null;


                // return $organisation_name;
                // Check if organisation data is provided
                if ($organisation_value == "organisation") {
                    // Prepare organisation data

                    // return $organisation_email;
                    $orgdata = [
                        'organisation_email' => $organisation_email,
                        'organisation_website' => $organisation_website,
                        'organisation_name' => $organisation_name,
                        'country' => $country,
                        'state' => $state,
                        'zip' => $zip,
                    ];

                    // Insert organisation data and get the ID
                    $organisation = Organisation::create($orgdata);
                    $organisationId = $organisation->id;

                    $userdata = [
                        'velification_code' => $randomCode,
                        'email' => $email,
                        'name' => $name,
                        'username' => $username,
                        'phone' => $phone,
                        'phone1' => $phone1,
                        'age' => $age,
                        'gender' => $gender,
                        'institution' => $institution,
                        'level_of_education' => $level_of_education,
                        'semester' => $semester,
                        'year' => $year,
                        'password' => $password,
                        'organisation_id' => $organisationId, // Nullable foreign key
                    ];

                    // Insert user data
                    User::create($userdata);

                    DB::commit(); // Commit the transaction

                    // Send verification email
                    Mail::to($email)->send(new VerifyMail($userdata));

                    return response()->json([
                        'success' => true,
                        'message' => 'Verification email sent successfully.',
                    ], 200);
                } else {
                    $userdata = [
                        'velification_code' => $randomCode,
                        'email' => $email,
                        'name' => $name,
                        'username' => $username,
                        'phone' => $phone,
                        'phone1' => $phone1,
                        'age' => $age,
                        'gender' => $gender,
                        'institution' => $institution,
                        'level_of_education' => $level_of_education,
                        'semester' => $semester,
                        'year' => $year,
                        'password' => $password,
                        'organisation_id' => $organisationId, // Nullable foreign key
                    ];

                    // Insert user data
                    User::create($userdata);

                    DB::commit(); // Commit the transaction

                    // Send verification email
                    Mail::to($email)->send(new VerifyMail($userdata));

                    return response()->json([
                        'success' => true,
                        'message' => 'Verification email sent successfully.',
                    ], 200);
                }

                // Prepare user data including the foreign key if available

            } catch (\Exception $e) {
                // DB::rollBack(); // Roll back the transaction on error
                throw $e; // Re-throw the exception to be caught by the outer catch block
            }
        } catch (ValidationException $e) {
            // Return JSON response with validation errors
            return response()->json([
                'errors' => $e->errors(), // Detailed validation errors
            ], 422);
        } catch (\Exception $e) {
            // Catch any other exceptions and return a generic error response
            return response()->json([
                'error' => $e->getMessage(), // Detailed error message
            ], 500);
        }
    }




    public function verifyingCode(Request $request)
    {
        try {
            // Validate the input
            $validatedData = $request->validate([
                'email' => 'required|email',
                'velification_code' => 'required'
            ]);

            // Extract email and verification code from the validated data
            $email = $validatedData['email'];
            $verificationCode = $validatedData['velification_code'];

            // Optionally, perform any additional logic (e.g., verifying the code)
            // Return the extracted data as a JSON response (for debugging or further processing)
            $user = User::where('email', $email)->first(); // Find user by email
            if (!$user) {
                return response()->json(['message' => 'user not find']);
            }


            if ($verificationCode !== $user->velification_code) {
                return response()->json([
                    'success' => false,
                    'message' => 'wrong OTP'
                ]);
            }
            return response()->json([
                'success' => true,
                'message' => 'user verified successfully'
            ]);
        } catch (ValidationException $e) {
            // Return JSON response with validation errors
            return response()->json([
                'success' => false,
                'message' => 'Validation errors occurred.',
                'errors' => $e->errors(), // Detailed validation errors
            ], 422);
        } catch (\Exception $e) {
            // Catch any other exceptions and return a generic error response
            return response()->json([
                'message' => 'An error occurred while sending the verification email.',
                'error' => $e->getMessage(), // Detailed error message
            ], 500);
        }
    }

    //     public function initialize()
    //     {
    //         //This generates a payment reference
    //         $reference = Flutterwave::generateReference();

    //         // Enter the details of the payment
    //         $data = [
    //             'payment_options' => 'card,banktransfer',
    //             'amount' => 500,
    //             'tx_ref' => $reference,
    //             'currency' => "UGX",
    //             'redirect_url' => route('callback'),
    //             'customer' => [
    //                 "phone_number" => '0785557585',
    //                 "name" => 'alfred'
    //             ],

    //             "customizations" => [
    //                 "title" => 'Movie Ticket',
    //                 "description" => "20th October"
    //             ]
    //         ];



    //         $payment = Flutterwave::initializePayment($data);


    //         if ($payment['status'] !== 'success') {
    //             // notify something went wrong
    //             dd('die');
    //             return;
    //         }
    //         $paymentLink = $payment['data']['link'];

    // // Now you can use the payment link as needed
    // dd('hl');

    //         return redirect($payment['data']['link']);
    //     }



    // public function initialize(Request $request)
    // {


    // $tx_ref = Flutterwave::generateReference();
    // $order_id = Flutterwave::generateReference('momo');

    // $name = $request->input('name');
    // $email = $request->input('email');
    // $phone = $request->input('phone');
    // $amount = $request->input('amount');

    // $data = [

    //     'name' => $name,
    //     'email' => $email,
    //     'phone' => $phone,
    //     'amount' => $amount,
    //     'tx_ref' => $tx_ref,
    //     'order_id' => $order_id,
    //     'redirect_url' => route('callback'),
    //     'phone_number' =>$phone,
    //     // 'tx_ref' => $tx_ref,
    //     // 'order_id' => $order_id
    // ];

    // $charge = Flutterwave::payments()->momoUG($data);

    // if ($charge['status'] === 'success') {
    //     # code...
    //     // Redirect to the charge url
    //     $datas=$charge['data']['redirect'];
    //     return response()->json($datas);

    //     return redirect($charge['data']['redirect']);
    //     // return response()->json('payment is  sucessfull ');

    // }else{
    //     return response()->json('payment is not sucessfull and try again');
    // }

    // }




    public function callback()
    {

        $status = request()->status;

        //if payment is successful
        if ($status ==  'successful') {

            $transactionID = Flutterwave::getTransactionIDFromCallback();
            $data = Flutterwave::verifyTransaction($transactionID);


            if ($data['status'] === 'success') {
                // Extract the transaction data
                $transactionData = $data['data'];


                return  $transactionData;

                // Access specific data points
                $transactionID = $transactionData['id'];
                $transactionReference = $transactionData['tx_ref'];
                $amount = $transactionData['amount'];
                $currency = $transactionData['currency'];
                $customerName = $transactionData['customer']['name'];
                $customerEmail = $transactionData['customer']['email'];
                $transactionStatus = $transactionData['status'];
                $paymentType = $transactionData['payment_type'];
                $createdAt = $transactionData['created_at'];
                $bussiness_type = $transactionData['customer']['bussiness_type'];


                // You can now use these data points as needed
                // For example, you might want to log them, save them to the database, etc.
                // Here, we'll just dump them for demonstration purposes
                return ([
                    'Transaction ID' => $transactionID,
                    'Transaction Reference' => $transactionReference,
                    'Amount' => $amount,
                    'Currency' => $currency,
                    'Customer Name' => $customerName,
                    'Customer Email' => $customerEmail,
                    'Transaction Status' => $transactionStatus,
                    'Payment Type' => $paymentType,
                    'Created At' => $createdAt,
                    'bussiness_type' => $bussiness_type

                ]);
            } else {
                // Handle the case where the transaction was not successfully fetched
                return "Failed to fetch transaction data: " . $data['message'];
            }

            // return redirect('https://cognospheredynamics.com/receipt.html');


            // return response()->json($data);
        } elseif ($status ==  'cancelled') {
            //Put desired action/code after transaction has been cancelled here
        } else {
            //Put desired action/code after transaction has failed here
        }
        // Get the transaction from your DB using the transaction reference (txref)
        // Check if you have previously given value for the transaction. If you have, redirect to your successpage else, continue
        // Confirm that the currency on your db transaction is equal to the returned currency
        // Confirm that the db transaction amount is equal to the returned amount
        // Update the db transaction record (including parameters that didn't exist before the transaction is completed. for audit purpose)
        // Give value for the transaction
        // Update the transaction to note that you have given value for the transaction
        // You can also redirect to your success page from here

    }







    public function createChat(Request $request)
    {
        try {
            $userInsert = $request->validate([
                'user_id' => 'required|exists:users,id',
            ]);

            $user_id = $request->input('user_id');
            $currentDateTime = date('Y-m-d H:i:s');

            do {
                $newChatId = '';
                for ($i = 0; $i < 20; $i++) {
                    $newChatId .= mt_rand(0, 9); // Append a random digit (0-9) to the code
                }

                $chatExists = DB::table('prompts')->where('chat_id', $newChatId)->exists();
            } while ($chatExists);

            $chat = [
                'user_id' => $user_id,
                'chat_id' => $newChatId,
                'time' => $currentDateTime
            ];

            $chats = Chat::create($chat);
            //    $chats= DB::table('chats')->insert($chat);

            return response()->json([
                'message' => 'Chat created successfully',
                'newChat' => $chats
            ], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }







    // public function createNewChats(Request $request)
    // {
    //     try {
    //         $userInsert = $request->validate([
    //             'user_id' => 'required|exists:users,id',
    //         ]);

    //         $user_id = $request->input('user_id');
    //         $currentDateTime = date('Y-m-d H:i:s');

    //         do {
    //             $newChatId = '';
    //             for ($i = 0; $i < 20; $i++) {
    //                 $newChatId .= mt_rand(0, 9); // Append a random digit (0-9) to the code
    //             }

    //             $chatExists = DB::table('prompts')->where('chat_id', $newChatId)->exists();
    //         } while ($chatExists);

    //         $chat = [
    //             'user_id' => $user_id,
    //             'chat_id' => $newChatId,
    //             'time' => $currentDateTime
    //         ];

    //         DB::table('prompts')->insert($chat);

    //         return response()->json(['message' => 'Chat created successfully'], 201);

    //     } catch (\Exception $e) {
    //         return response()->json(['error' => $e->getMessage()], 500);
    //     }
    // }




    // public function createPrompts(Request $request)
    // {
    //     try {
    //         $userInsert = $request->validate([
    //             'user_id' => 'required|exists:users,id',
    //             'question' => 'string|required',
    //         ]);
    //         $question = $request->input('question');
    //         $user_id = $request->input('user_id');
    //         $currentDateTime = date('Y-m-d H:i:s');

    //         $prompt = [
    //             'question'=>$question,
    //             'time'=>$currentDateTime,
    //             'user_id'=>$user_id
    //         ];
    //         // return $prompt;
    //         DB::table('prompts')->insert($prompt);
    //         return response()->json([
    //             'success' => true,
    //             'message' => 'Prompt stored successfully.',
    //         ], 200);
    //     } catch (ValidationException $e) {
    //         // Return JSON response with validation errors
    //         return response()->json([
    //             'errors' => $e->errors(), // Detailed validation errors
    //         ], 422);
    //     } catch (\Exception $e) {
    //         // Catch any other exceptions and return a generic error response
    //         return response()->json([

    //             'error' => 'something went wrong try again Or call for help', // Detailed error message
    //         ], 500);
    //     }
    // }





    //  public function createResponse(Request $request)
    //     {
    //         try {
    //             $userInsert = $request->validate([
    //                 'prompt_id' => 'required|exists:users,id',
    //                 'response' => 'string|required',
    //             ]);
    //             $response = $request->input('response');
    //             $prompt_id = $request->input('prompt_id');
    //             $dataresponse = [
    //                 'response'=>$response,
    //                 'prompt_id'=>$prompt_id
    //             ];
    //             // return $dataresponse;
    //             DB::table('responses')->insert($dataresponse);
    //             return response()->json([
    //                 'success' => true,
    //                 'message' => 'Response stored successfully.',
    //             ], 200);
    //         } catch (ValidationException $e) {
    //             // Return JSON response with validation errors
    //             return response()->json([
    //                 'errors' => $e->errors(), // Detailed validation errors
    //             ], 422);
    //         } catch (\Exception $e) {
    //             // Catch any other exceptions and return a generic error response
    //             return response()->json([

    //                 'error' => 'something went wrong try again Or call for help', // Detailed error message
    //             ], 500);
    //         }

    //     }

    // controller update the  chat
    public function updateChats(Request $request)
    {
        try {
            $updatechat = $request->validate([
                'chat_id' => 'required',
                'chat' => 'required',
                // 'id' => 'required',

            ]);

            //   return $updatechat;
            $chat_id = $updatechat['chat_id'];
            Chat::where('chat_id', $chat_id)->update($updatechat);
            // DB::table('prompts')->insert($updatechat);
            return response()->json(200);
        } catch (\Exception $e) {
            return response()->json($e, 500);
        }
    }




    // controller to get chats by the user

    public function readChat($id)
    {
        try {
            $user = User::find($id);
            if (!$user) {
                return response()->json([
                    'message' => 'User Not found'
                ], 404);
            }
            // Retrieve all chats associated with the user
            $chats = $user->chats()->get();

            return response()->json([
                'chats' => $chats
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'errors' => $e->getMessage(),
            ], 500); // Correcting the status code to 500 for server error
        }
    }





    public function requestAndResponses($id)
    {
        try {
            $prompt = Prompt::find($id);
            if (!$prompt) {
                return response()->json([
                    'message' => 'prompt Not found'
                ], 404);
            }
            $prompts = $prompt->responses()->get();

            return response()->json([
                'prompts' => $prompts
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'errors' => $e->getMessage(),
            ], 500); // Correcting the status code to 500 for server error
        }
    }


    // read all messages in the chat

    public function readMessages($id)
    {
        try {
            $chat = Chat::find($id);
            if (!$chat) {
                return response()->json([
                    'message' => 'Chat Not found'
                ], 404);
            }
            $messages = $chat->messages()->get();

            return response()->json([
                "chat" => $chat,
                'messages' => $messages
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'errors' => $e->getMessage(),
            ], 500); // Correcting the status code to 500 for server error
        }
    }


    // delete chats
    public function deleteChat($id)
    {
        try {
            $chat = Chat::find($id);
            if (!$chat) {
                return response()->json([
                    'message' => 'Chat Not found'
                ], 404);
            }
            $chat->delete();


            return response()->json([
                'message' => 'Chat deleted successfully'
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'errors' => $e->getMessage(),
            ], 500);
        }
    }



    public function mobileRegistration()
    {

        $phone='+256785557587';
      $host ='https://3gpzjj.api.infobip.com';
      $key='3aaf45891bb3478f7385caa52e1fe72c-bcc8c4f2-c0fe-4acd-9f59-da7076fec661';

    

        $configuration = new Configuration(
            host: $host,
            apiKey: $key
        );

        $sendSmsApi = new SmsApi(config: $configuration);

    $message = new SmsTextualMessage(
        destinations: [
            new SmsDestination(to: $phone)
        ],
        from: 'InfoSMS',
        text: 'This is a dummy SMS message sent using infobip-api-php-client'
    );

    $request = new SmsAdvancedTextualRequest(messages: [$message]);

    try {
        $smsResponse = $sendSmsApi->sendSmsMessage($request);
        return response()->json([
            'message' => 'Message sent successfully',
            'data' => $smsResponse
        ]);
    } catch (ApiException $apiException) {
        return response()->json([
            'message' => 'Failed to send message',
            'errors' => $apiException->getResponseBody()
        ], 500);
    } catch (Exception $e) {
        return response()->json([
            'message' => 'An error occurred',
            'errors' => $e->getMessage()
        ], 500);
    }
        
    }
    // public function mobileRegistration()
    // {

    //     $phone='256785557587';

    //     $configuration = new Configuration(
    //         host: 'https://3gpzjj.api.infobip.com',
    //         apiKey: '3aaf45891bb3478f7385caa52e1fe72c-bcc8c4f2-c0fe-4acd-9f59-da7076fec661'
    //     );

    //     $sendSmsApi = new SmsApi(config: $configuration);

    //     $message = new SmsTextualMessage(
    //         destinations: [
    //             new SmsDestination(to:$phone)
    //         ],
    //         from: 'Cognosheredynamics',
    //         text: 'This is a dummy SMS message sent using infobip-api-php-client'
    //     );

    //     $request = new SmsAdvancedTextualRequest([
    //         'messages' => [$message]
    //     ]);

    //     try {
    //         $smsResponse = $sendSmsApi->sendSmsMessage($request);
    //         return response()->json([
    //             'message' => 'Message sent successfully',
    //             'data' => $smsResponse
    //         ]);
    //     } catch (ApiException $apiException) {
    //         return response()->json([
    //             'message' => 'Failed to send message',
    //             'errors' => $apiException->getResponseBody()
    //         ], 500);
    //     } catch (Exception $e) {
    //         return response()->json([
    //             'message' => 'An error occurred',
    //             'errors' => $e->getMessage()
    //         ], 500);
    //     }
    // }



    public function mobileRegistrationj()
    {

        $configuration = new Configuration(
            host: 'https://3gpzjj.api.infobip.com',
            apiKey: '3aaf45891bb3478f7385caa52e1fe72c-bcc8c4f2-c0fe-4acd-9f59-da7076fec661'
        );


        $sendSmsApi = new SmsApi(config: $configuration);

        $message = new SmsTextualMessage(
            destinations: [
                new SmsDestination(to: '+256785557587')
            ],
            from: 'Cognosheredynamics',
            text: 'This is a dummy SMS message sent using infobip-api-php-client'
        );

        $request = new SmsAdvancedTextualRequest(messages: [$message]);

        try {
            $smsResponse = $sendSmsApi->sendSmsMessage($request);
            return response()->json(['message' => 'message sent sussessfully', 'data' => $smsResponse]);
        } catch (ApiException $apiException) {
            return response()->json(['message' => $apiException],);
        }
        // $curl = curl_init();

        // curl_setopt_array($curl, array(
        //     CURLOPT_URL => 'https://3gpzjj.api.infobip.com', // Replace with actual base URL
        //     CURLOPT_RETURNTRANSFER => true,
        //     CURLOPT_ENCODING => '',
        //     CURLOPT_MAXREDIRS => 10,
        //     CURLOPT_TIMEOUT => 15,
        //     CURLOPT_FOLLOWLOCATION => true,
        //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //     CURLOPT_CUSTOMREQUEST => 'POST',
        //     CURLOPT_POSTFIELDS => json_encode([
        //         'messages' => [
        //             [
        //                 'destinations' => [
        //                     ['to' => '256785557587']
        //                 ],
        //                 'from' => 'InfoSMS',
        //                 'text' => 'This  is alfred code 123456'
        //             ]
        //         ]
        //     ]),
        //     CURLOPT_HTTPHEADER => array(
        //         'Authorization: Bearer 3aaf45891bb3478f7385caa52e1fe72c-bcc8c4f2-c0fe-4acd-9f59-da7076fec661', // Replace with actual authorization token
        //         'Content-Type: application/json',
        //         'Accept: application/json'
        //     ),
        // ));

        // $response = curl_exec($curl);
        // $error = curl_error($curl);
        // curl_close($curl);

        // if ($error) {
        //     return response()->json(['error' => 'Request failed: ' . $error], 500);
        // }

        // $responseDecoded = json_decode($response, true);

        // return response()->json($responseDecoded);
    }


    //     public function mobileRegistration(){
    //  $curl = curl_init();
    //  curl_setopt_array($curl, array(
    //      CURLOPT_URL => ‘https://%7BbaseUrl%7D/sms/2/text/advanced’,
    //      CURLOPT_RETURNTRANSFER => true,
    //      CURLOPT_ENCODING => ”,
    //      CURLOPT_MAXREDIRS => 10,
    //      CURLOPT_TIMEOUT => 0,
    //      CURLOPT_FOLLOWLOCATION => true,
    //      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //      CURLOPT_CUSTOMREQUEST => ‘POST’,
    //      CURLOPT_POSTFIELDS =>‘{“messages”:[{“destinations”:[{“to”:”41793026727″}],”from”:”InfoSMS”,”text”:”This is a sample message”}]}’,
    //      CURLOPT_HTTPHEADER => array(
    //          ‘Authorization: {authorization}’,
    //          ‘Content-Type: application/json’,
    //          ‘Accept: application/json’
    //      ),
    //  ));
    //  $response = curl_exec($curl);
    //  curl_close($curl);
    //  echo $response;


    // $curl = curl_init();

    // // Set cURL options
    // curl_setopt_array($curl, [
    //     CURLOPT_URL => $aiServerUrl,
    //     CURLOPT_RETURNTRANSFER => true,
    //     CURLOPT_FOLLOWLOCATION => true,
    //     CURLOPT_TIMEOUT => 30, // Increase timeout to 30 seconds
    //     CURLOPT_HTTPGET => true, // Use GET method
    //     CURLOPT_SSL_VERIFYPEER => false, // Enable SSL verification
    //     CURLOPT_SSL_VERIFYHOST => false, // Enable SSL host verification Disable SSL verification (not recommended for production)
    // ]);
    //     }

    public function aiApi(Request $request)
    {
        $input = $request->input('string');


        $string = urlencode($input);




        // Define the URL of the AI server
        // $url = 'https://api.openai.com/v1/engines/text-curie-
        $aiServerUrl = "https://ydegrees.pearlbuddy.com:8090/append?string=$string";

        // $aiServerUrl = 'https://ydegrees.pearlbuddy.com:8090/append?string=hellopoooo';
        // return $aiServerUrl;


        //  https://forum.scpel.org/api/test112/1
        // Initialize cURL session

        $curl = curl_init();

        // Set cURL options
        curl_setopt_array($curl, [
            CURLOPT_URL => $aiServerUrl,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_TIMEOUT => 30, // Increase timeout to 30 seconds
            CURLOPT_HTTPGET => true, // Use GET method
            CURLOPT_SSL_VERIFYPEER => false, // Enable SSL verification
            CURLOPT_SSL_VERIFYHOST => false, // Enable SSL host verification Disable SSL verification (not recommended for production)
        ]);

        // Execute cURL request
        $response = curl_exec($curl);

        // Check for errors
        if (curl_errno($curl)) {
            $errorMessage = curl_error($curl);
            curl_close($curl);
            return response()->json([
                'error' => 'An error occurred while communicating with the AI server: ' . $errorMessage,
            ], 500);
        }

        // Close cURL session
        curl_close($curl);

        // Process the AI server response
        return response()->json([
            'success' => true,
            'data' => $response,
        ], 200);
    }



    public function aiApi2(Request $request)
    {
        $inputString = $request->input('string');
        $serverIP = 'ydegrees.pearlbuddy.com';
        $serverPort = '2024';

        // Construct the URL with query parameters
        $url = "https://$serverIP:$serverPort/append?string=" . urlencode($inputString);

        try {
            // Make the HTTP GET request with SSL verification disabled
            $response = Http::withOptions([
                'verify' => true, // Disable SSL verification
            ])->get($url);

            // Check if request was successful
            if ($response->successful()) {
                return response()->json([
                    'success' => true,
                    'data' => $response->body(),
                ], 200);
            }
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'An error occurred: ' . $e->getMessage(),
            ], 500);
        }
    }
}
