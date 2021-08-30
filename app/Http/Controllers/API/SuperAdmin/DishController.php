<?php

namespace App\Http\Controllers\API\SuperAdmin;

use App\Models\Dish;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDishRequest;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDishRequest $request)
    {
        $dish = new Dish();
        $dish->menu_id = (int) $request->input('menu_id');
        $dish->name = $request->input('name');
        $dish->description = $request->input('description');
        $dish->chef_note = $request->input('chef_note');
        $dish->price = (float) $request->input('price');
        $dish->currency = 'AUD';
        // Upload image 1
        if (request()->has('image_1')) {
            $image = request()->file('image_1');
            //get File with extension
            $filenameWithExt = $image->getClientOriginalName();
            //get just the file name.
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get file extension
            $extension = $request
                ->file('image_1')
                ->getClientOriginalExtension();
            //file name to store
            $name = $filename . '_' . time() . '.' . $extension;
            $folder = '/uploads/dishes';
            $filePath = $this->uploadOne($image, $folder, $name);
            $dish->image_1 = $filePath;
        }
        // Upload image 2
        if (request()->has('image_2')) {
            $image = request()->file('image_2');
            $filenameWithExt = $image->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request
                ->file('image_2')
                ->getClientOriginalExtension();
            $folder = '/uploads/dishes';
            $name = $filename . '.' . $extension;
            $filePath = $this->uploadOne($image, $folder, $name);
            $dish->image_2 = $filePath;
        }
        // Upload image 3
        if (request()->has('image_3')) {
            $image = request()->file('image_3');
            $filenameWithExt = $image->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request
                ->file('image_3')
                ->getClientOriginalExtension();
            $name = $filename . '_' . time() . '.' . $extension;
            $filePath = $this->uploadOne($image, $folder, $name);
            $dish->image_3 = $filePath;
        }
        $dish->selected_image = 1;
        $dish->active = true;
        $dish->save();

        if ($dish) {
            //Create Sauce
            $sauces_inputs = $request->get('Sauce');
            if ($sauces_inputs) {
                foreach ($sauces_inputs as $sauce) {
                    $dish->sauces()->create([
                        'name' => $sauce['name'],
                        'price' => (float) ($sauce['price'] ?? 0.00),
                    ]);
                }
            }
            //Create Toppings
            $topping_inputs = $request->get('Topping');
            if ($topping_inputs) {
                foreach ($topping_inputs as $topping) {
                    $dish->toppings()->create([
                        'name' => $topping['name'],
                        'price' => (float) ($topping['price'] ?? 0.00),
                    ]);
                }
            }
            //Create Cooking Preference
            $CK_inputs = $request->input('CKPref');
            if ($CK_inputs) {
                foreach ($CK_inputs as $CK) {
                    $dish->cookingpreferences()->create([
                        'name' => $CK,
                    ]);
                }
            }
            //Create Side Dish
            $SD_inputs = $request->input('SD');
            if ($SD_inputs) {
                $index = 1;
                foreach ($SD_inputs as $key => $SD) {
                    // Upload image 1
                    $imagePath = '/uploads/sidedishes/placeholder.jpg';
                    if (request()->hasfile('SD.' . $key . '.img')) {
                        $img = request()->file('SD.' . $key . '.img');
                        $imagename =
                        $dish->id .
                        $index .
                        '_img' .
                        '.' .
                        $img->getClientOriginalExtension();
                        $folderToStore = '/uploads/sidedishes';
                        $imagePath = $this->uploadOne($img, $folderToStore, $imagename);
                    }
                    $index++;
                    $dish->sidedishes()->create([
                        'name' => $SD['name'],
                        'price' => (float) ($SD['price'] ?? 0.0),
                        'image' => $imagePath,
                    ]);
                }
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
