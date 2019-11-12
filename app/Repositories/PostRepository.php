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
            ->select(['id', 'tittle', 'image', 'description', 'created_at'])
            ->orderBy('created_at')
            ->take($count)
            ->get();
        }

        public function getAllWithPaginate($count = 9)
        {
            return $this->startConditions()
            ->select(['id', 'tittle', 'image', 'description', 'created_at'])
            ->paginate($count);
        }

        public function getPostById(int $id)
        {
            return $this->startConditions()
                ->where('id', $id)
                ->first();
        }

        public function newPost($inputs, $img)
        {
            $post = $this->startConditions();
            $post->fill($inputs);
            $post->save();
            if($img) {
                $post['image'] ='post_'.$post->id.'.jpg';
                $post->update();
                $img->storeAs('posts',$post->image, 'images');
            }
        }

        public function postUpdate($id, $inputs)
        {
            $this->startConditions()
                ->where('id', $id)
                ->update([
                    'tittle'=>$inputs['tittle'], 
                    'description'=>$inputs['description'], 
                    'text'=>$inputs['text'], 
                    'keywords'=>$inputs['keywords']
                ]);
        }

    }
    
?>
