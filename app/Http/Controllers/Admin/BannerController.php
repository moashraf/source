<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateBannerRequest;
use App\Http\Requests\Admin\UpdateBannerRequest;
use App\Repositories\Admin\BannerRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BannerController extends AppBaseController
{
    /** @var  BannerRepository */
    private $bannerRepository;
    private $uploadDir = "banners";
    public function __construct(BannerRepository $bannerRepo)
    {
        $this->bannerRepository = $bannerRepo;
    }

    /**
     * Display a listing of the Banner.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->bannerRepository->pushCriteria(new RequestCriteria($request));
        $banners = $this->bannerRepository->all();
        
        return view('admin.banners.index')
            ->with('banners', $banners);
    }

    /**
     * Show the form for creating a new Banner.
     *
     * @return Response
     */
    public function create()
    {
        $categories = DB::connection('mysql2')->table('category_description')->get();
        $products = DB::connection('mysql2')->table('product_description')->get();


        return view('admin.banners.create',compact('categories','products'));
    }

    /**
     * Store a newly created Banner in storage.
     *
     * @param CreateBannerRequest $request
     *
     * @return Response
     */
    public function store(CreateBannerRequest $request)
    {
        $input = $request->all();
        $input["created_at"]= Carbon::now()->toDateTimeString() ;
        $input["updated_at"]= Carbon::now()->toDateTimeString() ;
    
        // dd($input['title']["ar"]);

        // $banner = $this->bannerRepository->create($input);

        if($request->hasFile("image")){
        $image = $request->file('image');
        $photoName = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path($this->uploadDir), $photoName);
        $input["image"] = $this->uploadDir."/".$photoName ;
        }
        

        $banner_id = DB::connection('mysql')->table('banner')->insertGetId([
                                                   'criteria' => $input["criteria"]  ,
                                                   'location' => $input["location"]  ,
                                                   'route' =>    $input["route"] ,
                                                   'image' =>    $input["image"],
                                                   'created_at' => $input["created_at"],
                                                   'updated_at' => $input["updated_at"]  ]);

        

        DB::connection('mysql2')->table('banner_description')->insert([
            'title' => $input['title']["en"]  ,
            'banner_id' => $banner_id
           ]);

        DB::connection('mysql3')->table('banner_description')->insert([
            'title' => $input['title']["ar"]  ,
            'banner_id' => $banner_id
           ]);




        Flash::success('Banner saved successfully.');

        return redirect(route('admin.banners.index'));
    }

    /**
     * Display the specified Banner.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $banner = $this->bannerRepository->findWithoutFail($id);

        if (empty($banner)) {
            Flash::error('Banner not found');
        
            return redirect(route('admin.banners.index'));
        }


       


        return view('admin.banners.show')->with('banner', $banner);
    }

    /**
     * Show the form for editing the specified Banner.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {

        $banner = $this->bannerRepository->findWithoutFail($id);
        
        if (empty($banner)) {
            Flash::error('Banner not found');
            
            return redirect(route('admin.banners.index'));
        }

        $categories = DB::connection('mysql2')->table('category_description')->get();
        $products = DB::connection('mysql2')->table('product_description')->get();

        $name["en"] =DB::connection('mysql2')->table('banner_description')->where('banner_id',$id)->first()->title;
        
        $name["ar"]=DB::connection('mysql3')->table('banner_description')->where('banner_id',$id)->first()->title;

        $banner["title"] = $name ;


        return view('admin.banners.edit',compact('categories','products'))->with('banner', $banner);
    }

    /**
     * Update the specified Banner in storage.
     *
     * @param  int              $id
     * @param UpdateBannerRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBannerRequest $request)
    {
        $banner = $this->bannerRepository->findWithoutFail($id);

        if (empty($banner)) {
            Flash::error('Banner not found');

            return redirect(route('admin.banners.index'));
        }

        $banner["updated_at"]= Carbon::now()->toDateTimeString() ;
        
        // dd($input['title']["ar"]);

        // $banner = $this->bannerRepository->create($input);

        if(request('')->hasFile("image")){
        $image = $request->file('image');
        $photoName = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path($this->uploadDir), $photoName);
        $banner["image"] = $this->uploadDir."/".$photoName ;
        }
        
        $banner["criteria"] = $request->criteria ;
        $banner["location"] = $request->location ;
        $banner["route"] = $request->route ;
        
        $banner->save();

        $banner_description_ar = DB::connection('mysql2')->table('banner_description')->where('banner_id','=',$id);
        $banner_description_en = DB::connection('mysql3')->table('banner_description')->where('banner_id','=',$id);


        $banner_description_update = DB::connection('mysql2')->table('banner_description')->update($banner_description_ar);
        $banner_description_update = DB::connection('mysql3')->table('banner_description')->update($banner_description_en);

        Flash::success('Banner updated successfully.');

        return redirect(route('admin.banners.index'));
    }

    /**
     * Remove the specified Banner from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $banner = $this->bannerRepository->findWithoutFail($id);

        if (empty($banner)) {
            Flash::error('Banner not found');

            return redirect(route('admin.banners.index'));
        }

        $this->bannerRepository->delete($id);

        Flash::success('Banner deleted successfully.');

        return redirect(route('admin.banners.index'));
    }
}
