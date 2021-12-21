<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\FindADonor;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        try {
            $data = $request->all();

            if($request->type == 'Become Donor')
            {
                $donor  = Donation::create($request->except('_token','type'));
                $success['user'] =  $donor;
                $success['message'] = "Doner created..";
                return $this->apiResponse($success);
            }elseif($request->type == 'Find A Donor')
            {
                $donor  = FindADonor::create($request->except('_token','type'));
                $success['user'] =  $donor;
                $success['message'] = "Doner created..";
                return $this->apiResponse($success);
            }
        } catch (\Throwable $th) {
            $error = "Unable to create widget.";
            return $this->apiResponse($error, 401);
        }   
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function show(Donation $donation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function edit(Donation $donation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Donation $donation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donation $donation)
    {
        //
    }
}
