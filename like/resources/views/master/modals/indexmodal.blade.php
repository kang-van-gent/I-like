<!-- Modal -->
<div class="modal fade " id="myModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="myModalLabel">แก้ไขข้อมูล</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="form-group">
                    <label for="input-styles2">Thumpnail Image<span class="text-danger">*</span></label>
                    <div class="position-relative">
                        <input class="form-control" id="input-styles2" type="file">
                    </div>
                </div>
                <div class="form-group">
                    <label for="input-styles1">Topic <span class="text-danger">*</span></label>
                    <div class="position-relative">
                        <input class="form-control" id="input-styles1" type="text" placeholder="Topic">
                    </div>
                </div>
                <div class="form-group">
                    <label for="input-styles2">Cover Image<span class="text-danger">*</span></label>
                    <div class="position-relative">
                        <input class="form-control" id="input-styles2" type="file">
                    </div>
                </div>
                <div class="form-group">
                    <label for="input-styles1">Details<span class="text-danger">*</span></label>
                    <div class="position-relative">
                        <input class="form-control" id="input-styles1" type="text" placeholder="Details">
                    </div>
                </div>

                <article class="accent-box p-4 mt-4">
                    <p class="accent-box-text">Paragraph 1</p>
                    <div class="form-group">
                        <label for="input-styles2">Image<span class="text-danger">*</span></label>
                        <div class="position-relative">
                            <input class="form-control" id="input-styles2" type="file">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input-styles1">paragraph <span class="text-danger">*</span></label>
                        <div class="position-relative">
                            <textarea class="form-control form-control-has-validation" id="input-question" name="question"></textarea>
                        </div>
                    </div>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                        <button class="btn btn-danger btn-sm" type="button">delete</button>
                    </div>

                </article>



                <div class="d-grid gap-2 mt-4">
                    <button class="btn btn-secondary btn-outline" type="button">
                        <div class="icon-box-icon novi-icon fa-plus"></div> &nbsp Add paragraph
                    </button>
                </div>
            </div>
            <div class="modal-footer">
                <div class="d-grid gap-2 d-md-flex justify-content-end">
                    <button class="btn btn-danger" type="button" data-bs-dismiss="modal">ยกเลิก</button>
                    <button class="btn btn-primary m-0" type="button">บันทึก</button>
                </div>
            </div>

        </div>
    </div>
</div>