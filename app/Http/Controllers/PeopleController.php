<?php namespace App\Http\Controllers;

use App\Libs\People\PeopleManager;
use App\Libs\Family\FamilyManager;
use App\Libs\Generation\GenerationManager;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class PeopleController extends Controller
{
    private $peopleManager;
    private $familyManager;
    private $generationManager;

    public function __construct(PeopleManager $peopleManager,
        FamilyManager $familyManager,
        GenerationManager $generationManager)
    {
        $this->peopleManager = $peopleManager;
        $this->familyManager = $familyManager;
        $this->generationManager = $generationManager;
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

        $families = $this->familyManager->getAllFamilies();
        $generations = $this->generationManager->getAllGenerations();

        return view('people/add-form', ['families' => $families, 'generations' => $generations]);
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
                'name'          => 'required|string',
                'surname'       => 'required|string',
                'age'           => 'required|integer',
                'gender'        => 'required|in:male,female',
                'family_id'     => 'required|exists:families,id',
                'generation_id' => 'required|exists:generations,id',
            ]);

        $this->peopleManager->addPeople($request->all());

        return \Redirect::action('PeopleController@showPeopleForm')->with('messageSuccess',
            'The people successfully added');
    }
}