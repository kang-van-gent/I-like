<!-- Modal -->
<div class="modal fade " id="blogModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">
            <form method="POST" enctype="multipart/form-data" action="{{url('/admin/create-blog')}}">@csrf
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="myModalLabel">เพิ่มบทความใหม่</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body" id="modal-blog-form">
                    <div class="form-group">
                        <label for="input-styles1">รูปปก<span class="text-danger">*</span></label>
                        <div class="position-relative">
                            <input class="form-control" name="cover" id="input-styles1" type="file">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input-styles2">หัวข้อ <span class="text-danger">*</span></label>
                        <div class="position-relative">
                            <input class="form-control" name="topic" id="input-styles2" type="text" placeholder="หัวข้อ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input-styles3">รูป Cover<span class="text-danger">*</span></label>
                        <div class="position-relative">
                            <input class="form-control" name="header" id="input-styles3" type="file">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input-styles4">รายละเอียด<span class="text-danger">*</span></label>
                        <div class="position-relative">
                            <input class="form-control" name="details" id="input-styles4" type="text" placeholder="รายละเอียด">
                        </div>
                    </div>

                    <div id="articles-container">
                        <article class="accent-box p-4 mt-4" id="artc-1" name="paragraphs[]">
                            <p class="accent-box-text">ย่อหน้าที่ 1</p>
                            <div class="form-group">
                                <label for="input-styles5">รูปภาพ<span class="text-danger">*</span></label>
                                <div class="position-relative">
                                    <input class="form-control" name="paragraphs[0][paraImg]" id="input-styles5" type="file">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-styles6">ย่อหน้า <span class="text-danger">*</span></label>
                                <div class="position-relative">
                                    <textarea class="form-control form-control-has-validation" id="input-styles6" name="paragraphs[0][details]"></textarea>
                                </div>
                            </div>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                                <button class="btn btn-danger btn-sm remove-btn" type="button">ลบออก</button>
                            </div>
                        </article>
                        <!-- Add more articles as needed -->
                    </div>


                </div>



                <div class="d-grid gap-2 mt-4 p-3">
                    <button class="btn btn-secondary btn-outline" type="button" onclick="addParagraph()">
                        <div class="icon-box-icon novi-icon fa-plus"></div> &nbsp เพิ่มย่อหน้า
                    </button>
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