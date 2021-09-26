  // for uploading image method
    private function makeUploadImage($image,$path){
        //get upload image extension
        $extension     = $image->getClientOriginalExtension();

        //create new image name
        $image_new_name = time()."slider_".'.'.$extension;

        //resize the upload image via Image facades
        $resize_image = Image::make($image->getRealPath())->resize(700,500);

        //save resize image in specific path
        $resize_image->save(public_path($path.$image_new_name));

        //then return image;
        return $image_new_name;
    }//end method
