<div class="col-md-3" style="margin-bottom:30px;">
    <div class="filter-search bg-white">
        <h4 style="margin-bottom:35px;">Filter</h4>
        <form action="" method="post" style="padding:0px 15px;">
            <div class="form-group">
                <label for="brand">Brand</label>
                <input class="form-control" id="brand" type="text" name="brand" placeholder="Search brand">
            </div>
            <div class="form-group">
                <label for="color">Color</label>
                <select class="form-control" name="color" id="color">
                    <option value="">-- All --</option>
                    <option value="1">Merah</option>
                    <option value="3">Kuning</option>
                    <option value="4">Hijau</option>
                    <option value="2">Biru</option>
                </select>
            </div>
            <div class="form-group">
                <label for="size">Size</label>
                <select class="form-control" name="size" id="size">
                    <option value="">-- All --</option>
                    <option value="L">Large</option>
                    <option value="M">Medium</option>
                    <option value="S">Small</option>
                </select>
            </div>
            <div class="form-group">
                <label for="sliderprice">Price</label>
                <input class="form-control" id="sliderprice" type="text" name="sliderprice" data-slider-min="1000" data-slider-max="2000000" data-slider-step="500" data-slider-value="[250,450]">
            </div>
        </form>
        <span class="help-block black-soft price-range">IDR Rp <span id="min-price"></span> - <span id="max-price"></span></span>

        <button id="filter" type="button" class="btn btn-primary" style="width:100%;">Search</button>
    </div>
</div>