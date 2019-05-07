<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Carbon\Carbon;

class CreateRestaurantReviewTable extends Migration
{

    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',200);
            $table->string('logo',200);
            $table->integer('votes')->default(0);
            $table->timestamps();
        });

        $date = Carbon::now();
        $restaurants = [
            ['name'=>'Abu Jbara','logo'=>'https://hsaa.hsobjects.com/h/restaurants/logo_ars/000/007/087/587b3295f6ee7b21e1753ea17a241cdb-original.jpg'],
            ['name'=>'Tokyo Restaurant','logo'=>'https://resdiary.blob.core.windows.net/uploads/uk/12387/images/16906/Portal/Fullsize/img73859.jpg'],
            ['name'=>'Sultan Steakhouse','logo'=>'http://destinationlisting.com/wp-content/uploads/2015/11/sultan.png'],
            ['name'=>'Outback Steakhouse','logo'=>'https://i.vimeocdn.com/portrait/24543703_300x300'],
            ['name'=>'Piatto','logo'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDbncPBjkR614wxTeO3DRAbfVJFfoRtLAFwrZuGwU_wLT2jN5l'],
            ['name'=>'Najd Village','logo'=>'http://najdvillage.munajemdev.com/wp-content/uploads/2017/10/logo-light-embossed-200x200.png'],
            ['name'=>'Burgerizzer','logo'=>'https://www.eyeofriyadh.com/directory/images/2018/04/29cb144067c68.jpg'],
            ['name'=>'Shawaya House','logo'=>'https://hsaa.hsobjects.com/h/restaurants/logos/000/003/518/05bf889995490393bc3edcaabb45a02d-original.jpg'],
        ];

        foreach ($restaurants as $item) {
            DB::table('restaurants')->insert(
                array(
                    'name' => $item['name'],
                    'logo' => $item['logo'],
                    'created_at' => $date,
                    'updated_at' => $date,
                )
            );
        }

    }

    public function down()
    {
        Schema::dropIfExists('restaurants');
    }
}
