<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateProductRequest;
use App\Http\Requests\Admin\UpdateProductRequest;
use App\Repositories\Admin\ProductRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductController extends AppBaseController
{
    /** @var  ProductRepository */
    private $productRepository;
    private $uploadDir = "image/";

    public function __construct(ProductRepository $productRepo)
    {
        $this->productRepository = $productRepo;
    }

    /**
     * Display a listing of the Product.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->productRepository->pushCriteria(new RequestCriteria($request));
        $products = $this->productRepository->all();

        return view('admin.products.index')
            ->with('products', $products);
    }

    /**
     * Show the form for creating a new Product.
     *
     * @return Response
     */
    public function create()
    {
        $categories = DB::connection('mysql2')->table('category_description')->get();

        return view('admin.products.create',compact('categories'));
    }

    /**
     * Store a newly created Product in storage.
     *
     * @param CreateProductRequest $request
     *
     * @return Response
     */
    public function store(CreateProductRequest $request)
    {
        $input = $request->all();

        // $product = $this->productRepository->create($input);

        // dd($product);

        // $category = $this->categoryRepository->create($input);
        // dd($input);

        $input["created_at"]= Carbon::now()->toDateTimeString() ;
        $input["updated_at"]= Carbon::now()->toDateTimeString() ;
    
        // dd($input['title']["ar"]);

        // $banner = $this->bannerRepository->create($input);

        if($request->hasFile("image")){
        $image = $request->file('image');
        $photoName = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path($this->uploadDir), $photoName);
        $input["image"] = $this->uploadDir.$photoName ;
        }


        $product_id = DB::connection('mysql')->table('product')->insertGetId([
            'image' => $input["image"]  ,
            'price' => $input["price"]  ,
            'code' => $input["code"]  ,
            'category_id' => $input["category_id"],
            'created_at' => $input["created_at"],
            'updated_at' => $input["updated_at"]  ]);



        DB::connection('mysql2')->table('product_description')->insert([
            'title' => $input['title']["en"]  ,
            'description' => $input['description']["en"]  ,
            'product_id' => $product_id
        ]);

        DB::connection('mysql3')->table('product_description')->insert([
            'title' => $input['title']["ar"]  ,
            'description' => $input['description']["ar"]  ,
            'product_id' => $product_id
        ]);



        Flash::success('Product saved successfully.');

        return redirect(route('admin.products.index'));
    }

    /**
     * Display the specified Product.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $product = $this->productRepository->findWithoutFail($id);

        if (empty($product)) {
            Flash::error('Product not found');

            return redirect(route('admin.products.index'));
        }



        return view('admin.products.show')->with('product', $product);
    }

    /**
     * Show the form for editing the specified Product.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $product = $this->productRepository->findWithoutFail($id);

        if (empty($product)) {
            Flash::error('Product not found');

            return redirect(route('admin.products.index'));
        }

        $description_en =DB::connection('mysql2')->table('product_description')->where('product_id',$id)->first();
        
        
        $title["ar"] = $description_en->title ;
        $description["ar"] = $description_en->description;

        $description_ar =DB::connection('mysql3')->table('product_description')->where('product_id',$id)->first();
        
        $title["en"] = $description_ar->title ;
        $description["en"] = $description_ar->description;
        
        $categories = DB::connection('mysql2')->table('category_description')->get();
        $product->title = $title ;
        $product->description = $description ;

        return view('admin.products.edit')->with('product', $product)->with('categories',$categories);
    }

    /**
     * Update the specified Product in storage.
     *
     * @param  int              $id
     * @param UpdateProductRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProductRequest $request)
    {
        $product = $this->productRepository->findWithoutFail($id);

        if (empty($product)) {
            Flash::error('Product not found');

            return redirect(route('admin.products.index'));
        }

        // $product = $this->productRepository->update($request->all(), $id);

        $input["updated_at"]= Carbon::now()->toDateTimeString() ;
    
        // dd($input['title']["ar"]);

        // $banner = $this->bannerRepository->create($input);

        if($request->hasFile("image")){
        $image = $request->file('image');
        $photoName = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path($this->uploadDir), $photoName);
        $input["image"] = $this->uploadDir.$photoName ;
        }

        if(empty($input["image"])){
            $updated_product = DB::connection('mysql')->table('product')->where('id', $id)
            ->update([
                'price' => $request->price  ,
                'code' => $request->code ,
                'category_id' => $request->category_id,
                'updated_at' => $input["updated_at"]  ]);    
        }
        else{
            $updated_product = DB::connection('mysql')->table('product')->where('id', $id)
        ->update([
            'image' => $input["image"]  ,
            'price' => $request->price  ,
            'code' => $request->code ,
            'updated_at' => $input["updated_at"]  ]);
        }
        



        DB::connection('mysql2')->table('product_description')->where('product_id', $id)
        ->update([
            'title' => $request->title["en"]  ,
            'description' => $request->description["en"]  ,
        ]);

        DB::connection('mysql3')->table('product_description')->where('product_id', $id)
        ->update([
            'title' => $request->title["ar"]  ,
            'description' => $request->description["ar"]  ,
        ]);


        Flash::success('Product updated successfully.');

        return redirect(route('admin.products.index'));
    }

    /**
     * Remove the specified Product from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $product = \App\Models\Admin\Product::findOrFail($id);



        if (empty($product)) {
            Flash::error('Product not found');

            return redirect(route('admin.products.index'));
        }

        // $this->productRepository->delete($id);

        $product->delete();
        Flash::success('Product deleted successfully.');

        return redirect(route('admin.products.index'));
    }
}
