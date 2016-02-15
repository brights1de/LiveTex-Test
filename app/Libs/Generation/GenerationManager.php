<? namespace App\Libs\Generation;

use App\Libs\Generation\GenerationRepository;

class GenerationManager
{
    private $generationRepository;

    public function __construct(GenerationRepository $generationRepository)
    {
        $this->generationRepository = $generationRepository;
    }

    public function getAllGenerations()
    {
        $result = $this->generationRepository->findAllGenerations();

        return $result;
    }

}