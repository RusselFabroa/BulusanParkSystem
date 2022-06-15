<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Reserve Tree House</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                <div class="container px-4 px-lg-5 mt-5">
                    <!-- <strong> <h3> Cottage</h3></strong> -->
                    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                        <div class="col mb-5" style="position: relative; top: -2rem">
                            <div class="card h-100"   style="background-color: #f8d9d9; width: 600px; position: relative; left: -10rem">
                                <!-- Product image-->
{{--                                <img class="card-img-top" style="width: 593px; padding: 10px; height: 400px" src="{{asset('uploads/cottages/'.$cottages->cottage_image)}}"alt="..." />--}}

                                <form method="post" action=""  enctype="multipart/form-data">
                                    @csrf

                                    <input type="hidden"  name="cottage_id" value="">
                                    <input type="hidden" id="price"  name="price" value="">

                                    <label for="date" style="position: relative; left: -4rem;">Date:</label>
                                    <input type="date" style="width: 400px; height: 34px" id="date" name="date" value=""><br><br>
                                    <label for="date"  style="position: relative; left: -4rem">Mobile No:</label>
                                    <input type="number"   style="width: 400px; height: 34px; position: relative; top: -30px; left: 42px" id="mobilenumber" name="mobilenumber" value="" required="">
                                    <label for="address"  style="position: relative; left: -4rem">Address:</label>
                                    <input type="text"  style="width: 400px; height: 34px; position: relative; top: -30px; left: 42px" id="address" name="address" value="" required=""><br><br>
                                    <label for="note"  style="position: relative; left: -4rem; top: -60px">Note:</label>
                                    <textarea rows="4" style="width: 400px; height: 65px; position: relative; top: -30px;" id="note" name="note" ></textarea><br><br>
                                    <input type="submit" value="Submit">
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
