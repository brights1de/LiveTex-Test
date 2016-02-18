<? namespace App\Libs\People;

use App\Models\People;
use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset;

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
        if (!empty($data['parent_id'])) {
            $this->createNodePeople($data);
        } else {
            $this->createRootPeople($data);
        }
    }

    public function findAllTreePeoples()
    {
        $trees = $this->people->with('spouse')->get()->toTree()->toArray();
        if (!isset($trees)) {
            return false;
        }
        $result = $this->conversionTree($trees);

        return $result;
    }

    //@todo when fix hasChildren() the bundle
    public function conversionTree($arr)
    {
        $newArr = [];
        foreach ($arr as $key => $value) {
            if (empty($arr[$key]['children'])) {
                continue;
            }
            $newArr[] = $arr[$key];
        }

        return $newArr;
    }

    public function createRootPeople($data)
    {
        $people = new People;
        $people->name = $data['name'];
        $people->surname = $data['surname'];
        $people->age = $data['age'];
        $people->gender = $data['gender'];
        $people->spouse = empty($data['spouse']) ? null : $data['spouse'];

        $root = People::create($people->attributesToArray());
        $root->makeRoot()->save();
    }

    public function createNodePeople($data)
    {
        $parent = $this->people->newQuery()->find($data['parent_id']);
        $people = new People;
        $people->name = $data['name'];
        $people->surname = $data['surname'];
        $people->age = $data['age'];
        $people->gender = $data['gender'];
        $people->spouse = empty($data['spouse']) ? null : $data['spouse'];

        $parent->appendNode($people);
    }
}