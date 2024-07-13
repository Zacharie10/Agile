<?php

namespace App\Services;

use App\Models\Project;
use App\Models\Tache;

class SimilarityService
{
    protected $huggingFaceService;

    public function __construct(HuggingFaceService $huggingFaceService)
    {
        $this->huggingFaceService = $huggingFaceService;
    }

    public function checkSimilarity($newText, $type = 'project')
    {
        $embeddings = $this->huggingFaceService->getEmbeddings($newText);

        $items = ($type === 'project') ? Project::all() : Tache::all();
        foreach ($items as $item) {
            $existingEmbeddings = $this->huggingFaceService->getEmbeddings($item->description);
            $similarity = $this->cosineSimilarity($embeddings, $existingEmbeddings);

            if ($similarity > 0.8) { // threshold for similarity
                return $item;
            }
        }

        return null;
    }

    private function cosineSimilarity($vecA, $vecB)
    {
        $dotProduct = array_sum(array_map(fn($a, $b) => $a * $b, $vecA[0], $vecB[0]));
        $magnitudeA = sqrt(array_sum(array_map(fn($a) => $a * $a, $vecA[0]))); // 'a' is used here
        $magnitudeB = sqrt(array_sum(array_map(fn($b) => $b * $b, $vecB[0]))); // 'b' is used here

        return $dotProduct / ($magnitudeA * $magnitudeB);
    }
}
