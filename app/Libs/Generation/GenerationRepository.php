<? namespace App\Libs\Generation;

use App\Models\Generation;
use Illuminate\Database\Eloquent\Model;

class GenerationRepository
{
    public function __construct(Generation $generation)
    {
        $this->generation = $generation;
    }

    public function findAllGenerations()
    {
        $result = $this->generation->all()->toArray();

        return $result;
    }

}