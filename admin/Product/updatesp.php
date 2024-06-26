<?php
if (is_array($Product)) {
    extract($Product);
    $image2 = "../upload/" . $image2;
}
?>
<div class="home mt-5 px-40 py-10 mr-8 bg-[#F4F6FA] h-auto rounded">
    <div class="ad-r">
        <div class="grid grid-cols-2 justify-between">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: #1884C7;">
                    <path d="M19 8h-2v3h-3v2h3v3h2v-3h3v-2h-3zM4 8a3.91 3.91 0 0 0 4 4 3.91 3.91 0 0 0 4-4 3.91 3.91 0 0 0-4-4 3.91 3.91 0 0 0-4 4zm6 0a1.91 1.91 0 0 1-2 2 1.91 1.91 0 0 1-2-2 1.91 1.91 0 0 1 2-2 1.91 1.91 0 0 1 2 2zM4 18a3 3 0 0 1 3-3h2a3 3 0 0 1 3 3v1h2v-1a5 5 0 0 0-5-5H7a5 5 0 0 0-5 5v1h2z">
                    </path>
                </svg>
                <h1 class="text-[20px] mx-4 font-semibold text-sky-600 my-5">Update Products</h1>
            </div>
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: #5fe6c2;">
                    <path d="M15 11h7v2h-7zm1 4h6v2h-6zm-2-8h8v2h-8zM4 19h10v-1c0-2.757-2.243-5-5-5H7c-2.757 0-5 2.243-5 5v1h2zm4-7c1.995 0 3.5-1.505 3.5-3.5S9.995 5 8 5 4.5 6.505 4.5 8.5 6.005 12 8 12z">
                    </path>
                </svg>
                <a href="index.php?act=listsp" class="text-[20px] mx-4 font-semibold text-sky-600 ">Danh
                    sách</a>
            </div>

        </div>
        <form action="index.php?act=Update_Product" method="POST" enctype="multipart/form-data">

            <input type="hidden" value="<?= $id ?>" name="id" class="px-10 py-2 rounded-md">
            <input type="hidden" value="<?= $image2 ?>" name="old_image2" class="px-10 py-2 rounded-md">
            <p class="text-[#551AA9] text-[20px] my-4" for="">Product Name</p><input required type="text" value="<?= $product_name ?>" name="product_name" placeholder="LV ...." class="border w-full px-10 rounded-lg py-2 mt-2">

            <p class="text-[#551AA9] text-[20px] my-4" for="">PRICE</p><input required type="text" value="<?= $product_price ?>" name="product_price" placeholder="999$ ...." class="border w-full px-10 rounded-lg py-2 mt-2">

            <p class="text-[#551AA9] text-[20px] my-4" for="">PRICE SALE</p><input required type="text" value="<?= $product_price_sale ?>" name="product_price_sale" placeholder="899$ ...." class="border w-full px-10 rounded-lg py-2 mt-2">


            <p class="text-[#551AA9] text-[20px] my-4" for="">Image</p>
            <img src="<?= $image2 ?>" style="width: 100px; height: 100px;" alt=""><br>
            <input type="file" name="image2" class=" text-[#551AA9] text-[20px] my-2">
            <br><br>
            <label class="uppercase font-1xl text-[#551AA9] text-[20px] my-4">Description</label>
            <br>
            <textarea required cols="30" rows="10" placeholder="Expensive ..." value="" name="description" class="border w-full rounded-lg px-10 py-2 h-48 mt-2"><?= $description ?></textarea>
            <p class="text-[#551AA9] text-[20px] my-4" for="">Origin</p><input required type="text" value="<?= $origin ?>" name="origin" placeholder="Việt Nam." class="border w-full px-10 rounded-lg py-2 mt-2">


            <p class="text-[#551AA9] text-[20px] my-4" for="">Cate_Id</p>
            <select name="id_categories" id="" class="w-full border rounded-lg px-10 py-2">
                <?php
                foreach ($ListCategory as $ListCate) {
                    extract($ListCate);
                ?>
                    <option value="<?= $id  ?>">
                        <?= $categories_name ?>
                    </option>
                <?php
                }
                ?>
            </select>
            <input type="submit" name="btn_update" value="Update" class="bg-[#ff523b] my-10 py-2 px-8 hover:bg-[#BAAACE] hover:text-white rounded-lg">
        </form>
    </div>
</div>
</div>
</div>
</body>

</html>