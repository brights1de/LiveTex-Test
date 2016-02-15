<?php namespace App\Http\Controllers;

use App\Libs\Family\FamilyManager;

class FamilyController extends Controller
{
    private $familyManager;

    public function __construct(FamilyManager $familyManager)
    {
        $this->familyManager = $familyManager;
    }

    public function showFamily($id)
    {
        $family = $this->familyManager->getFamilyWithPeoples($id);

        return view('family/family-tree', ['family' => $family]);
    }

}