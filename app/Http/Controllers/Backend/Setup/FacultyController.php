<?php 

namespace App\Http\Controllers\Backend\Setup;

use App\Models\Address;
use App\Models\Faculty;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\University;

class FacultyController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $data['faculties'] = Faculty::all(); //with('university')->get();
    $data['universities']= University::with('address')->get();
    return view('backend.setup.faculty.index',$data);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function add()
  {
    $data['faculty'] = Faculty::all(); //with('address')->get();
    $data['universities']= University::with('address')->get();
    $data['addresses'] = Address::get();     //Address::get(["name", "id"]);
    return view('backend.setup.faculty.new', $data);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    $data = new Faculty();
    $data->university_id = $request->university_id;
    $data->name = $request->name;
    $data->address_id = $request->address_id;
    

    $data->save();
   

    $notification = array(
      'message' => 'Faculty Inserted Successfully',
      'alert-type' => 'success'
    );

    return redirect()->route('faculty.index')->with($notification);
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
    $data = Faculty::find($id);
    $universities = University::all();
    $addresses = Address::all();

    return view('backend.setup.faculty.edit',compact('data','universities','addresses'));
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
  $data = Faculty::find($id);

  
  $data->university_id = $request->university_id;
  $data->name = $request->name;
  $data->address_id = $request->address_id;
  
  
  $data->save();

  $notification = array(
      'message' => 'Faculty Updated Successfully',
      'alert-type' => 'info'
  );

  
  

  return redirect()->route('faculty.index')->with($notification);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    $data = Faculty::find($id);
      $data->delete();

      $notification = array(
          'message' => 'Faculty Deleted Successfully',
          'alert-type' => 'info'
      );

      return redirect()->route('faculty.index')->with($notification);
  }
  
}

?>