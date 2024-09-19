<?php

namespace App\Http\Controllers;

// use auth;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AdminController extends Controller
{
    //
    public function _construct()
    {
        $this->middleware('auth:admin-api', ['except' => ['adminlogin', 'adminregister']]);
    }

    public function Adminregister(Request $request)
    {

        try {


            $formFields = $request->validate([
                'name' => 'required',
                'email' => ['required', 'email', Rule::unique('admins', 'email')],
                'phone' => 'required',
                'image' => 'nullable',
                'role' => 'nullable',

                'dob' => 'nullable',
                'next_of_kin' => 'nullable',
                'next_of_kin_phone' => 'nullable',
                'nin' => 'nullable',
                'department' => 'nullable',
                'nssf' => 'nullable',
                'tin' => 'nullable',
                'password' => 'required',
            ]);

            if ($request->hasFile('image')) {
                $formFields['image'] = $request->file('image')->store('images', 'public');
            }
            // Hash password
            $formFields['password'] = bcrypt($formFields['password']);

            $admin = Admin::create($formFields);

            if ($admin) {
                return response()->json(["Admin" => $admin, 'status' => true], 200);
            } else {
                return response()->json(['status' => false], 500);
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




    public function adminlogin(Request $request)
    {
        $credentials = request(['email', 'password']);
        if (!$token = auth()->guard('admin-api')->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized User'], 401);
        }
        return $this->respondWithToken($token);
    }


    protected function respondWithToken($token)
    {
        // $user = auth()->guard('admin-api')->user();
        $user = auth()->guard('admin-api')->user();
        $userData = $user->only('email', 'role', 'phone', 'name', 'location', 'sex',);

        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => Auth::guard('admin-api')->factory()->getTTL() * 60,
            'user' => $userData


        ]);
    }









    // protected function respondWithToken($token)
    // {
    //     return response()->json([
    //         'access_token' => $token,
    //         'token_type' => 'bearer',
    //         'expires_in' => Auth::guard('admin-api')->factory()->getTTL() * 60
    //     ]);
    // }

    public function profileAdmin()
    {
        return response()->json(auth()->guard('admin-api')->user());
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logoutAdmin()
    {
        auth()->guard('admin-api')->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }


    public function getAllUser()
    {
        $users =   User::all();
        return response()->json(['users' => $users]);
    }

    public function getSingleUser($id)
    {
        $user = User::find($id);
        if (!$user) {
            return response()->json(['message' => 'User Not Found']);
        }
        return response()->json(['user' => $user]);
    }



    public function getAllAdmin()
    {
        $Admins =   Admin::all();
        return response()->json(['Admins' => $Admins], 200);
    }
    public function getSingleAdmin($id)
    {
        $Admin = Admin::find($id);
        if (!$Admin) {
            return response()->json(['message' => 'Admin Not Found'], 401);
        }
        return response()->json(['Admin' => $Admin], 200);
    }


    //  AdminProfile
    public function adminProfile($id)
    {
        $Admin = Admin::find($id);
        if (!$Admin) {
            return response()->json(["message" => "Admin is not found"]);
        }

        return response()->json([
            "Admin" => $Admin
        ], 200);
    }


    public function read()
    {
        return 'read';
    }






     public function getEmails()
    {
        // Fetch cPanel credentials from environment variables
        $cpanelUser = env('CPANEL_USER');
        $cpanelPass = env('CPANEL_PASS');
        $domain = env('CPANEL_DOMAIN');

        // cPanel UAPI endpoint
        $uapiEndpoint = "https://$domain:2083/execute/Email/list_pops";

        // Initialize cURL
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $uapiEndpoint);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // Set cPanel credentials for basic authentication
        curl_setopt($ch, CURLOPT_USERPWD, "$cpanelUser:$cpanelPass");

        // Execute cURL request
        $response = curl_exec($ch);

        // Check for errors
        if (curl_errno($ch)) {
            $errorMessage = 'cURL error: ' . curl_error($ch);
            curl_close($ch);
            return response()->json(['error' => $errorMessage], 500);
        }

        // Close cURL
        curl_close($ch);

        // Decode the JSON response
        $responseData = json_decode($response, true);

        // Check if the response contains the data
        if (isset($responseData['data'])) {
            $emailAccounts = $responseData['data'];
            return response()->json(['email'=>$emailAccounts]);
        } else {
            $errorDetails = isset($responseData['errors']) ? implode(", ", $responseData['errors']) : 'Unknown error';
            return response()->json(['error' => 'Error fetching email accounts.', 'details' => $errorDetails], 500);
        }
    }


 
}
