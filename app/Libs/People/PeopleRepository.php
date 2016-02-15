<? namespace App\Libs\People;

use App\Models\People;
use Illuminate\Database\Eloquent\Model;

class PeopleRepository
{
    public function __construct(People $people)
    {
        $this->people = $people;
    }

    public function findAllPeoples()
    {
        $result = $this->people->all()->toArray();

        return $result;
    }

    public function createPeople($data)
    {

        $people = new People;
        $people->name = $data['name'];
        $people->surname = $data['surname'];
        $people->age = $data['age'];
        $people->gender = $data['gender'];
        $people->family_id = $data['family_id'];
        $people->generation_id = $data['generation_id'];
        $people->save();
    }
}