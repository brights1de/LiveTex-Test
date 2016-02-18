<? namespace App\Libs\People;

use App\Libs\People\PeopleRepository;

class PeopleManager
{
    private $peopleRepository;

    public function __construct(PeopleRepository $peopleRepository)
    {
        $this->peopleRepository = $peopleRepository;
    }

    public function getAllPeoples()
    {
        $result = $this->peopleRepository->findAllPeoples();

        return $result;
    }

    public function addPeople($data)
    {
        $this->peopleRepository->createPeople($data);
    }

    public function getAllTreePeoples()
    {
        $result = $this->peopleRepository->findAllTreePeoples();

        return $result;
    }
}