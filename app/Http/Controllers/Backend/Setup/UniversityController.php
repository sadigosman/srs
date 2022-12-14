<?php 

namespace App\Http\Controllers\Backend\Setup;

use App\Models\University;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Address;

class UniversityController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $data['universities'] = University::with('address')->get();
    //dd($data);
    // $data['countries'] = Country::with('cities')->get();
    // $data['states'] = State::get(["name", "id"]);
    // $data['cities'] = City::with('country')->get();



    return view('backend.setup.university.index',$data);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function add()
  {
    $data['universities'] = University::all(); //with('address')->get();
    $data['addresses'] = Address::get();     //Address::get(["name", "id"]);
    return view('backend.setup.university.new', $data);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    $data = new University();
    $data->name = $request->name;
    $data->address_id = $request->address_id;
    

    $data->save();
   

    $notification = array(
      'message' => 'University Inserted Successfully',
      'alert-type' => 'success'
    );

    return redirect()->route('university.index')->with($notification);
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
    $data = University::find($id);
    $addresses = Address::all();

    return view('backend.setup.university.edit',compact('data','addresses'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Request $request,$id)
  {
    
 
    $validateData = $request->validate([
      'name' => 'required'
  //     'email' => 'required|unique:users'
     
  ]);
 // dd($request);
  $data = University::find($id);

  

  $data->name = $request->name;
  $data->address_id = $request->address_id;
  
  
  $data->save();

  $notification = array(
      'message' => 'University Updated Successfully',
      'alert-type' => 'info'
  );

  
  

  return redirect()->route('university.index')->with($notification);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    $data = University::find($id);
      $data->delete();

      $notification = array(
          'message' => 'University Deleted Successfully',
          'alert-type' => 'info'
      );

      return redirect()->route('university.index')->with($notification);
  }
  
}

?>