<?php
    namespace App\Repositories;

    use App\Models\Post as Model;
    use Illuminate\Database\Eloquent\Collection;
    /**
     * undocumented class
     */
    class PostRepository extends BaseRepository
    {
        protected function getModelClass(){
            return Model::class;
        }

        public function getLastPosts($count = 3)
        {
            return $this->startConditions()
            ->orderBy('created_at')
            ->take($count)
            ->get();
        }

        public function getAllWithPagonate($count = 9)
        {
            return $this->startConditions()
            ->order_by('created_at')
            ->take($count)
            ->paginate($count);
        }

    }
    
?>
