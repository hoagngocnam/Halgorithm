<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Modules\Admin\Http\Requests\ProductRequest;
use Modules\Admin\Repositories\{
	CategoryRepository,
	ProductRepository,
	MultimediaRepository,
};

class MultimediaController extends Controller
{
	private CategoryRepository $categoryRepository;
	private ProductRepository $productRepository;
	private MultimediaRepository $multimediaRepository;

	public function __construct(
		CategoryRepository $categoryRepository,
		ProductRepository $productRepository,
		MultimediaRepository $multimediaRepository
	) {
		$this->categoryRepository = $categoryRepository;
		$this->productRepository = $productRepository;
		$this->multimediaRepository = $multimediaRepository;
	}

	/**
	 * Màn hình danh sách sản phẩm
	 */
	public function index(Request $request, int $product_id)
	{
		$product = $this->productRepository->first($product_id);
		if ($request->isMethod('post')) {
			$input = $request->file('multimedia');
			$newMultimedia = $input['new'] ?? [];
			$oldMultimedia = $input['old'] ?? [];
			$folderPath = 'uploads/products/' . $this->folderName($product_id);
			if (!empty($input)) {
				// try {
					// DB::beginTransaction();
					$params = [];
					if (!empty($newMultimedia)) {
						foreach ($newMultimedia as $index => $file) {
							$fileLink = $folderPath . '/' . $file->hashName();
							$file->store($folderPath);
							$params[$index] = [
								'product_id' => $product_id,
								'type' => 1,
								'path' => $fileLink,
							];
						}
					}
					DB::table('multimedia')->insert($params);
					if (!empty($oldMultimedia)) {
						foreach ($oldMultimedia as $key => $image) {
							// $linkOldImage = $this->productRepository->firstImage($key);
							// $uploadFiles = new UploadFiles(
							// 	$image,
							// 	NAME_FOLDER_UPLOAD['product'],
							// 	TYPE_FILE_UPLOAD['image'],
							// 	$linkOldImage->link,
							// 	$folderImage
							// );
							// $upload = $uploadFiles->upload();
							// if ($upload['status'] === FAILED) {
							// 	throw new \RuntimeException($upload['message']);
							// }
							// $params['product_id'] = $productId;
							// $params['link'] = $upload['path_file'];
							// $this->productRepository->updateImages($key, $params);
						}
					}
					// DB::commit();
					return redirect()->route('admin.multimedia.index', ['product_id' => $product_id]);
				// } catch (Exception $exception) {
				// 	dd($exception->getMessage());
				// 	DB::rollBack();
				// }
			}
		}
		return view('admin::multimedia.index', compact(
			'product'
		));
	}

	/**
	 * Xóa hình ảnh sản phẩm
	 */
	public function deleteImage(Request $request)
	{
		$productImageId = $request->input('product_image_id');
		$image = $this->productRepository->firstImage($productImageId);
		$this->productRepository->deleteImage($productImageId);
		Storage::disk(DISKS_UPLOAD['public'])->delete($image->link);
		return response()
			->json(['msg' => 'success'])
			->header('Content-Type', 'json');
	}

	private function folderName($productId)
    {
        return str_pad($productId, 5, '0', STR_PAD_LEFT);
    }
}
