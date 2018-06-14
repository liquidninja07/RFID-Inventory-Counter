<?php

namespace App\Http\Controllers;
use App\Rfid;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Session;

class RfidsController extends Controller
{
  public function index(){
      //fetch all rfids data
      $rfids = Rfid::get();

      //pass rfids data to view and load list view
      return view('rfids.index', ['rfids' => $rfids]);
  }

  public function details($id){
      //fetch rfid data
      $rfid = Rfid::find($id);

      //pass rfids data to view and load list view
      return view('rfids.details', ['rfid' => $rfid]);
  }

  public function add(){
      //load form view
      return view('rfids.add');
  }

  public function insert(Request $request){
      //validate rfid data
      $this->validate($request, [
          'uid' => 'required',
          'make' => 'required',
          'model' => 'required'
      ]);

      //get rfid data
      $rfidData = $request->all();

      //insert rfid data
      Rfid::create($rfidData);

      //store status message
      Session::flash('success_msg', 'Rfid added successfully!');

      return redirect()->route('rfids.index');
  }

  public function edit($id){
      //get rfid data by id
      $rfid = Rfid::find($id);

      //load form view
      return view('rfids.edit', ['rfid' => $rfid]);
  }

  public function update($id, Request $request){
      //validate rfid data
      $this->validate($request, [
          'uid' => 'required',
          'make' => 'required',
          'model' => 'required'
      ]);

      //get rfid data
      $rfidData = $request->all();

      //update rfid data
      Rfid::find($id)->update($rfidData);

      //store status message
      Session::flash('success_msg', 'Rfid updated successfully!');

      return redirect()->route('rfids.index');
  }

  public function delete($id){
      //update rfid data
      Rfid::find($id)->delete();

      //store status message
      Session::flash('success_msg', 'Rfid deleted successfully!');

      return redirect()->route('rfids.index');
  }
}
