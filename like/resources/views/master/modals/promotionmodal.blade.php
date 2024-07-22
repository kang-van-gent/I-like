<!-- Modal -->
<div class="modal fade " id="promotionModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="myModalLabel">เพิ่มโปรโมชั่นใหม่</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form method="POST" enctype="multipart/form-data" action="{{url('/admin/create-promotion')}}">@csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="input-styles2">รูปปก<span class="text-danger">*</span></label>
                        <div class="position-relative">
                            <input class="form-control" name="img" id="input-styles2" type="file">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input-styles1">ชื่อโปรโมชั่น <span class="text-danger">*</span></label>
                        <div class="position-relative">
                            <input class="form-control" name="details" id="input-styles1" type="text" placeholder="ชื่อโปรโมชั่น">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="input-styles1">ราคา<span class="text-danger">*</span></label>
                        <div class="position-relative">
                            <input class="form-control" name="price" id="input-styles1" type="number" placeholder="ราคา">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <div class="d-grid gap-2 d-md-flex justify-content-end">
                        <button class="btn btn-danger" type="button" data-bs-dismiss="modal">ยกเลิก</button>
                        <button class="btn btn-primary m-0" type="submit">บันทึก</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>