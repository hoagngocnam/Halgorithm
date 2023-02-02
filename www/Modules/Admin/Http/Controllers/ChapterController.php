<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorechapterRequest;
use App\Http\Requests\UpdatechapterRequest;
use App\Models\chapter;
use Modules\Admin\Repositories\Interfaces\{
	CategoryRepositoryInterface,
	ProductRepositoryInterface,
	ChapterRepositoryInterface,

};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChapterController extends Controller
{
	private CategoryRepositoryInterface $categoryRepository;
	private ProductRepositoryInterface $productRepository;
	private ChapterRepositoryInterface $chapterRepository;

	public function __construct(
		CategoryRepositoryInterface $categoryRepository,
		ProductRepositoryInterface $productRepository,
		ChapterRepositoryInterface $chapterRepository
	) {
		$this->categoryRepository = $categoryRepository;
		$this->productRepository = $productRepository;
		$this->chapterRepository = $chapterRepository;
	}

	/**
	 * Màn hình danh sách chương truyện
	 */
    public function index(Request $request, int $product_id)
    {
        $product = $this->productRepository->first($product_id);
        $chapters = $this->chapterRepository->paginate();

        return view('admin::product.chapter', compact(
            'product',
            'chapters'
        ));
    }


	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Room  $room
	 * @return \Illuminate\Http\Response
	 */
	public function show(Room $room)
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function add(Request $request, int $product_id)
	{
		//
		$product = $this->productRepository->first($product_id);

		if ($request->isMethod('post')) {
			$params = $request->only(['chap', 'name']);
			$params['product_id'] = $product_id;
			$result = $this->chapterRepository->add($params);
		}

		return view('admin::chapter.add', compact(
			'product'
		));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \App\Http\Requests\StorechapterRequest  $request
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, int $id)
	{
		//
		$condition = ['id' => $id];
		if ($request->isMethod('post')) {
			$params = $request->only(['name']);
			$result = $this->chapterRepository->update($condition, $params);
		}
		$chapter = $this->chapterRepository->first($condition);
		return view('admin::chapter.update', compact(
			'chapter'
		));
	}

	public function detail()
	{
	}
}
