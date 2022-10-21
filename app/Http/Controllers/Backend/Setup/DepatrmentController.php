<?php 

namespace App\Http\Controllers\Backend\Setup;

use App\Models\Address;
use App\Models\Faculty;
use App\Models\Depatrment;
use App\Models\University;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DepatrmentController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $data['departments']= Depatrment::all(); //with('faculty')->get('id','name');
    $data['faculties'] = Faculty::all(); //with('university')->get();
    $data['universities']= University::with('address')->get();
    return view('backend.setup.department.index',$data);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function add()
  {
    $data['departments']= Depatrment::all();
    $data['faculties'] = Faculty::all(); //with('address')->get();
    $data['universities']= University::with('address')->get();
    $data['addresses'] = Address::get();     //Address::get(["name", "id"]);
    return view('backend.setup.department.new', $data);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    $data = new Depatrment();
    $data->faculty_id = $request->faculty_id;
    $data->name = $request->name;
    $data->address_id = $request->address_id;
    

    $data->save();
   

    $notification = array(
      'message' => 'Department Inserted Successfully',
      'alert-type' => 'success'
    );

    return redirect()->route('department.index')->with($notification);
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
    $data = Depatrment::find($id);
    $faculties = Faculty::all();
    $addresses = Address::all();

    return view('backend.setup.department.edit',compact('data','faculties','addresses'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Request $request ,$id)
  {
    $validateData = $request->validate([
      'name' => 'required'
  //     'email' => 'required|unique:users'
     
  ]);
 // dd($request);
  $data = Depatrment::find($id);

  
  $data->faculty_id = $request->faculty_id;
  $data->name = $request->name;
  $data->address_id = $request->address_id;
  
  
  $data->save();

  $notification = array(
      'message' => 'Depatrment Updated Successfully',
      'alert-type' => 'info'
    );

  
  return redirect()->route('department.index')->with($notification);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    $data = Depatrment::find($id);
      $data->delete();

      $notification = array(
          'message' => 'Department Deleted Successfully',
          'alert-type' => 'info'
      );

      return redirect()->route('department.index')->with($notification);
  }
  
}

?>