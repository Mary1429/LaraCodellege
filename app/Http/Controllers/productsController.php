<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateproductsRequest;
use App\Http\Requests\UpdateproductsRequest;
use App\Repositories\productsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Storage;
use Laracasts\Flash\Flash as FlashFlash;
use Response;

class productsController extends AppBaseController
{
    /** @var  productsRepository */
    private $productsRepository;

    public function __construct(productsRepository $productsRepo)
    {
        $this->productsRepository = $productsRepo;
    }

    /**
     * Display a listing of the products.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $products = $this->productsRepository->all();

        return view('products.index')
            ->with('products', $products);
    }

    /**
     * Show the form for creating a new products.
     *
     * @return Response
     */
    public function create()
    {
        $products = $this->productsRepository->all();
        return view('products.create')->with('products', $products);
    }

    /**
     * Store a newly created products in storage.
     *
     * @param CreateproductsRequest $request
     *
     * @return Response
     */
    public function store(CreateproductsRequest $request)
    {
        $input = $request->all();

        $products = $this->productsRepository->create($input);

        if($request->file('image')){
            $path = Storage::disk('public')->put('Productos',$request->file('image'));
            $products->fill(['image' => asset($path)])->save();

        }

        Flash::success('Producto guardado exitosamente.');

        return redirect(route('products.index'));
    }

    /**
     * Display the specified products.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $products = $this->productsRepository->find($id);

        if (empty($products)) {
            Flash::error('Producto no encontrado.');

            return redirect(route('products.index'));
        }

        return view('products.show')->with('products', $products);
    }

    /**
     * Show the form for editing the specified products.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $products = $this->productsRepository->find($id);

        if (empty($products)) {
            Flash::error('Producto no encontrado.');

            return redirect(route('products.index'));
        }

        return view('products.edit')->with('products', $products);
    }

    /**
     * Update the specified products in storage.
     *
     * @param int $id
     * @param UpdateproductsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateproductsRequest $request)
    {
        $products = $this->productsRepository->find($id);

        if (empty($products)) {
            Flash::error('Producto no encontrado.');

            return redirect(route('products.index'));
        }

        $products = $this->productsRepository->update($request->all(), $id);
        if($request->file('image')){
            $path = Storage::disk('public')->put('Productos',$request->file('image'));
            $products->fill(['image' => asset($path)])->save();

        }
        Flash::success('Producto actualizado exitosamente.');

        return redirect(route('products.index'));
    }

    /**
     * Remove the specified products from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $products = $this->productsRepository->find($id);

        if (empty($products)) {
            Flash::error('Producto no encontrado.');

            return redirect(route('products.index'));
        }

        $this->productsRepository->delete($id);

        Flash::success('Producto eliminado exitosamente.');

        return redirect(route('products.index'));
    }
}
