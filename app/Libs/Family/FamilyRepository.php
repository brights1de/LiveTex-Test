<? namespace App\Libs\Family;

use App\Models\Family;
use Illuminate\Database\Eloquent\Model;

class FamilyRepository
{
    public function __construct(Family $family)
    {
        $this->family = $family;
    }

    public function findFamilyWithPeoples($id)
    {
        $result = $this->family->find($id)->peoples()->get()->toArray();

        return $result;
    }

    public function findAllFamilies()
    {
        $result = $this->family->all()->toArray();

        return $result;
    }
}