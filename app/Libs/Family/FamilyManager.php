<? namespace App\Libs\Family;

use App\Libs\Family\FamilyRepository;

class FamilyManager
{
    private $familyRepository;

    public function __construct(FamilyRepository $familyRepository)
    {
        $this->familyRepository = $familyRepository;
    }

    public function getFamilyWithPeoples($id)
    {
        $result = $this->familyRepository->findFamilyWithPeoples($id);

        return $result;
    }

    public function getAllFamilies()
    {
        $result = $this->familyRepository->findAllFamilies();

        return $result;
    }
}