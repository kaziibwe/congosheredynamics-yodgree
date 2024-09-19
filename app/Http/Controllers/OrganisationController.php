<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Organisation;
use App\Models\User;

use Illuminate\Http\Request;
use Spatie\LaravelIgnition\FlareMiddleware\AddJobs;

class OrganisationController extends Controller
{
    //




    // public function getAllOrganisation()
    // {
    //     // Fetch all organizations
    //     $organisations = Organisation::all();

    //     // Initialize an array to hold the result
    //     $result = [];

    //     // Loop through each organization to find the users that match the criteria
    //     foreach ($organisations as $organisation) {
    //         // Find users with the role of admin and product name as twogere for the current organization
    //         $users = User::where('organisation_id', $organisation->id)
    //                      ->where('role', 'admin')
    //                      ->where('product', 'twogere')
    //                      ->get();

    //         // If there are matching users, add the organization and users to the result array
    //         if ($users->isNotEmpty()) {
    //             $result[] = [
    //                 'organisation' => $organisation,
    //                 'users' => $users
    //             ];
    //         }
    //     }

    //     // Return the result as JSON
    //     return response()->json(['organisations' => $result], 200);
    // }


    public function getAllOrganisationYodegree()
    {
        // Fetch all organizations
        $organisations = Organisation::where('product','yodegree')->get();

        // Initialize an array to hold the result
        $result = [];

        // Loop through each organization to find the users that match the criteria
        foreach ($organisations as $organisation) {
            // Find users with the role of admin and product name as twogere for the current organization
            $users = User::where('organisation_id', $organisation->id)
                ->where('role', 'admin')
                ->where('product', 'yodegree')
                ->get();

            // If there are matching users, add the organization and users to the result array
            if ($users->isNotEmpty()) {
                foreach ($users as $user) {
                    // Create a combined array with organization and user details
                    $combined = array_merge(
                        $organisation->toArray(),
                        $user->toArray()
                    );

                    // Add the combined array to the result
                    $result[] = $combined;
                }
            }
        }

        // Return the result as JSON
        return response()->json(['organisations' => $result], 200);
    }



    public function getAllOrganisationTwogere()
    {
        // Fetch all organizations
        $organisations = Organisation::where('product','twogere')->get();

        // Initialize an array to hold the result
        $result = [];

        // Loop through each organization to find the users that match the criteria
        foreach ($organisations as $organisation) {
            // Find users with the role of admin and product name as twogere for the current organization
            $users = User::where('organisation_id', $organisation->id)
                ->where('role', 'admin')
                ->where('product', 'twogere')
                ->get();

            // If there are matching users, add the organization and users to the result array
            if ($users->isNotEmpty()) {
                foreach ($users as $user) {
                    // Create a combined array with organization and user details
                    $combined = array_merge(
                        $organisation->toArray(),
                        $user->toArray()
                    );

                    // Add the combined array to the result
                    $result[] = $combined;
                }
            }
        }

        // Return the result as JSON
        return response()->json(['organisations' => $result], 200);
    }


    public function getAllYodegreeUsers()
    {
        // Fetch all organizations
        $yodegree = User::where('role',null)->where('organisation_id',null)->where('product','yodegree')->get();
        return response()->json(['organisations' => $yodegree], 200);

    }

    public function getAllTwogereUsers()
    {
        // Fetch all organizations
        $yodegree = User::where('role',null)->where('organisation_id',null)->where('product','twogere')->get();
        return response()->json(['organisations' => $yodegree], 200);

    }


    public function getAllOrganisationUsers($id)
    {
        $organisation=Organisation::find($id);
        if(!$organisation){
            return response()->json(["message"=>"Organisation is not found"]);
        }
        // Fetch all organizations

        $users=$organisation->users()->get();
        // $users=User::where('organisation_id',$id);
        return response()->json([
           "organisation"=> $organisation,
            "users"=>$users
        ],200);

    }


    



}
