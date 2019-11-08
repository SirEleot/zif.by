<?php
    namespace App\Repositories;

    use App\Models\Item as Model;
    use Illuminate\Database\Eloquent\Collection;
    /**
     * undocumented class
     */
    class ItemRepository extends BaseRepository
    {
        private $itemOnPage = 9;
        
        protected function getModelClass(){
            return Model::class;
        }

        public function getAllWithPaginate(int $itemOnPage = -1)
        {
            return $this->startConditions()
                ->select('name', 'id', 'price', 'sale', 'image', 'description')
                ->paginate($itemOnPage < 0 ? $this->itemOnPage : $itemOnPage);
        } 
        
        public function getSaleWithPaginate(int $itemOnPage = -1)
        {
            return $this->startConditions()                
                ->where('sale', '>', 0)
                ->select('name', 'id', 'price', 'sale', 'image')
                ->paginate($itemOnPage < 0 ? $this->itemOnPage : $itemOnPage);
        }
        
        public function getByCategories($categories)
        {
            return $this->startConditions()
                ->where('category_id', $categories)
                ->select('name', 'id', 'price', 'sale', 'image')
                ->paginate($this->itemOnPage);
        }

        public function getById(int $id)
        {
            return $this->startConditions($count = 6)
                ->where('id', '>=', $id)
                ->orderBy('id')
                ->take($count)
                ->get();
        }

        public function getByRange(array $ids)
        {
            return $this->startConditions($count = 6)
                ->select('name', 'id', 'price', 'sale', 'image')
                ->whereIn('id', $ids)
                ->get();
        }

        public function updateItem($id, $inputs)
        {
            $this->startConditions()
                ->where('id', $id)
                ->update(['name'=>$inputs['name'], 'price'=>$inputs['price'], 'sale'=>$inputs['sale']]);
        } 
        
        public function deleteItem($id)
        {
            $this->startConditions()
                ->where('id', $id)
                ->delete();
        }

        public function addItem($inputs, $img)
        {
            $item = $this->startConditions();
            $item->fill($inputs);
            $item->save();
            if($img) {
                $item['image'] ='item_'.$item->id.'.jpg';
                $item->update();
                $img->storeAs('items',$item->image, 'images');
            }
        }

        public function getSearchedWithPaginate(string $text, int $itemOnPage = -1)
        {
            return $this->startConditions()
                ->select('name', 'id', 'price', 'sale', 'image', 'description')
                ->where('name','LIKE',"%$text%")
                ->paginate($itemOnPage < 0 ? $this->itemOnPage : $itemOnPage);
        }
    }
    
?>
