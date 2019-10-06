<?php
    namespace App\Repositories;

    use App\Models\Category as Model;
    use Illuminate\Database\Eloquent\Collection;
    /**
     * undocumented class
     */
    class CategoryRepository extends BaseRepository
    {
        protected function getModelClass(){
            return Model::class;
        }

        public function getAll()
        {
            return $this->startConditions()
            ->where('id','<',35)
            ->get('*');
        }

        public function getCategoriesById($categoryId)
        {
            $parent = $this->startConditions()
                ->where('id',$categoryId)
                ->value('parent');
            if($parent == 0)
                return $this->startConditions()
                    ->where('parent', $categoryId)
                    ->pluck('id')->toArray();
            else return array($categoryId);
        }
    }
    
?>
