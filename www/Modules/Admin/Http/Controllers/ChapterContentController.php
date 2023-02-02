<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorechapterRequest;
use App\Http\Requests\UpdatechapterRequest;
use App\Models\chapter;
use App\Repositories\Interfaces\{
	CategoryRepositoryInterface,
	ProductRepositoryInterface,
	ChapterRepositoryInterface,

};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChapterContentController extends Controller
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
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request, int $product_id)
	{
		//
		$product = $this->productRepository->first(['id' => $product_id]);

		$chapters = $this->chapterRepository->paginate();

		return view('admin::chapter.index', compact(
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
	public function add(Request $request, int $product_id, int $chapter_id)
	{
		//
		$product = $this->productRepository->first(['id' => $product_id]);
		$chapter = $this->chapterRepository->first(['id' => $chapter_id]);
		if ($request->isMethod('post')) {
			$params = $request->only(['chap', 'name']);
			$params['product_id'] = $product_id;
			$result = $this->chapterRepository->add($params);
		}

		return view('admin::chapter-content.add', compact(
			'product',
			'chapter'
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
