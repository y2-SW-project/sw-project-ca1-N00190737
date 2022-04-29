<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Community;
use Illuminate\Http\Request;



class CommunityController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:admin');
    }




    public function index()
    {
        $communities = Community::all();
        return view('admin.communities.index', [
            'communities' => $communities
        ]);
    }

    public function create()
    {
        return view('admin.communities.create');
    }

    public function store(Request $request)
    {
        // when user clicks submit on the create view above
        $request->validate([
            'name' => 'required',
            'date' =>'required|max:500',
            'time' => 'required',
            'price' => 'required|max:12'
        ]);


        //Makes a community Object
        $community = new Community();
        $community->name = $request->input('name');
        $community->date = $request->input('date');
        $community->time = $request->input('time');
        $community->price = $request->input('price');


        //Puts them in the community variable
        //community is now an object
        //Saves it to the database
        $community->save();

        //Then goes back to index if everything is correct
        return redirect()->route('admin.communities.index');
    }


    public function show($id)
    {
        $communities = Community::findOrFail($id);

        return view('admin.communities.show', [
            'communities' => $communities
        ]);
    }



    public function edit($id)
    {
        // get the community by ID from the Database. passes through the function

        //Find or Fail check is it exists

        $community = Community::findOrFail($id);

        // Load the edit view and pass the community to
        // that view
        return view('admin.communities.edit', [
            'community' => $community
        ]);
    }



    public function update(Request $request, $id)
    {

        // first get the existing community that the user is update
        //Id is passed through to make sure we update the right community

        $community = Community::findOrFail($id);
        $request->validate([
            'name' => 'required',
            'date' =>'required',
            'time' => 'required',
            'price' => 'required'
        ]);



        // if validation passes then update existing community
        $community->name = $request->input('name');
        $community->date = $request->input('date');
        $community->time = $request->input('time');
        $community->price = $request->input('price');
        $community->save();


        return redirect()->route('admin.communities.index');
    }




    public function destroy($id)
    {
        $community = Community::findOrFail($id);
        $community->delete();

        return redirect()->route('admin.communities.index');
    }
}
