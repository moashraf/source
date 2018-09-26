<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateCategoryRequest;
use App\Http\Requests\Admin\UpdateCategoryRequest;
use App\Repositories\Admin\CategoryRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Str;

class CategoryController extends AppBaseController
{
    /** @var  CategoryRepository */
    private $categoryRepository;
    private $uploadDir = "categories/";

    public function __construct(CategoryRepository $categoryRepo)
    {
        $this->categoryRepository = $categoryRepo;
    }

    /**
     * Display a listing of the Category.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->categoryRepository->pushCriteria(new RequestCriteria($request));
        $categories = $this->categoryRepository->all();

        return view('admin.categories.index')
            ->with('categories', $categories);
    }

    /**
     * Show the form for creating a new Category.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created Category in storage.
     *
     * @param CreateCategoryRequest $request
     *
     * @return Response
     */
    public function store(CreateCategoryRequest $request)
    {
        $input = $request->all();

        // $category = $this->categoryRepository->create($input);
        // dd($input);

        $input["created_at"]= Carbon::now()->toDateTimeString() ;
        $input["updated_at"]= Carbon::now()->toDateTimeString() ;
    
        // dd($input['title']["ar"]);

        // $banner = $this->bannerRepository->create($input);

        if($request->hasFile("icon")){
        $image = $request->file('icon');
        $photoName = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path($this->uploadDir), $photoName);
        $input["icon"] = $this->uploadDir.$photoName ;
        }


        $category_id = DB::connection('mysql')->table('category')->insertGetId([
            'icon' => $input["icon"]  ,
            'created_at' => $input["created_at"],
            'updated_at' => $input["updated_at"]  ]);



        DB::connection('mysql2')->table('category_description')->insert([
        'name' => $input['name']["en"]  ,
        'category_id' => $category_id
        ]);

        DB::connection('mysql3')->table('category_description')->insert([
        'name' => $input['name']["ar"]  ,
        'category_id' => $category_id
        ]);



        Flash::success('Category saved successfully.');

        return redirect(route('admin.categories.index'));
    }

    /**
     * Display the specified Category.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $category = $this->categoryRepository->findWithoutFail($id);

        if (empty($category)) {
            Flash::error('Category not found');

            return redirect(route('admin.categories.index'));
        }

        return view('admin.categories.show')->with('category', $category);
    }

    /**
     * Show the form for editing the specified Category.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $category = $this->categoryRepository->findWithoutFail($id);

        if (empty($category)) {
            Flash::error('Category not found');
            
            return redirect(route('admin.categories.index'));
        }


        $name["en"] =DB::connection('mysql2')->table('category_description')->where('category_id',$id)
        ->first()->name;
        
        $name["ar"]=DB::connection('mysql3')->table('category_description')->where('category_id',$id)
        ->first()->name;

        $category["name"] = $name ;
        


        return view('admin.categories.edit')->with('category', $category);
    }

    /**
     * Update the specified Category in storage.
     *
     * @param  int              $id
     * @param UpdateCategoryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCategoryRequest $request)
    {
        $category = $this->categoryRepository->findWithoutFail($id);

        if (empty($category)) {
            Flash::error('Category not found');

            return redirect(route('admin.categories.index'));
        }

        $input["updated_at"]= Carbon::now()->toDateTimeString() ;
    
        // dd($input['title']["ar"]);

        // $banner = $this->bannerRepository->create($input);

        if($request->hasFile("icon")){
        $image = $request->file('icon');
        $photoName = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path($this->uploadDir), $photoName);
        $input["icon"] = $this->uploadDir.$photoName ;
        }

        if(!empty($input["icon"])){
            $updated_product = DB::connection('mysql')->table('category')->where('id', $id)
            ->update([
                'icon' => $input["icon"]  ,
                'updated_at' => $input["updated_at"]  ]);  
            }


        DB::connection('mysql2')->table('category_description')->where('category_id', $id)
        ->update([
            'name' => $request->name["en"]  ,
        ]);

        DB::connection('mysql3')->table('category_description')->where('category_id', $id)
        ->update([
            'name' => $request->name["ar"]  ,
        ]);

        Flash::success('Category updated successfully.');

        return redirect(route('admin.categories.index'));
    }

    /**
     * Remove the specified Category from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $category = $this->categoryRepository->findWithoutFail($id);

        if (empty($category)) {
            Flash::error('Category not found');

            return redirect(route('admin.categories.index'));
        }

        $this->categoryRepository->delete($id);

        Flash::success('Category deleted successfully.');

        return redirect(route('admin.categories.index'));
    }
}
