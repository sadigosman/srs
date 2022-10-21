<?php 

namespace App\Http\Controllers\Backend\Setup;

use App\Models\State;
use App\Models\Address;
use App\Models\Country;
use App\Models\City;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AddressController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $data['addresses'] = Address::all();
    // $data['countries'] = Country::with('cities')->get();
    // $data['states'] = State::get(["name", "id"]);
    // $data['cities'] = City::with('country')->get();



    return view('backend.setup.address.index',$data);

  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function Add()
  {
    //$data['countries'] = Country::orderBy('id')->with('statesWithCities')->get();
    $data['addresses'] = Address::all();
    $data['countries'] = Country::get(["name", "id"]);
    return view('backend.setup.address.new', $data);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    
    // $validatedData = $request->validate([
    //   'country_id' => 'required',
    //   'state_id' => 'required',
    //   'city_id' => 'required',
    //   'quareter' => 'required',
    //   'street' => 'required',
    // ]);
// dd($request);
    $data = new Address();
    $data->country_id = $request->country_id;
    $data->state_id = $request->state_id;
    $data->city_id = $request->city_id;
    $data->quarter = $request->quarter;
    $data->street = $request->street;
    $data->comment = $request->comment;

    $data->save();
   

    $notification = array(
      'message' => 'Address Inserted Successfully',
      'alert-type' => 'success'
    );

    return redirect()->route('address.index')->with($notification);

  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    $data = Address::find($id);

    return view('backend.setup.address.edit',compact('data'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    $data = Address::find($id);
      $data->delete();

      $notification = array(
          'message' => 'Address Deleted Successfully',
          'alert-type' => 'info'
      );

      return redirect()->route('address.index')->with($notification);
  }

  
  
}

?>