<?php
    namespace App\Repositories;

    use App\Models\Setting as Model;
    use Illuminate\Database\Eloquent\Collection;
    /**
     * undocumented class
     */
    class SettingRepository extends BaseRepository
    {
        protected function getModelClass(){
            return Model::class;
        }

        public function getCoef()
        {
            return $this->startConditions()
            ->where('id',1)
            ->first()['coef'] / 100;
        } 
        
        public function setCoef($coef)
        {
            $this->startConditions()
            ->where('id', 1)
            ->update(['coef'=>(int)($coef * 100)]);
        }
    }
    
?>
