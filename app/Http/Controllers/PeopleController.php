<?php namespace App\Http\Controllers;

use App\Libs\People\PeopleManager;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    private $peopleManager;

    public function __construct(PeopleManager $peopleManager)
    {
        $this->peopleManager = $peopleManager;
    }

    /**
     * Show all peoples
     *
     * @return array
     */
    public function showAllPeoples()
    {
        $peoples = $this->peopleManager->getAllPeoples();

        return view('people/list', ['peoples' => $peoples]);
    }

    /**
     * Show form for add new people
     *
     * @return array
     */
    public function showPeopleForm()
    {

        $peoples = $this->peopleManager->getAllPeoples();

        return view('people/add-form', ['peoples' => $peoples]);
    }

    /**
     * Add new people
     *
     * @param  Request $request
     * @return array
     */
    public function processingRequest(Request $request)
    {
        //@todo add request form when will be complex logic
        $this->validate($request,
            [
                'name'      => 'required|string',
                'surname'   => 'required|string',
                'age'       => 'required|integer',
                'gender'    => 'required|in:male,female',
                'spouse'    => 'exists:peoples,id',
                'parent_id' => 'exists:peoples,id',
            ]);

        $this->peopleManager->addPeople($request->all());

        return \Redirect::action('PeopleController@showPeopleForm')->with('messageSuccess',
            'The people successfully added');
    }

    /**
     * Show trees peoples all family
     *
     * @return array
     */
    public function showTrees()
    {
        $trees = $this->peopleManager->getAllTreePeoples();

        return view('people/tree', ['trees' => $trees]);
    }
}