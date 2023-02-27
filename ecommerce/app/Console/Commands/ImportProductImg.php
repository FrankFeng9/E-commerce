<?php

namespace App\Console\Commands;

use App\Imports\ProudctsImport;
use App\Models\MultiImg;
use App\Models\Product;
use Illuminate\Console\Command;
use Maatwebsite\Excel\Facades\Excel;

class ImportProductImg extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:product-img';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $id_range = [101, 200];
        MultiImg::whereBetween('product_id', $id_range)->delete();

        for ($i = $id_range[0]; $i <= $id_range[1]; $i++) {
            $id = $i - 100;
            $files = $this->findFiles($id);
            if (!$files) {
                continue;
            }
            foreach ($files as $file) {
                $photo_name = $this->fullToRelativePath($file);
                $insert_data = [
                    'product_id' => $i,
                    'photo_name' => $photo_name,
                ];
                MultiImg::create($insert_data);
            }

            $product_thambnail = $this->fullToRelativePath($files[0]);
            $update_data = [
                'product_thambnail' => $product_thambnail,
            ];
            Product::where('id', $i)->update($update_data);
        }

        $this->info('success');
        return 0;
    }

    /**
     * 根据商品ID查询所有的图片
     *
     * @param int $id
     * @return array
     */
    private function findFiles($id)
    {
        $id_str = str_pad($id, 3, '0', STR_PAD_LEFT);
        return glob(public_path('upload/product_img/'.$id_str.'_*'));
    }

    /**
     * 图片完整路径转换成数据表可用的相对路径
     *
     * @param string $file
     * @return string
     */
    private function fullToRelativePath($file)
    {
        $photo_name = str_replace(public_path(), '' , $file);
        $photo_name = trim($photo_name, '/');
        return $photo_name;
    }
}
